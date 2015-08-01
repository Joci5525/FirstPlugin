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
        			if($sender->hasPermission("tutorial.command.howto") or $sender->hasPermission("tut.command") or $sender->hasPermission("skywars")) { 
					$sender->sendMessage("----FirstPlugin----");
					$sender->sendMessage("/tut = Joci5525 ");
					return true;
        			}else{
        				$sender->sendMessage("You haven't the permission to run this command");
        			}
