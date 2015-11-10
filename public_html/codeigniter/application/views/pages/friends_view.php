<h1>My friends!</h1>
<h3>My retrieved friend data</h3>
<br>

<?php foreach ($friends as $friend) : ?>
	<ul>
		<li>Name: <?php echo $friend->name; ?></li>
		<li>ID: <?php echo $friend->id; ?></li>
	</ul>
	<br>
<?php endforeach; ?>
