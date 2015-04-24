<h2>Latest questions</h2>
<?php if($questions): ?>
<div class='postsHome'>
	<div class='questions'>
	<?php foreach ($questions as $question) : ?>
		<?php $questionProp = $question->getProperties(); ?>
		<div class='questionHome'>
			<h3 class='homeH3'><a href='<?=$this->url->create("question/id/{$questionProp['id']}")?>'><?=$question->title?></a></h3>
		
			<?php $user = $this->di->dispatcher->forward(['controller' => 'users','action' => 'getUser','params' => [$questionProp['user_id']]]);?>

			<div class='contentHome'>    
				<div class='infoComment'>
					<span class="timestamp"><?=$questionProp['created']?></span> 
					| <a href="<?=$this->url->create('users/id/' . $user->id) ?>"><?=$user->acronym?></a>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
	</div>
</div>
<?php endif; ?>