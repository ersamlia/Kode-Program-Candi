<?php
require_once 'candiController.php';

if (isset($_GET['id'])){
    $candi = new Candi();
    $candi->delete($_GET['id']);
    header("Location: index.php");
}
?>