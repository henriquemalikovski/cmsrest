<?php

function get_field($key, $page_id = 0)
{
  $id = $page_id !== 0 ? $page_id : get_the_ID();
  return get_post_meta($id, $key, true);
}

function the_field($key, $page_id = 0)
{
  echo get_field($page_id, $key);
}


add_action('cmb2_admin_init', 'cmb2_fields_menu');

function cmb2_fields_menu()
{
  $cmb = new_cmb2_box([
    'id' => 'home_box',
    'title' => 'Menu da Semana',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'paga-template',
      'value' => 'page-home.php'
    ],
  ]);

  $categoria = $cmb->add_field([
    'name' => 'Categoria',
    'id' => 'categoria',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Categoria {#}',
      'add_button' => 'Adicionar Categoria',
      'remove_button' => 'Remover Categoria',
      'sortable' => true,
    ],
  ]);


  $pratos = $cmb->add_field([
    'name' => 'Pratos',
    'id' => 'pratos',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Prato {#}',
      'add_button' => 'Adicionar Prato',
      'remove_button' => 'Remover Prato',
      'sortable' => true,
    ],
  ]);

  $cmb->add_group_field($pratos, [
    'name' => 'Nome',
    'id' => 'nome',
    'type' => 'text',
  ]);

  $cmb->add_group_field($pratos, [
    'name' => 'Descrição',
    'id' => 'descricao',
    'type' => 'text',
  ]);

  $cmb->add_group_field($pratos, [
    'name' => 'Preço',
    'id' => 'preco',
    'type' => 'text',
  ]);
}
