<?php
function loadAll_danhmuc($key = "", $iddm = 0)
{
    $sql = "SELECT * FROM danhmuc";
    if ($key != "") {
        $sql .= " WHERE name = '$key'";
    }
    if ($iddm > 0) {
        $sql .= " WHERE id = $iddm";
    }
    return pdo_query($sql);
}


//-----------ADMIN---------------//
function insert_dm($name)
{
    $sql = "INSERT INTO `danhmuc`(`name`) VALUES ('$name')";
    pdo_execute($sql);
}


function delete_dm($id)
{
    $sql = "DELETE FROM `danhmuc` WHERE id = '$id'";
    pdo_execute($sql);
}

function update_dm($id, $name)
{
   $sql = " UPDATE `danhmuc` SET `id`='$id',`name`='$name' WHERE 1";
    pdo_execute($sql);
}
function load_sp_cung_loai($idsp, $iddm)
{
    $sql = "SELECT
    sp.id,
    sp.name,
    sp.img,
    sp.gia,
    sp.gia_new,
    sp.mota,
    sp.soluong,
    sp.xuatxu,
    sp.kieumay,
    sp.iddm,
    IFNULL(AVG(bl.star), 0) AS avg_star
FROM
    sanpham sp
LEFT JOIN
    binhluan bl ON sp.id = bl.id_pro
    WHERE sp.iddm = $iddm AND sp.id != $idsp
GROUP BY
    sp.id
ORDER BY
    sp.id limit 0,5";
    return pdo_query($sql);
}
