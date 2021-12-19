<?php

namespace ContainerQqUzDTD;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera2afe = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfd1ce = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesaaa10 = [
        
    ];

    public function getConnection()
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'getConnection', array(), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'getMetadataFactory', array(), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'getExpressionBuilder', array(), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'beginTransaction', array(), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'getCache', array(), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'transactional', array('func' => $func), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->transactional($func);
    }

    public function commit()
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'commit', array(), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->commit();
    }

    public function rollback()
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'rollback', array(), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'getClassMetadata', array('className' => $className), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'createQuery', array('dql' => $dql), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'createNamedQuery', array('name' => $name), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'createQueryBuilder', array(), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'flush', array('entity' => $entity), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'clear', array('entityName' => $entityName), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->clear($entityName);
    }

    public function close()
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'close', array(), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->close();
    }

    public function persist($entity)
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'persist', array('entity' => $entity), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'remove', array('entity' => $entity), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'refresh', array('entity' => $entity), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'detach', array('entity' => $entity), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'merge', array('entity' => $entity), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'contains', array('entity' => $entity), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'getEventManager', array(), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'getConfiguration', array(), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'isOpen', array(), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'getUnitOfWork', array(), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'getProxyFactory', array(), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'initializeObject', array('obj' => $obj), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'getFilters', array(), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'isFiltersStateClean', array(), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'hasFilters', array(), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return $this->valueHoldera2afe->hasFilters();
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

        $instance->initializerfd1ce = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera2afe) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera2afe = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera2afe->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, '__get', ['name' => $name], $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        if (isset(self::$publicPropertiesaaa10[$name])) {
            return $this->valueHoldera2afe->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2afe;

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

        $targetObject = $this->valueHoldera2afe;
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
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2afe;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera2afe;
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
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, '__isset', array('name' => $name), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2afe;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera2afe;
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
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, '__unset', array('name' => $name), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2afe;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera2afe;
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
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, '__clone', array(), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        $this->valueHoldera2afe = clone $this->valueHoldera2afe;
    }

    public function __sleep()
    {
        $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, '__sleep', array(), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;

        return array('valueHoldera2afe');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfd1ce = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfd1ce;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfd1ce && ($this->initializerfd1ce->__invoke($valueHoldera2afe, $this, 'initializeProxy', array(), $this->initializerfd1ce) || 1) && $this->valueHoldera2afe = $valueHoldera2afe;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera2afe;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera2afe;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
