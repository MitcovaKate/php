<?
$slides = [
    "/img/im1.png",
    "/img/im2.png",
    "/img/im3.png",
    "/img/im4.png",
    "/img/im5.png",
];


$currentSlide = 0; // Текущий слайд

if (isset($_GET['slide'])) {
  $currentSlide = (int) $_GET['slide'];

  // Проверка корректности номера слайда
  while ($currentSlide < 0) {
    $currentSlide += count($slides);
  }
  $currentSlide %= count($slides);
}

?>


    <div class="carousel">
        <img src="<?php print $slides[$currentSlide]; ?>" alt="Слайд <?php print $currentSlide + 1; ?>">

        <div class="controls">
            <?php if ($currentSlide > 0): ?>
                <a href="?slide=<?php print $currentSlide - 1; ?>">&larr; Назад</a>
            <?php endif; ?>

            <?php if ($currentSlide < count($slides) - 1): ?>
                <a href="?slide=<?php print $currentSlide + 1; ?>">Вперед &rarr;</a>
            <?php endif; ?>
        </div>
    </div>
