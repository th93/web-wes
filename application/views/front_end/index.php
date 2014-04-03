<section class="contenido">
    <?
    foreach ($articulos as $item):
        //$urlid = . $item->id_articulo . '/';
        //$url = 'articulo/';
        //$url .= url_title(convert_accented_characters($item->nombre_articulo), '-', TRUE);
        ?>
        <div class="articulos">
            <p>
            <div class="titlearticulo">
                <h2><? echo anchor('articulo/' . $item->url_articulo, $item->nombre_articulo); ?></h2>
            </div>
            <div class="fpubli"><strong>Fecha de puclicación:</strong> <? echo $item->fecha_articulo; ?></div>
            </p>
        </div>
        <?
    endforeach;
    ?>
</section>
