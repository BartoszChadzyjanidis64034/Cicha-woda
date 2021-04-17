<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
<?php
	$errors = "";
	// polaczenie do bazy danych
	$db = mysqli_connect('localhost', 'root', '','test_db');
	$tabela = $_SESSION['user_name'];
	if(isset($_POST['submit'])){
		$task = $_POST['task'];
		if(empty($task)){
			$errors = "Musisz dodać zadanie!";
		}else {
			mysqli_query($db,"INSERT INTO `".$tabela."` (task) VALUES ('$task')");
			header('location: todo.php');
		}
	}
	
	// usuwanie zadania
	
	if(isset($_GET['del_task'])){
		$id = $_GET['del_task'];
		mysqli_query($db,"DELETE FROM `".$tabela."` WHERE id=$id");
		header('location: todo.php');
	}
	
	$tasks = mysqli_query($db,"SELECT * FROM `".$tabela."`");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Todo List Projekt Zespołowy</title>
	<link rel="stylesheet" type="text/css" href="todo_style.css">
<head>
<body>
	<div class="wylogowanie">
	<a href="logout.php">Wyloguj</a>
	</div>

	<div class="heading">
		<h1><?php echo $_SESSION['name']; ?></h1>
		<h2>Twoje zadania</h2>
	</div>
	
	<form method="POST" action="todo.php">
	<?php if(isset($errors)){ ?>
		<p><?php echo $errors;?></p>
	<?php } ?>
	    <input type="text" name="task" class="task_input" placeholder="Wpisz swoje zadanie do zrobienia">
		<button type="submit" class="add_btn" name="submit">Dodaj zadanie</button>
		
	</form>
	
	<table>
		<thead>
			<tr>
				<th>Nr</th>
				<th>Zadanie</th>
				<th>Akcja</th>
			</tr>
		</thead>
		
		<tbody>
		<?php $i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
			<tr>
				<td><?php echo $i; ?></td>
				<td class="task"><?php echo $row['task']; ?></td>
				<td class="delete">
					<a href = "todo.php?del_task=<?php echo $row['id']; ?>">x</a>
				</td>
			</tr>
		<?php $i++; } ?>
		</tbody>
	</table>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>