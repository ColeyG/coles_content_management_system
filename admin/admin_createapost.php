<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once('phpscripts/config.php');
confirm_logged_in();

    $title = "Create a Post";

    $genQuery = getAll("tbl_genre");

    if(isset($_POST['submitImage'])){
        $titleP = trim($_POST['title']);
        $slug = trim($_POST['slug']);
        $desc = trim($_POST['desc']);
        $image = $_FILES['image'];
        submitImage($titleP,$slug,$desc,$image);
    }

    if(isset($_POST['submitVideo'])){
        $titleP = trim($_POST['title']);
        $slug = trim($_POST['slug']);
        $desc = trim($_POST['desc']);
        $youtubeId = trim($_POST['video']);
        submitVideo($titleP,$slug,$youtubeId,$desc);
    }

    if(isset($_POST['submitTrailer'])){
        $titleP = trim($_POST['title']);
        $slug = trim($_POST['slug']);
        $desc = trim($_POST['desc']);
        $youtubeId = trim($_POST['video']);
        $genre = trim($_POST['genre']);
        submitTrailer($titleP,$slug,$youtubeId,$desc,$genre);
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
                <a class="btn btn-primary m-2 postButtons disabled" id="article" class="but" >Articles</a>
                <a class="btn btn-primary m-2 postButtons" id="trailer" class="but" >Trailer Depot</a>
            </div>
        </div>
        <div id="cmsContainer" class="flexInDown">
            <div class="flexIn blue mainButtonsCon m-1 postSec" id="videoSec">
                <form action="admin_createapost.php" method="post" class="flexInDown" enctype="multipart/form-data">
                    <label>Title:</label>
                    <input  type="text" name="title" value="">
                    <label>Subtitle/Slugline:</label>
                    <input  type="text" name="slug" value="">
                    <label>Youtube Link:</label>
                    <input  type="text" name="video" value="">
                    <label>Description:</label>
                    <input  type="text" name="desc" value="">
                    <input class="btn btn-primary m-1" type="submit" name="submitVideo" value="Post Video">
                </form>
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
            <div class="flexIn blue mainButtonsCon m-1 postSec" id="trailerSec">
                <form action="admin_createapost.php" method="post" class="flexInDown" enctype="multipart/form-data">
                    <label>Title:</label>
                    <input  type="text" name="title" value="">
                    <label>Subtitle/Slugline:</label>
                    <input  type="text" name="slug" value="">
                    <label>Youtube Link:</label>
                    <input  type="text" name="video" value="">
                    <label>Description:</label>
                    <input  type="text" name="desc" value="">
                    <label>Genre:</label>
                    <select name="genre">
                    <option value="">Please Select a Genre</option>
                    <?php while($row= mysqli_fetch_array($genQuery)){
        	echo "<option value=\"{$row['genre_id']}\">{$row['genre_name']}</option>";}?>
                    <input class="btn btn-primary m-1" type="submit" name="submitTrailer" value="Post Video">
                </form>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>