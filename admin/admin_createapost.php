<?php
require_once('phpscripts/config.php');
confirm_logged_in();
require_once('phpscripts/connect.php');

    $title = "Create a Post";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title?></title>
    <?php include('includes/styles.php');?>
</head>
<body>
    <?php include('includes/header.php');?>
    <div class="container">
        <div id="cmsContainer" class="flexInDown">
            <div class="flexIn blue mainButtonsCon">
                <a class="btn btn-primary m-2 postButtons" id="video" class="but" >Video</a>
                <a class="btn btn-primary m-2 postButtons" id="image" class="but" >Image</a>
                <a class="btn btn-primary m-2 postButtons" id="article" class="but" >Articles</a>
            </div>
        </div>
        <div id="cmsContainer" class="flexInDown">
            <div class="flexIn blue mainButtonsCon m-1 postSec" id="videoSec">
                video
            </div>
            <div class="flexIn blue mainButtonsCon m-1 postSec" id="imageSec">
                image
            </div>
            <div class="flexIn blue mainButtonsCon m-1 postSec" id="articleSec">
                article
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>