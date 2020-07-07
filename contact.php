<?php
    $fname=$_REQUEST['fname'];
    $from_mail=$_REQUEST['mailid'];
    $message=$_REQUEST['msg'];

    //check input field
    if (empty($fname) || empty($from_mail) || empty($message)){
        echo "Fill all fields please";
    }else{
        mail("nimshamohammed@gmail.com","You got a Message",$message,"From:$fname<$from_mail>");
        echo "<script type='text/javascript'>
        alert('Your message sent successfully');
        window.history.log(-1);
        </script>"
    }


?>