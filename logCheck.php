<?php
 session_start();
//checking the login and create session cookies
if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
      $uname = $_POST['username'];
      $pwd = $_POST['password'];
      if($uname == 'admin' && $pwd == '1234'){
       $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
       $session_id = session_id();

       //create cookies
        setcookie('sessionCookie',$session_id,time()+ 60*60*24*365 ,'/');
        setcookie('csrfTokenCookie',$_SESSION['token'],time()+ 60*60*24*365 ,'/');

      //directed to msg.php
        header("Location:msg.php");
      }
       else{
        //redirect to login page
				header("Location:login.php");
			}
    }
}
else{
	header("Location:login.php");
	}
  ?>