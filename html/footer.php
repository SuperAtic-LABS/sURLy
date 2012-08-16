<?php
if( !defined('PHURL' ) ) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
ini_set('display_errors', 0);
?>
<h3>Browser Bookmarklets</h3>
<div id="bookmarklets">
<p>Drag these links to your browser toolbar.</p>
<p><a href="javascript:(function(){var%20ali=prompt('Enter%20a%20custom%20alias:');if(ali){location.href='<?php echo SITE_URL ?>/index.php?url='%20+%20escape(location.href)%20+%20'&alias='+ali;}})();" title="Shorten with a custom alias"><img src="../assets/images/drag.png" alt="drag" width="16" height="16" border="0"/> Shorten with a custom alias</a><br />
<a href="javascript:void(location.href='<?php echo SITE_URL ?>/index.php?alias=&url='+escape(location.href))"><img src="../assets/images/drag2.png" alt="drag" width="16" height="16" border="0" /> Shorten without a custom alias</a></p>
</div>
</div>
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
</body>
</html>