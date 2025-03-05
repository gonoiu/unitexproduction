<div class="widgets_grid_box">
    <div class="widget creote_widget_service_list">
    <h4 class="widget-title">Menù</h4>
    <ul class="service_list_box">
        <li><a href="/domande-frequenti">Domande frequenti </a> </li>
        <li><a href="/politica-di-ritorno">Politica di ritorno</a> </li>
        <li><a href="/opzioni-di-consegna">Opzioni di consegna </a> </li>
        <li><a href="/chi-siamo">Chi siamo</a> </li>
        <li><a href="/contatto">Contatto</a> </li>
    </ul>
    </div>
</div>

<div class="widgets_grid_box">
    <div class="brouchure_box_widget">

        <div class="widget_content">
            <h3>Catalogo dei prodotti</h3>
            <div class="color_white_1 clearfix">
                <a href="#" class="theme-btn color_white_1 one">Scarica il PDF</a>
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/broucher-img.jpg" alt="image">
        </div>
        
    </div>
</div>
<div class="widgets_grid_box">
    <div id="creote-contactus-3" class="widget widget_contactus">
        <div class="contact_box_widget widget_box">
        <div class="widget_content">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/assets/images/service-sidebar-contact-bg.jpg" alt="backgroundimage">
            <div class="top_section">
                <h3>Hai delle preoccupazioni?</h3>
                <p>Ci contatti per favore. </p>
            </div>
            <div class="bottom_section">
                <a href="tel:<?php the_field('telefon_contact', 'options'); ?>" class="phone_number"><?php the_field('telefon_contact', 'options'); ?></a>
                <a href="mailto:<?php the_field('email', 'options'); ?>" class="mailid"><?php the_field('email', 'options'); ?></a>
            </div>
        </div>
        
        <a href="tel:<?php the_field('telefon_contact', 'options'); ?>" class="theme-btn one">Chiamare ora</a>
    
        </div>
    </div>
</div>