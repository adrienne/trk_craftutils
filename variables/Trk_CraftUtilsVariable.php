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

class Trk_CraftUtilsVariable
{

	/**
	*  Trim <p> and </p> tags without removing other html, like <em></em>
	*
	*/
	public function remove_p($str='')
	{
		
		if (empty($str))
		{
			return '';
		}

		$charset = craft()->templates->getTwig()->getCharset();

		$output = str_replace('<p>', '', $str);
		$output = str_replace('</p>', '', $output);
		
		return new \Twig_Markup($output, $charset);	
	}
	//--------------------------------------------
	
	
}
// END CLASS