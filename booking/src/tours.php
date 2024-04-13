<?
  $file=fopen("./data/tours.json","r");
  $tours=json_decode(fread($file,100000), true);
 fclose($file);

// $tours=load('tours');
  if(isset($_POST['search'])){
    $tours=array_filter($tours,function($tour){
        return 
       !(stripos($tour['name'], $_POST['search']) === false) || $_POST['search'] == '';
        
   }) ;
  }

// и min и max
//   if (isset($_POST['min_price']) && isset($_POST['max_price'])) {
//      $minPrice = (int) $_POST['min_price'];
//      $maxPrice = (int) $_POST['max_price'];
  
//    $tours = array_filter($tours, function ($tour) use ($minPrice, $maxPrice) {
//       return $tour['price']['amount'] >= $minPrice && $tour['price']['amount'] <= $maxPrice;
// });
// }

  // только min 
    if (isset($_POST['min_price'])){
    $tours = array_filter($tours, function ($tour) {
   return
     $tour['price']['amount'] >=(int)$_POST['min_price'];
    });
}
// только max
if (isset($_POST['max_price'])){
  $tours = array_filter($tours, function ($tour) {
 return
   $tour['price']['amount'] <=(int)$_POST['max_price'];
  });
}// результат и min и max и minmax


// если применять button 
// if(isset($_POST['sort_desc'])){
// usort($tours, function($tour_a, $tour_b ){
// return $tour_b['price']['amount'] - $tour_a['price']['amount'];
// });

// }  
// if(isset($_POST['sort_asc'])){
//   usort($tours, function($tour_a, $tour_b ){
//   return $tour_a['price']['amount'] - $tour_b['price']['amount'];
//   });
  
//   }  



// hw2 radio buttons

if (isset($_POST['sort'])) {
  $sort = $_POST['sort'];
  if ($sort === 'desc') {
      usort($tours, function($tour_a, $tour_b) {
          return $tour_b['price']['amount'] - $tour_a['price']['amount'];
      });
  } else if ($sort === 'asc') {
      usort($tours, function($tour_a, $tour_b) {
          return $tour_a['price']['amount'] - $tour_b['price']['amount'];
      });
  }
}
 $tours=array_values($tours);
?>

<section>
<h1>Tours:</h1>
<!-- //filters -->


 <form action="?page=tours" method="POST" id="tour-form">
  <fieldset>
    <legend>name</legend>
    <input type="text" 
           placeholder="enter keywords..." 
           value="<? $_POST['search'] ?? ''?>">
   </fieldset>

  <fieldset>
      <legend>price</legend>
      <input type="number" 
             name="min_price"
             placeholder="Min price"
             value="<?$_POST['min_price'] ?? ''?>">

       <input type="number" 
              name="max_price" 
              placeholder="Max price"
              value="<? $_POST['max_price'] ?? ''?>">
    </fieldset>
      <button>SEARCH</button>
        <fieldset>
          <legend>sort</legend>
          <!-- <button name="sort_desc">v</button>
          <button name="sort_asc">^</button> -->
<!-- 
hw2 use radio buttons -->
     <input type="radio" 
            name="sort"
            value="desc"
            id="sort_desc"> ˅
     <input 
           type="radio" 
           name="sort" 
           value="asc"
           id="sort_asc"
           > ˄
        </fieldset>
  
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
    
<script>
  const sortDescRadio = document.getElementById('sort_desc');
  const sortAscRadio = document.getElementById('sort_asc');
  const tourForm = document.getElementById('tour-form');

  sortDescRadio.addEventListener('change', function() {
    tourForm.submit();
  });

  sortAscRadio.addEventListener('change', function() {
    tourForm.submit(); 
  });
</script>
