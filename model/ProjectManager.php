<?php

require_once "Manager.php";
class ProjectManager extends Manager
{
    public function getCards()
    {
        $db = $this->dbConnect();
        $sql = "SELECT u.id as user_id, u.profile_img, p.id as id, p.is_active, p.title, p.gif, p.description, l.language_name
            FROM user u
            INNER JOIN project p
            ON u.id = p.user_id
            INNER JOIN project_language_map plm
            ON p.id = plm.project_id
            INNER JOIN language l
            ON plm.language_id = l.id;";

        $res = $db->query($sql);
        // $projects = $res->fetchAll();


        $projects = [];
        // $languages = [];
        while ($data = $res->fetch()) {
            $project_id = $data->id;
            if (isset($projects[$project_id])) {
                $projects[$project_id]->languages[] = $data->language_name;
            } else {
                $projects[$project_id] = $data;
                $projects[$project_id]->languages = [];
                $projects[$project_id]->languages[] = $data->language_name;

                unset($projects[$project_id]->language_name);
            }
        }
        return $projects;
        // return $languages;
    }

    public function projectVotes()
    {
        $db = $this->dbConnect();

        $sql = "SELECT u.id, p.id, pv.user_id, pv.project_id
                FROM project p 
                INNER JOIN project_votes pv
                ON pv.project_id = :project_id
                INNER JOIN user u 
                ON pv.user_id = :user_id";

        $res = $db->query($sql);
        $data = $res->fetch();

        if ($data) {
            // run an UPDATE


        } else {
            // do an INSERT
        }

        return $data;
    }
}
