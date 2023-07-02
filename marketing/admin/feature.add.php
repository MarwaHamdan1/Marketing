<?php include("include/header.php"); ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Feature Page</h1>
        </div>
    <form action="feature.php" method="post">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="input" class="form-label">Title</label>
                    <input type="text"  name="title" class="form-control" value="">
                </div>
                <div class="mb-3">
                    <label for="input" class="form-label">Content</label>
                    <textarea name="content" class="form-control" ></textarea>
                </div><br>
                <input type="submit" name='feature_add' value="submit" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>
</div>
<?php include("include/footer.php"); ?>
