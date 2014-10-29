<?php
$options = \__::getOptions( 
    array( 
        'ci_address', 'ci_mobile_phone_number', 
        'ci_phone_number', 'ci_fax_phone_number', 
        'ci_contact_email' 
    ) 
);
extract( $options );
?>
  			<div id="column2">
  			
  				<h4>Contact B&amp;M's Team</h4>
  			
  				<p><?php echo $ci_address; ?> </p>
  		
  				<p><span class="title">Mob</span>	<?php echo $ci_mobile_phone_number; ?> <br />
  				<span class="title">Tel</span>	<?php echo $ci_phone_number; ?><br />
  				<span class="title">Fax</span>	<?php echo $ci_fax_phone_number; ?><br />
  				<span class="title">Email</span>	<span class="mailto"><?php echo $ci_contact_email; ?></span></p>
  			
  			</div>