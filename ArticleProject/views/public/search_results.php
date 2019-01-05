<?php include_once('public_header.php') ?>

<div class="container">
  <h1>Search Results</h1>  
  <table class="table">
    <thead>
      <tr>
        <td>Sr. No.</td>
        <td>Article Title</td>
        <td>Published On</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php if(count($articles)): ?>
        <?php $count = $this->uri->segment(4,0); ?>
        <?php foreach($articles as $article):?>
        <td><?= ++$count ?></td>
        <td><?= $article->title ?></td>
        <td><?= $article->created_at ?></td>      
      </tr>
    <?php endforeach; ?>
        <?php else: ?>
          <tr><td colspan="3"> No Records Found. </td></tr>      
      <?php endif; ?>
    </tbody>
  </table>
  <?= $this->pagination->create_links(); ?>
</div>

<?php include_once('public_footer.php') ?>