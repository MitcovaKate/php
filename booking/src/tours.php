<?
// $file=fopen("./data/tour.json","r");
// $tours=json_decode(fread($file,100000), true);
// fclose($file);

$tours=load('tour');
if(isset($_POST['search'])){
    $tours=array_filter($tours,function($tour){
        return 
        similar_text($tour['name'], $_POST['search'])>=3 || $_POST['search'] == '';
        
    }) ;
}
$tours=array_values($tours);
?>
<?
if (isset($_POST['min_price']) && isset($_POST['max_price'])) {
    $minPrice = (int) $_POST['min_price'];
    $maxPrice = (int) $_POST['max_price'];
  
    $tours = array_filter($tours, function ($tour) use ($minPrice, $maxPrice) {
      return $tour['price']['amount'] >= $minPrice && $tour['price']['amount'] <= $maxPrice;
    });
  }?>

<section>
<h1>Tours:</h1>
<!-- //filters -->


<form action="?page=tours" method="POST">
    <input type="text" placeholder="enter keywords..." value="<?=$_POST['search'] ?? ''?>">
    <button>SEARCH</button>
</form>
<form action="?page=tours" method="POST">
  <input type="number" name="min_price" placeholder="Min price">
  <input type="number" name="max_price" placeholder="Max price">
  <button type="submit">Filter by price</button>
</form>
<!--  -->
    <ol>
        <?php
        $toursNumber =count($tours);
        for ($i = 0; $i < $toursNumber; $i++) { ?>
            <li>
                <h2><?= $tours[$i]['name'] ?></h2>
                <h3><?= $tours[$i]['from'] ?></h3>
                <img src="<?= $tours[$i]['image'] ?>" hight="100px"; width="100px">
                <div><?= $tours[$i]['price']['amount'] ?><?= $tours[$i]['price']['currency'] ?></div>
                <hr>
            </li>
        <?php } ?>
    </ol>
</section>   
    



