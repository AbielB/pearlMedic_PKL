<?php
// Koneksi Database
// mysqli_connect("nama host" , "username" ,"password", "nama database")
$db = mysqli_connect("localhost", "root", "", "pearl_medicadmin");


function query($query){
    GLOBAL $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
    
}