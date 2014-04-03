<article class="contenido">
    <? $carrito = anchor('carrito', 'Ver carrito'); ?>
    <div>
    <img src="<? base_url() ;?>assets/img/carticon.png" width="25px" height="20px"><a <? echo anchor('carrito','Ver Carrito'); ?></a></img
    </div>
    <hr>
    <table>
        <tr style="background-color: #A50716; height: 30px; color: #fff; cellpadding: 3px;">
            <th>Imagen</th>
            <!--<th>ID</th>-->
            <th>Nombre</th>
            <th>Precio</th>
            <th>Opciones</th>
            <th>Cantidad</th>
            <th></th>
        </tr>
        <form action="<? echo base_url(); ?>productos/agregar_carrito" method="post">
            <tr style="background-color: #8B8B8B;">
                <td>
                    <img src="<? base_url() ;?>assets/img/levis_001.png"
                </td> 
<!--                <td>
                    regular_001
                </td>-->

                    <input type="hidden" name="id_producto" value="regulas_001">
                <td>
                    Levi's® 505 Regular "Fresh Face"
                    <input type="hidden" name="nombre_producto" value="levis_505_pan">
                </td>
                <td>
                    101.00€
                    <input type="hidden" name="precio_producto" value="101">
                </td>
                <td>
                    <select name="opciones[talla]">
                        <option value="" selected="selected">Talla</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                    <select name="opciones[color]">
                        <option value="" selected="selected">Color</option>
                        <option value="Negro">Negro</option>
                        <option value="Azul_claro">Azul Claro</option>
                        <option value="Azul_oscuro">Azul Oscuro</option>
                        <option value="jeans">Jeans</option>
                    </select>
                </td>
                <td>
                    <input type="text" name="cantidad" maxlength="3">
                </td>
                <td>
                    <input type="submit" name="agregar" value="Agregar">
                </td>
            </tr>
        </form>
        <form action="<? echo base_url(); ?>productos/agregar_carrito" method="post">
            <tr>
                <td>
                    <img src="<? base_url() ;?>assets/img/sud_002.png" width="120px" height="170px"/>
                </td>
<!--                <td>
                    sud_002
                </td>-->

                    <input type="hidden" name="id_producto" value="sud_002">
                <td>
                    PULLOVER HOOD
                    <input type="hidden" name="nombre_producto" value="pullhover_hood">
                </td>
                <td>
                    75.00€
                    <input type="hidden" name="precio_producto" value="75">
                </td>
                <td>
                    <select name="opciones[talla]">
                        <option value="" selected="selected">Talla</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="2XL">2XL</option>
                    </select>
                    <select name="opciones[color]">
                        <option value="" selected="selected">Color</option>
                        <option value="Jet_black">Jet Black</option>
                        <option value="Storm_cloud">Storm Cloud</option>                        
                    </select>
                </td>
                <td>
                    <input type="text" name="cantidad" maxlength="3">
                </td>
                <td>
                    <input type="submit" name="agregar" value="Agregar">
                </td>
            </tr>
        </form>
        <form action="<? echo base_url(); ?>productos/agregar_carrito" method="post">
            <tr style="background-color: #8B8B8B;">
                <td>
                    <img src="<? base_url() ;?>assets/img/chaq_003.png" width="100px" height="170px"/>
                </td>
<!--                <td>
                    chaq_003
                </td>-->

                    <input type="hidden" name="id_producto" value="chaq_003">
                <td>
                    SURF BLUE
                    <input type="hidden" name="nombre_producto" value="surf_blue">
                </td>
                <td>
                    316.00€
                    <input type="hidden" name="precio_producto" value="316">
                </td>
                <td>
                    <select name="opciones[talla]">
                        <option value="" selected="selected">Talla</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                    <select name="opciones[color]">
                        <option value="" selected="selected">Color</option>
                        <option value="Azul">Azul</option>                                             
                    </select>
                </td>
                <td>
                    <input type="text" name="cantidad" maxlength="3">
                </td>
                <td>
                    <input type="submit" name="agregar" value="Agregar">
                </td>
            </tr>
        </form>
        <form action="<? echo base_url(); ?>productos/agregar_carrito" method="post">
            <tr>
                <td>
                    <img src="<? base_url() ;?>assets/img/zap_004.png" width="200px" height="170px"/>
                </td>
<!--                <td>
                    zap_004
                </td>-->

                    <input type="hidden" name="id_producto" value="zap_004">
                <td>
                    CANVAS SNEAKERS
                    <input type="hidden" name="nombre_producto" value="canvas_sneakers">
                </td>
                <td>
                    39.00€
                    <input type="hidden" name="precio_producto" value="39">
                </td>
                <td>
                    <select name="opciones[talla]">
                        <option value="" selected="selected">Talla</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                        <option value="46">46</option>
                    </select>
                    <select name="opciones[color]">
                        <option value="" selected="selected">Color</option>
                        <option value="Azul">Azul</option>  
                        <option value="Blanco">Blanco</option>  
                        <option value="Rojo">Rojo</option>  
                        <option value="Negro">Negro</option>  
                        <option value="Rosa">Rosa</option>  
                    </select>
                </td>
                <td>
                    <input type="text" name="cantidad" maxlength="3">
                </td>
                <td>
                    <input type="submit" name="agregar" value="Agregar">
                </td>
            </tr>
        </form>
        <form action="<? echo base_url(); ?>productos/agregar_carrito" method="post">
            <tr style="background-color: #8B8B8B;">
                <td>
                    <img src="<? base_url() ;?>assets/img/cam_005.png" width="120px" height="170px"/>
                </td>
<!--                <td>
                    cam_005
                </td>-->

                    <input type="hidden" name="id_producto" value="cam_005">
                <td>
                    LEVI'S® LOGO TEE
                    <input type="hidden" name="nombre_producto" value="levis_logo_tee">
                </td>
                <td>
                    29.00€
                    <input type="hidden" name="precio_producto" value="29">
                </td>
                <td>
                    <select name="opciones[talla]">
                        <option value="" selected="selected">Talla</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                    <select name="opciones[color]">
                        <option value="" selected="selected">Color</option>
                        <option value="Blanco">Blanco</option>
                        <option value="Negro">Negro</option>
                    </select>
                </td>
                <td>
                    <input type="text" name="cantidad" maxlength="3">
                </td>
                <td>
                    <input type="submit" name="agregar" value="Agregar">
                </td>
            </tr>
        </form>
    </table>
</article>