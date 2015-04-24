<h1><i class="fa fa-user"></i> <?=$user->name?></h1>
<h3>Akronym: <?=$user->acronym?></h3>
<h3><i class="fa fa-envelope-o"></i> <?=$user->email?></h3>
<h3><?=isset($user->active) ? "Aktiv sedan: {$user->active}" : "Ej aktiv"?></h3>
<h3><?=isset($user->deleted) ? "Bortagen sedan: {$user->deleted}" : ""?></h3>

<div class='edit'>
<!-- activate/inactivate -->
<?php if(isset($user->active)) : ?>
	<a href=<?=$this->url->create('users/set-inactive/' . $user->id)?> title='inactive'><i class="fa fa-toggle-on"></i></a>
<?php else : ?>
	<a href=<?=$this->url->create('users/set-active/' . $user->id)?> title='active'><i class="fa fa-toggle-off"></i></a>
<?php endif ?>

<!-- soft delete -->
<?php if(isset($user->deleted)) : ?>
	<a href="<?=$this->url->create('users/undo-soft-delete/' . $user->id)?>" title='restore'><i class="fa fa-undo"></i></a>
<?php else : ?>
	<a href="<?=$this->url->create('users/soft-delete/' . $user->id)?>" title='soft-delete'><i class="fa fa-trash"></i></a>
<?php endif ?>

<!-- delete -->
<a href="<?=$this->url->create('users/delete/' . $user->id) ?>" title='delete'><i class="fa fa-times"></i></a>

<!-- update -->
<a href="<?=$this->url->create('users/edit/' . $user->id) ?>" title='edit'><i class="fa fa-pencil"></i></a>
</div>
<a href='<?=$this->url->create('users/list')?>'><i class="fa fa-arrow-left"></i>Tillbaka</a>