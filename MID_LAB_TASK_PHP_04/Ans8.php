<?php

    $arr=[
        ['1','2','3','A'],
        ['1','2','B','C'],
        ['1','D','E','F'],

    ];

    

    for($i=3;$i>=1;$i--)
    { 
     for($j=1;$j<=$i;$j++)
        {
            echo"$j ";
        }
        echo"\n";
    }


    $p="A";
    for($i=1;$i<=3;$i++)
    {
        for($j=1;$j<=$i;$j++)
        {
            echo$p." ";
            $p++;
        }
        echo"\n";
    }

    
?>