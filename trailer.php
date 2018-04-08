<?php
    $id = $_GET['id'];
    //echo $id;
    include('admin/phpscripts/connect.php');

    $videoString="SELECT * FROM tbl_content WHERE content_id = '{$id}'";
    $videoQuery=mysqli_query($link,$videoString);

    mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trailer</title>
    <link href="trailerStyle/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton|Lato" rel="stylesheet">
</head>
<body>
<?php
    while($row = mysqli_fetch_array($videoQuery)){
        echo "<h1 class='title'>{$row['content_title']}</h1>";
        echo "<h6 class='title'>{$row['content_slug']}</h6>";
        echo "<iframe width='90%' height='90%' src='https://www.youtube.com/embed/{$row['content_data']}' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";
        echo "<p class='desc'>{$row['content_desc']}</p>";
    }
?>
</body>
</html>