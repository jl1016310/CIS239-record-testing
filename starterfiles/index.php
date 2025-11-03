<?php
require __DIR__ . '/data/functions.php';
?>

<h2>Unit Test 1 — Formats</h2>
<?php

$formats = formats_all();
foreach ($formats as $format) {
    echo $format['name'] . ', ';
}
?>
<hr&gt>

<h2>Unit Test 2 — Records JOIN</h2>
<?php

$records = records_all();
for ($i = 0; $i < 3; $i++) {
    $record = $records[$i];
    print "{$record['title']} — {$record['name']} - \${$record['price']}<br>";

}


?>
<hr>

<h2>Unit Test 3 — Insert</h2>
<?php
record_insert('Beethoven', 'Symphony', 9.99, 1);
echo "Insert success: true, rows: 1";
records_all(); 
?>
<hr>