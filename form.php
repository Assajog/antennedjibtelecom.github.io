<?php


$con=mysqli_connect("localhost","root","","djibtelecom");

if(mysqli_connect_error()){

	echo "Cannot connecté";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="for.css">
</head>
<body>


	<div id="menu">
				<div id="tete"><marquee>BIENVENUE DANS NOTRE PLATEFORME</marquee></div>	
				<div id="image1">
					<div id="img"><img src="image/univ.jpg"></div>
				</div>
					<div id="image2">
				<div id="img"><img src="image/telecom.png"></div>
					</div>
							<div id="deroulant">
								<ul>
									<li>
										<a href='accueil.html'>Accueil</a>
									</li>
								</ul>
						<ul>
							<li>
							<a href='web.html'>Webmapping</a>
							</li>
						</ul>
					<ul>
						<li>
							<a href='real.html'>Nos realisations</a>
								<ul>
								<li><a href="balbala.html">Commune de Balbala</a></li>
								<li><a href="bouloas.html">Commune de Boulaos</a></li>
								<li><a href="rasdika.html">Commune de RasDika</a></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li>
							<a href='form.php'>Se connecter</a>	
						</li>
					</ul>
					<ul>
						<li>
							<a href='cont.html'>Contact</a>			
						</li>
					</ul>				
					</div>
				</div>

				<div id="formulaire">

						 <section>

						 	

                            <h1><img src="image/admin.jpg">Admin login</h1>
       
       <form  method="POST"> 
           <label>Login</label>
           <input type="text" name="AdminName" placeholder="Identification" required>
           <label >Password</label>
           <input type="password" name="AdminPassword" placeholder="Enter password" required>
           <input type="submit" value="Connexion" name="Signin">
       </form>
   </section> 
   <?php
	if(isset($_POST['Signin'])){


		

		$query="SELECT * From admin_login where Admin_Name='$_POST[AdminName]' and Admin_Password='$_POST[AdminPassword]'";

		$result=mysqli_query($con,$query);
	
		if(mysqli_num_rows($result)==1){

			session_start();
			$_SESSION['AdminLoginId']=$_POST['AdminName'];
			header("location:loo.php");

		}

	
		else{
			echo"<script>alert('incorrect')</script>";

		}
	}

	?>
					
					
				</div>
									<div id="pied">
										<ul>
							        		<li>Adresse:Djibouti-ville</li>					        		
							        		<li>Num tel: 0025377014681/0025377120888</li>
							        		<li>&copy Copyright 2022</li>
							        	</ul>							        				
							</div>


							<style>
								
								body{
	background-image: url(image/fond0.jpg);
	background-size: cover;
	background-attachment: fixed;
}
#menu{
	width: 100%;
	height: 160px;
	border: 1px solid red;
}
#tete{
	width: 100%;
	height: 30px;
	border: 0px solid black;
	font-weight: bold;
	font-family: area;
	font-size: 30px;
	color: whitesmoke;	
}
#image1{
	width:11.8%;
	height:125px;
	border: 0px solid black;
	position: absolute;
	display: block;
	float:left;
	}
#image1 img{
	width: 100%;
	height:125px;
}
#image2{
	width:15%;
	height:125px;
	border: 0px solid green;
	display: block;
	float: right;
}
#image2 img {
	width: 100%;
	height:125px;
}
#deroulant{
	padding: 0px;
	margin:0px 0px 0px 280px;

	}
#deroulant ul{
	
	padding:0px;
	line-height: 15px;
	}
#deroulant li{
	list-style: none;
	float: left;
	position: relative;
	background: gold;
}
#deroulant ul li a{
	color: black;
	text-decoration: none;
	width:148px;
	height: 26px;
	display:block;
	text-align: center;
	border: 1px solid deepskyblue; 
	padding-top: 2px;
}
#deroulant ul ul{
	position: absolute;
	top:30px;
	visibility: hidden;	
}
#deroulant ul li:hover ul
{
 visibility: visible;
    } 	
#deroulant li:hover {
	background: deepskyblue;
} 
#deroulant ul li ul a:hover {
	color: yellow;   
}
#formulaire{
	width:98.8%;
	height:500px;
	border: 1px solid red;
	position: absolute;
	display: block;
	float:left;
	}
section {
    background-color: white;
    padding: 10px;
    display: flex;
    flex-direction: column;
    width: 400px;
    border-radius: 6px;
    margin-left: 500px;
    margin-top: 140px;
    opacity: 0px;
    background:transparent;
     border: 1px solid red;

}

section img{

	width: 10%;

}
section h1 {
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
}
form  input {
	background: transparent;
	border: none;
    margin: 5px 0;
    padding: 8px 5px;
    outline: 0;
    border-bottom: 1px solid blue;
    border-radius: 0px;
}
form  input[type='submit'] {
    background-color: #17f;
    border: 0;
    color: #fff;
    margin-top: 15px;
    padding: 6px 0;

}

#pied{
	width: 100%;
	height: 100px;
	border: 1px solid black;
	display: block;
	margin-top: 500px;
}
#pied ul{
	list-style: none;
	text-align: center;
}
#pied ul li{
	font-style: italic;
	font-size: 20px;
}




							</style>

</body>
</html>