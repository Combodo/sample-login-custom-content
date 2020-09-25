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
use LoginBlockExtension;
use LoginTwigContext;
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

	public function GetTwigContext()
	{
		$oLoginContext = new LoginTwigContext();
		$oLoginContext->SetLoaderPath(utils::GetAbsoluteModulePath('sample-login-custom-content').'view');
		$oLoginContext->AddCSSFile(utils::GetAbsoluteUrlModulesRoot().'sample-login-custom-content/css/custom.css');
		$oLoginContext->AddBlockExtension('login_additional_content', new LoginBlockExtension('additional_content.html.twig'));

		return $oLoginContext;
	}
}
