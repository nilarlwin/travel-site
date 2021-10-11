<?php
session_start();

include "../app/db.php";
include "../app/post.php";

$db=new DB();
$connection=$db->connect();
$postDB=new Post($connection);

if(isset($_POST['title'])){
	$title=$_POST['title'];
	$description=$_POST['description'];
	$image=$_FILES['image']['name'];

	if($title=="" | $description=="" | $image==""){
		if($title==""){
			$_SESSION['title']="Title Must Not Be Empty";
		}
		if($description==""){
			$_SESSION['description']="Description Must Not Be Empty";
		}
		if($image==""){
			$_SESSION['image']="Image Must Not Be Empty";
		}
		header("location: ".$_SERVER["HTTP_REFERER"]);
	}else{
		unset($_SESSION['title']);
		unset($_SESSION['description']);
		unset($_SESSION['image']);
         
        $tmp_name=$_FILES['image']['tmp_name'];
		$folder="../assets/posts/";
		$saveImageName=uniqid().$image;
		move_uploaded_file($tmp_name, $folder.$saveImageName);
		if ($_POST['action']=="add") {
			
			$status=$postDB->create($title,$description,$saveImageName);
			if ($status) { 
				$_SESSION['status']="Post Created Successfully";
				$_SESSION['expire']=time();
			}
			header("location: ".$_SERVER["HTTP_REFERER"]);
		}else if($_POST['action']=="update"){
			 $id=$_POST['id'];
			 $status=$postDB->update($id,$title,$description,$saveImageName);
			 if ($status) { 
				$_SESSION['status']="Post Updated Successfully";
				$_SESSION['expire']=time();
			}
			header("location: ../views/backends/admin.php?page=postlist");
		  }
	    }

      }

       if(isset($_GET['action'])){
		if ($_GET['action']==delete) {
			$id=$_GET['id'];
			$status=$postDB->delete($id);
			if ($status){
				$_SESSION['status']="Post Deleted Successfully";
				$_SESSION['expire']=time();
			}
			header("location: ".$_SERVER["HTTP_REFERER"]);
		}
	}