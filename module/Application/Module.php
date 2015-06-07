<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014 Zend Technologies USA Inc. (http://www.zend.com)
 */

namespace Application;

use Doctrine\DBAL\DBALException;
use Doctrine\ORM\EntityManager;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);

        // get service manager
        $serviceManager = $e->getApplication()->getServiceManager();

        /** @var EntityManager $entityManager */
        $entityManager  = $serviceManager->get('Doctrine\ORM\EntityManager');
        $platform = $entityManager->getConnection()->getDatabasePlatform();

        // check if enum Doctrine Type is registered
        try {
            $result = $platform->getDoctrineTypeMapping('enum');
        } catch (DBALException $e) {
            $platform->registerDoctrineTypeMapping('enum', 'string');
        }
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
