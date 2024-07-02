<?php
echo 'Multi-dimmensional Array.<br>';
$multidim = array(
                 array(2,4,6,8),
                 array(1,3,5,7),
                 array(10,20,30,40));
// echo var_dump($multidim); // This is not a right way to print the 2d array
// We will use traditional for loop for printing the array

for($i = 0; $i < count($multidim); $i++)
{
    echo var_dump($multidim[$i]);
    echo '<br>';
}
?>