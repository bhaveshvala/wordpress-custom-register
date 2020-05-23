<?php
/*
* wp_enqueue_scripts hook
*/
function en_scripts(){
	/*
	* This is Validator JS for validation fields
	*/
	wp_enqueue_script( 'validator-js', 'https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js', array( 'jquery' ), rand(0, 999), true  );

	/*
	* This is out custom js file load here
	*/
	wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), rand(0, 999), true );

	/*
	* This is localize js for php value pass on custon js (Object)
	*/
	wp_localize_script( 'custom-script', 'screenReaderText', array(
		'aJaxAdmin'   => admin_url('admin-ajax.php'),
		'site_url' => site_url(),		
	) );

}
add_action( 'wp_enqueue_scripts', 'en_scripts' );

/*
* Ajax for register action hook
*/

add_action('wp_ajax_success_register', 'success_register' );
add_action('wp_ajax_nopriv_success_register', 'success_register');
function success_register() {
	if($_POST) {
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$firstname = $_REQUEST['firstname'];
		$lastname = $_REQUEST['lastname'];
		$mobileNumber = $_REQUEST['mobileNumber'];
		$email = $_REQUEST['email'];
		$userdata = array(
		    'user_pass'             => md5($password),
		    'user_login'            => $username,
		    'user_nicename'         => $username,
		    'user_email'            => $email,
		    'display_name'          => $firstname,
		    'nickname'              => $firstname,
		    'first_name'            => $firstname,
		    'last_name'             => $lastname,
		);
		$new_userid = wp_insert_user( $userdata );
		update_user_meta( $new_userid, 'mobileNumber', $mobileNumber);		
		echo "success";
		exit;
	}
}