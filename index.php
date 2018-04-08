<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);
    include('admin/phpscripts/connect.php');

    require_once('admin/phpscripts/config.php');
    $title = 'Trailer Gallery';
    $genQ=getAll('tbl_genre');

    if(isset($_GET['genre'])){
        $genrePage=$_GET['genre'];
    }

    if(isset($genrePage)){
        $trailersQuery="SELECT * FROM tbl_content, tbl_mov_genre, tbl_genre WHERE tbl_content.content_id = tbl_mov_genre.content_id AND tbl_mov_genre.genre_id = tbl_genre.genre_id AND tbl_content.content_type = 'Trailer' AND tbl_genre.genre_id = '{$genrePage}'";
    }else{
        $trailersQuery="SELECT * FROM tbl_content WHERE content_type = 'Trailer'";
    }

    $trailers=mysqli_query($link,$trailersQuery);
    //echo $genrePage;
    mysqli_close($link);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title;?></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="admin/css/bootswatch.css" rel="stylesheet">
    <link href="admin/css/main.css" rel="stylesheet">
</head>
<body>
    <header id="mainHeader" class="container-fluid flexIn green">
        <div><h6 class="centerText"><?php echo $title;?></h6></div>
        <h2>Cole's CMS Landing</h2>
        <div class="flexInDown">
        </div>
    </header>
    <div class="flexIn blue filterButtonsCon collapser collapse">
    <a class='btn btn-dark' href='index.php'>All</a>
    <?php while($row= mysqli_fetch_array($genQ)){
        //echo "<option value=\"{$row['genre_id']}\">{$row['genre_name']}</option>";};
        echo "<a class='btn btn-dark' href='index.php?genre={$row['genre_id']}'>{$row['genre_name']}</a>";
    }
    ?>
    </div>
    <div class='flexIn'>
    <?php
        while($row = mysqli_fetch_array($trailers)){
            echo "<div>
            <a class='cardA' href='trailer.php?id={$row['content_id']}'>
                <div class='card'>
                    <img class='cardImage' src='https://img.youtube.com/vi/{$row['content_data']}/maxresdefault.jpg' alt='{$row['content_title']}'>
                    <h2 class='cardTitle'>{$row['content_title']}</h2>  
                    <div class='cardPinStripe'></div>
                    <h2 class='cardTitle sub'>{$row['content_slug']}</h2>
                    <p class='cardText'>{$row['content_desc']}</p>
                </div>
            </a>
            ";
            if(isset($_SESSION['users_id'])){
                echo "<a href='admin/delete.php?id={$row['content_id']}'>Delete</a>";
            }
            echo "</div>";
        }
    ?>
    </div>
    <script src="js/main.js
    "></script>
</body>
</html>