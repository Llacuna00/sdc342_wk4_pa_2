<?php
require_once('../Model/user_db.php');
require_once('user.php');

class UserController {
    private static function rowToUser($row) {
        $user = new User($row['FirstName'],
            $row['LastName'],
            $row['EMail'], 
            $row['Password'],
            $row['RegistrationDate'], 
            $row['UserLevel'],
            $row['UserId']);
            
        return $user;
    }

    //get login credentials
    public static function validUser($email, $password) {
        $queryRes = UserDB::getUserByEmail($email);
        
        if ($queryRes) {

            //process the user row
            $user = self::rowToUser($queryRes);
            if ($user->getPassword() === $password) {
                return $user->getUserLevel();
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function getUsers() {
        $queryRes = UserDB::getUsers();
        if ($queryRes) {
            $Users = array();
            foreach ($queryRes as $row) {
                $Users[] = self::rowToUser($row);
                }
                return $Users;
            } else {
                return false;
        }        
    }
}
?>