<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $id = $_POST['item-id'];
	 $title = $_POST['item-title'];
	 $description = $_POST['item-description'];
	 $price = $_POST['item-price'];
	 $image = $_POST['item-image'];
	 $sql = "INSERT INTO item (id,title,description,price,image)
	 VALUES ('$id','$title','$description','$price','$image')";
	
	$try="SELECT * FROM item;";
	$result = mysqli_query($conn, $try);
	$check=mysqli_num_rows($result);
	if($check>0){
		while($row=mysqli_fetch_assoc($result)){
			echo $row['image']."<br>";
			?>
			<img src="<?php echo $row['image']; ?>">
  
			<?php
		}
	}
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } 
	 else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

if(isset($_POST['show']))
{	 
	$try="SELECT * FROM item;";
	$result = mysqli_query($conn, $try);
	$check=mysqli_num_rows($result);
	if($check>0){
		while($row=mysqli_fetch_assoc($result)){
			?>
			<img src="<?php echo $row['image']; ?>">
			<?php
			echo $row['title']."<br>";
			echo $row['description']."<br>";
			echo $row['price']."<br>";
			
		}
	}

	 mysqli_close($conn);
}
?>
