
<!-- Add New Candidate -->
    <div class="modal fade" id="addCandidate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                 <center>
                 	<h4 class="modal-title h3 mb-3 font-weight-normal" id="myModalLabel">Add New Candidate</h4>
                 </center>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    
                </div>

                <div class="modal-body">
				<div class="container">
				<form class="form-signin" method="POST" enctype="multipart/form-data" action="add.php">
					<fieldset>
						<div class="form-group row">
							<label class="lead">Position</label>
							<select class="form-control" name="position" required autofocus>
								<option readonly> Select a Position</option>
								<option>Class Represntative</option>
								<option>Secretary MOD-5</option>
								<option>Secretary Encore</option>
								<option>Secretary Obscura</option>
								<option>Secretary Masquarade</option>
								<option>Secretary Pensieve</option>
							</select>
						</div>

						<div class="form-group row">
						<label class="lead">Firstname</label>
							<input class="form-control" type ="text" name = "firstname" placeholder="Please Enter Candidates' Firstname" required autofocus>
					</div>
					<div class="form-group row">
						<label class="lead">Lastname</label>
							<input class="form-control"  type = "text" name = "lastname" placeholder="Please Enter Candidates' Lastname" required autofocus>
					</div>
											
					<div class="form-group row">
						<label class="lead">About</label>
						<input type="text" name="country" class="form-control" placeholder="Please Enter Candidates'About" required autofocus>
					</div>
															
					<div class="form-group row">
						<label class="lead">Active Club</label>
							<input type="text" name="club" class="form-control" placeholder="Please Enter Candidates' Active Club" required autofocus>
						</div>
											
											
					<div class="form-group row">
						<div class="input-group mb-3">
							<div class="custom-file">
								<input type="file" name="image" class="custom-file-input" required autofocus>
        				<label class="custom-file-label lead"  for="inputGroupFile02"> Choose file</label>
      						</div>
						</div> 
                    </div>

                <div class="modal-footer form-group row">
				<button type="submit" name="add" class="btn btn-success"><i class="fa fa-save"></i> Add Candidate</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
                </fieldset>
				</form>

            </div>
				
            </div>
        </div>
    </div>

