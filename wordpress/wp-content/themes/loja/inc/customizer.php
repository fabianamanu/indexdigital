<?php
function  loja_customize_register($wp_customize){
    //rodape
    $wp_customize -> add_section('footer',array(
        'title' =>__('Rodapé','loja'),
        'description'=>sprintf(__('Opções para o rodapé','loja')),
        'priority' => 20
    ));
    $wp_customize -> add_setting('footer_title', array(
        'default' => _x('Meu primeiro tema de WordPress', 'loja'),
        'type' => 'theme_mod'
    ));
    $wp_customize -> add_control('footer_title',array(
        'label' => __('Título do rodapé', 'loja'),
        'section' => 'footer',
        'priority' => 1
    ));
    $wp_customize -> add_setting('footer_text', array(
        'default' => _x('&copy;2021 Fabiana emanuela andre marcolino', 'loja'),
        'type' => 'theme_mod'
    ));
    $wp_customize -> add_control('footer_text',array(
        'label' => __('Texto do rodapé', 'loja'),
        'section' => 'footer',
        'priority' => 2
    ));

     
}
add_action('customize_register','loja_customize_register');
?>