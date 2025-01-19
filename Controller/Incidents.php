<?php
class Incident {
    private $TicketNo;
    private $firstName;
    private $lastName;
    private $comments;

    public function __construct($TicketNo, $firstName, $lastName, $comments) {
        $this->TicketNo = $TicketNo;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->comments = $comments;
    }

    public function getTicketNo() {
        return$this->TicketNo;
    }
    public function setTicketNo($value) {
        $this->TicketNo = $value;
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
        $this->lastName;
    }

    public function getComments() {
        return $this->comments;
    }
    public function setComments($value) {
        $this->comments = $value;
    }
}
?>