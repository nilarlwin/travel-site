<?php

class Post{
	private $conn;
	public function __construct($connection){
       $this->conn=$connection;
	}
	public function create($title,$description,$image){
		try{
		$state=$this->conn->prepare("INSERT INTO post (title,description,image) VALUES (:title,:description,:image)");
		$state->bindParam(":title",$title);
		$state->bindParam(":description",$description);
		$state->bindParam(":image",$image);
		$state->execute();
		return true;
	     }catch(Exception $e){

	     }
	}

	public function getAll(){
		try{
			$state=$this->conn->prepare("SELECT * FROM post");
			$state->execute();
			$posts=$state->fetchAll(PDO::FETCH_ASSOC);
			return $posts;
		}catch(Exception $e){
			
		}
	}

	public function get($id){
		try{
			$state=$this->conn->prepare("SELECT * FROM post WHERE id=:id");
			$state->bindParam(":id",$id);
			$state->execute();
			$post=$state->fetch(PDO::FETCH_ASSOC);
			return $post;
		}catch(Exception $e){
			print_r($e);
		}
	}

	public function update($id,$title,$description,$image){
		try{
            $state=$this->conn->prepare("UPDATE post SET title=:title,description=:description,image=:image WHERE id=:id");
            $state->bindParam(":title",$title);
            $state->bindParam(":description",$description);
            $state->bindParam(":image",$image);
            $state->bindParam(":id",$id);
            $state->execute();
            return true;
		}catch(Exception $e){

		}
	}

	public function delete($id){
		try{
          $state=$this->conn->prepare("DELETE FROM post WHERE id=:id");
          $state->bindParam(":id",$id);
          $state->execute();
          return true;
		}catch(Exception $e){
			print_r($e);
		}
	}

}