<?php
    include 'dbconn.php';

    $id = $_GET['id'];
    $sqlDelete = "DELETE FROM book_form WHERE id='$id'";
    mysqli_query($conn, $sqlDelete);

    header("location: booked.php");
?>