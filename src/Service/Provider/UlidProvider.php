<?php

/*
 * This file is part of the i22 symfony-flex-server package.
 *
 * (c) i22 Digitalagentur GmbH <info@i22.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Service\Provider;

use Ulid\Ulid;

/**
 * Class UlidProvider
 * @package App\Service\Provider
 * @author Manuel Voss <manuel.voss@i22.de>
 */
class UlidProvider
{
    /**
     * Provides a ulid. Symfony.sh behaviour of uppercasing the ulid is imitated.
     *
     * @return string
     */
    public function provideUlid()
    {
        return strtoupper(Ulid::generate());
    }
}