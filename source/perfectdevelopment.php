<?php
/**
 * @package     Perfectdevelopment
 *
 * @author      Perfect Web Team <hallo@perfectwebteam.nl>
 * @copyright   Copyright (C) 2015 - 2016 Perfect Web Team. All rights reserved.
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * @link        https://perfectwebteam.nl
 */

defined('_JEXEC') or die;

/**
 * Perfectdevelopment plugin.
 *
 * @package  Perfectdevelopment
 * @since    1.0
 */
class plgSystemPerfectdevelopment extends JPlugin
{
	/**
	 * Application object
	 *
	 * @var    JApplicationCms
	 * @since  1.0
	 */
	protected $app;

	/**
	 * onAfterRender.
	 *
	 * @return  void.
	 *
	 * @since   1.0
	 */
	public function onAfterRender()
	{
		$pattern = '#data-src="(.*)/images/#';
		$domain = $this->params->get('domain');

		$body = $this->app->getBody();

		$body = preg_replace($pattern, 'data-src="' . $domain . '/images/', $body);

		$this->app->setBody($body);
	}
}
