<!DOCTYPE html>
<html>
<head>
<style>
body
{
	background: gray;
	color:pink;

}
table
{
	margin:20px auto;
	border:1px solid black;
	font-size:3em;
}
</style>
	<meta charset="utf-8">
	<title>Users Accounts</title>
</head>
<body>
	<?php foreach($users as $user) : ?>
		<table>
			<tr>
				<td><?= $user['firstname']?></td>
				<td><?= $user['lastname']?></td>
			</tr>
		<?php endforeach;?>
		</table>

</body>
</html>
