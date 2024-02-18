<?php

declare(strict_types=1);

namespace customplayer\xchillz;

use customplayer\xchillz\listener\PlayerCreationListener;
use customplayer\xchillz\listener\PlayerPreLoginListener;
use languages\xchillz\langs\Language;
use languages\xchillz\LanguageAPI;
use pocketmine\plugin\PluginBase;

final class Loader extends PluginBase
{

    /** @var Language */
    private static $defaultLanguage;

    public function onEnable()
    {
        $this->saveDefaultConfig();

        self::$defaultLanguage = LanguageAPI::getInstance()->getLanguageManager()->getLanguageById(
            $this->getConfig()->get('default-language', 'en_US')
        );

        $this->getServer()->getPluginManager()->registerEvents(new PlayerCreationListener(), $this);
        $this->getServer()->getPluginManager()->registerEvents(new PlayerPreLoginListener(), $this);
    }

    public static function getDefaultLanguage(): Language
    {
        return self::$defaultLanguage;
    }

}