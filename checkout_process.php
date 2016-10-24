<?php
/*
  $Id: checkout_process.php,v 1.26 2002/11/01 04:22:05 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/
// systemsmanager begin
define('TEXT_NEW_CUSTOMER_EMAIL', 'You can access your account using this login data:');
// systemsmanager end
// InfoPulse
define('TEXT_RETURNS_EMAIL', '<h5>Returns Policy:</h5>
		<p>We accept returns and exchanges with a no-questions-asked policy up to 30 days from your original date of purchase as long as the item is returned in a resalable condition with the original tags attached.</p>

<p>For returns received after this 30-day period, we offer you a choice:</p>

<ol><li>We are happy to issue you a refund less a 20% restocking fee. Returns processing comes with significant costs (credit card fees, internet transaction and banking fees, labor and materials costs, and more) and so we thank you for understanding our reasoning.</li>

<li>Or, we are happy to issue you a store credit for the full purchase price of the item(s) you are returning so you can use it to gear up for your next expedition or adventure. This credit will remain active in perpetuity, until you have used its full value.</li>

<li>Returns received 90 or more days after date of purchase may be returned only for instore credit.</li></ol>

<p><B>Please send all returns to:</b><br />New Headings<br />223 Canal Street<br />Shelton, CT 06484 USA<br />Include a copy of your original order confirmation along with a brief note letting us know what action you would like us to take (exchange, return for refund, or return for store credit) and we will be glad to do so. Our telephone numbers: 888-924-2050 or +00-1-203-924-2050 outside North America. </p>

<p>Thank you for shopping with us.</p>');
// InfoPulse end
// PWA BOF
define('EMAIL_WARNING', 'ATTENTION: This email address was given to us by someone who had visited our well known online store. If this was not done by you please email us at  ' . STORE_OWNER_EMAIL_ADDRESS . ' Thank you for shopping with us and have a great day.');
// PWA EOF

define('EMAIL_TEXT_SUBJECT', 'Order Process');
define('EMAIL_TEXT_ORDER_NUMBER', 'Order Number:');
define('EMAIL_TEXT_INVOICE_URL', 'Detailed Invoice:');
define('EMAIL_TEXT_DATE_ORDERED', 'Date Ordered:');
define('EMAIL_TEXT_PRODUCTS', 'Products');
define('EMAIL_TEXT_SUBTOTAL', 'Sub-Total:');
define('EMAIL_TEXT_TAX', 'Tax:        ');
define('EMAIL_TEXT_SHIPPING', 'Shipping: ');
define('EMAIL_TEXT_TOTAL', 'Total:    ');
define('EMAIL_TEXT_DELIVERY_ADDRESS', 'Delivery Address');
define('EMAIL_TEXT_BILLING_ADDRESS', 'Billing Address');
define('EMAIL_TEXT_PAYMENT_METHOD', 'Payment Method');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('TEXT_EMAIL_VIA', 'via');
?>