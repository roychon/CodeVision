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

    public function logIn($username, $password)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT username, password FROM user WHERE username = :username");
        $req->execute([
            "username" => $username
        ]);

        $result = $req->fetch();
        $array = [$result->username, $result->password];
        return $array;
    }


    // TODO: check how to use $_POST['id'] so that it will grab the information for the user
    public function getUserInfo($user)
    {
        //i need to fetch all of the projects, languages, the profile pic, adctive status
        //where it all matches on the user_id
        $db = $this->dbConnect();
        $sql = "SELECT u.id as user_id, u.profile_img, u.username, u.is_active, u.bio, u.gitHub, u.linkedIn,
        p.id as id, u.is_active, p.title, p.gif, p.description, l.language_name
            FROM user u
            INNER JOIN project p
            ON u.id = p.user_id
            INNER JOIN project_language_map plm
            ON p.id = plm.project_id
            INNER JOIN language l
            ON plm.language_id = l.id;
            WHERE u.id = ?";


        $res = $db->prepare($sql);

        $res->execute([$user]);

        $profiles = [];
        while ($data = $res->fetch()) {
            $profile_id = $data->id;
            if (isset($profiles[$profile_id]) && $profiles[$profile_id] == $user) {
                $profiles[$profile_id]->languages[] = $data->language_name;
            } else {
                $profiles[$profile_id] = $data;
                $profiles[$profile_id]->languages = [];
                $profiles[$profile_id]->languages[] = $data->language_name;

                unset($profiles[$profile_id]->language_name);
            }
        }
        return $profiles;
    }
}
