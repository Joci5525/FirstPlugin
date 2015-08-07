<?php

namespace joci5525\firstplugin;

use pocketmine\plugin\PluginBase;

class FirstPlugin extends PluginBase{
    public function onEnable()
     $this->getLogger()->info("FirstPlugin has been  enabled");
   } 
    
}

public function onDisable(){
    $this->getLogger()->info("FirstPlugin has been  disabled");
  }
}
public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		switch($cmd->getName()){
			case "Tutorial":
        			if($sender->hasPermission("firstplugin.command") or $sender->hasPermission("plugin.command") or $sender->hasPermission("skywars")) { 
					$sender->sendMessage("FirstPlugin");
					return true;
        			}else{
        				$sender->sendMessage("Nincs jogod ezt a parancsot használni!");
        			}
