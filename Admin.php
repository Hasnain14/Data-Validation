<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="style.css" type="text/css">

<!DOCTYPE html>
<html>
<head>
	<title>CSE,RU</title>
</head>
<body>

</body>
</html>


<div class="body-content">
  <div class="module">
    <h1>LogIn Form</h1>
    <form class="form" action="Admin.php" method="post" autocomplete="off">
      <div class="alert alert-error"></div>
      <p>Admin Name :</p>
      <input type="text" placeholder="Enter Admin Name" name="adminname" required />
       <p>Password :</p>
      <input type="password" placeholder="Enter Password" name="password" autocomplete="new-password" required />
      <br>
      <br>
      <input type="submit" value="LogIn" name="login_button" class="btn btn-block btn-primary" />
      <br>
      <br>
    </form>
  </div>
</div>

<?php 

	session_start();

	if(isset($_POST['login_button'])){

		require_once"db_connect.php";

		$user_name_login = $_POST['adminname'];
		$password_login = $_POST['password'];

		if(!empty($_POST)){

			$sql = "SELECT * from admin WHERE admin_name = '$user_name_login' AND password = '$password_login'";

			$result = mysqli_query($con_db,$sql);


	      
			//echo $Id['ID'];

			if(mysqli_num_rows($result)==1){
				echo '<script language="javascript">';
				echo 'alert("successfully login")';
				echo '</script>';

				 $url_back = "result_show.php ";

        		header('location:'.$url_back);
       			 exit();

				/*$result1 = mysqli_query($con_db,$sql1);

				$Id = mysqli_fetch_assoc($result1);

				$_SESSION['user_id'] = $Id['ID'];
				$url = "result_show.php";*/


				
			}
		}
		
	}
 ?>