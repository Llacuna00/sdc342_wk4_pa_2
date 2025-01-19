<?php
class User {
    private $userId;
    private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $registrationDate;
    private $userLevel;

    public function __construct($firstName, $lastName, $email,
        $password, $registrationDate, $userLevel, $userId = null) 
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
        $this->registrationDate = $registrationDate;
        $this->userLevel = $userLevel;
        $this->userId = $userId;
    }

    public function getUserId() {
        return $this->userId;
    }
    public function setPersonNo($value) {
        $this->userId = $value;
    }

    public function getFirstName() {
        return $this->firstName;
    }
    public function setFirstName($value) {
        $this->firstName = $value;
    }

    public function getLastName() {
        return $this->lastName;
    }
    public function setLastName($value) {
        $this->lastName = $value;
    }

    public function getPassword() {
        return $this->password;
    }
    public function setPassword($value) {
        $this->password = $value;
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($value) {
        $this->email = $value;
    }

    public function getRegistrationDate() {
        return $this->registrationDate;
    }
    public function setRegistrationDate($value) {
        $this->registrationDate = $value;
    }

    public function getUserLevel() {
        return $this->userLevel;
    }
    public function setUserLevel($value) {
        $this->userLevel = $value;
    }


}
?>