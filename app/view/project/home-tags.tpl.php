<h2>Popular tags</h2>
<div class='tags'>

	<?php foreach ($tags as $tag) : ?>
		<a class="linkButton hyperButton" href='<?=$this->url->create("question/tagged/{$tag->tag}")?>'><?=$tag->tag?></a>
	<?php endforeach; ?>

</div>