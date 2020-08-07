<?php 
    /** 
  @Author Frances Ruganyumisa
  For the Final Year Project as Partial Fullfiment for the 
  Award of Bsc in Telecommunications
   */

require_once( "../functions.php" );

// Need to get the hostgroup from the AJAX request
$hostgroup = $_POST['hostgroup'];

// Get the content from functions.php passing the hostgroup from the POST
show_body_content( $hostgroup );

?>
