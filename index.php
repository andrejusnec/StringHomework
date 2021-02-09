<?php
echo '<h1>Namu darbai su String</h1>';
//Task1
echo '<br><br>Task1<br><br>';
$vardas = 'Johhny';
$pavarde = 'Depp';
if(strlen($vardas) < strlen($pavarde)) {
    echo $vardas;
} else if(strlen($vardas) > strlen($pavarde)) {
    echo $pavarde;
} else {
    echo "Name: $vardas and Surname: $pavarde has the same length!";
}
//Task2
echo '<br><br>Task2<br><br>';
    echo strtoupper($vardas).'<br>';
    echo strtolower($pavarde).'<br>';

//Task3
echo '<br><br>Task3<br><br>';
 $treciasStr = substr($vardas, 0, 2); 
 $treciasStr .= (substr($pavarde, 0, 2));
 echo $treciasStr;
 //Task4
echo '<br><br>Task4<br><br>';
    $ketvirtasStr = substr($vardas, (strlen($vardas)-3), strlen($vardas));  // 10
    $ketvirtasStr .= substr($pavarde, (strlen($pavarde)-3), strlen($pavarde));
    echo $ketvirtasStr;
 //Task5
echo '<br><br>Task5<br><br>';
$penktasStr = 'An American in Paris';
$penktasStr = str_ireplace('A', '*', $penktasStr); // str_ireplace - nejautrus registrui
//$penktasStr = str_replace('A', '*', $penktasStr); //str_replace - jaustrus registrui
echo $penktasStr;
 //Task6
echo '<br><br>Task6<br><br>';
$sestasStr = 'An American in Paris';
$subStr = (substr_count($sestasStr, 'a')) + (substr_count($sestasStr, 'A')); 
echo $subStr;
//Task7
echo '<br><br>Task7<br><br>';
$str1 = 'An American in Paris';
$str1 = str_ireplace(array('a','e','i','o','u','y'), '', $str1);
$str2 = 'Breakfast at Tiffany\'s';
$str2 = str_ireplace(array('a','e','i','o','u','y'), '', $str2);
$str3 = '2001: A Space Odyssey';
$str3 = str_ireplace(array('a','e','i','o','u','y'), '', $str3);
$str4 = 'It\'s a Wonderful Life';
$str4 = str_ireplace(array('a','e','i','o','u','y'), '', $str4);
echo "1. $str1 <br>";
echo "2. $str2 <br>";
echo "3. $str3 <br>";
echo "4. $str4 <br>";
//Task8
echo '<br><br>Task8<br><br>';
$astuntasStr = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $astuntasStr.'<br>';
$episodeNr = (int) filter_var($astuntasStr, FILTER_SANITIZE_NUMBER_INT); //pasiklausti kaip veikia
echo $episodeNr;
//Task9
echo '<br><br>Task9<br><br>';
$stringas1 = 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood';
$stringas2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$stringas1 = explode(' ', $stringas1);
$stringas2 = explode(' ', $stringas2);
$count = 0;
foreach($stringas1 as $arr) {
        if(mb_strlen($arr,'UTF-8') <= 5) {
            $count++;
        }
}
echo 'Pirmame sakinyje:'.$count.'<br>';
$count2 = 0;
foreach($stringas2 as $arr) {
        if(mb_strlen($arr,'UTF-8') <= 5) {
            $count2++;
        }
}
echo "Antrame sakinyje: $count2<br>";

//Task10
echo '<br><br>Task10<br><br>';
$letterPool = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$poolLength = strlen($letterPool);
$strRez = '';
for( $i = 0; $i < 3 ; $i++) {  
    $strRez .= ($letterPool[ rand( 0, $poolLength - 1 ) ]);   
    }
echo $strRez;

//Task11
echo '<br><br>Task11<br><br>';
//print_r($stringas1);
$length = count($stringas2); // nustatau array ilgi
for($i = 0; $i < $length; $i++ ) {
    array_push($stringas1, $stringas2[$i]); //supushinu is antro array elementus i pirma array 
}
$stringas1 = str_replace(',','', $stringas1); // issimu visus kablelius
$length = count($stringas1); //perasau length reiksme(dabar jame yra abieju array elementai)
$newArr = [];
for( $i = 0; $i < 10 ; $i++) {  
    $tarpinis = $stringas1[ rand( 0, $length - 1 ) ]; //random zodis is bendro array
    $flag = true;
        while($flag) { 
            if(in_array($tarpinis, $newArr)) { //Tikrinu ar nera naujame elemento su tokia pacia reiksme
            $tarpinis = $stringas1[ rand( 0, $length - 1 ) ];
        } else {
        $newArr[] .= $tarpinis;
        $flag = false;
        }
    }
}
   // print_r($newArr);
$newStr = implode(' ', $newArr); //perrasau masyva i stringa, per tarpa
echo $newStr;
?>