<?php
    if($_SERVER['REQUEST_METHOD' == 'POST']) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo "<script type='text/javascript'>alert('$username');</script>";
        echo "<script type='text/javascript'>alert('$password');</script>";
    }
?>