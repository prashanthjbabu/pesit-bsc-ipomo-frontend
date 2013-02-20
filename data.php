<?
$usn=$_GET["usn"];
echo file_get_contents('http://pesitbscattnjson.herokuapp.com/?usn='.$usn);
?>
