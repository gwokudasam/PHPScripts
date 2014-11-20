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
mysql_query("INSERT INTO individualclients(c1,c2,c3,c4,c5,c6) VALUES ('c1 test','c2 test','c3 test','c4 test','c5 test','c6 test')");
mysql_close($con);
//
  //$posts = array($json);
  $posts = array(1);
    header('Content-type: application/json');
    echo json_encode(array('posts'=>$posts)); 
  ?>