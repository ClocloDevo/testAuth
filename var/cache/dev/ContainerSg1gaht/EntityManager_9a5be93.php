<?php

namespace ContainerSg1gaht;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4dc7f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer18a81 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa5a12 = [
        
    ];

    public function getConnection()
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'getConnection', array(), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'getMetadataFactory', array(), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'getExpressionBuilder', array(), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'beginTransaction', array(), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'getCache', array(), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'transactional', array('func' => $func), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'commit', array(), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->commit();
    }

    public function rollback()
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'rollback', array(), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'getClassMetadata', array('className' => $className), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'createQuery', array('dql' => $dql), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'createNamedQuery', array('name' => $name), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'createQueryBuilder', array(), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'flush', array('entity' => $entity), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'clear', array('entityName' => $entityName), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->clear($entityName);
    }

    public function close()
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'close', array(), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->close();
    }

    public function persist($entity)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'persist', array('entity' => $entity), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'remove', array('entity' => $entity), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'refresh', array('entity' => $entity), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'detach', array('entity' => $entity), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'merge', array('entity' => $entity), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'contains', array('entity' => $entity), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'getEventManager', array(), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'getConfiguration', array(), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'isOpen', array(), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'getUnitOfWork', array(), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'getProxyFactory', array(), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'initializeObject', array('obj' => $obj), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'getFilters', array(), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'isFiltersStateClean', array(), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'hasFilters', array(), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return $this->valueHolder4dc7f->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer18a81 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4dc7f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4dc7f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4dc7f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, '__get', ['name' => $name], $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        if (isset(self::$publicPropertiesa5a12[$name])) {
            return $this->valueHolder4dc7f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4dc7f;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4dc7f;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4dc7f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4dc7f;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, '__isset', array('name' => $name), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4dc7f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4dc7f;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, '__unset', array('name' => $name), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4dc7f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4dc7f;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, '__clone', array(), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        $this->valueHolder4dc7f = clone $this->valueHolder4dc7f;
    }

    public function __sleep()
    {
        $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, '__sleep', array(), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;

        return array('valueHolder4dc7f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer18a81 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer18a81;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer18a81 && ($this->initializer18a81->__invoke($valueHolder4dc7f, $this, 'initializeProxy', array(), $this->initializer18a81) || 1) && $this->valueHolder4dc7f = $valueHolder4dc7f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4dc7f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4dc7f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
