<?php
/**
 * 简单博客主题
 * 
 * @package Hope
 * @author aoabos
 * @version 1.0
 * @link http://linqi.ru
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="col-mb-12 col-8" id="main" role="main">
<main>
<div id="contents">
<?php while($this->next()): ?>
        <article><a href="<?php $this->permalink() ?>" >

            <time datetime="<?php $this->date('Y-m-d') ; ?>" ><?php $this->date('Y-m-d') ; ?></time>

            <h2><?php $this->title() ?></h2>

            <div id="summary"><?php $this->excerpt(180, '...'); //180就是摘要的字数，...是后缀; ?></div>
</a>

        </article>
<?php endwhile; ?>
</div><!-- end #main-->
</main>
<?php $this->need('footer.php'); ?>
