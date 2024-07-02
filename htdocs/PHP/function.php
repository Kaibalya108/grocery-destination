<?php  
echo "Functions in PHP<br>";

function processMarks($marks)
{
    $sum = 0;
    foreach ($marks as $value)  // $value means each elements of the array.
    {
        $sum += $value;
    }
    return $sum;
    // return $sum/count($marks); Calculates the average marks of the individuals.
}




$marks = [34,56,78,98,23,56];
$total_marks = processMarks($marks);

$sonu = [98,87,95,78,81,92];
$sonu_marks = processMarks($sonu);
echo "Total marks out of 600 is: $total_marks";
echo "<br>Total marks out of 600 is: $sonu_marks";

?>