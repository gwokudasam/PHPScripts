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
mysql_query("INSERT INTO `ecirdatabase`.`individualclients` (c1,c2,c3,c4,c5,c6,c7,c8,c55) VALUES ('".$obj->{'c1'}."', '".$obj->{'c2'}."', '".$obj->{'c3'}."', '".$obj->{'c4'}."', '".$obj->{'c5'}."', '".$obj->{'c6'}."', '".$obj->{'c7'}."', '".$obj->{'c8'}."','A')");
mysql_close($con);
//
  //$posts = array($json);
  $posts = array(1);
    header('Content-type: application/json');
    echo json_encode(array('posts'=>$posts)); 
  ?>