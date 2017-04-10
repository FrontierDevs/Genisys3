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

class GlazedTerracotta extends Solid{

	protected $id = self::GLAZED_TERRACOTTA;
	
	const TERRACOTTA_WHITE = 0;
	const TERRACOTTA_ORANGE = 1;
	const TERRACOTTA_MAGENTA = 2;
	const TERRACOTTA_LIGHT_BLUE = 3;
	const TERRACOTTA_YELLOW = 4;
	const TERRACOTTA_LIME = 5;
	const TERRACOTTA_PINK = 6;
	const TERRACOTTA_GRAY = 7;
	const TERRACOTTA_LIGHT_GRAY = 8;
	const TERRACOTTA_CYAN = 9;
	const TERRACOTTA_PURPLE = 10;
	const TERRACOTTA_BLUE = 11;
	const TERRACOTTA_BROWN = 12;
	const TERRACOTTA_GREEN = 13;
	const TERRACOTTA_RED = 14;
	const TERRACOTTA_BLACK = 15;

	public function __construct($meta = 0){
		$this->meta = $meta;
	}

	public function getHardness() {
		return 1.25;
	}

	public function getToolType(){
		return Tool::TYPE_PICKAXE;
	}

	public function getName() : string{
		static $names = [
			0 => "White Glazed Terracotta",
			1 => "Orange Glazed Terracotta",
			2 => "Magenta Glazed Terracotta",
			3 => "Light Blue Glazed Terracotta",
			4 => "Yellow Glazed Terracotta",
			5 => "Lime Glazed Terracotta",
			6 => "Pink Glazed Terracotta",
			7 => "Gray Glazed Terracotta",
			8 => "Light Gray Glazed Terracotta",
			9 => "Cyan Glazed Terracotta",
			10 => "Purple Glazed Terracotta",
			11 => "Blue Glazed Terracotta",
			12 => "Brown Glazed Terracotta",
			13 => "Green Glazed Terracotta",
			14 => "Red Glazed Terracotta",
			15 => "Black Glazed Terracotta",
		];
		return $names[$this->meta & 0x0f];
	}

}