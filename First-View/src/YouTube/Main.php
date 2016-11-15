<?php
namespace YouTube;
use pocketmine\plugin\PluginBase;
class Main extends PluginBase{
	public function onEnable(){
		$this->getServer()->getLogger()->info("Hi YouTube");
		$this->getLogger()->info("Test good");
	}
	public function onDisable(){
		$this->getServer()->getLogger()->info("YouTube â€¢ IBa4x");
	}
}
?>
