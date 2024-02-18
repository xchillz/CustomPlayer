<?php

declare(strict_types=1);

namespace customplayer\xchillz\listener;

use customplayer\xchillz\player\CustomPlayer;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerCreationEvent;

final class PlayerCreationListener implements Listener
{

    public function onPlayerCreation(PlayerCreationEvent $event)
    {
        $event->setPlayerClass(CustomPlayer::class);
    }

}