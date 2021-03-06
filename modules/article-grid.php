
<div class="inner-column">

	<div class="article-grid-container">
		<section class="article-grid-main-card article-card">
			<h3 class="header">This is an &#34;Article grid&#34; module. This is it&#39;s heading.</h3>
			<p class="support-text">Again, we totally just made that up. It is a box with boxes in it.</p>
		</section>

		<?php 

		$articleMain = [
			"head" => "This is an article card",
			"text" => "It is basically a mini call to action, right?",
			"button" => "Act!",
			];

		$articleText = [
			"head" => "This is the title of an article card",
			"text" => "Here's a little info to help you understand if this is an article you want to read",
			"button" => "Read More!",
			];
		?>


		<div class="article-card-container">
			<section class="article-card">
			
					<h3 class="header"> <?=$articleMain['head']?> </h3>
					<p class="support-text"> <?=$articleMain['text']?> </p>
					<a href="#" class='button'><?=$articleMain['button']?></a>
				
			</section>

			<?php for ($i = 1; $i <= 5; $i++) {?>

			<section class="article-card">
				<h3 class="header"> <?=$articleText['head']?> </h3>
				<p class="support-text"> <?=$articleText['text']?> </p>
				<a href="#" class='button'><?=$articleText['button']?></a>
			</section>

			<?php } ?>

		</div>
	</div>
</div>
