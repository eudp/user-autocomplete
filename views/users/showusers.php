<ul>
	<?php foreach($users as $user) { ?>
		<li onClick="showInfo('<?php echo $user["id"]; ?>');"><?php echo $user["first_name"]; ?></li>
	<?php } ?>
</ul>