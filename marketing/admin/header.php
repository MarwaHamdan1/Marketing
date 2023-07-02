<?php include("include/header.php");?>
<?php
    $sql = "SELECT * FROM `here`";
    $query = mysqli_query($con, $sql);
    $header_row = mysqli_fetch_assoc($query);
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Header Page</h1>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Hero Image</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img width="100" src="image/<?php echo $header_row['image']; ?>"></td>
                    <td><img width="100" src="image/<?php echo $header_row['logo']; ?>"></td>
                    <td><?php echo substr($header_row['title'], 0, 20); ?></td>
                    <td><?php echo substr($header_row['content'], 0, 50); ?></td>
                    <td>Content</td>
                    <td>
                        <a href="header.update.php?id=<?php echo $header_row['id']; ?>">edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php include("include/footer.php");?>
