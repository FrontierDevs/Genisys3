<?php

 /*
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

namespace pocketmine\item;

class CarrotOnAStick extends Item {
	public function __construct($meta = 0, $count = 1) {
		parent::__construct(self::CARROT_ON_A_STICK, 0, $count, Carrot On a Stick");
	}
} 
