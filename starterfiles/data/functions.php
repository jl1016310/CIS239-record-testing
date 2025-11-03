<?php
require_once __DIR__ . '/db.php';

function formats_all(): array
{
    $pdo = get_pdo();
    
    return $pdo->query("SELECT id, name FROM formats ORDER BY name ASC")->fetchAll();


}

function records_all(): array
{
    $pdo = get_pdo();  
    $stmt = $pdo->prepare("
    SELECT r.*, f.name
    FROM records r
    JOIN formats f ON r.format_id = f.id
    ORDER BY r.id ASC
  ");

  $stmt->execute();
  return $stmt->fetchAll();
}

function record_insert(string $title, string $artist, float $price, int $format_id) : void {

    $pdo = get_pdo();
    $stmt = $pdo->prepare("INSERT INTO records(title, artist, price, format_id) VALUES (:title, :artist, :price, :format_id)");
    $stmt->execute([
        ':title'     => $title,
        ':artist'    => $artist,
        ':price'     => $price,
        ':format_id' => $format_id
    ]);

    $stmt->rowCount();

}




?>
