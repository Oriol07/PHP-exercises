<?php
// Exercise 1.
// 	With the given array $arreglo print:
// 		Lado, ledo, lido, lodo, ludo, 
// 		decirlo al revés lo dudo. 
// 		Ludo,lodo,lido,ledo,lado,
// 		¡Qué trabajo me ha costado!
$arreglo = [
    
    'KeyStr1' => 'lado',
    0 => 'ledo',
    
    'KeyStr2'=> 'lido',
    1 => 'lodo',
    2 => 'ludo'
];

$firstTime = true;

foreach ($arreglo as $data)
{
    if ($firstTime)
    {
        $data = ucfirst($data);
    }
    printf("%s, ", $data);
    
    if($firstTime)
    {
        $data = lcfirst(($data));
        $firstTime = false;
    }
}

printf("\ndecirlo al revés lo dudo. \n");
$firstTime = true;

foreach ( array_reverse($arreglo) as $data ) {
    
    if ($firstTime)
    {
        $data = ucfirst($data);
    }
    echo sprintf("%s,", $data);
    
    if($firstTime)
    {
        $data = lcfirst(($data));
        $firstTime = false;
    }
}
printf("\n¡Qué trabajo me ha costado!\n");


// Exercise 2.
	// Make an array with countries as keys and as value 3 cities of the country, and then print the name of the country with the cities.
$arreglo = [
    
    'Catalunya' => array('Girona', 'Terrassa', 'Barcelona'),
    'Sverige' => array('Stockholm', 'Malmo', 'Goteborg'),
    'Japan' => array('Tokio', 'Osaka', 'Kioto'),
];

foreach ($arreglo as $key => $country)
{
    echo $key.": ";
    foreach ($country as $city)
    {
        printf("%s ", $city);
    }
    printf("\n");
}	

// Exercise 3.
	//Find the three smallest and biggest numbers of the array $values.
$values = [23,54,32,67,34,78,98,56,21,34,57,92,12,5,61];

$bigs;
$smalls;
$isInArray = false;

for($i= 0; $i < 3; $i++)
{
    $bigs[$i] = PHP_INT_MIN;
    $smalls[$i] = PHP_INT_MAX;
}

for($i= 0; $i < 3; $i++)
{
    foreach ($values as $data)
    {
        if ($bigs[$i] < $data)
        {
            foreach ($bigs as $big)
            {
                if ($big == $data)
                {
                    $isInArray = true;
                }
            }
            if(!$isInArray)
            {
                $bigs[$i] = $data;
            }
            $isInArray = false;
        }
        if($smalls[$i] > $data)
        {
            foreach ($smalls as $small)
            {
                if ($small == $data)
                {
                    $isInArray = true;
                }
            }
            if(!$isInArray)
            {
                $smalls[$i] = $data;
            }
             $isInArray = false;
            
        }
    }
}
echo "The biggest are: ";
foreach($bigs as $data)
{
    echo $data.", ";
}
echo "\n The smallest are: ";
foreach($smalls as $data)
{
    echo $data.", ";
}

?>
