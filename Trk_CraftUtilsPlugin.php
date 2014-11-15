<?php
namespace Craft;

/**
 * Trk Craft Utils
 *
 * @package     Trk Craft Utils
 * @author      3 Red Kites Studio Inc.
 * @copyright   Copyright (c) 2013, 3 Red Kites Studio Inc.
 * @link        http://3redkites.com
 *
 */

class Trk_CraftUtilsPlugin extends BasePlugin
{
	function getName()
	{
		return Craft::t('3 Red Kites\' Craft Utils');
	}

	function getVersion()
	{
		return '1.0';
	}

	function getDeveloper()
	{
		return '3 Red Kites Studio';
	}

	function getDeveloperUrl()
	{
		return 'http://3redkites.com';
	}

	public function hasCpSection()
	{
		return false;
	}

	
	public function getSettingsHtml()
	{
		return craft()->templates->render('trk_craftutils/_information');
	}
	
	public function addTwigExtension()  
	{
		Craft::import('plugins.trk_craftutils.twigextensions.Trk_CraftUtilsTwigExtension');

	    return new Trk_CraftUtilsTwigExtension();
	}


} // END CLASS