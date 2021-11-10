<?php
	require_once("perpage.php");	
	require_once("dbcontroller.php");
	$db_handle = new DBController();
	
	$course = "";
	$id = "";
	
	$queryCondition = "";
	if(!empty($_POST["search"])) {
		foreach($_POST["search"] as $k=>$v){
			if(!empty($v)) {

				$queryCases = array("course","id");
				if(in_array($k,$queryCases)) {
					if(!empty($queryCondition)) {
						$queryCondition .= " AND ";
					} else {
						$queryCondition .= " WHERE ";
					}
				}
				switch($k) {
					case "course":
						$name = $v;
						$queryCondition .= "course LIKE '" . $v . "%'";
						break;
					case "id":
						$stu_id = $v;
						$queryCondition .= "id LIKE '" . $v . "%'";
						break;
				}
			}
		}
	}
	$orderby = " ORDER BY id desc"; 
	$sql = "SELECT * FROM toy " . $queryCondition;
	$href = 'index.php';					
		
	$perPage = 5; 
	$page = 1;
	if(isset($_POST['page'])){
		$page = $_POST['page'];
	}
	$start = ($page-1)*$perPage;
	if($start < 0) $start = 0;
		
	$query =  $sql . $orderby .  " limit " . $start . "," . $perPage; 
	$result = $db_handle->runQuery($query);
	
	if(!empty($result)) {
		$result["perpage"] = showperpage($sql, $perPage, $href);
	}
?>
<html>
	<head>
	<title>Christ University</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<img src="./Logo.jpg" alt="Christ" style="width:570px;height:240px;margin-left:300px;">
		<div style="text-align:right;margin:20px 0px 10px;">
		<a id="btnAddAction" href="add.php">Add New</a>
		</div>
    <div id="toys-grid">      
			<form name="frmSearch" method="post" action="index.php">
			<div class="search-box">
			<p>
			<input type="text" placeholder="ID" name="search[id]" class="demoInputBox" value="<?php echo $id; ?>"	/>
			<input type="text" placeholder="Course" name="search[course]" class="demoInputBox" value="<?php echo $course; ?>"	/>
			<input type="submit" name="go" class="btnSearch" value="Search"><input type="reset" class="btnSearch" value="Reset" onclick="window.location='index.php'"></p>
			</div>
			
			<table cellpadding="10" cellspacing="1">
        <thead>
					<tr>
		  <th><strong>STUDENT ID</strong></th>
          <th><strong>NAME</strong></th>
          <th><strong>AGE</strong></th>          
          <th><strong>GENDER</strong></th>
		  <th><strong>COURSE</strong></th>
    	  <th><strong>ADDRESS</strong></th>
		  <th><strong>ACTION</strong></th>
					
					</tr>
				</thead>
				<tbody>
					<?php
					if(!empty($result)) {
						foreach($result as $k=>$v) {
						  if(is_numeric($k)) {
					?>
          <tr>
			        <td><?php echo $result[$k]["id"]; ?></td>
					<td><?php echo $result[$k]["name"]; ?></td>
          			<td><?php echo $result[$k]["age"]; ?></td>
					<td><?php echo $result[$k]["gender"]; ?></td>
					<td><?php echo $result[$k]["course"]; ?></td>
					<td><?php echo $result[$k]["address"]; ?></td> 
					<td>
					<a class="btnEditAction" href="edit.php?id=<?php echo $result[$k]["id"]; ?>">Edit</a> <a class="btnDeleteAction" href="delete.php?action=delete&id=<?php echo $result[$k]["id"]; ?>">Delete</a>
					</td>
					</tr>
					<?php
						  }
					   }
                    }
					if(isset($result["perpage"])) {
					?>
					<tr>
					<td colspan="6" align=right> <?php echo $result["perpage"]; ?></td>
					</tr>
					<?php } ?>
				<tbody>
			</table>
			</form>	
		</div>
	</body>
</html>