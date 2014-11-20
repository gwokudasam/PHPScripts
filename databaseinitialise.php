<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// Create database
if (mysql_query("CREATE DATABASE IF NOT EXISTS ecirdatabase",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }
  
mysql_select_db("ecirdatabase", $con);  
$sql2 = "CREATE TABLE IF NOT EXISTS admins
(
isserver varchar(50),
address varchar(50),
sitecode varchar(50),
mark varchar(50)

)";

$sql4 = "CREATE TABLE IF NOT EXISTS users
(
username varchar(50),
password varchar(50),
usercode varchar(50),
role varchar(50)
)";
// Create table

$sql = "CREATE TABLE IF NOT EXISTS individualclients
(

c1 varchar(50) NOT NULL DEFAULT '' ,
c2 varchar(50) NOT NULL DEFAULT '' ,
c3 varchar(50) NOT NULL DEFAULT '',
c4 varchar(50) NOT NULL DEFAULT '',
c5 varchar(50) NOT NULL DEFAULT '',
c6 varchar(50) NOT NULL DEFAULT '',
c7 varchar(50) NOT NULL DEFAULT '',
c8 datetime, 
c9 varchar(50) NOT NULL DEFAULT '',
c10 varchar(50) NOT NULL DEFAULT '',
c10a varchar(50) NOT NULL DEFAULT '',
c11 varchar(50) NOT NULL DEFAULT '',
c12 varchar(50) NOT NULL DEFAULT '',
c13 varchar(50) NOT NULL DEFAULT '',
c14 int(50) NOT NULL ,
c15 varchar(50) NOT NULL DEFAULT '',
c16 varchar(50) NOT NULL DEFAULT '',

c171 varchar(50) NOT NULL DEFAULT '',
c172 varchar(50) NOT NULL DEFAULT '',
c173 varchar(50) NOT NULL DEFAULT '',
c174 varchar(50) NOT NULL DEFAULT '',
c175 varchar(50) NOT NULL DEFAULT '',
c176 varchar(50) NOT NULL DEFAULT '',
c177 varchar(50) NOT NULL DEFAULT '',
c178 varchar(50) NOT NULL DEFAULT '',
c179 varchar(50) NOT NULL DEFAULT '',
c1710 varchar(50) NOT NULL DEFAULT '',
c1711 varchar(50) NOT NULL DEFAULT '',
c1712 varchar(50) NOT NULL DEFAULT '',
c1713 varchar(50) NOT NULL DEFAULT '',



c181 varchar(50) NOT NULL DEFAULT '',
c182 varchar(50) NOT NULL DEFAULT '',
c183 varchar(50) NOT NULL DEFAULT '',
c184 varchar(50) NOT NULL DEFAULT '',
c185 varchar(50) NOT NULL DEFAULT '',
c186 varchar(50) NOT NULL DEFAULT '',
c187 varchar(50) NOT NULL DEFAULT '',
c188 varchar(50) NOT NULL DEFAULT '',
c189 varchar(50) NOT NULL DEFAULT '',
c1810 varchar(50) NOT NULL DEFAULT '',
c1811 varchar(50) NOT NULL DEFAULT '',
c1812 varchar(50) NOT NULL DEFAULT '',



c191 varchar(50) NOT NULL DEFAULT '',
c192 varchar(50) NOT NULL DEFAULT '',
c193 varchar(50) NOT NULL DEFAULT '',
c194 varchar(50) NOT NULL DEFAULT '',
c195 varchar(50) NOT NULL DEFAULT '',
c196 varchar(50) NOT NULL DEFAULT '',
c197 varchar(50) NOT NULL DEFAULT '',
c198 varchar(50) NOT NULL DEFAULT '',
c199 varchar(50) NOT NULL DEFAULT '',
c1910 varchar(50) NOT NULL DEFAULT '',



c20 varchar(50) NOT NULL DEFAULT '',
c21 varchar(50) NOT NULL DEFAULT '',
c22 varchar(50) NOT NULL DEFAULT '',
c23 varchar(50) NOT NULL DEFAULT '',
c24 varchar(50) NOT NULL DEFAULT '',
c25 varchar(50) NOT NULL DEFAULT '',
c26 varchar(50) NOT NULL DEFAULT '',
c27 varchar(50) NOT NULL DEFAULT '',
c27b varchar(50) NOT NULL DEFAULT '',
c28 varchar(50) NOT NULL DEFAULT '',
c29 varchar(50) NOT NULL DEFAULT '',
c30 varchar(50) NOT NULL DEFAULT '',
c31 varchar(50) NOT NULL DEFAULT '',
c32 varchar(50) NOT NULL DEFAULT '',
c33 varchar(50) NOT NULL DEFAULT '',


c341 varchar(50) NOT NULL DEFAULT '',
c342 varchar(50) NOT NULL DEFAULT '',
c343 varchar(50) NOT NULL DEFAULT '',
c344 varchar(50) NOT NULL DEFAULT '',


c35 varchar(50) NOT NULL DEFAULT '',
c36 varchar(50) NOT NULL DEFAULT '',
c37 varchar(50) NOT NULL DEFAULT '',
c38 varchar(50) NOT NULL DEFAULT '',
c39 varchar(50) NOT NULL DEFAULT '',
c40 varchar(50) NOT NULL DEFAULT '',
c41 varchar(50) NOT NULL DEFAULT '',
c42 varchar(50) NOT NULL DEFAULT '',
c43 varchar(50) NOT NULL DEFAULT '',


c441 varchar(50) NOT NULL DEFAULT '',
c442 varchar(50) NOT NULL DEFAULT '',
c443 varchar(50) NOT NULL DEFAULT '',
c444 varchar(50) NOT NULL DEFAULT '',
c445 varchar(50) NOT NULL DEFAULT '',
c446 varchar(50) NOT NULL DEFAULT '',
c447 varchar(50) NOT NULL DEFAULT '',
c448 varchar(50) NOT NULL DEFAULT '',
c449 varchar(50) NOT NULL DEFAULT '',


c45 varchar(50) NOT NULL DEFAULT '',
c46 varchar(50) NOT NULL DEFAULT '',
c47 varchar(50) NOT NULL DEFAULT '',
c48 varchar(50) NOT NULL DEFAULT '',
c49 varchar(50) NOT NULL DEFAULT '',
c50 varchar(50) NOT NULL DEFAULT '',
c51 varchar(50) NOT NULL DEFAULT '',
c52 varchar(50) NOT NULL DEFAULT '',


c531 varchar(50) NOT NULL DEFAULT '',
c532 varchar(50) NOT NULL DEFAULT '',
c533 varchar(50) NOT NULL DEFAULT '',
c534 varchar(50) NOT NULL DEFAULT '',
c535 varchar(50) NOT NULL DEFAULT '',
c536 varchar(50) NOT NULL DEFAULT '',
c537 varchar(50) NOT NULL DEFAULT '',
c538 varchar(50) NOT NULL DEFAULT '',
c539 varchar(50) NOT NULL DEFAULT '',
c5310 varchar(50) NOT NULL DEFAULT '',
c5311 varchar(50) NOT NULL DEFAULT '',
c5312 varchar(50) NOT NULL DEFAULT '',
c5313 varchar(50) NOT NULL DEFAULT '',
c5314 varchar(50) NOT NULL DEFAULT '',


c54 varchar(50) NOT NULL DEFAULT '',
c55 varchar(50) NOT NULL DEFAULT '',
c56 varchar(50) NOT NULL DEFAULT ''
)";




// Execute query
mysql_query($sql4,$con);
mysql_query($sql2,$con);
mysql_query($sql,$con);


$sql3 = "SELECT * FROM admins";
$result = mysql_query($sql3);

while($row=mysql_fetch_assoc($result))
$output[]=$row;

if($output==NULL)
{
mysql_query("INSERT INTO `ecirdatabase`.`admins` (isserver,address,sitecode,mark) VALUES ('NOT SET', 'localhost', 'NOT SET','mark')");
//mysql_query("INSERT INTO `ecirdatabase`.`admins` (a1,a2,a3,a4,a5,a6,a7,a8) VALUES ('user', 'user', 'mpu4c01','abcde','abcde','No','Address','sitecode')");
}

mysql_close($con);
?> 