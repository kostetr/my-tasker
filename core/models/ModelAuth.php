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
            $query = "INSERT INTO " . $this->table . "(`id`, `name`, `surname`, `login`, `password`, `referral_link`) VALUES (NULL, '" . $user['name'] . "', '" . $user['surname'] . "', '" . $user['login'] . "', '" . $user['password'] . "', '" . $user['referral_link'] . "');";
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
}
