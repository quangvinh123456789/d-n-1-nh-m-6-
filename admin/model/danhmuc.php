<?php
function loadAll_danhmuc($key = "", $iddm = 0){
    $sql = "select * from danhmuc";
    if ($key != "") {
        $sql .= " where name = '$key'";
    }
    if($iddm != 0){
        $sql .= " WHERE id = $iddm";
    }
    return pdo_query($sql);
}
function insert_dm($name, $img){
    $sql = "insert into danhmuc(name, img) values('$name', '$img')";
    pdo_execute($sql);
}
// function delete_dm($id){
//     $sql = "delete from danhmuc where id = $id";
//     pdo_execute($sql);
// }