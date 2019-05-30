
<div class="container" style="background-color:#FFFFFF">
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" method="post" >
			<h2>Complaint<br><small>Status</small></h2>
			<hr class="colorgraph">
			
			<div class="row">
			
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<input type="text" name="Complaint-Id" id="Complaint-Id" onkeyup="toupper(this.value,this.id)" required class="form-control input-lg" placeholder="Complaint Id" tabindex="5">
					</div>
				</div>		
			</div>
			<hr class="colorgraph">
			<div class="row" style="margin-bottom:30px;">
				<div class="col-xs-12 col-md-12">
                <input type="submit"  value="Submit Your Complaint Id" name="submit" class="btn btn-primary btn-block btn-lg" tabindex="7">
                </div>
			</div>
		</form>
	</div>
</div>
<?php
if(isset($_POST['submit']))		{
$Db_objects->Complaint_id=trim($_POST['Complaint-Id']);
$Db_objects->show_status($Db_objects->Complaint_id);																
								}

?>


</div>

