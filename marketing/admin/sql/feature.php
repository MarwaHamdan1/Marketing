<?php
include("../include/connectDB.php");
$con = connectDB();

if ($con) {
    if (isset($_POST['feature_add'])) {
        $title = mysqli_real_escape_string($con, $_POST['title']);
        $content = mysqli_real_escape_string($con, $_POST['content']);
        $sql = "INSERT INTO feature (title, content) VALUES ('$title', '$content')";
        $query = mysqli_query($con, $sql);
        if ($query) {
            header("location:../feature.php");
            exit;
        } else {
            echo "Failed to add feature.";
        }
    }

    if (isset($_GET['delete_id'])) {
        $id = $_GET['delete_id'];
        $delete_sql = "DELETE FROM feature WHERE id='$id'";
        $delete_query = mysqli_query($con, $delete_sql);
        if ($delete_query) {
            header("location:../feature.php");
            exit;
        } else {
            echo "Failed to delete feature.";
        }
    }

    if (isset($_POST['feature_update'])) {
        $id = $_GET['id'];
        $title = mysqli_real_escape_string($con, $_POST['title']);
        $content = mysqli_real_escape_string($con, $_POST['content']);
        $sql = "UPDATE feature SET title='$title', content='$content' WHERE id='$id'";
        $query = mysqli_query($con, $sql);
        if ($query) {
            header("location:../feature.php");
            exit;
        } else {
            echo "Failed to update feature.";
        }
    }
}
?>
