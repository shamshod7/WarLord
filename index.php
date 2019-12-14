<?php

flush();

$userbot = "user-name";

$server = '1';

$status = "online";
//online

define("API_KEY","888290852:AAHNqJhkE2_v3aX14kE7Ge4ArUvqrPit0Xo");



if(substr_count($_SERVER[‘HTTP_ACCEPT_ENCODING’],‘gzip’)){
ob_start(“ob_gzhandler”);
}else{
ob_start();
}


ob_implicit_flush();
unlink("error_log");
$map = scandir("users");
$map = count($map);
$map = $map * 10;
$map = $map / 5;

date_default_timezone_set('Africa/Khartoum');

function test_spam($chat_id){
  if(apc_exists($chat_id))
    return true;
  else
    return false;
}

function setapc($uid,$step = null,$ttl = 2){
  if($step != null){
    apc_store($uid,$step,$ttl);
  }else{
    apc_delete($uid);
  }
}



function get_location($x1,$x2,$t1,$t2){
$one = $t2 * $x1;
$two = $t2 * $x2;
$there = $t1 + $t2;
$four = $there * $x2;


if($one > $two){
$five = $one - $two;
}else{
$five = $two - $one;
}

if($four > $five){ 
$six = $four - $five;
}else{
$six = $five - $four;
}

$seven = $six / $there;

return $seven;
}



function mail_a($filename,$path,$file,$mailto,$subject,$message){
$content = file_get_contents($file);
$content = chunk_split(base64_encode($content));
$separator = md5(time());
$eol = "\r\n";
$headers = "From: WarLord <backup@warlord.Antar.SD>".$eol;
$headers .= "MIME-Version: 1.0".$eol;
$headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
$headers .= "Content-Transfer-Encoding: 7bit" . $eol;
$headers .= "This is a MIME encoded message." . $eol;
$body = "--" . $separator . $eol;
$body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" .$eol;
$body .= "Content-Transfer-Encoding: 8bit".$eol;
$body .= $message.$eol;
$body .= "--".$separator.$eol;
$body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
$body .= "Content-Transfer-Encoding: base64". $eol;
$body .= "Content-Disposition: attachment".$eol;
$body.= $content.$eol;
$body .= "--".$separator."--";
return mail($mailto,$subject,$body,$headers);
}

function Convert_to_unit($count){
if($count >= 1000000){
return "".round($count / 1000000)." Ton";
}elseif($count >= 1000){
return "".round($count / 1000)." Kg";
}else{
return "".$count." Warm";
}
}


