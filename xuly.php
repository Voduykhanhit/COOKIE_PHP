<?php
    $username = "voduykhanh";
    $password = "123456";
    if(isset($_POST["submit"]) && isset($_POST["username"])  && isset($_POST["password"]))
    {
        if(isset($_POST["checkmember"])){
            // $_COOKIE["username"] = $username;
            // $_COOKIE["password"] = $password;
            $cookie_value = [
                "username" => $username,
                "password"=> $password,
            ];
            
            setcookie("infouser",serialize($cookie_value),time()+600,"/");
        }else{

        }
    }
?> 