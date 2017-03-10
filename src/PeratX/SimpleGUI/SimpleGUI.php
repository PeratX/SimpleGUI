<?php

/**
 * SimpleGUI
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author iTXTech
 * @website https://itxtech.org
 */

namespace PeratX\SimpleGUI;

use Gui\Application;
use Gui\Output;
use iTXTech\SimpleFramework\Module\Module;

class SimpleGUI extends Module{

	public function load(){
		$this->saveResource("phpgui-x86_64-win64.exe");
		Application::$lazarusLibPath = $this->getDataFolder();
		Output::$enabled = false;
	}

	public function unload(){
		@unlink($this->getDataFolder() . "phpgui-x86_64-win64.exe");
	}
}