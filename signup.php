<?php
if($_POST['not'])
{
    $name1=$_POST['txt'];
	$name2=$_POST['email'];
	$name3=$_POST['pswd'];

    $server="localhost";
    $username="root";
    $password="rakesh@555";
    $dbname="project";
    $conn=mysqli_connect($server,$username,$password,$dbname);
    $q="insert into signup value('$name1','$name2','$name3')";
    $d=mysqli_query($conn,$q);
    if(($d))
        {
            header("location:login.php");
        }
    else{
            echo "wrong";
        }
	
}

?>