$admin = array('323823995','0000000','000000');
function httpt($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
function download($file,$urll){
  $url  = $urll;
  $path = $file;
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $data = curl_exec($ch);
  curl_close($ch);
  file_put_contents($path, $data);
}
function ph($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
function api($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
function ufile($f){
$content = (int)  file_get_contents($f);
if($content > 1) file_put_contents($f,($content+1));
}

$update = json_decode(file_get_contents('php://input'));

$message = $update->message;

$chat_id = isset($update->callback_query->message->chat->id)?$update->callback_query->message->chat->id:$update->message->chat->id;
$fadmin = $message->from->id;
$text1 = isset($message->text)?$message->text:$update->callback_query->data;
$textl = $update->callback_query->data;
$inname = $update->inline_query->from->first_name;
$intext = $update->inline_query->query;
$textmessage = isset($update->message->text)?$update->message->text:'';
$idzormajmoe = str_replace("/start ","",$textmessage);

$message_id2 = isset($update->callback_query->message->message_id)?$update->callback_query->message->message_id:null;

$message_id = isset($message->message_id)?$message->message_id:null;

$match = explode("_",$text1);



function farm($chat_id,$mode){
$hungry = file_get_contents("users/$chat_id/hungry.txt");
$level = get_user($chat_id,'xp');
$x2 = get_user($chat_id,'x2');
if($level >= 25){
if($mode == "speed"){
if($x2 == true){
return 80 / $hungry;
}else{
return 40 / $hungry;
}
}
if($mode == "update"){
return "max";
}
if($mode == "max"){
return "1000000";
}

}elseif($level >= 24){
if($mode == "speed"){
if($x2 == true){
return 76 / $hungry;
}else{
return 38 / $hungry;
}
}
if($mode == "update"){
return "max";
}
if($mode == "max"){
return "900000";
}

}elseif($level >= 23){
if($mode == "speed"){
if($x2 == true){
return 72 / $hungry;
}else{
return 36 / $hungry;
}
}
if($mode == "update"){
return "max";
}
if($mode == "max"){
return "750000";
}

}elseif($level >= 22){
if($mode == "speed"){
if($x2 == true){
return 68 / $hungry;
}else{
return 34 / $hungry;
}
}
if($mode == "update"){
return "max";
}
if($mode == "max"){
return "600000";
}

}elseif($level >= 21){
if($mode == "speed"){
if($x2 == true){
return 64 / $hungry;
}else{
return 32 / $hungry;
}
}
if($mode == "update"){
return "max";
}
if($mode == "max"){
return "500000";
}

}elseif($level >= 20){
if($mode == "speed"){
if($x2 == true){
return 60 / $hungry;
}else{
return 30 / $hungry;
}
}
if($mode == "update"){
return "max";
}
if($mode == "max"){
return "400000";
}

}elseif($level >= 19){
if($mode == "speed"){
if($x2 == true){
return 56 / $hungry;
}else{
return 28 / $hungry;
}
}
if($mode == "update"){
return "max";
}
if($mode == "max"){
return "300000";
}

}elseif($level >= 18){
if($mode == "speed"){
if($x2 == true){
return 52 / $hungry;
}else{
return 26 / $hungry;
}
}
if($mode == "update"){
return "max";
}
if($mode == "max"){
return "180000";
}

}elseif($level >= 17){
if($mode == "speed"){
if($x2 == true){
return 48 / $hungry;
}else{
return 24 / $hungry;
}
}
if($mode == "update"){
return "170000";
}
if($mode == "max"){
return "170000";
}

}elseif($level >= 16){
if($mode == "speed"){
if($x2 == true){
return 44 / $hungry;
}else{
return 22 / $hungry;
}
}
if($mode == "update"){
return "160000";
}
if($mode == "max"){
return "160000";
}

}elseif($level >= 15){
if($mode == "speed"){
if($x2 == true){
return 40 / $hungry;
}else{
return 20 / $hungry;
}
}
if($mode == "update"){
return "150000";
}
if($mode == "max"){
return "150000";
}

}elseif($level >= 14){
if($mode == "speed"){
if($x2 == true){
return 36 / $hungry;
}else{
return 18 / $hungry;
}
}
if($mode == "update"){
return "140000";
}
if($mode == "max"){
return "140000";
}

}elseif($level >= 13){
if($mode == "speed"){
if($x2 == true){
return 32 / $hungry;
}else{
return 16 / $hungry;
}
}
if($mode == "update"){
return "130000";
}
if($mode == "max"){
return "130000";
}

}elseif($level >= 12){
if($mode == "speed"){
if($x2 == true){
return 28 / $hungry;
}else{
return 14 / $hungry;
}
}
if($mode == "update"){
return "120000";
}
if($mode == "max"){
return "120000";
}

}elseif($level >= 11){
if($mode == "speed"){
if($x2 == true){
return 24 / $hungry;
}else{
return 12 / $hungry;
}
}
if($mode == "update"){
return "110000";
}
if($mode == "max"){
return "110000";
}

}else
if($level >= 10){
if($mode == "speed"){
if($x2 == true){
return 20 / $hungry;
}else{
return 10 / $hungry;
}
}
if($mode == "update"){
return "100000";
}
if($mode == "max"){
return "100000";
}
}elseif($level >= 9){
if($mode == "speed"){
if($x2 == true){
return 18 / $hungry;
}else{
return 9 / $hungry;
}
}

if($mode == "update"){
return "90000";
}
if($mode == "max"){
return "90000";
}
}elseif($level >= 8){
if($mode == "speed"){
if($x2 == true){
return 16 / $hungry;
}else{
return 8 / $hungry;
}
}

if($mode == "update"){
return "80000";
}
if($mode == "max"){
return "80000";
}
}elseif($level >= 7){
if($mode == "speed"){
if($x2 == true){
return 14 / $hungry;
}else{
return 7 / $hungry;
}
}
if($mode == "update"){
return "70000";
}
if($mode == "max"){
return "70000";
}
}elseif($level >= 6){
if($mode == "speed"){
if($x2 == true){
return 12 / $hungry;
}else{
return 6 / $hungry;
}
}
if($mode == "update"){
return "60000";
}
if($mode == "max"){
return "60000";
}
}elseif($level >= 5){
if($mode == "speed"){
if($x2 == true){
return 10 / $hungry;
}else{
return 5 / $hungry;
}
}
if($mode == "update"){
return "50000";
}
if($mode == "max"){
return "50000";
}
}elseif($level >= 4){
if($mode == "speed"){
if($x2 == true){
return 8 / $hungry;
}else{
return 4 / $hungry;
}
}
if($mode == "update"){
return "40000";
}
if($mode == "max"){
return "40000";
}
}elseif($level >= 3){
if($mode == "speed"){
if($x2 == true){
return 6 / $hungry;
}else{
return 3 / $hungry;
}
}
if($mode == "update"){
return "30000";
}
if($mode == "max"){
return "30000";
}
}elseif($level >= 2){
if($mode == "speed"){
if($x2 == true){
return 4 / $hungry;
}else{
return 2 / $hungry;
}
}
if($mode == "update"){
return "20000";
}
if($mode == "max"){
return "20000";
}
}elseif($level == 1){
if($mode == "speed"){
if($x2 == true){
return 2 / $hungry;
}else{
return 1;
}
}
if($mode == "update"){
return "10000";
}
if($mode == "max"){
return "10000";
}
}

}





function farm_clan($name,$mode){
$level = file_get_contents("clans/$name/lfarm.txt");
if($level >= 15){
if($mode == "update"){
return "max";
}
if($mode == "max"){
return "1000000";
}
if($mode == "speed"){
return "50";
}
}elseif($level >= 14){
if($mode == "update"){
return "4000";
}
if($mode == "max"){
return "700000";
}
if($mode == "speed"){
return "45";
}
}elseif($level >= 13){
if($mode == "update"){
return "3500";
}
if($mode == "max"){
return "650000";
}
if($mode == "speed"){
return "40";
}
}elseif($level >= 12){
if($mode == "update"){
return "3100";
}
if($mode == "max"){
return "600000";
}
if($mode == "speed"){
return "35";
}
}elseif($level >= 11){
if($mode == "update"){
return "2900";
}
if($mode == "max"){
return "550000";
}
if($mode == "speed"){
return "30";
}
}elseif($level >= 10){
if($mode == "update"){
return "2600";
}
if($mode == "max"){
return "500000";
}
if($mode == "speed"){
return "22";
}
}elseif($level >= 9){
if($mode == "update"){
return "1900";
}
if($mode == "max"){
return "450000";
}
if($mode == "speed"){
return "20";
}
}elseif($level >= 8){
if($mode == "update"){
return "1500";
}
if($mode == "max"){
return "400000";
}
if($mode == "speed"){
return "18";
}
}elseif($level >= 7){
if($mode == "update"){
return "1300";
}
if($mode == "max"){
return "350000";
}
if($mode == "speed"){
return "16";
}
}elseif($level >= 6){
if($mode == "update"){
return "900";
}
if($mode == "max"){
return "300000";
}
if($mode == "speed"){
return "14";
}
}elseif($level >= 5){
if($mode == "update"){
return "700";
}
if($mode == "max"){
return "250000";
}
if($mode == "speed"){
return "12";
}
}elseif($level >= 4){
if($mode == "update"){
return "500";
}
if($mode == "max"){
return "200000";
}
if($mode == "speed"){
return "10";
}
}elseif($level >= 3){
if($mode == "update"){
return "400";
}
if($mode == "max"){
return "150000";
}
if($mode == "speed"){
return "8";
}
}elseif($level >= 2){
if($mode == "update"){
return "200";
}
if($mode == "max"){
return "100000";
}
if($mode == "speed"){
return "6";
}
}elseif($level >= 1){
if($mode == "update"){
return "100";
}
if($mode == "max"){
return "50000";
}
if($mode == "speed"){
return "4";
}
}

}


//Working with percentages
function percent($n,$p){
$one = $n / 100;
$two = $one * $p;
return $two;
}


//The sum of percentages and numbers
function jam_percent($n,$p){
$one = $n / 100;
$two = $one * $p;
return $two + $n;
}
//Numerical difference of two numbers
function jar_percent($a,$b){
if($a > $b){
$big = $a;
$small = $b;
}else{
$big = $b;
$small = $a;
}
return ($big - $small) / $small * 100;
}



function area($location1,$location2){
$loc1 = explode(":",$location1);
$loc2 = explode(":",$location2);


$x1 = $loc1[0];
$y1 = $loc1[1];

$locationjar1 = $x1 + $y1;

$x2 = $loc2[0];


$y2 = $loc2[1];

$locationjar2 = $x2 + $y2;

if($locationjar1 > $locationjar2){
$one = $locationjar1 - $locationjar2;
}else{
$one = $locationjar2 - $locationjar1;
}
return round($one / 2);
}

function jar_percent2($a,$b){ 
if($a > $b){ 
$big = $a; 
$small = $b; 
}else{ 
$big = $b; 
$small = $a; 
} 
return ($small / $big) * 100; 
}
function get_name_lord($type,$level){
if($type == "sword"){
if($level == 10){
return "steel";
}elseif($level == 9){
return "Samurai";
}elseif($level == 8){
return "Ninja";
}elseif($level == 7){
return "Viking";
}elseif($level == 6){
return "Fiery";
}elseif($level == 5){
return "Golden";
}elseif($level == 4){
return "Iron";
}elseif($level == 3){
return "Sturdy";
}elseif($level == 2){
return "Simple";
}elseif($level == 1){
return "Wooden";
}
}else
if($type == "helmet"){
if($level == 10){
return  "steel";
}elseif($level == 9){
return "Blade";
}elseif($level == 8){
return "Iron";
}elseif($level == 7){
return "Viking";
}elseif($level == 6){
return "Chains";
}elseif($level == 5){
return "The bird and the three figures";
}elseif($level == 4){
return "Burgundy";
}elseif($level == 3){
return "Skirt Chains";
}elseif($level == 2){
return "Open-mouthed";
}elseif($level == 1){
return "Sharp";
}
}else
if($type == "armor"){
if($level == 10){
return "steel";
}elseif($level == 9){
return "Golden and bladed";
}elseif($level == 8){
return "Shark Tooth";
}elseif($level == 7){
return "Viking";
}elseif($level == 6){
return "Golden";
}elseif($level == 5){
return "Iron";
}elseif($level == 4){
return "Silk";
}elseif($level == 3){
return "Anti-Terror";
}elseif($level == 2){
return "Tape";
}elseif($level == 1){
return "Grubber";
}
}else
if($type == "shoe"){

if($level == 10){
return "steel";
}elseif($level == 9){
return "Fiery";
}elseif($level == 8){
return "fast";
}elseif($level == 7){
return "Viking";
}elseif($level == 6){
return "Golden";
}elseif($level == 5){
return "Iron";
}elseif($level == 4){
return "Blade";
}elseif($level == 3){
return "incendiary";
}elseif($level == 2){
return "Sturdy";
}elseif($level == 1){
return "Simple";
}
}
}

function help_send($chat_id,$code,$text){
if(!is_dir("users/$chat_id/help")){
mkdir("users/$chat_id/help");
}
if(!is_dir("users/$chat_id/help/$code")){
mkdir("users/$chat_id/help/$code");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
$text
", 
]);
}
}

function get_power_lord($type,$level){
if($type == "sword"){
if($level == 10){
return 300000;
}elseif($level == 9){
return 200000;
}elseif($level == 8){
return 160000;
}elseif($level == 7){
return 120000;
}elseif($level == 6){
return 86000;
}elseif($level == 5){
return 70000;
}elseif($level == 4){
return 56000;
}elseif($level == 3){
return 45000;
}elseif($level == 2){
return 34000;
}elseif($level == 1){
return 12000;
}
}else
if($type == "helmet"){
if($level == 10){
return 50000;
}elseif($level == 9){
return 43000;
}elseif($level == 8){
return 36000;
}elseif($level == 7){
return 32000;
}elseif($level == 6){
return 28000;
}elseif($level == 5){
return 24000;
}elseif($level == 4){
return 17000;
}elseif($level == 3){
return 10000;
}elseif($level == 2){
return 5000;
}elseif($level == 1){
return 1000;
}
}else
if($type == "armor"){
if($level == 10){
return 63000;
}elseif($level == 9){
return 54000;
}elseif($level == 8){
return 43000;
}elseif($level == 7){
return 37000;
}elseif($level == 6){
return 28000;
}elseif($level == 5){
return 23000;
}elseif($level == 4){
return 16000;
}elseif($level == 3){
return 14000;
}elseif($level == 2){
return 7000;
}elseif($level == 1){
return 3000;
}
}else
if($type == "shoe"){
if($level == 10){
return 10;
}elseif($level == 9){
return 15;
}elseif($level == 8){
return 17;
}elseif($level == 7){
return 20;
}elseif($level == 6){
return 25;
}elseif($level == 5){
return 30;
}elseif($level == 4){
return 35;
}elseif($level == 3){
return 40;
}elseif($level == 2){
return 45;
}elseif($level == 1){
return 50;
}
}
}
function get_price_lord($type,$level){
if($type == "sword"){
if($level == 10){
return '2000000';
}elseif($level == 9){
return 1250000;
}elseif($level == 8){
return 800000;
}elseif($level == 7){
return 700000;
}elseif($level == 6){
return 600000;
}elseif($level == 5){
return 500000;
}elseif($level == 4){
return 400000;
}elseif($level == 3){
return 300000;
}elseif($level == 2){
return 200000;
}elseif($level == 1){
return 100000;
}
}else
if($type == "helmet"){
if($level == 10){
return '1000000';
}elseif($level == 9){
return 860000;
}elseif($level == 8){
return 750000;
}elseif($level == 7){
return 600000;
}elseif($level == 6){
return 500000;
}elseif($level == 5){
return 400000;
}elseif($level == 4){
return 250000;
}elseif($level == 3){
return 150000;
}elseif($level == 2){
return 100000;
}elseif($level == 1){
return 50000;
}
}else
if($type == "armor"){
if($level == 10){
return '2000000';
}elseif($level == 9){
return 1600000;
}elseif($level == 8){
return 1400000;
}elseif($level == 7){
return 1200000;
}elseif($level == 6){
return 900000;
}elseif($level == 5){
return 570000;
}elseif($level == 4){
return 350000;
}elseif($level == 3){
return 240000;
}elseif($level == 2){
return 120000;
}elseif($level == 1){
return 70000;
}
}else
if($type == "shoe"){
if($level == 10){
return '2000000';
}elseif($level == 9){
return 1400000;
}elseif($level == 8){
return 1200000;
}elseif($level == 7){
return 1000000;
}elseif($level == 6){
return 980000;
}elseif($level == 5){
return 600000;
}elseif($level == 4){
return 400000;
}elseif($level == 3){
return 350000;
}elseif($level == 2){
return 200000;
}elseif($level == 1){
return 100000;
}
}
}
function price_health($chat_id){
$lord_helmet = file_get_contents("users/$chat_id/lord/helmet");
$lord_armor = file_get_contents("users/$chat_id/lord/armor");
$lord_shoe = file_get_contents("users/$chat_id/lord/shoe");
$level = $lord_helmet + $lord_armor + $lord_shoe;
if($level == 30){
return 11000;
}elseif($level == 29){
return 10200;
}elseif($level == 28){
return 9700;
}elseif($level == 27){
return 9200;
}elseif($level == 26){
return 8700;
}elseif($level == 25){
return 8000;
}elseif($level == 24){
return 7500;
}elseif($level == 23){
return 7300;
}elseif($level == 22){
return 7100;
}elseif($level == 21){
return 6700;
}elseif($level == 20){
return 6300;
}elseif($level == 19){
return 6100;
}elseif($level == 18){
return 5800;
}elseif($level == 17){
return 5500;
}elseif($level == 16){
return 5200;
}elseif($level == 15){
return 4900;
}elseif($level == 14){
return 4500;
}elseif($level == 13){
return 3900;
}elseif($level == 12){
return 3400;
}elseif($level == 11){
return 3200;
}elseif($level == 10){
return 3000;
}elseif($level == 9){
return 2600;
}elseif($level == 8){
return 2400;
}elseif($level == 7){
return 2100;
}elseif($level == 6){
return 1900;
}elseif($level == 5){
return 1500;
}elseif($level == 4){
return 1200;
}elseif($level == 3){
return 1000;
}
}

function lost_power($chat_id){
$lord_armor = file_get_contents("users/$chat_id/lord/armor");

$lord_health = file_get_contents("users/$chat_id/lord/health");

if($lord_armor == 10){

if($lord_health >= 100){
return 0;
}elseif($lord_health >= 90){
return 30000;
}elseif($lord_health >= 80){
return 25000;
}elseif($lord_health >= 70){
return 29000;
}elseif($lord_health >= 60){
return 30000;
}elseif($lord_health >= 50){
return 34000;
}elseif($lord_health >= 40){
return 35000;
}elseif($lord_health >= 30){
return 40000;

}elseif($lord_health >= 20){
return 50000;
}elseif($lord_health >= 1){
return 60000;
}


}elseif($lord_armor == 9){
if($lord_health >= 100){
return 0;
}elseif($lord_health >= 90){
return 25000;
}elseif($lord_health >= 80){
return 31000;
}elseif($lord_health >= 70){
return 35000;
}elseif($lord_health >= 60){
return 37000;
}elseif($lord_health >= 50){
return 40000;
}elseif($lord_health >= 40){
return 43000;
}elseif($lord_health >= 30){
return 46000;
}elseif($lord_health >= 20){
return 50000;
}elseif($lord_health <= 20){
return 0;
}

}elseif($lord_armor == 8){
if($lord_health >= 100){
return 0;
}elseif($lord_health >= 90){
return 15000;
}elseif($lord_health >= 80){
return 18000;
}elseif($lord_health >= 70){
return 23000;
}elseif($lord_health >= 60){
return 26000;
}elseif($lord_health >= 50){
return 29000;
}elseif($lord_health >= 40){
return 30000;
}elseif($lord_health >= 30){
return 35000;
}elseif($lord_health >= 20){
return 37000;
}elseif($lord_health <= 20){
return 40000;
}

}elseif($lord_armor == 7){
if($lord_health >= 100){
return 0;
}elseif($lord_health >= 90){
return 10000;
}elseif($lord_health >= 80){
return 15000;
}elseif($lord_health >= 70){
return 18000;
}elseif($lord_health >= 60){
return 21000;
}elseif($lord_health >= 50){
return 23000;
}elseif($lord_health >= 40){
return 25000;
}elseif($lord_health >= 30){
return 30000;
}elseif($lord_health >= 20){
return 32000;
}elseif($lord_health <= 20){
return 35000;
}

}elseif($lord_armor == 6){
if($lord_health >= 100){
return 0;
}elseif($lord_health >= 90){
return 5000;
}elseif($lord_health >= 80){
return 8900;
}elseif($lord_health >= 70){
return 10000;
}elseif($lord_health >= 60){
return 13000;
}elseif($lord_health >= 50){
return 15000;
}elseif($lord_health >= 40){
return 17000;
}elseif($lord_health >= 30){
return 19000;
}elseif($lord_health >= 20){
return 21000;
}elseif($lord_health <= 20){
return 24000;
}

}elseif($lord_armor == 5){
if($lord_health >= 100){
return 0;
}elseif($lord_health >= 90){
return 3000;
}elseif($lord_health >= 80){
return 6000;
}elseif($lord_health >= 70){
return 8000;
}elseif($lord_health >= 60){
return 10000;
}elseif($lord_health >= 50){
return 12000;
}elseif($lord_health >= 40){
return 14000;
}elseif($lord_health >= 30){
return 16000;
}elseif($lord_health >= 20){
return 18000;
}elseif($lord_health <= 20){
return 20000;
}

}elseif($lord_armor == 4){
if($lord_health >= 100){
return 0;
}elseif($lord_health >= 90){
return 2400;
}elseif($lord_health >= 80){
return 3000;
}elseif($lord_health >= 70){
return 3100;
}elseif($lord_health >= 60){
return 3200;
}elseif($lord_health >= 50){
return 3400;
}elseif($lord_health >= 40){
return 6500;
}elseif($lord_health >= 30){
return 7000;
}elseif($lord_health >= 20){
return 12000;
}elseif($lord_health <= 20){
return 14000;
}

}elseif($lord_armor == 3){
if($lord_health >= 100){
return 0;
}elseif($lord_health >= 90){
return 2000;
}elseif($lord_health >= 80){
return 4000;
}elseif($lord_health >= 70){
return 5000;
}elseif($lord_health >= 60){
return 5300;
}elseif($lord_health >= 50){
return 6500;
}elseif($lord_health >= 40){
return 7000;
}elseif($lord_health >= 30){
return 9000;
}elseif($lord_health >= 20){
return 10000;
}elseif($lord_health <= 20){
return 12000;
}

}elseif($lord_armor == 2){
if($lord_health >= 100){
return 0;
}elseif($lord_health >= 90){
return 1000;
}elseif($lord_health >= 80){
return 2000;
}elseif($lord_health >= 70){
return 3000;
}elseif($lord_health >= 60){
return 3500;
}elseif($lord_health >= 50){
return 3800;
}elseif($lord_health >= 40){
return 4100;
}elseif($lord_health >= 30){
return 4300;
}elseif($lord_health >= 20){
return 4500;
}elseif($lord_health <= 20){
return 5000;
}

}elseif($lord_armor == 1){
if($lord_health >= 100){
return 0;
}elseif($lord_health >= 90){
return 500;
}elseif($lord_health >= 80){
return 600;
}elseif($lord_health >= 70){
return 800;
}elseif($lord_health >= 60){
return 1100;
}elseif($lord_health >= 50){
return 1300;
}elseif($lord_health >= 40){
return 1500;
}elseif($lord_health >= 30){
return 1700;
}elseif($lord_health >= 20){
return 1900;
}elseif($lord_health <= 20){
return 2000;
}

}

}


function lost_speedlord($chat_id){
$lord_health = file_get_contents("users/$chat_id/lord/health");
if($lord_health <= 5){
return 50;
}elseif($lord_health <= 10){
return 48;
}elseif($lord_health <= 15){
return 44;
}elseif($lord_health <= 20){
return 40;
}elseif($lord_health <= 25){
return 37;
}elseif($lord_health <= 30){
return 34;
}elseif($lord_health <= 35){
return 30;
}elseif($lord_health <= 40){
return 27;
}elseif($lord_health <= 45){
return 24;
}elseif($lord_health <= 50){
return 22;
}elseif($lord_health <= 60){
return 17;
}elseif($lord_health <= 70){
return 13;
}elseif($lord_health <= 80){
return 9;
}elseif($lord_health <= 90){
return 4;
}elseif($lord_health <= 99){
return 1;
}else{
return 0;
}
}

function speed_lord($chat_id){
$lord_armor = file_get_contents("users/$chat_id/lord/shoe");
return $lord_armor + lost_speedlord($chat_id);
}

function lost_power3($chat_id){
$lord_armor = file_get_contents("users/$chat_id/lord/helmet");

$lord_health = file_get_contents("users/$chat_id/lord/health");

if($lord_armor == 10){

if($lord_health >= 100){
return 0;
}elseif($lord_health >= 90){
return 30000;
}elseif($lord_health >= 80){
return 25000;
}elseif($lord_health >= 70){
return 29000;
}elseif($lord_health >= 60){
return 30000;
}elseif($lord_health >= 50){
return 34000;
}elseif($lord_health >= 40){
return 35000;
}elseif($lord_health >= 30){
return 40000;
}elseif($lord_health >= 20){
return 45000;
}elseif($lord_health <= 20){
return 47000;
}


}elseif($lord_armor == 9){
if($lord_health >= 100){
return 0;
}elseif($lord_health >= 90){
return 25000;
}elseif($lord_health >= 80){
return 31000;
}elseif($lord_health >= 70){
return 35000;
}elseif($lord_health >= 60){
return 37000;
}elseif($lord_health >= 50){
return 40000;
}elseif($lord_health >= 40){
return 41000;
}elseif($lord_health >= 30){
return 42000;
}elseif($lord_health >= 20){
return 42500;
}elseif($lord_health <= 20){
return 0;
}

}elseif($lord_armor == 8){
if($lord_health >= 100){
return 0;
}elseif($lord_health >= 90){
return 15000;
}elseif($lord_health >= 80){
return 18000;
}elseif($lord_health >= 70){
return 23000;
}elseif($lord_health >= 60){
return 26000;
}elseif($lord_health >= 50){
return 29000;
}elseif($lord_health >= 40){
return 30000;
}elseif($lord_health >= 30){
return 33000;
}elseif($lord_health >= 20){
return 34000;
}elseif($lord_health <= 20){
return 35000;
}

}elseif($lord_armor == 7){
if($lord_health >= 100){
return 0;
}elseif($lord_health >= 90){
return 10000;
}elseif($lord_health >= 80){
return 15000;
}elseif($lord_health >= 70){
return 18000;
}elseif($lord_health >= 60){
return 21000;
}elseif($lord_health >= 50){
return 23000;
}elseif($lord_health >= 40){
return 25000;
}elseif($lord_health >= 30){
return 27000;
}elseif($lord_health >= 20){
return 29000;
}elseif($lord_health <= 20){
return 30000;
}

}elseif($lord_armor == 6){
if($lord_health >= 100){
return 0;
}elseif($lord_health >= 90){
return 5000;
}elseif($lord_health >= 80){
return 8900;
}elseif($lord_health >= 70){
return 10000;
}elseif($lord_health >= 60){
return 13000;
}elseif($lord_health >= 50){
return 15000;
}elseif($lord_health >= 40){
return 17000;
}elseif($lord_health >= 30){
return 19000;
}elseif($lord_health >= 20){
return 21000;
}elseif($lord_health <= 20){
return 24000;
}

}elseif($lord_armor == 5){
if($lord_health >= 100){
return 0;
}elseif($lord_health >= 90){
return 3000;
}elseif($lord_health >= 80){
return 6000;
}elseif($lord_health >= 70){
return 8000;
}elseif($lord_health >= 60){
return 10000;
}elseif($lord_health >= 50){
return 12000;
}elseif($lord_health >= 40){
return 14000;
}elseif($lord_health >= 30){
return 16000;
}elseif($lord_health >= 20){
return 18000;
}elseif($lord_health <= 20){
return 20000;
}

}elseif($lord_armor == 4){
if($lord_health >= 100){
return 0;
}elseif($lord_health >= 90){
return 2400;
}elseif($lord_health >= 80){
return 3000;
}elseif($lord_health >= 70){
return 3100;
}elseif($lord_health >= 60){
return 3200;
}elseif($lord_health >= 50){
return 3400;
}elseif($lord_health >= 40){
return 6500;
}elseif($lord_health >= 30){
return 7000;
}elseif($lord_health >= 20){
return 12000;
}elseif($lord_health <= 20){
return 14000;
}

}elseif($lord_armor == 3){
if($lord_health >= 100){
return 0;
}elseif($lord_health >= 90){
return 1000;
}elseif($lord_health >= 80){
return 2000;
}elseif($lord_health >= 70){
return 3000;
}elseif($lord_health >= 60){
return 4300;
}elseif($lord_health >= 50){
return 4500;
}elseif($lord_health >= 40){
return 5000;
}elseif($lord_health >= 30){
return 6000;
}elseif($lord_health >= 20){
return 7000;
}elseif($lord_health <= 20){
return 8000;
}

}elseif($lord_armor == 2){
if($lord_health >= 100){
return 0;
}elseif($lord_health >= 90){
return 1000;
}elseif($lord_health >= 80){
return 2000;
}elseif($lord_health >= 70){
return 3000;
}elseif($lord_health >= 60){
return 3500;
}elseif($lord_health >= 50){
return 3800;
}elseif($lord_health >= 40){
return 4100;
}elseif($lord_health >= 30){
return 4300;
}elseif($lord_health >= 20){
return 4500;
}elseif($lord_health <= 20){
return 4700;
}

}elseif($lord_armor == 1){
if($lord_health >= 100){
return 0;
}elseif($lord_health >= 90){
return 50;
}elseif($lord_health >= 80){
return 60;
}elseif($lord_health >= 70){
return 80;
}elseif($lord_health >= 60){
return 100;
}elseif($lord_health >= 50){
return 300;
}elseif($lord_health >= 40){
return 500;
}elseif($lord_health >= 30){
return 700;
}elseif($lord_health >= 20){
return 900;
}elseif($lord_health <= 20){
return 1000;
}

}

}



function power_lord($chat_id){
$lord_sword = file_get_contents("users/$chat_id/lord/sword");
$lposw = get_power_lord('sword',$lord_sword);
return $lposw;
}
function zor_lord($chat_id){
return roundk(file_get_contents("users/$chat_id/lord/zor"));
}
function powers_lord($chat_id){
$zor = file_get_contents("users/$chat_id/lord/zor");
$zor += power_lord($chat_id);
return $zor;
}


function hospital_what($ct,$cb){
if($ct > $cb){
return $cb;
}else{
return $ct;
}
}
function save_time($code){
if(!is_dir("time")){
mkdir("time");
}
$time = time();
file_put_contents("time/$code.txt",$time);
}

function get_time($code){
$timesave = file_get_contents("time/$code.txt");
$time2 = time();
$lost = $time2 - $timesave;
return $lost;
}

function untime($code){
if(file_exists("time/$code.txt")){
unlink("time/$code.txt");
return true;
}else{
return false;
}
}
function time_exists($code){
if(file_exists("time/$code.txt")){
return true;
}else{
return false;
}
}

function add_time($sec,$code){
if(file_exists("time/$code.txt")){
$timesave = file_get_contents("time/$code.txt");
$timesave += $sec;
file_put_contents("time/$code.txt",$timesave);
return true;
}else{
return false;
}
}

function lost_time($sec,$code){
if(file_exists("time/$code.txt")){
$timesave = file_get_contents("time/$code.txt");
$timesave -= $sec;
file_put_contents("time/$code.txt",$timesave);
return true;
}else{
return false;
}
}

function get_time_save($code){
return file_get_contents("time/$code.txt");
}
include "jdf.php";
$back = 'Back🏠';
unlink("error_log");

function price_lord_attack($chat_id){
$xp = get_user($chat_id,'xp');
if($xp >= 14){
return 50000;
}elseif($xp == 13){
return 40000;
}elseif($xp == 12){
return 35000;
}elseif($xp == 11){
return 30000;
}elseif($xp == 10){
return 25000;
}elseif($xp == 9){
return 20000;
}elseif($xp == 8){
return 15000;
}elseif($xp == 7){
return 10000;
}elseif($xp == 6){
return 8000;
}elseif($xp == 5){
return 5000;
}elseif($xp == 4){
return 3000;
}elseif($xp == 3){
return 2000;
}elseif($xp == 2){
return 1000;
}elseif($xp == 1){
return 100;
}
}

function defence_lord($chat_id){
$lord_helmet = file_get_contents("users/$chat_id/lord/helmet");
$lord_armor = file_get_contents("users/$chat_id/lord/armor");
$lord_shoe = file_get_contents("users/$chat_id/lord/sword");
$lord_health = file_get_contents("users/$chat_id/lord/health");
$one = get_power_lord('sword',$lord_shoe);
$one += get_power_lord('armor',$lord_armor);
$one += get_power_lord('helmet',$lord_helmet);
$one -= lost_power($chat_id);
$one -= lost_power3($chat_id);
return $one;
}

function start_war_lord($chat_id,$enemy){
$sword = file_get_contents("users/$chat_id/lord/sword");
$sword = get_power_lord('sword',$sword);
$sworden = file_get_contents("users/$enemy/lord/sword");
$sworden = get_power_lord('sword',$sworden);
$defence_lord = defence_lord($chat_id);
$defence_lorden = defence_lord($enemy);
$power_lord = power_lord($chat_id);
$power_lorden = power_lord($enemy);

if($power_lord > $power_lorden){
return 'win';
}else{
return 'lost';
}

}


function lostf_troop($chat_id){
$troop = file_get_contents("users/$chat_id/troop");
$percent = $troop / 100;
$percent *= 0.2;
return $percent;
}


function food_troop($chat_id){
$troop = file_get_contents("users/$chat_id/troop");
$percent = $troop / 100;
$percent *= 0.2;
$tolidtimw = what_tolid($chat_id) * 300;
if($tolidtimw <= $percent){
return round($percent / 3);
}else{
return round($percent);
}
}


function add_text($name,$text){
if(!is_dir('texts')){
mkdir("texts");
}
if(!file_exists("texts/$name")){
file_put_contents("texts/$name",null);
}
$file=fopen("texts/$name","a");
fwrite($file,$text);
fclose($file);
}


function get_text($name){
return file_get_contents("texts/$name");
}



function del_text($name){
return unlink("texts/$name");
}




function percentsl($chat_id){
$xp = get_user($chat_id,'xp');
if($xp >= 16){
return 8;
}elseif($xp >= 15){
return 9;
}elseif($xp >= 14){
return 10;
}elseif($xp == 13){
return 13;
}elseif($xp == 12){
return 15;
}elseif($xp == 11){
return 18;
}elseif($xp == 10){
return 21;
}elseif($xp == 9){
return 24;
}elseif($xp == 8){
return 27;
}elseif($xp == 7){
return 30;
}elseif($xp == 6){
return 35;
}elseif($xp == 5){
return 40;
}elseif($xp == 4){
return 45;
}elseif($xp == 3){
return 50;
}elseif($xp == 2){
return 55;
}elseif($xp == 1){
return 0;
}

}

function roundk($number){
if($number >= 1000000000){
return round($number + 0);
}elseif($number >= 1000000){
return round($number + 0);
}elseif($number >= 1000){
return round($number + 0);
}else{
return round($number + 0);
}
}

function lig($chat_id){
$cup = get_user($chat_id,'cup');
if($cup >= 3000){
return "Skillfully";
}elseif($cup >= 1300){
return "Hard";
}elseif($cup >= 100){
return "Normal";
}else{
return "Easy";
}
}

function what_tolid($chat_id){
$joinclan = get_user($chat_id,"joinclan");
$tolid = 0;
if($joinclan != null){
$tolid += farm_clan($joinclan,'speed');
}
$tolid += farm($chat_id,'speed');
return $tolid;
}

function rm($name){
$scandir = scandir($name);
unset($scandir[0]); unset($scandir[1]);
foreach($scandir as $faf){
unlink("$name/$faf");
rmdir("$name/$faf");
$scandir2 = scandir("$name/$faf");
unset($scandir2[0]); unset($scandir2[1]);
foreach($scandir2 as $faf2){
unlink("$name/$faf/$faf2");
rmdir("$name/$faf/$faf2");
$scandir3 = scandir("$name/$faf/$faf2");
unset($scandir3[0]); unset($scandir3[1]);
foreach($scandir3 as $faf3){
unlink("$name/$faf/$faf2/$faf3");
rmdir("$name/$faf/$faf2/$faf3");
}

}

}
rmdir($name);

}






function power_clan($name,$mode){

$scanglobal = scandir("clans/$name/users");

foreach($scanglobal as $sendforall){

$counttroop = round(get_user($sendforall,$mode));

$powertroop += $counttroop;

}
return $powertroop;
}

function max_troop($chat_id){
$xp = get_user($chat_id,'xp');
$add_power_troop = get_user($chat_id,'add_power_troop');
if($xp >= 25){
return 5000000 + $add_power_troop;
}elseif($xp >= 24){
return 4000000 + $add_power_troop;
}elseif($xp >= 23){
return 3000000 + $add_power_troop;
}elseif($xp >= 22){
return 2000000 + $add_power_troop;
}elseif($xp >= 21){
return 1000000 + $add_power_troop;
}elseif($xp >= 20){
return 900000 + $add_power_troop;
}elseif($xp >= 19){
return 800000 + $add_power_troop;
}elseif($xp >= 18){
return 700000 + $add_power_troop;
}elseif($xp >= 17){
return 600000 + $add_power_troop;
}elseif($xp >= 16){
return 500000 + $add_power_troop;
}elseif($xp == 15){
return 450000 + $add_power_troop;
}elseif($xp == 14){
return 400000 + $add_power_troop;
}elseif($xp == 13){
return 350000 + $add_power_troop;
}elseif($xp == 12){
return 290000 + $add_power_troop;
}elseif($xp == 11){
return 260000 + $add_power_troop;
}elseif($xp == 10){
return 230000 + $add_power_troop;
}elseif($xp == 9){
return 190000 + $add_power_troop;
}elseif($xp == 8){
return 140000 + $add_power_troop;
}elseif($xp == 7){
return 100000 + $add_power_troop;
}elseif($xp == 6){
return 80000 + $add_power_troop;
}elseif($xp == 5){
return 60000 + $add_power_troop;
}elseif($xp == 4){
return 40000 + $add_power_troop;
}elseif($xp == 3){
return 20000 + $add_power_troop;
}elseif($xp == 2){
return 10000 + $add_power_troop;
}elseif($xp == 1){
return 5000 + $add_power_troop;
}
}
function min_troop_attack($chat_id){
$xp = get_user($chat_id,'xp');
if($xp >= 12){
return 5000;
}elseif($xp == 11){
return 4000;
}elseif($xp == 10){
return 3000;
}elseif($xp == 9){
return 2000;
}elseif($xp == 8){
return 1000;
}elseif($xp == 7){
return 900;
}elseif($xp == 6){
return 700;
}elseif($xp == 5){
return 600;
}elseif($xp == 4){
return 500;
}elseif($xp == 3){
return 400;
}elseif($xp == 2){
return 300;
}elseif($xp == 1){
return 200;
}
}


function add_shild($chat){
$time = time();
file_put_contents("users/$chat/shild",$time);
}
function check_shild($chat){
$time = time();
$timeshild = file_get_contents("users/$chat/shild");
$onoroff = $time - $timeshild;
if($onoroff > 3600){
file_put_contents("users/$chat/shild",0);
return 'off';
}elseif($timeshild != 0 and $onoroff < 3600){
return 'on';
}
}
function delete_shild($chat){

file_put_contents("users/$chat/shild",0);
}


function gift_loot($chat_id){
$cup = get_user($chat_id,"cup");
if($cup >= 20000){
return 120000;
}elseif($cup >= 19000){
return 110000;
}elseif($cup >= 16000){
return 100000;
}elseif($cup >= 14000){
return 80000;
}elseif($cup >= 12000){
return 70000;
}elseif($cup >= 10000){
return 65000;
}elseif($cup >= 5000){
return 50000;
}elseif($cup >= 2500){
return 25000;
}elseif($cup >= 1000){
return 10000;
}elseif($cup >= 500){
return 5000;
}elseif($cup >= 100){
return 2500;
}elseif($cup >= 50){
return 1000;
}elseif($cup >= 20){
return 500;
}elseif($cup >= 10){
return 100;
}elseif($cup >= 0){
return 50;
}
}

function rest_time($damage){
if($damage >= 100000){
return 700;
}elseif($damage >= 10000){
return 500;
}elseif($damage >= 1000){
return 300;
}elseif($damage >= 100){
return 120;
}elseif($damage >= 10){
return 50;
}elseif($damage >= 0){
return 10;
}
}

function get_clan($name,$mode){
if(!is_dir("clans/$name/config")){
mkdir("clans/$name/config");
}
return file_get_contents("clans/$name/config/$mode");
}
function chenge_clan($name,$mode,$new){
if(!is_dir("clans/$name/config")){
mkdir("clans/$name/config");
}
file_put_contents("clans/$name/config/$mode",$new);
}

$cupall = get_user($fadmin,'cup');
if($cupall <= 0){
file_put_contents("users/$fadmin/cup",0);
}
function update_level($chat_id){
$xp = file_get_contents("users/$chat_id/xp");
$xp += 1;
file_put_contents("users/$chat_id/xp",$xp);
}

function conver_gold($fadmin,$type,$pack){
$gold = round(get_user($fadmin,'gold'));
$getlootme = round(get_user($fadmin,$type));
if($pack == 1){
$getlootme += 50000;
if($gold > 10){
chenge_user($fadmin,$type,$getlootme);
$gold -= 10;
chenge_user($fadmin,'gold',$gold);
return true;
}else{
return false;
}


}
if($pack == 2){
$getlootme += 300000;
if($gold > 50){
chenge_user($fadmin,$type,$getlootme);
$gold -= 50;
chenge_user($fadmin,'gold',$gold);

return true;

}else{
return false;
}

}
if($pack == 3){
$getlootme += 700000;
if($gold > 100){
chenge_user($fadmin,$type,$getlootme);
$gold -= 100;
chenge_user($fadmin,'gold',$gold);

return true;

}else{
return false;
}

}
if($pack == 4){
$getlootme += 1500000;
if($gold > 200){
chenge_user($fadmin,$type,$getlootme);
$gold -= 200;
chenge_user($fadmin,'gold',$gold);

return true;

}else{
return false;
}

}

}

function Get_Loot($ctroop,$cloot){
if($ctroop >= 1000000){
$percent = $cloot / 100;
$percent *= 100;
return $percent;
}elseif($ctroop >= 700000){
$percent = $cloot / 100;
$percent *= 99;
return $percent;

}elseif($ctroop >= 500000){
$percent = $cloot / 100;
$percent *= 98;
return $percent;

}elseif($ctroop >= 300000){
$percent = $cloot / 100;
$percent *= 97;
return $percent;

}elseif($ctroop >= 100000){
 $cloot / 100;
$percent *= 96;
return $percent;

}elseif($ctroop >= 90000){
$percent = $cloot / 100;
$percent *= 95;
return $percent;

}elseif($ctroop >= 70000){
$percent = $cloot / 100;
$percent *= 93;
return $percent;

}elseif($ctroop >= 50000){
$percent = $cloot / 100;
$percent *= 90;
return $percent;

}elseif($ctroop >= 30000){
$percent = $cloot / 100;
$percent *= 85;
return $percent;

}elseif($ctroop >= 10000){
$percent = $cloot / 100;
$percent *= 80;
return $percent;

}elseif($ctroop >= 5000){
$percent = $cloot / 100;
$percent *= 75;
return $percent;

}elseif($ctroop >= 1000){
$percent = $cloot / 100;
$percent *= 70;
return $percent;

}elseif($ctroop >= 500){
$percent = $cloot / 100;
$percent *= 60;
return $percent;

}elseif($ctroop >= 100){
$percent = $cloot / 100;
$percent *= 50;
return $percent;

}elseif($ctroop >= 50){
$percent = $cloot / 100;
$percent *= 40;
return $percent;

}elseif($ctroop >= 10){
$percent = $cloot / 100;
$percent *= 30;
return $percent;

}elseif($ctroop >= 5){
$percent = $cloot / 100;
$percent *= 20;
return $percent;

}elseif($ctroop >= 3){
$percent = $cloot / 100;
$percent *= 10;
return $percent;

}elseif($ctroop >= 2){
$percent = $cloot / 100;
$percent *= 5;
return $percent;

}elseif($ctroop >= 1){
$percent = $cloot / 100;
$percent *= 3;
return $percent;

}elseif($ctroop >= 0){
$percent = $cloot / 100;
$percent *= 2;
return $percent;

}
}
function get_user($fadmin,$name){
if(!file_exists("users/$fadmin/$name")){
file_put_contents("users/$fadmin/$name",null);
}
return file_get_contents("users/$fadmin/$name");
}
function chenge_user($fadmin,$name,$new){
file_put_contents("users/$fadmin/$name",$new);
}
function run($fadmin,$mode){
file_put_contents("users/$fadmin/run",$mode);
}
function checkuser($fadmin){
if(file_exists("users/$fadmin/name")){
return true;
}else{
return false;
}
}



function ttoopp_clan($number){
 $saveusers = array();
  $usersscan = scandir("clans");
  unset($usersscan[0]);
  unset($usersscan[1]);
  foreach($usersscan as $savetojs){
$savedis = power_clan($savetojs,'troop');
$saveusers[$savetojs] = $savedis;
  }
  $rating = $saveusers;
    arsort($rating,SORT_NUMERIC); 
    $rate = array(); 
    foreach($rating as $key=>$value){ 
      $rate[] = $key; 
    } 
    return $rate[$number]; 
}



function ttoopp($mode,$number){
 $saveusers = array();
  $usersscan = scandir("users");
  unset($usersscan[0]);
  unset($usersscan[1]);
  foreach($usersscan as $savetojs){
$savedis = file_get_contents("users/$savetojs/$mode");
$saveusers[$savetojs] = $savedis;
  }
  $rating = $saveusers;
    arsort($rating,SORT_NUMERIC); 
    $rate = array(); 
    foreach($rating as $key=>$value){ 
      $rate[] = $key; 
    } 
    return $rate[$number]; 
}
function ttoopp2($mode,$number){


$save = array();
$scan1 = scandir("users");
unset($scan1[0]);
unset($scan1[1]);
foreach($scan1 as $users){
$save[] = array(file_get_contents("users/$users/$mode"),$users);
}
rsort($save);
return $save[$number][0];
}



function getrank($fadmin,$mode){ 
    
  $saveusers = array();
  $usersscan = scandir("users");
  unset($usersscan[0]);
  unset($usersscan[1]);
  foreach($usersscan as $savetojs){
$savedis = file_get_contents("users/$savetojs/$mode");
$saveusers[$savetojs] = $savedis;
  }
  $rating = $saveusers;
  if(isset($rating[$fadmin])){ 
    arsort($rating,SORT_NUMERIC); 
    $rate = array(); 
    foreach($rating as $key=>$value){ 
      $rate[] = $key; 
    } 
    $flipped = array_flip($rate); 
    return $flipped[$fadmin]+1; 
  }else{ 
    return false; 
  } 
}
function getpowerrank($rank,$mode){
  $saveusers = array();
  $usersscan = scandir("users");
  foreach($usersscan as $savetojs){
$savedis = file_get_contents("users/$savetojs/$mode");
$saveusers[$savetojs] = $savedis;
  }
  $rating = $saveusers;
  print_r($rating);
}
if(!is_dir('users')){
mkdir("users");
}
if(!is_dir('.run')){
mkdir(".run");
}



function getrankclan($fadmin,$mode){ 
    
  $saveusers = array();
  $usersscan = scandir("clans/$fadmin/users");
  unset($usersscan[0]);
  unset($usersscan[1]);
  foreach($usersscan as $savetojs){
$savedis = file_get_contents("clans/$fadmin/users/$savetojs/$mode");
$saveusers[$fadmin] += $savedis;
  }
  $rating = $saveusers;
    arsort($rating,SORT_NUMERIC); 
    $rate = array(); 
    foreach($rating as $key=>$value){ 
      $rate[] = $key; 
 
    $flipped = array_flip($rate); 
    return $flipped[$fadmin]+1; 
}

}

function quest_time($chat_id,$quest){
$lord_shoe = file_get_contents("users/$chat_id/lord/shoe");
if($quest == 1){


if($lord_shoe == 1){
return "3600";
}elseif($lord_shoe == 2){
return "3400";
}elseif($lord_shoe == 3){
return "3200";
}elseif($lord_shoe == 4){
return "3000";
}elseif($lord_shoe == 5){
return "2800";
}elseif($lord_shoe == 6){
return "2400";
}elseif($lord_shoe == 7){
return "2200";
}elseif($lord_shoe == 8){
return "2000";
}elseif($lord_shoe == 9){
return "1900";
}elseif($lord_shoe == 10){
return "1500";
}

}elseif($quest == 2){
if($lord_shoe == 1){
return "7000";
}elseif($lord_shoe == 2){
return "6700";
}elseif($lord_shoe == 3){
return "6400";
}elseif($lord_shoe == 4){
return "6100";
}elseif($lord_shoe == 5){
return "5800";
}elseif($lord_shoe == 6){
return "5600";
}elseif($lord_shoe == 7){
return "5300";
}elseif($lord_shoe == 8){
return "5000";
}elseif($lord_shoe == 9){
return "4600";
}elseif($lord_shoe == 10){
return "4100";
}
}elseif($quest == 3){
if($lord_shoe == 1){
return "10000";
}elseif($lord_shoe == 2){
return "9700";
}elseif($lord_shoe == 3){
return "9500";
}elseif($lord_shoe == 4){
return "9000";
}elseif($lord_shoe == 5){
return "8600";
}elseif($lord_shoe == 6){
return "8400";
}elseif($lord_shoe == 7){
return "8300";
}elseif($lord_shoe == 8){
return "7500";
}elseif($lord_shoe == 9){
return "6900";
}elseif($lord_shoe == 10){
return "6200";
}
}elseif($quest == 4){
if($lord_shoe == 1){
return "15000";
}elseif($lord_shoe == 2){
return "14500";
}elseif($lord_shoe == 3){
return "14000";
}elseif($lord_shoe == 4){
return "13500";
}elseif($lord_shoe == 5){
return "13200";
}elseif($lord_shoe == 6){
return "12700";
}elseif($lord_shoe == 7){
return "12300";
}elseif($lord_shoe == 8){
return "12100";
}elseif($lord_shoe == 9){
return "11500";
}elseif($lord_shoe == 10){
return "11000";
}
}


}






function quest_reward($chat_id,$quest){
$lord_shoe = file_get_contents("users/$chat_id/lord/sword");
if($quest == 1){
if($lord_shoe == 1){
return "3-5";
}elseif($lord_shoe == 2){
return "5-7";
}elseif($lord_shoe == 3){
return "7-11";
}elseif($lord_shoe == 4){
return "11-13";
}elseif($lord_shoe == 5){
return "13-15";
}elseif($lord_shoe == 6){
return "15-17";
}elseif($lord_shoe == 7){
return "17-21";
}elseif($lord_shoe == 8){
return "21-24";
}elseif($lord_shoe == 9){
return "24-27";
}elseif($lord_shoe == 10){
return "27-30";
}

}elseif($quest == 2){
if($lord_shoe == 1){
return "5-7";
}elseif($lord_shoe == 2){
return "7-10";
}elseif($lord_shoe == 3){
return "10-13";
}elseif($lord_shoe == 4){
return "13-16";
}elseif($lord_shoe == 5){
return "16-19";
}elseif($lord_shoe == 6){
return "19-23";
}elseif($lord_shoe == 7){
return "23-26";
}elseif($lord_shoe == 8){
return "26-29";
}elseif($lord_shoe == 9){
return "29-32";
}elseif($lord_shoe == 10){
return "32-35";
}
}elseif($quest == 3){
if($lord_shoe == 1){
return "12-14";
}elseif($lord_shoe == 2){
return "14-17";
}elseif($lord_shoe == 3){
return "17-20";
}elseif($lord_shoe == 4){
return "20-23";
}elseif($lord_shoe == 5){
return "23-26";
}elseif($lord_shoe == 6){
return "26-29";
}elseif($lord_shoe == 7){
return "29-31";
}elseif($lord_shoe == 8){
return "31-43";
}elseif($lord_shoe == 9){
return "43-46";
}elseif($lord_shoe == 10){
return "46-48";
}
}elseif($quest == 4){
if($lord_shoe == 1){
return "20-23";
}elseif($lord_shoe == 2){
return "23-26";
}elseif($lord_shoe == 3){
return "26-29";
}elseif($lord_shoe == 4){
return "29-32";
}elseif($lord_shoe == 5){
return "32-36";
}elseif($lord_shoe == 6){
return "36-39";
}elseif($lord_shoe == 7){
return "39-41";
}elseif($lord_shoe == 8){
return "41-44";
}elseif($lord_shoe == 9){
return "44-49";
}elseif($lord_shoe == 10){
return "49-53";
}
}


}



function quest_reward_zor($chat_id,$quest){
if($quest == 1){
return "10-100";
}elseif($quest == 2){
return "100-200";
}elseif($quest == 3){
return "200-300";
}elseif($quest == 4){
return "300-500";
}
}


$gold = round(get_user($chat_id,'gold'));
$wood = round(get_user($chat_id,'wood'));
$lord_helmet = file_get_contents("users/$chat_id/lord/helmet");
$lord_armor = file_get_contents("users/$chat_id/lord/armor");
$lord_shoe = file_get_contents("users/$chat_id/lord/shoe");
$lord_sword = file_get_contents("users/$chat_id/lord/sword");
$lord_health = file_get_contents("users/$chat_id/lord/health");

$lnh = get_name_lord('helmet',$lord_helmet);
$lna = get_name_lord('armor',$lord_armor);
$lns = get_name_lord('shoe',$lord_shoe);
$lnsw = get_name_lord('sword',$lord_sword);

$lps = get_price_lord('shoe',$lord_shoe);
$lpsw = get_price_lord('sword',$lord_sword);
$lpa = get_price_lord('armor',$lord_armor);
$lph = get_price_lord('helmet',$lord_helmet);

$lpos = get_power_lord('shoe',$lord_shoe);
$lposw = get_power_lord('sword',$lord_sword);
$lpoa = get_power_lord('armor',$lord_armor);
$lpoh = get_power_lord('helmet',$lord_helmet);


$lposu = get_power_lord('shoe',$lord_shoe + 1);
$lposwu = get_power_lord('sword',$lord_sword + 1);
$lpoau = get_power_lord('armor',$lord_armor + 1);
$lpohu = get_power_lord('helmet',$lord_helmet + 1);


$power = power_lord($chat_id);
$food = round(get_user($chat_id,'food'));
$troop = round(get_user($chat_id,'troop'));
$xp = get_user($chat_id,'xp');
$location = get_user($chat_id,'location');
$name = get_user($chat_id,'name');
$shop = get_user($chat_id,'shop');
$timejoin = get_user($chat_id,'timejoin');
$lfarm = get_user($chat_id,'lfarm');
$farm = get_user($chat_id,'farm');
$run = get_user($chat_id,'run');
$transh = get_user($chat_id,'transh');
$ban = get_user($chat_id,'ban');
$cup = get_user($chat_id,'cup');
$tale = round(get_user($chat_id,'tale'));
$ptroop = file_get_contents(".config/pricetroop.php");
$almasadd = file_get_contents(".config/almasadd.php");
$pricexp = file_get_contents(".config/pricexp.php");
$ptale = 45;
$timeshild = file_get_contents(".config/shild.php");
$key =
get_user($chat_id,'key');
$shild = check_shild($chat_id);
$joinclan = get_user($chat_id,"joinclan");
$bandaids = get_user($chat_id,'bandaids');
function update_farm($fadmin){
$day = get_user($fadmin,'xp');
$lfarm = get_user($fadmin,'lfarm');
if($day >= 10){
chenge_user($fadmin,'lfarm',10);
}else
if($day >= 9){
chenge_user($fadmin,'lfarm',9);
}else
if($day >= 8){
chenge_user($fadmin,'lfarm',8);
}else
if($day >= 7){
chenge_user($fadmin,'lfarm',7);
}else
if($day >= 6){
chenge_user($fadmin,in,'lfarm',6);
}else
if($day >= 5){
chenge_user($fadmin,'lfarm',5);
}else
if($day >= 4){
chenge_user($fadmin,'lfarm',4);
}else
if($day >= 3){
chenge_user($fadmin,'lfarm',3);
}else
if($day >= 2){
chenge_user($fadmin,'lfarm',2);
}
}


function around_the_castle($chat_id){
$count_list = 0;
$scan = scandir("users");
unset($scan[0]); unset($scan[1]);
$list_around = array();
foreach($scan as $users){
$joinclanus = get_user($users,"joinclan");
$joinclan = get_user($chat_id,"joinclan");
$shildus = check_shild($users);
$location = get_user($chat_id,'location');
$locationus = get_user($users,'location');
$fasele = area($location,$locationus);
if($fasele <= 500 and $shildus == "off" and $joinclanus != $joinclan and $users != $chat_id){
$count_list += 1;
$list_around[] = $users;
}
if($count_list >= 10){
break; 
}
}
return $list_around;
}


function atomic_bomb($location,$chaid){

$count_facked = 0;
$food_facked = 0;
$wood_facked = 0;
$troop_facked = 0;

foreach(scandir("xys/users") as $locationus){

$fasele = area($location,$locationus);

$user = file_get_contents("xys/users/$locationus/chat.txt");

if($fasele <= 1){
$count_facked += 1;
$fooduser = round(get_user($user,'food'));
$fooduser /= 100;
$fooduser *= 95;
$food_facked += $fooduser;
$wooduser = round(get_user($user,'wood'));
$wooduser /= 100;
$wooduser *= 95;
$wood_facked += $wooduser;
$troopuser = round(get_user($user,'troop'));
$troopuser /= 100;
$troopuser *= 90;
$troop_facked += $troopuser;
}elseif($fasele <= 10){
$count_facked += 1;
$fooduser = round(get_user($user,'food'));
$fooduser /= 100;
$fooduser *= 80;
$wooduser = round(get_user($user,'wood'));
$wooduser /= 100;
$wooduser *= 80;
$troopuser = round(get_user($user,'troop'));
$troopuser /= 100;
$troopuser *= 75;
}elseif($fasele <= 100){
$count_facked += 1;
$fooduser = round(get_user($user,'food'));
$fooduser /= 100;
$fooduser *= 60;
$food_facked += $fooduser;
$wooduser = round(get_user($user,'wood'));
$wooduser /= 100;
$wooduser *= 60;
$wood_facked += $wooduser;
$troopuser = round(get_user($user,'troop'));
$troopuser /= 100;
$troopuser *= 50;
$troop_facked += $troopuser;

}elseif($fasele <= 200){
$count_facked += 1;
$fooduser = round(get_user($user,'food'));
$fooduser /= 100;
$fooduser *= 40;
$food_facked += $fooduser;
$wooduser = round(get_user($user,'wood'));
$wooduser /= 100;
$wooduser *= 40;
$wood_facked += $wooduser;
$troopuser = round(get_user($user,'troop'));
$troopuser /= 100;
$troopuser *= 30;
$troop_facked += $troopuser;

}elseif($fasele <= 300){
$count_facked += 1;
$fooduser = round(get_user($user,'food'));
$fooduser /= 100;
$fooduser *= 30;
$food_facked += $fooduser;
$wooduser = round(get_user($user,'wood'));
$wooduser /= 100;
$wooduser *= 30;
$wood_facked += $wooduser;
$troopuser = round(get_user($user,'troop'));
$troopuser /= 100;
$troopuser *= 20;
$troop_facked += $troopuser;
}elseif($fasele <= 400){
$count_facked += 1;
$fooduser = round(get_user($user,'food'));
$fooduser /= 100;
$fooduser *= 10;
$food_facked += $fooduser;
$wooduser = round(get_user($user,'wood'));
$wooduser /= 100;
$wooduser *= 10;
$wood_facked += $wooduser;
$troopuser = round(get_user($user,'troop'));
$troopuser /= 100;
$troopuser *= 5;
$troop_facked += $troopuser;
}elseif($fasele <= 500){
$count_facked += 1;
$fooduser = round(get_user($user,'food'));
$fooduser /= 100;
$fooduser *= 5;
$food_facked += $fooduser;
$wooduser = round(get_user($user,'wood'));
$wooduser /= 100;
$wooduser *= 5;
$wood_facked += $wooduser;
$troopuser = round(get_user($user,'troop'));
$troopuser /= 100;
$troopuser *= 3;
$troop_facked += $troopuser;

}

}


httpt('sendmessage',[ 
    'chat_id'=>$chaid, 
    'text'=>" 
Number of people destroyed : $count_facked
People
Number of wheat destroyed : ".round($food_facked)." Warm
Number of wood destroyed : ".round($wood_facked)." Warm
Number of soldiers lost : ".round($troop_facked)." People
",
]);

}

function price_virus($chat_id){
$troop = file_get_contents("users/$chat_id/troop");
if($troop <= 2){
return "nt";
}else{
return $troop * 2.3;
}
}


function count_health_zombies($chat_id){
$zombies = file_get_contents("users/$chat_id/zombies");
$troop = file_get_contents("users/$chat_id/troop");
$maxiom = max_troop($chat_id);
if($zombies > $maxiom){
return $maxiom - $troop;
}else{
return $zombies;
}
}


function price_health_zombies($chat_id){
$zombies = count_health_zombies($chat_id);
return $zombies * 7;
}

function count_zombie($chat_id){
$troop = file_get_contents("users/$chat_id/troop");
$virus = file_get_contents("users/$chat_id/virus.txt");
if($troop <= 0){
$percent = 0;
}elseif($virus == null){
$percent = "nv";
}elseif($virus == "t"){
if($troop > 100){
$percent = $troop / 100;
$percent *= 1;
}else{
$percent = 1;
}
}elseif($virus == "g"){
if($troop > 100){
$percent = $troop / 100;
$percent *= 10;
}else{
$percent = 1;
}
}
return $percent;
}

function anti_virus($chat_id,$name){
file_put_contents("users/$chat_id/virus.txt",false);
}

function price_anti_virus($chat_id){
$zombies = file_get_contents("users/$chat_id/zombies");
$zombies *= 10;
return $zombies;
}

function sign($chat_id){
$map = scandir("users");
$map = count($map);
$map = $map * 10;
$map = $map / 5;
$time = time();
mkdir("users/$chat_id");
mkdir("users/$chat_id/week");
mkdir("users/$chat_id/lord");
mkdir("users/$chat_id/reward");
file_put_contents("users/$chat_id/lord/helmet",1);
file_put_contents("users/$chat_id/lord/armor",1);
file_put_contents("users/$chat_id/lord/shoe",1);
file_put_contents("users/$chat_id/lord/sword",1);
file_put_contents("users/$chat_id/lord/health",100);
file_put_contents("users/$chat_id/lord/zor",0);
file_put_contents("users/$chat_id/shild",0);
file_put_contents("users/$chat_id/id",$chat_id);
file_put_contents("users/$chat_id/gold",100);
file_put_contents("users/$chat_id/wood",2500);
file_put_contents("users/$chat_id/food",2500);
file_put_contents("users/$chat_id/troop",200);
file_put_contents("users/$chat_id/xp",1);
file_put_contents("users/$chat_id/castel",1);
file_put_contents("users/$chat_id/timejoin",$time);
file_put_contents("users/$chat_id/shop",0);
file_put_contents("users/$chat_id/ban",0);
file_put_contents("users/$chat_id/lfarm",1);
file_put_contents("users/$chat_id/farm",0);
file_put_contents("users/$chat_id/farm_clan",0);
file_put_contents("users/$chat_id/cup",0);
file_put_contents("users/$chat_id/transh",0);
file_put_contents("users/$chat_id/run",0);
file_put_contents("users/$chat_id/tale",0);
file_put_contents("users/$chat_id/dead",0);
file_put_contents("users/$chat_id/tixp",0);
file_put_contents("users/$chat_id/key",0);
file_put_contents("users/$chat_id/hungry.txt",1);

file_put_contents("users/$chat_id/bandaids",0);
file_put_contents("users/$chat_id/bread",0);
file_put_contents("users/$chat_id/lbread",0);
for($i=0; $i >= 0; $i++){
$x = rand(1,$map);
$y = rand(1,$map);
$location = ''.$x.':'.$y.'';
if(!is_dir("xys/users/$location")){
file_put_contents("users/$chat_id/location",$location);
mkdir("xys/users/$location");
file_put_contents("xys/users/$location/chat.txt",$chat_id);
break;
}
}


run($chat_id,"setname");
}
function Random_Teleport($chat_id){
$map = scandir("users");
$map = count($map);
$map = $map * 10;
$map = $map / 5;
for($i=0; $i >= 0; $i++){
$x = rand(1,$map);
$y = rand(1,$map);
$location = ''.$x.':'.$y.'';
if(!is_dir("xys/users/$location")){
$location_user = get_user($chat_id,'location');
rm("xys/users/$location_user");
file_put_contents("users/$chat_id/location",$location);
mkdir("xys/users/$location");
file_put_contents("xys/users/$location/chat.txt",$chat_id);
break;
}
}
}
function keyboard_start(){
if(jdate('l') == 'Friday' || jdate('l') == 'Thursday' || jdate('l') == 'Thursday'){
return [
               [
               ['text'=>"Rename the Lord🤴🏻"],['text'=>'Investigate attacks🧐']
               ],
               [
               ['text'=>'Delete account🗑'],['text'=>'About🔰']
               ],
               [
               ['text'=>"🏆Competition"],['text'=>'Store💵']
               ],
               [
               ['text'=>"Soldier🃏"],['text'=>"References🏡"]
               ],
               [
               ['text'=>"a fight⚔"],['text'=>"My Lord🧝‍♂"]
               ],
               [
               ['text'=>"My village🏡"],['text'=>'Cologne🛡']
               ],
               [
               ['text'=>'Revenge☠'],['text'=>'Global chat🌎']
               ],
               [
               ['text'=>'Kind old lady🧙‍♀️'],['text'=>"Resource Trading👨‍🎤"]
               ],
               [
               ['text'=>'Embassy🏯️'],['text'=>'market🏘']
               ],
               [
               ['text'=>'Zombies🧟‍♂'],['text'=>'Kings Emirate🌐']
               ]
               ];
}else{
return [
                [
                ['text'=>"Resource Trading👨‍🎤"],['text'=>'Embassy🏯️']
                ],
                [
                ['text'=>"Rename the Lord🤴🏻"],['text'=>'Delete account🗑']
                ],
                [
                ['text'=>"🏆Competition"],['text'=>'Store💵']
                ],
                [
                ['text'=>"Soldier🃏"],['text'=>"References🏡"]
                ],
                [
                ['text'=>"a fight⚔"],['text'=>"My Lord🧝‍♂"]
                ],
                [
                ['text'=>"My village🏡"],['text'=>'Cologne🛡']
                ],
                [
                ['text'=>'Revenge☠'],['text'=>'Global chat🌎']
                ],
                [
                ['text'=>'market🏘'],['text'=>'Investigate attacks🧐']
                ],
                [
                ['text'=>'About🔰'],['text'=>'Zombies🧟‍♂']
                ],
                [
                ['text'=>'Kings Emirate🌐']
                ]
                ];
}
}
function start($chat_id){
if(date("H") == 22 or date("H") == 23 or date("H") == 24 or date("H") == 1 or date("H") == 2 or date("H") == 3){
$texttroop = "The vampires are ready🧛‍♀";
}else{
$texttroop = "";
}
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Hello commander🧝‍♀
$texttroop
", 
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>keyboard_start(),
])
]);
}


