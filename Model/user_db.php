<?php
require_once('database.php');
    class UserDB {
        public static function getUserByEmail($email) {
            $db = new Database();
            $dbConn = $db->getDbConn();

            if ($dbConn) {
                $query = "SELECT * FROM users
                    WHERE users.EMail = '$email'";
                $result = $dbConn->query($query);
                return $result->fetch_assoc();
            } else {
                return false;
            }
        }

        public static function getUsers() {
            $db = new Database();
            $dbConn = $db->getDbConn();

            if($dbConn) {
                $query = "SELECT * FROM users";
                return $dbConn->query($query);
            } else {
                return false;
            }
        }

        public static function getUserByNo($userId) {
            $db = new Database();
            $dbConn = $db->getDbConn();

            if($dbConn) {
                $query = "SELECT * FROM users
                    WHERE userId = '$userId'";
                return $dbConn->query($query);
            } else {
                return false;
            }
        }
    }
?>