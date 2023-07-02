<?php
function connectDB(){
    $con = mysqli_connect("localhost","root","","project2");
    return $con;
}
?>