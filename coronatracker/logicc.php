<?php

  $jsonData= file_get_contents("https://api.covid19india.org/data.json");
  $data= json_decode($jsonData,true);
   foreach($data as $key =>$value){
       if($key== 'cases_time_series'){
       $days_count = count($value)-1;
       $days_count_prev= $days_count -1;}
       //echo $days_count . ' ' . $days_count_prev . '<br>';
   }

   foreach($data as $key =>$value){
    if($key== 'statewise'){
    $length_count = count($value)-1;
    $length_count_prev= $days_count -1;}
    //echo $days_count . ' ' . $days_count_prev . '<br>';
}

   $jsonDat=file_get_contents("https://api.covid19india.org/states_daily.json");
   $dat= json_decode($jsonDat,true);
   foreach($dat as $keyy =>$valuee){
    if($keyy== 'states_daily'){
        $cur_deceased = count($valuee)-1;
    $cur_recovered= $cur_deceased -1;
    $cur_confirmed=$cur_recovered-1;}
    //echo $days_count . ' ' . $days_count_prev . '<br>';
}
  /* $total_confirmed =0;
   $total_recovered=0;
   $total_deaths=0;

   foreach($data as $key =>$value){
    $total_confirmed+= $value[$days_count]['confirmed'];
    $total_recovered+= $value[$days_count]['recovered'];
    $total_deaths+= $value[$days_count]['deaths'];

}*/





?>