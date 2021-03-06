<?php
/**
*
* @package Titania
* @version $Id: ucp_titania.php 1071 2010-04-17 05:10:36Z exreaction $
* @copyright (c) 2008 phpBB Customisation Database Team
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class ucp_titania_info
{
	function module()
	{
		return array(
			'filename'	=> 'ucp_titania',
			'title'		=> 'UCP_TITANIA',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'subscription_items'			=> array('title' => 'SUBSCRIPTION_ITEMS_MANAGE', 'auth' => '', 'cat' => array('UCP_MAIN')),
				'subscription_sections'			=> array('title' => 'SUBSCRIPTION_SECTIONS_MANAGE', 'auth' => '', 'cat' => array('UCP_MAIN')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}