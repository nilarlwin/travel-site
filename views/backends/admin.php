<?php

session_start();
include "../../app/db.php";
include "../../app/user.php";
include "../../app/post.php";

$db=new DB();
$connection=$db->connect();
$user=new User($connection);
$postDB=new Post($connection);

if (!isset($_SESSION['auth'])) {
	header("location: login.php");
}

include "header.php";
include "slidebar.php";

if (isset($_GET['page'])) { //using get superglobal variable
	$page=$_GET['page'];
	if ($page=="adduser") {
		include "users/adduser.php";
	}else if($page=="userlist"){
		$users=$user->getAll();
		include "users/userlist.php";
	}else if($page=="edituser"){
		$id=$_GET['id'];   //using get superglobal variable
		$userData=$user->get($id);
		include "users/edituser.php";
	}else if($page=="addpost"){
		include "posts/addpost.php";
	}else if($page=="postlist"){
		$posts=$postDB->getAll();
		include "posts/postlist.php";
	}else if($page=="postedit"){
		$id=$_GET['id'];
		$post=$postDB->get($id);
		include "posts/postedit.php";
	}
	
}
include "footer.php";
?>
                 
           