<?php
$fizz = 'Fizz';
$buzz = 'Buzz';

for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 === 0) {
    echo $fizz . $buzz . '<br>';
    continue;
  }

  if ($i % 3 === 0) {
    echo $fizz . '<br>';
    continue;
  } elseif ($i % 5 === 0) {
    echo $buzz . '<br>';
    continue;
  } else {
    echo $i . '<br>';
    continue;
  }
}

echo '<br>';

for ($j = 1; $j <= 5; $j++) {
  for ($k = 1; $k <= 5; $k++) {
    echo '●';
  }
  echo '<br>';
}
?>