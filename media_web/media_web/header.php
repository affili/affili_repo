<!DOCTYPE html>
<!--
Hello Welcome view this source code
if you want to job? Come on my company
http://mediaxis.jp/

           oooooo
          oooooooo         oooooo     ooooooo   ooooooo     oooooooo
         oooo  oooo         oooooo   ooooooo    ooooooo    oooo  oooo
        oooo    oooo         oooooo ooooooo               ooooo
       oooooooooooooo         oooooooooooo      ooooooo  ooooooooooooo
      oooooooooooooooo       oooooo ooooooo     ooooooo          oooooo
     oooooo      oooooo     oooooo   ooooooo    ooooooo    oooo  ooooo
    oooooo        oooooo   oooooo     ooooooo   ooooooo     oooooooo
-->
<html lang="ja">
<head>
<meta charset="utf-8" />
<title>simple media</title>
<?php if(is_single()): ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/page.css" media="screen" />
<?php else: ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen"/>
<?php endif ?>
<!-- <link rel="#" href="#" /> -->
<link href="http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700" rel="stylesheet">
<!--ビューボードの設置-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body>

    <!-- Header -->
    <div id="header" class="header">
      <div id="logo">
        <h3 href="#" class="top-name"><span>simple media</span></h3>
      </div>
      <div class="header-slider">
        <!--<video id="video" src="image/710109623.mp4" autoplay="" preload="auto" loop="">
        </video>-->
      </div>
    </div>
    <div id="container">
