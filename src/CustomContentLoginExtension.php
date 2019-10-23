<?php
/**
 *
 *  * Copyright (C) 2013-2019 Combodo SARL
 *  *
 *  * This file is part of iTop.
 *  *
 *  * iTop is free software; you can redistribute it and/or modify
 *  * it under the terms of the GNU Affero General Public License as published by
 *  * the Free Software Foundation, either version 3 of the License, or
 *  * (at your option) any later version.
 *  *
 *  * iTop is distributed in the hope that it will be useful,
 *  * but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  * GNU Affero General Public License for more details.
 *  *
 *  * You should have received a copy of the GNU Affero General Public License
 *  
 */

namespace Combodo\iTop\LoginCustomContent;

use iLoginUIExtension;
use LoginBlockData;
use LoginTwigData;
use utils;

/**
 * Class CustomContentLoginExtension
 */
class CustomContentLoginExtension implements  iLoginUIExtension
{

	/**
	 * Return the list of supported login modes for this plugin
	 *
	 * @return array of supported login modes
	 */
	public function ListSupportedLoginModes()
	{
		return array('form','basic', 'external', 'url');
	}

	/**
	 * @return LoginTwigData
	 */
	public function GetTwigBlockData()
	{
		$sPath = APPROOT.'env-'.utils::GetCurrentEnvironment().'/itop-login-custom-content/view';
		$oLoginData = new LoginTwigData(array(), $sPath);
		$oLoginData->AddBlockData('body', new LoginBlockData('base.html.twig'));
		$oLoginData->AddBlockData('login_additional_content', new LoginBlockData('additional_content.html.twig'));

		$oLoginData->AddBlockData('css', new LoginBlockData('custom_css.css.twig'));

		return $oLoginData;
	}
}
