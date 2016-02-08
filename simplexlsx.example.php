<?php

if (isset($_FILES['file'])) {

    require_once "simplexlsx.class.php";

    $xlsx = new SimpleXLSX( $_FILES['file']['tmp_name'] );

    echo '<h1>Parsing Result</h1>';
    echo '<table border="1" cellpadding="3" style="border-collapse: collapse">';

    list($cols,) = $xlsx->dimension();
    $f=0;

    foreach( $xlsx->rows() as $k => $r) {

//if ($k == 0) continue; // skip first row
        echo '<tr>';
        for( $i = 0; $i < $cols; $i++){
            $a[] = array_fill($f, 1, $r);
            $f++;
            echo '<td>'.( (isset($r[$i])) ? $r[$i] : '&nbsp;' ).'</td>';}
        echo '</tr>';

    }
    echo '</table>';
}
//$a = array_fill(1, 1, 'erf');
/*print_r($a[0][0][4]);
print_r($a[5][5][4]);
print_r($a[10][10][4]);
print_r($a[0][0][1]);

$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
unset($value);
*/

$z = 0;
$k=0;
do {
    $b[$k]=$a[$z][$z];
    $z=$z+5;
    $k=$k+1;
} while ($z <=500);
//print_r($b[91][2]);


$array1 = array(array('a','y','c'), "red", "blue", "red");
$array2 = array(array('a','b','c'),"green", "yellow", "red");
$result = array_diff($array1[0], $array2[0]);
//print_r(count($result));

print_r($result)



?>
<h1>Upload</h1>
<form method="post" enctype="multipart/form-data">
    *.XLSX <input type="file" name="file"  />&nbsp;&nbsp;<input type="submit" value="Parse" />
</form>
