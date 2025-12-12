<?php
session_start();
// mysqli database connection
const DB_NAME = 'coachnext';
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';

$conn = mysqli_connect("localhost","root","","pictogram") or die("Connection failed : " . mysqli_connect_error());
