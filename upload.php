<?php
    // tao mess de chua loi
    //$message  = ""; // khong co loi

    // xac dinh duong dan anh upload toi
    $temp = explode(".", $_FILES['logo']['name']);
    $target_file = round(microtime(true)) . '.' . end($temp) ;

    // Check type co phai la image hay khong    
    if(!getimagesize($_FILES['logo']['tmp_name'])){
      $message .= "File không phải là ảnh";
    }

    // upload file len sever
    if(empty($message)){
      if(move_uploaded_file($_FILES['logo']['tmp_name'], 'upload/category/' . $target_file)){
        $message .= "";
      }else{
        $message .= " Upload xay ra loi";
      }  
    } 
?>