function attack_troop($chat_id,$enemy){
$food = round(get_user($chat_id,'food'));
$wood = round(get_user($chat_id,'wood'));
$troop = round(get_user($chat_id,'troop'));
$xp = get_user($chat_id,'xp');
$name = get_user($chat_id,'name');
$cup = get_user($chat_id,'cup');
$tale = round(get_user($chat_id,'tale'));
$key =
get_user($chat_id,'key');
$shild = check_shild($chat_id);
$joinclan = get_user($chat_id,"joinclan");
$bandaids = get_user($chat_id,'bandaids');
$enemymy = $enemy;
$nameen = get_user($enemymy,'name');
$shilden = check_shild($enemymy);

$enen = file_get_contents("users/$chat_id/enemy_etgha.txt");

if($enen == true){
$text1 = "attackr";
}else{
$text1 = "attack";
}


if(min_troop_attack($chat_id) > $troop){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The soldiers are less than ".min_troop_attack($chat_id)." LT is🤭
",
]);
}elseif($shilden == "on"){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The enemy is in Shield😭
",
]);
}else
if($shild == "on"){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
You can't attack when Shield🤫
",
]);
}else{
if($text1 == "attackr"){
httpt('sendmessage',[ 
    'chat_id'=>$enemymy, 
    'text'=>" 
User $chat_id He took revenge on you!🎃
",
]);
}
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Fighting...
🗝🗝

",
'parse_mode'=>'MARKDOWN',
]);
file_put_contents("users/$chat_id/endwar.txt",false);
rmdir("users/$chat_id/revenge/$enemymy");
$troopanemy = get_user($enemymy,'troop');
$taleanemy = get_user($enemymy,'tale');
file_put_contents("users/$chat_id/enemy.txt",'no');
if($taleanemy >= $troop){
file_put_contents("users/$chat_id/endwar.txt",true);
$taleanemy -= $troop;
chenge_user($enemymy,'tale',$taleanemy);
chenge_user($chat_id,'troop',0);
$cup -= 5;
chenge_user($chat_id,'cup',$cup);


httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The enemy had many traps, all of our soldiers were killed😟
Damn ... at least we could ".roundk($troop)." To get rid of the enemy traps!
-5 Cup👑
",
]);
$encup = get_user($enemymy,'cup');
$encup += 5;
chenge_user($enemymy,'cup',$encup);



httpt('sendmessage',[ 
    'chat_id'=>$enemymy, 
    'text'=>" 
Someone attacked us and couldn't even get past the traps😆 Great... 
ID $chat_id Remaining traps for us ".roundk($taleanemy)." Trap casualties ".roundk($troop)." & +5 Cup👑
",
]);
}else{
$troop -= $taleanemy;



chenge_user($chat_id,'troop',$troop);
chenge_user($enemymy,'tale',0);

$cup += 5;
chenge_user($chat_id,'cup',$cup);

$key += 1;
chenge_user($chat_id,"key",$key);


httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Haha soldiers passed the traps🤡
We are attacking enemy troops🤗
The number of soldiers remaining ".roundk($troop)." No casualties ".roundk($taleanemy)." People
🔑🗝
+5 Cup👑
",
'parse_mode'=>'MARKDOWN',
]);
$encup = get_user($enemymy,'cup');
$encup -= 5;
chenge_user($enemymy,'cup',$encup);
httpt('sendmessage',[ 
    'chat_id'=>$enemymy, 
    'text'=>" 
My God ... someone attacked us with ID $chat_id They could cross the traps😖 Why don't you make a trap؟
-5 Cup👑
",
'parse_mode'=>'MARKDOWN',
]);
}

$endwar =
file_get_contents("users/$chat_id/endwar.txt");
if($endwar == false){

if($troopanemy >= $troop){
$endwar =
file_get_contents("users/$chat_id/endwar.txt");
if($endwar == false){
$troopanemy -= $troop;
chenge_user($enemymy,'troop',$troopanemy);
chenge_user($chat_id,'troop',0);






$cup -= 5;
chenge_user($chat_id,'cup',$cup);



httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Wow, damn ... we were going well, but the enemy had a lot of soldiers, they didn't even have mercy on anyone.😵😱
-5 Cup👑
",
'parse_mode'=>'MARKDOWN',
]);
$encup = get_user($enemymy,'cup');
$encup += 5;
chenge_user($enemymy,'cup',$encup);
file_put_contents("users/$chat_id/endwar.txt",true);
httpt('sendmessage',[ 
    'chat_id'=>$enemymy, 
    'text'=>" 
Haha haha they might have passed the traps but the soldiers couldn't😲👍Remaining Soldiers ".roundk($troopanemy)." No casualties ".roundk($troop)." People
+5 👑
Checking for treatment🤕
",
'parse_mode'=>'MARKDOWN',
]);
$bandaidsen = get_user($enemymy,'bandaids');

if($bandaidsen <= 0){
httpt('sendmessage',[ 
    'chat_id'=>$enemymy, 
    'text'=>" 
We couldn't cure anyone because of the scar adhesive!💀
",
'parse_mode'=>'MARKDOWN',
]);
}else{
$bandaidsen -= hospital_what($troop,$bandaidsen);
$troopanemy += hospital_what($troop,$bandaidsen);
chenge_user($enemymy,'troop',$troopanemy);
file_put_contents("users/$enemymy/bandaids",$bandaidsen);
httpt('sendmessage',[ 
    'chat_id'=>$enemymy, 
    'text'=>" 
Number ".hospital_what($troop,$bandaidsen)." The wound was healed❤
",
'parse_mode'=>'MARKDOWN',
]);
}
}
}else{
$endwar =
file_get_contents("users/$chat_id/endwar.txt");
if($endwar == false){
$troop -= $troopanemy;



chenge_user($chat_id,'troop',$troop);
chenge_user($enemymy,'troop',0);

$encup = get_user($enemymy,'cup');

$enfood = get_user($enemymy,'food');
$enwood = get_user($enemymy,'wood');

$GLfood = round(Get_Loot($troop,$enfood));
$GLwood = round(Get_Loot($troop,$enwood));

$forenemeywood = $enwood - $GLwood;
chenge_user($enemymy,'wood',$forenemeywood);
$forenemeyfood = $enfood - $GLfood;
chenge_user($enemymy,'food',$forenemeyfood);

$forwinnerwood = $wood + $GLwood;
chenge_user($chat_id,'wood',$forwinnerwood);
$forwinnerfood = $food + $GLfood;
chenge_user($chat_id,'food',$forwinnerfood);

$encup -= 10;
chenge_user($enemymy,'cup',$encup);
$cup += 10;
chenge_user($chat_id,'cup',$cup);
rmdir("users/$chat_id/enemy/$enemymy");

$key += 1;
chenge_user($chat_id,"key",$key);

if($text1 == "attackr"){
$texta = "
Haha Haha Haha Haha \ n We've been rejected😼 Who here wanted to kill us؟ The number of soldiers remaining ".roundk($troop)." People 👮
Losses ".roundk($troopanemy)." People💀";
}else{
$texta = "We had nothing to say👺
We said they were still on our floor😵";
}
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
$texta
-".roundk($troopanemy)."💂‍♀
+$GLfood 🌾
+$GLwood 🌲
🔑🔑
+10 👑
",
'parse_mode'=>'MARKDOWN',
]);
$joinclanenemy = get_user($enemymy,"joinclan");
$clanchat = get_user($chat_id,"joinclan");
$scanclanen = scandir("clans/$joinclanenemy/users");
$nameenmy = get_user($enemymy,"name");
unset($scanglobal[0]); unset($scanglobal[1]);
if($text1 != "attackr"){
foreach($scanclanen as $sendforall){

if(!is_dir("users/$sendforall/revenge")){

mkdir("users/$sendforall/revenge");
}
mkdir("users/$sendforall/revenge/$chat_id");
}
$scanglobalclanen = scandir("clans/$joinclanenemy/users");
if($clanchat != null){
foreach($scanglobalclanen as $sendforall){
httpt('sendmessage',[ 
    'chat_id'=>$sendforall, 
    'text'=>"
Of Alliance $clanchat There was a war👹
To the user [$enemymy](tg://user?id=$enemymy) By [$chat_id](tg://user?id=$chat_id) Was attacked👹
It's time for revenge💀
",
'parse_mode'=>'MARKDOWN',
]);
}
}
}
}
if($text1 == "attackr"){
$joinclan = get_user($chat_id,"joinclan");
$scanglobalclan = scandir("clans/$joinclan/users");

$shokolat = file_get_contents("clans/$joinclan/users/$chat_id/shokolat");
$shokolat += 10;
file_put_contents("clans/$joinclan/users/$chat_id/shokolat",$shokolat);

foreach($scanglobalclan as $allusers){
httpt('sendmessage',[ 
    'chat_id'=>$allusers, 
    'text'=>"
 User [$chat_id](tg://user?id=$chat_id) From [$enemymy](tg://user?id=$enemymy) He took revenge👹
User $chat_id Wins $ 10💵
",
'parse_mode'=>'MARKDOWN',
]);
}
}

if(get_time("attack_for_autotel".$enemymy."") < 3600){
untime("attack_for_autotel".$enemymy."");
save_time("attack_for_autotel".$enemymy."");
$ca = file_get_contents("users/$enemymy/count_attack");
$ca += 1;
file_put_contents("users/$enemymy/count_attack",$ca);
}
$car = file_get_contents("users/$enemymy/count_attack");

if($car >= 4){
add_shild($enemymy);
Random_Teleport($enemymy);
httpt('sendmessage',[ 
    'chat_id'=>$enemymy, 
    'text'=>" 
You got a random shield and teleport!
",
'parse_mode'=>'MARKDOWN',
]);
}

httpt('sendmessage',[ 
    'chat_id'=>$enemymy, 
    'text'=>" 
The enemy of resources robs us of deer🤯
-$GLfood 🌾 
-$GLwood 🌲 
-10 👑
",
'parse_mode'=>'MARKDOWN',
]);

$bandaidsen = get_user($enemymy,'bandaids');

if($bandaidsen <= 0){
httpt('sendmessage',[ 
    'chat_id'=>$enemymy, 
    'text'=>" 
We couldn't cure anyone because of the scar adhesive!💀
",
'parse_mode'=>'MARKDOWN',
]);
}else{
$bandaidsen -= hospital_what($troop,$bandaidsen);
$troopanemy += hospital_what($troop,$bandaidsen);
chenge_user($enemymy,'troop',$troopanemy);
file_put_contents("users/$enemymy/bandaids",$bandaidsen);
httpt('sendmessage',[ 
    'chat_id'=>$enemymy, 
    'text'=>" 
Number ".hospital_what($troop,$bandaidsen)." The wound was healed❤
",
'parse_mode'=>'MARKDOWN',
]);
}
}
}
}
}

$countspam = file_get_contents("users/$chat_id/spamcount");
$spamban = file_get_contents("users/$chat_id/spamban");



if(isset($idzormajmoe) and is_dir("users/$idzormajmoe")){
$get_xp = get_user($chat_id,"xp");
if($get_xp == null){
$gold = get_user($idzormajmoe,'gold');
$gold += 10;
chenge_user($idzormajmoe,'gold',$gold);
httpt('sendmessage',[ 
    'chat_id'=>$idzormajmoe, 
    'text'=>" 
Earlier we won 10 diamonds🤩
+10💎
",
'parse_mode'=>'MARKDOWN',
]);
sign($chat_id);
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Please send a name to Lord🧝‍♂
",
'parse_mode'=>'MARKDOWN',
]);
}
}elseif($spamban >= 4){
mkdir("bans/$chat_id");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
You became a bin bot forever
", 
]);

}elseif($countspam >= 4){
file_put_contents("users/$chat_id/spamcount",0);
$spamban += 1;
file_put_contents("users/$chat_id/spamban",$spamban);
$spamban = round($spamban);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
🤫Please don't spam🤫
Notice $spamban From 4
If your subgroup reaches 4, the bot will send you no answer
Reduce the speed of bot use to reduce warnings
", 
]);

help_send($chat_id,"spam","
You get restricted by the telegram when you send too many messages in a row, and you can't text to anyone for a while.
");

}

