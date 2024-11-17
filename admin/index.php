<?php
ob_start();
session_start();
include "header.php";
include "../model/pdo.php";
// include "./global.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
            //quan ly danh muc
} }else {
    include "home.php";
}
include "footer.php";
ob_end_flush();
