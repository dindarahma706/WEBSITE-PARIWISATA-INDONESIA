<?php

$connection = mysqli_connect('localhost','root','','book_db');

if (isset($_POST['send'])) 
	{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$location = $_POST['location'];
	$guests = $_POST['guests'];
	$arrivals = $_POST['arrivals'];
	$leaving = $_POST['leaving'];
	
        $sqlUpdate = "UPDATE book_form 
                        SET name='$name', email='$email', phone='$phone', address='$address', location='$location', guests='$guests', arrivals='$arrivals', leaving='$leaving'
                        WHERE id='$id'";
        $queryUpdate = mysqli_query($connection, $sqlUpdate);

        header("location:booked.php");
    	}
?>