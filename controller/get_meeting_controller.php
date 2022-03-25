<?php 
require '../model/database.php';
require '../model/meeting_model.php';

$db = new Db();
$meeting = new Meeting($db->conn());
$get_meeting = $meeting->get_Metting();

include '../view/meeting_view.phtml';
?>