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
mysql_query("UPDATE individualclients SET c28='".$obj->{'c28'}."',c29='".$obj->{'c29'}."',c30='".$obj->{'c30'}."',c31='".$obj->{'c31'}."',c32='".$obj->{'c32'}."',c33='".$obj->{'c33'}."',c341='".$obj->{'c341'}."',c342='".$obj->{'c342'}."',c343='".$obj->{'c343'}."',c344='".$obj->{'c344'}."', c35='".$obj->{'c35'}."',c36='".$obj->{'c36'}."',c37='".$obj->{'c37'}."',c38='".$obj->{'c38'}."',c39='".$obj->{'c39'}."',c40='".$obj->{'c40'}."',c55='D'  WHERE c4='".$obj->{'prefOutputAccountName2'}."'");
mysql_close($con);
//
  //$posts = array($json);
  $posts = array(1);
    header('Content-type: application/json');
    echo json_encode(array('posts'=>$posts)); 
  ?>