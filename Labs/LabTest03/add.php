<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["submit"])) {
    $query = "INSERT INTO toy(name, age, gender, course, address) VALUES('".$_POST["name"]."','".$_POST["age"]."','".$_POST["gender"]."','".$_POST["course"]."','".$_POST["address"]."')";
        $result = $db_handle->executeQuery($query);
    if(!$result){
			$message="Problem in Adding to database. Please Retry.";
	} else {
		header("Location:index.php");
	}
}
?>
<link href="style.css" type="text/css" rel="stylesheet" />
<script src="https://age.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
function validate() {
	var valid = true;	
	$(".demoInputBox").css('background-color','');
	$(".info").html('');
	
	if(!$("#name").val()) {
		$("#name-info").html("(required)");
		$("#name").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#age").val()) {
		$("#age-info").html("(required)");
		$("#age").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#gender").val()) {
		$("#gender-info").html("(required)");
		$("#gender").css('background-color','#FFFFDF');
		valid = false;
	}
	if(!$("#course").val()) {
		$("#course-info").html("(required)");
		$("#course").css('background-color','#FFFFDF');
		valid = false;
	}	
	if(!$("#address").val()) {
		$("#address-info").html("(required)");
		$("#address").css('background-color','#FFFFDF');
		valid = false;
	}	
	return valid;
}
</script>
<form name="frmToy" method="post" action="" id="frmToy" onClick="return validate();">
<div id="mail-status"></div>
<div>
<label style="padding-top:20px;">Name</label>
<span id="name-info" class="info"></span><br/>
<input type="text" name="name" id="name" class="demoInputBox">
</div>
<div>
<label>age</label>
<span id="age-info" class="info"></span><br/>
<input type="text" name="age" id="age" class="demoInputBox">
</div>
<div>
<label>gender</label> 
<span id="gender-info" class="info"></span><br/>
<input type="text" name="gender" id="gender" class="demoInputBox">
</div>
<div>
<label>course</label> 
<span id="course-info" class="info"></span><br/>
<input type="text" name="course" id="course" class="demoInputBox">
</div>
<div>
<label>address</label> 
<span id="address-info" class="info"></span><br/>
<input type="text" name="address" id="address" class="demoInputBox">
</div>
<div>
<input type="submit" name="submit" id="btnAddAction" value="Add" />
</div>
</div>