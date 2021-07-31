<!DOCTYPE html>
<html>
<head>
<title>Chat Zone Login</title>
    <style>
		#log{
			margin-top: 15%;
			text-align: center;
		}#sub{
			margin-top: 5px;
		}#sub:hover{
			border-color: blue;
			background-color: rgb(113, 113, 243);
			color: white;
		}#zone{
			height: 300px;
			width: 50%;
			margin-left: 25%;
			background-color: rgb(77, 76, 74);
			overflow: auto;
		}#ww{
			width: 30%;
			margin-left: 35%;
			text-align: center;
		}#w{
			color:black;
			background-color: red;
		}
		
</style>
</head>
<body>
    
<div id="zone">
<div id="log">
		<form action="" method="post">
		<label for="">User</label><br>
		<input name="id_name" type="text"><br>
		<label for="">Password</label><br>
		<input name="id_pass" type="password"><br>
		<input name="log" id="sub" value="Log In" type="submit">
		</form>
        </div>
		<div id="ww">
		
		</div>
</div>
        
</body>
</html>
 <?php
 error_reporting(E_ALL ^ E_NOTICE);
    $nam=$_POST["id_name"];
	$pass=$_POST["id_pass"];
	$in=$_POST["log"];
	
			if(isset($in)){
				if($nam == "israfil" && $pass == "1234" || $nam == "robin" && $pass == "1234"){
                    if($nam == "israfil"){
                        header("location:chat.php");
                    }if($nam == "robin") {
                        header("location:chat_1.php");
                    }else {
                       
                    }
			}if($nam == "" && $pass == ""){}else{
                echo '<script>document.getElementById("ww").innerHTML+="<p id=\"w\">Wrong Password</p>";</script>';
            };
        }
?>
