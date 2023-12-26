<?php
require_once 'connection.php';
require_once 'config.php';
?>
<!DOCTYPE html> 
<html>
<head>
	<title>Registration Details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>

<body>
<div class="container">
<center><h1>Encrypt and Decrypt ids/string for URL Using PHP</h1></center>
<?php
 if(isset($_GET['id']) && !empty($_GET['id']))
 {
 $id = $_GET['id'];
 $id = encryptor('decrypt',$id);
 if(!empty($id))
 {
 $fetch_data = mysqli_query($connection,"select * from student_data where id='$id'");
 $result = mysqli_fetch_array($fetch_data);
 }
 }

?>
<div style="font-size:22px; margin: 5% 36%;">
<h3>Details are given below:</h3>
<p> <b>Name :</b><?php echo $result['name'];?>  </p>
<p> <b>Dob:</b> <?php echo $result['email'];?> </p>
		
<a href="index.php"><button class="btn btn-primary">Back</button></a>
</div>
</div>
</body>
</html>