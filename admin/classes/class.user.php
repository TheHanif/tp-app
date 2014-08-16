<?php 
/**
* Main User class
* 
* @version 0.01
*/
class User extends database
{
	
	public function __construct()
	{

	} // end of __construct

	/**
	 * Check if global $_SESSION variable has key 'is_logged_in'
	 * @param  boolean $redirect Redirect to login page if TRUE
	 * @return boolean           
	 */
	public static function is_logged_in($redirect = TRUE)
	{
		if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== FALSE) {

			
			self::logout();

			if ($redirect) {
				header('Location:login.php');
			}
			return FALSE;
		}
		return TRUE;
	} // is_logged_in

	/**
	 * Logout user
	 * Unset global $_SESSION['is_logged_in'] variable
	 * Destroy all sessions
	 * @return boolean
	 */
	function logout()
	{
		unset($_SESSION['is_logged_in']);
		session_destroy();
		return TRUE;
	} // logout


} // end of class
?>