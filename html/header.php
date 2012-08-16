<?php
if( !defined('PHURL' ) ) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
ini_set('display_errors', 0);
?>
<html>
<head>
<title><?php echo SITE_TITLE ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="assets/default.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="sURLy is a very simple shorter link generator. Easy to use and without registration, you can create a short link in seconds. Allows you to create, in real-time, any shortened URL - a perfect tool to help you understand what appeals to your audience and to help you optimize your social, email, and other click-through campaigns."/>

<meta name="keywords" content="surly, url, urly, short, short link, links, link, awesome, Save, share links ,discover links, share, shorten" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="assets/jquery.uniform.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
      $(function(){
        $("input, textarea, select, button").uniform();
      });
    </script>
    <link rel="stylesheet" href="assets/css/uniform.default.css" type="text/css" media="screen">
    </head>
<body>
<div id="container">
<div id="header">
<a href="<?php echo SITE_URL ?>" ><h1 style="color:black;"><?php echo SITE_TITLE ?></h1></a>
</div>
<div id="content">
