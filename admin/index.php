<?php
ob_start();
session_start();
include 'header.php';
include './model/pdo.php';
include './model/danhmuc.php';
include './model/sanpham.php';

$list_dm = loadAll_danhmuc();

if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
        case 'add_dm':{
            if(isset($_POST['submit']) && $_POST['submit']){
                $name = $_POST['name'];
                $img = null;
                $listone_dm = loadAll_danhmuc($name, 0);
                if(is_array($listone_dm) && count($listone_dm) > 0){
                    $err = "Danh mục đã tồn tại";
                }
                else{
                    if ($_FILES['img']['name'] != ""){
                        $img = time() . "_" . $_FILES['img']['name'];
                        move_uploaded_file($_FILES['img']['tmp_name'], "../uploads/img_dm/$img");
                    }
                    insert_dm($name, $img);
                    $thongbao = "Thêm danh mục thành công";
                }
            }
            include 'danhmuc/add_dm.php';
            break;
        }
        case 'list_dm':{
            $list_dm = loadAll_danhmuc();
            include 'danhmuc/list_dm.php';
            break;
        }
        
    }
}gfcfyyhghygrtfyt
