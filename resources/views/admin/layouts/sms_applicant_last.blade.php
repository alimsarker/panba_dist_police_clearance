<div  style="visibility: hidden;">   
   <div class="waitdelivery">           
   <?php   
   $to = $pendingDataclearance->mobile_no;
   
   $token = "afa38f82eac4c85648088946ed255267";
   $message = "আপনার পুলিশ ক্লিয়ারেন্স এর সার্টিফিকেট রেডি হয়েছে এসপি অফিসে কন্টোলরুমে যোগাযোগ করুন।";
   
   $url = "http://api.greenweb.com.bd/api.php?json";
   
   
   $data= array(
   'to'=>"$to",
   'message'=>"$message",
   'token'=>"$token"
   ); // Add parameters in key value
   $ch = curl_init(); // Initialize cURL
   curl_setopt($ch, CURLOPT_URL,$url);
   curl_setopt($ch, CURLOPT_ENCODING, '');
   curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   $smsresult = curl_exec($ch);
   
   //Result
   echo $smsresult;
   
   //Error Display
   echo curl_error($ch);

   ?> 
   
    </div> 
  </div>