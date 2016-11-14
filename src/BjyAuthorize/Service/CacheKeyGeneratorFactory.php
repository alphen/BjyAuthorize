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
 * Factory for building a cache key generator
 *
 * @author Steve Rhoades <sedonami@gmail.com>
 */
class CacheKeyGeneratorFactory implements FactoryInterface
{
    
    public function __invoke(
        ContainerInterface $container,
        $requestedName,
        array $options = null
    ){
        $config     = $container->get('BjyAuthorize\Config');
        $cacheKey   = empty($config['cache_key']) ? 'bjyauthorize_acl' : (string) $config['cache_key'];
        
        return function () use ($cacheKey) {
            return $cacheKey;
        };
    }
}
