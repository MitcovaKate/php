<!-- RENDER -->
<!-- HW1: render coordinates: horiz 1,2,3..., vert: a,b,c... -->

     
<div class="map-container">

    <div class="vert">
        <?php for ($rn = 1; $rn <= 10; $rn++) { ?>
            <div class="num"><?= $rn ?></div>
        <?php } ?>
    </div>
    

    <div class="horiz">

        <div class="letters"> 
            <?php foreach (range('A', 'J') as $let) { ?>
                <div class="let"><?= $let ?></div>
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
