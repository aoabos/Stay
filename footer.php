<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<footer>
<div class="my_socials">
<a href="<?php $this->options->github() ?>" title="github"><i class="fa fa-github"></i></a>

</div>

    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/font-awesome.min.css'); ?>">
      <div id="credit">&copy; 2017-2019 <?php $this->options->title() ?>.
  


      </div>
                      <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
      <div id="siteinfo"><span><?php $stat->publishedPostsNum() ?>篇文章</span>
<span>评论总数：<?php $stat->publishedCommentsNum() ?>条</span>

      </div>

      <div id="poweredby">Powered by <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>. Deside <a href='https://blog.shuiba.co/bitcron-theme-border' target='_blank'>theme</a> by <a href='https://shuiba.co', target='_blank'>Shuibaco</a>.

      </div>

    </footer>

<style type="text/css">a.back_to_top {
    text-decoration: none;
    position: fixed;
    bottom: 40px;
    right: 30px;
    background: #f0f0f0;
    height: 40px;
    width: 40px;
    border-radius: 50%;
    line-height: 36px;
    font-size: 18px;
    text-align: center;
    transition-duration: .5s;
    transition-propety: background-color;
    display: none;
}

a.back_to_top span {
    color: #888;
}

a.back_to_top:hover {
    cursor: pointer;
    background: #dfdfdf;
}

a.back_to_top:hover span {
    color: #555;
}

@media print, screen and (max-width: 580px) {
    .back_to_top {
        display: none !important;
    }
}



</style><a id="back_to_top" href="#" class="back_to_top"><span>↾</span>
</a>


<script>$(document).ready((function(_this) {
  return function() {
    var bt;
    bt = $('#back_to_top');
    if ($(document).width() > 480) {
      $(window).scroll(function() {
        var st;
        st = $(window).scrollTop();
        if (st > 30) {
          return bt.css('display', 'block');
        } else {
          return bt.css('display', 'none');
        }
      });
      return bt.click(function() {
        $('body,html').animate({
          scrollTop: 0
        }, 800);
        return false;
      });
    }
  };
})(this));
</script>

    <script>// smooth scrolling
$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top-20
                }, 500);
                return false;
            }
        }
    });
});
</script>
<?php $this->footer(); ?>
<?php include_once("baidu_js_push.php") ?>
</body>
</html>
