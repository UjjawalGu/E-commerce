<?php
include 'header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">

			<button class=" btn btn-primary px-3" onclick="openForm()">Add</button>
			<hr>

			<form id="myForm" style="display:none;" action="product_insert.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label class="text-danger fw-bold">Image Width 1600px and Hiegt 900px</label>
					<input type="file" class="form-control" name="image" accept="image/*" />
				</div>

				<div class="form-group">
					<label for="Name">Name:</label>
					<input type="text" class="form-control" name="name">
				</div>


				<div class="form-group">
					<label>Price:</label>
					<input type="text" class="form-control" name="price">
				</div>

				<button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>
				<button type="button" class="btn btn-secondary mt-3" onclick="closeForm()">Close</button>
			</form>
		</div>
	</div>
</div>



<?php
include 'config.php';

// Retrieve data from the main_page table
$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);


// Display the data in an HTML table

echo '<table>';
if (mysqli_num_rows($result) > 0) {
	// Display the data in an HTML table
	echo '<table class="p-2">';
	echo '<tr><th>Name</th> 
		<th>Price</th>
		<th>image</th>
		<th>Action</th>
		
		</tr>';
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<tr class="p-2">';
		echo '<td>' . $row['name'] . '</td>';
		echo '<td>' . $row['price'] . '</td>';
		echo '<td><img src="' . $row['image'] . '"  width="100"></td>';
		echo '<td>
			<a href="product_delete.php?id=' . $row['product_id'] . '" class="text-decoration-none btn  btn-outline-danger">Delete</a>
			</td>
			</tr>';
	}
	echo '</table>';
} else {
	// Display a message if no data was found
	echo 'No data found';
}

// Close

// Close the database connection
mysqli_close($conn);
?>





<?php
include 'footer.php';
?>