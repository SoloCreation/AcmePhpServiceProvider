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

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Octopuce\Acme\Client;

class AcmePhpServiceProvider implements ServiceProviderInterface
{
    /**
     * @inheritDoc
     */
    public function register(Container $pimple)
    {
        $pimple['acme.client'] = function ($c) {

            $config = array();
            if (isset($c['acmephpc.config'])) {
                $config = $c['acmephpc.config'];
            }

            return new Client($config);
        };
    }

}
