<?php

session_start();


	include "../app/db.php";
	include "../app/user.php";
	$db=new DB();
	$connection=$db->connect();
	$user=new User($connection);

if(isset($_POST['username'])){
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	if($username=="" | $email=="" | $password==""){

		if($username==""){
			$_SESSION['username'] = "Username Must not be empty";
		}
		if($email==""){
			$_SESSION['email'] = "Username Must not be empty";
		}
		if($password==""){
			$_SESSION['password'] = "Username Must not be empty";
		}
        header("location: ".$_SERVER["HTTP_REFERER"]);
	}

	else{
		unset($_SESSION['username']);
		unset($_SESSION['email']);
		unset($_SESSION['password']);


         if($_POST['action']=="add"){

         $pass=password_hash($password, PASSWORD_BCRYPT);
		$status=$user->create($username,$email,$pass);
		if($status){
			$_SESSION['status']="User created successfully";
			$_SESSION['expire']=time();
		  }
		   header("location: ".$_SERVER["HTTP_REFERER"]);
	    }
	    else if($_POST['action']=="update"){
	    	$id=$_POST['id'];
            $status=$user->update($id,$username,$email,$password);
            if($status){
            	$_SESSION['status']="User updated successfully";
			    $_SESSION['expire']=time();
            }
            header("location: ../views/backends/admin.php?page=userlist");

	    } 

	}
}
 
 if(isset($_GET['action'])){
 	if($_GET['action']=='delete'){
 		$id=$_GET['id'];
 		$status=$user->delete($id);
 		if($status){
 			$_SESSION['status']="User Deleted Successfully";
 			$_SESSION['expire']=time();
 			header("location: ".$_SERVER["HTTP_REFERER"]);
 		}
 	}
 }

?>