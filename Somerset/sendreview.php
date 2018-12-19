<?php
include 'connect.php';
$data = json_decode(file_get_contents("php://input"));

if(count($data) > 0){
  $name  = mysqli_real_escape_string($connect, $data->name);
  $phone = mysqli_real_escape_string($connect, $data->phone);
  $score = mysqli_real_escape_string($connect, $data->score);
}

$sql = "INSERT INTO som_review(name,phone,numval) VALUES ('$name',$phone,$score)";
$execution = mysqli_query($connect,$sql);
if($execution){
  echo "MCQ Added";
}
else{
  echo "MCQ not Added";
}
?>
