<?php
require_once('db_credentials.php');
require_once('database.php');
include "headerEm.php";
$db = db_connect();

if ($_SERVER['REQUEST_METHOD'] == 'get') {

    $title = $_GET['title'];
    $author = $_GET['author'];
    $genre = $_GET['genre'];

    $sql = "SELECT * FROM books WHERE ";
    $conditions = [];

    if (!empty($title)) {
        $conditions[] = "title LIKE '%$title%'";
    }

    if (!empty($author)) {
        $conditions[] = "author LIKE '%$author%'";
    }

    if (!empty($genre)) {
        $conditions[] = "genre LIKE '%$genre%'";
    }

    if (!empty($conditions)) {
        $sql .= implode(" AND ", $conditions);
    } 
    else {
        $sql .= "1"; // No specific conditions, retrieve all books
    }

$sql .= " ORDER BY title ASC";

$result_set = mysqli_query($db, $sql);
}
?>