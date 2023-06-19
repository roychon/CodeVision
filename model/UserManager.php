<?php

require_once "Manager.php";
// TODO: Rename this and rename the file
class UserManager extends Manager
{
    // CREATING A NEW USER
    public function addUser($username, $email, $password)
    {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $db = $this->dbConnect();
        $req = $db->prepare("INSERT INTO user (username, email, password) VALUES (:username, :email, :password)");
        $req->bindParam("username", $username, PDO::PARAM_STR);
        $req->bindParam("email", $email, PDO::PARAM_STR);
        $req->bindParam("password", $hashed_password, PDO::PARAM_STR);
        $req->execute();
    }

    public function insertNewProject($gif, $title, $description, $tags, $languages)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("INSERT INTO project (gif, title, description)  VALUES (:gif, :title, :description)"); //TODO:insert into tag table and language table)
        $req->bindParam("gif", $gif, PDO::PARAM_STR);
        $req->bindParam("title", $title, PDO::PARAM_STR);
        $req->bindParam("description", $description, PDO::PARAM_STR);
        $req->execute();
    }
};
