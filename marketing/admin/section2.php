<?php
include("include/header.php");
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">About Section2</h1>
        </div>
    </div>
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">About</h4>
            <?php
            $section2_sql = "SELECT * FROM about WHERE id='2'";
            $section2_result = mysqli_query($con, $section2_sql);
            ?>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class="text-primary">
                        <th>Title</th>
                        <th>Content</th>
                        <th>Image</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php while ($section2_row = mysqli_fetch_assoc($section2_result)) { ?>
                            <tr>
                                <td><?php echo substr($section2_row['title'], 0, 20); ?></td>
                                <td><?php echo substr($section2_row['content'], 0, 50); ?></td>
                                <td><img width="100" src="image/<?php echo $section2_row['image']; ?>"><br></td>
                                <td>

                                    <a href="section2.update.php?id=<?php echo $section2_row['id']; ?>"><i class="fa fa-edit" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
                                    
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>
