<?php

const TICKET_PRICE = 100;

if (array_key_exists('quantity', $_GET)) {
  $quantity = $_GET['quantity'];

  // Check if quantity is an integer and greater than 0
  if (is_int($quantity) && $quantity > 0) {
    $cost = TICKET_PRICE * $quantity;
    $total = $cost;
  } else {
    $error = "Quantity must be a positive integer!";  // Clearer error message
  }
} else {
  $error = "You didn't specify any quantity!";
}

?>


<a href="/?quantity=1">Buy 1 ticket</a>
<a href="/?quantity=2">Buy 2 tickets</a>
<a href="/?quantity=3">Buy 3 tickets</a>

<? if (isset($total)): ?>
<div>
    <?= $quantity?> tickets x <?= TICKET_PRICE?> = <?= $total ?>
</div>
<? endif ; ?>
 
<? if (isset($error)): ?>
    <div style="color:red;font-size:30px;"> <?= $error ?> </div>
    <? endif ; ?>