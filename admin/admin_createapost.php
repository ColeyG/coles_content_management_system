<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once('phpscripts/config.php');
confirm_logged_in();

    $title = "Create a Post";

    if(isset($_POST['submitImage'])){
        $titleP = trim($_POST['title']);
        $slug = trim($_POST['slug']);
        $desc = trim($_POST['desc']);
        $image = $_FILES['image'];
        submitImage($titleP,$slug,$desc,$image);
    }

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
                <a class="btn btn-primary m-2 postButtons" id="video" class="but" >Videos</a>
                <a class="btn btn-primary m-2 postButtons" id="image" class="but" >Images</a>
                <a class="btn btn-primary m-2 postButtons" id="article" class="but" >Articles</a>
            </div>
        </div>
        <div id="cmsContainer" class="flexInDown">
            <div class="flexIn blue mainButtonsCon m-1 postSec" id="videoSec">
                video
            </div>
            <div class="flexIn blue mainButtonsCon m-1 postSec" id="imageSec">
                <form action="admin_createapost.php" method="post" class="flexInDown" enctype="multipart/form-data">
                    <label>Title:</label>
                    <input  type="text" name="title" value="">
                    <label>Subtitle/Slugline:</label>
                    <input  type="text" name="slug" value="">
                    <label>Description:</label>
                    <input  type="text" name="desc" value="">
                    <label>Image:</label>
                    <input type="file" name="image" value="">
                    <input class="btn btn-primary m-1" type="submit" name="submitImage" value="Post Image">
                </form>
            </div>
            <div class="flexIn blue mainButtonsCon m-1 postSec" id="articleSec">
                article
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>