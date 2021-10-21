<div class="<?php if(get_theme_mod('sticky_header_enable',false)===true):?>header-sticky<?php endif;?>">
  <div class="header-logo index5">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12">
  				<?php the_custom_logo();?>
				<?php if((get_option('blogname')!='') || (get_option('blogdescription')!='')):?>
					<div class="custom-logo-link-url"> 
						<?php if(get_option('blogname')!=''):?>
			    			<h2 class="site-title"><a class="site-title-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			    			</h2>
			    		<?php endif;

						$busicare_dark_description = get_bloginfo( 'description', 'display' );
						if(get_option('blogdescription')!='')
						{
						if ( $busicare_dark_description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $busicare_dark_description; ?></p>
						<?php endif; 
						}?>
					</div>
				<?php endif;?>
  			</div>
  		</div>
  	</div>
  </div>
	
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light navbar5">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'busicare-dark'); ?>">
			  <span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNavDropdown">

				<!-- Right Nav -->
				<?php $busicare_dark_shop_button = '<ul class="nav navbar-nav mr-auto">%3$s';
   //Hence This condition only work when woocommerce plugin will be activate
   if ( class_exists( 'WooCommerce' ) ) {
    
       if(get_theme_mod('after_menu_btn_new_tabl',false)==true) { $busicare_dark_target="_blank";}
      else { $busicare_dark_target="_self"; }
      if((get_theme_mod('after_menu_btn_txt')!='') && (get_theme_mod('after_menu_multiple_option')=='menu_btn')):
        $busicare_dark_shop_button .= '<li class="nav-item menu-item honey-btn main-header-btn hw"><a target='.$busicare_dark_target.' class="busicare_header_btn" href='.get_theme_mod('after_menu_btn_link','#').'>'.get_theme_mod('after_menu_btn_txt').'</a>';
      endif;
      if((get_theme_mod('after_menu_html')!='') && (get_theme_mod('after_menu_multiple_option')=='html')):
        $busicare_dark_shop_button .= '<li class="nav-item menu-html menu-item">'.get_theme_mod('after_menu_html'); 
      endif;
      if(get_theme_mod('after_menu_multiple_option')=='top_menu_widget'):
          ob_start();
        $busicare_dark_sidebar = busicare_plus_footer_widget_area( 'menu-widget-area' );
        $busicare_dark_sidebar = ob_get_contents();
      $busicare_dark_shop_button .= '<li class="nav-item">'.$busicare_dark_sidebar.'</li>';
      ob_end_clean();
      endif;
      
    
     $busicare_dark_shop_button .= '<li class="nav-item"> <div class="header-module">';

   if(get_theme_mod('search_btn_enable',false)==true)
      {
        $busicare_dark_shop_button .='<div class="nav-search nav-light-search wrap">
                        <div class="search-box-outer">
                       <div class="dropdown">
                      <a href="#" title="'.esc_attr__('Search','busicare-dark').'" class="search-icon condition has-submenu" aria-haspopup="true" aria-expanded="false">
                   <i class="fa fa-search"></i>
                 <span class="sub-arrow"></span></a>
                  <ul class="dropdown-menu pull-right search-panel"  role="group" aria-hidden="true" aria-expanded="false" >
                             <li class="panel-outer">
                             <div class="form-container">
                                <form role="'.esc_attr('Search','busicare-dark').'" method="get" class="search-form" action="'.esc_url( home_url( '/' )).'">
                                	<label>
                                  		<input type="search" class="search-field" placeholder="'.esc_attr__('Search','busicare-dark').'" value="" name="s" autocomplete="off">
                                 	</label>
                                 	<input type="submit" class="search-submit" value="'.esc_attr__('Search','busicare-dark').'">
                               </form>                   
                               </div>
                             </li>
                           </ul>
                         </div>
                       </div>
                     </div>';
          } 
   
  if(get_theme_mod('cart_btn_enable',false)==true){
   $busicare_dark_shop_button .='<div class="cart-header ">';
      global $woocommerce; 
      $busicare_dark_woo_itm = ($woocommerce->cart->cart_contents_count > 1) ? "Items" : "Item";
      $busicare_dark_link = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : $woocommerce->cart->get_cart_url();
      $busicare_dark_shop_button .= '<a class="cart-icon" href="'.$busicare_dark_link.'" >';
      
      if ($woocommerce->cart->cart_contents_count == 0){
          $busicare_dark_shop_button .= '<i class="fa fa-shopping-cart" aria-hidden="true"></i>';
        }
        else
        {
          $busicare_dark_shop_button .= '<i class="fa fa-cart-plus" aria-hidden="true"></i>';
        }
           
        $busicare_dark_shop_button .= '</a>';
        
        
        $busicare_dark_shop_button .= '<a href="'.esc_url($busicare_dark_link).'" ><span class="cart-total">
                '.sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'busicare-dark'), $woocommerce->cart->cart_contents_count).'</span></a>';         


        }
    }
    //Else condition will run if woocommerce plugin is deactived
    else
    {
     $busicare_dark_cls='hw';
     $busicare_dark_html='menu-html';
      if(get_theme_mod('after_menu_btn_new_tabl',false)==true) { $busicare_dark_target="_blank";}
      else { $busicare_dark_target="_self"; }
      if((get_theme_mod('after_menu_btn_txt')!='') && (get_theme_mod('after_menu_multiple_option')=='menu_btn')):
        $busicare_dark_shop_button .= '<li class="nav-item menu-item main-header-btn '.$busicare_dark_cls.'"><a target='.$busicare_dark_target.' class="busicare_header_btn" href='.get_theme_mod('after_menu_btn_link','#').'>'.get_theme_mod('after_menu_btn_txt').'</a>';
      endif;
      if((get_theme_mod('after_menu_html')!='') && (get_theme_mod('after_menu_multiple_option')=='html')):
        $busicare_dark_shop_button .= '<li class="nav-item '.$busicare_dark_html.'  menu-item">'.get_theme_mod('after_menu_html'); 
      endif;
       if(get_theme_mod('after_menu_multiple_option')=='top_menu_widget'):
        //$shop_button .= '<li class="nav-item html menu-item">'.busicare_footer_widget_area('menu-widget-area'); 
          ob_start();
        $busicare_dark_sidebar = busicare_plus_footer_widget_area( 'menu-widget-area' );
        $busicare_dark_sidebar = ob_get_contents();
      $busicare_dark_shop_button .= '<li class="nav-item">'.$busicare_dark_sidebar.'</li>';
      ob_end_clean();
      endif;
      if(get_theme_mod('search_btn_enable',false)==true)
      {
   
    $busicare_dark_shop_button .= '<li class="nav-item"><div class="header-module">
         <div class="nav-search nav-light-search wrap">
                           <div class="search-box-outer">
                            <div class="dropdown">
                  <a href="#" title="'.esc_attr__('Search','busicare-dark').'" class="search-icon condition has-submenu" aria-haspopup="true" aria-expanded="false">
               <i class="fa fa-search"></i>
             <span class="sub-arrow"></span></a>
              <ul class="dropdown-menu pull-right search-panel"  role="group" aria-hidden="true" aria-expanded="false">
                             <li class="panel-outer">
                             <div class="form-container">
                                <form role="'.esc_attr('Search','busicare-dark').'" method="get" class="search-form" action="'.esc_url( home_url( '/' )).'">
                                	<label>
                                  		<input type="search" class="search-field" placeholder="'.esc_attr__('Search…','busicare-dark').'" value="" name="s" autocomplete="off">
                                 	</label>
                                 	<input type="submit" class="search-submit" value="'.esc_attr__('Search','busicare-dark').'">
                                </form>                   
                               </div>
                             </li>
                           </ul>
                       </div>
                     </div>
                   </div>
        
      </div>';
    }
    
    }
   $busicare_dark_shop_button .= '</ul>';
   
   $busicare_dark_menu_class='';
    wp_nav_menu( array
             (
             'theme_location'=> 'busicare-primary', 
             'menu_class'    => 'nav navbar-nav mr-auto '.$busicare_dark_menu_class.'',
            'items_wrap'  => $busicare_dark_shop_button,
             'fallback_cb'   => 'busicare_fallback_page_menu',
             'walker'        => new busicare_nav_walker()
             ));  ?>
				
			</div>
			
		</div>
	</nav>
</div>