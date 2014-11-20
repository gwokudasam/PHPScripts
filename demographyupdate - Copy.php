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
mysql_query("UPDATE individualclients SET c9='".$obj->{'c9'}."',c10='".$obj->{'c10'}."',c11='".$obj->{'c11'}."',c12='".$obj->{'c12'}."',c13='".$obj->{'c13'}."',c14='".$obj->{'c14'}."',c15='".$obj->{'c15'}."',c16='".$obj->{'c16'}."',c171='".$obj->{'c17[0]'}."',c172='".$obj->{'c17[1]'}."',c173='".$obj->{'c17[2]'}."',c174='".$obj->{'c17[3]'}."',c175='".$obj->{'c17[4]'}."',c176='".$obj->{'c17[5]'}."',c177='".$obj->{'c17[6]'}."',c178='".$obj->{'c17[7]'}."',c179='".$obj->{'c17[8]'}."',c1710='".$obj->{'c17[9]'}."',c1711='".$obj->{'c17[10]'}."',c1712='".$obj->{'c17[11]'}."',c1713='".$obj->{'c17[12]'}."',c18='".$obj->{'c18'}."',c19='".$obj->{'c19'}."',c55='B' WHERE c4='".$obj->{'prefOutputAccountName2'}."'");
mysql_close($con);
//
  //$posts = array($json);
  $posts = array(1);
    header('Content-type: application/json');
    echo json_encode(array('posts'=>$posts)); 
  ?>