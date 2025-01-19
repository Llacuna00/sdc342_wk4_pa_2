<?php
require_once('../Controller/Incidents.php');
require_once('../Controller/Incidents_controller.php');
?>
<html>
<head>
    <title>Week4 PA - Lizzi Llacuna</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <h1>Week4 PA - Lizzi Llacuna</h1>
    <h2>Manage Incidents</h2>
    <table>
        <tr>
            <th>Ticket Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Problem</th>
        </tr>
        <?php foreach (IncidentsController::getAllIncidents() as $Incident) : ?>
        <tr>
            <td><?php echo $Incident->getTicketNo(); ?></td>
            <td><?php echo $Incident->getFirstName(); ?></td>
            <td><?php echo $Incident->getLastName(); ?></td>
            <td><?php echo $Incident->getComments(); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <form method="POST">
        <button><a href="tech.php">Home</a></button>
        <button><a href="../index.php">Logout</a></button>
    </form>
</body>