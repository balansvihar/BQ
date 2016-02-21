<?php
putenv("TZ=Asia/Calcutta");

function sendMail($from,$to,$subj,$msg){
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= 'From: '.$from. "\r\n" .'Reply-To: '. $from . "\r\n" .'X-Mailer: PHP/' . phpversion();
  $sts= mail($to, $subj, $msg, $headers);
  return $sts;
} 


if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}


$from="balan@balsoft.in";
$to="balan.spx@gmail.com";
$subj ="BQJS.in - Hit - ".date("d-m-Y");
$msg.='<p style="font-weight:bold">BQJS HIT</p>'.
	  '<p style="font-weight:bold">Date: '. date("d-m-Y").'</p>'.
	  '<p style="font-weight:bold">Time:'.date('h:i:s A',time()).'</p>'.
	  '<p style="color:#47A3FF;font-weight:bold">IP: '.$ip.'</p>' .
	  '<form action="http://www.iplocation.net/" method="post" name="lookup"><input type="hidden" value="'.$ip.'" name="query"><input type="submit" value="Query" name="submit"></form>';
//echo $msg;
$sts=sendMail($from,$to,$subj,$msg);
//$sts="1";
//echo $sts;	


?>