<?php
include_once 'includes/dbh.php';

?>

<!DOCTYPE html >
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<link rel="stylesheet" type="text/css" href="famiilySetup.css">

<title>PolloiTree</title>

<style type="text/css">
body{
	background: #FFF url(
						<?php 
						$pic = "/pics/flowers.jpg";
						echo $pic; 
						?>);

}
.table2{
	background-image: linear-gradient(180deg, #FFA4EC, #FFD32E   40%, #FFA4EC  );
	background-position: center;
	
}

header{
	background: #FFF url(
						<?php 
						$pic = "/pics/flowers3.jpg";
						echo $pic; 
						?>);
	position: relative;
}
</style>

</head>

<body onload='document.myForm.email.focus()'>

<header>
	<h1>PolloiTree</h1>
</header>
<hr>
<div class="mainBackground"  >
		<table class="mainTable" >
		<tr>
			<th>
				<table class="bio" style="background-color:white;" style= "width:50%;">
					<tr>
						<th class= " bioTable" colspan="2"><h3> Betty Jenkins</h3></th>
					</tr>
					<tr>
						<th colspan="2" class = "bioTable" col>
							<img src="..\pics\pic3.jpg"  
							width=" 300px " height=" 300px " />
						</th>
					</tr>
					<tr>
						<th class= " bioTable" >Born:</th>
						<th class= " bioTable" >May 16, 1890</th>
					</tr>
					<tr>
						<th class= " bioTable" >Hometown:</th>
						<th class= " bioTable" >Chicago, IL</th>
					</tr>
					<tr>
						<th class= " bioTable" >Occupation:</th>
						<th class= " bioTable" >Doctor</th>
					</tr>
					<tr>
						<th class= " bioTable" >Parents:</th>
						<th class= " bioTable" >
						Liz Harper - Mother<br> 
						Mark Dayman - Father
						</th>
					</tr>
					<tr>
						<th class= " bioTable" >Siblings:</th>
						<th class= " bioTable" >
							Liz Harper - Mother <br>
							Mark Dayman - Father<br>
							Liz Harper - Mother<br> 
							Mark Dayman - Father
						</th>
					</tr>
					<tr>
						<th class= " bioTable" >Children:</th>
						<th class= " bioTable" >
							Liz Harper - Mother <br>
							Mark Dayman - Father <br>
							Liz Harper - Mother <br>
							Mark Dayman - Father <br>
							Liz Harper - Mother <br>
							Mark Dayman - Father <br>
							Liz Harper - Mother <br>
							Mark Dayman - Father <br>
							Liz Harper - Mother  <br>
							Mark Dayman - Father <br>
							Liz Harper - Mother <br>
							Mark Dayman - Father
						</th>
					</tr>
				</table>
			</th>	
		
			<th class="tableHolder2">
				<div class = "table2" >
					<?php
					$sql = " SELECT * FROM feedback ORDER BY id DESC;";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);
					
					if($resultCheck > 0){
						while($row = mysqli_fetch_assoc($result)){
							$name1=$row['name'];
							$mess1=$row['mess'];
								echo "<table class=\"table3\"'>";
								echo "<tr> \n";
								echo "<td >$name1</td> \n";
								echo "<td class=\"message\">$mess1</td> \n";
								echo "</tr>";
								echo "</table>";
								echo "<br>";
						}
					}
					?>
				</div>
				
				
				<button class="open-button" id="sub" onclick="openForm()">
					Click here to BRING THIS PERSON TO LIFE.
				</button>
				
				<div class="form-popup" id="myForm">
					<form action="/creatingpost.php" id="MyForm" class="form-container">
					<h1>Please submit your fondest momments you had with Betty Jenkins</h1>
					
						<label for="name"><b>Name</b></label>
						<br>
						<input type="text" placeholder="Enter Name" name="name" required>
						<br>
						<label for="email"><b>Email</b></label>
						<br>
						<input type="email" placeholder="Enter Email" name="email" required>
						<br>
						<p style= "text-align:center;"> 
							This is where she 
							will live on so please take
							your time....
						</p>
						<br>
						<textarea rows="6" cols="80" name="post" placeholder="TELL your story...." class= "post" required form="MyForm"></textarea>

						<button type="submit" class="btn">SUBMIT</button>
						<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
						
					</form>
					
						
				</div>
			</th>
			
			<th class="tableHolder3">
				<div class= "table3">
					<table width="20%" class="table1">
						<tr>
							<th>Picture Gallery</th>
						</tr>
						<tr>
							<th >
								<div class="container">
									<div class="mySlides">
										<img src="..\pics\pic1.jpg" style="width:100%">
									</div>
									<div class="mySlides">
										<img src="..\pics\pic2.jpg" style="width:100%">
									</div>
								
									<a class="prev" onclick="plusSlides(-1)">❮</a>
									<a class="next" onclick="plusSlides(1)">❯</a>

									<div class="caption-container">
										<p id="caption"></p>
									</div>

									<div class="row">
										<div class="column">
											<img class="picGal" src="..\pics\pic1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
										</div>
										<div class="column">
											<img class="picGal" src="..\pics\pic2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
										</div>
									</div>
								</div>
							</th>
						</tr>	
					</table>
				</div>
			</th>
		
		</tr>
	
	</table>
</div>


<script type="text/javascript" src="site_code.js"></script>

</body>

</html>

<?php
mysqli_close($conn);
?>