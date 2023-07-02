<?php
include("include/header.php");

// Handle form submission
if (isset($_POST['feature_add'])) {
    // Retrieve form data
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Insert the new feature into the database
    $insert_sql = "INSERT INTO feature (title, content) VALUES ('$title', '$content')";
    mysqli_query($con, $insert_sql);
}

$feature_sql = "SELECT * FROM feature ORDER BY id DESC";
$feature_result = mysqli_query($con, $feature_sql);
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Feature Page</h1>
        </div>
    </div>
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Feature</h4>
            <a href="feature.add.php" class="btn btn-info btn-sm">Add Feature</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class="text-primary">
                        <th>Title</th>
                        <th>Content</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                    <?php while ($feature_row = mysqli_fetch_assoc($feature_result)) {
                        ?>
                        <tr>
                            <td><?php echo substr($feature_row['title'], 0, 20); ?></td>
                            <td><?php echo substr($feature_row['content'], 0, 50); ?></td>
                            <td>
                                <a href="feature.update.php?id=<?php echo $feature_row['id']; ?>"><i class="fa fa-edit" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
                                <a onclick="return confirm('Are you sure?')" href="sql/feature.php?delete_id=<?php echo $feature_row['id']; ?>">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<?php include("include/footer.php"); ?>
