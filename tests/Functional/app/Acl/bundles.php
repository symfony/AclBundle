<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
    new Symfony\Bundle\AclBundle\AclBundle(),
    new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
    new Symfony\Bundle\AclBundle\Tests\Functional\Bundle\TestBundle\TestBundle(),
];
