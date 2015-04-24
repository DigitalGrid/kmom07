
<h1>Question</h1>
<?php if(isset($question)): ?>
<?php $questionProp = $question[0]->getProperties(); ?>
<div class='button'>
	<a class="linkButton2 hyperButton" href="<?=$this->url->create('question/addAnswer/' . $questionProp['id'] . '') ?>">Answer question</a>
</div>

<div class='posts'>
<div class='question'>
	<div class='contentHeader'>
		<h2 class='contentH2'><a href='<?=$this->url->create("question/id/{$questionProp['id']}")?>'><?=$questionProp['title']?></a></h2>
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
		<p><?=$questionProp['question']?></p>
	</div>
			
	<div class='tags'>
		<?php $tags = $this->di->dispatcher->forward(['controller' => 'tag','action' => 'getTagsIdQuestion','params' => [$questionProp['id']]]);?>
				
		<?php foreach ($tags as $tag) : ?>
			<a class="linkButton hyperButton" href='<?=$this->url->create("question/tagged/{$tag->tag}")?>'><?=$tag->tag?></a>
		<?php endforeach; ?>
	</div>
	
	<div class='buttonSubmit'>
		<a class="linkButton2 hyperButton" href="<?=$this->url->create('comment/add/question/' . $question[0]->id . '') ?>">Comment</a>
	</div>
	
	<?php if($comments): ?>
	<div class='comments'>
		<h2>Comments</h2>
		<?php foreach ($comments as $comment) : ?> 
		<?php $commentProp = $comment->getProperties(); ?>
		<div class='comment'>
			
			<div class='userComment'>
				<?php $user = $this->di->dispatcher->forward(['controller' => 'users','action' => 'getUser','params' => [$commentProp['user_id']]]);?>
				<div class="gravatar">
					<a href="<?=$this->url->create('users/id/' . $user->id) ?>">
						<img src='http://www.gravatar.com/avatar/<?=md5(strtolower(trim($user->email)))?>.jpg?s=50' alt='Gravatar'>
					</a>
				</div>
				
			</div>
			
			<div class='comment'>
				<div class='infoComment'>
					<span class="timestamp"><?=$commentProp['created']?></span> 
					| <a href="<?=$this->url->create('users/id/' . $user->id) ?>"><?=$user->acronym?></a>
				</div>
				<div class="commentText">
				<p><?=$commentProp['comment']?></p>
				</div>
			</div>		
		</div>
		<?php endforeach; ?> 
	</div>
	<?php endif; ?>

</div>
</div>
<?php endif; ?>



<?php if($answers): ?>
<div class='posts'>
<h2>Answers</h2>
<?php foreach ($answers as $answer) : ?> 
<?php $answerProp = $answer->getProperties(); ?>
<div class='answer'>
	<div class='user'>
		<?php $user = $this->di->dispatcher->forward(['controller' => 'users','action' => 'getUser','params' => [$answerProp['user_id']]]);?>
		
		<div class="gravatar">
			<a href="<?=$this->url->create('users/id/' . $user->id) ?>">
				<img src='http://www.gravatar.com/avatar/<?=md5(strtolower(trim($user->email)))?>.jpg?s=100' alt='Gravatar'>
			</a>
		</div>
		<a href="<?=$this->url->create('users/id/' . $user->id) ?>"><?=$user->acronym?></a>
	</div>

	<div class='content'>
		<div class='infoComment'>
			<span class="timestamp"><?=$answerProp['created']?></span>
		</div>
		<p><?=$answerProp['answer']?></p>
	</div>
	
	<div class='buttonSubmit'>
		<a class="linkButton2 hyperButton" href="<?=$this->url->create('comment/add/answer/' . $answerProp['idAnswer'] . '') ?>">Comment</a>
	</div>
	
	<?php $commentAnswer = $this->di->dispatcher->forward(['controller' => 'comment','action' => 'listCommentAnswer','params' => [$answerProp['idAnswer']]]);?>
	<?php if($commentAnswer): ?>
	<div class='comments'>
		<h2>Comments</h2>
		<?php foreach ($commentAnswer as $comment) : ?> 
		<?php $commentProp = $comment->getProperties(); ?>
		<div class='comment'>
			
			<div class='userComment'>
				<?php $user = $this->di->dispatcher->forward(['controller' => 'users','action' => 'getUser','params' => [$commentProp['user_id']]]);?>
				<div class="gravatar">
					<a href="<?=$this->url->create('users/id/' . $user->id) ?>">
						<img src='http://www.gravatar.com/avatar/<?=md5(strtolower(trim($user->email)))?>.jpg?s=50' alt='Gravatar'>
					</a>
				</div>
				
			</div>
			
			<div class='comment'>
				<div class='infoComment'>
					<span class="timestamp"><?=$commentProp['created']?></span> 
					| <a href="<?=$this->url->create('users/id/' . $user->id) ?>"><?=$user->acronym?></a>
				</div>
				<div class="commentText">
				<p><?=$commentProp['comment']?></p>
				</div>
			</div>		
		</div>
		<?php endforeach; ?> 
	</div>
	<?php endif; ?>
</div>
<?php endforeach; ?> 
</div>
<?php endif; ?>








