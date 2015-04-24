<h1><?=$title?></h1>
<p>
	<a href="<?=$this->url->create('users/list')?>">Alla användare</a> | 
	<a href="<?=$this->url->create('users/active')?>">Aktiva användare</a> |
	<a href="<?=$this->url->create('users/inactive')?>">Inaktiva användare</a> |
	<a href="<?=$this->url->create('users/trash')?>">Papperskorgen</a>
</p>

<table>
	<tr>
		<th>Id</th>
		<th>Akronym</th>
		<th>Namn</th>
		<th>Email</th>
		<th>Aktiv</th>
		<th>Borttagen</th>
		<th colspan="4">Editering</th>
	</tr>
	
	<?php foreach ($users as $user) : ?>
	<tr>
		<td><a href="<?=$this->url->create('users/id/' . $user->id) ?>"><?=$user->id?></a></td>
		<td><?=$user->acronym?></td>
		<td><?=$user->name?></td>
		<td><?=$user->email?></td>
		<td><?=isset($user->active) ? 'Ja' : 'Nej'?></td>
		<td><?=isset($user->deleted) ? 'Ja' : 'Nej'?></td>
		
		<!-- activate/inactivate -->
		<?php if(isset($user->active)) : ?>
			<td><a href=<?=$this->url->create('users/set-inactive/' . $user->id)?> title='inactive'><i class="fa fa-toggle-on"></i></a></td>
		<?php else : ?>
			<td><a href=<?=$this->url->create('users/set-active/' . $user->id)?> title='active'><i class="fa fa-toggle-off"></i></a></td>
		<?php endif ?>
		
		<!-- soft delete -->
		<?php if(isset($user->deleted)) : ?>
			<td><a href="<?=$this->url->create('users/undo-soft-delete/' . $user->id)?>" title='restore'><i class="fa fa-undo"></i></a></td>
		<?php else : ?>
			<td><a href="<?=$this->url->create('users/soft-delete/' . $user->id)?>" title='soft-delete'><i class="fa fa-trash"></i></a></td>
		<?php endif ?>
		
		<!-- delete -->
		<td><a href="<?=$this->url->create('users/delete/' . $user->id) ?>" title='delete'><i class="fa fa-times"></i></a></td>
		
		<!-- update -->
		<td><a href="<?=$this->url->create('users/edit/' . $user->id) ?>" title='edit'><i class="fa fa-pencil"></i></a></td>
	</tr>	
	<?php endforeach; ?>
	
</table>

<p>
	<a href="<?=$this->url->create('users/add') ?>">Add user</a> |
	<a href="<?=$this->url->create('users/setup')?>">Återställ databasen</a> 
</p>
