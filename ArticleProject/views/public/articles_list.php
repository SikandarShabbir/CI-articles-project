<?php include_once('public_header.php') ?>

<div class="container">
  <h1>All Articles</h1>  
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
        <?php $count = $this->uri->segment(3,0); ?>
        <?php foreach($articles as $article):?>
        <td><?= ++$count ?></td>
        <td><?= anchor("user/article/{$article->id}",$article->title) ?></td>
        <!-- $article->created_at -->
        <td><?= date('d M y h:i:s', strtotime($article->created_at) ); ?></td>      
      </tr>
    <?php endforeach; ?>
        <?php else: ?>
          <tr><td colspan="3"> No Records Found. </td></tr>      
      <?php endif; ?>
    </tbody>
  </table>
  <?= $this->pagination->create_links(); ?>
</div>
<!-- {elapsed_time} -->
<!-- {memory_usage} -->
<!-- <?php echo $this->benchmark->elapsed_time();?> -->
<?php include_once('public_footer.php') ?>