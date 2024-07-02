<?php
echo "Welcome to the foe each loop<br>";
$arr = array("bananas", "apples", "Harpic", "Bread","Butter");
// for($i = 0; $i < count($arr); $i++)
// {
//     echo $arr[$i];
//     echo "<br>";
// }

foreach($arr as $value)
{
    echo "$value <br>";
}
?>