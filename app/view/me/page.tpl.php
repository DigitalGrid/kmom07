<article class="article1">
 
<?=$content?>
 
<?php if(isset($byline)) : ?>
<footer class="byline">
	<?=$byline?>
	<img src='<?=$this->url->asset("img/me/me03.png")?>' alt='Christofer' />
</footer>
<?php endif; ?>
 
</article>