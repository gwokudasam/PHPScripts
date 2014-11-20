<?php

mysql_connect("localhost","root","");
mysql_select_db("ecirdatabase");
//$sql=mysql_query("select * from individualclients");
//$sql=mysql_query("select * from individualclients WHERE  c4 = 'c3'");
mysql_query("SELECT * FROM individualclients INTO OUTFILE '/individualdata.xlsx'");
//$sql = mysql_query("SELECT * INTO OUTFILE '/individualdata.xlsx'  FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '''  LINES TERMINATED BY '\n'  FROM individualclients");

//SELECT * INTO OUTFILE '/tmp/result.txt'  FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"'  LINES TERMINATED BY '\n' FROM individualclients;
//$test ="c3";
//$sql = mysql_query("SELECT * FROM individualclients");

//while($row=mysql_fetch_assoc($sql))
//$output[]=$row;
//print(json_encode($output));
mysql_close();
?>