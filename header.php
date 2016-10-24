<?php
/*
  $Id: header.php,v 1.42 2003/06/10 18:20:38 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

// check if the 'install' directory exists, and warn of its existence
  if (WARN_INSTALL_EXISTENCE == 'true') {
    if (file_exists(dirname($HTTP_SERVER_VARS['SCRIPT_FILENAME']) . '/install')) {
      $messageStack->add('header', WARNING_INSTALL_DIRECTORY_EXISTS, 'warning');
    }
  }

// check if the configure.php file is writeable
  if (WARN_CONFIG_WRITEABLE == 'true') {
    if ( (file_exists(dirname($HTTP_SERVER_VARS['SCRIPT_FILENAME']) . '/includes/configure.php')) && (is_writeable(dirname($HTTP_SERVER_VARS['SCRIPT_FILENAME']) . '/includes/configure.php')) ) {
      $messageStack->add('header', WARNING_CONFIG_FILE_WRITEABLE, 'warning');
    }
  }

// check if the session folder is writeable
  if (WARN_SESSION_DIRECTORY_NOT_WRITEABLE == 'true') {
    if (STORE_SESSIONS == '') {
      if (!is_dir(tep_session_save_path())) {
        $messageStack->add('header', WARNING_SESSION_DIRECTORY_NON_EXISTENT, 'warning');
      } elseif (!is_writeable(tep_session_save_path())) {
        $messageStack->add('header', WARNING_SESSION_DIRECTORY_NOT_WRITEABLE, 'warning');
      }
    }
  }

// check session.auto_start is disabled
  if ( (function_exists('ini_get')) && (WARN_SESSION_AUTO_START == 'true') ) {
    if (ini_get('session.auto_start') == '1') {
      $messageStack->add('header', WARNING_SESSION_AUTO_START, 'warning');
    }
  }

  if ( (WARN_DOWNLOAD_DIRECTORY_NOT_READABLE == 'true') && (DOWNLOAD_ENABLED == 'true') ) {
    if (!is_dir(DIR_FS_DOWNLOAD)) {
      $messageStack->add('header', WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT, 'warning');
    }
  }

  if ($messageStack->size('header') > 0) {
    echo $messageStack->output('header');
  }

//rmh M-S_multi-stores begin
  $stores_image_query = tep_db_query("select s.stores_image, s.stores_name from " . TABLE_STORES . " s where s.stores_id = '" . (int)STORES_ID . "'");
  $stores_image = tep_db_fetch_array($stores_image_query);
//rmh M-S_multi-stores end
?>

	<?php
	
	//not sure if the category dropdown box was going to be used or not, for now i am placing it  in topcategories 
	 $Qboxes = tep_db_query('select c.categories_id from ' . TABLE_CATEGORIES . ' c, ' . TABLE_CATEGORIES_TO_STORES . ' c2s where c2s.categories_header_box = "1" and c.categories_id = c2s.categories_id and c2s.stores_id = "' . STORES_ID . '"');
	 $headerBoxes = '';
	 while($boxes = tep_db_fetch_array($Qboxes)){
	   $cats = tep_get_categories_header(array(), $boxes['categories_id']);
	   if (sizeof($cats) > 0){
		  $headerBoxes .= '<form name="special_cats' . $boxes['categories_id'] . '" action="' . tep_href_link(FILENAME_DEFAULT, '', 'NONSSL', false) . '" method="get">' . tep_draw_pull_down_menu('cPath', $cats, '', 'onchange="this.form.submit()"') . '</form>&nbsp;&nbsp;';
	   }
	 }
	?>	
<link rel="shortcut icon" href="http://www.newheadings.com/favicon.ico" type="image/x-icon">
<script>
var newwindow;
function poptastic(url)
{
	newwindow=window.open(url,'name','height=500,width=500,left=600,top=10,resizable=yes,scrollbars=yes,toolbar=no,status=yes');
	if (window.focus) {newwindow.focus()}
}
</script>

<div id="bodywrapper">
<div id="header">

<div id="headerwrap">
<div id="logo"><a href="index.php" title="Store Home"><img src="/images/newheadings_logo3.png" width="305" height="75" alt="New Headings Travel Gear and Apparel"/></a></div>

<div id="helpbox">


<ul id="helpernavs">
    <li class="helpernav">
			<a href="about.php" class="headerNavigation">About Us</a>
		</li>
		<li class="helpernav">
			<a href="shipping.php" class="headerNavigation">Shipping/Returns</a>
		</li>
		<li class="helpernav">
			<a href="sizechart.php" class="headerNavigation">Size Chart</a>
		</li>
        <li class="helpernav">
			<a href="contact_us.php" class="headerNavigation">Contact Us</a>
		</li>
        <li class="helpernav">
			<a href="<?php echo tep_href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>" class="headerNavigation"><?php echo HEADER_TITLE_MY_ACCOUNT; ?></a>
		</li>
		<li class="helpernav">
			<a href="<?php echo tep_href_link(FILENAME_SHOPPING_CART); ?>" class="headerNavigation">Cart</a>
		</li>
		<li class="helpernav">
			<a href="<?php echo tep_href_link(FILENAME_CHECKOUT_SHIPPING, '', 'SSL'); ?>" class="headerNavigation"><?php echo HEADER_TITLE_CHECKOUT; ?></a>
		</li>
		<?php if (tep_session_is_registered('customer_id')) { ?><li class="helpernav"><a href="<?php echo tep_href_link(FILENAME_LOGOFF, '', 'SSL'); ?>" class="headerNavigation"><?php echo HEADER_TITLE_LOGOFF; ?></a></li> <?php } ?>
	</ul>

    <p class="needhelp"><b>NEED HELP? CALL 1-888-924-2050</b> <span id="shopshowroom">(<a class="showroom" href="http://store.newheadings.com/AnsoniaShowroom.pdf" target="_blank">visit our showroom</a>)</span></p><!-- end helper box --></div>



</div><!--Header End-->	


<div id="breadcrumb" style="clear: both;">
		<div id="crumb"><?php echo $breadcrumb->trail(' &nbsp;>&nbsp; '); ?></div>
<div id="return"><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FNewHeadings&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:20px; text-align: right;" allowTransparency="true"></iframe></div>
	<!-- breadcrumb end --></div>
    

<?php
 //error message location was not specifid - placed it right below the header for now
  if (isset($HTTP_GET_VARS['error_message']) && tep_not_null($HTTP_GET_VARS['error_message'])) {
?>
<div class="headerError">
	<?php echo htmlspecialchars(urldecode($HTTP_GET_VARS['error_message'])); ?>
</div>
<?php
  }

  if (isset($HTTP_GET_VARS['info_message']) && tep_not_null($HTTP_GET_VARS['info_message'])) {
?>
<div class='headerInfo'>
    <?php echo htmlspecialchars($HTTP_GET_VARS['info_message']); ?>
</div>
<?php
  }
?>
<div id="wrapper">