<html>
  <body>
    <pre>
      <?php
        $categories = ['Programming', 'Business', 'Art & Drawing', 'Self Improvement', 'History'];
        $randoms = ['JavaScript' => 'Jonas Schmedtman'
        , 'Food store' => 'Coop'
        , "Mona Lisa" => 'Davinci Leonardo'
        , "David Goggins" => "Osårbar"
        , "Second World War" => "Germany"
      ];
      // var_dump($business['JavaScript']);
      // var_dump(isset($business['JavaScript']));
      // var_dump(!empty($business['JavaScript']));
     // Hämta arrayer
 

     $speakers = [
      'Dr. Miller' => 'Artificial Intelligence',
      'Prof. Johnson' => 'Robotics',
      'Dr. Smith' => 'Quantum Computing',
      'Dr. Brown' => 'Cybersecurity'
  ];

  unset($speakers['Prof. Johnson']);
if (count($speakers) < 3) {
    $speakers['Prof. Taylor'] = 'Blockchain';
}
$topics = array_values($speakers);

var_dump($topics)
      ?>
    </pre>
    <ul>
      <?php foreach ($randoms AS $key => $val): ?> 
              <li><?php echo $key; ?> - <?php echo $val; ?></li>  
        <?php endforeach; ?>
    </ul>
  </body>
</html>