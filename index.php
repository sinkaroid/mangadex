<title>Mangadex Grabber</title>
<link rel="stylesheet" type="text/css" href="style.css">
<font face=consolas>
<form action="index.php" method="get">
<center>

full url without numbername : <input type="text" style="width:22%;" placeholder="i.e https://mangadex.org/data/35656cdf007404050fd2c2dfcbcd3395/b" name="c0"><br>
amount : <input type="text" style="width:2%;" placeholder="225" name="am0"><br>
<select name="fat">
    <option value=".jpg">jpg</option>
    <option value=".png">png</option>
</select>
<p>
<input type="submit" name="submit" value="GET">
<br>
</form>
<?php 
@ini_set('display_errors', 0);
$nhenf = mkdir("rootresult", 0777);
if(isset($_GET['submit'])){
$c0 = $_GET['c0'];
$fat = $_GET['fat'];
$am0 = $_GET['am0'];
echo'<a href="grab.php" rel="nofollow" target="_blank"><b>grab<b/></a><p>'; 
for($i=1;$i<=$am0;$i++){
		
echo '<img width="220" height="350" src="',$c0,$i,$fat,'">';
	}
}
?>