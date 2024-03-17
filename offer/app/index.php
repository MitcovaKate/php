<?
// hm2
// include Включает файл каждый раз при его вызове,отображает предупреждение, если файл не найден и продолжает выполнение сценария.
// include_once Включает файл только один раз, даже при повторном вызове,отображает предупреждение, если файл не найден и продолжает выполнение сценария.


// require Включает файл каждый раз при его  вызове,отображают фатальную ошибку, если файл не найден и прекращает выполнение сценария.
// require_once Включает файл только один раз, даже при повторном вызове,отображает фатальную ошибку, если файл не найден.
// и прекращает выполнение сценария.


 include 'data.php';

       // variant1
       // function compareByPrice($p1,$p2)
       // {
       // if($p1['price']['amount'] > $p2['price']['amount']){
       //        return 1;
       // }
       // if($p1['price']['amount'] < $p2['price']['amount']){
       //        return -1;
       // }
       // if($p1['price']['amount'] == $p2['price']['amount']){
       //        return 0;
       // }


       // variant2
//        {return $p1['price']['amount'] - $p2['price']['amount'];}
// }
// usort($products, 'compareByPrice')


// variant3
// usort($products, function($p1,$p2){
//               return $p1['price']['amount'] - $p2['price']['amount'];})

// variant4
// usort($products, fn($p1,$p2)=>$p1['price']['amount'] - $p2['price']['amount']);

if (isset($_GET['sort'])) {
       switch ($_GET['sort']) {
           case 'desc':
               usort($products, fn($p1,$p2)=>$p2['price']['amount'] - $p1['price']['amount']);
               
               break;
           case 'asc':
               usort($products, fn($p1,$p2)=>$p1['price']['amount'] - $p2['price']['amount']);
               break;
       }
   }

?>

<!-- pretty -->

<style>
       .navigation,
       .sort_the_price   {
    text-align: center;
    margin-top: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    text-decoration: none;
    color: black;
}

.navigation a:hover {
    background-color: #ccc;
}

.prev.disabled,
.next.disabled {
    pointer-events: none;
    color: #ddd;
}
.page-number {
    margin: 0 10px;
    font-weight: bold;
}
</style>

<!-- template -->
<div class="sort_the_price">
    <a href="?sort=desc">Price v</a>
    <a href="?sort=asc">Price ^</a>
</div>

<div>
    <ul>
        <?php
        $current = (isset($_GET['page'])) ? (int) $_GET['page'] : 1;
        $total = count($products) / 3;
        $start = ($current- 1) * 3;
        $end = min($start + 3, count($products));

        for ($i = $start; $i < $end; $i++) { ?>
            <li>
                <h2><?= $products[$i]['name'] ?>
              <?if($products[$i]['new']){ ?><img 
                                    src="<?= NEW_STICKER ?>" width="50"/><? } ?>
              </h2>
                <h3><?= $products[$i]['category'] ?></h3>
                <img src="<?= $products[$i]['image'] ?>" width="100">
                <div><?= $products[$i]['price']['amount'] ?><?= $products[$i]['price']['currency'] ?></div>
                <hr>
            </li>
        <?php } ?>
    </ul>
    
    <div class="navigation">
    <?php if ($current> 1): ?>
        <a href="?page=<?= $current- 1 ?>" class="prev <?php if ($current <= 1) print "disabled"; ?>">«</a>
    <?php endif; ?>

    <span class="page-number">page number: <?= $current ?></span>

    <?php if ($current < $total): ?>
        <a href="?page=<?= $current + 1 ?>" class="next <?php if ($current >= $total) print "disabled"; ?>">»</a>
    <?php endif; ?>
</div>
</div>

