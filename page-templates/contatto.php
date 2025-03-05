<?php
/**
 * Template Name: Contact IT
 *
 * Template for displaying a blank page.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header('page');
?>

<div id="content" class="site-content ">

	<section class="contact-section">
	<!--===============spacing==============-->
	<div class="pd_top_90"></div>
	<!--===============spacing==============-->
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-6 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
				<div class="contact_form_box_all type_one">
				<div class="contact_form_box_inner">
					<div class="contact_form_shortcode">
						<form id="contact-form" method="post" action="contact.php" role="form">

							<div class="messages"></div>

							<div class="controls">
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
										<label> Nome<br /></label>
											<input type="text" name="name" placeholder="Nome *" required="required" data-error="Inserisci il Nome">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
										<label> Telefono<br /></label>
											<input type="text" name="phone" required="required" placeholder="Telefono *" data-error="Inserisci Telefono">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
										<label> Email<br /></label>
											<input type="text" name="email" required="required" placeholder="Email *" data-error="Inserisci l'email">
											<div class="help-block with-errors"></div>
										</div>
									</div>

									<div class="col-sm-12">
										<div class="form-group">
										<label> Messaggio<br /></label>
											<textarea name="message" placeholder="Scrivi un messaggio ... (Opzionale) " rows="3" required="required" data-error="Per favore, lasciaci un messaggio."></textarea>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									
									<div class="col-sm-12">
										<div class="form-group mg_top apbtn">
											<button class="theme_btn" type="submit">Inviare</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 pd_left_30">
				<div class="title_all_box style_one dark_color">
					<div class="title_sections left">
						<div class="before_title">Informazioni di contatto</div>
						<h2>Avete domande?</h2>
						<p>Al tuo servizio!</p>
					</div>
				</div>

				<div class="contact_box_content style_one">
					<div class="contact_box_inner icon_yes">
						<div class="icon_bx">
							<span class=" icon-placeholder"></span>
						</div>
						<div class="contnet">
							<h3> Indirizzo</h3>
							<p>
								<?php the_field('adresa', 'options'); ?>
							</p>
						</div>
					</div>
				</div>
				<!--===============spacing==============-->
				<div class="pd_bottom_15"></div>
				<!--===============spacing==============-->
				<div class="contact_box_content style_one">
					<div class="contact_box_inner icon_yes">
						<div class="icon_bx">
							<span class="icon-phone-call"></span>
						</div>
						<div class="contnet">
							<h3> Telefono & E-mail</h3>
							<p>
								Telefono: <a href="tel:<?php the_field('telefon_contact', 'options'); ?>"><?php the_field('telefon_contact', 'options'); ?></a> <br/>
								Email: <a href="mailto:<?php the_field('email', 'options'); ?>"><?php the_field('email', 'options'); ?></a>
							</p>
						</div>
					</div>
				</div>
				<!--===============spacing==============-->
				<div class="pd_bottom_15"></div>
				<!--===============spacing==============-->
				<div class="contact_box_content style_one">
				<div class="contact_box_inner icon_yes">
					<div class="icon_bx">
						<span class="fa fa-clock-o"></span>
					</div>
					<div class="contnet">
						<h3> Orario di lavoro </h3>
						<p>
							Lunedì - Venerdì: 08.00 - 17.00<br/>
							Sabato - Domenica: Chiuso
						</p>
					</div>
				</div>
				</div>
				<!--===============spacing==============-->
				<div class="pd_bottom_40"></div>
				<!--===============spacing==============-->
				<div class="social_media_v_one style_two">
				<ul>
					<li>
						<a href="<?php the_field('facebook', 'options');?>" target="_blank"> <span class="fa fa-facebook"></span>
							<small>facebook</small>
						</a>
					</li>
					<li>
						<a href="<?php the_field('linkedin', 'options');?>" target="_blank"> <span class="fa fa-linkedin"></span>
							<small>linkedin</small>
						</a>
					</li>
					<li>
						<a href="<?php the_field('instagram', 'options');?>" target="_blank"> <span class="fa fa-instagram"></span>
							<small>instagram</small>
						</a>
					</li>
				</ul>
				</div>
			</div>
		</div>
	</div>
	<!--===============spacing==============-->
	<div class="pd_top_70"></div>
	<!--===============spacing==============-->
	</section>
	<section class="contact-map-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<section class="map-section">
					<!--Map Outer-->
					<div class="map-outer">
						<div class="google-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2791.6858182194387!2d27.098113599999998!3d45.59686029999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b41b9159152a25%3A0x78fbec0f183e2ead!2sUnitex%20Production%20Equipment%20Ro%20Srl!5e0!3m2!1sro!2sro!4v1713031524535!5m2!1sro!2sro" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</section>
					
				</div>
			</div>
		</div>
	</section>

</div>


<?php
	get_footer('it');
?>



