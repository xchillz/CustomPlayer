<?php

declare(strict_types=1);

namespace customplayer\xchillz;

use customplayer\xchillz\listener\PlayerCreationListener;
use customplayer\xchillz\listener\PlayerPreLoginListener;
use pocketmine\plugin\PluginBase;

final class Loader extends PluginBase
{

    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents(new PlayerCreationListener(), $this);
        $this->getServer()->getPluginManager()->registerEvents(new PlayerPreLoginListener(), $this);
    }

}