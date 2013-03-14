<?php
	function makemenu ($active) {
		echo '
		<a href="./index.php" style="float:left;"><img  class="png" alt="" src="img/logo.png" /></a>
		<div id="menu">
			<ul>
			<li ';
		
		if ($active=="home") 
			echo "class='selected'";
		echo '><a href="index.php">Home</a></li>
			<li ';
		
		/*if ($active=="competition")
			echo "class='selected'";
		echo '><a href="#">Competition</a></li>
			<li ';
		*/	
		if ($active=="team")
			echo "class='selected'";
		echo '><a href="team.php">Team</a></li>
			<li ';
		
		if ($active=="house") 
			echo "class='selected'";
		echo '><a href="./house.php">House</a></li>';
			
		/*
		if ($active=="sponsors") 
			echo "class='selected'";
		echo <li'><a href="#">Sponsors</a></li>
			<li ';
		
		if ($active=="outreach") 
			echo "class='selected'";
		echo '><a href="#">Outreach</a></li> 
			<li ';
		
		if ($active=="contact") 
			echo "class='selected'";
		echo '><a href="#">Contact</a></li>
		*/
		echo '
			</ul>
		</div>';
		
		/*echo '
		<a href="./index.php" style="float:left;"><img src="img/logo.png" /></a>
		<div id="menu">
		<ul>
			<li class="selected"><a href="./index.php">Competitions</a></li>
			<li><a href="./index.php">Team</a></li>
			<li><a href="./index.php">House</a></li>
			<li><a href="./index.php">Sponsors</a></li>
			<li><a href="./index.php">Outreach</a></li>
			<li><a href="./index.php">Contact</a></li>
		</ul>
		</div>';*/
		echo '<div style="clear:both;"></div>';
	}
	
	
	/*function connect() {
		$mysql_host = "localhost"; // Host name 
		$mysql_database = "actionlog";// Database name 
		$mysql_user = "action_admin";// Mysql username 
		$mysql_password = "loggedyou!"; // Mysql password

		$con = mysql_connect($mysql_host,$mysql_user,$mysql_password);
		if (!$con) {
			die('Could not connect: ' . mysql_error());
		}
		mysql_select_db($mysql_database, $con);
	}

	function disconnect() {
		mysql_close();
	}
	
	function makedropdown() {
		$userid=$_SESSION['userid'];
		$args=func_get_args();
		$num_args=func_num_args();
		$selectorid=$args[0];
		
		$level_query="SELECT level FROM `users` WHERE id='$userid'";
		connect();
		$level_resource=mysql_query($level_query);		
		$userlevel=mysql_result($level_resource,0,0);
		
		$dropdownquery="SELECT id, name, email FROM `users` WHERE level>'$userlevel' OR id='$userid' ORDER BY name ASC";
		connect();
		$dropdown=mysql_query($dropdownquery);
		disconnect();
		$count=mysql_num_rows($dropdown);
		if ($num_args==1) {
			echo "<select id='".$selectorid."' name='".$selectorid."' class='stdtextbox' style='width: auto;' >";
		}
		else 
			echo "<select id='".$selectorid."' name='".$selectorid."' class='stdtextbox' style='width: auto;' disabled='disabled'>";
		if ($count) {
			for ($i=0; $i<$count; $i++) {
				$row=mysql_fetch_array($dropdown);
				echo "<option value='".$row['id']."'>".$row['name']." (".$row['email'].")</option>";
			}
		}
		else
			echo "some flaw!";
		echo "</select>";
	}*/
	
	
	/*
	function compare_date($date1, $date2) {
		$date1_explode=explode('-', $date1);
		$date2_explode=explode('-', $date2);
		
		if ($date1_explode[0]>$date2_explode[0]) {
			$diff=100;
		}
		else if ($date1_explode[0]<$date2_explode[0]) {
			$diff=-100;
		}
		else if ($date1_explode[1]>$date2_explode[1]) {
			$diff=50;
		}
		else if ($date1_explode[1]<$date2_explode[1]) {
			$diff=-50;
		}
		else $diff=$date1_explode[2]-$date2_explode[2];
		
		return $diff;
		// if value is 1 then 1 day difference, if value is within 31, then it gives the number of days difference.
	}
	
	
	function view_action_details($userid, $status) {
		$logged_in_user=$_SESSION['userid'];
		connect();
		$userid=mysql_real_escape_string($userid);
		if ($status=='incomplete')
			$fetch_action_query="SELECT * FROM `actionlog` WHERE assigned_to='$userid' AND (status='Assigned' OR status='Opened') ORDER BY deadline ASC";
		else if ($status=='all')
			$fetch_action_query="SELECT * FROM `actionlog` WHERE assigned_to='$userid' AND status!='Submit' ORDER BY deadline DESC";
		else if ($status=='drafts')
			$fetch_action_query="SELECT * FROM `actionlog` WHERE reported_by='$logged_in_user' AND status='Submit' ORDER BY deadline DESC";
		
		$action_results=mysql_query($fetch_action_query);
		disconnect();
		
		$date_full=getdate();
		$date=$date_full['year'].'-'.$date_full['mon'].'-'.$date_full['mday'];
		
		if ($userid==$logged_in_user && $status!='drafts') {
			$link='edit_self.php';
		}
		else if ($userid==$logged_in_user && $status=='drafts') {
			$link='edit_others.php';
		}
		else
			$link='edit_others.php';
		
		$action_count=mysql_num_rows($action_results);
		if($action_count) {
			echo "<table id='action_log' class='fixed' border=1;><tr><th style='width:40px'>Action ID</th><th style='width:150px'>Task</th><th style='width:45px'>Priority</th><th style='width:60px'>Assigned On</th><th style='width:60px'>Deadline</th>";
			for ($i=0; $i<$action_count; $i++) {		
				$row=mysql_fetch_array($action_results);
				
				if ($i%2==0)
					$color="#ddd";
				else $color="#fff";
				
				if (compare_date($row['deadline'], $date)<0) {
					//echo $date;
					$color=$color.'; border:3px solid red;';
				}
				
				if ($row['severity']=="Critical")
					$colorsev='red';
				else if ($row['severity']=="Major")
					$colorsev='#F77502';
				else $colorsev='#black';
				
				if ($row['priority']=="Critical")
					$bgpriority='red';
				else if ($row['priority']=="High")
					$bgpriority='#F77502';
				else $bgpriority=$color;
				
				if ($row['status']=="Assigned")
					$bgstatus='#F77502';
				else if ($row['priority']=="Opened")
					$bgstatus='#09F';
				else $bgstatus='#33C039';
				
				if ($row['reported_by']==$logged_in_user) {
					$link='edit_others.php';
				}
				
				echo "<tr style='font-size: 13px; background:".$color."'><td>".$row['jid']."</td><td><a href='".$link."?action_num=".$row['jid']."'>".$row['task']."</a></td><td style='background:".$bgpriority."'>".$row['priority']."</td><td>".$row['reported_on']."</td><td style='background:#09F'>".$row['deadline']."</td></tr>";
				echo "<tr style='background:".$color."'><td colspan=3><strong>Description: </strong>".$row['description']."</td><td style='color:".$colorsev."'><strong>Severity: </strong>".$row['severity']."</td><td style='background:".$bgstatus."'><strong>Status:</strong> ".$row['status']."</td></tr>";
			}
			echo "</table>";
		}
		else {
			if ($status=='incomplete')
				echo "<span style='font-size: 14px;'>Woohoo! You have completed all tasks!</span>";
			else if ($status=='all')
				echo "<span style='font-size: 14px;'>No work has been allotted yet.</span>";
			
		}
	}
	
	function get_user_details($userid) {
		$fetch_action_query="SELECT * FROM `users` WHERE id='$userid'";
		connect();
		$action_results=mysql_query($fetch_action_query);
		disconnect();
		
		if (mysql_num_rows($action_results)) {
			$details=mysql_fetch_array($action_results);
			return $details;
		}
		else 
			return "No such user";
	}
	
	function get_job_details($jid) {
		$fetch_action_query="SELECT * FROM `actionlog` WHERE jid='$jid'";
		connect();
		$action_results=mysql_query($fetch_action_query);
		disconnect();
		
		if (mysql_num_rows($action_results)) {
			$details=mysql_fetch_array($action_results);
			return $details;
		}
		else 
			return "No such job";
	}
	
	function sendmail($from, $to, $subject, $message) {
		$headers = "From: sender@example.com\r\n" ."X-Mailer: php";
		if (mail($to, $subject, $body, $headers)) {
			return "Message sent";
		} 
		else {
				return "Message delivery failed...";
		}
	}*/
?>
