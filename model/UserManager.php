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
    // INSERT NEW PROJECT
    public function insertNewProject($user_id, $gif, $title, $description, $tags, $languages)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("INSERT INTO project (user_id, gif, title, description)  VALUES (:user_id, :gif, :title, :description)"); //TODO:insert into tag table and language table)
        $req->bindParam("gif", $gif, PDO::PARAM_STR);
        $req->bindParam("title", $title, PDO::PARAM_STR);
        $req->bindParam("description", $description, PDO::PARAM_STR);
        $req->bindParam("user_id", $user_id, PDO::PARAM_STR);
        $req->execute();

        // TODO: Find out how to get the id of a row that was just inserted
        // $selectReq = $db->query(" id FROM project ORDER BY id DESC LIMIT 1");
        $project_id = $db->lastInsertId();

        // echo "LAST ID: " . $last_id . "<br><br><br><br><br>";

        $languageArray = explode(",", $languages);
        foreach ($languageArray as $language) {
            // $selectReq = $db->prepare("SELECT language_name FROM language WHERE language_name = ?");
            // $selectReq->execute([$language]);

            // if ($fetchLanguage = $selectReq->fetch()) {
            // insert into database
            try {
                $insertReq = $db->prepare("INSERT INTO language (language_name) VALUES (?)");
                $insertReq->execute([$language]);
            } catch (Exception $e) {
                // TODO: do something later maybe?
            }
            // TODO: SELECT the id of the language 
            $langSelect = $db->prepare("SELECT id FROM language WHERE language_name =?");
            $langSelect->execute([$language]);
            $langId = $langSelect->fetch()->id;

            // TODO: Using the id, insert an entry into the project_language_map table
            $req = $db->prepare("INSERT INTO project_language_map (project_id, language_id) VALUES (?, ?)");
            $req->execute([$project_id, $langId]);
        };
        $tagArray = explode(",", $tags);
        foreach ($tagArray as $tag) {

            try {
                $insertReq = $db->prepare("INSERT INTO tag (tag_name) VALUES (?)");
                $insertReq->execute([$tag]);
            } catch (Exception $e) {
                // TODO: do something later maybe?
            }
            // TODO: SELECT the id of the tag 
            $tagSelect = $db->prepare("SELECT id FROM tag WHERE tag_name =?");
            $tagSelect->execute([$tag]);
            $tagId = $tagSelect->fetch()->id;
            // TODO: Using the id, insert an entry into the project_tag_map table
            $req = $db->prepare("INSERT INTO project_tag_map (project_id, tag_id) VALUES (?, ?)");
            $req->execute([$project_id, $tagId]);
        };
    }

    public function logIn($username, $password)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT id, username, password FROM user WHERE username = :username");
        $req->execute([
            "username" => $username
        ]);

        $result = $req->fetch();
        // $array = [$result->username, $result->password];
        return $result;
    }
}
