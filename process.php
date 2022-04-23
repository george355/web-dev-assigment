<?php
include_once 'database.php';
if (isset($_POST['save'])) {
	$id = $_POST['item-id'];
	$title = $_POST['item-title'];
	$description = $_POST['item-description'];
	$price = $_POST['item-price'];
	$image = $_POST['item-image'];
	$sql = "INSERT INTO item (id,title,description,price,image)
	 VALUES ('$id','$title','$description','$price','$image')";

	if (mysqli_query($conn, $sql)) {
		header("Location:menu.php");
	} else {
		echo "Error: " . $sql . mysqli_error($conn);
	}
	mysqli_close($conn);
}

if (isset($_POST['delete'])) {
	$id = $_POST['item-id'];

	$sql = "DELETE FROM item WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
		header("Location:menu.php");
	} else {
		echo "Error deleting record: " . $conn->error;
		header("Location:menu.php");
	}
	mysqli_close($conn);
}


if (isset($_POST['edit1'])) {
	$id = $_POST['item-id'];
	$title = $_POST['item-title'];

	$sql = "UPDATE item SET title='$title' WHERE id=$id";

	if (mysqli_query($conn, $sql)) {
		header("Location:menu.php");
	} else {
		echo "Error: " . $sql . mysqli_error($conn);
	}
	mysqli_close($conn);
}

if (isset($_POST['edit2'])) {
	$id = $_POST['item-id'];
	$description = $_POST['item-description'];

	$sql = "UPDATE item SET description='$description' WHERE id=$id";
	if (mysqli_query($conn, $sql)) {
		header("Location:menu.php");
	} else {
		echo "Error: " . $sql . mysqli_error($conn);
	}
	mysqli_close($conn);
}

if (isset($_POST['edit3'])) {
	$id = $_POST['item-id'];
	$price = $_POST['item-price'];

	$sql = "UPDATE item SET price='$price' WHERE id=$id";

	if (mysqli_query($conn, $sql)) {
		header("Location:menu.php");
	} else {
		echo "Error: " . $sql . mysqli_error($conn);
	}
	mysqli_close($conn);
}

if (isset($_POST['edit4'])) {
	$id = $_POST['item-id'];
	$image = $_POST['item-image'];

	$sql = "UPDATE item SET image='$image' WHERE id=$id";
	if (mysqli_query($conn, $sql)) {
		header("Location:menu.php");
	} else {
		echo "Error: " . $sql . mysqli_error($conn);
	}
	mysqli_close($conn);
}
