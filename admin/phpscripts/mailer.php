<?php
    function mailer($emailTo,$subject,$text){
        mail($emailTo,$subject,$text,$headers);
    }
?>