if(get_time("spam_".$chat_id."") < 1){
$countspam += 1;
file_put_contents("users/$chat_id/spamcount",$countspam);
}elseif(is_dir("bans/$chat_id")){
}elseif($chat_id == null || $chat_id == ".." || $chat_id == "."){
}elseif($chat_id == "no"){
}elseif($status != "online"){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
The bot was turned off :(
Wait for the new version😊
", 
]);

}else{
$spamban = file_get_contents("users/$chat_id/spamban");
if($spamban >= 0){
$spamban -= 0.4;
file_put_contents("users/$chat_id/spamban",$spamban);
}


file_put_contents("users/$chat_id/server".$server."",true);


httpt('sendChatAction',[
'chat_id'=>$chat_id,
'action'=>'typing',
]);

untime("spam_".$chat_id."");
save_time("spam_".$chat_id."");
$percenterch = percentsl($chat_id);
$lig = lig($chat_id);
if($text1 == "/myspam"){
$countspam = file_get_contents("users/$chat_id/spamcount");
$spamban = file_get_contents("users/$chat_id/spamban");


httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Spam count : $countspam
Number of warnings : $spamban / 4
", 
]);

}
if($text1 == "/getmap"){
file_get_contents("https://antartm.000webhostapp.com/map/index.php");
httpt('senddocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFILE("map/map.png"),
]);
}
if($text1 == "/test"){
atomic_bomb("170:142",$chat_id);
}
if($text1 == "Kings Emirate🌐"){
$scandir = scandir("users");
$troops = 0;
$zombies = 0;
foreach($scandir as $users){
$troops += get_user($users,'troop');
$zombies += get_user($users,'zombies');
}
httpt('sendmessage',[  
    'chat_id'=>$chat_id,  
    'text'=>" 
The total number of soldiers💂".roundk($troops)."
Total number of zombies 🧟‍♂ ".roundk($zombies)."
Number of Lords🧝‍♂  ".count($scandir)."

", 
]);
}
if($text1 == "Zombies🧟‍♂" || $text1 == "Update🧟‍♂"){ 
$zombies = roundk(file_get_contents("users/$chat_id/zombies")); 
$virus = file_get_contents("users/$chat_id/virus.txt"); 
$baqimande = 1800 - get_time("zombiestroop_".$chat_id."");
if($virus == "t"){
$timezom = "Time remaining until virus replay $baqimande Second";
}else{
$timezom = "";
}
if($zombies == null || $zombies <= 0){ 
$textjimes = " 
Still, no one gets infected. Take care of yourself 🧟‍♂ 
"; 
}else{ 
$textjimes = " 
So far $zombies Some soldiers get infected \ n I can only treat or prevent myself 🧟‍♂ 

"; 
} 
httpt('sendmessage',[  
    'chat_id'=>$chat_id,  
    'text'=>" 
Hi I'm Dr.Antar👨‍⚕ 
$textjimes  
$timezom
", 
'reply_markup'=>json_encode([  
'resize_keyboard'=>true, 
            'keyboard'=>[ 
                [ 
                ['text'=>"💀Virus transmission🧟‍♂"],['text'=>"🧟‍♂Antivirus💉"] 
                ], 
                [ 
                ['text'=>"💂‍♀Resurrect the zombies🧟‍♂"],['text'=>"Update🧟‍♂"] 
                ], 
                [ 
                ['text'=>$back] 
                ] 
              ], 
]) 
]); 
} 
if($text1 == "💂‍♀Resurrect the zombies🧟‍♂"){
$zombies = roundk(file_get_contents("users/$chat_id/zombies")); 
$price_hz = price_health_zombies($chat_id);
$count_hz = count_health_zombies($chat_id);
if($zombies == null || $zombies <= 0){ 
httpt('sendmessage',[  
    'chat_id'=>$chat_id,  
    'text'=>"  
There are no zombies in the village🔪
", 
]);
}elseif($count_hz <= 0){
httpt('sendmessage',[  
    'chat_id'=>$chat_id,  
    'text'=>"  
Unable to cure, soldiers may have full capacity💂
", 
]);
}else{
httpt('sendmessage',[  
    'chat_id'=>$chat_id,  
    'text'=>"  
The number of treatable $count_hz ⛑
Cost $price_hz Wheat🌾
", 
 'reply_markup' => json_encode([
                'inline_keyboard' => [
  [
['text'=>"Start treatment💉",'callback_data'=>"health_zombie"]
                    ]
]])
]);
}
}
if($text1 == "health_zombie"){
$zombies = roundk(file_get_contents("users/$chat_id/zombies")); 
$price_hz = price_health_zombies($chat_id);
$count_hz = count_health_zombies($chat_id);
if($zombies == null || $zombies <= 0){ 
httpt('sendmessage',[  
    'chat_id'=>$chat_id,  
    'text'=>"  
There are no zombies in the village🔪
", 
]);
}elseif($count_hz <= 0){
httpt('sendmessage',[  
    'chat_id'=>$chat_id,  
    'text'=>"  
Unable to cure, soldiers may have full capacity💂
", 
]);
}elseif($food < $price_hz){
httpt('sendmessage',[  
    'chat_id'=>$chat_id,  
    'text'=>"  
Wheat is not enough🌾
", 
]);
}else{
$food -= $price_hz;
chenge_user($chat_id,'food',$food);
$troop += count_health_zombies($chat_id);
chenge_user($chat_id,'troop',$troop);
$zombies -= count_health_zombies($chat_id);
file_put_contents("users/$chat_id/zombies",$zombies);
httpt('sendmessage',[  
    'chat_id'=>$chat_id,  
    'text'=>"  
The treatment was successful💉
", 
]);
}
}
if($text1 == "🧟‍♂Antivirus💉"){
$virus = file_get_contents("users/$chat_id/virus.txt"); 
if($virus == "t"){
$price_anti_virus = roundk(price_anti_virus($chat_id));
if($price_anti_virus <= 0){
$price_anti_virus = "Free";
}else{
$price_anti_virus = "$price_anti_virus Wood";
}
httpt('sendmessage',[  
    'chat_id'=>$chat_id,  
    'text'=>"  
Cost $price_anti_virus Do you want treatment?
", 
 'reply_markup' => json_encode([
                'inline_keyboard' => [
  [
['text'=>"Antidote broadcast🌧",'callback_data'=>"Anti_T"]
                    ]
]])
]);
}else{
httpt('sendmessage',[  
    'chat_id'=>$chat_id,  
    'text'=>"  
Healthy village🧠
", 
]);
}
}
if($text1 == "Anti_T"){
$virus = file_get_contents("users/$chat_id/virus.txt"); 
if($virus == "t"){
$price_anti_virus = price_anti_virus($chat_id);
if($price_anti_virus <= $wood){
$wood -= $price_anti_virus;
chenge_user($chat_id,'wood',$wood);
file_put_contents("users/$chat_id/virus.txt",false); 
httpt('sendmessage',[  
    'chat_id'=>$chat_id,  
    'text'=>"  
I got rid of the virus It was time to draw up a cure for the zombies!💉
", 
]);
}else{
httpt('sendmessage',[  
    'chat_id'=>$chat_id,  
    'text'=>"  
Your resources are not enough to get better sooner, or worse👹
", 
]);
}
}else{
httpt('sendmessage',[  
    'chat_id'=>$chat_id,  
    'text'=>"  
The village is healthy💉
", 
]);
}
}
if($text1 == "💀Virus transmission🧟‍♂"){ 
run($chat_id,"send_virus"); 
httpt('sendmessage',[  
    'chat_id'=>$chat_id,  
    'text'=>"  
When are you going to transmit the virus? Give it an idea!💉 
To tell you that I don't care if he is a member of the union
", 
'reply_markup'=>json_encode([  
'resize_keyboard'=>true, 
            'keyboard'=>[ 
                [ 
                ['text'=>$back] 
                ] 
              ], 
]) 
]); 
} 
if($run == "send_virus" and $text1 != $back){ 
$price_food = roundk(price_virus($text1)); 
$virus = file_get_contents("users/$text1/virus.txt");  
$shildse = check_shild($text1);
if($shildse == "on"){
httpt('sendmessage',[  
    'chat_id'=>$chat_id,  
    'text'=>"  
This shield is fucking I can't😒
", 
]); 
}elseif($virus == "t"){ 
httpt('sendmessage',[  
    'chat_id'=>$chat_id,  
    'text'=>"  
This user is already infected💉 Tell someone else 
", 
]); 
}elseif($text1 == $chat_id){ 
httpt('sendmessage',[  
    'chat_id'=>$chat_id,  
    'text'=>"  
Do you want to virus yourself? Do you hate yourself so much?😏 
", 
]); 
}elseif(!is_dir("users/$chat_id")){ 
httpt('sendmessage',[  
    'chat_id'=>$chat_id,  
    'text'=>"  
This user does not exist at all!😒 Send one more 
", 
]); 
}elseif($price_food != "nt"){ 
run($chat_id,"complate_send_virus"); 
file_put_contents("users/$chat_id/send_virus",$text1); 
$joinclanen = get_user($text1,"joinclan");
if($joinclanen == null){
$joinclanen = "does not have";
}
httpt('sendmessage',[  
    'chat_id'=>$chat_id,  
    'text'=>"  
Cost $price_food Wheat🌾   
Alliance $joinclanen 🔶
Do you want to transmit this virus ?!💉 
", 
'reply_markup'=>json_encode([  
'resize_keyboard'=>true, 
            'keyboard'=>[ 
                [ 
                ['text'=>"Virus transmission💉"],['text'=>$back]
                ] 
              ], 
]) 
]); 
}else{ 
httpt('sendmessage',[  
    'chat_id'=>$chat_id,  
    'text'=>"  
That he has no plans to get a virus at all!😒 Send one more 
", 
]); 
} 
} 


$user_virus = file_get_contents("users/$chat_id/send_virus"); 

if($text1 == "Virus transmission💉" and $run == "complate_send_virus" and $user_virus != null){ 
 
 
$price_food = roundk(price_virus($user_virus)); 
if($price_food <= $food){ 
$food -= $price_food; 
chenge_user($chat_id,'food',$food); 
$getcz = count_zombie($user_virus);
$troop_user = file_get_contents("users/$user_virus/troop");
$zombies_user = file_get_contents("users/$user_virus/zombies");
$troop_user -= $getcz;
$zombies_user += $getcz;
file_put_contents("users/$user_virus/zombies",$zombies_user); 
chenge_user($user_virus,'troop',$troop_user); 
file_put_contents("users/$user_virus/virus.txt",'t');
file_put_contents("users/$chat_id/send_virus",null);
httpt('sendmessage',[  
    'chat_id'=>$chat_id,  
    'text'=>"  
I transmitted the virus💉  Cost $price_food 🌾
", 
'parse_mode'=>'MARKDOWN', 
]); 
httpt('sendmessage',[  
    'chat_id'=>$user_virus,  
    'text'=>"  
I came to tell the doctor $chat_id Together $price_food I gave you wheat and I polluted your soldier💉 HaHaHaHa😏 
", 
'parse_mode'=>'MARKDOWN', 
]); 
}else{ 
run($chat_id,"no"); 
httpt('sendmessage',[  
    'chat_id'=>$chat_id,  
    'text'=>"  
You don't have wheat 
Cost $price_food 🌾
", 
'parse_mode'=>'MARKDOWN', 
]); 
} 

}
if($text1 == "/free_gems"){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>'
You can win 10 diamonds by sharing the link below and clicking on the others🤩
https://telegram.me/'.$userbot.'?start='.$chat_id.'
',
]);
}

if($text1 == "About🔰"){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Manufacturer and designer🤵 @AntarSidgi
Teams👨‍🎤 @Team_SD & @Prog_SD
Sponsor💥 @Team_SD
Thanks a lot @HamdViP👹
Made with Love❤️ in Sudan🇸🇩
",
]);
}

$count_run = 0;
if($text1 == "a fight⚔" || $text1 == "Update⚔"){
$ra = file_get_contents("users/$chat_id/running_attack");
if($ra == true){
$enemymy = file_get_contents("users/$chat_id/enemy.txt");
$locationen = get_user($enemymy,'location');
$location = get_user($chat_id,'location');
$secound_attack = area($location,$locationen);
$baqimande = $secound_attack - get_time("attack_troop".$chat_id."");
$troop_user = roundk(get_user($enemymy,'troop'));



$explode_loc1 = explode(":",$locationen);
$explode_loc2 = explode(":",$location);

$location_troop1 = round(get_location($explode_loc2[0],$explode_loc1[0],$secound_attack,$baqimande));

$location_troop2 = round(get_location($explode_loc2[1],$explode_loc1[1],$secound_attack,$baqimande));


$location_troop = "".$location_troop1.":".$location_troop2."";



  $enfood = get_user($enemymy,'food');
  $enwood = get_user($enemymy,'wood');
  $GLfood = round(Get_Loot($troop,$enfood));
  $GLwood = round(Get_Loot($troop,$enwood));

httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
You are attacking😼
The soldiers are on the road to war!😏
Lord🧝‍♂ [$enemymy](tg://user?id=$enemymy)
Time left until forces arrive🕓 $baqimande
Location🗺 $locationen
The position of the soldiers🗺 $location_troop
The number of enemy troops💂 $troop_user
Post-war awards🤪
+$GLfood 🌾

+$GLwood 🌳
",
'parse_mode'=>'MARKDOWN',
]);
}else{
run($chat_id,"attack_list");
$enemys = around_the_castle($chat_id);
$enemys1 = $enemys[0];

$enemys2 = $enemys[1];
$enemys3 = $enemys[2];
$enemys4 = $enemys[3];

$enemys5 = $enemys[4];
$enemys6 = $enemys[5];
$enemys7 = $enemys[6];
$enemys8 = $enemys[7];
$enemys9 = $enemys[8];

$enemys10 = $enemys[9];
del_text("attack_list".$chat_id."");
foreach(around_the_castle($chat_id) as $list){
$count_run += 1;
$locationen = get_user($list,'location');
$troopen = roundk(get_user($list,'troop'));
$joinclanen = get_user($list,'joinclan');
if($joinclanen == null){
$joinclanen = "does not have";
}else{
$joinclanen = "`$joinclanen`";
}
$area = area($location,$locationen);
$text = "
Lord🧝‍♂ [$list](tg://user?id=$list)
The number of soldiers $troopen 💂‍♀
Space $area Second🕥
Alliance $joinclanen 🛡
";
add_text("attack_list".$chat_id."",$text);
brack;
}
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Around you🔍

".get_text("attack_list".$chat_id."")."

Who are you fighting for⚔؟

Extra bonus🤩 (completing)
".gift_loot($chat_id)." Wood and wheat🐲
",
'parse_mode'=>'MARKDOWN',
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$enemys1],['text'=>$enemys2]
                ],
                [
                ['text'=>$enemys3],['text'=>$enemys4]
                ],

                [
                ['text'=>$enemys5],['text'=>$enemys6]
                ],
                [
                ['text'=>$enemys7],['text'=>$enemys8]
                ],
                [
                ['text'=>$enemys9],['text'=>$enemys10]
                ],
                [
                ['text'=>"Update⚔"],['text'=>"Enter coordinates🗺"]
                ],
                [
                ['text'=>"Check location🗿"]
                ],
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
}
if($text1 == "Check location🗿"){
$food_location = 0;
$wood_location = 0;
$troop_location = 0;
$tale_location = 0;
$enemys = around_the_castle($chat_id);
foreach(around_the_castle($chat_id) as $list){

$food_location += round(get_user($list,'food'));

$troop_location += round(get_user($list,'troop'));

$wood_location += round(get_user($list,'wood'));

}

$loot = $wood_location + $food_location;
$myloot = $wood + $food;
if($loot >= $myloot){
$loot_text = "Excellent🔷";
}elseif($loot >= $myloot / 2){
$loot_text = "medium🔶";
}elseif($loot >= $myloot / 3){
$loot_text = "Good💠";
}else{
$loot_text = "Awful🔴";
}


if($troop_location > $troop){
$troop_text = "Very dangerous🔴";
}elseif($troop_location >= $troop / 2){
$troop_text = "tolerable🔶";
}else{
$troop_text = "Calm🔷";
}

httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Resource status : $loot_text
War situation : $troop_text
",
]);

}
if($run == "attack_list"){
if(in_array($text1,around_the_castle($chat_id))){
$ra = file_get_contents("users/$chat_id/running_attack");
if($ra == true){

httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
The soldiers are already attacking🤩🤪
",
]);
}else{
  $troopen = roundk(get_user($text1,'troop'));
  $enfood = get_user($text1,'food');
  $enwood = get_user($text1,'wood');
  $GLfood = round(Get_Loot($troop,$enfood));
  $GLwood = round(Get_Loot($troop,$enwood));
$car = file_get_contents("users/$text1/count_attack");

file_put_contents("users/$chat_id/enemy.txt",$text1);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Lord🧝‍♂ $text1
The number of soldiers💂   $troopen
Post-war awards🤪
+ $GLfood 🌾
+ $GLwood 🌳
",
'parse_mode'=>'MARKDOWN',
 'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
['text'=>"Attack⚔",'callback_data'=>"attack"]
                    ],
           
]])
]);
}
}
}
if($text1 == "attack"){
httpt('EditMessageReplyMarkup',[ 
    'inline_message_id'=>$message_id2,
    'reply_markup'=>json_encode([
                'inline_keyboard' => [
                    [
['text'=>"Attacking...",'callback_data'=>"attack"]
                    ]]])
]);
}
$enemymy = file_get_contents("users/$chat_id/enemy.txt");
$nameen = get_user($enemymy,'name');
if($text1 == "attack" || $text1 == "attackr" and $enemymy != 'no' and is_numeric($enemymy)){

$locationen = get_user($enemymy,'location');
$location = get_user($chat_id,'location');
$secound_attack = area($location,$locationen);
$shilden = check_shild($enemymy);
$ra = file_get_contents("users/$chat_id/running_attack");
if(get_time("attack_troop".$chat_id."") <= $secound_attack and $ra == true){
$baqimande = $secound_attack - get_time("attack_troop".$chat_id."");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
You're still struggling with [$enemymy](tg://user?Id= $enemymy) until the end of the war🧐
",
'parse_mode'=>'MARKDOWN',
]);
}elseif(min_troop_attack($chat_id) > $troop){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The soldiers are less than ".min_troop_attack($chat_id)." LT is🤭
",
]);
}elseif($shilden == "on"){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The enemy is in Shield👹
",
]);
}elseif($shild == "on"){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
we are sorry! Your account is in Shield 💀
",
]);
}else{
if($text1 == "attackr"){
file_put_contents("users/$chat_id/enemy_etgha.txt",true);
}

untime("attack_troop".$chat_id."");

save_time("attack_troop".$chat_id."");

mkdir("users/$enemymy/runnig_attack");

mkdir("users/$enemymy/runnig_attack/$chat_id");

file_put_contents("users/$chat_id/running_attack",true);

file_put_contents("users/$chat_id/enemy",$enemymy);

httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Starting the war🔪...
Approximate time until forces arrive 🕘 $secound_attack
", 
]);

httpt('sendMessage',[ 
    'chat_id'=>$enemymy, 
    'text'=>" 
User $chat_id He has camped on our side!
Approximate time to reach the enemy🕘 $secound_attack
The number of soldiers $troop 💂
", 
]);

}
}
if($text1 == "Enter coordinates🗺"){
run($chat_id,"enter_location");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Enter the coordinates you want🎷
", 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
if($run == "enter_location" and $text1 != $back){
$enemy = file_get_contents("xys/users/$text1/chat.txt");
$enemymy = file_get_contents("users/$chat_id/enemy.txt");
$ra = file_get_contents("users/$chat_id/running_attack");
$shilden = check_shild($enemy);
$joinclanen = get_user($enemy,'joinclan');
if($joinclanen == $joinclan){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
You cannot attack your own alliance😒
",
]);
}elseif($shilden == "on"){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The enemy is in Shield😭
",
]);
}elseif($shild == "on"){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
we are sorry! Your account is in Shield 💀
",
]);
}elseif(get_time("attack_troop".$chat_id."") <= $secound_attack and $ra == true){
$baqimande = $secound_attack - get_time("attack_troop".$chat_id."");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
You're attacking [$enemymy](tg://user?id=$enemymy) You can't attack multiple people at once!😒
",
'parse_mode'=>'MARKDOWN',
]);
}elseif($enemy == $chat_id){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
You cannot enter your own coordinates💂
", 
]);

}elseif($enemy == null){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
These coordinates were not found!😩
", 
]);
}else{
    $nameen = get_user($enemy,"name");
    $troopenemy = round(get_user($enemy,'troop'));
    file_put_contents("users/$chat_id/enemy.txt",$enemy);
$joinclanen = get_user($enemy,"joinclan");
  $enfood = get_user($enemy,'food');
  $enwood = get_user($enemy,'wood');
  $GLfood = round(Get_Loot($troop,$enfood));
  $GLwood = round(Get_Loot($troop,$enwood));
 $locationen = get_user($enemy,'location');
$location = get_user($chat_id,'location');
$secound_attack = area($location,$locationen);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The enemy you want [$enemy](tg://user?id=$enemy)
$Troopenemy soldier We can win $GLfood wheat and $GLwood wood in this war
Interval🕠 $secound_attack Second
Location🗺 $locationen
Alliance🔰 $joinclanen

",
'parse_mode'=>'MARKDOWN',
 'reply_markup' => json_encode([
                'inline_keyboard' => [
                   [
['text'=>"Attack❗️",'callback_data'=>"attack"]
                    ],
                    [
['text'=>'Subscribe to Alliance↩️','callback_data'=>"shere_$enemy"]
                    ]
                    ]

                    ])
]);


}
}
if($text1 == "Investigate attacks🧐"){

del_text("attack_running".$chat_id."");

$scan_attacks = scandir("users/$chat_id/runnig_attack");

unset($scan_attacks[0]); unset($scan_attacks[1]);

$count = 0;

foreach($scan_attacks as $enemys_run){

if($chat_id != $enemys_run){
$locationen = get_user($enemys_run,'location');
$location = get_user($chat_id,'location');
$secound_attack = area($location,$locationen);
$baqimande = roundk($secound_attack - get_time("attack_troop".$enemys_run.""));
$troop_user = roundk(get_user($enemys_run,'troop'));

$joinclanen = get_user($enemys_run,'joinclan');

$count += 1;
$text = "
Lord🧝‍♂ $enemys_run
Location🗺 $locationen
Time left until the enemy arrives🕠 $baqimande
The number of soldiers💂 $troop_user
Alliance🔰 $joinclanen
";
add_text("attack_running".$chat_id."",$text);
}
}
if($count <= 0){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
No one has camped with us!😕
",
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
".get_text("attack_running".$chat_id."")."
 
",
]);
}
}


if($text1 == "market🏘"){


help_send($chat_id,"bazarch","
At the market you can share products or buy other products

Add product➕ :
Here you can add your own product and tell others to buy your product


Remove product➖ :
Here you can delete a product you added

Booth💰 :
Here you buy a booth or store to add your products You can upgrade your booth to increase capacity
Visit👁 :
Here you can check out a user's booth product code
");

if($xp < 3){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Your level is less than 3
",
]);
}else{
if(!is_dir('bazarch')){
mkdir('bazarch');
}
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Welcome to the booth🏫
", 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>"Add product➕"],['text'=>"Remove product➖"]
                ],
                [
                ['text'=>"Booth💰"],['text'=>"Visit👁"]
                ],
                [
                ['text'=>$back]
                ]
              ],
])
]);
}

}
if($xp >= 3){
if($text1 == "Visit👁"){
run($chat_id,"visit_shoping");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Enter the booth code you want!
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>"Random Booth Search🛒"]
                ],
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
if($run == "visit_shoping" and $text1 != $back and is_numeric($text1) and $text1 != $chat_id){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
please wait....
",
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
if(is_dir("bazarch/$text1")){
$cb = scandir("bazarch/$text1/shop");
unset($cb[0]); unset($cb[1]);
$cb = count($cb);
if($cb <= 0){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
This booth is empty!😒
", 
]);
}else{
run($chat_id,"userrunbuy");
file_put_contents("users/$chat_id/urb.txt",$text1);
$scan = scandir("bazarch/$text1/shop");
unset($scan[0]); 
unset($scan[1]); 
foreach($scan as $shoping){
$type = file_get_contents("bazarch/$text1/shop/$shoping/type.txt");
$count = file_get_contents("bazarch/$text1/shop/$shoping/count.txt");
$price = file_get_contents("bazarch/$text1/shop/$shoping/price.txt");
if($type == "wood"){
$typet = "Wood🌲";
}
if($type == "food"){
$typet = "Wheat🌾";
}
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
barcode $shoping 🛄
product type $typet 
Number $count 🌀
Price $price Diamond💎
",
 'reply_markup' => json_encode([
                'inline_keyboard' => [
  [
['text'=>"Buy💎",'callback_data'=>"/getshop_$shoping"]
                    ]
]])
]);
}
}
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
This booth does not exist!😕
", 
]);
}
}
if($match[0] == "/getshop" and $run == "userrunbuy"){
$urb = file_get_contents("users/$chat_id/urb.txt");
$codeshop = $match[1];
if(is_dir("bazarch/$urb/shop/$codeshop")){

$price = file_get_contents("bazarch/$urb/shop/$codeshop/price.txt");

if($gold >= $price){


$type = file_get_contents("bazarch/$urb/shop/$codeshop/type.txt");
$count = file_get_contents("bazarch/$urb/shop/$codeshop/count.txt");


/* Work with purchased resources */
$shopcountuser = file_get_contents("users/$chat_id/$type");
$shopcountuser += $count;
file_put_contents("users/$chat_id/$type",$shopcountuser);
/* Work with purchased resources */

/* Working with diamonds */
$gold -= $price;
file_put_contents("users/$chat_id/gold",$gold);
$golduser = file_get_contents("users/$urb/gold");
$golduser += $price;
file_put_contents("users/$urb/gold",$golduser);
/*Working with diamonds */



/*Remove product */
rm("bazarch/$urb/shop/$codeshop");
/*Remove product */



httpt('sendMessage',[ 
    'chat_id'=>$urb, 
    'text'=>"
User $chat_id Buy product with code $codeshop🏆
+$price 💎
",
]);

httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
You purchased the product with the code $codeshop🏆
-$price 💎
",
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Your diamonds are not enough😕
",
]);
}
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
This product was not found 
 You may have bought someone earlier!
", 
]);
}
}

if($text1 == "Random Booth Search🛒"){

$scandir = scandir("bazarch");
    unset($scandir[0]);  unset($scandir[1]);
    $count = count($scandir) + 1;
   $rand = rand(2,$count);
    $ghorfe = $scandir[$rand];
 $cb = scandir("bazarch/$ghorfe/shop");
unset($cb[0]); unset($cb[1]);
$cb = count($cb);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Booth code : $ghorfe
Number of products : $cb
", 
]);
}
if($text1 == "Booth💰"){
if(!is_dir("bazarch/$chat_id")){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
The cost of creating 500,000 lumber!🌲
", 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>"Buy booth🛒"],['text'=>$back]
                ]
              ],
])
]);
}else{
$cb = scandir("bazarch/$chat_id/shop");
unset($cb[0]); unset($cb[1]);
$cb = count($cb);
$max = file_get_contents("bazarch/$chat_id/max.txt");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Booth code : $chat_id
Product Number: $cb
Booth Capacity: $max
Upgrade cost 500,000 wood🌲 
⬆Increasing Capacity 5
", 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>"Upgrade booth🛒"],['text'=>"products List🔭"]
                ],
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
}
if($text1 == "products List🔭"){
$scan = scandir("bazarch/$chat_id/shop");
unset($scan[0]); 
unset($scan[1]); 
foreach($scan as $shoping){
$type = file_get_contents("bazarch/$chat_id/shop/$shoping/type.txt");
$count = file_get_contents("bazarch/$chat_id/shop/$shoping/count.txt");
$price = file_get_contents("bazarch/$chat_id/shop/$shoping/price.txt");
if($type == "wood"){
$typet = "Wood🌲";
}
if($type == "food"){
$typet = "Wheat🌾";
}
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Booth code : $chat_id
barcode $shoping 🛄
product type $typet 
Number $count 🌀
Price $price Diamond💎
", 
]);
}
}
if($text1 == "Buy booth🛒" and !is_dir("bazarch/$chat_id")){
if($wood >= 500000){
$wood -= 500000;
chenge_user($chat_id,"wood",$wood);

mkdir("bazarch/$chat_id");
mkdir("bazarch/$chat_id/shop");
file_put_contents("bazarch/$chat_id/max.txt",5);

httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Shopping Success Now We Can Sell Our Products To Others With Diamonds😀
", 
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Your wood is not enough
", 
]);
}
}
if($text1 == "Upgrade booth🛒" and is_dir("bazarch/$chat_id")){
if($wood >= 500000){
$wood -= 500000;
chenge_user($chat_id,"wood",$wood);

$max = file_get_contents("bazarch/$chat_id/max.txt");
$max += 5;
file_put_contents("bazarch/$chat_id/max.txt",$max);

httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
The booth was successfully upgraded😀
", 
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Your wood is not enough
", 
]);
}
}


if($text1 == "Remove product➖"){
if(!is_dir("bazarch/$chat_id")){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
You have no booth!
", 
]);
}else{
run($chat_id,"code_shop");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Please enter the purchase code ....!
", 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
}
if($run == "code_shop" and $text1 != $back){
if(is_dir("bazarch/$chat_id/shop/$text1")){

$type = file_get_contents("bazarch/$chat_id/shop/$text1/type.txt");
$count = file_get_contents("bazarch/$chat_id/shop/$text1/count.txt");


$shopcountuser = file_get_contents("users/$chat_id/$type");
$shopcountuser += $count;
file_put_contents("users/$chat_id/$type",$shopcountuser);

if($type == "food"){
$typet = "Wheat";
}
if($type == "wood"){
$typet = "Wood";
}

rm("bazarch/$chat_id/shop/$text1");

httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Product removed!😀👍
$Count $typet returned!
",
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Product code not found in your booth!😕
",
]);
}
}
if($text1 == "Add product➕"){
$cb = scandir("bazarch/$chat_id/shop");
unset($cb[0]); unset($cb[1]);
$cb = count($cb);
$max = file_get_contents("bazarch/$chat_id/max.txt");
if(!is_dir("bazarch/$chat_id")){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
You have no booth!
", 
]);
}elseif($cb >= $max){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Booth capacity is perfect!
", 
]);
}else{
run($chat_id,"add_shoping");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
What product are you selling !?
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>"💎Wheat🌾"],['text'=>"💎Wood🌲"]
                ],
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
}
if($run == "add_shoping" and $text1 == "💎Wheat🌾" || $text1 == "💎Wood🌲"){

if($text1 == "💎Wheat🌾"){
$type = "food";
$typet = "Wheat";
}
if($text1 == "💎Wood🌲"){
$type = "wood";
$typet = "Wood";
}
run($chat_id,"add_shoping2");
file_put_contents("users/$chat_id/add_shoptype",$type);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
So how much do you sell $typet now?
", 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
}

