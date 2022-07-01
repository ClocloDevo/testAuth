<?php

namespace App\Controller;

use App\Classe\Mail;
use App\Entity\ResetPassword;
use App\Entity\User;
use App\Form\ResetPasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class ResetPasswordController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/mot-de-passe-oublie', name: 'app_reset_password')]
    public function index(Request $request): Response
    {

        // si l'utilisateur existe, il ne doit pas accéder à la page mot de passe oublié
        if ($this->getUser()){
            return $this->redirectToRoute('app_home');
        }

        if($request->get('email')) {
            //dd($request->get('email'));
            //Vérifier que l'email existe dans la db
            $user = $this->entityManager->getRepository(User::class)->findOneByEmail($request->get('email'));
            //dd($user);
            //Vérifier que l'utilisateur existe
            if ($user) {
                //Enregistrer en base la demande de reset_password avec user, token, createdAt.
                $reset_password = new ResetPassword();
                $reset_password->setUser($user);
                $reset_password->setToken(uniqid());
                $reset_password->setCreatedAt(new \DateTimeImmutable());
                $this->entityManager->persist($reset_password);
                $this->entityManager->flush();

                //Envoyer un email à l'utilisateur avec un lien lui permettant de mettre à jour son mot de passe.
                $url = $this->generateUrl('app_update_password', [
                    'token' => $reset_password->getToken()
                ]);

                $content = "Bonjour " . $user->getLastname() . ",<br>Vous avez demandé à réinitialiser votre mot de passe sur l'application Stegi.<br><br>";
                $content .= "Merci de bien vouloir cliquer sur le lien suivant pour <br><a href='" . $url . "'>mettre à jour votre mot de passe</a>.";

                $mail = new Mail();
                $mail->send($user->getEmail(), $user->getLastname(), 'Stegi - Réinitialiser votre mot de passe',
                $content);
                $this->addFlash('notice', 'Vous allez recevoir dans quelques secondes un mail avec la procédure à suivre pour réinitialiser votre mot de passe.');
            } else {
                    $this->addFlash('notice', 'Cette adresse email est inconnue.');
            }
        }
        return $this->render('reset_password/index.html.twig');
    }


    #[Route('/modifier-mon-mot-de-passe/{token}', name: 'app_update_password')]
    public function update(Request $request, $token, UserPasswordHasherInterface $hasher): Response
    {
        //dd($token);
        $reset_password = $this->entityManager->getRepository(ResetPassword::class)->findOneByToken($token);

        if (!$reset_password) {
            // Equivalent à quelque chose ne s'est pas passé correctement.
            return $this->redirectToRoute('app_reset_password');
        }
        // Vérifier si le createdAt = (maintenant - 3h)
        $now = new \DateTime();
        if($now > $reset_password->getCreatedAt()->modify('+ 3 hour')) {
            //die('on est pas bon');
            //le token a expiré
            $this->addFlash('notice', 'Votre demande de mot de passe a expiré. Merci de la renouveller.');
            return $this->redirectToRoute('app_reset_password');
        }

        // Rendre une vue avec mot de passe et confirmez votre mot de passe.
        $form = $this->createForm(ResetPasswordType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $new_pwd = $form->get('new_password')->getData();
            //dd($new_pwd);

            // Encodage des mots de passe
            $password = $hasher->hashPassword($reset_password->getUser(), $new_pwd);
            $reset_password->getUser()->setPassword($password);

            // Flush en db
            $this->entityManager->flush();

            // Redirection de l'utilisateur vers la page de connection
            $this->addFlash('notice', 'Votre mot de passe a bien été mis à jour.');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('reset_password/update.html.twig', [
            'form' => $form->createView()
        ]);

        //dd($reset_password);
    }
}
