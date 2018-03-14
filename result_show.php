<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="style.css" type="text/css">


<!DOCTYPE html>
<html>
<head>
	<title>CSE,RU</title>
</head>
<body class="index_body">
	<div class="view_contact">
		

	<?php 

		session_start();

		require_once"db_connect.php";

 	?>
  
		<div style="clear: both;"></div>
		<br>
		<table cellpadding="5" border="1" id="contactsTable" class="display">
					<thead>
						<tr align="left">
							<th>Name</th>
							<th>Roll Number</th>
							<th>Father_Name</th>
							<th>Birth Day</th>
							<th>Address</th>
							<th>Email</th>
							<th>Phone Number</th>
							<th>Educational Qualification</th>
														
						</tr>
					</thead>
					<tbody>

						<?php 

						$sql_show = "SELECT * from register ";

						$result_show = mysqli_query($con_db,$sql_show);

						while ($data = mysqli_fetch_assoc($result_show)):

						 ?>

						 <tr>
						 	<td><?php echo $data['User_Name'];?></td>
							<td><?php echo $data['Roll_Number'];?></td>
							<td><?php echo $data['Father_Name'];?></td>
							<td><?php echo $data['Birth_Day'];?></td>
							<td><?php echo $data['address'];?></td>
							<td><?php echo $data['Email'];?></td>
							<td><?php echo $data['Phone_Number'];?></td>
							<td><?php echo $data['Qualification'];?></td>
						 </tr>

					 	<?php endwhile; ?>

					</tbody>
				</table>
			
				<br>
				<br>
				<a href="logput.php" class="button" style="vertical-align:middle ; margin-left: calc(50% - 100px); "><span>Log Out</span></a> 
					
	</div>

</body>


</html>


