<?php

namespace me\frogas\join;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\Config;

class JoinMessage extends PluginBase implements Listener {

    public function onEnable(){
        $this->getServer()->getLogger()->info("FrogasJoinMessage Enable by @Frogas");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    
    public function onJoin(PlayerJoinEvent $event){
        $player = $event->getPlayer();
        $player->sendMessage($this->getConfig()->getNested("join.message"));
    }
}
