<html>
<body bgcolor="teal">
<h4>PLAYERS NAMES:RICHY,TARUN,DEV,RAHUL,REVAD</h4>
<?php
$name=["Richy","Tarun","Dev","Rahul","Revad"];
echo "Player Program";
echo "<br>
<table border='2px'>
<tr><th> sl no.</th>
<th>player</th>";
for ($i=0;$i<5;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th><th>$name[$i]</th></tr>";
}
echo "</table>"
?>
</body>
</html>

