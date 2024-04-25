<?php 
$arr_array = array(1,2,3,4,5,6,7,
8,9,10);
$arr_array2 = [1,2,3,4,5,6,7,8,9,10];
foreach ($arr_array as  $key => $value) {
    echo"$key = $value <br>";
}


$student = [
    [
        'nama' => 'Budi',
        'umur' => 12
    ],
    [
        'nama' => 'Andri',
        'umur' => 14
    ],
    [
        'nama' => 'Intan',
        'umur' => 17
    ]

    ];
    foreach ($student as $student) {
        echo $student['nama'] . '-' . $student['umur'] . '<br>';
    }
?>