<?php
function callAPI($method, $url, $data){
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   if(!empty($data)) {
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
   }
   $output = curl_exec($ch);
   $info = curl_getinfo($ch);
   curl_close($ch);
   return json_decode($output, true);
}
?>