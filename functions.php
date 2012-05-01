<?php 

function createHeader(){
  echo "<html>";
  echo "<head>";
  echo "<link rel='stylesheet' type='text/css' href='calendar.css'>";
  echo "</head>";
  echo "<h1 align=center>Calendar of Events</h1>\n"; 
  echo "<body>";
}

function createFooter(){
  echo "</body></html>";
}

 function getSchedule($day, $month, $year){
	 $thisDay="$year-$month-$day";
	 $sql="SELECT * FROM Meetings WHERE MeetingDate='$thisDay'";
	 $result=mysql_query($sql);
	 
	 while($row=mysql_fetch_row($result)){
		 echo "$row[1] -- $row[3]"; 
	 }	 
 }




?>

