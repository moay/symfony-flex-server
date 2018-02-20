<?php

/*
 * This file is part of the i22 symfony-flex-server package.
 *
 * (c) i22 Digitalagentur GmbH <info@i22.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\RecipeRepo;

use App\Service\Cache;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Class OfficialRecipeRepo
 * @package App\Service\RecipeRepo
 * @author Manuel Voss <manuel.voss@i22.de>
 */
class OfficialRecipeRepo extends RecipeRepo
{
    /** @var string */
    protected $repoDirName = 'official';

    /**
     * OfficialRecipeRepo constructor.
     * @param string $officialRepoUrl
     * @param string $projectDir
     * @param Cache $cache
     * @param LoggerInterface $logger
     */
    public function __construct(
        string $officialRepoUrl,
        string $projectDir,
        Cache $cache,
        LoggerInterface $logger,
        EventDispatcherInterface $eventDispatcher
    ) {
        parent::__construct($officialRepoUrl, $projectDir, $cache, $logger, $eventDispatcher);
    }

}