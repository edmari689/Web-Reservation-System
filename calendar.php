<?php
###########################################################
/*
GuestBook Script
Copyright (C) 2012 StivaSoft ltd. All rights Reserved.


This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see http://www.gnu.org/licenses/gpl-3.0.html.

For further information visit:
http://www.phpjabbers.com/
info@phpjabbers.com

Version:  1.0
Released: 2012-03-18
*/
###########################################################


error_reporting(0);
include("config.php");

/// get current month and year and store them in $cMonth and $cYear variables
(intval($_REQUEST["month"])>0) ? $cMonth = $_REQUEST["month"] : $cMonth = date("n");
(intval($_REQUEST["year"])>0) ? $cYear = $_REQUEST["year"] : $cYear = date("Y");

if ($cMonth<10) $cMonth = '0'.$cMonth;

// generate an array with all unavailable dates
$sql = "SELECT * FROM ".$SETTINGS["data_table"]." WHERE `checkin_date` LIKE '".$cYear."-".$cMonth."-%'";
$sql_result = mysql_query ($sql, $connection ) or die ('request "Could not execute SQL query" '.$sql);
while ($row = mysql_fetch_assoc($sql_result)) {
	$unavailable[] = $row["checkin_date"];
}

// calculate next and prev month and year used for next / prev month navigation links and store them in respective variables
$prev_year = $cYear;
$next_year = $cYear;
$prev_month = intval($cMonth)-1;
$next_month = intval($cMonth)+1;

// if current month is Decembe or January month navigation links have to be updated to point to next / prev years
if ($cMonth == 12 ) {
	$next_month = 1;
	$next_year = $cYear + 1;
} elseif ($cMonth == 1 ) {
	$prev_month = 12;
	$prev_year = $cYear - 1;
}
?>
<?php 
$first_day_timestamp = mktime(0,0,0,$cMonth,1,$cYear); // time stamp for first day of the month used to calculate 
$maxday = date("t",$first_day_timestamp); // number of days in current month
$thismonth = getdate($first_day_timestamp); // find out which day of the week the first date of the month is
$startday = $thismonth['wday'] ; // 0 is for Sunday and as we want week to start on Mon we subtract 1
if (!$thismonth['wday']) $startday = 7;
for ($i=1; $i<($maxday+$startday); $i++) {
	
	if (($i % 7) == 1 ) echo "<tr>";
	
	if ($i < $startday) { echo "<td>&nbsp;</td>"; continue; };
	
	$current_day = $i - $startday + 1;
	
	(in_array($cYear."-".$cMonth."-".$current_day,$unavailable)) ? $css='booked' : $css='available';
	
	//echo "<td class='".$css."'>";
	//echo $current_day;
	//echo "</td>";
	
	if (($i % 7) == 0 ) echo "</tr>";
}
?> 

</table>

<?php
//
error_reporting(0);
include("config.php");

/// get current month and year and store them in $cMonth and $cYear variables
(intval($_REQUEST["month"])>0) ? $cMonth = $_REQUEST["month"] : $cMonth = date("n");
(intval($_REQUEST["year"])>0) ? $cYear = $_REQUEST["year"] : $cYear = date("Y");

if ($cMonth<10) $cMonth = '0'.$cMonth;

// generate an array with all unavailable dates
$sql = "SELECT * FROM ".$SETTINGS["data_table"]." WHERE `checkout_date` LIKE '".$cYear."-".$cMonth."-%'";
$sql_result = mysql_query ($sql, $connection ) or die ('request "Could not execute SQL query" '.$sql);
while ($row = mysql_fetch_assoc($sql_result)) {
	$unavailable[] = $row["checkout_date"];
}

// calculate next and prev month and year used for next / prev month navigation links and store them in respective variables
$prev_year = $cYear;
$next_year = $cYear;
$prev_month = intval($cMonth)-1;
$next_month = intval($cMonth)+1;

// if current month is Decembe or January month navigation links have to be updated to point to next / prev years
if ($cMonth == 12 ) {
	$next_month = 1;
	$next_year = $cYear + 1;
} elseif ($cMonth == 1 ) {
	$prev_month = 12;
	$prev_year = $cYear - 1;
}
?>
  <table width="100%">
  <tr>
      <td class="mNav"><a href="javascript:LoadMonth('<?php echo $prev_month; ?>', '<?php echo $prev_year; ?>')">&lt;&lt;</a></td>
      <td colspan="5" class="cMonth"><?php echo date("F, Y",strtotime($cYear."-".$cMonth."-01")); ?></td>
      <td class="mNav"><a href="javascript:LoadMonth('<?php echo $next_month; ?>', '<?php echo $next_year; ?>')">&gt;&gt;</a></td>
  </tr>
  <tr>
      <td class="wDays">M</td>
      <td class="wDays">T</td>
      <td class="wDays">W</td>
      <td class="wDays">T</td>
      <td class="wDays">F</td>
      <td class="wDays">SAT</td>
      <td class="wDays">SUN</td>
  </tr>
<?php 
$first_day_timestamp = mktime(0,0,0,$cMonth,1,$cYear); // time stamp for first day of the month used to calculate 
$maxday = date("t",$first_day_timestamp); // number of days in current month
$thismonth = getdate($first_day_timestamp); // find out which day of the week the first date of the month is
$startday = $thismonth['wday'] ; // 0 is for Sunday and as we want week to start on Mon we subtract 1
if (!$thismonth['wday']) $startday = 7;
for ($i=1; $i<($maxday+$startday); $i++) {
	
	if (($i % 7) == 1 ) echo "<tr>";
	
	if ($i < $startday) { echo "<td>&nbsp;</td>"; continue; };
	
	$current_day = $i - $startday + 1;
	
	(in_array($cYear."-".$cMonth."-".$current_day,$unavailable)) ? $css='booked' : $css='available';
	
	echo "<td class='".$css."'>";
	echo $current_day;
	echo "</td>";
	
	if (($i % 7) == 0 ) echo "</tr>";
}
?> 

</table>

