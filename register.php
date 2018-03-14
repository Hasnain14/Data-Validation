<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="style.css" type="text/css">



<!DOCTYPE html>
<html>
<head>
	<title>CSE,RU</title>
  <style >
    p{
      font-size: 18px ; 
      font-family: 'Core Sans N W01 35 Light' ;
      font-weight: bold;
    }
  </style>
</head>
<body>

</body>
</html>


<div class="body-content">
  <div class="module">
    <h1>Registration Form</h1>
    <form class="form" action="register.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <p>User Name :</p>
      <input type="text" placeholder="Enter User Name" name="username" required />
      <p>Roll Number :</p>
       <input type="text" placeholder="Enter Roll Number" name="roll" required />
       <p>Father Name :</p>
        <input type="text" placeholder="Enter Father Name" name="F_name" required />
         <p>Address :</p>
        <input type="text" placeholder="Enter Address" name="address" required />
        <p>Birth Day :</p>
         <input type="date" placeholder="Birth Day" name="birth_day" required />
         <p>Email :</p>
      <input type="email" placeholder="Enter Email" name="email" required />
      <p>Phone Number :</p>
      <input type="tel" placeholder="Enter Phone Number" name="phn_number" required />
      <p>Educational Qualification :</p>
       <input type="text" placeholder="Enter Educational Qualification" name="Qualification" required />
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div style="clear: both;"></div>
    </form>
  </div>
</div>

<?php 

  session_start();

  $errors = array();
  $errmsg  = '';

  require_once"db_connect.php";


    if(isset($_POST['register'])){

    $full_name = $_POST['username'];
    $roll = $_POST['roll'];
    $father_name = $_POST['F_name'];
    $phn_number = $_POST['phn_number'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $birth_day = $_POST['birth_day'];
    $qualification = $_POST['Qualification'];


    if (time() < strtotime('+18 years', strtotime($birth_day))) {
        array_push($errors, "Age must be above 18 years old \n");
    }
    $length = strlen($roll);

    if ($length < 8 || $length >8) {
        array_push($errors, "Invalid Roll Number \n");
    }
    if ($length == 8 && ($roll[4] != '5' || $roll[5] != '4')) {
        array_push($errors, "Your department must be CSE \n");
    }


     if (count($errors) > 0) {

      foreach($errors as $error) {
            $errmsg .= $error . '<br />';
            echo $errmsg;
          }

        

    }

    if (count($errors) == 0) {
        $sql_add = "INSERT INTO register (
       User_Name, Roll_Number, Father_Name, Birth_Day, Email, Phone_Number, Qualification, address 
       ) VALUES ('$full_name','$roll','$father_name','$birth_day','$email','$phn_number','$qualification','$address')";
       if(mysqli_query($con_db,$sql_add)){
        echo '<script language="javascript">';
        echo 'alert("Contect Add successfully ")';
        echo '</script>';

        $url_back = "index.php";

        header('location:'.$url_back);
        array_push($errors, "Registration Successful");
    }
    
    }

}

?>
