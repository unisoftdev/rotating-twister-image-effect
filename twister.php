<?php
/*
* @Twister Effects Unisoftdev 1.0
* Created By Juraj Vysvader
* https://www.unisoftdev.tech/
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @Copyright (C) 2016 Juraj Vysvader. All rights reserved.
*/

defined('_JEXEC') or die;

class plgContentTwister extends JPlugin
{		
		

	public function onContentPrepare($context, &$row, &$params, $page = 0)
		{
				$document = JFactory::getDocument();
				$document->addStyleSheet(JURI::base(). "plugins/content/twister/twister.css");
		}		
}

?>
