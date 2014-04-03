<article class="contenido">
    <div class="titledetalle">
        <h2><? echo $detalle->nombre_articulo; ?></h2>
    </div>
    <br />
    <div class="imgart">
        <img src="<? echo base_url() . $detalle->url_imgart; ?>" width="600" height="400" />
    </div><br /><br />   
    <div class="cont_articulo">
        <div class="texto_articulo">
            <div class="fpublidiv">
                <div class="fpubli">
                    <strong>Fecha de puclicación:</strong><? echo $detalle->fecha_articulo; ?>
                </div>
            </div>
            <article><? echo $detalle->contenido_articulo; ?></article>
        </div>
    </div>
    <br/><br/><br/><br/> 
    <a href="<? echo base_url() ?>/inicio" style="color:red;"> <-Volver a articulos</a>
</article>