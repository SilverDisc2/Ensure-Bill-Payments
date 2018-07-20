<?php
    SESSION_START();

    //Connection to the mysql server
    include("connection.php"); 

    //Function to sanitize values receive from the form.
    function clear($str){
        $str = @trim($str);
        if(get_magic_quotes_gpc()){
            $str = stripslashes($str);
        }else {
            $str = stripslashes($str);
        }
        return mysqli_real_escape_string($link, $str);    
    }


  
    $email = $_POST['email'];
    $password = $_POST['pass'];

    //Create query
    $qury = "SELECT * FROM user WHERE email= '{$email}' AND password = '{$password}'";
    $result = mysqli_query($link, $qury);

    //Check whethe the query was successful or not
    if($result){
        if(mysqli_num_rows($result)>0){
            //login successfull
            session_regenerate_id();
            $member = mysqli_fetch_array($result);

            
            $_SESSION['SESS_MEMBER_ID']= $member['id'];
            
            $_SESSION['SESS_MEMBER_PASS']= $member['password '];
            $_SESSION['SESS_MEMBER_email']= $member['email'];
            
            SESSION_WRITE_CLOSE();
            header("location: index.php");
            exit();
        }else{
            header("location: login.php");
            exit();
        
        }
    
    }else{
        die("Query Faild");
    }

?>