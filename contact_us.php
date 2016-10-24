<?php
/*
  $Id: contact_us.php,v 1.7 2002/11/19 01:48:08 dgw_ Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Contact - Feedback');
define('NAVBAR_TITLE', 'Contact and Feedback');
define('TEXT_SUCCESS', 'Your inquiry has been successfully sent to New Headings.');
define('EMAIL_SUBJECT', 'Enquiry from New Headings');

define('ENTRY_NAME', 'Full Name:');
define('ENTRY_EMAIL', 'E-Mail Address:');
define('ENTRY_CHALLENGE', 'Today\'s Date:');
define('ENTRY_ENQUIRY', 'Inquiry:');
define('TEXT_INFORMATION', '
<div style="width: 700px; margin: 0 auto 5px auto; background-color: transparent;">
<form name="contactus" id="contact" style="background-color: transparent;" title="Contact/Feedback" action="http://store.newheadings.com/index.php" method="post">
<input type="hidden" name="redirect" value="http://store.newheadings.com/thankyou.php">
<input type="hidden" name="requiredfields" value="email,name,emailtemplate,comment">
<input type="hidden" name="storename" value="New Headings LLC">
<input type="hidden" name="filetemplate" value="contact.txt">
<input type="hidden" name="dbfile" value="contact.csv">
<input type="hidden" name="use_numbering_key" value="Contact Form ">
<input type="hidden" name="emailfields" value="email">
<div><label class="title">Type of Message: *</label>
				<div>
				<input type="checkbox" name="emailtemplate" value="variable_sales_email.txt"><span>Sales Question</span><br>
			
				<input type="checkbox" name="emailtemplate" value="variable_returns_email.txt"><span>Returns Question</span><br>
			
				<input type="checkbox" name="emailtemplate" value="variable_tech_email.txt"><span>Technical Problem</span><br>
			
				<input type="checkbox" name="emailtemplate" value="variable_feedback_email.txt"><span>Feedback/Other</span><br>
			</div>
			</div>
			
			
			<div><label class="title">Your Name: *</label><input type="text" name="name"></div>

			<div><label class="title">Your Email Address: *</label><input type="text" name="email"></div>
				
			<div><label class="title">May we contact you by telephone?</label>
				<div>
					
				<input type="radio" name="call" value="Yes" checked><span>Yes</span><br>
			
				<input type="radio" name="call" value="No"><span>No</span><br>
			
				</div></div>
				
				
				<div><label class="title">Your daytime telephone number:</label><input type="text" name="daytelephone"></div>
				
				
				<div><label class="title">If this is about an order, have you placed the order already?</label>
				<div>
					
				<input type="radio" name="orderstatus" value="Yes"><span>Yes</span><br>
			
				<input type="radio" name="orderstatus" value="No"><span>No</span><br></div></div>
				
			<div><label class="title">If you have placed your order, what is your order number?</label><input type="text" name="ordernumber"></div>
			
			<div><label class="title">Your questions, comments, or feedback: *</label>
				<textarea name="comment" cols="20" rows="5"></textarea>
			</div>
			
			<div style="text-align: right;"><input class="cssButton" type="submit" value="Submit"></div>
</form></div>
<link rel="stylesheet" href="formoid1/style.css" type="text/css" />
<script type="text/javascript" src="formoid1/jquery.min.js"></script>
<script type="text/javascript" src="formoid1/jquery.uniform.min.js"></script>
<script type="text/javascript" src="formoid1/script.js"></script>
');
?>