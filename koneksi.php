<?php 
	
	$conn = mysqli_connect("localhost","root","","via");

	function query ($query){
		global $conn;
		$result = mysqli_query ($conn,$query);
		$rows = [];

		while ($mhs = mysqli_fetch_assoc($result)) {
			$rows[]=$mhs;
		}
		return $rows;
	}

	function hapus ($id){
		global $conn;
		mysqli_query($conn, "DELETE FROM blog WHERE id = $id");
		return mysqli_affected_rows($conn); 
	}


	function ubah($data)
	{
		global $conn;

		$id = $data["id"];
		$nama_buah = htmlspecialchars($data["nama_buah"]);
		$vitamin = htmlspecialchars($data["vitamin"]);

		$query = "UPDATE blog SET nama_buah = '$nama_buah', vitamin = '$vitamin' WHERE id = $id";

		mysqli_query ($conn, $query);
		return mysqli_affected_rows ($conn);
	}

	// function creat ($data){
	// 	global $conn;

	// 	$nama_buah = $data["nama_buah"];
	// 	$vitamin = $data["vitamin"];

	// 	$query = "INSERT INTO blog VALUES ('','$nama_buah', '$vitamin')";

	// 	mysql_query($conn, $query);

	// 	return mysqli_affected_rows($conn);



	
 ?>