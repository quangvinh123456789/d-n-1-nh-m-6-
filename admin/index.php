<?php
ob_start();
session_start();
include "header.php";
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
// include "./global.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
            //quan ly danh muc
        case 'add_dm': {
                if (isset($_POST['submit']) && ($_POST['submit'])) {
                    $name = $_POST['name'];
                    $listone_dm = loadAll_danhmuc($name, 0);
                    insert_dm($name);
                    $thongbao = "Thêm danh mục thành công";
                }
                include "danhmuc/add_dm.php";
                break;
            }
        case 'list_dm': {
            $list_dm = loadAll_danhmuc();
            include "danhmuc/list_dm.php";
            break;
        }
        case 'delete_dm': {
            if(isset($_GET['id']) && ($_GET['id']) > 0){
                $loadone_dm = loadAll_danhmuc("", $_GET['id']);
                delete_dm($_GET['id']);
                echo "<script>alert('Xóa danh mục thành công');</script>";
            }
            $list_dm = loadAll_danhmuc();
            include "danhmuc/list_dm.php";
            break;
        }
        case 'update_dm': {
            if(isset($_GET['id']) && ($_GET['id'] >0)){
                $loadone_dm = loadAll_danhmuc("", $_GET['id']);
                if(isset($_POST['submit']) && ($_POST['submit'])) {
                    $name = $_POST['name'];
                    $listone_dm = loadAll_danhmuc($name, 0);
                    update_dm($_GET['id'], $name);
                    $thongbao = "Cap nhap danh mục thanh cong";
                }
                include "danhmuc/update_dm.php";
                break;
            }
            }
    }
} else {
    include "home.php";
}
include "footer.php";
ob_end_flush();
