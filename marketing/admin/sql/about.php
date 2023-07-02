<?php
include("../include/connectDB.php");
$con = connectDB();
if($con){
    if(isset($_POST['section1_submit'])){
        $id = $_GET['id'];
        $title = mysqli_real_escape_string($con, $_POST['title']);
        $content = mysqli_real_escape_string($con, $_POST['content']);
        $image = $_FILES['image']['name'];
    
        $delete_image_sql = "SELECT * FROM about WHERE id='$id'";
        $delete_image_query = mysqli_query($con, $delete_image_sql);
        $delete_row = mysqli_fetch_assoc($delete_image_query);
        $delete_image = $delete_row['image'];
    
        if($image != ""){
            $image_rand = rand(00000, 99999) . $image;
            $upload = "../image/" . $image_rand;
            move_uploaded_file($_FILES['image']['tmp_name'], $upload);
    
            $sql = "UPDATE about SET title='$title', content='$content', image='$image_rand' WHERE id='$id'";
            $result = mysqli_query($con, $sql);
            
            if($result){
                if($delete_image != "" && file_exists('../image/'.$delete_image)){
                    unlink('../image/'.$delete_image);
                }
                header('location:../section1.php');
            } else{
                echo "Not updated.";
            }
        } else {
            $sql = "UPDATE about SET title='$title', content='$content' WHERE id='$id'";
            $result = mysqli_query($con, $sql);
            if($result){
                header("location:../section1.php");
            }else{
                echo "Not updated.";
            }
        }
        
    }
    
}if(isset($_POST['section2_submit'])){
    $id = $_GET['id'];
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $content = mysqli_real_escape_string($con, $_POST['content']);
    $image = $_FILES['image']['name'];

    $delete_image_sql = "SELECT * FROM about WHERE id='$id'";
    $delete_image_query = mysqli_query($con, $delete_image_sql);
    $delete_row = mysqli_fetch_assoc($delete_image_query);
    $delete_image = $delete_row['image'];

    if($image != ""){
        $image_rand = rand(00000, 99999) . $image;
        $upload = "../image/" . $image_rand;
        move_uploaded_file($_FILES['image']['tmp_name'], $upload);

        $sql = "UPDATE about SET title='$title', content='$content', image='$image_rand' WHERE id='$id'";
        $result = mysqli_query($con, $sql);
        
        if($result){
            if($delete_image != "" && file_exists('../image/'.$delete_image)){
                unlink('../image/'.$delete_image);
            }
            header('location:../section2.php');
        } else{
            echo "Not updated.";
        }
    } else {
        $sql = "UPDATE about SET title='$title', content='$content' WHERE id='$id'";
        $result = mysqli_query($con, $sql);
        if($result){
            header("location:../section2.php");
        }else{
            echo "Not updated.";
        }
    }}
    if(isset($_POST['images_submit'])){
        $id = $_GET['id'];
       
        $image = $_FILES['image']['name'];
    
        $delete_image_sql = "SELECT * FROM about WHERE id='$id'";
        $delete_image_query = mysqli_query($con, $delete_image_sql);
        $delete_row = mysqli_fetch_assoc($delete_image_query);
        $delete_image = $delete_row['image'];
    
        if($image != ""){
            $image_rand = rand(00000, 99999) . $image;
            $upload = "../image/" . $image_rand;
            move_uploaded_file($_FILES['image']['tmp_name'], $upload);
    
            $sql = "UPDATE about SET title='$title', content='$content', image='$image_rand' WHERE id='$id'";
            $result = mysqli_query($con, $sql);
            
            if($result){
                if($delete_image != "" && file_exists('../image/'.$delete_image)){
                    unlink('../image/'.$delete_image);
                }
                header('location:../section2.php');
            } else{
                echo "Not updated.";
            }
        } 
        }
?>
