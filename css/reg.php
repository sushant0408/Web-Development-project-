<?php
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];

if (!empty($fn) || !empty($ln) || !empty($pwd) || !empty($email) ){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "br";
    //create connection
    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);

		if(mysqli_connect_error()){
			die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
		}
		else{
			     $SELECT = "SELECT * From registor Where email='$email'";
                 $result =mysqli_query($conn,$SELECT);
                 $resultCheck= mysqli_num_rows($result);
           if($resultCheck >0) {
                                echo '<script type="text/javascript"> alert("Email already registered")
                        window.history.go(-1);
                        </script>';
                        exit();

            }
            else{
                //$hashedpwd= password_hash(mysqli_real_escape_string($conn,$_POST["pwd"]), PASSWORD_BCRYPT);
                $INSERT = "INSERT Into registor(fn , ln, pwd, email)values('$fn','$ln','$pwd','$email')";
                mysqli_query($conn,$INSERT);
                 echo '<script type="text/javascript"> alert("Successfully registered")
                        window.history.go(-1);
                        </script>';
                        exit();
                }
			$conn->close();
			}
}
else {
	echo"all fields required";
	die();
}

?>
