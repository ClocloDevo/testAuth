<?php

namespace ContainerNvu5g2f;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc9494 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer59cad = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties859f1 = [
        
    ];

    public function getConnection()
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'getConnection', array(), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'getMetadataFactory', array(), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'getExpressionBuilder', array(), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'beginTransaction', array(), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'getCache', array(), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->getCache();
    }

    public function transactional($func)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'transactional', array('func' => $func), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'wrapInTransaction', array('func' => $func), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'commit', array(), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->commit();
    }

    public function rollback()
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'rollback', array(), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'getClassMetadata', array('className' => $className), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'createQuery', array('dql' => $dql), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'createNamedQuery', array('name' => $name), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'createQueryBuilder', array(), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'flush', array('entity' => $entity), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'clear', array('entityName' => $entityName), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->clear($entityName);
    }

    public function close()
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'close', array(), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->close();
    }

    public function persist($entity)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'persist', array('entity' => $entity), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'remove', array('entity' => $entity), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'refresh', array('entity' => $entity), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'detach', array('entity' => $entity), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'merge', array('entity' => $entity), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'getRepository', array('entityName' => $entityName), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'contains', array('entity' => $entity), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'getEventManager', array(), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'getConfiguration', array(), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'isOpen', array(), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'getUnitOfWork', array(), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'getProxyFactory', array(), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'initializeObject', array('obj' => $obj), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'getFilters', array(), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'isFiltersStateClean', array(), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'hasFilters', array(), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return $this->valueHolderc9494->hasFilters();
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

        $instance->initializer59cad = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc9494) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc9494 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc9494->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, '__get', ['name' => $name], $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        if (isset(self::$publicProperties859f1[$name])) {
            return $this->valueHolderc9494->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9494;

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

        $targetObject = $this->valueHolderc9494;
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
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9494;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc9494;
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
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, '__isset', array('name' => $name), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9494;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc9494;
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
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, '__unset', array('name' => $name), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc9494;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc9494;
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
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, '__clone', array(), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        $this->valueHolderc9494 = clone $this->valueHolderc9494;
    }

    public function __sleep()
    {
        $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, '__sleep', array(), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;

        return array('valueHolderc9494');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer59cad = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer59cad;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer59cad && ($this->initializer59cad->__invoke($valueHolderc9494, $this, 'initializeProxy', array(), $this->initializer59cad) || 1) && $this->valueHolderc9494 = $valueHolderc9494;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc9494;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc9494;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
