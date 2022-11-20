<?php

$connection = mysqli_connect('localhost', 'root', 'root', 'chat_db');

if (mysqli_connect_errno()) {
	echo 'failed to connect: ' . mysqli_connect_error();
	exit();
}