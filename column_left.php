<div id="sidecategories">
	<?php  
		if ((USE_CACHE == 'true') && empty($SID)) {
			echo tep_cache_categories_box();
		  } else {
			
		
				include(DIR_WS_BOXES . 'categories_dropdown.php');
			
		  }
		  
	?> 
 </div> 


