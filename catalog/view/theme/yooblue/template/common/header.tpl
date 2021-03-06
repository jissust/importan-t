<?php if (isset($_SERVER['HTTP_USER_AGENT']) && !strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 6')) echo '<?xml version="1.0" encoding="UTF-8"?>'. "\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>" xml:lang="<?php echo $lang; ?>">
<head>
<title><?php echo $title; ?></title>
<base href="<?php echo $base; ?>" />
<?php if ($description) { ?>
<meta name="description" content="<?php echo $description; ?>" />
<?php } ?>
<?php if ($keywords) { ?>
<meta name="keywords" content="<?php echo $keywords; ?>" />
<?php } ?>
<?php if ($icon) { ?>
<link href="<?php echo $icon; ?>" rel="icon" />
<?php } ?>
<?php foreach ($links as $link) { ?>
<link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
<?php } ?>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/yooblue/stylesheet/stylesheet.css" />
<?php foreach ($styles as $style) { ?>
<link rel="<?php echo $style['rel']; ?>" type="text/css" href="<?php echo $style['href']; ?>" media="<?php echo $style['media']; ?>" />
<?php } ?>
<script type="text/javascript" src="catalog/view/javascript/jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/ui/jquery-ui-1.8.16.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css" />
<script type="text/javascript" src="catalog/view/javascript/jquery/ui/external/jquery.cookie.js"></script>
<script type="text/javascript" src="catalog/view/javascript/jquery/colorbox/jquery.colorbox.js"></script>
<link rel="stylesheet" type="text/css" href="catalog/view/javascript/jquery/colorbox/colorbox.css" media="screen" />
<script type="text/javascript" src="catalog/view/javascript/jquery/tabs.js"></script>
<script type="text/javascript" src="catalog/view/javascript/common.js"></script>
<?php foreach ($scripts as $script) { ?>
<script type="text/javascript" src="<?php echo $script; ?>"></script>
<?php } ?>
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/yooblue/stylesheet/ie7.css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/yooblue/stylesheet/ie6.css" />
<script type="text/javascript" src="catalog/view/javascript/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript">
DD_belatedPNG.fix('#logo img');
</script>
<![endif]-->
<?php echo $google_analytics; ?>
</head>
<body>
<!--[if lt IE 7]>
<div style='border: 1px solid #F7941D; background: #FEEFDA; text-align: center; clear: both; height: 75px; position: relative; z-index:5000' id="forie6"> 
	<div style='position: absolute; right: 3px; top: 3px; font-family: courier new; font-weight: bold;'>
		<a href="#" onclick="document.getElementById('forie6').style['display'] = 'none'"><img src='catalog/view/theme/yooblue/image/ie6nomore-cornerx.jpg' style='border: none;' alt='Close this notice'/></a>
	</div> 
	<div style='width: 740px; margin: 0 auto; text-align: left; padding: 0; overflow: hidden; color: black;'> 
		<div style='width: 75px; float: left;'><img src='catalog/view/theme/yooblue/image/ie6nomore-warning.jpg' alt='Warning!'/></div> 
		<div style='width: 275px; float: left; font-family: Arial, sans-serif; color:#000'> 
			<div style='font-size: 14px; font-weight: bold; margin-top: 12px; color:#000'>You are using an outdated browser</div> 
			<div style='font-size: 12px; margin-top: 6px; line-height: 12px; color:#000'>For a better experience using this site, please upgrade to a modern web browser.</div> 
		</div>
		<div style='width: 75px; float: left;'>
			<a href='http://www.firefox.com' target='_blank'><img src='catalog/view/theme/yooblue/image/ie6nomore-firefox.jpg' style='border: none;' alt='Get Firefox 3.5'/></a>
		</div>
		<div style='width: 75px; float: left;'>
			<a href='http://www.browserforthebetter.com/download.html' target='_blank'><img src='catalog/view/theme/yooblue/image/ie6nomore-ie8.jpg' style='border: none;' alt='Get Internet Explorer 8'/></a>
		</div> 
		<div style='width: 73px; float: left;'>
			<a href='http://www.apple.com/safari/download/' target='_blank'><img src='catalog/view/theme/yooblue/image/ie6nomore-safari.jpg' style='border: none;' alt='Get Safari 4'/></a>
		</div> 
		<div style='float: left; width: 73px;'>
			<a href='http://www.google.com/chrome' target='_blank'><img src='catalog/view/theme/yooblue/image/ie6nomore-chrome.jpg' style='border: none;' alt='Get Google Chrome'/></a>
		</div>
		<div style='float: left;'>
			<a href='http://www.opera.com/' target='_blank'><img src='catalog/view/theme/yooblue/image/ie6nomore-opera.jpg' style='border: none;' alt='Opera'/></a>
		</div> 
	</div>
</div>
<![endif]-->
<div id="container">
<div id="header">
  <?php if ($logo) { ?>
  <div id="logo"><a href="<?php echo $home; ?>"><img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" /></a></div>
  <?php } ?>
  <?php echo $language; ?>
  <?php echo $currency; ?>
  <?php echo $cart; ?>
  <div id="search">
    <div class="button-search"></div>
    <?php if ($filter_name) { ?>
    <input type="text" name="filter_name" value="<?php echo $filter_name; ?>" />
    <?php } else { ?>
    <input type="text" name="filter_name" value="<?php echo $text_search; ?>" onclick="this.value = '';" onkeydown="this.style.color = '#000000';" />
    <?php } ?>
  </div>
  <div id="welcome">
    <?php if (!$logged) { ?>
    <?php echo $text_welcome; ?>
    <?php } else { ?>
    <?php echo $text_logged; ?>
    <?php } ?>
  </div>
  <div class="links"><a href="<?php echo $home; ?>"><?php echo $text_home; ?></a><a href="<?php echo $wishlist; ?>" id="wishlist-total"><?php echo $text_wishlist; ?></a><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a><a href="<?php echo $shopping_cart; ?>"><?php echo $text_shopping_cart; ?></a><a href="<?php echo $checkout; ?>"><?php echo $text_checkout; ?></a></div>
  <div class="wrap_cart"><img src="catalog/view/theme/yooblue/image/cart.png" /></div>
</div>
<div class="wrap_content">
<?php if ($categories) { ?>
<div id="menu">
  <ul>
    <?php foreach ($categories as $category) { ?>
    <li><a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a>
      <?php if ($category['children']) { ?>
      <div>
        <?php for ($i = 0; $i < count($category['children']);) { ?>
        <ul>
          <?php $j = $i + ceil(count($category['children']) / $category['column']); ?>
          <?php for (; $i < $j; $i++) { ?>
          <?php if (isset($category['children'][$i])) { ?>
          <li><a href="<?php echo $category['children'][$i]['href']; ?>"><?php echo $category['children'][$i]['name']; ?></a></li>
          <?php } ?>
          <?php } ?>
        </ul>
        <?php } ?>
      </div>
      <?php } ?>
    </li>
    <?php } ?>
  </ul>
</div>
<?php } ?>
<div id="notification"></div>
