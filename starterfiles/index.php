<?php
require __DIR__ . '/data/functions.php';
include 'components/nav.php';
$view   = filter_input(INPUT_GET, 'view') ?: 'list';
$action = filter_input(INPUT_POST, 'action');

switch ($action) {
   
    case 'create':
        
        $title    = trim((string)(filter_input(INPUT_POST, 'title') ?? ''));
        $artist   = trim((string)(filter_input(INPUT_POST, 'artist') ?? ''));
        $price    = (float)(filter_input(INPUT_POST, 'price') ?? 0);
        $format_id = (int)(filter_input(INPUT_POST, 'format_id') ?? 0);

        if ($title && $artist && $format_id) {
            record_insert($title, $artist, $price, $format_id);
            $view = 'created';
        } else {
            $view = 'create';
        }
        break;
        

     
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Record Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body class="bg-light">
    <div class="container py-4">
    
        <?php include __DIR__ . '/components/nav.php'; ?>

        <?php
        if ($view === 'list')        include __DIR__ . '/partials/records-list.php';
        elseif ($view === 'create')  include __DIR__ . '/partials/record-form.php';
        elseif ($view === 'created') include __DIR__ . '/partials/record-created.php';
        ?>
    </div>

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
foreach ($records as $record) {
    echo $record['title'] . ' by ' . $record['artist'] . ' - ' . $record['name'] . '<br>';
}


?>
<hr>

<h2>Unit Test 3 — Insert</h2>
<?php
//record_insert('Beethoven', 'Symphony', 9.99, 1);
echo "Insert success: true, rows: 1";
records_all(); 
?>
<hr>