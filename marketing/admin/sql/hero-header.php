<?php 
include("../include/connectDB.php");

$con = connectDB();

if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $content = mysqli_real_escape_string($con, $_POST['content']);
    $logo = $_FILES['logo']['name'];
    $image = $_FILES['image']['name'];

    $delete_image_sql = "SELECT * FROM here WHERE id='$id'";
    $delete_image_query = mysqli_query($con, $delete_image_sql);
    $delete_row = mysqli_fetch_assoc($delete_image_query);
    $select_background_image = $delete_row['image'];
    $logo_image = $delete_row['logo'];

    if($image != ""){
        $background_image_rand = rand(00000, 99999) . $image;
        $upload = "../image/" . $background_image_rand;
        move_uploaded_file($_FILES['image']['tmp_name'], $upload);

        $sql = "UPDATE here SET title='$title', content='$content', image='$background_image_rand' WHERE id='$id'";
        $result = mysqli_query($con, $sql);
        
        if($result){
            if($select_background_image != "" && file_exists('../image/'.$select_background_image)){
                unlink('../image/'.$select_background_image);
            }
            header('location:../header.php');
        } else{
            echo "not updated";
        }
    } else {
        $background_image_rand = $select_background_image;
    }

    if($logo != ""){
        $logo_image_rand = rand(00000, 99999) . $logo;
        $upload = "../image/" . $logo_image_rand;
        move_uploaded_file($_FILES['logo']['tmp_name'], $upload);

        $sql = "UPDATE here SET title='$title', content='$content', logo='$logo_image_rand' WHERE id='$id'";
        $result = mysqli_query($con, $sql);
        
        if($result){
            if($select_logo != "" && file_exists('../image/'.$logo_image)){
                unlink('../image/'.$logo_image);
            }
            header('location:../header.php');
        } else{
            echo "not updated";
        }
    } else {
        $logo_image_rand = $select_logo;
    }

    // If neither image nor logo is uploaded, update the title and content only
    if($image == "" && $logo == ""){
        $sql = "UPDATE here SET title='$title', content='$content' WHERE id='$id'";
        $result = mysqli_query($con, $sql);
        
        if($result){
            header('location:../header.php');
        } else{
            echo "not updated";
        }
    }
}
?>
