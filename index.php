<?php
/** op-app-skeleton-2020-nep:/index.php
 *
 * @created   2019-02-18
 * @version   1.0
 * @package   op-app-skeleton-2020-nep
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
/* @var $app \OP\UNIT\App */

/** namespace
 *
 */
namespace OP;

 /************************************************/
//	.htaccess file has not been initialized.	//
/* @var $app UNIT\App */
if( empty($app) ){
	include('app.php');
	exit(__FILE__.' #'.__LINE__);
}
//	You should leave this logic. It's for you.	//
/***********************************************/

//	Get SmartURL arguments.
$args = $app->Args();

//	Does if has arguments?
if( empty($args) ){

	/** Welcome page file is in "asset/template" directory.
	 *
	 */
	Template('welcome.phtml');

}else{

	/** 404.php file is in current directory.
	 *
	 */
	Template('404.php');

}
