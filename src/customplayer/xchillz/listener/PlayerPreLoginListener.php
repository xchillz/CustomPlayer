<?php

declare(strict_types=1);

namespace customplayer\xchillz\listener;

use customplayer\xchillz\Loader;
use customplayer\xchillz\player\CustomPlayer;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerPreLoginEvent;

final class PlayerPreLoginListener implements Listener
{

    /**
     * @priority LOWEST
     */
    public function onPlayerPreLogin(PlayerPreLoginEvent $event)
    {
        /** @var CustomPlayer $player */
        $player = $event->getPlayer();

        $player->setLanguage(Loader::getDefaultLanguage());
    }

}