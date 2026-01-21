<section class="footer-full-width-cta-module" <?php if (get_field('ffwc_bg','option')): ?>style="background-image: url(<?php echo get_field('ffwc_bg','option'); ?>);"<?php endif ?>>
<div class="container">
<div class="ffwc-wrapper">
    <div>
	<?php if (get_field('ffwc_heading','option')): ?>
		    		<h2 class="ffwc-heading wow fadeIn" data-wow-duration="1s"><?php echo get_field('ffwc_heading','option'); ?></h2>
		    	<?php endif ?>

		    	<?php if (get_field('ffwc_description','option')): ?>
		    		<div class="ffwc-description wow fadeIn" data-wow-duration="1.7s"><?php echo get_field('ffwc_description','option'); ?></div>
		    	<?php endif ?>
                </div>
		    	<?php 
				$link = get_field('ffwc_cta','option');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'];
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
				    <a class="button btn btn-on-color ffwc-cta wow fadeIn" data-wow-duration="1.7s" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
</div>
<!--Site Footer Start-->
<footer class="site-footer footer-style3" role="contentinfo">

        <div class="sf-wrapper">
    <div class="row sf-top-wrap">
        <div class="col-lg-3 col-12">
        <?php $logo = get_field('global_company_logo','option');
        if( !empty($logo) ): ?>
            <a href="<?php bloginfo('url'); ?>" class="sf-logo">
                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['alt']; ?>" width="<?php echo $logo['width'] ?>" height="<?php echo $logo['height']; ?>">
            </a>
        <?php endif;?>
         <?php if(get_field('global_address','option')):?>
                        <p class="sf-address"><?php echo get_field('global_address','option');?></p>
                    <?php endif;?>
            </div>
        <div class="col-lg-2 col-12">
                <?php wp_nav_menu(array(
                    'menu'            => 'Footer Left Menu',
                    'container'       => 'ul',
                    'menu_class' => 'sf-links',
                )); ?>
            </div>
           

            <div class="col-lg-2 col-12">
                <?php wp_nav_menu(array(
                    'menu'            => 'Footer Right Menu',
                    'container'       => 'ul',
                    'menu_class' => 'sf-links',
                )); ?>
            </div>

            <div class="col-lg-4 col-12 sf-contact-info-wrap">
                <ul class="sf-contact-info">
                   

                    <?php $string = get_field('global_phone_number','option');$string = preg_replace("/[^0-9]/", '', $string);?>
                    <?php if ($string): ?>
                        <li class="sf-ph">Tel: <a href="tel:<?php echo $string;?>" aria-label="Phone Number"><?php echo get_field('global_phone_number','option');?></a></li>
                    <?php endif ?>                 

                    <?php if (get_field('global_fax','option')): ?>
                        <li class="sf-fax">Fax: <a href="javascript:void(0)" class="nonlink fax" tabindex="-1" aria-label="Fax Number"><?php echo get_field('global_fax','option');?></a></li>
                    <?php endif;?>

                    <?php if(get_field('global_email','option')):?>
                        <li>Email: <a href="mailto:<?php echo get_field('global_email','option');?>" class="sf-mail" aria-label="Email Us"><?php echo get_field('global_email','option');?></a></li>
                    <?php endif;?>
                    <li class="social-icons">
                <?php
                if( have_rows('social_profiles', 'option') ): ?>
                    <?php
                    while ( have_rows('social_profiles', 'option') ) : the_row(); ?>
                        <?php
                        $sf_social_icon = get_sub_field('sp_social_icon');
                        $socialclass = str_replace(' ', '-', get_sub_field('sp_social_profile')); // Replaces all spaces with hyphens.
                        $socialclass = preg_replace('/[^A-Za-z0-9\-]/', '', $socialclass); // Removes special chars.
                        $socialclass = strtolower($socialclass); // Convert to lowercase
                        if (get_sub_field('sp_social_link')) :
                        ?>
                            <a class="<?php echo $socialclass; ?>" href="<?php echo esc_url(get_sub_field('sp_social_link')); ?>" target="_blank"  title="<?php echo get_sub_field('sp_social_profile'); ?>" rel="noreferrer noopener" aria-label="<?php echo get_sub_field('sp_social_profile'); ?>">
                        <?php endif ?>
                                <?php if ($sf_social_icon): ?>
                                    <?php echo $sf_social_icon; ?>
                                <?php endif ?>
                        <?php if (get_sub_field('sp_social_link')) : ?>
                            </a>
                        <?php endif ?>
                    <?php
                    endwhile; ?>
                <?php
                endif;  ?>
            </li>
                </ul>
               
            </div>
        </div>
   

    <div class="footer-bootom sf-small">
        <div class="container">
            <p class="copyright">&copy; <?php echo date("Y"); ?> <a class="sf-company-name" href="<?php bloginfo('url'); ?>"><?php bloginfo( 'name' ); ?></a>, All Rights Reserved | Site created by <a href="https://business.thomasnet.com/marketing-services" target="_blank" rel="noreferrer noopener">Thomas Marketing Services</a></p>

             </div>
        </div>


</footer>
<!--Site Footer End-->
</div>
            </section>