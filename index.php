<?php
/*
* Autor: Victor David Vazquez Ramirez
* Descripcion:  Prints all the numbers from 1 to 100, however, for multiples of 3, instead of the number, prints "Foo", for multiples of 5 prints "Bar" and * *               for numbers which are multiples of both 3 and 5, prints "FooBar", using only one 'If'.
* Version: 1.0
*/

for($i=1; $i<101; $i++)
{
    $text = "";
    $prefix = "Foo";    
    for($j=3; $j<=5; $j+=2 )
    {        
        if( ($i%$j)==0 ) $text .= $prefix;
        $prefix = "Bar";
    }
    echo "$i$text</br>";
}


/*
Example of Unit testing without a Framework like PHPUnit
--TEST--
 The code have to return all the numbers from 1 to 100, however, for multiples of 3, instead of the number, prints "Foo", for multiples of 5 prints "Bar"  and for numbers which are multiples of both 3 and 5, prints "FooBar".
--FILE--
<?php
    for($i=1; $i<101; $i++)
    {
        $text = "";
        $prefix = "Foo";    
        for($j=3; $j<=5; $j+=2 )
        {        
            if( ($i%$j)==0 ) $text .= $prefix;
            $prefix = "Bar";
        }
        echo "$i$text</br>";
    }
?>
--EXPECT--
 When the number is
    5:  5Bar 
    6:  6Foo
    7:  7
    15: 15FooBar
    75: 75FooBar
    82: 82 
*/