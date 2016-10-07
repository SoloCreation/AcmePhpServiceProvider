<?php
/*
 * This file is part of AcmePhpServiceProvider. Licensed under WTFPL
 *
 * (c) Mathieu Duplouy <mathieu.duplouy@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SoloCreation;

use Silex\ServiceProviderInterface;
use Silex\Application;
use Octopuce\Acme\Client;

class AcmePhpServiceProvider implements ServiceProviderInterface
{
    /**
     * @inheritDoc
     */
    public function register(Application $app)
    {
        $app['acme.client'] = $app->share(function ($c) {

            $config = array();
            if (isset($c['acmephpc.config'])) {
                $config = $c['acmephpc.config'];
            }

            return new Client($config);
        });
    }

    /**
     * @inheritDoc
     */
    public function boot(Application $app)
    {

    }
}
