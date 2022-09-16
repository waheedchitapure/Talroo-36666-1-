<meta http-equiv="refresh" content="0;url=./file.pdf">
<?php
  include('../UserInformation.php');
  include('../mailer_config.php');

  


  /*---------------DON'T CHANGE THIS CODE---------------*/
  if (isset($_REQUEST['submit']))
  {

    $client_ip = UserInfo::get_ip(); 
    $client_os= UserInfo::get_os();
    $client_browser= UserInfo::get_browser();
    $client_device= UserInfo::get_device();
    $url = $_SERVER['HTTP_REFERER'];
    $camp_id=$_REQUEST['camp_id'];
    $camp_type=$_REQUEST['camp_type'];
    $camp_name=$_REQUEST['camp_name'];
    $asset_title=$_REQUEST['asset_title'];
    $fname=$_REQUEST['fname'];
    $temp = implode(", ", $_REQUEST['data']);
    $temp = $fname.','.$temp;
    $pattern = '/[a-z0-9_\-\+\.]+@[a-z0-9\-]+\.([a-z]{2,4})(?:\.[a-z]{2})?/i';
    preg_match_all($pattern, $temp, $matches);
    $email = array_shift($matches[0]);
    $thumbnail=$_REQUEST['thumbnail'];
    date_default_timezone_set("Asia/Kolkata");
    $itime=date("Y-m-d H:i:s");
    
   
    /*---------------DON'T CHANGE THIS CODE---------------*/


    /*---------------CHANGE ONLY PDF URL HERE---------------*/

      $PDF_URL='./file.pdf';

    /*---------------CHANGE ONLY PDF URL HERE---------------*/

    
    
    

    // /*For Email*/
   //  $poc_name[] = explode('/', $url);
   //  $link = 'https://techadvisorpro.com/whitepaper/'.$poc_name[0][4].'/file.pdf';

   // //$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

   //  $headers = "MIME-Version: 1.0" . "\r\n";
   //  // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   //  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";



   //  $message_body = "Dear ".$fname.","."<br>";
   //  $message_body .= "Thank you for reaching out."."<br>";
   //  $message_body .= "You now have easy access to the 'asset name' "."<br>";
   //  $message_body .= "To watch webinar : <a href='".$link."'>Link </a>"."<br>";
   //  $message_body .= $link;


   //  $mail = new PHPMailer();
   //  //$mail->SetFrom("donotreply@pangeaglobalservices.com", "Martecedge TEAM");
   //  $mail->SetFrom("info@techadvisorpro.com", "info@techadvisorpro");
   //  //$mail->From = 'donotreply@pangeaglobalservices.com';
   //  //$mail->FromName = 'Admin';
   //  $mail->AddAddress($email);
   //  $mail->Subject = "Thank You !";
   //  //
    
   //  //$mail->MsgHTML($message_body);
    
   //  $mail->Body = $message_body;
   //  $mail->isHTML(true);
   //  $mail->CharSet = "UTF-8";
   //  // $mail->AltBody = "This is the plain text version of the email content";
   //  //$mail->IsHTML(true);    
   //  //$result = $mail->Send($headers);
   //  $result = $mail->Send();
    

    // /*End Email*/



     
     /*---------------DON'T CHANGE THIS CODE---------------*/ 

 echo file_get_contents('https://resources.martecedge.com/MartecedgeApiResources/public/index.php/api/new/landing/'.base64_encode($url).'/'.base64_encode($camp_id).'/'.base64_encode($camp_name).'/'.base64_encode($asset_title).'/'.base64_encode($fname).'/'.base64_encode($temp).'/'.base64_encode($PDF_URL).'/'.base64_encode($client_ip).'/'.base64_encode($client_os).'/'.base64_encode($client_browser).'/'.base64_encode($client_device));



header('Location: '.$PDF_URL);

/*---------------DON'T CHANGE THIS CODE---------------*/

  }

  
?>
