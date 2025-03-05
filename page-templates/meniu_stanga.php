<div class="widgets_grid_box">
    <div class="widget creote_widget_service_list">
    <h4 class="widget-title">Meniu</h4>
    <ul class="service_list_box">
        <li><a href="/intrebari-frecvente">Intrebari Frecvente </a> </li>
        <li><a href="/politica-de-retur">Politica de Retur</a> </li>
        <li><a href="/optiuni-de-livrare">Optiuni de Livrare </a> </li>
        <li><a href="/despre-noi">Despre Noi</a> </li>
        <li><a href="/contact">Contact</a> </li>
    </ul>
    </div>
</div>

    <?php
        $file = get_field('catalog_en', 'options');
        $image = get_field ('imagine_catalog', 'options');
            if( $file ): ?>
            <div class="widgets_grid_box">
                <div class="brouchure_box_widget">
                    <div class="widget_content">
                        <h3>Catalog Produse</h3>
                        <div class="color_white_1 clearfix">
                            <a href="<?php echo $file; ?>" target="_blank">
                                <img src="<?php echo $image; ?>" alt=" catalog">
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
    <?php endif; ?>
            

<div class="widgets_grid_box">
    <div id="creote-contactus-3" class="widget widget_contactus">
        <div class="contact_box_widget widget_box">
        <div class="widget_content">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/service-sidebar-contact-bg.jpg" alt="backgroundimage">
            <div class="top_section">
                <h3>Aveti nelamuriri?</h3>
                <p>Va rugam sa ne contactati. </p>
            </div>
            <div class="bottom_section">
                <a href="tel:<?php the_field('telefon_contact', 'options'); ?>" class="phone_number"><?php the_field('telefon_contact', 'options'); ?></a>
                <a href="mailto:<?php the_field('email', 'options'); ?>" class="mailid"><?php the_field('email', 'options'); ?></a>
            </div>
        </div>
        
        <a href="tel:<?php the_field('telefon_contact', 'options'); ?>" class="theme-btn one">Suna acum</a>
    
        </div>
    </div>
</div>
