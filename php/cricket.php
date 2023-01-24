<html>
<body bgcolor="aqua">
<h4>INDIAN TEAM</h4>
<?php
$name=["Dhavan","Kohli","sachin","Shami","Pandey","Bumrah","Agarwal","Shreyas","Rahl","Ashwin"];
$role=["Batsman","Batsman","Allrounder","Bowler","Batsman","Bowler","Batsman","Batsman","Wicket-keeper","Bowler"];
echo "STARTING VI";
echo "<br>
<table border='2px'>
<tr><th> sl no.</th>
<th>player</th>
<th>ROLE</th>";
     
for ($i=0;$i<10;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th><th>$name[$i]</th><th>$role[$i]</th></tr>";
}
echo "</table>"
?>
</body>
</html>


