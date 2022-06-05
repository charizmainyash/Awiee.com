<?php 


	//if(isset($_POST['xy1']))
	//{
		$a=$_POST['aname'];
		$b=$_POST['pname'];
		if($a=="1nitish" && $b=="1password")
		{
			header("location:display1.php");
		}
			
		else 
		{
			echo '<script>';
			echo 'alert("Access Denied");';
			echo '</script>';
			header("location:display.php");
		}
	//}
?>