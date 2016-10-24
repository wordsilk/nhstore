<?php
/*
  $Id: index.php,v 1.1 2003/06/11 17:38:00 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('TEXT_MAIN', '<div id="hero" style="float: right; padding: 0px; margin: 0 0 20px 20px; text-align: center; width: 400px; height: auto;">
<a class="hpixlink" href="index.php?cPath=34_62" /><div class="hpix1"><p class="hpixwords">Check Out Our<br />Gear &amp; Apparel for Antarctica</p></div></a>
<a class="hpixlink" href="index.php?cPath=34_64" /><div class="hpix2"><p class="hpixwords">Check Out Our<br />Gear &amp; Apparel for the Tropics</p></div></a>
<a class="hpixlink" href="index.php?cPath=34_109" /><div class="hpix3"><p class="hpixwords">Check Out Our<br />Gear &amp; Apparel for Africa</p></div></a>
<a class="hpixlink" href="index.php?cPath=453" /><div class="hpix4"><p class="hpixwords">Check Out Our<br />Rental Gear</p></div></a></div>
<p class="hpagetext">We at <strong>New Headings</strong> have spent our lives
outdoors, exploring the far-flung corners of our world. It\'s been both our passion and our profession. We know from experience the right gear can make or break a trip so we test and use everything we sell&mdash;if it doesn\'t work for us, we will never offer it to you!</p>
<p class="hpagetext">From our smartly-bundled signature <a href="index.php?cPath=86" /><strong>Get Ready Packages</strong></a>, to our <a href="index.php?cPath=453" /><strong>Rental Gear Packages</strong></a>, to our <a href="index.php?cPath=438_441" /><strong>Cool Collection</strong></a> of eclectic and sometimes "hard to find" items, our number one goal is your <strong>Preparedness &amp; Peace of Mind</strong>.</p>
<p class="hpagetext">You\'ll shop from our unique selection of destination appropriate gear, have it delivered to your home, and know that it all fits and works before you depart for your adventure of a lifetime! </p>

<p class="hpagetext">The New Headings Leadership Team Wishes You Safe &amp; Frequent Travels!<br />Peggy, Marcy, &amp; Mark</p>

');
define('TABLE_HEADING_NEW_PRODUCTS', 'New Products For %s');
define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Upcoming Products');
define('TABLE_HEADING_DATE_EXPECTED', 'Date Expected');

if ( ($category_depth == 'products') || (isset($HTTP_GET_VARS['manufacturers_id'])) ) {
  define('HEADING_TITLE', $categories['categories_name']);
  define('TABLE_HEADING_IMAGE', '');
  define('TABLE_HEADING_MODEL', 'Model');
  define('TABLE_HEADING_PRODUCTS', 'Product Name');
  define('TABLE_HEADING_MANUFACTURER', 'Manufacturer');
  define('TABLE_HEADING_QUANTITY', 'Quantity');
  define('TABLE_HEADING_PRICE', 'Price');
  define('TABLE_HEADING_WEIGHT', 'Weight');
  define('TABLE_HEADING_BUY_NOW', 'Buy Now');
  define('TEXT_NO_PRODUCTS', 'There are no products to list in this category.');
  define('TEXT_NO_PRODUCTS2', 'There is no product available from this manufacturer.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Number of Products: ');
  define('TEXT_SHOW', '<b>Show:</b>');
  define('TEXT_BUY', 'Buy 1 \'');
  define('TEXT_NOW', '\' now');
  define('TEXT_ALL_CATEGORIES', 'All Categories');
  define('TEXT_ALL_MANUFACTURERS', 'All Manufacturers');
} elseif ($category_depth == 'top') {
  define('HEADING_TITLE', 'Outfitting Travelers Since 2002');
} elseif ($category_depth == 'nested') {
  define('HEADING_TITLE', 'Categories');
}
?>
