<?php include("include/header.php"); ?>
<?php 
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = "SELECT * FROM feature WHERE id = $id";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($query);
}
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>Feature Update</h2>
            <a href="feature.php" class="btn btn-primary btn-sm">Back</a><br>
        </div>
    </div>
    <form method="POST" action="sql/feature.php?id=<?php echo $id ?>" method="post">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="input" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>">
                </div>
                <div class="mb-3">
                    <label for="input" class="form-label">Content</label>
                    <textarea name="content" class="form-control"><?php echo $row['content']; ?></textarea>
                </div><br>
                <input type="submit" name="feature_update" value="Update" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>

<?php include("include/footer.php"); ?>






