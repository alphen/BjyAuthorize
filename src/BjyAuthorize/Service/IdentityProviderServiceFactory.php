<?php
/**
 * BjyAuthorize Module (https://github.com/bjyoungblood/BjyAuthorize)
 *
 * @link https://github.com/bjyoungblood/BjyAuthorize for the canonical source repository
 * @license http://framework.zend.com/license/new-bsd New BSD License
 */

namespace BjyAuthorize\Service;

use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Interop\Container\ContainerInterface;

/**
 * Factory responsible of building {@see \BjyAuthorize\Provider\Identity\ProviderInterface}
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 */
class IdentityProviderServiceFactory implements FactoryInterface
{
       
    public function __invoke(
        ContainerInterface $container,
        $requestedName,
        array $options = null
    ){
        $config = $container->get('BjyAuthorize\Config');
        
        return $container->get($config['identity_provider']);
    }
}
