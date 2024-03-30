<? include 'data.php'?>


<section>
<h1>Tours:</h1>
    <ul>
        <?php
        $toursNumber =count($tours);
        for ($i = 0; $i < $toursNumber; $i++) { ?>
            <li>
                <h2><?= $tours[$i]['name'] ?></h2>
                <h3><?= $tours[$i]['airport'] ?></h3>
                <img src="<?= $tours[$i]['image'] ?>" width="100">
                <div><?= $tours[$i]['price']['amount'] ?><?= $tours[$i]['price']['currency'] ?></div>
                <hr>
            </li>
        <?php } ?>
    </ul>
</section>   
    

