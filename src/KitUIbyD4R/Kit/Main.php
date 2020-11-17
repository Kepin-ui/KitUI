<?php

namespace KitUIbyD4R\Kit;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

use pocketmine\item\Item;

class main extends PluginBase implements Listener {


	public function onEnable(){

	}

	public function onCommand(CommandSender $sender, Command $cmd, String $Label, Array $args) : bool {

		switch($cmd->getName()){
			case "kit":
			if($sender instanceof Player){
				if(!isset($args[0])){
					$sender->sendMessage("Please use /kit [kitname]");
					return true;
				} else {
					switch(strtolower($args[0])){
						case "basic":
						$sword = Item::get(268, 0, 1);
						$helmet = Item::get(298, 0, 1);
						$chestplate = Item::get(299, 0, 1);
						$leggings = Item::get(300, 0, 1);
						$boots = Item::get(301, 0, 1);
						$sender->getInventory()->clearAll();
						$sender->getArmorInventory()->clearAll();
						$sender->getInventory()->addItem($sword);
						$sender->getArmorInventory()->setHelmet($helmet);
						$sender->getArmorInventory()->setChestplate($chestplate);
						$sender->getArmorInventory()->setLeggings($leggings);
						$sender->getArmorInventory()->setBoots($boots);
						$sender->sendMessage("You've claim kit basic")
						break;
					}
				}
			}
		}
	return true;
	}

}