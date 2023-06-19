<?php

require_once "Manager.php";
// TODO: Rename this and rename the file
class UserManager extends Manager
{
    // CREATING A NEW USER
    public function addUser($username, $email, $password)
    {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        // maybe we add the check here? 
        $db = $this->dbConnect();
        $req = $db->prepare("INSERT INTO user (username, email, password) VALUES (:username, :email, :password)");
        $req->bindParam("username", $username, PDO::PARAM_STR);
        $req->bindParam("email", $email, PDO::PARAM_STR);
        $req->bindParam("password", $hashed_password, PDO::PARAM_STR);
        $req->execute();
    }

    public function logIn($username, $password)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT id, username, password, email FROM user WHERE username = :username");
        $req->execute([
            "username" => $username
        ]);

        $result = $req->fetch();
        // $array = [$result->id, $result->username, $result->email, $result->password];
        return $result;
    }

    // EDITING A USER
    public function submitEditedUser(
        $id,
        $first_name,
        $last_name,
        $username,
        $email,
        $password,
        $profile_image,
        $bio,
        $linked_in,
        $git_hub
    ) {
        $db = $this->dbConnect();
        $req = $db->prepare("UPDATE user 
                             SET first_name = :first_name, 
                                 last_name = :last_name, 
                                 username = :username,
                                 email = :email,
                                 password = :password,
                                 profile_img = :profile_img,
                                 bio = :bio,
                                 linkedIn = :linkedIn,
                                 gitHub = :gitHub   
                             WHERE id = :id");
        $req->bindParam("id", $id, PDO::PARAM_INT);
        $req->bindParam("first_name", $first_name, PDO::PARAM_STR);
        $req->bindParam("last_name", $last_name, PDO::PARAM_STR);
        $req->bindParam("username", $username, PDO::PARAM_STR);
        $req->bindParam("email", $email, PDO::PARAM_STR);
        $req->bindParam("password", password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);
        $req->bindParam("profile_img", $profile_image, PDO::PARAM_STR);
        $req->bindParam("bio", $bio, PDO::PARAM_STR);
        $req->bindParam("linkedIn", $linked_in, PDO::PARAM_STR);
        $req->bindParam("gitHub", $git_hub, PDO::PARAM_STR);
        $req->execute();
    }
}
