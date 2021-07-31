<?php
$con= mysqli_connect("localhost", "root", "", "sms");	

		$data_db= mysqli_query($con, "SELECT * FROM sms_room");
		$data=	mysqli_fetch_array($data_db);
		foreach($data as $data){
		echo $data["my"];
		echo $data["r"];
		}
		
?> 
