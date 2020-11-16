<?PHP

//Set your time zone to make sure calculations are correct!
//Time zone should match whatever time your Minecraft server runs on.
//List of Timezones can be found at: http://php.net/manual/en/timezones.php
date_default_timezone_set('America/Winnipeg');

class time{

//<-- pluralizer :: Will add 's to the ends of numbers not ending in 1.
function pluralizer($bln, $suffix='s'){
  return $bln ? $suffix : '';
}
//--> End of  pluralizer()

//<-- Sec2Time :: Turns Seconds to Year, Day, Hours, Minutes, Seconds format.
function Sec2Time($time){
  if(is_numeric($time)){
    $value = array(
      "years" => 0, "days" => 0, "hours" => 0,
      "minutes" => 0, "seconds" => 0,
    );
    $string = "";
    if($time >= 31556926){
      $value["years"] = floor($time/31556926);
      $string .= $value["years"] . " Years, ";
      $time = ($time%31556926);
    }
    if($time >= 86400){
      $value["days"] = floor($time/86400);
      $string .= $value["days"] . " days, ";
      $time = ($time%86400);
    }
    if($time >= 3600){
      $value["hours"] = floor($time/3600);
      $string .= $value["hours"] . " hours, ";
      $time = ($time%3600);
    }
    if($time >= 60){
      $value["minutes"] = floor($time/60);
      $string .= $value["minutes"] . " minutes, ";
      $time = ($time%60);
    }
    $value["seconds"] = floor($time);
    $string .= $value["seconds"] . " seconds ";

    return $string;
  }else{
    return FALSE;
  }
}
}
?>