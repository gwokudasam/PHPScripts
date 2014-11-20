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
mysql_query("UPDATE individualclients SET c9='".$obj->{'c9'}."',c10='".$obj->{'c10'}."',c10a='".$obj->{'c10a'}."',c11='".$obj->{'c11'}."',c12='".$obj->{'c12'}."',c13='".$obj->{'c13'}."',c14='".$obj->{'c14'}."',c15='".$obj->{'c15'}."',c16='".$obj->{'c16'}."',c171='".$obj->{'c171'}."',c172='".$obj->{'c172'}."',c173='".$obj->{'c173'}."',c174='".$obj->{'c174'}."',c175='".$obj->{'c175'}."',c176='".$obj->{'c176'}."',c177='".$obj->{'c177'}."',c178='".$obj->{'c178'}."',c179='".$obj->{'c179'}."',c1710='".$obj->{'c1710'}."',c1711='".$obj->{'c1711'}."',c1712='".$obj->{'c1712'}."',c1713='".$obj->{'c1713'}."',c181='".$obj->{'c181'}."',c182='".$obj->{'c182'}."',c183='".$obj->{'c183'}."',c184='".$obj->{'c184'}."',c185='".$obj->{'c185'}."',c186='".$obj->{'c186'}."',c187='".$obj->{'c187'}."',c188='".$obj->{'c188'}."',c189='".$obj->{'c189'}."',c1810='".$obj->{'c1810'}."',c1811='".$obj->{'c1811'}."',c1812='".$obj->{'c1812'}."',c191='".$obj->{'c191'}."',c192='".$obj->{'c192'}."',c193='".$obj->{'c193'}."',c194='".$obj->{'c194'}."',c195='".$obj->{'c195'}."',c196='".$obj->{'c196'}."',c197='".$obj->{'c197'}."',c198='".$obj->{'c198'}."',c199='".$obj->{'c199'}."',c1910='".$obj->{'c1910'}."',c55='B' WHERE c4='".$obj->{'prefOutputAccountName2'}."'");
mysql_close($con);
//
  //$posts = array($json);
  $posts = array(1);
    header('Content-type: application/json');
    echo json_encode(array('posts'=>$posts)); 
  ?>