<?php
function show_my_contact_form() {

?>
<script language="javascript1.5">

function f1(str)
	{
var instr;		
if(str=="VSB"){	instr= "<option value='MBA' >MBA</option>"}	
else if(str=="VISB"){instr= "<option value='PGDM' >PGDM</option>"}	
else if(str=="VCE"){instr= "<option value='CSE' >CSE</option><option value='IT' >IT</option><option value='ECE' >ECE</option><option value='ME' >ME</option><option value='CE' >CE</option><option value='EEE' >EEE</option>"}		
else if(str=="VICT"){instr= "<option value='BBA' >BBA</option><option value='BCA' >BCA</option>"}
else if(str=="VIFT"){instr= "<option value='BFAD' >BFAD</option><option value='BFA' >BFA</option><option value='DFAD' >DFAD</option>"}
document.getElementById('branch').innerHTML=instr;
	}
function toupper(str,id)
	{		
var upper=str.toUpperCase();
document.getElementById(id).value=upper;
	}	
	
</script>
<div class="container" style="background-color:#FFFFFF">
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" method="post" >
			<h2>Register<br><small></small></h2>
			<hr class="colorgraph">
			
			<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
                    <select name="college" required id="college" class="form-control input-lg" tabindex="5" onchange="f1(this.value)" >
                      <option value=""> Select College </option>
                      <option value="VCE"> Vidya College of Engineering </option>
                      <option value="VSB">Vidya School of Business</option>
                      <option value="VICT">Vidya Institute of Creative Teaching </option>
                      <option value="VISB">Vidya International School of Business</option>
                      <option value="VIFT">Vidya Institute of Fashion Technology</option>                   
                    </select>

					</div>
				</div>
                <div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
                    <select name="depart" required id="depart" class="form-control input-lg" tabindex="5" >
                      <option value=""> Concern Department </option>
                      <option value="Accounts"> Accounts </option>
                      <option value="Department">Department</option>
                      <option value="Central-Office">Central Office</option>
                      <option value="Registrar">Registrar</option>
                      <option value="Hostel">Hostel</option> 
                      <option value="Transport">Transport</option>
                      <option value="Library">Library</option>  
                      <option value="CSE">Computer Science and Engineering</option> 
                      <option value="IT">Information Technology</option> 
                      <option value="ME">Mechanical Engineering</option>
                      <option value="CE">Civil Engineering</option> 
                      <option value="ECE">Electronics Communication and Engineering</option> 
                      <option value="ECE">Electronics Communication and Engineering</option> 
                      <option value="MBA">MBA</option> <option value="BBA">BBA</option> 
                      <option value="BBA">BCA</option> <option value="BFAD">BFAD</option> 
                      <option value="BFA">BFA</option>                   
                    </select>

					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="rollnum" id="rollnum" onkeyup="toupper(this.value,this.id)" required class="form-control input-lg" placeholder="Roll No." tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="sname" id="sname" onkeyup="toupper(this.value,this.id)" required class="form-control input-lg" placeholder="Name" tabindex="6">
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="fname" id="fname" onkeyup="toupper(this.value,this.id)" required class="form-control input-lg" placeholder="Father's Name" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="contact"  id="contact" required maxlength="10" class="form-control input-lg" placeholder="Contact Number" tabindex="6">
					</div>
				</div>
				
				
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
					<select name="branch" required id="branch" class="form-control input-lg">   
                    <option value=""> Select Branch</option>                                                   
                    </select>					
                    </div>
				</div>
                <div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<select name="year" required id="year" class="form-control input-lg" >
                      <option value=""> Select Year</option><option value="1">1</option>
                      <option value="2">2</option><option value="3">3</option><option value="4">4</option>                                       
                    	</select>	
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12">
                <label>Your Query</label>
					<div class="form-group">
                    <textarea name="query" id="query" onkeyup="toupper(this.value,this.id)" required  class="form-control input-lg" >
                    </textarea>
					</div>
				</div>
						
			</div>
			<hr class="colorgraph">
			<div class="row" style="margin-bottom:30px;">
				<div class="col-xs-12 col-md-12">
                <input type="submit"  value="Submit Your Query" name="submit" class="btn btn-primary btn-block btn-lg" tabindex="7">
                </div>
			</div>
		</form>
	</div>
</div>

</div>
<?php
            }
add_shortcode('MCONTACTFORM','show_my_contact_form');            
?>
