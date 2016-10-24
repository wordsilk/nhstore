<?php
/*
  $Id: footer.php,v 1.26 2003/02/10 22:30:54 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

  require(DIR_WS_INCLUDES . 'counter.php');
?>

<!-- end wrapper</div> -->
</div></div>
<div class="push"> </div>
<div id="footer">

<p id="footer_bar"><a href="index.php" title="Store Home">Store Home</a> &nbsp;|&nbsp; <a href="about.php" title="About New Headings">About Us</a> &nbsp;|&nbsp; <a href="sizechart.php" title="Size Chart">Size Chart</a> &nbsp;|&nbsp; <a href="shipping.php" title="Shipping + Returns">Shipping + Returns</a> &nbsp;|&nbsp; <a href="<?php echo tep_href_link(FILENAME_SHOPPING_CART); ?>"  title="Shopping Cart" ><?php echo HEADER_TITLE_CART_CONTENTS; ?></a> &nbsp;|&nbsp; <a href="contact_us.php" title="Contact Us">Contact
        Us</a> &nbsp;|&nbsp; <a href="privacy.php" title="Privacy Statement">Privacy Statement</a> <?php if (tep_session_is_registered('customer_id')) { ?>
					<?php if (tep_session_is_registered('customer_id')) { ?> &nbsp;|&nbsp; <a href="<?php echo tep_href_link(FILENAME_LOGOFF, '', 'SSL'); ?>" title="<?php echo HEADER_TITLE_LOGOFF; ?>"><?php echo HEADER_TITLE_LOGOFF; ?></a><?php
  } else {
?> &nbsp;|&nbsp; <a href="<?php echo tep_href_link(FILENAME_LOGIN, '', 'SSL'); ?>" title="<?php echo HEADER_TITLE_LOGIN; ?>"><?php echo HEADER_TITLE_LOGIN; ?></a><?php } ?>
			<?php } ?></p>
<div id="footerwrap">
<div id="gateway">
<!-- (c) 2005, 2013. Authorize.Net is a registered trademark of CyberSource Corporation --> <div class="AuthorizeNetSeal"> <script type="text/javascript" language="javascript">var ANS_customer_id="c845603f-70b3-4e34-b068-d98099e8a969";</script> <script type="text/javascript" language="javascript" src="//verify.authorize.net/anetseal/seal.js" ></script></div><!--end gateway--></div>

<div id="admin">

<div id="identity">
<p id="powered"></p>
<h5><strong>New Headings LLC</strong> &nbsp; <a href="https://www.facebook.com/NewHeadings" target="_blank"><img src="http://store.newheadings.com/images/facebook.png" width="48" height="20" alt="New Headings on Facebook"/></a><br />200 Main Street, 1st Floor<br />Ansonia, CT 06401<br />
1-888-924-2050 or 1-203-924-2050</h5>
<!--end identity--></div>

<div id="copyright">
<p>&copy; <?php echo date('Y');?> <a href="index.php">New Headings LLC</a><br />webmaster: <a href="http://www.infopulsellc.com/" target="_blank">InfoPulse LLC</a><br />powered by <a href="http://www.oscommerce.com" target="_blank">osCommerce</a></p><!--end copyright--></div>
<!--end footerwrap--></div>

<!--end admin--></div>

<!--end footer--></div>

<?php 
if (GOOGLE_WEB_PROPERTY_ID) {
	if ($_SERVER['PHP_SELF'] != '/checkout_success.php') {
?>
<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
	var pageTracker = _gat._getTracker("<?php echo GOOGLE_WEB_PROPERTY_ID; ?>");
	pageTracker._initData();
	pageTracker._trackPageview();
</script >
<?php 
	} 
}