<?php
/**
 * BjyAuthorize Module (https://github.com/bjyoungblood/BjyAuthorize)
 *
 * @link https://github.com/bjyoungblood/BjyAuthorize for the canonical source repository
 * @license http://framework.zend.com/license/new-bsd New BSD License
 */

namespace BjyAuthorize\Service;

use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\Db\TableGateway\TableGateway;
use Interop\Container\ContainerInterface;

/**
 * @author Simone Castellaneta <s.castel@gmail.com>
 * 
 * @return \Zend\Db\TableGateway\TableGateway
 */
class UserRoleServiceFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     * 
     * @return \Zend\Db\TableGateway\TableGateway
     */
    public function __invoke(
        ContainerInterface $container,
        $requestedName,
        array $options = null
    ){
        return new TableGateway('user_role', $container->get('bjyauthorize_zend_db_adapter'));
    }
}
