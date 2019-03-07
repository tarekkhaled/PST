<?php 
include '../config/config.php';
include '../classes/database.php';

if (isset($_GET['score']))
    $score = $_GET['score'];

$db = new Database;

$query = "UPDATE mega_applicants
SET user_score = $score
WHERE id = 1; ";

$db->insert_query($query);
