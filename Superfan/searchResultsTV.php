<!DOCTYPE HTML>
<!--
	Ethereal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>SUPERFAN</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="main3.css" />
		<noscript><link rel="stylesheet" href="noscript.css" /></noscript>
	</head>
	<body>



		<!-- Page Wrapper -->
			<div id="page-wrapper">

						<!-- Panel (Spotlight) -->
							<section class="panel spotlight medium right" id="first">
								<div class="content span-7">
									<h2 class="major">SEARCH RESULTS</h2>
								<div class="span-2-25">
										<ul class="actions">
											
                                            <?php
                                                $servername = "localhost";
                                                $username = "root";
                                                $password = "overmind6";
                                                $db = "superfan";

                                                $conn = new mysqli($servername, $username, $password, $db);
                                                
                                                if($conn->connect_error){
                                                    echo "error connecting fam";
                                                }
                                                else{
                                                    //echo "<li>".$_POST['searchfieldmovie']."</li>";
                                                    $searchfieldtv = $_POST['searchfieldtv'];
                                                    $sql = "SELECT name, created, network FROM series WHERE name = '$searchfieldtv'";
                                                    $response = $conn->query($sql);
                                                    if($response->num_rows > 0){
                                                        while($row = $response->fetch_assoc()){
                                                            echo "<li>".$row["name"]." Created by: ".$row["created"]." Network: ".$row["network"]."</li>";
                                                        }   

                                                    }
                                                    else{
                                                        echo "<li>No results found for Televsion Series: ".$_POST['searchfieldtv']."</li>";
                                                    }
                                                }




                                            ?>
										</ul>
										
                                        <ul class="actions">
											<li><a href="demoPage.php" class="button special color2">CLICK TO GO BACK</a></li>
										</ul>

								</div>
								</div>

								<div class="image filtered tinted" data-position="top left">
									<img src="images/pic04.jpg" alt="" />
								</div>
							</section>
				<!-- Wrapper -->
					
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>