<?php
/*
  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

// Define the webserver and path parameters 
// * DIR_FS_* = Filesystem directories (local/physical)
// * DIR_WS_* = Webserver directories (virtual/URL)
  define('HTTP_SERVER', 'http://redo.newheadings.com'); // eg, http://localhost - should not be empty for productive servers
  define('HTTPS_SERVER', ''); // eg, https://localhost - should not be empty for productive servers
  define('ENABLE_SSL', false); // secure webserver for checkout procedure?
  define('HTTP_COOKIE_DOMAIN', 'redo.newheadings.com');
  define('HTTPS_COOKIE_DOMAIN', 'redo.newheadings.com');
  
  //if($_SERVER["REMOTE_ADDR"] == '72.239.112.246') {
	//define('MODULE_ORDER_TOTAL_DISCOUNT_COUPON_DEBUG', true);
  //} else {
	//define('MODULE_ORDER_TOTAL_DISCOUNT_COUPON_DEBUG', false);
  //}
  
  if(USES_CORE == true) {
	define('HTTP_COOKIE_PATH', '/');
	define('HTTPS_COOKIE_PATH', '/');
  } else {
	//original lines
	define('HTTP_COOKIE_PATH', '/');
	define('HTTPS_COOKIE_PATH', '');
  }
  
  define('DIR_WS_HTTP_CATALOG', '/');
  define('DIR_WS_HTTPS_CATALOG', '');
  define('DIR_WS_IMAGES', 'http://www.newheadings.com/catalog/images/');
  define('DIR_WS_ICONS', DIR_WS_IMAGES . 'icons/');
  
  if(USES_CORE == true) { 
	define('DIR_WS_INCLUDES', '/home/virtual/site1/fst/var/www/html/catalog/admin/core_code/includes/');
  } else {
	//original line
	define('DIR_WS_INCLUDES', 'includes/');
  }
  
  define('DIR_WS_BOXES', DIR_WS_INCLUDES . 'boxes/');
  define('DIR_WS_FUNCTIONS', DIR_WS_INCLUDES . 'functions/');
  define('DIR_WS_CLASSES', DIR_WS_INCLUDES . 'classes/');
  define('DIR_WS_MODULES', DIR_WS_INCLUDES . 'modules/');
  define('DIR_WS_LANGUAGES', DIR_WS_INCLUDES . 'languages/');

  define('DIR_WS_DOWNLOAD_PUBLIC', 'pub/');
  
  if(USES_CORE == true) { 
	define('DIR_FS_CATALOG', '/home/virtual/site1/fst/var/www/html/catalog/admin/core_code/');
  } else {
	//original line
	define('DIR_FS_CATALOG', '/home/virtual/site1/fst/var/www/redo/');
  }
  
  define('DIR_FS_DOWNLOAD', DIR_FS_CATALOG . 'download/');
  define('DIR_FS_DOWNLOAD_PUBLIC', DIR_FS_CATALOG . 'pub/');

// define our database connection
  define('DB_SERVER', 'localhost'); // eg, localhost - should not be empty for productive servers
  define('DB_SERVER_USERNAME', 'admin-nh');
  define('DB_SERVER_PASSWORD', 'storestuff');
  define('DB_DATABASE', 'newheadingsllc_com_-_osc');
  define('USE_PCONNECT', 'false'); // use persistent connections?
  define('STORE_SESSIONS', 'mysql'); // leave empty '' for default handler or set to 'mysql'
  
  if(USES_CORE == true) {
	define('STYLESHEET', '../redo/');
	define('TABLE_CONFIGURATION', 'configuration_store');
	define('STORE_ID', 19);
  }
?>