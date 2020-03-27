<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-mb-12 col-8" id="main" role="main">
<main>
<div id="cat-tag-search">
  <div id="label-title">
    <h2><?php $this->archiveTitle(' &nbsp; ', '', ''); ?></h2>



  </div>

  <div id="post-list">
    <ul>
      <li><?php $this->widget("Widget_Archive@$category->mid" ,array('pageSize' => '3' ,'type' => 'category'), "mid= 2")->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
</a>

      </li>

    </ul>
  </div>

  <div id="pager">







<div class="paginator pager pagination no_pages" >
  <div class="paginator_container pagination_container">
  </div>

</div>

  </div>

</div>

</main>
    </div><!-- end #main -->
	<?php $this->need('footer.php'); ?>
