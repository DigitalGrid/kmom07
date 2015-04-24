<h1>Questions</h1>
<div class='button'>
	<a class='linkButton2 hyperButton' href="<?=$this->url->create('question/add') ?>">Ask a question</a>
</div>

<div class='posts'>
	<div class='questions'>
	<?php foreach ($questions as $question) : ?>
		<?php $questionProp = $question->getProperties(); ?>
		<div class='questionOnly'>
			<div class='contentHeader'>
				<h2 class='contentH2'><a href='<?=$this->url->create("question/id/{$questionProp['id']}")?>'><?=$question->title?></a></h2>
			</div>
		
			<div class='user'>
				<?php $user = $this->di->dispatcher->forward(['controller' => 'users','action' => 'getUser','params' => [$questionProp['user_id']]]);?>
				
				<div class="gravatar">
					<a href="<?=$this->url->create('users/id/' . $user->id) ?>">
						<img src='http://www.gravatar.com/avatar/<?=md5(strtolower(trim($user->email)))?>.jpg?s=100' alt='Gravatar'>
					</a>
				</div>
				<a href="<?=$this->url->create('users/id/' . $user->id) ?>"><?=$user->acronym?></a>
			</div>

			<div class='content'>    
				<div class='infoComment'>
					<span class="timestamp"><?=$questionProp['created']?></span>
				</div>
				<p><?=$question = (strlen($questionProp['question']) > 50) ? substr($questionProp['question'],0,49).'...' : $questionProp['question']?></p>
			</div>
			
			<div class='tags'>
				<?php //$tags = $this->di->dispatcher->forward(['controller' => 'tag','action' => 'getTagsIdQuestion','params' => [$question->id]]);?>				
				<?php $tags = $this->di->dispatcher->forward(['controller' => 'tag','action' => 'getTagsIdQuestion','params' => [$questionProp['id']]]);?>
				
				<?php foreach ($tags as $tag) : ?>
					<a class="linkButton hyperButton" href='<?=$this->url->create("question/tagged/{$tag->tag}")?>'><?=$tag->tag?></a>
				<?php endforeach; ?>
			</div>


		</div>
	<?php endforeach; ?>
	</div>
</div>

