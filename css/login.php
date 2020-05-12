<?php 

session_start();

$lemail = $_POST['lemail'];
$lpwd = $_POST['lpwd'];

if (!empty($lpwd) || !empty($lemail)){
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
			     $SELECT = "SELECT * From registor Where email='$lemail'";
                 $result = mysqli_query($conn,$SELECT);
                 $resultCheck= mysqli_num_rows($result);
				 if($resultCheck <1) {
                                echo '<script type="text/javascript"> alert("One or more login details are incorrect")
                        window.history.go(-1);
                        </script>';
                        exit();

            	}
            	else{
            	/*$result = $conn->query($SELECT);
      			if ($result->num_rows > 0) {
        		// output data of each row
        		while($row = $result->fetch_assoc()) {
          		$password_hash = $row['pwd'];
          		if (password_verify("$lpwd", "$password_hash")) {
          			echo "success";
           		 // echo statusMessage(200, "success");
           		 /*$res = [
              	'login' => TRUE
           		 ];
          		} else {
          			echo "false";
          		  /* echo statusMessage(203, "nikal");
           		 $res = [
              	'login' => FALSE
            	];
          		}
          		$row['password'];
        		}*/
            		$row = mysqli_fetch_assoc($result);
            		$password=$row['pwd'];
            		/*echo $passwordhash;
            		echo $lpwd;
            		echo password_verify($lpwd, $row["pwd"]);\
            		*/

            		/*if(password_verify($lpwd,$passwordhash)){
            			echo"success";
            		}
            		else
            		{
            			echo"fail";
            		}*/
            		

            		if (strcmp($lpwd ,$password)==0){
            		$_SESSION['u_id']=$row['id'];
            		$_SESSION['u_fn']=$row['fn'];
            		$_SESSION['u_ln']=$row['ln'];
            		$_SESSION['u_pwd']=$row['pwd'];
            		$_SESSION['u_email']=$row['username'];
            	 	header("Location:Home.html?login=success");
                    exit();
            	 	}
            	 else{
            	 	header("Location:1.html?login=error");
            	 	echo '<script type="text/javascript"> alert("error")
                        </script>';
                    exit();
            	 	}
            	}
                
                }
			$conn->close();
			

}
else {
	echo"all fields required";
	die();
}
?>