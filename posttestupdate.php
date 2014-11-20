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
mysql_query("UPDATE individualclients SET c45='".$obj->{'c45'}."',c46='".$obj->{'c46'}."',c47='".$obj->{'c47'}."',c48='".$obj->{'c48'}."',c49='".$obj->{'c49'}."',c50='".$obj->{'c50'}."',c51='".$obj->{'c51'}."',c52='".$obj->{'c52'}."',c531='".$obj->{'c531'}."',c532='".$obj->{'c532'}."',c533='".$obj->{'c533'}."',c534='".$obj->{'c534'}."',c535='".$obj->{'c535'}."',c536='".$obj->{'c536'}."',c537='".$obj->{'c537'}."',c538='".$obj->{'c538'}."',c539='".$obj->{'c539'}."',c5310='".$obj->{'c5310'}."',c5311='".$obj->{'c5311'}."',c5312='".$obj->{'c5312'}."',c5313='".$obj->{'c5313'}."',c5314='".$obj->{'c5314'}."',c54='".$obj->{'c54'}."',c55='F'  WHERE c4='".$obj->{'prefOutputAccountName2'}."'");
mysql_close($con);
//
  //$posts = array($json);
  $posts = array(1);
    header('Content-type: application/json');
    echo json_encode(array('posts'=>$posts)); 
  ?>