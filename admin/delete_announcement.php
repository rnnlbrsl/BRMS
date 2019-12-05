<?php

require_once('includes/conn.php');
	$id = $_POST['id'];
	if ($_POST['action']=='hide') 
	{
		$query=mysqli_query($mysqli,"update `announcement` set is_active = 0 where announcement_no='".$id."'");
    	$result = mysqli_affected_rows($mysqli);
	}
	elseif($_POST['action']=='delete')
	{
	    $query=mysqli_query($mysqli,"delete from `announcement` where announcement_no='".$id."'");
	    $result = mysqli_affected_rows($mysqli);
	}

    echo $result;