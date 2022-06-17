<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="djibtelecom";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 
	 $nom = $_POST['nom'];
	 $email = $_POST['email'];
	 $tel = $_POST['tel'];
	 $commen = $_POST['commen'];
	 
	 $sql_query = "INSERT INTO commentaire (nom,email,tel,commen)
	 VALUES ('$nom','$email','$tel','$commen')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "<script>
		alert('Votre message a été recu.Merci!');
		</script>";
		echo "<script>window.location='cont.html';</script>";
	 } 
	 else
     {
		echo "<script>
		alert('Erreur!'');
		</script>";
echo "<script>window.location='cont.html';</script>";	 }
	 mysqli_close($conn);

}
?>