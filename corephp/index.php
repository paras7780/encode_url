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
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  margin-left: auto;
  margin-right: auto;
  font-size: 1.6rem;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>
</head>

<body>
<div class="container">
<center><h1>Encrypt/Decrypt ids/string for URL in PHP</h1></center>
<br>
<table>
	<tr>
	<th>S.No</th>
	<th>Name</th>
	<th>Email</th>
	<th>Action</th>
	</tr>
<?php 
$fetch_data = mysqli_query($connection,"select id, name, email from student_data");
while($result = mysqli_fetch_array($fetch_data))
	{
	$id = encryptor('encrypt', $result['id']);
	?>
	<tr>
	<td> <?php echo $result['id']; ?> </td>
	<td> <?php echo $result['name']; ?> </td>
	<td> <?php echo $result['email']; ?> </td>
	<td> <a href="show-details.php?id=<?php echo $id; ?>">View Details</a> </td>
	</tr>
<?php } ?>
</table>
</div>
</body>
</html>