<?php

//Read last survey
$file = "last.json";
$json = json_decode(file_get_contents($file), true);


if($json['last'] == 'A') {
    //Change 'last' and save file
    $json['last'] = 'B';
    file_put_contents($file, json_encode($json, true));

    //Redirect to A
    echo "<meta http-equiv=\"refresh\" content=\"0;URL={$json['B']}\">";
}
else if($json['last'] == 'B') {
    //Change 'last' and save file
    $json['last'] = 'A';
    file_put_contents($file, json_encode($json, true));

    //Redirect to B
    echo "<meta http-equiv=\"refresh\" content=\"0;URL={$json['A']}\">";
}

?>
