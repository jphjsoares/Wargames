<?php


//Reutilize the xor function given
function xor_encrypt($in) {
    
    $key = 'qw8J';

    $text = $in;
    $outText = '';

    // Iterate through each character
    for($i=0;$i<strlen($text);$i++) {
    $outText .= $text[$i] ^ $key[$i % strlen($key)];
    }

    return $outText;
}

//Encrypt the json encoded array and encode it as base64 to get the cookie we need!
echo base64_encode(xor_encrypt(json_encode(array("showpassword"=>"yes","bgcolor"=>"#ffffff"))));


//the key is EDXp0pS26wLKHZy1rDBPUZk0RKfLGIR3 is the key

?>

