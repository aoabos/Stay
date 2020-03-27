<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
  <head>
<script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.js'); ?>"></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8">

<meta itemprop="name" content="「褪色的梦」"/>
<meta itemprop="image" content="https://fadedream.com/tx.png" />
<meta name="description" itemprop="description" content="层楼终究误少年,自由早晚乱余生;" />

    <title><?php $this->options->title() ?></title>
<link rel="shortcut icon" href="<?php if ($this->options->favicon): $this->options->favicon();
else: $this->options->themeUrl('img/favicon.ico');endif; ?>">
<!--必填-->



        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
        <meta content="yes" name="apple-mobile-web-app-capable"/>
        <meta content="black" name="apple-mobile-web-app-status-bar-style"/>
        <meta content="telephone=no" name="format-detection"/>
        <meta name="renderer" content="webkit">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">

    <link rel="apple-touch-icon" href="https://fadedream.com/tx.png" />

  </head>

  <body>
    <header>
      <nav>

<div class="bitcron_nav_container">


  <div class="bitcron_nav">
    <div class="mixed_site_nav_wrap site_nav_wrap">
      <ul class="mixed_site_nav site_nav sm sm-base">

  <li><a id="de7ebc3e2a8a111e98f320242ac110003" href="/about.html" class=" nav__item"  >关于</a>

  </li>


  <li><a id="de7ebf6dca8a111e98f320242ac110003" href="/feed" class=" nav__item"  >订阅</a>

  </li>
  <li><a id="de7ebf6dca8a111e98f320242ac110003" href="/links.html" class=" nav__item"  >邻居</a>

  </li>

      </ul>

      <div class="clear clear_nav_inline_end"></div>

    </div>

  </div>



  <div class="clear clear_nav_end"></div>

</div>



<div id="search_bar">


  <input id="search_posts_keywords" placeholder="搜索"  type="text" value="" />

</div>



<script>var search_base_url = "/search";
var search_under = "";
$(document).ready(function() {
    var search_posts_dom = $('#search_posts_keywords');
    search_posts_dom.val("");

    if (location.search.indexOf('?s=') === 0 && search_posts_dom.length) {
          var old_keywords = search_posts_dom.val();
          search_posts_dom.focus().val(old_keywords);
    }
    var search_posts = function(){
        var keywords = search_posts_dom.val();
        var url_to_jump = location.protocol + '//' + location.host + search_base_url + '?s=' + keywords;
        if (search_under){ url_to_jump += "&under="+search_under}
        location.href = url_to_jump;
        return false
    };

    search_posts_dom.keyup(function(event) {
          if (event.which === 13) {
            search_posts()
          }
          return false;
    });

    $('.search_in_html_button').click(search_posts);
})
</script>

      </nav>

      <div id="logo"><a href="/"><img id="avatar" src="<?php if ($this->options->logo): $this->options->logo();
else: $this->options->themeUrl('img/logo.png');endif; ?>"  alt="<?php $this->options->title() ?>" />
</a>

      </div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="//tokinx.github.io/ViewImage/view-image.min.js"></script>
<script>
    jQuery(document).ready(function () {
        jQuery.viewImage({
            'target': '.view-image img,.view-image2 a,.view-image3 a',
            'exclude': '.exc',
            'delay': 300
        });
    });
</script>
    </header>
    <?php $this->header(); ?>
</head>
<body>

</header>
<!--
           ▄              ▄
          ▌▒█           ▄▀▒▌
          ▌▒▒▀▄        ▀▒▒▒▐
         ▐▄▀▒▒▀▀▀▀▄▄▄▀▒▒▒▒▒▐
       ▄▄▀▒▒▒▒▒▒▒▒▒▒▒█▒▒▄█▒▐
     ▄▀▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒█▒▒▒▒▒▐
    ▐▒▒▒▄▄▄▒▒▒▒▒▒▒▒▒▒▒▒▒▀▄▒▒▌
    ▌▒▒▐▄█▀▒▒▒▒▄▀█▄▒▒▒▒▒▒▒█▒▐
   ▐▒▒▒▒▒▒▒▒▒▒▒▌██▀▒▒▒▒▒▒▒▒▀▄▌
   ▌▒▀▄██▄▒▒▒▒▒▒▒▒▒▒▒░░░░▒▒▒▒▌
   ▌▀▐▄█▄█▌▄▒▀▒▒▒▒▒▒░░░░░░▒▒▒▐
  ▐▒▀▐▀▐▀▒▒▄▄▒▄▒▒▒  typecho  ▒▌
  ▐▒▒▒▀▀▄▄▒▒▒▄▒▒▒▒▒▒░░░░░░▒▒▒▐
   ▌▒▒▒▒▒▒▀▀▀▒▒▒▒▒▒▒▒░░░░▒▒▒▒▌
   ▐▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▐
    ▀ Vans  ▒▒▒▒▒▒▒▒▒▒▒▄▒▒▒▒▌
      ▀▄▒▒▒▒▒▒▒▒▒▒▄▄▄▀▒▒▒▒▄▀
     ▐▀▒▀▄▄▄▄▄▄▀▀▀▒▒▒▒▒▄▄▀
    ▐▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▀▀
--你看源码时_是否期待源码也同样注视(注释)着你
-->   
<!-- end #header -->