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
			overflow: hidden;
			text-align: center;
		}.sms_type{
			width: 98%;
			
		}#w{
			width:100%;
		}#send{
			padding-left: 40%;
			padding-right: 40%;
			
		}

	</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">



	



</script>
</head>
<body>
	
<h2 id="id">Welcome <span id="user">ISRAFIL</span></h2>
        <div id="zone">
			<div id="sms" class="jjj">
				<!-- <p id="sender_id">You</p>
				<p id="sender_sms">hello, how are you?</p>
				<p id="sender_sms">hello, how are you?</p>
				<p id="sender_sms">hello, how are you?</p>	
				<p id="sender_sms">hello, how are you?</p>

				<p id="reciver_id">friend</p>
				<p id="reciver_sms">hello, how are you?</p>
				<p id="reciver_sms">hello, how are you?</p>
				<p id="reciver_sms">hello, how are you?</p>

				<p id="sender_id">You</p> -->
				
				
				
				
				
			</div>

		</div>
		<div id="send_div">
		<form action="" method="POST">
		<input type="text" name="sms_type" id="as" class="sms_type"><br>
		<input type="submit" name="send" id="send" value="Send">
		 </form> 
		
		</div>
		   <div id="php">

		</div>
	
		
		<script>

$(document).ready(function(){

  setInterval(function(){
	$("#sms").load("first.php");
 	// refresh();
  },1000);

});

</script>


	
</body>
</html>
<?php 
	error_reporting(E_ALL ^ E_NOTICE);



	$con= mysqli_connect("localhost", "root", "", "sms");	
	$sms= $_POST["sms_type"];	   
	$send=$_POST["send"];
	$send_data= '<script>document.getElementById("sms").innerHTML += '.'"<p id="sender_id">You</p><p id="sender_sms">'.$sms.'</p>"'.';</script>';
    $recive_data= '<p id=\"reciver_id\">Israfil</p><p id=\"reciver_sms\">'.$sms.'</p>';
	$my_data= '<p id=\"sender_id\">You</p><p id=\"sender_sms\">'.$sms.'</p>';
			   
	   if(isset($send)){
		   if($sms != ""){
						   
			   mysqli_query($con, "INSERT INTO sms_room (s, r, m, f, my) VALUES(\"$recive_data\", \"\", \"\", \"\", \"$my_data\");");
		
	   } 
	  }
	
?>


