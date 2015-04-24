<header id="above">
<?php if($this->session->has('user') && $this->session->get('user') == 'admin') : ?>
	<?php $user = $this->di->dispatcher->forward(['controller' => 'users','action' => 'getUserAcronym','params' => [$this->session->get('user')]]);?>
	<div class="contentAbove">
		<a href="<?=$this->url->create("users/id/" . $user->id)?>"><?=($this->session->get('user'))?></a> |
		<a href="<?=$this->url->create('users/list-admin') ?>" title='edit'>Edit Users</a> |
		<a href="<?=$this->url->create('users/logout')?>">Logout</a> 
	</div>
<?php elseif($this->session->has('user')) : ?>
	<?php $user = $this->di->dispatcher->forward(['controller' => 'users','action' => 'getUserAcronym','params' => [$this->session->get('user')]]);?>
	<div class="contentAbove">
		<a href="<?=$this->url->create("users/id/" . $user->id)?>"><?=($this->session->get('user'))?></a> |
		<a href="<?=$this->url->create('users/logout')?>">Logout</a> 
	</div>
<?php else: ?>
	<div class="contentAbove">
		<a href="<?=$this->url->create('users/login')?>">Login</a> |
		<a href="<?=$this->url->create('users/add')?>">Register</a>
	</div>
<?php endif; ?>
</header>


