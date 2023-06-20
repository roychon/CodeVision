<?php

require_once "Manager.php";
class ProjectManager extends Manager
{
    public function getCards()
    {
        $db = $this->dbConnect();
        $sql = "SELECT u.id as user_id, u.profile_img, p.id as id, u.is_active, p.title, p.gif, p.description, l.language_name
            FROM user u
            INNER JOIN project p
            ON u.id = p.user_id
            INNER JOIN project_language_map plm
            ON p.id = plm.project_id
            INNER JOIN language l
            ON plm.language_id = l.id;";

        $res = $db->query($sql);


        $projects = [];
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
    }

    public function getUserProjects($user_id)
    {
        $db = $this->dbConnect();
        $sql = "SELECT u.id as user_id, u.profile_img, p.id as id, u.is_active, p.title, p.gif, p.description, l.language_name
            FROM user u
            INNER JOIN project p
            ON u.id = p.user_id
            INNER JOIN project_language_map plm
            ON p.id = plm.project_id
            INNER JOIN language l
            ON plm.language_id = l.id
            WHERE u.id = ?";

        $res = $db->prepare($sql);
        $res->execute([$user_id]);


        $projects = [];
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
    }
}
