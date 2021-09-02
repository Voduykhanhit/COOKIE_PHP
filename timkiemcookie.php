<?php
    if(isset($_COOKIE["infouser"])){
        echo "<pre>";
        $data = unserialize($_COOKIE["infouser"]);
        print_r($data["username"]);
    }else{
        echo "Không tìm thấy cookie này";
    }
?>