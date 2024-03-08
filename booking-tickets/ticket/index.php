<?php
const TICKET_PRICE = 100;

if (array_key_exists('quantity', $_GET)) {
  $quantity = filter_var($_GET['quantity'], FILTER_SANITIZE_NUMBER_INT);

  // Check if quantity is not empty after filtering
  if (!empty($quantity) && $quantity > 0) {
    $cost = TICKET_PRICE * $quantity;
    $total = $cost;
  } else {
    $error = "Quantity must be a positive integer!";
  }
} else {
  $error = "You didn't specify any quantity!";
}

?>

<!-- template -->
<a href="/?quantity=1">Buy 1 ticket</a>
<a href="/?quantity=2">Buy 2 tickets</a>
<a href="/?quantity=3">Buy 3 tickets</a>
<hr>
<form  method="GET"  action="/">
    <input type="text" name="quantity" placeholder="enter desired value..."/>
    <button>Buy</button>
</form>
<hr>

<? if (isset($total)): ?>
<div>
    <?= $quantity?> tickets x <?= TICKET_PRICE?> = <?= $total ?>
</div>
<? endif ?>
 
<? if (isset($error)): ?>
    <div style="color:red;font-size:30px;"> <?= $error ?> </div>
    <? endif ; ?>


<!-- variant2 -->
<?php

const TICKET_PRICE = 100;

if (array_key_exists('quantity', $_GET)) {
  $quantity = (int)$_GET['quantity'];
  if (!empty($quantity) && $quantity > 0) {
      $cost = TICKET_PRICE * $quantity;
      $total = $cost;
    } else {
      $error = "Quantity must be a positive integer!";
    }
  } else {
    $error = "You didn't specify any quantity!";
  }
  

?>

<a href="/?quantity=1">Buy 1 ticket</a>
<a href="/?quantity=2">Buy 2 tickets</a>
<a href="/?quantity=3">Buy 3 tickets</a>
<hr>
<form action="">
        <input type="text" name ="quantity" placeholder="Input quantity of tickets">
        <button>BUY</button>
    </form>
<hr>
<? if (isset($total)): ?>
<div>
    <?= $quantity?> tickets x <?= TICKET_PRICE?> = <?= $total ?>
</div>
<? endif ; ?>
 
<? if (isset($error)): ?>
    <div style="color:red;font-size:30px;"> <?= $error ?> </div>
    <? endif ; ?>