if($run == "add_shoping2" and $text1 != $back and is_numeric($text1)){
$text1 = preg_replace('/[^0-9]/','',$text1);
$shoptype = file_get_contents("users/$chat_id/add_shoptype");
$shopcount = file_get_contents("users/$chat_id/$shoptype");
if($shopcount >= $text1){
file_put_contents("users/$chat_id/add_shopcount",$text1);
run($chat_id,"add_shoping3");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Great now with how much diamonds in the store you want to spend $text1 on!

(If you want to enter a modest amount of profit for your lamb sales)
", 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Not enough resources You only have $shopcount of resources to consider
", 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
}
if($run == "add_shoping3" and $text1 != $back and is_numeric($text1)){
$text1 = preg_replace('/[^0-9]/','',$text1);
$rand = rand(100000,999999999);


run($chat_id,"no");

mkdir("bazarch/$chat_id/shop/$rand");

$shoptype = file_get_contents("users/$chat_id/add_shoptype");

$shopcount = file_get_contents("users/$chat_id/add_shopcount");

$shopcountuser = file_get_contents("users/$chat_id/$shoptype");

$shopcountuser -= $shopcount;

file_put_contents("users/$chat_id/$shoptype",$shopcountuser);

file_put_contents("bazarch/$chat_id/shop/$rand/admin.txt",$chat_id);

file_put_contents("bazarch/$chat_id/shop/$rand/type.txt",$shoptype);

file_put_contents("bazarch/$chat_id/shop/$rand/price.txt",$text1);

file_put_contents("bazarch/$chat_id/shop/$rand/count.txt",$shopcount);


$cb = file_get_contents("bazarch/$chat_id/cb.txt");
$cb += 1;
file_put_contents("bazarch/$chat_id/cb.txt",$cb);


help_send($chat_id,"bazarch_complate","
Great you added a product to your store now you have to tell your friends to buy expression from your booth
");



httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Successfully placed in store👍😀
Purchase code : $rand
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
start($chat_id);
}

}

if($text1 == "Embassy🏯️"){
help_send($chat_id,"sefarat","
At the embassy you can send soldiers for the rest
Note that the number of troops sent will be reduced to the same number as the number of troops on the opposite side
");

if($xp >= 6){
run($chat_id,"send_troop");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
What do you think we should do with the other soldiers?
Please submit the required ID
", 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
From this section you can send troops to others
Your level is less than 6
", 
]);
}
}
if($run == "send_troop" and $text1 != $back and $chat_id != $text1){
if(is_dir("users/$text1")){
file_put_contents("users/$chat_id/saveuserforaendtroop",$text1);
run($chat_id,"send_troop2");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Please enter the number of troops you want for example
10000
", 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
This user does not exist😩
",
 'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
}

if($run == "send_troop2" and $text1 != $back){
$text1 = preg_replace('/[^0-9]/','',$text1);
if($troop >= $text1){
$syfst = file_get_contents("users/$chat_id/saveuserforaendtroop");
$troopus = get_user($syfst,'troop');
if(max_troop($syfst) <= $troopus + $text1){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
This user has the most soldiers! 😕 Please enter a smaller amount💀
", 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
}else{
run($chat_id,"no");
$troopus += $text1;
file_put_contents("users/$syfst/troop",$troopus);
$troop -= $text1;
file_put_contents("users/$chat_id/troop",$troop);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Successfully transferred $text1 soldiers🌞
", 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
httpt('sendMessage',[ 
    'chat_id'=>$syfst, 
    'text'=>"
$Text1 soldiers received from $chat_id🌞
", 
]);
}
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
You don't have so many soldiers😕
", 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
}

if($match[0] == "shere"){
$enemynum = json_decode(json_encode($match),true);
$enemynum = $enemynum[1];
if(!is_numeric($enemynum)){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Difficulty communicating😞
", 
]);
}elseif(get_time("shere_".$chat_id."") < 3600){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
You can share a person in the alliance every 1 hour😒
", 
]);
}else
if($joinclan == 'null'){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
You have no alliance ...
", 
]);
}else{
untime("shere_".$chat_id."");
save_time("shere_".$chat_id."");
$scanglobal = scandir("clans/$joinclan/users");
unset($scanglobal[0]); unset($scanglobal[1]);
foreach($scanglobal as $sendforall){
httpt('sendMessage',[ 
    'chat_id'=>$sendforall, 
    'text'=>"
✴User $chat_id Submit an attack Click the button below to review and attack✴
", 
 'reply_markup' => json_encode([
                'inline_keyboard' => [
  [
['text'=>"See👁",'callback_data'=>"view_$enemynum"]
                    ]
]])
]);
}

}

}
if($match[0] == "view"){
$enemy = $match[1];
if(!is_numeric($enemy)){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Difficulty communicating😞
", 
]);
}else{
run($fadmin,"no");
    $troopenemy = round(get_user($enemy,'troop'));
    file_put_contents("users/$chat_id/enemy.txt",$enemy);
$joinclanen = get_user($enemy,"joinclan");
  $enfood = get_user($enemy,'food');
  $enwood = get_user($enemy,'wood');
  $GLfood = round(Get_Loot($troop,$enfood));
  $GLwood = round(Get_Loot($troop,$enwood));
if($joinclanen == "null"){
$joinc = "The enemy in question has no alliance either";
}else{
$joinc = "Enemy in alliance $joinclanen Is a member";
}
 $nameen = get_user($enemy,"name");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The enemy you want [$enemy](tg://user?id=$enemy)
$Troopenemy soldier We can win $GLfood wheat and $GLwood wood in this war
$joinc
",
'parse_mode'=>'MARKDOWN',
 'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
['text'=>"Start the attack⚔",'callback_data'=>"attack"]
                    ],
           
]])
]);
}
}
if($text1 == "Kind old lady🧙‍♀️"){
help_send($chat_id,"chahe_arzo","
At Also Well you get free coins every 10,000 seconds
This section is only active on Thursdays and Fridays
");
if(jdate('l') == 'Friday' || jdate('l') == 'Thursday' || jdate('l') == 'Thursday'){
if(get_time("ret_".$chat_id."") > 10000){
$rand = rand(1,4);
$gold += $rand;
file_put_contents("users/$chat_id/gold",$gold);
untime("ret_".$chat_id."");
save_time("ret_".$chat_id."");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
You won the $rand diamond🤩
", 
]);
}else{
help_send($chat_id,"speed_chah","
It's good that you are gradually learning ...
You can increase the speed of the diamond using the seconds shortcut button. It all depends on your chances
");
$baqimande = 10000 - get_time("ret_".$chat_id."");
$lastsleed = round($baqimande / 2);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
yet still $baqimande Seconds left😌 You can buy the speed pack and $lastsleed Finish seconds ...
", 
 'reply_markup' => json_encode([
                'inline_keyboard' => [
                   [
['text'=>"2 Diamond💎 $lastsleed Seconds decrease🕚️",'callback_data'=>"speed_ret"]
                    ]
                    ]])
]);
}
}
}

if($text1 == "speed_ret"){
if(get_time("ret_".$chat_id."") > 10000){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
You can now get your rewards...💎
",
]);
}else
if(get_time("ret_".$chat_id."") > 9000){
$baqimande = 10000 - get_time("ret_".$chat_id."");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
".get_time("ret_".$chat_id."")." Past please wait another $baqimande seconds
",
]);
}elseif($gold > 2){
$gold -= 2;
chenge_user($chat_id,"gold",$gold);
$baqimande = 10000 - get_time("ret_".$chat_id."");
$lastsleed = round($baqimande / 2);
lost_time($lastsleed,"ret_".$chat_id."");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
good job! $lastsleed seconds passed🕦
",
]);
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your diamonds are not enough😒
",
]);
}
}

if($text1 == 'Resource Trading👨‍🎤'){
help_send($chat_id,"send_loot","
From here you can send resources to friends and so on or trade with others
");
if($xp >= 2){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
What do you want to transfer?🐳
Transfer percentage $percenterch percent greater🎋
",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
            'keyboard'=>[
               [
               ['text'=>'Wood Transfer🌳'],['text'=>'Wheat Transfer🎍']
               ],
               [
               ['text'=>$back]
               ]
               ],
])
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your level is less than 2🎃
",
]);
}
}
if($xp >= 2){


if($text1 == "Wood Transfer🌳"){
run($chat_id,"marchwood");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
How many resources do you want to transfer?🎃
For example 100000
",
'parse_mode'=>'MARKDOWN',
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
if($text1 == "Wheat Transfer🎍"){
run($chat_id,"marchfood");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
How many resources do you want to transfer?🎃
For example 100000
",
'parse_mode'=>'MARKDOWN',
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
}

}
if($run == "marchwood" and $text1 != $back){
$textacg = preg_replace('/[^0-9]/','',$text1);
$priceforsend = round(jam_percent($textacg,$percenterch));
if($wood < $priceforsend){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Resources are not enough Transfer fees $priceforsend Wood is \ n but your resources $wood It is wood😭 
",
]);
}else{
run($chat_id,"sendlootforfriend");
file_put_contents("users/$chat_id/sendloot.txt",$priceforsend);
file_put_contents("users/$chat_id/sendlootv.txt",$textacg);
file_put_contents("users/$chat_id/sendloottype.txt","wood");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Cost $priceforsend It will stick if you are sure to enter the numeric ID of the person you want to continue👨‍🎤
",
]);
}
}
if($run == "marchfood" and $text1 != $back){
$textacg = preg_replace('/[^0-9]/','',$text1);
$priceforsend = round(jam_percent($textacg,$percenterch));
if($food < $priceforsend){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Resources are not enough Transfer fees $priceforsend Wheat is \ n but your sources $food Wheat 😭 
",
]);
}else{
run($chat_id,"sendlootforfriend");
file_put_contents("users/$chat_id/sendloot.txt",$priceforsend);
file_put_contents("users/$chat_id/sendlootv.txt",$textacg);
file_put_contents("users/$chat_id/sendloottype.txt","food");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Cost $priceforsend Wheat can be entered if you are sure to continue the numeric ID of the person you are looking for👨‍🎤
",
]);
}
}
$typesendloot = file_get_contents("users/$chat_id/sendloottype.txt");
$sendloot = file_get_contents("users/$chat_id/sendloot.txt");
$sendvloot = file_get_contents("users/$chat_id/sendlootv.txt");
if($run == "sendlootforfriend" and $text1 != $back and $text1 != $chat_id and is_dir("users/$text1")){
if($typesendloot == "food"){

if($sendloot <= $food){

$food -= $sendloot;
file_put_contents("users/$chat_id/food",$food);

$foodt1 = file_get_contents("users/$text1/food");
$foodt1 += $sendvloot;
file_put_contents("users/$text1/food",$foodt1);

run($chat_id,"no");

httpt('sendMessage',[ 
    'chat_id'=>$text1, 
    'text'=>" 
$Send_loot of wheat from $chat_id👨‍🎤 Let's thank them too😈
",
]);

httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Moved successfully
Wheat $sendvloot amount at $sendloot Wheat cost!👸
",
]);
}


}
if($typesendloot == "wood"){

if($sendloot <= $wood){

$wood -= $sendloot;
file_put_contents("users/$chat_id/wood",$wood);

$woodt1 = file_get_contents("users/$text1/wood");
$woodt1 += $sendvloot;
file_put_contents("users/$text1/wood",$woodt1);

run($chat_id,"no");

httpt('sendMessage',[ 
    'chat_id'=>$text1, 
    'text'=>" 
$Send_loot value sent by $chat_id👨‍🎤 Let's thank them too😈
",
]);

httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Moved successfully
$Sendvloot wood value at $sendloot wood cost!👸
",
]);
}

}
}
if($text1 == "My Lord🧝‍♂" || $text1 == "Update🔁"){
$type_quest = file_get_contents("users/$chat_id/quest/type.txt");
if($type_quest == "start"){
$level = file_get_contents("users/$chat_id/quest/quest.txt");
if($level == "1"){
$name_majra = "Destroy the wolves🐺";
}
if($level == "2"){
$name_majra = "Save the village🏡";
}
if($level == "3"){
$name_majra = "Help the businessman💰";
}
if($level == "4"){
$name_majra = "Search for Antar👹";
}
$textmajra = "
You are on a mission🛸
Mission $name_majra
";
}


$count_majrajoii = roundk(file_get_contents("users/$chat_id/lord/countmajra"));

help_send($chat_id,"my_lord","
Welcome to the most important part of the game ...
Lord ... you can progress from this general part

Adventure🚀
From here you can get the diamond mission!👍
The missions start very easily and after a while you can get your diamond💎

Supplies
Your Lord has a lot of things like sword armor shoes that can be improved with each upgrade, for example if you upgrade your shoes missions will end sooner and you will have less time to attack the enemy in the Lord's battle


Update

From here you can get the latest information from your Lord

Health Lord

Lord's health in missions and wars declines
After Lord's health has worsened, Lord's mission has hardly been fulfilled

");
if($lord_helmet == 10){
$text_hel = "
Hat $lnh 👑 
Total power🛡 ".roundk($lpoh)."
";
}else{
$text_hel = "
Hat $lnh 👑 
Total power🛡 ".roundk($lpoh)."
⬆️ The cost of increasing the level ".roundk($lph)." Wood🌳
New power ⬆️ ".roundk($lpohu)."
";
}
if($lord_armor == 10){
$text_arm = "
Armor $lna 🥋 
Total power🛡 ".roundk($lpoa)."
";
}else{
$text_arm = "
Armor $lna 🥋
Total power🛡 ".roundk($lpoa)."
⬆️ The cost of increasing the level ".roundk($lpa)." Wood🌳
New power ⬆️ ".roundk($lpoau)."
";
}
if($lord_shoe == 10){
$text_sho = "
shoe $lns 👞 
Poor speed⚡️ $lpos + ".lost_speedlord($chat_id)."
";
}else{
$text_sho = "
shoe $lns 👞 
Poor speed⚡️ $lpos + ".lost_speedlord($chat_id)."
⬆️The cost of increasing the level ".roundk($lps)." Wood🌳
New speed weakness ⬆️ ".roundk($lposu)."
";
}
if($lord_sword == 10){
$text_swo = "
Sword $lnsw 🗡
 Total power⚔  ".roundk($lposw)."
";
}else{
$text_swo = "
Sword $lnsw 🗡
 Total power⚔  ".roundk($lposw)."
⬆️ The cost of increasing the level ".roundk($lpsw)." Wood🌳
New power ⬆️ ".roundk($lposwu)."
";
}

if($lord_health >= 100){
$text = "
$name 🧝‍♂
the power
💪 ".$power." + ".zor_lord($chat_id)." 🛡 ".defence_lord($chat_id)."


$text_hel
➖➖➖➖➖➖➖➖➖
$text_arm
➖➖➖➖➖➖➖➖➖
$text_sho
➖➖➖➖➖➖➖➖➖
$text_swo
➖➖➖➖➖➖➖➖➖

the health ".$lord_health."/100 ❤
Number of adventures🚀 : ".$count_majrajoii."
$textmajra
";
$keyboard = [
                [
                ['text'=>"adventure🛸"]
                ],
                [
                ['text'=>"Upgrade armor👘"],['text'=>'Upgrade hat👑']
                ],
                [
                ['text'=>"Upgrade shoes👞"],['text'=>'Sword upgrade🗡']
                ],
                [
                ['text'=>'War Lord🧜‍♂'],['text'=>'Update🔁'],['text'=>$back]
                ]
];
}else{
$text = "
$name 🧝‍♂
the power
💪 ".$power." + ".zor_lord($chat_id)." 🛡 ".defence_lord($chat_id)."


$text_hel
➖➖➖➖➖➖➖➖➖
$text_arm
➖➖➖➖➖➖➖➖➖
$text_sho
➖➖➖➖➖➖➖➖➖
$text_swo
➖➖➖➖➖➖➖➖➖
the health❣ ".$lord_health."/100 
Number of adventures🚀 : ".$count_majrajoii."

$textmajra

The cost of an increase of 10 health❣ ".price_health($chat_id)." Wheat🌾
⚠Keep in mind that the less health you have, the more difficult it will be to win and the missions will be poorer⚠
";
$keyboard = [
                [
                ['text'=>"adventure🛸"]
                ],
                [
                ['text'=>"Upgrade hat👑"],['text'=>'Upgrade armor👘']
                ],
                [
                ['text'=>"Upgrade shoes👞"],['text'=>'Sword upgrade🗡']
                ],
                [
                ['text'=>'War Lord🧜‍♂'],['text'=>'Buy health❤️']
                ],
                [
                ['text'=>'Update🔁'],['text'=>$back]
                ]
];
}

httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
$text
", 
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>$keyboard,
])
]);
}
if($text1 == "cancel_quest"){
file_put_contents("users/$chat_id/quest/type.txt","no");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Mission canceled😇
", 
]);
}
if($text1 == "adventure🛸"){
$type_quest = file_get_contents("users/$chat_id/quest/type.txt");
if($lord_health < 5){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Your life is less than 5❤
", 
]);
}elseif($type_quest == "end"){
file_put_contents("users/$chat_id/quest/type.txt","no");
$level = file_get_contents("users/$chat_id/quest/quest.txt");

$lost_health -= $level * 4;

if($lord_health < $lost_health){
file_put_contents("users/$chat_id/lord/health",0);
}else{
$lord_health -= $lost_health;
file_put_contents("users/$chat_id/lord/health",$lord_health);
}


$match_reward = explode("-",quest_reward($chat_id,$level));
$rand_reward = rand($match_reward[0],$match_reward[1]);
$gold += $rand_reward;
chenge_user($chat_id,"gold",$gold);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
You won the $rand_reward diamond💎
", 
]);
}elseif($type_quest == "start"){
$quest = get_time("quest_".$chat_id."");
$level = file_get_contents("users/$chat_id/quest/quest.txt");
$quest_time = quest_time($chat_id,$level);

$time_end = $quest_time - $quest;


httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
🌐The mission is in progress🌐
$Time_end seconds left until mission ends🕟
", 
 'reply_markup' => json_encode([
                'inline_keyboard' => [
  [
['text'=>"Cancel the mission❌",'callback_data'=>"cancel_quest"]
                    ]
]])
]);
}else{
run($chat_id,"quest");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Choose a mission!
", 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>"The wolves🐺"],['text'=>"Save the fields👨‍🌾"]
                ],
                [
                ['text'=>"Help the businessman👲"],['text'=>"Attack Of The Night Antar👺"]
                ],
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
}


if($run == "quest"){

if($text1 == "The wolves🐺"){
run($chat_id,"quest_start");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
The wolves attack the townspeople
People want you to come and help them💓

Mission Time ".quest_time($chat_id,1)." Second🕓
awards ".quest_reward($chat_id,1)." Diamond💎 ".quest_reward_zor($chat_id,1)." Extra Force💪
", 
'reply_markup'=>json_encode([ 
            'keyboard'=>[
                [
                ['text'=>"Start the wolves mission"]
                ],
                [
                ['text'=>$back]
                ]
              ],
])
]);
}elseif($text1 == "Save the fields👨‍🌾"){
run($chat_id,"quest_start");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
The mice invaded the fields and destroyed the wheat and wood of the fields🐭

Commander Let 's get rid of snakes to save the fields!🐍

Mission Time ".quest_time($chat_id,2)." Second🕓
awards ".quest_reward($chat_id,2)." Diamond💎 ".quest_reward_zor($chat_id,2)." Extra Force💪
", 
'reply_markup'=>json_encode([ 
            'keyboard'=>[
                [
                ['text'=>"Start the field mission"]
                ],
                [
                ['text'=>$back]
                ]
              ],
])
]);
}elseif($text1 == "Help the businessman👲"){
run($chat_id,"quest_start");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
After the enemy finds out the rich businessman is leaving the city, he prepares his troops and is at war with them.
The rich businessman wants your help

Mission Time ".quest_time($chat_id,3)." Second🕓
awards ".quest_reward($chat_id,3)." Diamond💎 ".quest_reward_zor($chat_id,3)." Extra Force💪
", 
'reply_markup'=>json_encode([ 
            'keyboard'=>[
                [
                ['text'=>"Start the businessman's mission"]
                ],
                [
                ['text'=>$back]
                ]
              ],
])
]);
}elseif($text1 == "Attack Of The Night Antar👺"){
run($chat_id,"quest_start");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
After the girl was asleep in her room, she felt like a body was walking in her room and she screamed a lot.
What do you think?

Mission Time ".quest_time($chat_id,4)." Second🕓
awards ".quest_reward($chat_id,4)." Diamond💎 ".quest_reward_zor($chat_id,4)." Extra Force💪
", 
'reply_markup'=>json_encode([ 
            'keyboard'=>[
                [
                ['text'=>"Start the Antar mission"]
                ],
                [
                ['text'=>$back]
                ]
              ],
])
]);
}

}
if($run == "quest_start" and $text1 != $back){

if(!is_dir("users/$chat_id/quest")){
mkdir("users/$chat_id/quest");
}

if($text1 == "Start the Antar mission"){
untime("quest_".$chat_id."");
save_time("quest_".$chat_id."");
$time = quest_time($chat_id,4);
file_put_contents("users/$chat_id/quest/time.txt",$time);
file_put_contents("users/$chat_id/quest/quest.txt",4);
file_put_contents("users/$chat_id/quest/type.txt","start");
run($chat_id,"no");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
The mission started
In search of Antar😉
",
'reply_markup'=>json_encode([ 
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
start($chat_id);
}
if($text1 == "Start the businessman's mission"){
untime("quest_".$chat_id."");
save_time("quest_".$chat_id."");
$time = quest_time($chat_id,3);
file_put_contents("users/$chat_id/quest/time.txt",$time);
file_put_contents("users/$chat_id/quest/quest.txt",3);
file_put_contents("users/$chat_id/quest/type.txt","start");
run($chat_id,"no");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Mission started!
Great to go and save our businessman!😀👍
",
'reply_markup'=>json_encode([ 
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
start($chat_id);
}
if($text1 == "Start the field mission"){
untime("quest_".$chat_id."");
save_time("quest_".$chat_id."");
$time = quest_time($chat_id,2);
file_put_contents("users/$chat_id/quest/time.txt",$time);
file_put_contents("users/$chat_id/quest/quest.txt",2);
file_put_contents("users/$chat_id/quest/type.txt","start");
run($chat_id,"no");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
The mission started
Okay, now we have to leave the serpent on the fields!🐍
",
'reply_markup'=>json_encode([ 
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
start($chat_id);
}
if($text1 == "Start the wolves mission"){
untime("quest_".$chat_id."");
save_time("quest_".$chat_id."");
$time = quest_time($chat_id,1);
file_put_contents("users/$chat_id/quest/time.txt",$time);
file_put_contents("users/$chat_id/quest/quest.txt",1);
file_put_contents("users/$chat_id/quest/type.txt","start");
run($chat_id,"no");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
The mission started
It's time to teach the wolves a good lesson not to see the pot😏
",
'reply_markup'=>json_encode([ 
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
start($chat_id);
}
}



if($text1 == "War Lord🧜‍♂"){
$type_quest = file_get_contents("users/$chat_id/quest/type.txt");
if($type_quest != "start"){
if(!is_dir("aonline")){
mkdir("aonline");
}
if(!is_dir("aonline/$lig")){
mkdir("aonline/$lig");
}
mkdir("aonline/$lig/$chat_id");

httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Searching ...
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ]])
]);
help_send($chat_id,"wait_search_lord_war","
Well now we have to wait until someone is found to fight it
I will not disturb...
");
$scandir = scandir("aonline/$lig");
    unset($scandir[0]);  unset($scandir[1]);
    $count = count($scandir) + 1;
if($count > 2){
foreach($scandir as $enemy){
if($enemy != $chat_id and $enemy != null and $enemy != ""){
file_put_contents("users/".$chat_id."/aoenemy",$enemy); 
brack;
}
}
$enemy_online = file_get_contents("users/".$chat_id."/aoenemy");

file_put_contents("users/".$chat_id."/epao",false); 
file_put_contents("users/".$chat_id."/uwpao",null); 

file_put_contents("users/$enemy_online/epao",false); 
file_put_contents("users/$enemy_online/uwpao",null); 



file_put_contents("users/".$chat_id."/upao",$enemy_online); 
file_put_contents("users/$enemy_online/upao",$chat_id); 
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
You are fighting $enemy_online
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>'Arrival for attack⚔']
                ]
              ]])
]);
httpt('sendMessage',[ 
    'chat_id'=>$enemy_online, 
    'text'=>"
You are struggling with $chat_id
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>'Arrival for attack⚔']
                ]
              ]])
]);
help_send($chat_id,"war_starting","
Great Commander Now we must be ready for war
And destroy the enemy on the attack button⚔ click!😀
");
}
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
You are on a mission!😀
",
]);
help_send($chat_id,"mamorit_complateno","
As you can see in the message above, you can't fight until the end of the mission. You can cancel the mission adventure section. 
");
}
}
$epao = file_get_contents("users/".$chat_id."/epao");
if($text1 == "Arrival for attack⚔" || $text1 == "Attack⚔" || $text1 == "Review🕓" and $epao == false){


help_send($chat_id,"start_war_click","
Well, commander, we entered the battlefield
You must fight the enemy Click the attack button
");

$pao = file_get_contents("users/".$chat_id."/pao");
$test = round(jar_percent2($pao,$defenceenemy));

rm("aonline/$lig/$chat_id");
$upao = file_get_contents("users/".$chat_id."/upao");
rm("aonline/$lig/$upao");
$defenceenemy = defence_lord($upao);
file_put_contents(".run/".$chat_id."miatt.txt",$message_id2); 
$miatt = file_get_contents(".run/".$chat_id."miatt.txt");
$pao = file_get_contents("users/".$chat_id."/pao");
if($epao == true){
$winner = file_get_contents("users/".$chat_id."/uwpao");
if($winner != $chat_id){
help_send($chat_id,"lord_dead","
My God, we didn't succeed
");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
You failed😞
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ]])
]);
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
User $winner Won this race😒
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ]])
]);
}
}elseif(powers_lord($chat_id) > $defenceenemy){
file_put_contents("users/".$chat_id."/pao",0); 
file_put_contents("users/".$chat_id."/epao",true); 
file_put_contents("users/".$chat_id."/uwpao",$chat_id); 
file_put_contents("users/".$upao."/pao",0); 
file_put_contents("users/".$upao."/epao",true); 
file_put_contents("users/".$upao."/uwpao",$chat_id); 
help_send($chat_id,"one_click_dead","
Wow, we lost the enemy in the first shot!😏
");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
You have won
In the first blow we killed the enemy😀
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ]])
]);
help_send($chat_id,"lord_dead_click","
my God...
");
httpt('sendmessage',[ 
    'chat_id'=>$upao, 
    'text'=>"
We lost in the first shot🤨
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                   ]
              ]])
]);
help_send($chat_id,"lord_dead_click","
As you can see, we failed in the first shot, we had to upgrade our equipment so we could fight more powerfully.
");
}elseif($defenceenemy < $pao || $test == 100){
file_put_contents("users/".$chat_id."/pao",0); 
file_put_contents("users/".$chat_id."/epao",true); 
file_put_contents("users/".$chat_id."/uwpao",$chat_id); 
file_put_contents("users/".$upao."/pao",0); 
file_put_contents("users/".$upao."/epao",true); 
file_put_contents("users/".$upao."/uwpao",$chat_id); 
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
You have won!😉
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ]])
]);
help_send($chat_id,"lord_dead_winner","
Commander Efrin You were able to destroy the enemy
I'm so glad to be with you!😇
");
httpt('sendmessage',[ 
    'chat_id'=>$upao, 
    'text'=>"
You failed!💀
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ]])
]);
}else
if(get_time("attack_".$chat_id."") > $lpos){
$pao += powers_lord($chat_id);
file_put_contents("users/".$chat_id."/pao",$pao); 
untime("attack_".$chat_id."");
save_time("attack_".$chat_id."");
$pao = file_get_contents("users/".$chat_id."/pao");
$test = round(jar_percent2($pao,$defenceenemy));
$test1 = round(jar_percent2(powers_lord($chat_id),$defenceenemy));
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"

the amount of ".$test1."% Subtract from Lord Hamd😇

till now ".$test."% We reduced the enemy from Lord Hamd😇
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>'Attack⚔']
                ]
              ]])
]);
help_send($chat_id,"click_attack_lord","
Afrin, good commander
");
httpt('sendmessage',[ 
    'chat_id'=>$upao, 
    'text'=>"

Enemy with a blow ".$test1."% It dropped us from Lord Hamd😩
Ever ".$test."% Our Lord is damaged💀
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>'Attack⚔']
                ]
              ]])
]);
}else{
$pao = file_get_contents("users/".$chat_id."/pao");
$baqimande = $lpos - get_time("attack_".$chat_id."");
$test = round(jar_percent2($pao,$defenceenemy));
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Not yet $lpos seconds!🕜
$Baqimande seconds remaining

till now ".$test."% We reduced the enemy from Lord Hamd 
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>'Review🕓']
                ]
              ]])
]);
help_send($chat_id,"lord_wait","
We have to wait until we can fight the enemy! Still early 
we need to upgrade our shoes
");
}
}

