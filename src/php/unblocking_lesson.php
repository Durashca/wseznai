<?php
session_start();
if (isset($_SESSION['user_progress'])){
    $progress = $_SESSION['user_progress'] / 10;
    echo "<script>";
    echo "let materialElem = document.querySelectorAll('.list-lessons a');";
    echo "for (let i = 0; i <= $progress; i++){";
    echo "materialElem[i].classList.remove('disabled');";
    echo "}";
    echo "</script>";
}
?>