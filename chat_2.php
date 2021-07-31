<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Chat Zone</title>
	
    <style>
        *{
            margin:0px;
            padding:0px;
        }#id{
			text-align: center;
		}#zone{
			height: 400px;
			width: 50%;
			margin-left: 25%;
			background-color: rgb(77, 76, 74);
			overflow: auto;
		}#sender_id{
			
			margin-left: 2%;
			margin-top: 1%;
		}#sender_sms{
			background-color: rgb(196, 201, 223);
			width: 45%;
			color: blue;
			margin-left: 2%;
			margin-top:1%;
			padding: 5px;
		}#sender_id, #sender_sms{
			clear: right;
			border-radius: 5px;
		}#sms{
			
			
		}#reciver_id{
			margin-top: 5px;
		}#reciver_sms{
			background-color: rgb(118, 138, 238);
			width: 45%;
			color: rgb(255, 255, 255);
			margin-top: 1%;
			padding: 5px;
			
		}#reciver_id, #reciver_sms{
			float: right;
			
			border-radius: 5px;
			margin-right: 2%;
			clear: right;
		}#send_div{
			width: 50%;
			margin-left: 25%;
			background-color: rgb(77, 76, 74);
		}.sms_type{
			width: 84%;
			
		}#w{
			width:100%;
		}
	</style>
	
	
</head>
<body>
	
<h2 id="id">Welcome <span id="user">ISRAFIL</span></h2>
        <div id="zone">
			<div id="sms">
				<p id="sender_id">You</p>
				<p id="sender_sms">hello, how are you?</p>
				<p id="sender_sms">hello, how are you?</p>
				<p id="sender_sms">hello, how are you?</p>	
				<p id="sender_sms">hello, how are you?</p>

				<p id="reciver_id">friend</p>
				<p id="reciver_sms">hello, how are you?</p>
				<p id="reciver_sms">hello, how are you?</p>
				<p id="reciver_sms">hello, how are you?</p>

				<p id="sender_id">You</p>
				
				
				
				
			</div>

		</div>
		<div id="send_div">
		<form action="" method="POST">
		<input type="text" name="sms_type" id="as" class="sms_type">
		<input type="submit" name="send" class="send" value="Send">
		 </form> 
		
		</div>
		   <div id="php">

		</div>
	
</body>
</html>
<?php
												error_reporting(E_ALL ^ E_NOTICE);



 	$con= mysqli_connect("localhost", "root", "", "sms");	
	
	$sms=$_POST["sms_type"]; 
	$send=$_POST["send"];
	$send_data= '<script>document.getElementById(\'sms\').innerHTML += \'<p id=\"sender_id\">You</p><p id=\"sender_sms\">'.$sms.'</p>\';</script>';
	$recive_data= '<script>document.getElementById(\'sms\').innerHTML += \'<p id=\"reciver_id\">friend</p><p id=\"reciver_sms\">'.$sms.'</p>\';</script>';
	$my_data= '<script>document.getElementById(\'sms\').innerHTML += \'<p id=\"sender_id\">You</p><p id=\"sender_sms\">'.$sms.'</p>\';</script>';

	if(isset($send)){
		if($sms != ""){
			
			mysqli_query($con, "INSERT INTO sms_room (s, r, m, f, my) VALUES(\"\", \"$recive_data\", \"israfil\", \"\", \"\");");
			mysqli_query($con, "INSERT INTO sms_room (s, r, m, f, my) VALUES(\"\", \"\", \"\", \"\", \"$my_data\");");

		}else{

		}
	}
for($i=0; $i<5000; $i++){
		$data_db= mysqli_query($con, "SELECT * FROM sms_room WHERE id=$i");
		$data=	mysqli_fetch_array($data_db);
		echo $data["my"];
		echo $data["r"];
		}


	
?>


