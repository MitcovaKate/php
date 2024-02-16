<?php
$city = 'Chisisnau';
$street = 'Stefan the Great';
$phone='30-20-20';
$email='blabla@mail.ru';
$map='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d679.7807431231834!2d28.811873519715757!3d47.03781771218013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97dbf04f0296d%3A0x4c6ef2749b08de49!2sMoneyGram!5e0!3m2!1sru!2s!4v1708110378437!5m2!1sru!2s';
?>

<address>
  <h2>You can contact us at:</h2>
   <h3>E-mail:<a href="blabla@mail.ru"><?php print ($email)?></a></h3>
   <h3>Phone number:<a href="tel:30-20-20"><?php print ($phone)?></a></h3>
  <h2>You may also want to visit us:
   <h3>City:<?php print ($city)?></h3>
   <h3>Street:<?php print ($street)?></h3> 
   <iframe src=<?php print ($map)?> width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</address>
