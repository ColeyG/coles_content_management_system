<?php
    require_once('phpscripts/config.php');
    confirm_logged_in();
    include('phpscripts/connect.php');

    $id = $_GET['id'];

    $query = "DELETE FROM tbl_content WHERE content_id = '$id'";
    $queryActual = mysqli_query($link,$query);
    
    //echo $query;

    mysqli_close($link);

    redirect_to('../index.php');
?>