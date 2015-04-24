<h2>Most active users</h2>
<?php if($users): ?>
<table>
	<tr>
		<th>Image</th>
		<th>Username</th>
		<th>Name</th>
		<th>Email</th>
	</tr>
	
	<?php foreach ($users as $user) : ?>
	<tr>
		<td>
		<div class="gravatar">
			<a href="<?=$this->url->create('users/id/' . $user->id) ?>">
				<img src='http://www.gravatar.com/avatar/<?=md5(strtolower(trim($user->email)))?>.jpg?s=100' alt='Gravatar'>
			</a>
		</div>
		</td>
		<td><a href="<?=$this->url->create('users/id/' . $user->id) ?>"><?=$user->acronym?></a></td>
		<td><?=$user->name?></td>
		<td><?=$user->email?></td>
	</tr>	
	<?php endforeach; ?>
	
</table>
<?php endif; ?>