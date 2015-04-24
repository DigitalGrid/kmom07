<h1><i class="fa fa-user"></i> <?=$user->name?></h1>
<div class="gravatar">
    <img src='http://www.gravatar.com/avatar/<?=md5(strtolower(trim($user->email)))?>.jpg?s=150' alt='Gravatar'>
</div>
<h3>Acronym: <?=$user->acronym?></h3>
<h3><i class="fa fa-envelope-o"></i> <?=$user->email?></h3>
<h3><?=isset($user->active) ? "Active since: {$user->active}" : "Not active"?></h3>
<h3><?=isset($user->deleted) ? "Deleted since: {$user->deleted}" : ""?></h3>

<?php if($this->session->has('user') && ($this->session->get('user') == $user->acronym || $this->session->get('user') == 'admin')) : ?>
<div class='edit'>
	<!-- update -->
	<a href="<?=$this->url->create('users/edit/' . $user->id) ?>" title='edit'><i class="fa fa-pencil"></i> Edit profile</a>
</div>
<?php endif; ?>
<a href='<?=$this->url->create('users/list')?>'><i class="fa fa-arrow-left"></i> Back</a>

<?php if($questions || $answers): ?>
<div class='posts'>
	<div class='questions'>
		<?php if($questions) : ?>
			<h2><?=$user->acronym?>'s questions</h2>
			<?php foreach ($questions as $question) : ?>
				<?php $questionProp = $question->getProperties(); ?>
				<div class='question'>					
					<p><a href='<?=$this->url->create("question/id/{$questionProp['id']}")?>'><?=$questionProp['title']?></a> <span class="timestamp"><?=$questionProp['created']?></span></p>
					<p><?=$question = (strlen($questionProp['question']) > 30) ? substr($questionProp['question'],0,29).'...' : $questionProp['question']?></p>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
	
	<div class='answers'>
		<?php if($answers) : ?>
			<h2 class='postH2'><?=$user->acronym?>'s answers</h2>
			<?php foreach ($answers as $answer) : ?>
				<?php $answerProp = $answer->getProperties(); ?>
				<?php $question = $this->di->dispatcher->forward(['controller' => 'question','action' => 'getQuestion','params' => [$answerProp['question_id']]]);?>
				<div class='question'>
					<p><a href='<?=$this->url->create("question/id/{$answerProp['question_id']}")?>'><?=$question->title?></a> <span class="timestamp"><?=$answerProp['created']?></span></p>
					<p><?=$answer = (strlen($answerProp['answer']) > 30) ? substr($answerProp['answer'],0,29).'...' : $answerProp['answer']?></p>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
</div>
<?php endif; ?>