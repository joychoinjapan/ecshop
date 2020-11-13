<?php

//helper functions

/**
 * ファイルの名前を取得
 */
function get_file_name($file_name){
    $file_name =str_replace(".php", "", basename($file_name));
    return $file_name;
}


function redirect($location){
    header("Loaction: $location");
}

/**
 * DB操作を実行
 */
function query($sql){
    global $connection;
    return mysqli_query($connection,$sql);
}

/**
 * DBエラーの確認
 */
function confirm($result){
    global $connection;
    if (!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
}

/**
 * sql injection対策
 */
function escape_string($string){
    global $connection;
    return mysqli_real_escape_string($connection,$string);
}

/**
 * DBの問合せ結果を配列として取得
 */
function fetch_array($result){
    return mysqli_fetch_array($result);
}

//get products
function get_products(){
    $result = query("SELECT * FROM products");
    confirm($result);
    return $result;
}
?>