<?php
/*
Template Name Posts: Prosjekt1
*/
?>

<?php

get_header();
st_before_content($columns='');
?>
												
				<div id="prosjekt-wrapper">
					<div id="prosjekt-tittel">
						<h2>     </h2>
					</div>
					<div class="prosjekt-content">
						<h2> Hig Debatt </h2>
						
						<div id="bilde1" class= "prosjekt-img">
						</div>
						<div id ="bildebesk1" class= "prosjekt-imgdesc">
							<p>Forside med innlogging. De mest aktive brukerne blir rangert i sidebaren til høyre.</p>
						</div>
						<div id="bilde2" class= "prosjekt-img">
						</div>
						<div id ="bildebesk2" class= "prosjekt-imgdesc">
							<p>Annet screenshot blablablablabal</p>
						</div>
					
					</div><!-- prosjekt-content -->
				</div>
<?php
st_after_content();
//get_sidebar('page');
get_footer();
 ?>