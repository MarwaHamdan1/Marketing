<?php include("include/header.php");?>
<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM here WHERE id='$id'";
        $query = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($query);
    }
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Header Update</h1>
        </div>
    </div>
    <form enctype="multipart/form.data" method ="post" action="sql/hero-header.php?id=<<?php echo $row['id']?>;">
        <div class="row">
            <div class="col-md-8">
                <div class="mb-3">
                    <label for="input" class="form-label">Title</label>
                    <input type="text" value="<?php echo $row['title'];?>" name="title" class="form-control" value="">
                </div><br>
                <div class="mb-3">
                    <label for="input" class="form-label">Content</label>
                    <input type="text" value="<?php echo $row['content'];?>" name="content" class="form-control" value="">
                </div>
                <div class="mb-3">
                    <label for="logo" class="form-label">Logo</label><br>
                    <img width="100" src="image/<?php echo $row['logo'];?>">
                    <input type="file" name="logo">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Hero Image</label><br>
                    <img width="100" src="image/<?php echo $row['image']; ?>"><br>
                    <input type="file" name="image">
</div><br>

<div class="mb-3">
                    <input type="submit" name="submit" value="submit" class="form-control btm-primary"  >
</div>