if($text1 == "Buy health❤️" and $lord_health < 100){
if($food >= price_health($chat_id)){
help_send($chat_id,"get_health","
Great 
We bought it for Lord Health to fight it better
");
$lord_health += 10;
file_put_contents("users/$chat_id/lord/health",$lord_health);
$food -= price_health($chat_id);
file_put_contents("users/$chat_id/food",$food);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Successfully bought for Lord Health💖
", 
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Your resources are not enough to buy😞
", 
]);
help_send($chat_id,"no_loot_health","
Commander ... we have to get to the farm first
");
}
}
if($text1 == "Upgrade hat👑"){
$level = file_get_contents("users/$chat_id/lord/helmet");
if($level == 10){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
This equipment is at the final level💀
", 
]);
}else{
$price_up = get_price_lord('helmet',$level);
if($price_up <= $wood){
$level += 1;
$wood -= $price_up;
file_put_contents("users/$chat_id/lord/helmet",$level);
file_put_contents("users/$chat_id/wood",$wood);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Upgrade successfully🎃
", 
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your resources are not enough🎃
", 
]);
}
}
}
if($text1 == "Upgrade armor👘"){

$level = file_get_contents("users/$chat_id/lord/armor");

if($level == 10){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
This equipment is at the final level💀
", 
]);
}else{
$price_up = get_price_lord('armor',$level);

if($price_up <= $wood){
$level += 1;
$wood -= $price_up;
file_put_contents("users/$chat_id/lord/armor",$level);
file_put_contents("users/$chat_id/wood",$wood);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Upgrade successfully🎃
", 
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your resources are not enough🎃
", 
]);

}
}
}
if($text1 == "Upgrade shoes👞"){

$level = file_get_contents("users/$chat_id/lord/shoe");

if($level == 10){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
This equipment is at the final level💀
", 
]);
}else{
$price_up = get_price_lord('shoe',$level);

if($price_up <= $wood){
$level += 1;
$wood -= $price_up;
file_put_contents("users/$chat_id/lord/shoe",$level);
file_put_contents("users/$chat_id/wood",$wood);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Upgrade successfully🎃
", 
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your resources are not enough🎃
", 
]);

}
}
}
if($text1 == "Sword upgrade🗡"){

$level = file_get_contents("users/$chat_id/lord/sword");
if($level == 10){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
This equipment is at the final level💀
", 
]);
}else{

$price_up = get_price_lord('sword',$level);

if($price_up <= $wood){
$level += 1;
$wood -= $price_up;
file_put_contents("users/$chat_id/lord/sword",$level);
file_put_contents("users/$chat_id/wood",$wood);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Upgrade successfully🎃
", 
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your resources are not enough🎃
", 
]);
}
}

}
if($run == "setname" and $text1 != $back){
run($chat_id,"no");
file_put_contents("users/$chat_id/name",$text1);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The name of Lord $text1 Saved!😉 
Please resubmit  /start!🎃
", 
]);
}
if($text1 == "/start" || $text1 == $back){
rmdir("aonline/$lig/$chat_id");
run($chat_id,"no");
if(checkuser($chat_id) != true){
sign($chat_id);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Hello, welcome to the bot war Antar😉 
Please enter your Lord's name!🎃
", 
]);
}else{
$xpuser = file_get_contents('users/'.$chat_id.'/xp');
$locationuser = file_get_contents('users/'.$chat_id.'/location');
if($xpuser != null || $locationuser == null){
start($chat_id);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your account has a problem please click on the button below😭
", 
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>'Delete account🗑']
                ]
              ]])
]);
}
}

}
if($text1 == "Delete account🗑"){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The only logic to deleting your account is to have your account defective👮
We can look at your village and see if your village has a problem and if you have a problem we will rebuild your account.👾
", 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>"Account review😒"],['text'=>$back]
                ]
]])
]);
}
if($text1 == "Account review😒"){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Checking Account Please wait a moment...👮
", 
]);
$xpuser = file_get_contents('users/'.$chat_id.'/xp');
$locationuser = file_get_contents('users/'.$chat_id.'/location');
if($xpuser == null || $locationuser == null){
sign($chat_id);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your account had a problem and the problem was resolved!👮
", 
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your account has no problems!👮
", 
]);
}

}
if($text1 == "Rename the Lord🤴🏻"){
help_send($chat_id,"chenge_name","
Well you thought ... my point is to make a name for our Lord
");
$name = get_user($chat_id,"name");
run($chat_id,"setname");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Lord's current name $name Enter a new name 🧝‍♂
", 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
]])
]);
}
if($text1 == '🏆Competition'){
help_send($chat_id,"mosabeghe","
Competition ... Here powerful lords and alliances emerge

We can get to the top of the game very quickly by using diamonds
");
$joinclan = get_user($chat_id,"joinclan");

$cupttoopp = ttoopp('troop',0);
$cupttoopp2 = ttoopp('troop',1);
$cupttoopp3 = ttoopp('troop',2);
$cupttoopp4 = ttoopp('troop',3);
$cupttoopp5 = ttoopp('troop',4);
$cupttoopp6 = ttoopp('troop',5);



$ccupttoopp = roundk(ttoopp2('troop',0));
$ccupttoopp2 = roundk(ttoopp2('troop',1));
$ccupttoopp3 = roundk(ttoopp2('troop',2));
$ccupttoopp4 = roundk(ttoopp2('troop',3));
$ccupttoopp5 = roundk(ttoopp2('troop',4));
$ccupttoopp6 = roundk(ttoopp2('troop',5));


$clcuptop = get_user($cupttoopp,"joinclan");
$clcuptop2 = get_user($cupttoopp2,"joinclan");
$clcuptop3 = get_user($cupttoopp3,"joinclan");
$clcuptop4 = get_user($cupttoopp4,"joinclan");
$clcuptop5 = get_user($cupttoopp5,"joinclan");
$clcuptop6 = get_user($cupttoopp6,"joinclan");




$ratecup = getrank($fadmin,'troop');




$topclan = ttoopp_clan(0);
$power_topclan = power_clan($topclan,'troop');
$adminclans = file_get_contents("clans/$topclan/admin.txt");
$clantopname = get_user($adminclans,"name");
$topclan1 = ttoopp_clan(1);
$power_topclan1 = power_clan($topclan1,'troop');
$adminclans1 = file_get_contents("clans/$topclan1/admin.txt");
$clantopname2 = get_user($adminclans1,"name");
$topclan2 = ttoopp_clan(2);
$adminclans2 = file_get_contents("clans/$topclan2/admin.txt");
$clantopname3 = get_user($adminclans2,"name");

$power_topclan2 = power_clan($topclan2,'troop');

httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 

🏆Top contestants

first one🧜‍♂ [$cupttoopp](tg://user?id=$cupttoopp)
 the power⚔ $ccupttoopp
 🏰Alliance $clcuptop

second person🧝‍♂ [$cupttoopp2](tg://user?id=$cupttoopp2)
the power⚔ $ccupttoopp2
 🏰Alliance $clcuptop2

Third person🧛‍♂ [$cupttoopp3](tg://user?id=$cupttoopp3)
the power⚔ $ccupttoopp3
 🏰Alliance $clcuptop3

Fourth person🧜‍♂ [$cupttoopp4](tg://user?id=$cupttoopp4)
 the power⚔ $ccupttoopp4
 🏰Alliance $clcuptop4

Fifth🧝‍♂ [$cupttoopp5](tg://user?id=$cupttoopp5)
the power⚔ $ccupttoopp5
 🏰Alliance $clcuptop5

Sixth person🧛‍♂ [$cupttoopp6](tg://user?id=$cupttoopp6)
the power⚔ $ccupttoopp6
 🏰Alliance $clcuptop6

🕴Your rating $ratecup (Points $troop)
",
'parse_mode'=>'MARKDOWN',
]);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 

Top Alliance Game🏤

First Alliance $topclan
the power💂 $power_topclan
the manager🌞 $adminclans

Second Alliance $topclan1
the power💂 $power_topclan1
the manager🌞 $adminclans1

Third Alliance $topclan2
the power💂 $power_topclan2
the manager🌞 $adminclans2

",
]);


}


if($text1 == "/dead_troop"){

httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
completing
",
]);

}

    $pack1 = 5 * $ptroop;
    $pack2 = 50 * $ptroop;
   $pack3 = 500 * $ptroop;
   $pack4 = 5000 * $ptroop;
if($text1 =="Soldier🃏"){
help_send($chat_id,"create_troop","
Commander! Here is a soldier at home We can make a soldier here

But now what is a soldier
In fact, soldiers are more likely to be united in war and in helping each other
And in the future it can be effective in events
Click the Create 5 Soldiers button
");
if(max_troop($chat_id) <= $troop){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
You have at most soldiers🎃
",
]);
help_send($chat_id,"max_troop","
Afrin commander
You completed the capacity of your soldier sooner than we thought
The cartoon didn't speak
");
}else{
    	httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 

Welcome to the barracks💂‍♀ You can build troops to defend😕
The number of soldiers💂‍♀ : $troop
Price per soldier : $ptroop Wheat🌾
Wheat🌾 : $food
To kill a soldier☠ Use the /dead_troop command
",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
['text' => "Create 5 soldiers $pack1 Wheat💂‍♀",'callback_data'=>"pack1"]
                    ],
  [
['text' => "Create 50 soldiers $pack2 Wheat💂‍♀",'callback_data'=>"pack2"]
                    ],
  [
['text' => "Create 500 soldiers $pack3 Wheat💂‍♀",'callback_data'=>"pack3"]
                    ],
  [
['text' => "Create 5000 soldiers $pack4 Wheat💂‍♀",'callback_data'=>"pack4"]
                    ],
[
['text' => "Enter the number☝️",'callback_data'=>"entertroop"]
                    ]
                ]
            ])
]);
}
}
if($text1 == 'pack1'){
    file_put_contents(".run/".$chat_id."mi.txt",$message_id2); 
$trooptest = $troop + 5;
if(max_troop($chat_id) <= $trooptest){
httpt('editMessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$mi, 
    'text'=>" 
You have at most soldiers😒
",
]);
}else{
    if($food >= $pack1){
file_put_contents("users/$chat_id/idinline.txt",$update->callback_query->id);
    $troop += 5;
    $food -= $pack1;
    $mi = file_get_contents(".run/".$chat_id."mi.txt"); 
    chenge_user($chat_id,'food',$food);
    chenge_user($chat_id,'troop',$troop);
     httpt('editMessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$mi, 
    'text'=>" 
The number of soldiers💂‍♀ : $troop
Price per soldier : $ptroop Wheat🌾
Wheat🌾 : $food
To kill a soldier☠ Use the /dead_troop command
",
             'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
['text' => "Create 5 soldiers $pack1 Wheat💂‍♀",'callback_data'=>"pack1"]
                    ],
  [
['text' => "Create 50 soldiers $pack2 Wheat💂‍♀",'callback_data'=>"pack2"]
                    ],
  [
['text' => "Create 500 soldiers $pack3 Wheat💂‍♀",'callback_data'=>"pack3"]
                    ],
  [
['text' => "Create 5000 soldiers $pack4 Wheat💂‍♀",'callback_data'=>"pack4"]
                    ],
[
['text' => "Enter the number☝️",'callback_data'=>"entertroop"]
                    ]
                ]
            ])
]);
help_send($chat_id,"max_troop","
Afrin commander
You made 5 soldiers Don't forget that the soldiers need wheat every 5 minutes that you have to provide
Be sure never to exceed the number of crops requested
");
    }else{
        $mi = file_get_contents(".run/".$chat_id."mi.txt"); 
      httpt('editMessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$mi, 
    'text'=>" 
Not enough resources😭
",
            ]);
help_send($chat_id,"create_troop_error","
Let's take a look at the fields
Click the Resources button
");
     }
    }
}






if($text1 == 'pack2'){
    file_put_contents(".run/".$chat_id."mi.txt",$message_id2); 
$trooptest = $troop + 50;
if(max_troop($chat_id) <= $trooptest){
httpt('editMessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$mi, 
    'text'=>" 
You have at most soldiers🎃
",
]);
}else{
    if($food >= $pack2){
file_put_contents("users/$chat_id/idinline.txt",$update->callback_query->id);
    $troop += 50;
    $food -= $pack2;
    $mi = file_get_contents(".run/".$chat_id."mi.txt"); 
    chenge_user($chat_id,'food',$food);
    chenge_user($chat_id,'troop',$troop);
     httpt('editMessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$mi, 
    'text'=>" 
The number of soldiers💂‍♀ : $troop
Price per soldier : $ptroop Wheat🌾
Wheat🌾 : $food
To kill a soldier☠ Use the /dead_troop command
",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
['text' => "Create 5 soldiers $pack1 Wheat💂‍♀",'callback_data'=>"pack1"]
                    ],
  [
['text' => "Create 50 soldiers $pack2 Wheat💂‍♀",'callback_data'=>"pack2"]
                    ],
  [
['text' => "Create 500 soldiers $pack3 Wheat💂‍♀",'callback_data'=>"pack3"]
                    ],
  [
['text' => "Create 5000 soldiers $pack4 Wheat�?‍♀",'callback_data'=>"pack4"]
                    ],
[
['text' => "Enter the number☝️",'callback_data'=>"entertroop"]
                    ]
                ]
            ])
]);
help_send($chat_id,"max_troop","
Afrin commander
You made 50 troops Don't forget that the soldiers need wheat every 5 minutes that you have to provide
Be sure never to exceed the number of crops requested
");
    }else{
        $mi = file_get_contents(".run/".$chat_id."mi.txt"); 
      httpt('editMessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$mi, 
    'text'=>" 
Not enough resources😭
",
            ]);
help_send($chat_id,"create_troop_error","
Let's take a look at the fields
Click the Resources button
");
     }
    }
}



if($text1 == 'pack3'){
    file_put_contents(".run/".$chat_id."mi.txt",$message_id2); 
$trooptest = $troop + 500;
if(max_troop($chat_id) <= $trooptest){
httpt('editMessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$mi, 
    'text'=>" 
You have at most soldiers🎃
",
]);
}else{
    if($food >= $pack3){
file_put_contents("users/$chat_id/idinline.txt",$update->callback_query->id);
    $troop += 500;
    $food -= $pack3;
    $mi = file_get_contents(".run/".$chat_id."mi.txt"); 
    chenge_user($chat_id,'food',$food);
    chenge_user($chat_id,'troop',$troop);
     httpt('editMessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$mi, 
    'text'=>" 
The number of soldiers💂‍♀ : $troop
Price per soldier : $ptroop Wheat🌾
Wheat🌾 : $food
To kill a soldier☠ Use the /dead_troop command
",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
['text' => "Create 5 soldiers $pack1 Wheat💂‍♀",'callback_data'=>"pack1"]
                    ],
  [
['text' => "Create 50 soldiers $pack2 Wheat💂‍♀",'callback_data'=>"pack2"]
                    ],
  [
['text' => "Create 500 soldiers $pack3 Wheat💂‍♀",'callback_data'=>"pack3"]
                    ],
  [
['text' => "Create 5000 soldiers $pack4 Wheat💂‍♀",'callback_data'=>"pack4"]
                    ],
[
['text' => "Enter the number☝️",'callback_data'=>"entertroop"]
                    ]
                ]
            ])
]);
help_send($chat_id,"max_troop","
Afrin commander
You made 500 troops Don't forget that the soldiers need wheat every 5 minutes that you have to provide
Be sure never to exceed the number of crops requested
");
    }else{
        $mi = file_get_contents(".run/".$chat_id."mi.txt"); 
      httpt('editMessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$mi, 
    'text'=>" 
Not enough resources😭
",
            ]);
help_send($chat_id,"create_troop_error","
Let's take a look at the fields
Click the Resources button
");
     }
    }
}



if($text1 == 'pack4'){
    file_put_contents(".run/".$chat_id."mi.txt",$message_id2); 
$trooptest = $troop + 5000;
if(max_troop($chat_id) <= $trooptest){
httpt('editMessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$mi, 
    'text'=>" 
You have at most soldiers🎃
",
]);
}else{
    if($food >= $pack4){
file_put_contents("users/$chat_id/idinline.txt",$update->callback_query->id);
    $troop += 5000;
    $food -= $pack4;
    $mi = file_get_contents(".run/".$chat_id."mi.txt"); 
    chenge_user($chat_id,'food',$food);
    chenge_user($chat_id,'troop',$troop);
     httpt('editMessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$mi, 
    'text'=>" 
The number of soldiers💂‍♀ : $troop
Price per soldier : $ptroop Wheat🌾
Wheat🌾 : $food

",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
['text' => "Create 5 soldiers $pack1 Wheat💂‍♀",'callback_data'=>"pack1"]
                    ],
  [
['text' => "Create 50 soldiers $pack2 Wheat💂‍♀",'callback_data'=>"pack2"]
                    ],
  [
['text' => "Create 500 soldiers $pack3 Wheat💂‍♀",'callback_data'=>"pack3"]
                    ],
  [
['text' => "Create 5000 soldiers $pack4 Wheat💂‍♀",'callback_data'=>"pack4"]
                    ],
[
['text' => "Enter the number☝️",'callback_data'=>"entertroop"]
                    ]
                ]
            ])
]);
help_send($chat_id,"max_troop","
Afrin commander
You made 5,000 troops Don't forget that the soldiers need wheat every 5 minutes that you have to provide
Be sure never to exceed the number of crops requested
");
    }else{
        $mi = file_get_contents(".run/".$chat_id."mi.txt"); 
      httpt('editMessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$mi, 
    'text'=>" 
Not enough resources😭
",
            ]);
help_send($chat_id,"create_troop_error","
Let's take a look at the fields
Click the Resources button
");
     }
    }
}


if($text1 == "References🏡"){
$startfarm = get_user($chat_id,'farm');
if($startfarm == 0){
help_send($chat_id,"farm","
The commander here is actually the farm! Here you can make wheat and job
Click Start Production
");
$speedfarm = farm($chat_id,'speed');
$diskfarm = farm($chat_id,'max');

httpt('sendphoto',[ 
   'chat_id'=>$chat_id, 
   'photo'=>new CurlFile("images/farm-$lfarm.jpg"),
]);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
🏡 Farm Level: $xp
⚡ Production Speed: $speedfarm Second
 🌕 Space : ".roundk($diskfarm)."
",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
['text' => "💠Create 5000 soldiers💠",'callback_data'=>"startfarm"]
                    ]
                ]
            ])
]);

}else{
help_send($chat_id,"farm_check","
Your commander is investigating the farm
");
$time = time();
$timefarm = get_user($chat_id,'farm');
$infarn = $time - $timefarm;
$speedfarm = farm($chat_id,'speed');
$diskfarm = farm($chat_id,'max');
$in_farm = $infarn * $speedfarm;
$hungry = file_get_contents("users/$chat_id/hungry.txt");
if($hungry == 1){
$h_text = "The soldiers are full🔹";
}else{
$h_text = "The soldiers are hungry🔺";
}
if($timefarm == 0){
$infarm = 0;
}else
if($in_farm > $diskfarm){
$infarm = $diskfarm;
$textf = "
Production speed👨‍🌾 $speedfarm
Current production🍀 $infarm / $diskfarm (Full)
$h_text
";
}else{
$infarm = $in_farm;
$textf = "
Production speed👨‍🌾 $speedfarm
Current production🍀 $infarm / $diskfarm
$h_text
";
}
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>$textf,
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
['text'=>"Update♐️",'callback_data'=>"updatefarm"]
                    ],
                    [
['text'=>"harvest⛏︄",'callback_data'=>"getfarm"]
                    ]
                ]
            ])
]);
help_send($chat_id,"farm_get","
Commander, please click on the Reaper button
");
}
}
if($text1 == "startfarm"){

$time = time();
chenge_user($chat_id,'farm',$time);
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
   'message_id'=>$mi, 
    'text'=>" 
The farm is in production 🌱
",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
['text'=>"Update♐️",'callback_data'=>"updatefarm"]
                    ]
                ]
            ])
]);
help_send($chat_id,"farm_start","
Commander Afrin is now working on the fields
");
}
if($text1 == "updatefarm"){
file_put_contents(".run/".$chat_id."mif.txt",$message_id2); 
$mi = file_get_contents(".run/".$chat_id."mif.txt");
$time = time();
$timefarm = get_user($chat_id,'farm');
$infarn = $time - $timefarm;
$speedfarm = farm($chat_id,'speed');
$diskfarm = farm($chat_id,'max');
$in_farm = $infarn * $speedfarm;
$hungry = file_get_contents("users/$chat_id/hungry.txt");
if($hungry == 1){
$h_text = "The soldiers are full🔹";
}else{
$h_text = "The soldiers are hungry🔺";
}
if($timefarm == 0){
$infarm = 0;
}else
if($in_farm > $diskfarm){
$infarm = $diskfarm;
$textf = "
Production speed👨‍🌾 $speedfarm
Current production🍀 $infarm / $diskfarm (Full)
$h_text
";
}else{
$infarm = $in_farm;
$textf = "
Production speed👨‍🌾 $speedfarm
Current production🍀 $infarm / $diskfarm
$h_text
";
}

httpt('editmessagetext',[ 
    'chat_id'=>$chat_id, 
   'message_id'=>$mi, 
    'text'=>$textf,
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
['text'=>"Update♐️",'callback_data'=>"updatefarm"]
                    ],
                    [
['text'=>"harvest⛏︄",'callback_data'=>"getfarm"]
                    ]
                ]
            ])
]);
}
if($text1 == "getfarm"){
file_put_contents(".run/".$chat_id."mif.txt",$message_id2); 
$mi = file_get_contents(".run/".$chat_id."mif.txt");
$time = time();
$timefarm = get_user($chat_id,'farm');
$infarn = $time - $timefarm;
$speedfarm = farm($chat_id,'speed');
$diskfarm = farm($chat_id,'max');
$in_farm = $infarn * $speedfarm;
$hungry = file_get_contents("users/$chat_id/hungry.txt");
if($timefarm == 0){
$infarm = 0;
}else
if($in_farm > $diskfarm){
$infarm = $diskfarm;
}else{
$infarm = $in_farm;
}
chenge_user($chat_id,'farm',0);
$food += $infarm;
$wood += $infarm;
chenge_user($chat_id,'wood',$wood);
chenge_user($chat_id,'food',$food);
if($infarm == 0){
httpt('editmessagetext',[ 
    'chat_id'=>$chat_id, 
   'message_id'=>$mi, 
    'text'=>" 
You already empty the farm 👮
",
]);
}else{
httpt('editmessagetext',[ 
    'chat_id'=>$chat_id, 
   'message_id'=>$mi, 
    'text'=>" 
The value ".roundk($infarm)." Wood and wheat were obtained 🌱
",
]);
help_send($chat_id,"get_farm","
Commander Efrin You reaped a number of resources
Now click on the Fields button again
");
}
}


if($text1 == "⚔Attack⚔"){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Please resubmit /start
",
]);
}
if($text1 == "sen"){
$mise = file_get_contents(".run/".$chat_id."mise.txt");
$ra = file_get_contents("users/$chat_id/running_attack");
$enemymy = file_get_contents("users/$chat_id/enemy.txt");
if($ra == true){

$enemymy = file_get_contents("users/$chat_id/enemy.txt");
$locationen = get_user($enemymy,'location');
$location = get_user($chat_id,'location');
$secound_attack = area($location,$locationen);
$baqimande = $secound_attack - get_time("attack_troop".$chat_id."");
$troop_user = roundk(get_user($enemymy,'troop'));
  $enfood = get_user($enemymy,'food');
  $enwood = get_user($enemymy,'wood');
  $GLfood = round(Get_Loot($troop,$enfood));
  $GLwood = round(Get_Loot($troop,$enwood));

httpt('editMessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$mise, 
    'text'=>" 
You're attacking [$enemymy](tg://user?id=$enemymy) is...👹

The soldiers are on the road to war!😏

Time left until forces arrive🕓 $baqimande
The number of enemy troops💂 $troop_user
+$GLfood 🌾
+$GLwood 🌳
",
]);
}elseif(min_troop_attack($chat_id) > $troop){
httpt('editMessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$mise, 
    'text'=>" 
Your troops are less than ".min_troop_attack($chat_id)." Is a person😭
",
]);
}else
if($shild == "on"){
httpt('editMessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$mise, 
    'text'=>" 
we are sorry! Your account is in Shield 💀
",
]);
help_send($chat_id,"shild_on","
Your shield is active!
What is Shield?
Shield is actually a very large shield that can kill your enemy and also when attacked you cannot attack anyone.
Click the Shield button to unsubscribe from the store
");
}else{
$price_search = price_search($chat_id);
if($wood < $price_search){
httpt('editMessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$mise, 
    'text'=>" 
Your resources are not enough to search
Search price : $price_search Wood🌲
",
]);
help_send($chat_id,"no_wood_find_for_search","
Commander, according to the contract with the spies, they tell us the amount of enemy resources we can get from each search, but they take wood from us
");
}else{
file_put_contents(".run/".$chat_id."mise.txt",$message_id2); 
$scandir = scandir("users/$chat_id/enemy");
    unset($scandir[0]);  unset($scandir[1]);
    $count = count($scandir) + 1;
if($count < 2){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
🤡There is no enmity right now🙁
",
]);
}else{
    $rand = rand(2,$count);
    $enemy = $scandir[$rand];
    $nameen = get_user($enemy,"name");
    $troopenemy = round(get_user($enemy,'troop'));
    file_put_contents("users/$chat_id/enemy.txt",$enemy);
$joinclanen = get_user($enemy,"joinclan");
  $enfood = get_user($enemy,'food');
  $enwood = get_user($enemy,'wood');
  $GLfood = round(Get_Loot($troop,$enfood));
  $GLwood = round(Get_Loot($troop,$enwood));

 $wood -= $price_search;
 
 $locationen = get_user($enemy,'location');
$location = get_user($chat_id,'location');
$secound_attack = area($location,$locationen);

   chenge_user($chat_id,'wood',$wood);
httpt('editMessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$mise, 
    'text'=>"
Search fee $price_search Wood🌲

The enemy you want [$enemy](tg://user?id=$enemy)
$Troopenemy soldier We can win $GLfood wheat and $GLwood wood in this war
Interval🕠 $secound_attack Second
Location🗺 $locationen
$joinc

",
'parse_mode'=>'MARKDOWN',
 'reply_markup' => json_encode([
                'inline_keyboard' => [
                   [
['text'=>"Attack❗️",'callback_data'=>"attack"]
                    ],
                    [['text'=>'Retry🔍','callback_data'=>'sen']],
 [
['text'=>'Subscribe to Alliance↩️','callback_data'=>"shere_$enemy"]
                    ]
                    ]

                    ])
]);
}
}
}
}

if($text1 == "Store💵"){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Welcome to the store😉 
", 
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
['text'=>"Buy level👴"],['text'=>"Teleport🗺"]
                ],
                [
                ['text'=>"Create traps💣"],['text'=>'Diamond conversion💎']
                ],
                [
                ['text'=>'Double the speed⏱']
                ],
               [
               ['text'=>'Purchase Fund🎁'],['text'=>'Shield🛡']
               ],
[
['text'=>$back]
                ]
              ],
])
]);
}
if($text1 == "Teleport🗺"){
help_send($chat_id,"shop_xp","
Teleport changes the position of our village on the game map
You can change position by teleporting your position
");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
You can change your location using teleport


Cost💰

Random teleport🗺 50 Diamond💎

",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>"Random teleport🗺"],['text'=>$back]
                ]
]])
]);
}
if($text1 == "Random teleport🗺"){
$ra = file_get_contents("users/$chat_id/running_attack");
if($ra == true){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
You can't teleport during an attack✖
",
'parse_mode'=>'MARKDOWN',
]);
}elseif($gold >= 50){
$gold -= 50;
chenge_user($chat_id,'gold',$gold);
Random_Teleport($chat_id);
$scandir_enemys = scandir("users/$chat_id/runnig_attack");
unset($scandir_enemys[0]);
unset($scandir_enemys[1]);
foreach($scandir_enemys as $se){
file_put_contents("users/$se/enemy_etgha.txt",false);
untime("attack_troop".$se."");
rm("users/$chat_id/runnig_attack/$se");
file_put_contents("users/$se/running_attack",false);
httpt('sendmessage',[ 
    'chat_id'=>$se, 
    'text'=>"
Attack on $chat_id stopped!🚫
User location changed✅
",
'parse_mode'=>'MARKDOWN',
]);
}
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Location changed successfully✅
",
'parse_mode'=>'MARKDOWN',
]);
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Your diamond is not enough✖
",
'parse_mode'=>'MARKDOWN',
]);
}
}
if($text1 == "Buy level👴"){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
We can multiply our purchasing power levels, but it costs🔑
Price : $pricexp Diamond💎
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>"Buy level🔮"],['text'=>$back]
                ]
]])
]);
help_send($chat_id,"shop_xp","
We can increase the power levels of farms and so on
");
}
if($text1 == "Buy level🔮"){
if($xp >= 25){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your level is perfect!😉
",
]);
}else{
$startfarm = get_user($chat_id,'farm');
if($startfarm != 0){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Please empty the village farm first🎃
",
          'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
['text'=>"harvest⛏︄",'callback_data'=>"getfarm"]
                    ]
                ]
            ])
]);
help_send($chat_id,"shop_xp_error_farm","
Click the $back button to do this, then click Resources and Reap
");
}else
if($gold >= $pricexp){
$gold -= $pricexp;
chenge_user($chat_id,'gold',$gold);
update_level($chat_id);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Level purchased successfully🎃
",
]);
help_send($chat_id,"shop_xp_complate","
Now the capacity of troops and farms and so on has increased
");
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your coins are not enough🎃
",
]);
}
}
}
if($text1 == "Shield🛡"){
help_send($chat_id,"what_shild","
You can use Shield to loot village defenses against attacks from village resources
");
if($shild == "on"){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your shield is active!🌷
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>"Remove shield🔮"],['text'=>$back]
                ]
]])
]);
}elseif($shild == "off"){

httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Buy Shield for an hour for 5 coins🎃
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>"Buy Shield🔮"],['text'=>$back]
                ]
]])
]);
}
}
if($text1 == "Buy Shield🔮" and $shild == "off"){
if($gold >= 5){
$gold -= 5;
chenge_user($chat_id,'gold',$gold);
add_shild($chat_id);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Shield was successfully purchased🔮
",
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your coins are not enough😭
",
]);

}
}
if($text1 == "Remove shield🔮" and $shild == "on"){
delete_shild($chat_id);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Shield successfully removed🔮
",
]);
}
if($text1 == "Purchase Fund🎁"){
help_send($chat_id,"shop_box","
Funds contain some materials that can help us improve the village
");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Iron box:🔩 : 
30 key price🔑
Awards🛢 :
3000 to 9000 wheat
5000 to 15000 wood
1 to 3 diamonds💎

Gold Box:🌝 : 
Price of 100 keys🔑
Awards🛢 :
15,000 to 25,000 wheat
20,000 to 30,000 wood
10 to 15 diamonds💎

Giant fund👺 : 
Price 150 keys🔑
Awards🛢 :
30,000 to 35,000 wheat
50,000 to 60,000 wood
20 to 25 diamonds💎


Antar Box👹 : 
Price of 450 keys🔑
Awards🛢 :
300,000 to 500,000 wheat
500,000 to 600,000 wood
50 to 70 diamonds💎
", 
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>"Iron box🔩"],['text'=>'Gold Box🌝']
                ],
                [
                ['text'=>'Giant Box👺'],['text'=>'Antar Box👹']
],
[
['text'=>$back]
                ]
              ],
])
]);
}
if($text1 == "Iron box🔩"){

if($key >= 30){
$randfood = rand(3000,9000);
$randwood = rand(5000,15000);
$randgold = rand(1,3);
$key -= 30;
chenge_user($chat_id,"key",$key);
$food += $randfood;
chenge_user($chat_id,"food",$food);
$wood += $randwood;
chenge_user($chat_id,"wood",$wood);
$gold += $randgold;
chenge_user($chat_id,"gold",$gold);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Open the box🔑👮
Our box contains $randfood wheat and $randwood wood along with $randgold diamonds!
",
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your keys are not enough🔑
",
]);
}

}
if($text1 == "Gold Box🌝"){

if($key >= 100){
$randfood = rand(15000,25000);
$randwood = rand(20000,30000);
$randgold = rand(10,15);
$key -= 100;
chenge_user($chat_id,"key",$key);
$food += $randfood;
chenge_user($chat_id,"food",$food);
$wood += $randwood;
chenge_user($chat_id,"wood",$wood);
$gold += $randgold;
chenge_user($chat_id,"gold",$gold);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Open the box🔑👮
Our box contains $randfood wheat and $randwood wood along with $randgold diamonds!
",
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your keys are not enough🔑
",
]);
}

}
if($text1 == "Giant Box👺"){

if($key >= 150){
$randfood = rand(30000,35000);
$randwood = rand(50000,60000);
$randgold = rand(20,25);
$key -= 150;
chenge_user($chat_id,"key",$key);
$food += $randfood;
chenge_user($chat_id,"food",$food);
$wood += $randwood;
chenge_user($chat_id,"wood",$wood);
$gold += $randgold;
chenge_user($chat_id,"gold",$gold);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Open the box🔑👮
Our box contains $randfood wheat and $randwood wood along with $randgold diamonds!
",
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your keys are not enough🔑
",
]);
}

}
if($text1 == "Antar Box👹"){

if($key >= 450){
$randfood = rand(300000,500000);
$randwood = rand(500000,600000);
$randgold = rand(50,70);
$key -= 450;
chenge_user($chat_id,"key",$key);
$food += $randfood;
chenge_user($chat_id,"food",$food);
$wood += $randwood;
chenge_user($chat_id,"wood",$wood);
$gold += $randgold;
chenge_user($chat_id,"gold",$gold);
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Open the box🔑👮
Our box contains $randfood wheat and $randwood wood along with $randgold diamonds!
",
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your keys are not enough🔑
",
]);
}

}

