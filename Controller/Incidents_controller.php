<?php
require_once('Incidents.php');
require_once('../Model/Incidents_db.php');

class IncidentsController {
    private function rowToIncidents($row) {
        $Incidents = new Incident($row['ticketNo'], $row['firstName'],
            $row['lastName'], $row['Comments']);
        $Incidents->setTicketNo($row['ticketNo']);
        return $Incidents;
    }

    public static function getAllIncidents() {
        $queryRes = IncidentsDB::getIncidents();

        if($queryRes) {
            
            $IncidentList = array();
            foreach ($queryRes as $row) {
                
                $IncidentList[] = self::rowToIncidents($row);
            }

            return $IncidentList;
        } else {
            return false;
        }
    }

    public static function getIncidentByNo($TicketNo) {
        $queryRes = IncidentsDB::getIncidentByNo($TicketNo);

        if($queryRes) {
            
            $IncidentList = array();
            foreach ($queryRes as $row) {
                
                $IncidentList[] = self::rowToIncidents($row);
            }

            return $IncidentList;
        } else {
            return false;
        }
    }
}
?>