<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
    <main>
<article id="post">
  <div id="info">

    <time datetime="<?php $this->date('F j, Y'); ?>" ><?php $this->date('F j, Y'); ?></time>

<a href="<?php $this->category(','); ?>" ><?php $this->category(','); ?></a>


<a href="#comments">comment</a>


  </div>

  <h1><?php $this->title() ?></h1>
<ul class="view-image2">
<p class="md_block">
    <span class="md_line md_line_start md_line_end">
<?php $this->content('Continue Reading...'); ?></span>
</p>
</ul>

</article>
</div><!-- end #main-->
<div id="comment"></div>
<?php include('comments.php'); ?>
<?php $this->need('footer.php'); ?>
