<?php
/**
 * Kunena Component
 * @package Kunena.Template.Crypsis
 * @subpackage Pages.Search
 *
 * @copyright (C) 2008 - 2013 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();

echo $this->subRequest('Category/List', $this->input);
echo $this->subRequest('Statistics/Whoisonline');
echo $this->subRequest('Page/Statistics');