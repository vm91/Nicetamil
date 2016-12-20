	<?php
		include("topp.html");
	?>		
<br><br>
			
			<?php
$link = @mysql_connect(localhost, username, password);
if(!$link){
   echo('Error connecting to the database: ' . mysql_error());
   exit();
}
$db = @mysql_selectdb('mydatabase');
if(!$db){
   echo('Error selecting database: ' . mysql_error());
   exit();
}
$query = "SELECT id, headline, timestamp FROM news ORDER BY timestamp DESC";
$result = @mysql_query($query);
if(!$result){
   echo('Error selecting news: ' . mysql_error());
   exit();
}
if (mysql_num_rows($result) > 0){
    while($row = mysql_fetch_object($result))
    {
			?>
   <font size="-1"><b><? echo $row->headling; ?></b> <i><? echo formatDate($row->timestamp); ?></i></font>
    <?php
    }
}else{
   ?>
   <font size="-2">No news in the database</font>
<? }
   mysql_close($link); ?>
			
			
			
			<table width="100%" cellpadding="0" cellspacing="0" border="0" topmargin="0" leftmargin="0" marginheight="0" marginwidth="0"><tr><td style="padding-bottom: 50px;margin-top: 0;margin-bottom: 0;padding-top: 0;color: #555555;border-collapse: collapse;padding-left: 0;padding-right: 0;margin-left: 0;margin-right: 0;">
<br>
	<?php
		include("bunn.html");
	?>