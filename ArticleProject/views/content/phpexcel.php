
<!-- first click here to print -->
<?php  include_once('header.php'); ?>

<div class="container">
    <div class="jumbotron">
        <h1>Phpexcel Spreadsheet Library</h1>
        <p> Generate Excel Sheets with Codeigniter.</p>
    </div>
        <a href="<?= base_url() ?>phpexcel/download" class="btn btn-success float-right" >Download .xls file</a>
    <table class="table" border="1" cellspacing="1" cellpadding="6">
        <thead>
            <tr>
               <!--  <th>ID</th> -->
                <th>Title</th>
                <th>Date</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $n) : ?>
                <tr>
                    <!-- <td><?= $n['id']; ?></td> -->
                    <td><?= $n['title']; ?></td>
                    <td><?= $n['created_at']; ?></td>
                    <td><?= $n['body']; ?></td>
            <!-- <td><?= $n['user_name']; ?></td>
            <td><?= $n['user_address']; ?></td>
            <td><?= $n['user_email']; ?></td>
            <td><?= $n['user_job']; ?></td> -->
        </tr>
    <?php endforeach; ?>
</tbody>
</table>
</div>

<?php include_once('footer.php'); ?>
