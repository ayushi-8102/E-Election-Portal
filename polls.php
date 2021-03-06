<?php include("./session.php"); ?>
<?php include("./header.php"); ?>
<body>
<?php include("./nav.php"); ?>    
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" >
        
    <form action="./vote.php" method="post" align="center">
            <div class="container">
        
                <br>
                <!-- Right Winger Forward (RWF) -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-lg-auto" align="center">
                            <h1 class="h4 card-header text-white bg-info">Candidates For Class Represntative Post</h1>
                            <div class="card-body">
                                <?php 
                                    include ("./config.php");
                                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Class Representative(CR)'") or die(mysqli_errno());
                                    while($fetch = $query->fetch_array()){
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>About: </b><?php echo $fetch["country"];?><br>
                                <b>Active Club: </b><?php echo $fetch["club"];?></p> 
                                <p class="card-text">
                                <button type="button" class="btn btn-info">
							        <input type="checkbox" name="rwf" class="rwf" value="<?php echo $fetch["candidate_id"];?>">
						        VOTE</button></p>
                                <br>
                                <hr>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
               
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-lg-auto" align="center">
                            <h1 class="h4 card-header text-white bg-info">Candidates For MOD-5 Secretary Post</h1>
                            <div class="card-body">
                                <?php 
                                    include ("./config.php");
                                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'MOD-5 Sec'") or die(mysqli_errno());
                                    while($fetch = $query->fetch_array()){
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>About: </b><?php echo $fetch["country"];?><br>
                                <b>Active Club: </b><?php echo $fetch["club"];?></p> 
                                <p class="card-text">
                                <button type="button" class="btn btn-info">
							        <input type="checkbox" name="amf" class="amf" value="<?php echo $fetch["candidate_id"];?>">
						        VOTE</button></p>
                                <br>
                                <hr>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
               
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-lg-auto" align="center">
                            <h1 class="h4 card-header text-white bg-info">Candidates For Encore Secretary Post</h1>
                            <div class="card-body">
                                <?php 
                                    include ("./config.php");
                                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Encore Sec'") or die(mysqli_errno());
                                    while($fetch = $query->fetch_array()){
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>About: </b><?php echo $fetch["country"];?><br>
                                <b>Active Club: </b><?php echo $fetch["club"];?></p> 
                                <p class="card-text">
                                <button type="button" class="btn btn-info">
							        <input type="checkbox" name="cmf" class="cmf" value="<?php echo $fetch["candidate_id"];?>">
						        VOTE</button></p>
                                <br>
                                <hr>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
               
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-lg-auto" align="center">
                            <h1 class="h4 card-header text-white bg-info">Candidates For Masquarade Secretary Post</h1>
                            <div class="card-body">
                                <?php 
                                    include ("./config.php");
                                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Masquarade Sec'") or die(mysqli_errno());
                                    while($fetch = $query->fetch_array()){
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>About: </b><?php echo $fetch["country"];?><br>
                                <b>Active Club: </b><?php echo $fetch["club"];?></p> 
                                <p class="card-text">
                                <button type="button" class="btn btn-info">
							        <input type="checkbox" name="dmf" class="dmf" value="<?php echo $fetch["candidate_id"];?>">
						        VOTE</button></p>
                                <br>
                                <hr>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Center Back 1 (CB 1) -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-lg-auto" align="center">
                            <h1 class="h4 card-header text-white bg-info">Candidates For Pensieve Secretary Post</h1>
                            <div class="card-body">
                                <?php 
                                    include ("./config.php");
                                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Pensieve Sec'") or die(mysqli_errno());
                                    while($fetch = $query->fetch_array()){
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>About: </b><?php echo $fetch["country"];?><br>
                                <b>Active Club: </b><?php echo $fetch["club"];?></p> 
                                <p class="card-text">
                                <button type="button" class="btn btn-info">
							        <input type="checkbox" name="cb_1" class="cb_1" value="<?php echo $fetch["candidate_id"];?>">
						        VOTE</button></p>
                                <br>
                                <hr>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Center Back 2 (CB 2) -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-lg-auto" align="center">
                            <h1 class="h4 card-header text-white bg-info">Candidates For Obscura Secretary Post</h1>
                            <div class="card-body">
                                <?php 
                                    include ("./config.php");
                                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Obscura Sec'") or die(mysqli_errno());
                                    while($fetch = $query->fetch_array()){
                                ?>
                                <img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px">
                                <p class="card-text"><b>NAME</b><br><?php echo $fetch["firstname"].'  '.$fetch ["lastname"];?></p>
                                <p class="card-text"><b>INFO</b><br>
                                <b>About: </b><?php echo $fetch["country"];?><br>
                                <b>Active Club: </b><?php echo $fetch["club"];?></p> 
                                <p class="card-text">
                                <button type="button" class="btn btn-info">
							        <input type="checkbox" name="cb_2" class="cb_2" value="<?php echo $fetch["candidate_id"];?>">
						        VOTE</button></p>
                                <br>
                                <hr>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row" align="center">
                    <div class="col-lg-6">
                        <button class = "btn btn-success" type = "submit" name = "submitVote"> SUBMIT VOTE </button>    
                    </div>
                </div>
            </div>
        </form>
        
    </main>
    <script type="text/javascript" src="./assets/js/main.js"></script>
</body>
</html>