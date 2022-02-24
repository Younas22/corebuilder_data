<?php

$api_result = file_get_contents('http://localhost/inv.json');


$decode_res = json_decode($api_result);

// echo "<pre>"; print_r($decode_res->Sheet1); exit();


// foreach ($decode_res->Sheet1 as $key) {
//             // echo $key->Article;

// echo "INSERT INTO project_imgs(`p_id`,`item_one`, `q_one`, `invoice_one`, `item_two`, `q_two`, `invoice_two`, `item_three`, `q_three`, `invoice_three`, `item_char`, `q_char`, `invoice_char`, `item_panch`, `q_panch`, `invoice_panch`)
// VALUES
// (
// 'Lifting wrist straps', 8684.76967, 6
// );<br>";
// }


$inv = array();
$count = 1;
foreach ($decode_res->Sheet1 as $keee) {
    array_push($inv, array(
        '1'=>$keee->Article,
        '2'=>$keee->price,
        '3'=>$keee->id
    ));
$count++; }


// echo "<pre>"; print_r(($inv)); exit();
// echo "<pre>"; print_r($inv[1][2]); exit();
// echo "<pre>"; echo($inv[10][2]); exit();



for ($i=1; $i < count($inv); $i++) {
echo "INSERT INTO project_imgs(`p_id`,`item_one`, `q_one`, `invoice_one`, `item_two`, `q_two`, `invoice_two`, `item_three`, `q_three`, `invoice_three`, `item_char`, `q_char`, `invoice_char`, `item_panch`, `q_panch`, `invoice_panch`, `item_chay`, `q_chay`, `invoice_chay`, `item_sat`, `q_sat`, `invoice_sat`, `item_ath`, `q_ath`, `invoice_ath`, `item_no`, `q_no`, `invoice_no`, `item_ten`, `q_ten`, `invoice_ten`)VALUES(6
,".'"'.$inv[$i][1].'"'."
,65,".$inv[$i][2]."
,".'"'.$inv[$i+1][1].'"'."
,87,".$inv[$i+1][2]."
,".'"'.$inv[$i+2][1].'"'."
,23,".$inv[$i+2][2]."
,".'"'.$inv[$i+3][1].'"'."
,43,".$inv[$i+3][2]."
,".'"'.$inv[$i+4][1].'"'."
,54,".$inv[$i+4][2]."
,".'"'.$inv[$i+5][1].'"'."
,98,".$inv[$i+5][2]."
,".'"'.$inv[$i+6][1].'"'."
,45,".$inv[$i+6][2]."
,".'"'.$inv[$i+7][1].'"'."
,78,".$inv[$i+7][2]."
,".'"'.$inv[$i+8][1].'"'."
,65,".$inv[$i+8][2]."
,".'"'.$inv[$i+9][1].'"'."
,68,".$inv[$i+9][2]."
);<br>";
}



// foreach ($decode_res_->Sheet1 as $key) {
//     echo "INSERT INTO `project_imgs`(`p_id`, `form_val_one`, `form_val_two`, `form_val_three`, `form_val_four`, `form_val_panch`, `form_val_chay`, `form_val_sat`, `form_val_ath`, `form_val_no`, `form_val_ten`) VALUES (5,".'"'.$key->Token.'"'.",".'"'.$key->Line.'"'.",".'"'.$key->COMPANY_NAME.'"'.",".'"'.$key->EMAIL.'"'.",".'"'.$key->ADDRESS.'"'.",".'"'.$key->CITY.'"'.",".'"'.$key->ZIPCODE.'"'.",".'"'.$key->SIC_CODE.'"'.",".'"'.$key->SIC_DESCRIPTION.'"'.",".'"'.substr($key->WEB_ADDRESS, 0, 30).'"'.");<br>";
// }