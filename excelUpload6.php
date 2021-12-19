<?php  
include("db_config.php"); 
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['file']['name']);
$title = $_POST["title"];
$sql[] = array();
if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
$delete= mysqli_query($conn,"DROP TABLE data6");
// die();
$handle = fopen($uploadfile, "r");
$header = fgetcsv($handle,1000,",");
if($header){
    $header_sql = array();
    foreach($header as $h){
        $header_sql[] = '`'.$h.'` VARCHAR(255)';
    }
    $sql[] = 'CREATE TABLE `data6` ('.implode(',',$header_sql).')';
    // $sql[] = 'ALTER TABLE `data2` ADD `Mahindra` VARCHAR(255)';
    while($data = fgetcsv($handle,1000,",")){   
        $sql[] = "INSERT INTO data6 VALUES ('".implode("','",$data)."')";
    }
     $sql[] = "ALTER TABLE `data6` ADD $title VARCHAR(255)";
}        
foreach($sql as $s){
  if($s!=null)
    mysqli_query($conn,$s);
}

echo '<script>alert("Successfully uploaded")</script>';
// session_start();
// $_SESSION["status_success"]= true;
}else
echo '<script>alert("Not uploaded")</script>';
// $_SESSION["status_failed"]=false;
// header("Location: http://localhost/balajirepo/index.php");
// exit;
// echo 'Here is some more debugging info:';
// print_r($_FILES);
// print "</pre>";
?>