<?php
/*
  $Id: sizechart.php,v 1.4 2002/11/19 01:48:08 dgw_ Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Sizing Chart');
define('HEADING_TITLE', 'Sizing Chart');

define('TEXT_INFORMATION', '
<table border=0 cellpadding=2 cellspacing=0 id="sizetable">

<tr> 
    <td valign="TOP" >Sizes</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd"><strong>XS</strong></td>
    <td align="center" valign="TOP" ><strong>S</strong></td>
    <td align="center" valign="TOP" bgcolor="#ffffdd"><strong>M</strong></td>
    <td align="center" valign="TOP" ><strong>L</strong></td>
    <td align="center" valign="TOP" bgcolor="#ffffdd"><strong>XL</strong></td>
    <td align="center" valign="TOP" ><strong>2XL</strong></td>
  </tr>
  <tr> 
    <td valign="TOP">Men\'s Tops &amp; Jacket Sizes - Chest Measurement</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">Under 34"</td>
    <td align="center" valign="TOP">34"-36"</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">38"-40"</td>
    <td align="center" valign="TOP">42"-44"</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">46"-48"</td>
    <td align="center" valign="TOP">50"-52"</td>
  </tr>
  <tr> 
    <td valign="TOP">Men\'s Pants &amp; Shorts Sizes - Waist Measurement</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">Under 28"</td>
    <td align="center" valign="TOP">28"-31"</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">32"-35"</td>
    <td align="center" valign="TOP">36"-39"</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">40"-43"</td>
    <td align="center" valign="TOP">44+"</td>
  </tr>
  <tr> 
    <td valign="TOP">Women\'s 
        General Sizing - 
    All Women\'s Apparel</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">2-4</td>
    <td align="center" valign="TOP">6-8</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">10-12</td>
    <td align="center" valign="TOP">14-16</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">18-20</td>
    <td align="center" valign="TOP">22-24</td>
  </tr>
  <tr> 
    <td valign="TOP">Women\'s 
        Shirt Sizes -
    Bust Measurement</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">32"-34"</td>
    <td align="center" valign="TOP"> 34"-36"</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">36"-38"</td>
    <td align="center" valign="TOP">38"-40"</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">40"-42"</td>
    <td align="center" valign="TOP">42"-44"</td>
  </tr>
  <tr> 
    <td valign="TOP">Women\'s 
        Pants &amp; Shorts Sizes - 
    Waist Measurement</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">Under 25"</td>
    <td align="center" valign="TOP">25"-27"</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">27"-29"</td>
    <td align="center" valign="TOP">30"-32"</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">33"-35"</td>
    <td align="center" valign="TOP">36"-39"</td>
  </tr>
  <tr> 
    <td valign="TOP">Youth - General Sizing</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">N/A</td>
    <td align="center" valign="TOP">6-8</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">10-12</td>
    <td align="center" valign="TOP">14-16</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">18-20</td>
    <td align="center" valign="TOP">N/A</td>
  </tr>
  <tr> 
    <td rowspan="2" valign="middle">Tilley 
      Socks - Shoe Sizes<br />
    (Women / Men)</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">N/A</td>
    <td align="center" valign="TOP">W 4-6</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">W 6 1/2-<br />10</td>
    <td align="center" valign="TOP">W 10 1/2-<br>13 1/2</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">W 14-<br>16 1/2</td>
    <td align="center" valign="TOP">N/A</td>
  </tr>
  <tr> 
    <td align="center" valign="TOP" bgcolor="#ffffdd">&nbsp;</td>
    <td align="center" valign="TOP">&nbsp;</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">M 5-8 1/2</td>
    <td align="center" valign="TOP">M 9-12</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">M 12 1/2- 15</td>
    <td align="center" valign="TOP">&nbsp;</td>
  </tr>
  <tr> 
    <td valign="TOP">Hat Sizes</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">Under<br>6 1/2</td>
    <td align="center" valign="TOP">6 5/8-<br>6 7/8</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">6 7/8-7</td>
    <td align="center" valign="TOP">7 1/8-<br>7 1/4</td>
    <td align="center" valign="TOP" bgcolor="#ffffdd">7 1/4-<br>7 1/2</td>
    <td align="center" valign="TOP">7 1/2-<br>7 5/8</td>
  </tr>
  <tr> 
    <td valign="TOP" colspan=7> 
        <strong>Our 
        Fit:</strong> Our garments generally result in a full-cut fit for the 
        body measurements listed. Our interest lies in helping you remain free 
        and comfortable as you pursue your favorite outdoor activities. If you\'re "in between" categories, we recommend that you 
        lean toward the smaller sized category.</td></tr>
  <tr> 
    <td valign="TOP" colspan=7 bgcolor="#ffffdd"><strong>Outerwear: </strong>Much of the outerwear is in Men\'s "unisex" sizing. Women 
        should order at least one size lower than usual; i.e. Women Size 
        Large should order Men Size Medium. Women can best order Men\'s tops 
        or jackets by equating Bust with Chest Measurements, pants and shorts 
        with Waist measurements. If you find yourself "in between" categories, 
        we recommend that the ladies lean toward the next smaller sized category.</td>
  </tr>
  <tr> 
    <td valign="TOP" colspan=7> 
       <h5>RETURNS POLICY:</h5> 

<B>We accept returns and exchanges with a no questions asked policy up to 30 days from your original date of purchase</B> as long as the item is returned in a resalable condition with the original tags attached. <BR><BR><b>Return & exchange exception:</b> We thank you for understanding that the sale of any item for which you have opted for custom embroidery will be considered final and may not be returned for a refund or an exchange.<

<BR><BR><B>For returns received after this 30 day period, we offer you a choice:</B>

<BR><BR>1. We are happy to issue you a refund less a 20% re-stocking fee. Unfortunately returns processing comes with significant costs – credit card fees, internet transactional and banking fees, labor and materials costs, and more – and so we thank you for understanding our reasoning.

<BR><BR>2. Or, we are happy to issue you an in-store credit for the full purchase price of the item(s) you are returning so you can use it to gear up for your next expedition or adventure. This credit will remain active in perpetuity, until you have used its full value.
<BR><BR><B>Returns received 90 or more days after date of purchase</B> may be returned only for instore credit.<BR><BR>
<B>Please send all returns to:</B><br />New Headings<br />200 Main Street<br />1st Floor<br>Ansonia, CT 06401 USA<br />Tel: 888 924 2050 (+1 203 924 2050 outside North America).<BR><BR>Include a copy of your original order confirmation along with a brief note alerting us as to the action you would like us to take (exchange, return for refund, return for in-store credit) and we will be glad to do so.<BR><br>
Thank you for shopping with us.
</td>
  </tr>
</table>
');
?>