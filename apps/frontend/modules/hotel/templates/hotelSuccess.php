<?php use_stylesheet('seccion.css')?>
<?php slot('title', __('La Casona del Hotel - Hotel Boutique Sutherland House Valparaíso, Chile'))?>
<?php slot('keywords', __("Hotel Boutique Sutherland House, Cerro Alegre Valparaíso, chile"))?>
<?php slot('description', __("Se cuenta la Historia de la Casona donde se implementó el Hotel Boutique Sutherland House junto con las bondades del Cerro Alegre de Valparaíso."))?>
<?php slot('galeria', get_partial('hotel/galeria',array('id' => 'hotel', 'title' => 'Hotel', 'imagenes' => $galeria)))?>
<?php include_partial('hotel/hotel_submenu')?>
<div id="columna1">
<h2><?php echo __('Hotel')?></h2>
<p><?php echo __('El <strong>Hotel Boutique Sutherland House</strong> se encuentra aledaño a la zona típica de conservación histórica, en una casona cuya data de construcción es de 1870,
con un estilo arquitectónico <em>vernáculo</em>, en pleno <em>Cerro Alegre</em>.')?> <?php echo __('Este cerro es conocido por su valiosa tradición cultural y artística, con una gran y
variada oferta de establecimientos gastronómicos, de hospedaje, exposiciones y talleres artísticos.') ?> <?php echo __('Lo cual permite una gran afluencia de visitantes nacionales y extranjeros.') ?></p>
<p><?php echo __('El inmueble está ligado a los inmigrantes europeos, especialmente ingleses, que se radicaron en el <em>Valparaíso del siglo XIX</em>: ciudad puerto, pujante y cosmopolita.') ?></p>
</div>
<div id="columna2">
<p><?php echo __('La propiedad formó parte de las instalaciones del <em>"The Mackay English School",</em> en donde funcionó en sus inicios la Rectoría del Colegio.') ?></p>
<p><?php echo __('<strong>Ubicado en la Avenida Alemania</strong>, ofrece en todas sus habitaciones una vista espectacular sobre la ciudad y la bahía de Valparaíso.') ?> <?php echo __('Durante el 2009,
se realizaron obras de habilitación para transformar el inmueble en un moderno establecimiento hotelero, conservando el estilo arquitectónico original y
preparándolo para ofrecer la mejor atención personalizada a sus futuros pasajeros.') ?></p>
</div>