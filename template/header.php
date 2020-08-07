<?php 
    /* 
  @Author Frances Ruganyumisa
  For the Final Year Project as Partial Fullfiment for the 
  Award of Bsc in Telecommunications
   **/

require_once( "../functions.php" );

?>

        <div class="headerTitle">
            <h1><?php echo $title; ?></h1>
			<p id="header_nagios_totals"><?php echo "Monitoring <b>" . $hosts_total . " Hosts</b> and <b>" . $services_total . " Services</b>."; ?></p>
        </div>
		
		<div class="headerStats">
		</div>
		
		<div class="clear"></div>