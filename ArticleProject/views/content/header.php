<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Articles List</title>
  <!-- <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.css')?> "> -->
  <?= link_tag('assets/css/bootstrap.min.css') ?>
  <!-- <?= link_tag('assets/css/customcss.csss') ?> -->
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <?= anchor('user','All Articles',['class'=>'navbar-brand'])?>
    <!-- <a class="navbar-brand" href="#">All Articles</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" style="">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
   <!--  <li class="nav-item active">
      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>  -->     
    <li>
      <?= form_open('user/search',['class'=>'form-inline my-2 my-lg-0']);?>
      <!-- <form class="form-inline my-2 my-lg-0"> -->
        <?= form_input(['name'=>'query','value'=>set_value('query'),'class'=>'form-control mr-sm-2','placeholder'=>'Search']); ?>
        <!-- <input class="form-control mr-sm-2" name="query" type="text" placeholder="Search"> -->
        <button class="btn btn-secondary my-2 my-sm-0" type="submit" >Search</button>
        <!-- </form> -->
        <?= form_close();?>
        <?=form_error('query','<i class="text-danger">','</i>'); ?>
      </li>
    </ul>
    <ul class="navbar-nav mr-default navbar-right">
      <li class="nav-item">
        <?= anchor('login','Login',['class'=>'nav-link'])?>
        <!-- <a class="nav-link" href=""></a> -->
      </li>
    </ul>
    
  </div>
</nav>