<!-- Call footer function hook  -->
<?php
if ( ! function_exists( 'busicarep_activate' ) ){
	do_action('busicare_dark_footer_section_hook');
}else{
	do_action('busicare_plus_footer_section_hook');
}
?>
</div>
</div>
</div>
<?php wp_footer(); ?>	
</body>
</html>