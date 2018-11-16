<?php

/**
 * MvcCore
 *
 * This source file is subject to the BSD 3 License
 * For the full copyright and license information, please view
 * the LICENSE.md file that are distributed with this source code.
 *
 * @copyright	Copyright (c) 2016 Tom Flídr (https://github.com/mvccore/mvccore)
 * @license		https://mvccore.github.io/docs/mvccore/4.0.0/LICENCE.md
 */

namespace MvcCore\Ext\Debugs\Tracys;

/**
 * Responsibility - dump MvcCore framework main core objects - app, request, response, router and dispatched controller.
 */
class MvcCorePanel implements \Tracy\IBarPanel
{
	/**
	 * MvcCore Extension - Debug - Tracy Panel - MvcCore - version:
	 * Comparison by PHP function version_compare();
	 * @see http://php.net/manual/en/function.version-compare.php
	 */
	const VERSION = '5.0.0-alpha';

	/**
	 * Get unique `Tracy` debug bar panel id.
	 * @return string
	 */
	public function getId() {
		return 'mvccore-panel';
	}

	/**
	 * Return rendered debug panel heading HTML code displayed all time in `Tracy` debug  bar.
	 * @return string
	 */
	public function getTab() {
		return '<span title="MvcCore">'
			.'<svg x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"><ellipse fill="#00DE1A" cx="9.998" cy="13.583" rx="6.175" ry="6.417"/><ellipse fill="#F20014" cx="6.173" cy="6.417" rx="6.175" ry="6.417"/><ellipse fill="#FFD003" cx="13.823" cy="6.418" rx="6.175" ry="6.417"/><g><linearGradient id="_1" gradientUnits="userSpaceOnUse" x1="5.3042" y1="9.1226" x2="7.5987" y2="12.8662"><stop offset="0" style="stop-color:#00DE1A"/><stop offset="1" style="stop-color:#F20014"/></linearGradient><path fill="url(#_1)" d="M9.998,11.454c-1.147-0.942-1.964-2.297-2.243-3.851c-1.958,0.794-3.43,2.596-3.825,4.794 c0.695,0.282,1.451,0.438,2.243,0.438C7.618,12.835,8.946,12.318,9.998,11.454z"/><linearGradient id="_2" gradientUnits="userSpaceOnUse" x1="12.3457" y1="12.9102" x2="14.7197" y2="9.0876"><stop offset="0" style="stop-color:#FFD003"/><stop offset="1" style="stop-color:#00DE1A"/></linearGradient><path fill="url(#_2)" d="M12.241,7.603c-0.279,1.554-1.096,2.909-2.243,3.851c1.052,0.864,2.38,1.381,3.825,1.381 c0.792,0,1.547-0.156,2.243-0.438C15.671,10.199,14.199,8.397,12.241,7.603z"/><linearGradient id="_3" gradientUnits="userSpaceOnUse" x1="7.6475" y1="4.4922" x2="12.3481" y2="4.4922"><stop offset="0" style="stop-color:#FFD003"/><stop offset="1" style="stop-color:#F20014"/></linearGradient><path fill="url(#_3)" d="M7.647,6.418c0,0.405,0.038,0.801,0.107,1.185C8.45,7.321,9.206,7.165,9.998,7.165 c0.792,0,1.548,0.156,2.243,0.438c0.069-0.384,0.107-0.78,0.107-1.186c0-2.042-0.919-3.861-2.351-5.036 C8.567,2.557,7.647,4.375,7.647,6.418z"/></g><g opacity="0.8"><path fill="#E39700" d="M9.998,11.454c-1.147-0.942-1.964-2.297-2.243-3.851c-1.958,0.794-3.43,2.596-3.825,4.794 c0.695,0.282,1.451,0.438,2.243,0.438C7.618,12.835,8.946,12.318,9.998,11.454z" /><path fill="#89FF00" d="M12.241,7.603c-0.279,1.554-1.096,2.909-2.243,3.851c1.052,0.864,2.38,1.381,3.825,1.381 c0.792,0,1.547-0.156,2.243-0.438C15.671,10.199,14.199,8.397,12.241,7.603z" /><path fill="#FFB300" d="M7.647,6.418c0,0.405,0.038,0.801,0.107,1.185C8.45,7.321,9.206,7.165,9.998,7.165 c0.792,0,1.548,0.156,2.243,0.438c0.069-0.384,0.107-0.78,0.107-1.186c0-2.042-0.919-3.861-2.351-5.036 C8.567,2.557,7.647,4.375,7.647,6.418z" /></g><path fill="#FBFF00" d="M7.754,7.603c0.279,1.554,1.096,2.909,2.243,3.851c1.147-0.942,1.964-2.297,2.243-3.851 c-0.695-0.282-1.451-0.438-2.243-0.438C9.206,7.165,8.45,7.321,7.754,7.603z"/></svg>'
		.'</span>';
	}

	/**
	 * Return rendered debug panel content window HTML code.
	 * @return string
	 */
	public function getPanel() {
		$app = \MvcCore\Application::GetInstance();
		$requestCode = \Tracy\Dumper::toHtml($app->GetRequest()->InitAll(), [
			\Tracy\Dumper::LIVE => TRUE,
			\Tracy\Dumper::COLLAPSE => 1,
			\Tracy\Dumper::DEPTH => 4,
		]);
		$responseCode = \Tracy\Dumper::toHtml($app->GetResponse(), [
			\Tracy\Dumper::LIVE => TRUE,
			\Tracy\Dumper::COLLAPSE => 1,
			\Tracy\Dumper::DEPTH => 2,
			\Tracy\Dumper::TRUNCATE => 40
		]);
		$routerCode = \Tracy\Dumper::toHtml($app->GetRouter(), [
			\Tracy\Dumper::LIVE => TRUE,
			\Tracy\Dumper::COLLAPSE => 1,
			\Tracy\Dumper::DEPTH => 5,
		]);
		$ctrlCode = \Tracy\Dumper::toHtml($app->GetController(), [
			\Tracy\Dumper::LIVE => TRUE,
			\Tracy\Dumper::COLLAPSE => 1,
			\Tracy\Dumper::COLLAPSE_COUNT => 1,
			\Tracy\Dumper::DEPTH => 3,
		]);
		$appCode = \Tracy\Dumper::toHtml($app, [
			\Tracy\Dumper::LIVE => TRUE,
			\Tracy\Dumper::COLLAPSE => 1,
			\Tracy\Dumper::DEPTH => 1,
		]);
		$result = '<h1>MvcCore</h1>'
			.'<style>#tracy-debug-panel-mvccore-panel pre.tracy-dump{display:block !important;}</style>'
			.$appCode
			.$requestCode
			.$responseCode
			.$routerCode
			.$ctrlCode;
		return $result;
	}
}
