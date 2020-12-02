<?php
$db = 'compiler';
$con=mysqli_connect("localhost","root","","$db");


?>
<form method = "post">
state <input type="text" name="state"><br/>
value<input type="text" name = "value"><br/>
action <input type="text" name="action"><br/>
<input type="submit" value="done" name="submit">

</form>

<?php
if(isset($_POST['submit']))
{
	$state = $_POST['state'];
	$value= $_POST['value'];
	$action = $_POST['action'];

	if($state==''||$value==''||$action=='')
	{
		echo "empty";
	}
	else{
		$query="INSERT INTO ptable(state,production,action) VALUES ('$state','$value','$action')";
		$query1=mysqli_query($con,$query);
		if($query1)
			{
				echo "successfull";
	}
	else{
		echo mysqli_error($con);
	}
}
}


?>