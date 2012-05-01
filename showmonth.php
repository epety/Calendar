<?php
include('connect.php');
include('functions.php');

createHeader();

	$day=1;
	$month=$_REQUEST['m'];
	$year=$_REQUEST['y'];
	
	$nextMonth=$month+1;
	$previousMonth=$month-1;
	
	$lastDate=mktime(23, 59, 59, $month+1, 0, $year);
	$lastDateInfo=getdate($lastDate);
	
	#get the day of the week of first day of the month
	$date = mktime(0,0,0,$month,1,$year);
	$dateInfo = getdate($date);
	$dayofweek = $dateInfo['wday']; #numeric value of DOW
	
	echo "<table class='head'><tr><td><h1 align=left>$dateInfo[month]</h2></td></tr>";
	echo "<tr><td><p><a href='showmonth.php?y=$year&m=$previousMonth'> &lt;&lt;Prev</a></p></td>";
	echo "<td class='next'><p align=right><a href='showmonth.php?y=$year&m=$nextMonth'>Next>></a></p></td></tr>";
	echo "<table class=cal>";
	echo "<tr class='first_row'><td>Sunday</td><td>Monday</td><td>Tuesday</td><td>Wednesday</td><td>Thursday</td><td>Friday</td><td>Saturday</td></tr>";
	$counter=0;
	print "<tr>";
	while ($day <=$lastDateInfo['mday'])
	{
  	
	#AS long as $counter < $dayofweek ,display blank cells
  		while ($counter < $dayofweek)
		{  
    		print "<td>&nbsp;</td>";
    		$counter++;
  		}
			
  	#print the cells with dates
  	print "<td><b>$day </b>"; 
		getSchedule($day, $month, $year);
	print"</td>";
  	
	$day++;
  	$counter++;
	if (($counter % 7) == 0) 
    	print "</tr><tr>";
	}
  	
	while (($counter % 7)!= 0) #prints ending blank cells if any
  	{
		print "<td>&nbsp;</td>";
       	$counter++;
  	}
	
  print "</table>";

	

createFooter();


?>