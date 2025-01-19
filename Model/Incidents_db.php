<?php
require_once('database.php');

class IncidentsDB {
    public static function getIncidents() {
        $db = new Database();
        $dbConn = $db->getDbConn();

        if ($dbConn) {
            $query = "SELECT * FROM Incidents";

            return $dbConn->query($query);
        } else {
            return false;
        }
    }

    public static function getIncidentByNo($TicketNo) {
        $db = new Database();
        $dbConn = $db->getDbConn();

        if ($dbConn) {
            $query = "SELECT * FROM Incidents
                WHERE TickettNo = '$TicketNo'";

            return $dbConn->query($query);
        } else {
            return false;
        }
    }
}
?>