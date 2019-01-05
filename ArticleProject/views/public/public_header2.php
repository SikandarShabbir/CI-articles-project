  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <?= link_tag('assets/css/bootstrap.min.css') ?>
    <!-- <?= link_tag('assets/css/customcss.csss') ?> -->
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <!-- <?= anchor('user','All Articles',['class'=>'navbar-brand'])?> -->
      <!-- <a class="navbar-brand" href="#">Admin Panel</a> -->
      <label for="Admin" class="navbar-brand">Welcome to Admin Panel</label>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" style="">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Logout <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li> -->
    </ul>
      <ul class="navbar-nav navbar-right">
      <li class="nav-item">
         <!-- <a class="nav-link" href="<?= base_url('login/logout') ?>">logout</a> -->
        <!-- <?= anchor('login/logout','Logout',['class'=>'nav-link'])?> -->
      </li>
    </ul>
  </div>
</nav>