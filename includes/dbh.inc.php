<?php

$serverName = "remotemysql.com";
$dBUsername = "tGlXeaiQC0";
$dBPassword = "WKRz13o5BI";
$dBName = "tGlXeaiQC0";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName, 3307);

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}


