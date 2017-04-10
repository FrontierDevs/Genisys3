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


namespace pocketmine\entity;

use pocketmine\Player;
use pocketmine\network\protocol\AddEntityPacket;
use pocketmine\network\protocol\MobArmorEquipmentPacket;

class Llama extends Living{

	const NETWORK_ID = 29;

	public function getName() : string{
		return "Llama";
	}
	
	public function setChestPlate($id){
		/*	
		416, 417, 418, 419 only
		*/
		$pk = new MobArmorEquipmentPacket();
		$pk->eid = $this->getId();
		$pk->slots = [
		ItemItem::get(0,0),
		ItemItem::get($id,0),
		ItemItem::get(0,0),
		ItemItem::get(0,0)
		];
		foreach($this->level->getPlayers() as $player){
			$player->dataPacket($pk);
		}
	}
	
	public function spawnTo(Player $player){
		$pk = new AddEntityPacket();
		$pk->eid = $this->getId();
		$pk->type = self::NETWORK_ID;
		$pk->x = $this->x;
		$pk->y = $this->y;
		$pk->z = $this->z;
		$pk->speedX = $this->motionX;
		$pk->speedY = $this->motionY;
		$pk->speedZ = $this->motionZ;
		$pk->yaw = $this->yaw;
		$pk->pitch = $this->pitch;
		$pk->metadata = $this->dataProperties;
		$player->dataPacket($pk);

		parent::spawnTo($player);
	}

}
