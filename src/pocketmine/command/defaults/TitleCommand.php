
<?php

 /**
  *     _____            _                _____ 
  *    |  __ \          (_)              |____ |
  *    | |  \/ ___ _ __  _ ___ _   _ ___     / /
  *    | | __ / _ \ '_ \| / __| | | / __|    \ \
  *    | |_\ \  __/ | | | \__ \ |_| \__ \.___/ /
  *     \____/\___|_| |_|_|___/\__, |___/\____/ 
  *                            __/ |           
  *                           |___/            
  *
  * This program is free software: you can redistribute it and/or modify
  * it under the terms of the GNU Lesser General Public License as published by
  * the Free Software Foundation, either version 3 of the License, or
  * (at your option) any later version.
  *
  * @author FrontierDevs
  * @see Genisys3.org
  */
 
 namespace pocketmine\command\defaults;
 
use pocketmine\network\protocol\SetTitlePacket;
use pocketmine\command\CommandSender;

class TitleCommand extends VanillaCommand {

	public function __construct($name){
		parent::__construct(
			$name,
			"%pocketmine.command.title.description",
			"%pocketmine.command.title.usage"
		);
		$this->setPermission("pocketmine.command.title");
	}
  
	public function execute(CommandSender $sender, $currentAlias, array $args){
		if($sender instanceof Player){
			if(!$this->testPermission($sender)){
				return true;
			}
			if(count($args) <= 0){
				$sender->sendMessage("Usage: /title <title> <subtile> [text]");
				return false;
			}
             }
      }
}
