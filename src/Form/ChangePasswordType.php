<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class ChangePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('lastname', TextType::class, [
                'label' => 'Nom',
                //rendre impossible la modification par l'utilisateur
                'disabled' => true
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'disabled' => true
            ])
            ->add('old_password', PasswordType::class, [
                'label' => 'Mot de passe actuel',
                'required'=>true,
                'mapped'=>false,
                'attr' => [
                    'placeholder' => 'Veuillez saisir votre mot de passe actuel'
                ]
            ])
            ->add('new_password', RepeatedType::class, [
                'type'=> PasswordType::class,
                'mapped'=>false,
                'invalid_message'=>'Le mot de passe et la confirmation doivent être identiques',
                'label' => 'Mon nouveau mot de passe',
                'required'=>true, //obligatoire à remplir
                'constraints'=> new Length([
                    'min' => 8,
                    'max' => 60]),
                'first_options'=>['label'=> 'Mon nouveau mot de passe', 'attr' => ['placeholder'=>'**********']],
                'second_options'=>['label'=> 'Confirmez votre nouveau mot de passe', 'attr' => ['placeholder'=>'**********']]
            ])
            ->add('submit', SubmitType::class, [
                'label' => "Mettre à jour"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
