<?php
session_start();
	if(!isset($_SESSION['iduser'])){
        header('Location:index.php?p=login');
    }
?>