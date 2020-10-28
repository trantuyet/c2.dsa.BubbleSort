<?php
function bubble_Sort($my_array )
{
    do
    {
        $swapped = false;
        for( $i = 0, $c = count( $my_array ) - 1; $i < $c; $i++ )
        {
            if( $my_array[$i] > $my_array[$i + 1] )
            {
                list( $my_array[$i + 1], $my_array[$i] ) =
                    array( $my_array[$i], $my_array[$i + 1] );
                $swapped = true;
            }
        }
    }
    while( $swapped );
    return $my_array;
}
$test_array = array(2, 3, 2, 5, 6, 1, -2, 3, 14, 12);
echo "Original Array :\n";
echo implode(', ',$test_array );
echo "\nSorted Array\n:";
echo implode(', ',bubble_Sort($test_array)). PHP_EOL;
?>