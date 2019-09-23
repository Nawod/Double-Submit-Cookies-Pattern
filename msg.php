<?php
 session_start();
require_once 'token.php';

//checking the login 
if ( empty( $_SESSION['token']) ) {
	header("Location:login.php");
}
else{

}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Double Submit Cookies Pattern</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   	 	<link href="css.css" rel="stylesheet">
    	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	

		<script>
		//ajax call	
		$(document).ready(function(){
	
		var cookie_value = "";
    	var decodedCookie = decodeURIComponent(document.cookie);//get csrf token from cookie
    	var ca = decodedCookie.split(';');
		var csrf = decodedCookie.split(';')[2]
		//
		if(csrf.split('=')[0] = "csrfTokenCookie" ){
		//
		cookie_value = csrf.split('csrfTokenCookie=')[1];
		document.getElementById("tokenIn_hidden_field").setAttribute('value', cookie_value) ;//add csrf token to hidden fields
		}
		});

		</script>

  	</head>

	<body class="bdy">
		<h1 class="log">Login Successfully</h1>
		<div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="box">
                	<!--form to send a message and csrf token-->
                      <form class="form" action="result.php" method="post">
                            <div class="form-group">
                                <label for="username" class="text-white"><h4>Send a Message</h4></label><br>
                                <input type="text" name="updatepost" class="inpt">
                            </div>
                            <div id="div1">
					              <input type="hidden" name="token" value="" id="tokenIn_hidden_field"/>
					        </div>
                            <div class="form-group">
                                <input type="submit"  class="btn" value="updatpost">
                            </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

	</body> 
</html>
