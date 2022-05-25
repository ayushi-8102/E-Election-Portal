<?php include("./session.php"); ?>
<?php include("./header.php"); ?>
<body>
<?php include("./nav.php"); ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="container">
        <div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2" style="text-align:center;"><i class="fa fa-fw fa-list-alt"></i> View Election Result</h1>
        </div>
        <div class="card">
             <h4 class="card-header bg-secondary" align="center">View Election Result</h4>
            <div class="card-body">
                <form action="sort.php" method="post">
                    <div class="form-group">
                        <select name="position" id="position" class = "form-control custom-select" style = "width:300px;">
							<option readonly> --- Select by Position --- </option>
                            <option readonly> Select a Position</option>
								<option>Class Represntative</option>
								<option>Secretary MOD-5</option>
								<option>Secretary Encore</option>
								<option>Secretary Obscura</option>
								<option>Secretary Masquarade</option>
								<option>Secretary Pensieve</option>
                        </select>
                         <button id="sort" class="btn btn-warning">SORT</button>
                         <button type="button" onclick="window.print();" style="margin-right:14px;" id ="print" class="pull-right btn btn-success"><i class = "fa fa-print"></i> Print Out Result</button>
                    </div>
                </form>
                <hr>
                <div class="table-responsive">
               
                <table class="table table-hover table-striped table-bordered">
                    <h4 class="card-header bg-secondary" align="center">Candidates For Class Represntative</h4>
                    <thead>
                        <tr class="table-info">
                            <th scope="col">Name</th>
                            <th scope="col">Details</th>
							<th scope="col">Image</th>
                            <th scope="col">Total Votes</th>
                        </tr>
                    </thead>
                    <?php
                        require("./conn.php");
                        $query = $conn->query("SELECT * FROM candidate WHERE position = 'Class Representative(CR)'");
                        while($fetch = $query->fetch_array()){
                            $candidate_id = $fetch["candidate_id"];
                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$candidate_id'");
                            $fetch1 = $query1->fetch_assoc();
                    ?>
                    <tbody>
                        <tr>
                            <td class="card-text"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
							<td>
								<p><b>About: </b><?php echo $fetch ['country'];?></p>
								<p><b>Active Club: </b><?php echo $fetch ['club'];?></p></td>
                            <td><img src="<?php echo $fetch ['img'];?>" width="100" height="100" class="img-rounded"></td>
                            <td><h6><?php echo $fetch1 ["total"];?></h6></td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
               
                <table class="table table-hover table-striped table-bordered">
                    <h4 class="card-header bg-secondary" align="center">Candidates For Secretary-MOD-5</h4>
                    <thead>
                        <tr class="table-info">
                            <th scope="col">Name</th>
                            <th scope="col">Details</th>
							<th scope="col">Image</th>
                            <th scope="col">Total Votes</th>
                        </tr>
                    </thead>
                    <?php
                        require("./conn.php");
                        $query = $conn->query("SELECT * FROM candidate WHERE position = 'MOD-5 Sec'");
                        while($fetch = $query->fetch_array()){
                            $candidate_id = $fetch["candidate_id"];
                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$candidate_id'");
                            $fetch1 = $query1->fetch_assoc();
                    ?>
                    <tbody>
                        <tr>
                            <td class="card-text"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
							<td>
								<p><b>About: </b><?php echo $fetch ['country'];?></p>
								<p><b>Active Club: </b><?php echo $fetch ['club'];?></p></td>
                            <td><img src="<?php echo $fetch ['img'];?>" width="100" height="100" class="img-rounded"></td>
                            <td><h6><?php echo $fetch1 ["total"];?></h6></td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
              
                <table class="table table-hover table-striped table-bordered">
                    <h4 class="card-header bg-secondary" align="center">Candidates For Secretary-Encore</h4>
                    <thead>
                        <tr class="table-info">
                            <th scope="col">Name</th>
                            <th scope="col">Details</th>
							<th scope="col">Image</th>
                            <th scope="col">Total Votes</th>
                        </tr>
                    </thead>
                    <?php
                        require("./conn.php");
                        $query = $conn->query("SELECT * FROM candidate WHERE position = 'Encore Sec'");
                        while($fetch = $query->fetch_array()){
                            $candidate_id = $fetch["candidate_id"];
                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$candidate_id'");
                            $fetch1 = $query1->fetch_assoc();
                    ?>
                    <tbody>
                        <tr>
                            <td class="card-text"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
							<td>
								<p><b>About: </b><?php echo $fetch ['country'];?></p>
								<p><b>Active Club: </b><?php echo $fetch ['club'];?></p></td>
                            <td><img src="<?php echo $fetch ['img'];?>" width="100" height="100" class="img-rounded"></td>
                            <td><h6><?php echo $fetch1 ["total"];?></h6></td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
              
                <table class="table table-hover table-striped table-bordered">
                    <h4 class="card-header bg-secondary" align="center">Candidates For Secretary-Obscura</h4>
                    <thead>
                        <tr class="table-info">
                            <th scope="col">Name</th>
                            <th scope="col">Details</th>
							<th scope="col">Image</th>
                            <th scope="col">Total Votes</th>
                        </tr>
                    </thead>
                    <?php
                        require("./conn.php");
                        $query = $conn->query("SELECT * FROM candidate WHERE position = 'Obscura Sec'");
                        while($fetch = $query->fetch_array()){
                            $candidate_id = $fetch["candidate_id"];
                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$candidate_id'");
                            $fetch1 = $query1->fetch_assoc();
                    ?>
                    <tbody>
                        <tr>
                            <td class="card-text"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
							<td>
								<p><b>About: </b><?php echo $fetch ['country'];?></p>
								<p><b>Active Club: </b><?php echo $fetch ['club'];?></p></td>
                            <td><img src="<?php echo $fetch ['img'];?>" width="100" height="100" class="img-rounded"></td>
                            <td><h6><?php echo $fetch1 ["total"];?></h6></td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
                <!-- Center Midfielder (CMF) -->
                <table class="table table-hover table-striped table-bordered">
                    <h4 class="card-header bg-secondary" align="center">Candidates For Secretary-Masquarade</h4>
                    <thead>
                        <tr class="table-info">
                            <th scope="col">Name</th>
                            <th scope="col">Details</th>
							<th scope="col">Image</th>
                            <th scope="col">Total Votes</th>
                        </tr>
                    </thead>
                    <?php
                        require("./conn.php");
                        $query = $conn->query("SELECT * FROM candidate WHERE position = 'Masquarade Sec'");
                        while($fetch = $query->fetch_array()){
                            $candidate_id = $fetch["candidate_id"];
                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$candidate_id'");
                            $fetch1 = $query1->fetch_assoc();
                    ?>
                    <tbody>
                        <tr>
                            <td class="card-text"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
							<td>
								<p><b>About: </b><?php echo $fetch ['country'];?></p>
								<p><b>Active Club: </b><?php echo $fetch ['club'];?></p></td>
                            <td><img src="<?php echo $fetch ['img'];?>" width="100" height="100" class="img-rounded"></td>
                            <td><h6><?php echo $fetch1 ["total"];?></h6></td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
                <!-- Defensive Midfielder (DMF) -->
                <table class="table table-hover table-striped table-bordered">
                    <h4 class="card-header bg-secondary" align="center">Candidates For Secretary-Pensieve</h4>
                    <thead>
                        <tr class="table-info">
                            <th scope="col">Name</th>
                            <th scope="col">Details</th>
							<th scope="col">Image</th>
                            <th scope="col">Total Votes</th>
                        </tr>
                    </thead>
                    <?php
                        require("./conn.php");
                        $query = $conn->query("SELECT * FROM candidate WHERE position = 'Pensieve Sec'");
                        while($fetch = $query->fetch_array()){
                            $candidate_id = $fetch["candidate_id"];
                            $query1 = $conn->query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$candidate_id'");
                            $fetch1 = $query1->fetch_assoc();
                    ?>
                    <tbody>
                        <tr>
                            <td class="card-text"><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
							<td>
								<p><b>About: </b><?php echo $fetch ['country'];?></p>
								<p><b>Active Club: </b><?php echo $fetch ['club'];?></p></td>
                            <td><img src="<?php echo $fetch ['img'];?>" width="100" height="100" class="img-rounded"></td>
                            <td><h6><?php echo $fetch1 ["total"];?></h6></td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
               

            </div>
            </div>
        </div>
    </div>
</main>   
</body>
</html>