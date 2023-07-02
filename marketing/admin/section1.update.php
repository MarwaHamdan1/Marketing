<?php
include("include/header.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM about WHERE id='$id'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($query);
}
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Section1 Update</h1>
        </div>
    </div>
    <form enctype="multipart/form-data" method="post" action="sql/about.php?id=<?php echo $row['id']; ?>">
        <div class="row">
            <div class="col-md-8">
                <div class="mb-3">
                    <label for="input" class="form-label">Title</label>
                    <input type="text" value="<?php echo $row['title']; ?>" name="title" class="form-control">
                </div><br>
                <div class="mb-3">
                    <label for="input" class="form-label">Content</label>
                    <textarea rows="4" name="content" class="form-control"><?php echo $row['content']; ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label><br>
                    <img width="100" src="image/<?php echo $row['image']; ?>">
                    <input type="file" name="image" class="form-control">
                </div><br>
                <div class="mb-3">
                    <input type="submit" name="section1_submit" value="Submit" class="form-control btm-primary" >
                </div>
            </div>
        </div>
