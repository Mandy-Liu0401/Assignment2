

<? php
require_once('db_credentials.php');
require_once('database.php');
include "headerEm.php";
$db = db_connect();

$sql ="select * from books";

$query =mysqli_query($sql) or die(mysql_error());

?>



<table>
    <tr>
        <td>Title</td>
        <td>Author</td>
        <td>Genre</td>
    </tr>


<?php while (row=mysql_fetch_array($query)){ ?>

    <tr>
        <td><?php echo $row['title']; ?></td>
        <td>A<?php echo $row['author']; ?></td>
        <td><?php echo $row['genre']; ?></td>
    </tr>


?> } ?>
</table>