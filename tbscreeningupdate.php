<?php  
//$json=$_GET ['json'];
$json = file_get_contents('php://input');
$obj = json_decode($json);
//echo $json;

//Save
$con = mysql_connect("localhost","root","") 
       or die('Cannot connect to the DB');
mysql_select_db('ecirdatabase',$con);
  /* grab the posts from the db */
  //$query = "SELECT post_title, guid FROM wp_posts WHERE 
  //  post_author = $user_id AND post_status = 'publish'
  // ORDER BY ID DESC LIMIT $number_of_posts";
mysql_query("UPDATE individualclients SET c20='".$obj->{'c20'}."',c21='".$obj->{'c21'}."',c22='".$obj->{'c22'}."',c23='".$obj->{'c23'}."',c24='".$obj->{'c24'}."',c25='".$obj->{'c25'}."',c26='".$obj->{'c26'}."',c27='".$obj->{'c27'}."',c27b='".$obj->{'c27b'}."',c55='C'  WHERE c4='".$obj->{'prefOutputAccountName2'}."'");
mysql_close($con);
//
  //$posts = array($json);
  $posts = array(1);
    header('Content-type: application/json');
    echo json_encode(array('posts'=>$posts)); 
  ?>