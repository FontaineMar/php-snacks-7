<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni
alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
  $alunni = [
    [
      'name' => 'Marco',
      'lastname' => 'Fontaine',
      'voti' => [ 5, 6, 7, 5, 4, 8 ,7]
    ],
    [
      'name' => 'Babu',
      'lastname' => 'Beba',
      'voti' => [ 5, 6, 7, 5, 10,7,8]
    ]
  ];


  for ($i=0; $i < count($alunni); $i++) {
    $voti_avg = array_sum($alunni[$i]['voti']) / count($alunni[$i]['voti']);
    echo $alunni[$i]['name'] . " " . $alunni[$i]['lastname'] . " media voti= " . $voti_avg . '<br>';
  }
 ?>
