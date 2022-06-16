<?php

{
    
    $server="localhost";
    $username="root";
    $password="rakesh@555";
    $dbname="project";
    $conn=mysqli_connect($server,$username,$password,$dbname);
    
    $name2=$_POST['username1'];
	$name3=$_POST['pswd'];

    if($_POST['login'])
    {
        $name2=$_POST['username1'];
	    $name3=$_POST['pswd'];
        $q="select * from signup where user_name='".$name2."'AND password='".$name3."' limit 1";
        $d=mysqli_query($conn,$q);
	    
        if(mysqli_num_rows($d)==1)
        {
            header("location:homepage.html");
        }
        else{
            header("location:inde.html");
        }

    }
}
?>