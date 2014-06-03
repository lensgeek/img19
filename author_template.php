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

<div class="row">
      
</div> 
<div class="row header-logo">
  	<div class="medium-12">
		<div class=" medium-4 columns text-left">
	       <ul class="no-bullet logo">
          <li><a href="author/rachel-appleby" title="Rachel Appleby">Rachel Appleby</a></li>
          <li><a href="author/ioana-bultoc" title="Ioana Bultoc">Ioana Bultoc</a></li>
          <li><a href="author/heidi-culverwell" title="Heidi Culverwell">Heidi Culverwell</a></li>
          <li><a href="author/alex-edwards" title="Alex Edwards">Alex Edwards</a></li>
          <li><a href="author/theo-ellison" title="Theo Ellison">Theo Ellison</a></li>
          <li><a href="author/kate-green" title="Kate Green">Kate Green</a></li>
          <li><a href="author/lee-hassall" title="Lee Hassall">Lee Hassall</a></li>
          <li><a href="author/talha-hassan" title="Talha Hassan">Talha Hassan</a></li>
          <li><a href="author/joseph-kesisoglou" title="Joseph Kesisoglou">Joseph Kesisoglou</a></li>
          <li><a href="author/alice-martin-smith" title="Alice Martin-Smith">Alice Martin Smith</a></li>
        </ul>
	   	</div>
	   	<div class="medium-4 columns text-center logo-header-author">
	          <a href=""><img src="img/img19_circle2.gif" /></a>
	      </div>
	    <div class="medium-4 columns text-right">
	       <ul class="no-bullet logo">
          <li><a href="author/alex-mason" title="Alex Mason">Alex Mason</a></li>
          <li><a href="author/tania-merriman" title="Tania Merriman">Tania Merriman</a></li>
          <li><a href="author/sophie-moet" title="Sophie Moet">Sophie Moet</a></li>
          <li><a href="author/melissa-santos" title="Melissa Santos">Melissa Santos</a></li>
          <li><a href="author/melissa-stapleton" title="Melissa Stapleton">Melissa Stapleton</a></li>
          <li><a href="author/lauren-thatcher" title="Lauren Thatcher">Lauren Thatcher</a></li>
          <li><a href="author/christopher-trafford" title="Christopher Trafford">Christopher Trafford</a></li>
          <li><a href="author/caroline-walker" title="Caroline Walker">Caroline Walker</a></li>
          <li><a href="author/hollie-woodward" title="Hollie Woodward">Hollie Woodward</a></li>
        </ul>
		    </div>
		</div>
    </div> 
</div>
    <div class="row panel">

<div class="large-12 columns" />
	<div class="large-10 columns large-centered">
		<img src="<?= $result_array['content_mainimage']; ?>" />
		<div class="row">
			<div class="large-7 columns">
				<h2><?= $result_array['content_title']; ?></h2>
				<h4 class="subheader">by <?= $result_array['author_first']." ".$result_array['author_last']; ?></h4>
			</div>
			<div class="large-3 columns social-links">
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
		</div>
		<div class="columns main-text">
			<p>
				<?= $result_array['content_maintext']; ?>
			</p>
		</div>
	</div>
<div class="large-12 columns text-center"><p>
		<?php

		if (isset($result_array['content_mainwork'])) {
					
					print_r($result_array['content_mainwork']);

			};  ?> </p><p class="content_further"><?php

		if (isset($result_array['content_further'])) {
					
					print_r($result_array['content_further']);

			}; 
		?>
		</p>
		<p> 
			<?php
				$contact_via = 0;

				if (isset($result_array['contact_email'])) {
						$contact_via += 1;
				};

				if (isset($result_array['contact_phone'])) {
						$contact_via += 2;
				}; 

				if ($contact_via == "1") {
					echo "To follow up on the work please contact the artist via email @ <br />";
					echo "<i class='fi-mail'></i> ";
					print_r($result_array['contact_email']);
					echo "<br />";
				}elseif ($contact_via == "2") {
					echo "To contact the artist about the work, pelase phone @ <br />";
					echo "<i class='fi-telephone'></i> ";
					print_r($result_array['contact_phone']);
					echo "<br />";
				}elseif ($contact_via == "3") {
					echo "To contact the artist about the work, pelase phone or email: <br />";
					echo "<i class='fi-telephone'></i> ";
					print_r($result_array['contact_phone']);
					echo "<br />";
					echo "<i class='fi-mail'></i> ";
					print_r($result_array['contact_email']);
				};

			?>
		</p>
	</div>

</div>