if($text1 == "Double the speed⏱"){

httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
You can double the speed of farm construction by paying 10 diamonds💀
For 1 hour🕒
",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
['text' => "Buy",'callback_data'=>"shop2x"]
                 ]
                ]
            ])
]);

help_send($chat_id,"shop_2speed","
Commander Please buy boosters can help a lot in village development
");
}
if($text1 == "shop2x"){
if($gold >= 10 and get_user($chat_id,'x2') != true){
$gold -= 10;
chenge_user($chat_id,'gold',$gold);

chenge_user($chat_id,'x2',true);

chenge_user($chat_id,'timexp2',time());

httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Purchase successful💂
",
]);
help_send($chat_id,"shop_2sc","
Thank you so much for listening
Now let's go check the farm
");
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your diamonds are not enough😥
",
]);
}
}
$ptale3 = $ptale * 3;
if($text1 =="Create traps💣"){
    	httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Create 3 traps💣
Price💵 : $ptale3 Wood
Woods🌲 : ".roundk($wood)."
Traps💣 : ".roundk($tale)."
",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
['text' => "Buy",'callback_data'=>"ct"]
                                        ],
                    [
['text' => "Created manually",'callback_data'=>"customtale"]
                    ]

                ]
            ])
]);
help_send($chat_id,"shop_tale","
Traps will be destroyed during the battle before the enemy reaches the village
");
}
if($text1 == 'ct'){
    file_put_contents(".run/".$chat_id."mit.txt",$message_id2); 
    if($wood >= $ptale){
    $tale += 3;
    $wood -= $ptale3;
    $mit = file_get_contents(".run/".$chat_id."mit.txt"); 
    chenge_user($chat_id,'wood',$wood);
    chenge_user($chat_id,'tale',$tale);
     httpt('editMessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$mit, 
    'text'=>" 
Create 3 traps💣
Price💵 : $ptale3 Wood
Woods🌲 : ".roundk($wood)."
Traps💣 : ".roundk($tale)."
",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
['text' => "Buy",'callback_data'=>"ct"]
                    ],
                    [
['text' => "Created manually",'callback_data'=>"customtale"]
                    ]
                ]
            ])
]);
    }else{
        $mit = file_get_contents(".run/".$chat_id."mit.txt"); 
      httpt('editMessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$mit, 
    'text'=>" 
Not enough resources 😭
",
            ]);
    }
}
if($text1 == "Diamond conversion💎"){
help_send($chat_id,"chenge_gold","
From here we can turn our coins into resources
");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The number of your diamonds : $gold 💎
", 
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>"Become wheat🌾"],['text'=>'Become a stick🌲']
                ],
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
if($text1 == "Become wheat🌾"){
file_put_contents("users/$fadmin/convert.txt","food");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Pack 1
10 diamonds for 50,000 wheat

Pack 2
50 diamonds for 300,000 wheat

Pack 3
100 diamonds for 700,000 wheat

Pack 4
200 diamonds for 1400000 wheat
", 
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>"Pack 1"],['text'=>'Pack 2']
                ],
                [
                ['text'=>"Pack 3"],['text'=>'Pack 4']
                ],
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
if($text1 == "Become a stick🌲"){
file_put_contents("users/$fadmin/convert.txt","wood");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Pack 1
10 diamonds for 50,000 sticks

Pack 2
50 diamonds for 300,000 sticks

Pack 3
100 diamonds for 700,000 sticks

Pack 4
200 diamonds for 1400000 stick
", 
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>"Pack 1"],['text'=>'Pack 2']
                ],
                [
                ['text'=>"Pack 3"],['text'=>'Pack 4']
                ],
                [
                ['text'=>$back]
                ]
              ],
])
]);
}

$converttype = file_get_contents("users/$fadmin/convert.txt");
if($converttype == 'food'){
if($text1 == "Pack 1"){
$cg = conver_gold($chat_id,'food',1);
if($cg == true){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The purchase was successful👼
",
'parse_mode'=>'MARKDOWN',
]);
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Diamonds are not enough👼
",
'parse_mode'=>'MARKDOWN',
]);
}
}
if($text1 == "Pack 2"){
$cg = conver_gold($chat_id,'food',2);
if($cg == true){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The purchase was successful👼
",
'parse_mode'=>'MARKDOWN',
]);
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Diamonds are not enough👼
",
'parse_mode'=>'MARKDOWN',
]);
}
}
if($text1 == "Pack 3"){
$cg = conver_gold($chat_id,'food',3);
if($cg == true){
httpt('sendmessage',[ 

    'chat_id'=>$chat_id, 
    'text'=>" 
The purchase was successful👼
",
'parse_mode'=>'MARKDOWN',
]);

}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Diamonds are not enough👼
",

'parse_mode'=>'MARKDOWN',
]);
}
}
if($text1 == "Pack 4"){
$cg = conver_gold($chat_id,'food',4);
if($cg == true){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The purchase was successful👼
",
'parse_mode'=>'MARKDOWN',
]);
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Diamonds are not enough👼
",
'parse_mode'=>'MARKDOWN',
]);
}
}
}
if($converttype == 'wood'){

if($text1 == "Pack 1"){
$cg = conver_gold($chat_id,'wood',1);
if($cg == true){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The purchase was successful👼
",
'parse_mode'=>'MARKDOWN',
]);
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Diamonds are not enough👼
",
'parse_mode'=>'MARKDOWN',
]);
}
}
if($text1 == "Pack 2"){
$cg = conver_gold($chat_id,'wood',2);
if($cg == true){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The purchase was successful👼
",
'parse_mode'=>'MARKDOWN',
]);
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Diamonds are not enough👼
",
'parse_mode'=>'MARKDOWN',
]);
}
}
if($text1 == "Pack 3"){
$cg = conver_gold($chat_id,'wood',3);
if($cg == true){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The purchase was successful🎃
",
'parse_mode'=>'MARKDOWN',
]);
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Diamonds are not enough👼
",
'parse_mode'=>'MARKDOWN',
]);
}
}
if($text1 == "Pack 4"){
$cg = conver_gold($chat_id,'wood',4);
if($cg == true){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The purchase was successful👼
",
'parse_mode'=>'MARKDOWN',
]);
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Diamonds are not enough👼
",
'parse_mode'=>'MARKDOWN',
]);
}
}
}
if(in_array($fadmin,$admin)){
if($text1 == "/panel"){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
You became an admirer👼
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
[
                ['text'=>'Investigate fraudulent accounts😈'],['text'=>'Send diamonds💎']
],
                [
                ['text'=>'Troubleshoot accounts💎'],['text'=>'Original files⬆️']
                ],
                [
                ['text'=>"number of members👤"],['text'=>'Send gifts🎅']
                ],
         
      [
                ['text'=>"Send wheat🌾"],['text'=>"Send wood🌲"]
                ],
                [
                ['text'=>"Send to everyone👥"],['text'=>"Account Reset❌"]
                ],
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
if($text1 == "Account Reset❌"){
run($fadmin,"chat_id");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Enter the ID you want to chat with😌✋
",
]);
}
if($run == "chat_id" and $text1 != $back){
sign($text1);
run($fadmin,"no");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Account deleted!❌
",
]);
httpt('sendmessage',[ 
    'chat_id'=>$text1, 
    'text'=>" 
Your account has been deleted!❌
",
]);
}


if($text1 == "Send diamonds💎"){
run($fadmin,"chengelootgold");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Enter the ID you want to chat with😌✋
",
]);
}
if($run == "chengelootgold" and $text1 != $back){
file_put_contents(".run/adminsendloot",$text1);
run($fadmin,"chengelootgold2");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Enter the value you want😌✋
",
]);
}
if($run == "chengelootgold2" and $text1 != $back){
$chat = file_get_contents(".run/adminsendloot");
chenge_user($chat,'gold',$text1);
run($fadmin,"ni");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Done!🎃
",
]);
}





if($text1 == "Send wood🌲"){
run($fadmin,"chengelootwood");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Enter the ID you want to chat with😌✋
",
]);
}
if($run == "chengelootwood" and $text1 != $back){
file_put_contents(".run/adminsendloot",$text1);
run($fadmin,"chengelootwood2");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Enter the value you want😌✋
",
]);
}
if($run == "chengelootwood2" and $text1 != $back){
$chat = file_get_contents(".run/adminsendloot");
chenge_user($chat,'wood',$text1);
run($fadmin,"ni");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Done!🎃
",
]);
}



if($text1 == "Investigate fraudulent accounts😈"){
$checkusers = scandir("users");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
please wait...
",
]);
foreach($checkusers as $users){
$mylords = file_get_contents("users/$users/zirmajmoecount.txt");
$golduser = file_get_contents("users/$users/gold");
$fooduser = file_get_contents("users/$users/food");
$xuser = file_get_contents("users/$users/xp");

if($xuser > 15){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The $users account has a problem
Level: $xuser
",
]);

}

if(count(scandir("users")) < $mylords){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The $users account has a problem
Number of commanders: $mylords
",
]);
}
if($golduser > 200){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The $users account has a problem
Number of coins: $golduser
",
]);
}
if($fooduser > 10000000){
httpt('sendmessage',[ 
    'chat_id'=>$fooduser, 
    'text'=>" 
The $users account has a problem
Number of Wheat: $fooduser
",
]);
}
} 
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
All fake accounts sent.....
",
]);
}
if($text1 == "Original files⬆️"){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
please wait....
",
]);
httpt('senddocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFILE("index.php"),
]);
httpt('senddocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFILE("map.php"),
]);
httpt('senddocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFILE("busers.json")
]);
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
All original files sent👍
",
]);
}
if($text1 == "Send wheat🌾"){
run($fadmin,"chengelootfood");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Enter the ID you want to chat with😌✋
",
]);
}
if($run == "chengelootfood" and $text1 != $back){
file_put_contents(".run/adminsendloot",$text1);
run($fadmin,"chengelootfood2");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Enter the value you want😌✋
",
]);
}
if($run == "chengelootfood2" and $text1 != $back){
$chat = file_get_contents(".run/adminsendloot");
$fooduser = round(get_user($chat,'food'));
$fooduser += $text1;
chenge_user($chat,'food',$fooduser);
run($fadmin,"ni");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Done!🎃
New user value $fooduser
",
]);
}

if($text1 == "Generosity👴"){
$su = scandir('users');
   foreach($su as $users){
$troopus = round(get_user($users,'troop'));
$foodus = round(get_user($users,'food'));
$woodus = round(get_user($users,'wood'));
$goldus = round(get_user($users,'gold'));

if($troopus == 0){
chenge_user($users,'troop',100);
httpt('sendmessage',[ 
    'chat_id'=>$users, 
    'text'=>"
You were given 100 free soldiers💂
",
]);
}
if($foodus == 0){
chenge_user($users,'food',2000);
httpt('sendmessage',[ 
    'chat_id'=>$users, 
    'text'=>"
You were given 2000 free wheat💂
",
]);
}
if($woodus == 0){
chenge_user($users,'wood',2000);
httpt('sendmessage',[ 
    'chat_id'=>$users, 
    'text'=>"
You were given 2000 free sticks💂
",
]);
}
if($goldus == 0){
chenge_user($users,'gold',10);
httpt('sendmessage',[ 
    'chat_id'=>$users, 
    'text'=>"
You were given 10 free diamonds💂
",
]);
}

}

httpt('sendmessage',[ 
    'chat_id'=>$fadmin, 
    'text'=>"
Giving is over and no one needs it💂
",
]);
}
if($text1 == "Troubleshoot accounts💎"){
$su = scandir('users');
$countbag = 0;
foreach($su as $users){
$xpuser = file_get_contents('users/'.$users.'/xp');
if($xpuser == null and is_numeric($users)){
$countbag += 1;
sign($users);
httpt('sendmessage',[ 
    'chat_id'=>$users, 
    'text'=>"
Your account was OK!
Unfortunately, this was an unusual problem that was resolved by your report💂
",
]);
}
}
httpt('sendmessage',[ 
    'chat_id'=>$fadmin, 
    'text'=>"
There were a number of $countbag accounts that were resolved that were resolved
",
'parse_mode'=>'MARKDOWN',
]);
}

if($text1 == "number of members👤"){
$count = count(scandir("users")) - 3;
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Number of players👤 : $count
",
]);
}
if($text1 == "Send to everyone👥"){
run($fadmin,"sendtoall");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Enter the text you want to send to everyone📡
If canceled $back click!😌✋
",
]);
}
if($run == "sendtoall" and $text1 != $back){
$users = scandir("users");
run($fadmin,"no");
foreach($users as $yses){
httpt('sendmessage',[ 
    'chat_id'=>$yses, 
    'text'=>" 
$text1
",
]);
}
}

if($text1 == "Send gifts🎅"){
run($fadmin,"sendgift");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
How much wheat and wood do you give everyone?📡
If canceled $back click!😌✋
",
]);
}
if($run == "sendgift" and $text1 != $back){
$users = scandir("users");
run($fadmin,"no");
foreach($users as $yses){

$addfood = get_user($yses,'food');
$addfood += $text1;
chenge_user($yses,'food',$addfood);


$addwood = get_user($yses,'wood');
$addwood += $text1;
chenge_user($yses,'wood',$addwood);

httpt('sendmessage',[ 
    'chat_id'=>$yses, 
    'text'=>" 
We have been sent a gift pack containing $text1 of wood and wheat🌾
",
]);
}
}
}
if($text1 == "My village🏡"){

help_send($chat_id,"my_village","
Here's your village information

Wheat: Wheat is a resource for the soldier as well as their food and other items (collect: farm)

Woods: Woods are used to increase lord power and to increase the level of stands, etc. (Collect: Farm)

Diamonds: For the development of the village, it must find diamonds. Diamonds are used to increase the level of creation of alliances, resource conversion, etc. (Collect: Adventure ...)

Soldiers: The main use of soldiers and their races is to fight only (made: wheat)

Level: The level is actually your progress in the game, the more power your village gets (diamond needs)

Cup: Used for the Thai League (you get some after each fight)

League: The league is actually your position in Kingdam (the game) where you meet others

Keys: Keys are used to buy cash (you get after the war)

Your ID: You need this ID to get Soldier Fighting Resources, etc.

Wound Adhesive: This substance treats the number after it has been defended by soldiers (Collections: Alliance and Alliance Dollars)

Coordinates: This item should never go off Location coordinates are used to send troops and war resources
");

$joinclan = get_user($chat_id,"joinclan");

$ratecup = getrank($chat_id,'cup');

$what_tolid = what_tolid($chat_id);

$mylords = file_get_contents("users/$chat_id/zirmajmoecount.txt");

    httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Wheat🌾 ".roundk($food)." (".Convert_to_unit($food).")
Woods🌲 ".roundk($wood)." (".Convert_to_unit($wood).")
Diamonds💎 ".roundk($gold)." (".Convert_to_unit($gold).") /free_gems
Soldiers💂‍♀  ".roundk($troop)." / ".roundk(max_troop($chat_id))." 
Your level👴 ".roundk($xp)." / 25
Cup🏆 ".roundk($cup)." ( Rating $ratecup )
League👑  ".lig($chat_id)."
Your keys🔑  ".roundk($key)."
Your ID🆔 $chat_id
Alliance name👑 $joinclan
The name of Lord🏢 $name
Shield🗼 $shild
Speed of production of resources👨🏻‍🌾 $what_tolid per second
Consumption of soldiers💂🌾 ".food_troop($chat_id)." Wheat every five minutes
band aids🤕 $bandaids
Your coordinates 🏤 $location 
Game hours🕘 ".date("H").":".date("i").":".date("s")."
Join the game📅  ".date("F")."/".date("d")."
",
]);
}

if($text1 == "entertroop"){
if(max_troop($chat_id) < $troop){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
You have at most soldiers🎃
",
]);
}else{
run($chat_id,"entertroop");
$pricealltroop = floor($food / $ptroop);
$maxforcreate = max_troop($chat_id) - $troop;
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Send the desired number💀
Maximum troop capability: ".roundk($pricealltroop)."
Ability to create space to complete: ".roundk($maxforcreate)."

",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
}
if($run == "entertroop"){
    $textacg = preg_replace('/[^0-9]/','',$text1);
    $trooptest = $troop + $textacg;
    $packprice = $textacg * $ptroop;
    if($food >= $packprice and $text1 != $back){
    if(max_troop($chat_id) < $trooptest){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
You have at most soldiers!🎃
",
]);
}else{
$troop += $textacg;
    $food -= $packprice;
    chenge_user($chat_id,'food',$food);
    chenge_user($chat_id,'troop',$troop);
    $pricealltroop = floor($food / $ptroop);
if($pricealltroop > 0){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Designed troops💀
Creating Remnants💀 : ".roundk($pricealltroop)."
",
]);
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Designed troops💀
",
]);
}
}
}elseif($text1 != $back){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Not enough resources💀
",
'parse_mode'=>'MARKDOWN',
]);
}
}



if($text1 == "customtale"){
run($chat_id,"customtale");
$pricealltale = floor($wood / $ptale);
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Send the desired number💀
Maximum traps : ".roundk($pricealltale)."
",
'parse_mode'=>'Markdown', 
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
if($run == "customtale"){
    $textacg = preg_replace('/[^0-9]/','',$text1);
    $packprice = $textacg * $ptale;
    if($wood >= $packprice and $text1 != $back){
    $tale += $textacg;
    $wood -= $packprice;
    chenge_user($chat_id,'wood',$wood);
    chenge_user($chat_id,'tale',$tale);
    $pricealltroop = floor($wood / $ptale);

if($pricealltroop > 0){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The traps were created💀
Creating Remnants💀 : ".roundk($pricealltroop)."
",
'parse_mode'=>'MARKDOWN',
]);

}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The traps were created💀
",
'parse_mode'=>'MARKDOWN',
]);
}
}elseif($text1 != $back){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Not enough resources💀
",
'parse_mode'=>'MARKDOWN',
]);
}
}
$joinclan = get_user($fadmin,"joinclan");
if($text1 == "Cologne🛡"){
if($joinclan == null){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Build an alliance or join an alliance👹
",
'parse_mode'=>'MARKDOWN',
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                 [
                 ['text'=>'About an alliance🛡']
                 ],
                 [
                 ['text'=>'Create Alliance🎭'],['text'=>'Enter Alliance👾']
                ],
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
}

if($joinclan == null){
if($text1 == "About an alliance🛡"){
run($chat_id,"info_clan");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Enter the name of the alliance💎
",
'parse_mode'=>'MARKDOWN',
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
if($run == "info_clan" and $text1 != $back){
if(is_dir("clans/$text1")){
$pct = power_clan($text1,'troop');
$countclan = count(scandir("clans/$text1/users"));
$mintroop = get_clan($text1,'mintroop');
$adminclans = file_get_contents("clans/$text1/admin.txt");
$lfarm = file_get_contents("clans/$text1/lfarm.txt");
$mintroop = get_clan($text1,'mintroop') + 0;
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
number of members💂‍♀ : $countclan / 70
Minimum soldier to join: ".roundk($mintroop)."
Creator: $adminclans
Farm Power: $lfarm level
Power Soldier💂 : ".roundk($pct)."
",
]);
}else{


httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
This alliance does not exist💀
",
]);
}
}
if($text1 == "Create Alliance🎭"){
run($chat_id,"create_clan1");

httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Enter the name of the alliance💎
Cost 50 diamonds💎
",
'parse_mode'=>'MARKDOWN',
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
if($run == "create_clan1" and $text1 != $back){
if($gold >= 50){
if(!is_dir("clans/$text1")){
$gold -= 50;
chenge_user($chat_id,'gold',$gold);
chenge_user($chat_id,"joinclan",$text1);
mkdir("users/$chat_id/clan");
file_put_contents("users/$chat_id/clan/name.txt",$text1);
mkdir("clans/$text1");
mkdir("clans/$text1/users");
mkdir("clans/$text1/users/$chat_id");
file_put_contents("clans/$text1/admin.txt",$fadmin);
file_put_contents("clans/$text1/lfarm.txt",1);
file_put_contents("clans/$text1/ldisk.txt",1);
file_put_contents("clans/$text1/merchants.txt",35);
file_put_contents("clans/$text1/gold.txt",50);
run($chat_id,"no");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Alliance created successfully!
",
'parse_mode'=>'MARKDOWN',
]);
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
This name is already used
",
'parse_mode'=>'MARKDOWN',
]);
}
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Not enough resources!
",
'parse_mode'=>'MARKDOWN',
]);
}
}
if($text1 == "Enter Alliance👾"){
run($chat_id,"join_clan");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Enter the name of the alliance💎
",
'parse_mode'=>'MARKDOWN',
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
if($run == "join_clan" and $text1 != $back){
if(is_dir("clans/$text1")){
$mintroop = get_clan($text1,'mintroop');
if($troop >= $mintroop){
$countclan = count(scandir("clans/$text1/users"));
if($countclan < 70){
run($chat_id,"no");
chenge_user($chat_id,"joinclan",$text1);
mkdir("users/$chat_id/clan");
mkdir("clans/$text1/users");
mkdir("clans/$text1/users/$chat_id");
file_put_contents("users/$chat_id/clan/name.txt",$text1);
$adminclans = file_get_contents("clans/$text1/admin.txt");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Successfully logged in
",
]);
httpt('sendmessage',[ 
    'chat_id'=>$adminclans, 
    'text'=>" 
User [$chat_id](tg://user?id=$chat_id) Became a member of the alliance💎
",
'parse_mode'=>'MARKDOWN',
]);
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Members of this alliance have reached their maximum😒
",
'parse_mode'=>'MARKDOWN',
]);
}
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your troops are not enough to enter the alliance💀
At least a soldier : ".roundk($mintroop)."
",
'parse_mode'=>'MARKDOWN',
]);
}
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
This alliance does not exist
",
'parse_mode'=>'MARKDOWN',
]);
}
}
}
$goldclan = file_get_contents("clans/$joinclan/gold.txt");
$adminclans = file_get_contents("clans/$joinclan/admin.txt");
$percenterch = file_get_contents("clans/$joinclan/merchants.txt");
if($joinclan != null){


if($text1 == "Cologne🛡"){

$info = get_clan($joinclan,'bio');

if(!is_dir("clans/$joinclan/users/$chat_id")){
mkdir("clans/$joinclan/users/$chat_id");
}

if($chat_id != $adminclans){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Alliance name : $joinclan
$info
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
                     'keyboard'=>[
 [
['text'=>'Buy from Alliance⛪️']
],
               [
 ['text'=>"Alliance Farm🎃"],['text'=>'Diamond Alliance💎']
],
               [
               ['text'=>"Chat Alliance☁"]
               ],
               [
                ['text'=>"Members List👹"],['text'=>'The Power of Alliance⚔']
                ],
                [
                ['text'=>"Exit Alliance🎪️"],['text'=>$back]
                ]
              ],
])
]);
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Alliance name : $joinclan
$info
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
 [
 ['text'=>"Alliance Store💰"],['text'=>'Buy from Alliance⛪️']
],
               [
 ['text'=>"Alliance Farm🎃"],['text'=>'Diamond Alliance💎']
],
               [
               ['text'=>"Chat Alliance☁"],['text'=>'Send to all members🤠']
               ],
               [
                ['text'=>"Members List👹"],['text'=>'The Power of Alliance⚔']

                ],
                [
                ['text'=>'laying off🤡'],['text'=>'Settings⚙']
                ],
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
}
$dollar = roundk(file_get_contents("clans/$joinclan/users/$chat_id/shokolat"));

if($text1 == 'Buy from Alliance⛪️'){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Number of your dollars : $dollar $💵 


Buy 5 scars for🤕 2$💵 
/shop_band
Buy 500 Wound Adhesives for 200$💵 
/shop_band2


Buy 3000 wheat for🌾 2$💵 
/shop_food
Buy 300,000 wheat for🌾 200$💵 
/shop_food2



Buy 10 traps for💣 3$💵 
/shop_tale
Buy 1000 traps for💣 300$💵
/shop_tale2
",
]);
}

if($text1 == "/shop_band2"){
if($dollar >= 200){

$bandaids = get_user($chat_id,'bandaids');
$bandaids += 500;
file_put_contents("users/$chat_id/bandaids",$bandaids);
$dollar -= 200;
file_put_contents("clans/$joinclan/users/$chat_id/shokolat",$dollar);

httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Successfully bought 500 glue wounds!🤕
",
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your dollars are not enough💵 
",
]);
}
}


if($text1 == "/shop_food2"){
if($dollar >= 200){

$food += 300000;
file_put_contents("users/$chat_id/food",$food);

$dollar -= 200;
file_put_contents("clans/$joinclan/users/$chat_id/shokolat",$dollar);

httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
You have successfully bought 300,000 wheat!🌾
",
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your dollars are not enough💵 
",
]);
}
}


if($text1 == "/shop_tale2"){
if($dollar >= 300){

$tale += 1000;
file_put_contents("users/$chat_id/tale",$tale);
$dollar -= 300;
file_put_contents("clans/$joinclan/users/$chat_id/shokolat",$dollar);

httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
You have successfully purchased 1000 traps!🤕
",
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your dollars are not enough💵 
",
]);
}
}


