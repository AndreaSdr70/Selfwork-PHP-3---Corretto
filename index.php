<?php 

$words1 = [
    'vostro', 67, 'essere', 'colle', 'mi', 'sempre', [
      'oscura', 'era', 89, [ 'mezzo', 'E'],
      'ritrovai', 'per'
    ], 'diritta'
  ];
  
  $words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'possa',
    'elemento3' => [
      'Virgilio',
      'Favore',
      'favore',
      ['fortuna']
    ],
    'fine' => '!'
  ];
    
  $words1[] = 'Nel';
  $words1[] = 'di cammin di nostra vita mi';
  $words1[] = 'una selva';
  $words1[] = 'che la';
  $words1[] = 'via';
  $words1[] = 'smarrita';

  print_r($words1);
 
  $results = $words1[8] . " " . $words1[6][3][0] . " " . $words1[9] . " " . $words1[6][4] . " " . $words1[6][5]. " " . $words1[10] . " " . $words1[6][0] . " " . $words1[11] . " " . $words1[7] . " " . $words1[12] . " " . $words1[6][1]. " " . $words1[13];

echo ($results);












?>
