<?
define('PAGE_TITLE', 'Booking confirmation');
define('SEAT_PRICE', 100.50);

$book_client_vip=true;
$book_adults=3;
$book_coast= floatval($book_adults * SEAT_PRICE);
?>




  <h1><?= PAGE_TITLE ?></h1>
   <p>Adults:<?= $book_adults ?></p>
   <p>Total coast: <?= $book_adults ?> x <?= SEAT_PRICE ?> = <?= $book_coast ?></p>

   <? if($book_client_vip ===true): ?> 
   <p>VIP:</p>
   <? endif ?>