if($text1 == "/shop_tale"){
if($dollar >= 3){

$tale += 10;
file_put_contents("users/$chat_id/tale",$tale);
$dollar -= 3;
file_put_contents("clans/$joinclan/users/$chat_id/shokolat",$dollar);

httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
You have successfully purchased 10 traps!🤕
",
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your dollars are not enough💵 
",
]);
}
}
if($text1 == "/shop_food"){
if($dollar >= 2){

$food += 3000;
file_put_contents("users/$chat_id/food",$food);

$dollar -= 2;
file_put_contents("clans/$joinclan/users/$chat_id/shokolat",$dollar);

httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
You have successfully bought 3000 wheat!🌾
",
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your dollars are not enough💵 
",
]);
}
}
if($text1 == "/shop_band"){
if($dollar >= 2){

$bandaids = get_user($chat_id,'bandaids');
$bandaids += 5;
file_put_contents("users/$chat_id/bandaids",$bandaids);
$dollar -= 2;
file_put_contents("clans/$joinclan/users/$chat_id/shokolat",$dollar);

httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
You successfully bought 5 glue wounds!🤕
",
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your dollars are not enough💵 
",
]);
}
}
if($text1 == "Diamond Alliance💎"){
$joinclan = get_user($chat_id,"joinclan");
if(!file_exists("clans/$joinclan/users/$chat_id/gold")){
file_put_contents("clans/$joinclan/users/$chat_id/gold","0");
}
if($xp < 3){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Your level is less than 3
",
]);
}else
if($gold > 0){
run($chat_id,"sendgoldclan");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Cologne diamonds number: $goldclan
Edinburgh Cologne can boost the level by using diamonds, alliance farms, and so on
How much diamond do you donate?
Number of your diamonds: $gold
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
               [
               ['text'=>$back]
                ]
              ],
])
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Number of Cologne diamonds : $goldclan
Edinburgh Cologne can boost the level by using diamonds, alliance farms, and so on

🚫You have no diamonds to donate!🚫
",
]);
}
}
if($run == "sendgoldclan" and $text1 != $back and is_numeric($text1)){
$textacg = preg_replace('/[^0-9]/','',$text1);
if($gold >= $textacg){
$joinclan = get_user($chat_id,"joinclan");
$gold -= $textacg;
chenge_user($chat_id,'gold',$gold);
$goldclan = file_get_contents("clans/$joinclan/gold.txt");
$goldclan += $textacg;
file_put_contents("clans/$joinclan/gold.txt",$goldclan);

$addgold = roundk(file_get_contents("clans/$joinclan/users/$chat_id/gold"));

$addgold += $textacg;

file_put_contents("clans/$joinclan/users/$chat_id/gold",$addgold);

$shokolat = file_get_contents("clans/$joinclan/users/$chat_id/shokolat");
$addshokolat = $textacg * 2;
$shokolat += $addshokolat;
file_put_contents("clans/$joinclan/users/$chat_id/shokolat",$shokolat);

if($gold > 0){
$textview = "
You have helped your alliance You can still help $gold diamonds!🎃
";
}else{
$textview = "
You helped your union🎃
";
}

httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
$textview
",
]);
}else{
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Not enough resources!🎃
",
]);
}
}
if($text1 == "Alliance Farm🎃"){
$joinclan = get_user($chat_id,"joinclan");
$addgold = roundk(file_get_contents("clans/$joinclan/users/$chat_id/gold"));
if(get_clan($joinclan,'mingoldfarm') > $addgold){
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The farm is limited!😕
we must ".get_clan($joinclan,'mingoldfarm')." Donate diamonds to the alliance!😒
Your donated diamonds $addgold 😩
",
]);
}else{
$startfarm = get_user($chat_id,'farm_clan');
if($startfarm == 0){
$speedfarm = farm_clan($joinclan,'speed');
$diskfarm = farm_clan($joinclan,'max');
$lfarmclan = file_get_contents("clans/$joinclan/lfarm.txt");
httpt('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Farm level 🏡 : $lfarmclan
Production speed⚡️ : $speedfarm Second
Space 🌕 : ".roundk($diskfarm)."

Wheat  🌱 : ".roundk($food)."
Wood 🌲: ".roundk($wood)."

",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
['text' => "💠Create 5000 soldiers💠",'callback_data'=>"startfarmclan"]
                    ]
                ]
            ])
]);

}else{

$time = time();
$timefarm = get_user($chat_id,'farm_clan');
$infarn = $time - $timefarm;
$speedfarm = farm_clan($joinclan,'speed');
$diskfarm = farm_clan($joinclan,'max');
$in_farm = $infarn * $speedfarm;
if($timefarm == 0){
$infarm = 0;
}else
if($in_farm > $diskfarm){
$infarm = $diskfarm;
$textf = "
Alliance Farm .... Great❤️
Here it is about a few times the power of the domestic farm👌 But don't just donate your diamond to Cologne to improve the management of this farm😎 
So far with this farm we have been able to grow $infarm wood and wheat. Our production speed is now $speedfarm per second and its space is $diskfarm🙂As you can see, the Alliance Farm is full and it's time to reap💪";
}else{
$infarm = $in_farm;
$textf = "
Alliance Farm .... Great❤️
It has about a few times the power of a domestic farm here👌 But don't just donate your diamond to Cologne to improve the management of this farm😎 
So far with this farm we have been able to grow $infarm wood and wheat. Our production speed is now $speedfarm per second and its space is $diskfarm🙂";
}

httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>$textf,
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
['text'=>"Update♐️",'callback_data'=>"updatefarmclan"]
                    ],
                    [
['text'=>"harvest⛏",'callback_data'=>"getfarmclan"]
                    ]
                ]
            ])
]);


}
}
}

if($text1 == 'Send to all members🤠' and $chat_id == $adminclans){
run($chat_id,"sendforallclan");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Enter the text you want👹
",

'parse_mode'=>'MARKDOWN',
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
}

if($text1 == 'Exit Alliance🎪️'){
$startfarm = get_user($chat_id,'farm_clan');
if($startfarm == 0){
$joinclan = get_user($chat_id,"joinclan");
chenge_user($chat_id,"joinclan",null);
rm("users/$chat_id/clan");
rm("clans/$joinclan/users/$chat_id");
file_put_contents("users/$chat_id/clan/name.txt",null);
$adminclans = file_get_contents("clans/$joinclan/admin.txt");
httpt('sendmessage',[ 
    'chat_id'=>$adminclans, 
    'text'=>" 
User [$chat_id](tg://user?id=$chat_id) He left the union💀
",
'parse_mode'=>'MARKDOWN',
]);
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Successfully logged out💀
",
'parse_mode'=>'MARKDOWN',
]);
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Please harvest the Alliance Farm first😈
",
'parse_mode'=>'MARKDOWN',
]);
}
}
if($text1 == "The Power of Alliance⚔"){
$joinclan = get_user($chat_id,"joinclan");
$scanglobal = scandir("clans/$joinclan/users");
unset($scanglobal[0]); unset($scanglobal[1]);
$powertroop = 0;
$powercup = 0;
$countjoin = 0;
foreach($scanglobal as $sendforall){
$powertroop += get_user($sendforall,'troop');
$powercup += get_user($sendforall,'cup');
$countjoin += 1;
}
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
number of members👤 : $countjoin From 70 people
Power Soldier💂 : ".round($powertroop)."
Cup power🏆 : ".round($powercup)."
",
'parse_mode'=>'MARKDOWN',
]);
}
if($text1 == 'Members List👹'){
del_text("users_".$joinclan."");
$scanglobal = scandir("clans/$joinclan/users");
unset($scanglobal[0]); unset($scanglobal[1]);

$adminclans = file_get_contents("clans/$joinclan/admin.txt");
foreach($scanglobal as $sendforall){
if(is_numeric($sendforall)){

$zombies_user = roundk(file_get_contents("users/$sendforall/zombies")); 
$virus_user = file_get_contents("users/$sendforall/virus.txt"); 

if($virus_user == "t"){
$VirusT_User = "|| Virus T💉 || 🧟‍♂$zombies_user";
}else{
$VirusT_User = "";
}


$addgold = roundk(file_get_contents("clans/$joinclan/users/$sendforall/gold"));
$counttroop = roundk(get_user($sendforall,'troop'));
$counttale = roundk(get_user($sendforall,'tale'));
$location_user = get_user($sendforall,'location');
$area_user = area($location,$location_user);
$power_defence_user = $counttroop + $counttale;
$countcup = roundk(get_user($sendforall,'cup'));
$countxp = roundk(get_user($sendforall,'xp'));
$nameuser = get_user($sendforall,'name');
if(!in_array($adminclans,$scanglobal)){
mkdir("clans/$joinclan/users/$adminclans");
}
if($sendforall == $adminclans){
$text = "
⚔ $counttroop || 🛡 $power_defence_user || 🗺 $location_user || 🔰 $area_user S || 🤠 $sendforall || Manage Clan 💪 $VirusT_User
➖➖➖➖➖➖➖➖
";
add_text("users_".$joinclan."",$text);
}else
if($sendforall == $chat_id){
$text = "
⚔ $counttroop || 🛡 $power_defence_user || 🗺 $location_user || 🔰 $area_user S || 🤠 $sendforall || You 💪 $VirusT_User
➖➖➖➖➖➖➖➖
";
add_text("users_".$joinclan."",$text);

}else{
$text = "
⚔ $counttroop || 🛡 $power_defence_user || 🗺 $location_user || 🔰 $area_user S || 🤠 $sendforall || member Clan 💪 $VirusT_User
➖➖➖➖➖➖➖➖
";
add_text("users_".$joinclan."",$text);
}
}
}
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
".get_text("users_".$joinclan."")."
",
'parse_mode'=>'MARKDOWN',
]);
}



$adminclans = file_get_contents("clans/$joinclan/admin.txt");
if($chat_id == $adminclans){
if($text1 == "laying off🤡" and $chat_id == $adminclans){
run($chat_id,"remove_userclan");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Enter the ID of the person you are looking for👮
",
'parse_mode'=>'MARKDOWN',
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
if($text1 == "Settings⚙" and $chat_id == $adminclans){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
welcome!👹
",
'parse_mode'=>'MARKDOWN',
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>'Text to enter Cologne']
                ],
                [
                ['text'=>'At least one soldier to enter the alliance']
                ],
                [
                ['text'=>'Farm Restrictions🏘']
                ],
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
if($text1 == "Farm Restrictions🏘" and $chat_id == $adminclans){
run($fadmin,"mingoldfarm");
$mingoldfarm = get_clan($joinclan,'mingoldfarm');
$mingoldfarm += 0;
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
You can apply a restriction that people who donate less than imported diamonds cannot use the farm
Current number : $mingoldfarm
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ]
])
 ]);
}
if($run == "mingoldfarm" and $text1 != $back){
run($fadmin,"no");
$text1 = preg_replace('/[^0-9]/','',$text1);
chenge_clan($joinclan,'mingoldfarm',$text1);
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The target number has changed!
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ]
])
 ]);
}
$price_update_farm = farm_clan($joinclan,"update");
if($text1 == 'Increase the farm🎪️' and $chat_id == $adminclans){
if($price_update_farm == "max"){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The Alliance Farm is full👮
",
 ]);
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Upgrade cost❇️ $price_update_farm Diamond💎
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>"Buy a farm💵️"],['text'=>$back]
                ]
              ]
])
 ]);
}
}
$price_update_sendloot = persent_sendloot($joinclan,"update");
if($text1 == 'Decrease transfer percentage🎪️'){
if($price_update_sendloot == "max"){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
It reduces the full alliance👮
",
 ]);
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Upgrade cost❇️ $price_update_sendloot Diamond💎
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>"Buy transfer💵️"],['text'=>$back]
                ]
              ]
])
 ]);
}
}
if($text1 == 'Buy a farm💵️' and $price_update_farm != "max"){
if($goldclan >= $price_update_farm){

$goldclan = file_get_contents("clans/$joinclan/gold.txt");

$goldclan -= $price_update_farm;

file_put_contents("clans/$joinclan/gold.txt",$goldclan);

$level_farm = file_get_contents("clans/$joinclan/lfarm.txt");

$level_farm += 1;

file_put_contents("clans/$joinclan/lfarm.txt",$level_farm);

httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Purchase successful!
",
]);

}else{

httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Alliance diamonds are not enough!
",
]);

}
}
if($text1 == 'Alliance Store💰' and $chat_id == $adminclans){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Welcome to the Alliance Store section
$Goldclan alliance diamonds
",
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>"Increase the farm🎪️"],['text'=>$back]
                ]
              ]
])
]);
}
if($text1 == "Text to enter Cologne" and $chat_id == $adminclans){
run($fadmin,"textjoinclan");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Enter the text you want!👹
",
]);
}
if($run == "textjoinclan" and $text1 != $back){
chenge_clan($joinclan,'bio',$text1);
run($fadmin,"no");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
was set👹!
",
]);
}
if($text1 == "At least one soldier to enter the alliance" and $chat_id == $adminclans){
run($fadmin,"mintroopforjoin");
$mintroop = get_clan($joinclan,'mintroop');
$mintroop += 0;
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Current number💂 ".roundk($mintroop)."
Enter the desired number!👹
Example: 1000

After joining 1000 people with fewer than 1000 soldiers, they cannot join the alliance
",
]);
}
if($run == "mintroopforjoin" and $text1 != $back and is_numeric($text1)){
$text1 = preg_replace('/[^0-9]/','',$text1);
chenge_clan($joinclan,'mintroop',$text1);
run($fadmin,"no");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
was set👹!
",
]);
}
if($run == "remove_userclan" and $text1 != $back){
if(is_dir("clans/$joinclan/users/$text1")){
chenge_user($text1,"joinclan",null);
rm("clans/$joinclan/users/$text1");
file_put_contents("users/$text1/clan/name.txt",null);
httpt('sendmessage',[ 
    'chat_id'=>$text1, 
    'text'=>" 
You were fired from the alliance💀
",
'parse_mode'=>'MARKDOWN',
]);
$adminclans = file_get_contents("clans/$joinclan/admin.txt");
$namereen = get_user($text1,"name");
httpt('sendmessage',[ 
    'chat_id'=>$adminclans, 
    'text'=>" 
User [$text1](tg://user?id=$text1) Was expelled from the alliance💀
You can remove other people by sending an ID or by clicking the button if needed $back click!
",
'parse_mode'=>'MARKDOWN',
]);
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
This user does not exist😑
",
'parse_mode'=>'MARKDOWN',
]);
}
}
}
}
if($run == "sendforallclan" and $text1 != $back){
$scanglobal = scandir("clans/$joinclan/users");
foreach($scanglobal as $sendforall){

httpt('sendmessage',[ 
    'chat_id'=>$sendforall, 
    'text'=>" 
A message from the Alliance Administrator👑 :
$text1
",
]);
}
}
if($text1 == "Revenge☠"){
if($joinclan != null){

run($fadmin,"dead_enemy");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
Who do you want to take revenge on?🤡
",
'parse_mode'=>'MARKDOWN',
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
            'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"
You are not a member of any alliance💀
",
'parse_mode'=>'MARKDOWN',
]);
}
}
if($run == "dead_enemy" and $text1 != $back and $text1 != $chat_id){
if(is_dir("users/$text1")){
if(!is_dir("users/$chat_id/revenge/$text1")){
httpt('sendmessage',[ 

    'chat_id'=>$chat_id, 
    'text'=>"
This person has not committed a crime in your alliance yet💀
You can hit this person when he or she attacks you or your alliance😒
",
'parse_mode'=>'MARKDOWN',
]);
}else{
run($fadmin,"no");
    $enemy = $text1;
    $troopenemy = round(get_user($enemy,'troop'));
    file_put_contents("users/$chat_id/enemy.txt",$enemy);
$joinclanen = get_user($enemy,"joinclan");
  $enfood = get_user($enemy,'food');
  $enwood = get_user($enemy,'wood');
  $GLfood = round(Get_Loot($troop,$enfood));
  $GLwood = round(Get_Loot($troop,$enwood));

 $locationen = get_user($enemy,'location');
$location = get_user($chat_id,'location');
$secound_attack = area($location,$locationen);

if($joinclanen == "null"){
$joinc = "The enemy in question has no alliance either";
}else{
$joinc = "Enemy in alliance $joinclanen Is a member";
}
 $nameen = get_user($enemy,"name");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
The enemy you want [$enemy](tg://user?id=$enemy)
$Troopenemy soldier We can win $GLfood wheat and $GLwood wood in this war
Interval🕠 $secound_attack Second 
Location🗺 $locationen
$joinc
",
'parse_mode'=>'MARKDOWN',
 'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
['text'=>"Start the attack⚔",'callback_data'=>"attackr"]
                 ],
                    ]
                    ])
]);
}
}else{
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>"

This user does not exist😥
",
'parse_mode'=>'MARKDOWN',

]);


}
}
if($text1 == 'Chat Alliance☁'){
if(!is_dir("clans/$joinclan/global")){
mkdir("clans/$joinclan/global");
}
mkdir("clans/$joinclan/global/$fadmin");
run($chat_id,"chat_clan");
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
You have successfully entered the Alliance chat👹
",
'parse_mode'=>'MARKDOWN',
'reply_markup'=>json_encode([ 
'resize_keyboard'=>true,
 'keyboard'=>[
                [
                ['text'=>$back]
                ]
              ],
])
]);
}
if($run == "chat_clan" and $text1 != $back and $text1 != null){
$scanglobalclan = scandir("clans/$joinclan/global");
foreach($scanglobalclan as $sendforall){
httpt('sendmessage',[ 
    'chat_id'=>$sendforall, 
    'text'=>"
Message from the alliance member : [$fadmin](tg://user?id=$fadmin)

     $text1
",
'parse_mode'=>'MARKDOWN',
]);
}
}
if($run == "chat_clan" and $text1 == $back){
rmdir("clans/$joinclan/global/$fadmin");
httpt('sendmessage',[ 
    'chat_id'=>$fadmin, 
    'text'=>"
Successfully logged out
",
'parse_mode'=>'MARKDOWN',
]);
}

if($text1 == 'Global chat🌎'){
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
    'text'=>" 
Game group link 
https://t.me/joinchat/E00pe0MBtZB6b6JBk82wfA
",
'parse_mode'=>'MARKDOWN',
]);
}
if($text1 == 'startfarmclan'){
$joinclan = get_user($chat_id,"joinclan");
$time = time();
chenge_user($chat_id,'farm_clan',$time);
httpt('sendmessage',[ 
    'chat_id'=>$chat_id, 
   'message_id'=>$mi, 
    'text'=>" 
The farm is in production 🌱
",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
['text'=>"Update♐️",'callback_data'=>"updatefarmclan"]
                    ]
                ]
            ])
]);
}
if($text1 == 'updatefarmclan'){
$joinclan = get_user($chat_id,"joinclan");

file_put_contents(".run/".$chat_id."mifc.txt",$message_id2); 
$mic = file_get_contents(".run/".$chat_id."mifc.txt");
$time = time();
$timefarm = get_user($chat_id,'farm_clan');
$infarn = $time - $timefarm;
$speedfarm = farm_clan($joinclan,'speed');
$diskfarm = farm_clan($joinclan,'max');
$in_farm = $infarn * $speedfarm;
if($timefarm == 0){
$infarm = 0;
}else
if($in_farm > $diskfarm){
$infarm = $diskfarm;
$textf = "
So far with this farm we've been able to grow $infarm wood and wheat. Our production speed is now $speedfarm per second and its space is $dis🙂 as you can see the alliance farm is full and it's time to reap.💪";
}else{
$infarm = $in_farm;
$textf = "
So far with this farm we have been able to grow $infarm wood and wheat. Our production speed is now $speedfarm per second and its space is $diskfarm🙂";
}
$level_farm = file_get_contents("clans/$joinclan/lfarm.txt");

httpt('editmessagetext',[ 
    'chat_id'=>$chat_id, 
   'message_id'=>$mic, 
    'text'=>$textf,
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [
['text'=>"Update♐️",'callback_data'=>"updatefarmclan"]
                    ],
                    [
['text'=>"Removal🏜",'callback_data'=>"getfarmclan"]
                    ]
                ]
            ])
]);
}
if($text1 == 'getfarmclan'){
$joinclan = get_user($chat_id,"joinclan");
file_put_contents(".run/".$chat_id."mifc.txt",$message_id2); 
$mic = file_get_contents(".run/".$chat_id."mifc.txt");
$time = time();
$timefarm = get_user($chat_id,'farm_clan');
$infarn = $time - $timefarm;
$speedfarm = farm_clan($joinclan,'speed');
$diskfarm = farm_clan($joinclan,'max');
$in_farm = $infarn * $speedfarm;
if($timefarm == 0){
$infarm = 0;
}else
if($in_farm > $diskfarm){
$infarm = $diskfarm;
}else{
$infarm = $in_farm;
}
chenge_user($chat_id,'farm_clan',0);
$food += $infarm;
$wood += $infarm;
chenge_user($chat_id,'wood',$wood);
chenge_user($chat_id,'food',$food);
if($infarm == 0){
httpt('editmessagetext',[ 
    'chat_id'=>$chat_id, 
   'message_id'=>$mic, 
    'text'=>" 
It had already been harvested!😒
",
]);
}else{
httpt('editmessagetext',[ 
    'chat_id'=>$chat_id, 
   'message_id'=>$mic, 
    'text'=>" 
The value ".roundk($infarm)." Wood and wheat were obtained 🌱
",
]);
}
}

file_put_contents("endid.txt",$chat_id);


$list_clans = scandir("clans");
unset($list_clans[0]); unset($list_clans[1]);
foreach($list_clans as $nane_clan){
$sc = scandir("clans/$nane_clan/users");
unset($sc[0]); unset($sc[1]);
foreach($sc as $usersclan){
$joinclan = get_user($usersclan,"joinclan");
if($joinclan != "$nane_clan"){
rm("clans/$nane_clan/users/$usersclan");
}
}
}



if(get_time("backup") > 3600){


untime("backup");
mail_a('busers.json','/','busers.json','AntarSidgi@gmail.com','backup','Backup User Information');
mail_a('index.php','/','index.php','AntarSidgi@gmail.com','backup','Original File Backup');
save_time("backup");
httpt('sendmessage',[ 
    'chat_id'=>323823995, 
    'text'=>" 
The backup was sent to AntarSidgi@gmail.com!😇
",
]);
}


   $su = scandir('users');
   foreach($su as $users){

if(!file_exists("users/$users/hungry.txt")){
file_put_contents("users/$users/hungry.txt",1);
}

$location_user = get_user($users,'location');
if(!is_dir("xys/users/$location_user")){
mkdir("xys/users/$location_user");
file_put_contents("xys/users/$location_user/chat.txt",$users);
}

if(!file_exists("users/$users/virus.txt")){
file_put_contents("users/$users/virus.txt",1);
}

$virus_user = file_get_contents("users/$users/virus.txt");

if($virus_user == 't'){

if(get_time("zombiestroop_".$users."") > 1800){

$getcz = count_zombie($users);

$troop_user = file_get_contents("users/$users/troop");

$troop_user -= $getcz;

file_put_contents("users/$users/troop",$troop_user);

$zombies_user = file_get_contents("users/$users/zombies");

$zombies_user += $getcz;

file_put_contents("users/$users/zombies",$zombies_user);

untime("zombiestroop_".$users."");
save_time("zombiestroop_".$users."");

}


}



$type_quest = file_get_contents("users/$users/quest/type.txt");

if($type_quest == "start"){

$quest = get_time("quest_".$users."");
$level = file_get_contents("users/$users/quest/quest.txt");
$quest_time = quest_time($users,$level);

if($quest >= $quest_time){

$cluntmajra = roundk(file_get_contents("users/$users/lord/countmajra"));
$cluntmajra += 1;
file_put_contents("users/$users/lord/countmajra",$cluntmajra);


$zor_users = zor_lord($users);

$match_zorus = explode("-",quest_reward_zor($users,$level));

$rand_zorus = rand($match_zorus[0],$match_zorus[1]);

$zor_users += $rand_zorus;
file_put_contents("users/$users/lord/zor",$zor_users);


$lord_healthus = file_get_contents("users/$users/lord/health");
$lord_healthus -= 5;
file_put_contents("users/$users/lord/health",$lord_healthus);

$goldus = round(get_user($users,'gold'));
$lord_healthus = file_get_contents("users/$users/lord/health");
file_put_contents("users/$users/quest/type.txt","no");
$levelus = file_get_contents("users/$users/quest/quest.txt");
$match_rewardus = explode("-",quest_reward($users,$level));
$rand_rewardus = rand($match_rewardus[0],$match_rewardus[1]);
$goldus += $rand_rewardus;
chenge_user($users,"gold",$goldus);

httpt('sendMessage',[ 
    'chat_id'=>$users, 
    'text'=>"
The mission ended😏
+ $rand_rewardus 💎
- 5 ❄1�7
+ $rand_zorus 💪
", 
]);




}


}

// UPDATE


if(get_time("attack_for_autotel".$users."") > 3600){
save_time("attack_for_autotel".$users."");
file_put_contents("users/$users/count_attack",0);
}
$enemymy = file_get_contents("users/$users/enemy.txt");

$running_attack = file_get_contents("users/$users/running_attack");

$locationen = get_user($enemymy,'location');

$location = get_user($users,'location');

$secound_attack = area($location,$locationen);

if(get_time("attack_troop".$users."") >= $secound_attack and $running_attack == true){

file_put_contents("users/$users/enemy_etgha.txt",false);

untime("attack_troop".$users."");

rm("users/$enemymy/runnig_attack/$users");

file_put_contents("users/$users/running_attack",false);

attack_troop($users,$enemymy);
}




$nameus = get_user($users,'name');

if($nameus == null){
file_put_contents("users/$users/name",$users);
}

if(get_time("ft_".$users."") > 300){
if(food_troop($users) < get_user($users,'food')){
file_put_contents("users/$users/hungry.txt",1);
$foodus = get_user($users,'food');
$foodus -= food_troop($users);
file_put_contents("users/$users/food",$foodus);
}else{
file_put_contents("users/$users/hungry.txt",2);

}

untime("ft_".$users."");
save_time("ft_".$users."");
}

if(!is_dir("users/$users/reward")){
mkdir("users/$users/reward");
}

$shildus = check_shild($users);
       $joinclanusers = get_user($users,"joinclan");
       $time = time();
       $timexp = get_user($users,'timexp2');
       $lasttime = $time - $timexp;
       $xpstart = get_user($users,'x2');
       if($lasttime > 3600 and $xpstart != false){
       chenge_user($users,'x2',false);
       chenge_user($users,'timexp2',0);

$troopus = get_user($users,'troop');

$time = time();
$timefarm = get_user($users,'farm');
$infarn = $time - $timefarm;
$speedfarm = farm($users,'speed');
$diskfarm = farm($users,'max');
$in_farm = $infarn * $speedfarm;
if($timefarm == 0){
$infarm = 0;
}else
if($in_farm > $diskfarm){
$infarm = $diskfarm;
}else{
$infarm = $in_farm;
}
chenge_user($users,'farm',0);
$food = get_user($users,"food");
$food += $infarm;
$wood = get_user($users,"wood");
$wood += $infarm;
chenge_user($users,'wood',$wood);
chenge_user($users,'food',$food);


       httpt('sendmessage',[ 
    'chat_id'=>$users, 
    'text'=>"
Double use of your farm has ended👮
$Infarm wood and wheat received 🌱
",
'parse_mode'=>'MARKDOWN',
]);
       }
  $xp2 = get_user($users,'xp');
  $cup2 = get_user($users,'cup');
  $food2 = get_user($users,'food');
  $wood2 = get_user($users,'wood');
  $health = file_get_contents("users/$users/lord/health");
     if($health < 0){
     file_put_contents("users/$users/lord/health",0);
     }
     if($health > 100){
     file_put_contents("users/$users/lord/health",100);
     }
      if($cup2 < 0){
 chenge_user($users,"cup",0); 
      }
      if($food2 < 0){
 chenge_user($users,"food",0); 
      }
    if($wood2 < 0){
 chenge_user($users,"wood",0); 
      }
     $joinclanus = get_user($users,"joinclan");
     $joinclan = get_user($chat_id,"joinclan");
     $min_troop_attack = min_troop_attack($chat_id);
     $troopen = round(get_user($users,'troop'));
$scen = scandir("users/$users/enemy");
foreach($scen as $userenemy){
if(!is_numeric($userenemy)){
rmdir("users/$users/enemy/$userenemy");
}
}
   }



$users_attack = scandir('users');
unset($users_attack[0]);
unset($users_attack[1]);
foreach($users_attack as $users){
$scandir_enemys = scandir("users/$users/runnig_attack");
unset($scandir_enemys[0]);
unset($scandir_enemys[1]);
foreach($scandir_enemys as $se){
$shildse = check_shild($se);
if($shildse == "on"){

file_put_contents("users/$se/enemy_etgha.txt",false);

untime("attack_troop".$se."");

rm("users/$users/runnig_attack/$se");

file_put_contents("users/$se/running_attack",false);

httpt('sendmessage',[ 
    'chat_id'=>$se, 
    'text'=>"
Attack on $users stopped!🚫
Your Shield Activated!
",
'parse_mode'=>'MARKDOWN',
]);
}
if(check_shild($users) == "on"){

file_put_contents("users/$se/enemy_etgha.txt",false);

untime("attack_troop".$se."");

rm("users/$users/runnig_attack/$se");

file_put_contents("users/$se/running_attack",false);

httpt('sendmessage',[ 
    'chat_id'=>$se, 
    'text'=>"
Stop attacking $users!🚫
User Shield enabled
",
'parse_mode'=>'MARKDOWN',
]);
}
}


}

// BackUp

if(!is_dir("backups")){
mkdir("backups/users");
mkdir("backups/clans");
}



// BackUp

}



copy("index.php","backup/index.txt");




file_put_contents("updates.txt",file_get_contents("php://input"));




?>
