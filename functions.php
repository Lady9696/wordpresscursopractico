
<?php
function init_template(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

}

//Hook que ejecuta la función init_template, sin retornar valores. 
add_action('after_setup_theme','init_template');

function assets(){
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css','','5.3.1','all');
    wp_register_style('montserrat','https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap','','1.0','all');

    wp_register_script('popper','https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js','','2.11.8',true);

    wp_enqueue_script('bootstraps','https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js',array('popper'),'5.3.1',true);

    wp_enqueue_style('estilos', get_template_directory_uri() . '/style.css', array('bootstrap', 'montserrat'),'1.0.0','all' );

    //cargar los archivos de Js que haga
    wp_enqueue_script('custom',get_template_directory_uri().'/assets/js/custom.js','1.0.0',true);
  
} 
//Hook que ejecuta la función assets, sin retornar valores. 
add_action('wp_enqueue_scripts','assets');


?>