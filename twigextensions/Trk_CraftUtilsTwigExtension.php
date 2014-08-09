<?php
namespace Craft;

// use Twig_Extension;  
// use Twig_Filter_Method;

/**
 * Trk Craft Utils
 *
 * @package     Trk Craft Utils
 * @author      3 Red Kites Studio Inc.
 * @copyright   Copyright (c) 2013, 3 Red Kites Studio Inc.
 * @link        http://3redkites.com
 *
 */

class Trk_CraftUtilsTwigExtension extends \Twig_Extension 
{

	public function getName()
	{
		return Craft::t('Trk Craft Utils');
	}
	
	
	public function getFilters()  
	{
		return array(
			'unixmstodate' => new \Twig_Filter_Method($this, 'unixmsToDate'),
			'unixtodate' => new \Twig_Filter_Method($this, 'unixToDate'),
			'csvtolist' => new \Twig_Filter_Method($this, 'csvToList'),
			'linkemail' => new \Twig_Filter_Method($this, 'linkEmail')
		);
	}




	/**
	*  Convert Unix Date that has Milliseconds to Standard date %m/%d/%y (default)
	* 
	*/
	public function unixmsToDate($num='', $format='')
	{
		$charset = craft()->templates->getTwig()->getCharset();

		if (empty($num))
		{
			return '';
		}
		if (empty($format))
		{
			$format = 'm/d/y';
		} else {
			$format = htmlspecialchars(trim($format));
		}
		
		$num = intval($num);
		$str = strval(date($format,($num/1000)));
		
		
		return new \Twig_Markup($str, $charset);
	}
	//--------------------------------------------


	/**
	*  Convert Unix Date to Standard date %m/%d/%y (default)
	* 
	*/
	public function unixToDate($num='', $format='')
	{
		$charset = craft()->templates->getTwig()->getCharset();

		if (empty($num))
		{
			return '';
		}
		if (empty($format))
		{
			$format = 'm/d/y';
		} else {
			$format = htmlspecialchars(trim($format));
		}
		
		$num = intval($num);
		$str = strval(date($format,$num));
		
		
		return new \Twig_Markup($str, $charset);
	}
	//--------------------------------------------

	

	/**
	*  Convert a string that is a comma separated list into a <li> list
	*  specify class, optional
	*  Assumes you'll wrap the list with ul or ol
	*
	*  {{ "one, two, three"|csvToList('myclass') }}
	*/
	public function csvToList($str='', $class='')
	{
		$charset = craft()->templates->getTwig()->getCharset();
		
		if (empty($str))
		{
			return '';
		}

		if (!empty($class))
		{
			$class = htmlspecialchars(trim($class));
		}
		
		$str = htmlspecialchars(trim($str));

		// if only 1 item, then it has no comma, then wrap what is there in <li>
		if (strstr($str, ',') === false) {
			return '<li>' . $str . '</li>';
		}
		
		// remove last space/comma/tab/new line/carriage return from end of string, if any
		$str = rtrim($str, ' ,\t\n\r');
		$str = explode(',', $str);
		$output = '';
		
		foreach ($str as $item) 
		{
			$output  .= '<li';
			if ($class != '')
			{
				$output .= ' class="' . $class . '"'; 
			}
			$output .= '>' . trim($item) . '</li>';
		}


		return new \Twig_Markup($output, $charset);	
		
	} // End csvToList
	//--------------------------------------------
	



	/**
	*  Email address, link it up
	*  Optional: class, id, and text to link up
	*
	*  {{ "test@example.com"|emailLink('myclass', 'myId', 'My Name') }}
	*/
	public function linkEmail($str='', $class='', $id='', $text='')
	{
		$charset = craft()->templates->getTwig()->getCharset();
		
		if (empty($str))
		{
			return '';
		}

		$str = htmlspecialchars(trim($str));
		
		$output = '<a ';
		
		if (!empty($class))
		{
			$output .= 'class="' . htmlspecialchars(trim($class)) . '" ';
		}
		if (!empty($id))
		{
			$output .= 'id="' . htmlspecialchars(trim($id)) . '" ';
		}
		
		$output .= 'href="mailto:' . $str . '">';

		if (!empty($text))
		{
			$output .= htmlspecialchars(trim($text)) . '</a>';
		} else {
			$output .= '</a>';
		}
		
		
		return new \Twig_Markup($output, $charset);	
	}
	//--------------------------------------------
	

}
// END CLASS