<?php

//Read survey json
$file = "last.json";
$json = json_decode(file_get_contents($file), true);

//Alternate A/B
switch($json['last']) {
    case 'A':
        $json['last'] = 'B';
        break;

    case 'B':
        $json['last'] = 'A';
        break;

    default:
        $json['last'] = 'A';
}

//Save survey json
file_put_contents($file, json_encode($json, true));

//Redirect to survey
echo "<meta http-equiv=\"refresh\" content=\"0;URL={$json[$json['last']]}\">";

?>
