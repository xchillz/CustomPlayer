<?php

declare(strict_types=1);

namespace customplayer\xchillz\player;

use languages\xchillz\langs\Language;
use pocketmine\Player;

abstract class CustomPlayer extends Player
{

    /** @var Language */
    private $language;

    public function setLanguage(Language $language)
    {
        $this->language = $language;
    }

    public function getLanguage(): Language
    {
        return $this->language;
    }

    public function getLowerCaseName(): string
    {
        return $this->iusername;
    }

}