<?php

$conn = mysqli_connect('localhost','root','','win');
if(!$conn){
    echo 'فشل في الاتصال بقاعدة البيانات';
    echo 'Error'.mysqli_connect_error();
}
?>