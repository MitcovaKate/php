<?php
$total_pages = 5; 

if (isset($_GET['p'])){
    $page=$_GET['p'];
} else {
    $page=1;
}
$prev_page = $page - 1;
$next_page = $page + 1;

?>

<style>
  body {
    background: #333;
    color: #ccc;
    text-align: center;
  }
  a {
    color: #ccc;
    text-decoration: none;
  }
  a.current-page {
    text-decoration: underline;
  }
  a.disabled {
    color: #666;
    cursor: not-allowed;
  }
</style>

<div>
  You are on page <?=$page?>
</div>
<hr>
<div>
  <a href="<?php if ($page > 1) print "?p=$prev_page"; ?>"
   class="<?php if ($page <= 1) print "disabled"; ?>">‹</a>
  
  <?php
  for ($i = 1; $i <= $total_pages; $i++) {
    $href = "?p=$i";
    print "<a href=\"$href\" class=\"";
    if ($i == $page) {
      print "current-page";
    }
    print "\">$i</a>";
  }
  ?>

  <a href="<?php if ($page < $total_pages) print "?p=$next_page"; ?>"
   class="<?php if ($page >= $total_pages) print "disabled"; ?>">›</a>
</div>
