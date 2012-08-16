<html>
  <head>
  
	<title>500 Server Error</title>
 <link rel="stylesheet" type="text/css" href="/assets/default.css" />
   <link rel="stylesheet" href="/assets/css/uniform.default.css" type="text/css" media="screen">

  </head>
  <body>
  <h1>500 Server Error</h1>

A misconfiguration on the server caused a hiccup.
Check the server logs, fix the problem, then try again.
<hr>

<?
  echo "URL: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."<br>\n";
  $fixer = "checksuexec ".escapeshellarg($_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI']);
  echo `$fixer`;
?>

<br/> 
<br/> 
<div id="footer">
<table>
<tr>
<td>
<a href="http://superatic.github.com/sURLy/" target="_blank"a>
<img src="http://superatic.com/SeFiMa/github-logo.png" alt="github-logo" width="" height="" border="0" /></a> 
</td>
<td>
<small>Fork it on <a href="https://github.com/SuperAtic/sURLy" target="_blank"a><b>GitHub</b></a> </small>
<br/> 
<small>&copy; <?php echo date("Y"); ?> <?php echo SITE_TITLE ?> - Powered by <a href="http://SuperAtic.com">SuperAtic <?php echo PHURL_VERSION ?></a></small>
</td>
</tr>
</table>
</div>

</body></html>
