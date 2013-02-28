<?php
/**
 * Admin authnication methods
 * @author Mohammad Hosein Saadatfar <mh.saadatfar@gmail.com>
 * @copyright Copyright &copy; Mohammad Hosein Saadatfar 2012-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 *
 */
class AdminAuth extends CApplicationComponent{
	/**
	 * Check that user is admin or not. if not redirect to login page.
	 */
	public function check(){
		if (Yii::app()->user->id!='admin'){
			header('HTTP/1.1 301 Moved Permanently');
			header('Location: '.Yii::app()->createUrl('admin/login/login'));
			exit();
		}
	}
}