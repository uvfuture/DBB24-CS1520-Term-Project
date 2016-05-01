<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scrolling Nav - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">DBB24</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Gaming</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">CS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>SELF PROMOTION ...</h1><br /><br />
                    <div id="intro-para"><p>Self-promotion never changes. My goal for the first stage of this site's development was to begin to gather resources relevent to obtaining gainful employment in one place. Keeping to the spirit of the class however, I wanted to have fun - so for the moment I'm specifically targeting my content toward a particular company I'd be interested in working for: Blizzard Entertainment. They're always hiring, and require a cover letter in addition to resume/cv/credentials. I thought this project could begin to explore what that cover letter might contain, abstracted as a website.</p></div><br /><br />	
					<a class="btn btn-default page-scroll" href="#about">Explore my love for gaming:</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
					<div class="gaming-para" id="gaming-para-1">
						<p> I found a discarded copy of The Lost Vikings at a garage sale in '94. I played StarCraft on
							Battle.net with some friends and the physics teacher on stolen lunch hours. It wasn't until a near-obsession
							with Diablo II, however, that Blizzard entertainment cemented what has essentially become a lifelong fandom.
							We've come a long way from duped SoJ's, and through Warcraft III, World of Warcraft, a TCG gone digital in Hearthstone, and
							now Heroes of the Storm, I've been there to see it all.
						</p>
					</div>
                </div>
				
				<div class="col-md-6">
					<table class="table" id="vgame-table">
						<?php init_table(); fill_table_video(); ?>
					</table>
				</div>
            </div>
			
			<div class="row">
				<div class="col-md-6">
					<table class="table" id="cgame-table">
						<?php init_table(); fill_table_card(); ?>
					</table>
				</div>
				
				<div class="col-md-6">
					<div class="gaming-para" id="gaming-para-2">
						<p>
							In addition to digital games, I have a long and storied history with card games as well to include Hearthstone's predecessor WoW TCG.
							Other accomplishments include playing on the Vs. System Pro Circuit, a top 50 rank in Raw Deal, and countless regional tournament wins
							at Magic: The Gathering, and Star Wars CCG.
						</p>
					</div>
				</div>
			</div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>CS Section</h1>
					<p>This is a block of test text!<p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact Section</h1><br />
<?php 
						$db = mysqli_connect('localhost', 'root', '', 'my_messages');
						if ($db->connect_error){
							die ("Could not connect to db " . $db->connect_error);
						}
						if (isset($_POST['form-name'])){
							$name = mysqli_real_escape_string($db, $_POST['form-name']);
							$mail = mysqli_real_escape_string($db, $_POST['form-email']);
							$msg = mysqli_real_escape_string($db, $_POST['comment']);
							$sql = "INSERT INTO main (name, email, message)
							VALUES ('$name', '$mail', '$msg')";
							if(mysqli_query($db, $sql)){
								echo "Message sent successfully.";
							}
						}
?>
					<div id="contact-para"><p>Have something interesting to say? Send me a message!<p></div>
					<div id="contact-form-wrapper">
						<form id="contact-form" action="" method="post">
							<input type="text" id="form-name" name="form-name" placeholder="Name: ">
							<input type="text" id="form-email" name="form-email" placeholder="Email: "><br /><br />
							<textarea name="comment" form="contact-form" rows="6" cols="50"></textarea><br />
							<input type="submit" placeholder="Submit">
						</form>
					</div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

<?php
	function init_table(){
		$a0 = array("Title", "Beta", "Launch", "1+ Year", "2+ Years");
		echo "<thead><tr>";
		foreach ($a0 as $key=>$value){
			echo "<th>$value</th>";
		}
		echo "</tr></thead>";
	}
	
	function fill_table_video(){
		$fd0 = fopen("test_vgame.txt", "r");
		if(flock($fd0, LOCK_SH)){
			echo "<tbody>";
			while ($currline = fgetss($fd0, 512)){
				echo "<tr>";
				$a1 = explode("|", $currline);
				foreach($a1 as $key=>$value){
					echo "<td>$value</td>";	
				}
				echo "</tr>";
			}
			echo "</tbody>";
		}
		flock($fd0, LOCK_UN);
		fclose($fd0);
	}
	
	function fill_table_card(){
		$fd0 = fopen("test_cgame.txt", "r");
		if(flock($fd0, LOCK_SH)){
			echo "<tbody>";
			while ($currline = fgetss($fd0, 512)){
				echo "<tr>";
				$a1 = explode("|", $currline);
				foreach($a1 as $key=>$value){
					echo "<td>$value</td>";	
				}
				echo "</tr>";
			}
			echo "</tbody>";
		}
		flock($fd0, LOCK_UN);
		fclose($fd0);
	}
?>
</body>

</html>
