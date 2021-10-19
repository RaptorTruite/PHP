<?php 
    session_destroy();
    
    if(empty($_SESSION)){
        header("Location: login");
    }
?>