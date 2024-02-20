
<?
define('PAGE_TITLE', 'Booking confirmation');
define('SEAT_PRICE', 100.50);

$book_client_vip=true;
$book_adults=3;
$book_coast= $book_adults * SEAT_PRICE;
$formatted_coast = '$' . number_format($book_coast, 2, '.', ',');
$formatted_price ='$' . number_format(SEAT_PRICE, 2, '.', ',');

?>




  <h1><?= PAGE_TITLE ?></h1>
   <p>Adults:<?= $book_adults ?></p>
   <p>Total coast: <?= $book_adults ?> x <?= $formatted_price ?> = <?= $formatted_coast ?></p>

   <? if($book_client_vip ===true): ?> 
   <p>VIP:</p>
   <? endif ?>
