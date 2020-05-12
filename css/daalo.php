<?php
$review = $_POST['review'];
$rid = $_POST['rid'];
$user=$_POST['user'];

if(!empty($review) || !empty($rid) || !empty($user)){
  $host ="localhost";
  $dbUsername ="root";
  $dbPassword ="";
  $dbname ="br";

  //create fann_get_total_connections
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
  if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
  }else {
      $sql ="INSERT Into reviewss(rid, username, review) values('".$rid."','".$user."','".$review."') ";

      if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript"> alert("Review posted successfully")
        window.history.go(-1);
        </script>';
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
  }

}else {
  echo "All field are Required";
  die();
}

?>