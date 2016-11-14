<?php
/**
 * BjyAuthorize Module (https://github.com/bjyoungblood/BjyAuthorize)
 *
 * @link https://github.com/bjyoungblood/BjyAuthorize for the canonical source repository
 * @license http://framework.zend.com/license/new-bsd New BSD License
 */

namespace BjyAuthorize\Service;

use BjyAuthorize\Provider\Role\Config;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Interop\Container\ContainerInterface;


/**
 * Factory responsible of instantiating {@see \BjyAuthorize\Provider\Role\Config}
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 */
class ConfigRoleProviderServiceFactory implements FactoryInterface
{
    
    public function __invoke(
        ContainerInterface $container,
        $requestedName,
        array $options = null
    ){
        $config = $container->get('BjyAuthorize\Config');
        
        return new Config($config['role_providers']['BjyAuthorize\Provider\Role\Config']);
    }
}
