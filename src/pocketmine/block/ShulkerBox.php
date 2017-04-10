<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____  
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \ 
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/ 
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_| 
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 * 
 *
*/

namespace pocketmine\block;


use pocketmine\item\Tool;

class ShulkerBox extends Solid{

	protected $id = self::SHULKER_BOX;
	
	const SHULKER_BOX_WHITE = 0;
	const SHULKER_BOX_ORANGE = 1;
	const SHULKER_BOX_MAGENTA = 2;
	const SHULKER_BOX_LIGHT_BLUE = 3;
	const SHULKER_BOX_YELLOW = 4;
	const SHULKER_BOX_LIME = 5;
	const SHULKER_BOX_PINK = 6;
	const SHULKER_BOX_GRAY = 7;
	const SHULKER_BOX_LIGHT_GRAY = 8;
	const SHULKER_BOX_CYAN = 9;
	const SHULKER_BOX_PURPLE = 10;
	const SHULKER_BOX_BLUE = 11;
	const SHULKER_BOX_BROWN = 12;
	const SHULKER_BOX_GREEN = 13;
	const SHULKER_BOX_RED = 14;
	const SHULKER_BOX_BLACK = 15;

	public function __construct($meta = 0){
		$this->meta = $meta;
	}

	public function getHardness() {
		return 1.00;
	}

	public function getToolType(){
		return Tool::TYPE_PICKAXE;
	}

	public function getName() : string{
		static $names = [
			0 => "White  Shulker Box",
			1 => "Orange Shulker Box",
			2 => "Magenta Shulker Box",
			3 => "Light Blue Shulker Box",
			4 => "Yellow Shulker Box",
			5 => "Lime Shulker Box",
			6 => "Pink Shulker Box",
			7 => "Gray Shulker Box",
			8 => "Light Gray Shulker Box",
			9 => "Cyan Shulker Box",
			10 => "Purple Shulker Box",
			11 => "Blue Shulker Box",
			12 => "Brown Shulker Box",
			13 => "Green Shulker Box",
			14 => "Red Shulker Box",
			15 => "Black Shulker Box",
		];
		return $names[$this->meta & 0x0f];
	}

}