<?php
include('../../config/database.php');

    $fullname = $_POST['fname'];
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    $enc_pass = md5($passwd);

    /*echo "Your fullname: ". $fullname;
    echo "Your email: ". $email;
    echo "Your password: ". $passwd;
    echo "Your password enc: ". $enc_pass;*/

    $sql = "
        INSERT INTO users (fullname, email, password) 
            values('$fullname', '$email', '$enc_pass')
    ";

    $ans = pg_query($conn,$sql);
    if ($ans){
        header("refresh:0;url=../signin.html");
    }else{
        echo "Error". pg_last_error();
    }

    //close connection
    pg_close($conn)

?>