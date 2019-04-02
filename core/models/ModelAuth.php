<?php

namespace core\models;

use mysqli;

class ModelAuth extends AbstractModel {

    public function __construct() {
        parent::__construct();
        $this->table = 'users';
    }

    public function addUser($user) {
        if ($this->db->connect_errno === 0) {
            $query = "INSERT INTO " . $this->table . " (`id`, `id_doc`, `login`, `password`, `name`, `surname`, `patronymic`, `phone`, `gender_id`, `birthday`, `post_id`, `group_id`, `registered`, `reset_rating_date`) VALUES (NULL, '" . $user['id_doc'] . "', '" . $user['login'] . "', '" . $user['password'] . "', '" . $user['name'] . "', '" . $user['surname'] . "', '" . $user['patronymic'] . "', '" . $user['phone'] . "', '" . $user['gender_id'] . "', '" . $user['birthday'] . "', '" . $user['post_id'] . "', '" . $user['group_id'] . "','" . $user['registered'] . "', NULL);";
            return $this->db->query($query);
        }
    }

    public function selectSecretPass() {
        $query = "SELECT * FROM groups";
        $result = $this->db->query($query);
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }

    public function selectAllLogins() {
        $query = "SELECT login FROM users";
        $result = $this->db->query($query);
        if ($result) {
            return $result->fetch_all(MYSQLI_NUM);
        }
        return false;
    }

    public function selectAccessLevel($userID) {
        $query = "SELECT value FROM groups WHERE id='" . $userID . "' LIMIT 1";
        $result = $this->db->query($query);
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }
}
    