<!-- RENDER -->
<!-- HW1: render coordinates: horiz 1,2,3..., vert: a,b,c... -->

     
<div class="map-container">

    <div class="vert">
        <?php for ($i = 1; $i<= 10; $i++) { ?>
            <div class="num"><?= $i ?></div>
        <?php } ?>
    </div>
    

    <div class="horiz">
        
            
        <div class="letters">
    <?php for ($i = 0; $i < 10; $i++) { ?>
        <div class="let"><?= chr(65 + $i) ?></div>
    <?php } ?>
         
        </div>

        <div class="map">
            <? for ($ri = 0; $ri < 10; $ri++) { ?>
                <? for ($ci = 0; $ci < 10; $ci++) { ?>
                    <?
                        $attributes = $map[$ri][$ci] == 1 ? 'class="ship sq"' : 'class="sq"';
                        $attributes .= "href=\"/?shoot={$ri}x{$ci}\""
                    ?>

                    <a <?= $attributes ?>></a>

                <? } ?>
            <? } ?>
        </div>

    </div>

</div>
