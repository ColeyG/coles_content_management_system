<?php

    function submitImage($title,$slug,$desc,$image){
        include('connect.php');
        $time=date('d-m-y').' at: '.date('h:i');
        $timeStamp=date('d-m-y-h-m-s');
        $ranNumberStamp=substr(str_shuffle('0123456789'),-5);
        $imageNameNew=$timeStamp."_".$ranNumberStamp."_".$image['name'];
        $postString = "INSERT INTO tbl_content VALUES(NULL,'{$title}','{$slug}','{$imageNameNew}','{$desc}','Image','{$imageNameNew}','{$_SESSION['users_name']}','{$time}')";
        //echo $postString;
        if($_FILES['image']['type'] == "image/jpeg" ||
			 $_FILES['image']['type'] == "image/jpg" ||
			 $_FILES['image']['type'] == "image/png"
			 ){
            //echo "found an image";
            $target = "uploads/".$timeStamp."_".$ranNumberStamp."_"."{$image['name']}";
            if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
                $orig = "uploads/{$image['name']}";
            }
        }else{
            echo "failed to upload image";
        }
        $postQuery = mysqli_query($link,$postString);
        if($postQuery){
            //echo "It worked!";
        }else{
            //echo "Is not working!";
        }
        mysqli_close($link);
    }

    function submitVideo($titleP,$slug,$youtubeId,$desc){
        include('connect.php');
        $time=date('d-m-y').' at: '.date('h:i');
        
        parse_str( parse_url( $youtubeId, PHP_URL_QUERY ), $my_array_of_vars );
        $id = $my_array_of_vars['v'];
        $cover=$id;

        $postString = "INSERT INTO tbl_content VALUES(NULL,'{$titleP}','{$slug}','{$cover}','{$desc}','Video','{$id}','{$_SESSION['users_name']}','{$time}')";

        //echo $postString;
        $postQuery = mysqli_query($link,$postString);
        if($postQuery){
            //echo "It worked!";
        }else{
            //echo "Is not working!";
        }
        mysqli_close($link);
    }


?>