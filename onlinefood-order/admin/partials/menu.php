<?php 

    include('../config/constants.php'); 
    include('login-check.php');

?>


<html>
    <head>
        <title>admin system</title>

        <link rel="stylesheet" href="../css/admin.css">
    </head>
    
    <body>
        <!-- Menu Section Starts -->
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">داشبۆرد</a></li>
                    <li><a href="manage-category.php">بابەت</a></li>
                    <li><a href="manage-food.php">رێژەی بابەتەکان</a></li>
                    <li><a href="manage-order.php">بەشی کریارەکان</a></li>
                    <li><a href="manage-admin.php">ئەدمینەکان</a></li>
                    <li><a href="logout.php">چونەدەرەوە</a></li>
                </ul>
            </div>
        </div>
        <!-- Menu Section Ends -->