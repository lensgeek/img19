<?php
/* 

------- Commment out this section once finalised


// $result_array = $row;
foreach($result_array as $key => $value) {
	echo $key . " : " . $value . "<br />";
};


------- Commment out this section once finalised

*/

?>
<div class="large-12 columns" />
	<div class="large-10 columns large-centered">
		<img src="<?= $result_array['content_mainimage']; ?>" />
	</div>
		<div class="large-8 columns">
		<h2><?= $result_array['content_title']; ?>
			<h4 class="subheader">by <?= $result_array['author_first']." ".$result_array['author_last']; ?></h4>
		</div>
		<div class="large-4 columns social-links">
			<?php

				if (isset($result_array['contact_website'])) {
					?>
					<a href="<?= $result_array['contact_website']; ?>" target="_blank">
						<i class="fi-link"></i>
					</a>
					<?php

				};

				if (isset($result_array['contact_twit'])) {
					?>
					<a href="http://twitter.com/<?= $result_array['contact_twit']; ?>" target="_blank">
						<i class="fi-social-twitter"></i>
					</a>
					<?php

				};

				if (isset($result_array['contact_insta'])) {
					?>
					<a href="http://instagram.com/<?= $result_array['contact_insta']; ?>" target="_blank">
						<i class="fi-social-instagram"></i>
					</a>
					<?php

				}; ?>
		</div>

	<div class="large-12 columns text-center">
		<p>
			<?= $result_array['content_maintext']; ?>
		
		<?php

		if (isset($result_array['content_mainwork'])) {
					
					print_r($result_array['content_mainwork']);

			}; 

		if (isset($result_array['content_further'])) {
					
					print_r($result_array['content_further']);

			}; 
		?>
		</p>
		<p> To follow up on the work please contact the artist via : <br />
			<?php
			if (isset($result_array['contact_email'])) {
					
					echo "<i class='fi-mail'></i>";
					print_r($result_array['contact_email']);
					echo "<br />";

			};

			if (isset($result_array['contact_phone'])) {
					
					echo "<i class='fi-telephone'></i>";
					print_r($result_array['contact_phone']);

			}; 

			?>
		</p>
	</div>

</div>





