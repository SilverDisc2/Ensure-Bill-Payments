   <?php
    include_once("hostcon.php");

    $uName = $_REQUEST["uname"];
    $pWord = $_REQUEST["pword"];

    $getUser = "SELECT * FROM users WHERE uName = '".$uName."' AND pass = '".md5($pWord)."'";
    $trigerQuery = mysql_query($getUser);


    $num = mysql_num_rows($trigerQuery);
    $row = mysql_fetch_array($trigerQuery);

    if($num > 0){
        //creating session
        $_SESSION["iD"] = $row["uId"];
        $_SESSION["uType"] = $row["admin"];

        if($row["admin"] == "Yes"){

            header("location:admin.php");
            exit();
        }else{
            header("location:user.php");
            exit();
        }
    }else{//if the user details don't match up
        header("location:index.php?login=Login Failed! Please Try Again.");
        exit();
    } ?>

