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
mysql_query("UPDATE individualclients SET c41='".$obj->{'c41'}."',c42='".$obj->{'c42'}."',c43='".$obj->{'c43'}."', c441='".$obj->{'c441'}."',c442='".$obj->{'c442'}."',c443='".$obj->{'c443'}."',c444='".$obj->{'c444'}."',c445='".$obj->{'c445'}."',c446='".$obj->{'c446'}."',c447='".$obj->{'c447'}."',c448='".$obj->{'c448'}."',c449='".$obj->{'c449'}."',c55='E' WHERE c4='".$obj->{'prefOutputAccountName2'}."'");
mysql_close($con);
//
  //$posts = array($json);
  $posts = array(1);
    header('Content-type: application/json');
    echo json_encode(array('posts'=>$posts)); 
  ?>