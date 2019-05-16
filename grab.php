<title>ImageStealer</title>
<link rel="shortcut icon" href="https://1.bp.blogspot.com/-q4WhoEwfRlI/XDCnuof_TsI/AAAAAAAAIsQ/HxA6hd2mIOgiO8KveXaxKwfaecawWpCgwCLcBGAs/s1600/kano.png" type="image/x-icon">
<meta name='author' content='Stupidc0de Family'>
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="style.css">

<?php
	include('slut.php'); //Parser to get element in your link
	if(isset($_POST['submit'])){	
		$url=file_get_html($_POST['url']); 
	$image = $url->find("img"); 
	foreach($image as $img) 
	{
		$s=$img->src; 
		$img_name = 'rootresult/'.basename($s); //change it
		file_put_contents($img_name, file_get_contents($s)); 
	}
	}
	
	
?>
  <br><center><font face="Ubuntu" size="5" color="white"><b>ImageStealer by Sc0<b/></font></center>
  <center><img class='image' src='https://3.bp.blogspot.com/-6XZOk6uPV4U/XEBO8xwFcwI/AAAAAAAABL4/BDAHAxIoOCAZCO0FmEnNtAyGXoTx9dz6wCLcBGAs/s1600/weeblogo.png'>
  <br><br><br>
  <center><font face="Ubuntu" size="3" color="white"><b>blank? or stopped respond, don't worry still do webrequest.<b/></font>
  <p>
<center>
<body bgcolor=black>
<form id="form1" name="form1" method="post" action="">
  <table width="500"  align="center" cellpadding="1" cellspacing="1">
    <tr>
      <td colspan="2"><label for="textfield"></label>
      <input class="bordergaya" style="width:100%;" placeholder="PUT YOUR FULL URL HERE...." type="text" name="url" id="textfield" />
      </td>
      
    </tr>
    <tr>
      <td colspan="2" align="center" valign="middle"><input class="subbtn" type="submit" name="submit" id="button" value="  >  " /></td>
    </tr>
  </table>
</form>