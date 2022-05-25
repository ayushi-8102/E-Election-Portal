<?php include("./session.php") ?>
<?php include("./header.php") ?>
<body>
<?php include("./nav.php"); ?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-auto">
		<?php
			if(isset($_POST['submitVote']))
				{
					if(!isset($_POST['cf']))
					{
						$_SESSION['cf'] = "";
					}
					else
					{
						$_SESSION['cf'] = $_POST['cf'];
					}
					if(!isset($_POST['lwf']))
					{
						$_SESSION['lwf'] = "";
					}
					else
					{
						$_SESSION['lwf'] = $_POST['lwf'];
					}
					if(!isset($_POST['rwf']))
					{
						$_SESSION['rwf'] = "";
					}
					else
					{
						$_SESSION['rwf'] = $_POST['rwf'];
					}
					if(!isset($_POST['amf']))
					{
						$_SESSION['amf'] = "";
					}
					else
					{
						$_SESSION['amf'] = $_POST['amf'];
					}
					if(!isset($_POST['cmf']))
					{
						$_SESSION['cmf'] = "";
					}
					else
					{
						$_SESSION['cmf'] = $_POST['cmf'];
					}
					if(!isset($_POST['dmf']))
					{
						$_SESSION['dmf'] = "";
					}
					else
					{
						$_SESSION['dmf'] = $_POST['dmf'];
					}
					
				}
		?>
                </div>
            </div>
        </div>
        <h4 class="card-header bg-info" align="center">YOUR POLLS</h4><br>
        <div class="container-fluid" align="center">
               
                <div class="col-lg-auto">
                    <div class="card mb-lg-auto" align="center"  style="max-width: 20rem;">
                        <h5 class="card-header text-white bg-info">Class Representative</h5>
                        <div class="card-body">
                            <?php
                                if ($_SESSION["cf"]) {
                                    $fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[cf]'")->fetch_array();
                                    ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>About: </b><?php echo $fetch["country"];?><br>
                                <b>Active Club: </b><?php echo $fetch["club"];?></p> 
                                    
                                <?php
                                
                                } else {
                                    echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                }
                            ?>
                            </div>
                    </div>
                </div>
                <br> 
               
                <div class="col-lg-auto">
                    <div class="card mb-lg-auto" align="center" style="max-width: 20rem;">
                        <h5 class="card-header text-white bg-info">Secretary - MOD-5</h5>
                        <div class="card-body">
                            <?php
                                if (!$_SESSION["lwf"]) {
                                    echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                } else {
                                    $fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[lwf]'")->fetch_array();
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>About: </b><?php echo $fetch["country"];?><br>
                                <b>Active Club: </b><?php echo $fetch["club"];?></p> 

                                <?php 
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <br> 
               
                <div class="col-lg-auto">
                    <div class="card mb-lg-auto" align="center" style="max-width: 20rem;">
                        <h5 class="card-header text-white bg-info">Secretary - Encore</h5>
                        <div class="card-body">
                            <?php
                                if (!$_SESSION["rwf"]) {
                                    echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";
                                } else {
                                    $fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[rwf]'")->fetch_array();
                                    ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>About: </b><?php echo $fetch["country"];?><br>
                                <b>Active Club: </b><?php echo $fetch["club"];?></p> 
                                <?php
                                 }
                            ?>
                           </div>
                    </div>
                </div>
                <br> 
               
                <div class="col-lg-auto">
                    <div class="card mb-lg-auto" align="center" style="max-width: 20rem;">
                        <h5 class="card-header text-white bg-info">Secretary - Obscura</h5>
                        <div class="card-body">
                            <?php
                                if (!$_SESSION["amf"]) {
                                    echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";;
                                } else {
                                    $fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[amf]'")->fetch_array();
                                   ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>About: </b><?php echo $fetch["country"];?><br>
                                <b>Active Club: </b><?php echo $fetch["club"];?></p> 
                                   
                            <?php   
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <br> 
              
                <div class="col-lg-auto">
                    <div class="card mb-lg-auto" align="center" style="max-width: 20rem;">
                        <h5 class="card-header text-white bg-info">Secretary - Masquarade</h5>
                        <div class="card-body">
                            <?php
                                if (!$_SESSION["cmf"]) {
                                    echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";;
                                } else {
                                    $fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[cmf]'")->fetch_array();
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>About: </b><?php echo $fetch["country"];?><br>
                                <b>Active Club: </b><?php echo $fetch["club"];?></p> 
                            <?php
                                }
                            ?>
                            </div>
                    </div>
                </div>
                <br> 
               
                <div class="col-lg-auto">
                    <div class="card mb-lg-auto" align="center" style="max-width: 20rem;">
                        <h5 class="card-header text-white bg-info">Secretary - Pensieve</h5>
                        <div class="card-body">
                            <?php
                                if (!$_SESSION["dmf"]) {
                                    echo "<h3 class='card-text alert alert-danger'>NO VOTE</h3>";;
                                } else {
                                    $fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[dmf]'")->fetch_array();
                            ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>About: </b><?php echo $fetch["country"];?><br>
                                <b>Active Club: </b><?php echo $fetch["club"];?></p> 
                            
                            <?php
                                }
                            ?>
                            </div>
                    </div>
                </div>
                <br>
               
        <?php include("./confirm_modal.php"); ?>  
    </main>
</body>
</htm>