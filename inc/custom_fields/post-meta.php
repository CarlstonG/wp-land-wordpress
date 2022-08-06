<?php

if (!defined('ABSPATH')) {
  exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta',( 'Header Section' ) )
                ->show_on_page(6)
        ->add_fields( array(
		Field::make( 'separator', 'crb_header_section', __( 'Header Section' ) ),
        Field::make('text', 'header_title', 'Header Title'),
        Field::make('rich_text', 'header_descr', 'Текст'),
    ) );
Container::make( 'post_meta',( 'Section Counter' ) )
                ->show_on_page(6)
                ->add_fields( array(
					Field::make( 'separator', 'crb_counter', __( 'Section Counter' ) ) ,
                    Field::make( 'complex', 'counter', 'Counter' )->set_max(4) //maximum 4 bloks
                      ->add_fields( 'text', 'Описание Counter', array(
                            Field::make( 'text', 'counter_nummer', 'Заголовок'),
                            Field::make( 'text', 'counter_text', 'Описание' ),
                        ) )
                        ) );                 
        
 Container::make( 'post_meta', __( 'Section Features' ) )   
->show_on_page(6)
->add_fields( [
  Field::make( 'separator', 'crb_feature', __( 'Features' ) ) ,
	
  Field::make('image', 'features_img', 'Image')
	->set_width( 25 ),
  Field::make('text', 'features_title', 'Title')
	->set_width( 35 ),	
  Field::make('textarea', 'features_desc', 'Description')
	->set_width( 40 ),
] );

Container::make( 'post_meta', __( 'Section New Store' ) )
->show_on_page(6)
->add_tab( __( 'New Store Tilte and Description' ), array(
	Field::make('text', 'new_store_title', 'Title')
	->set_width( 40 ),
	Field::make('textarea', 'new_store_desc', 'Description')
	->set_width( 40 ),
	Field::make('text', 'new_store_link', 'Link')
	->set_width( 20 ),
 ) )
 ->add_tab( __( 'New Store Images Link Category' ), array(
	 Field::make( 'complex', 'new_store_cat', 'Store Cat' )->set_max(4) //maximum 4 img and link
          ->add_fields( 'text', 'Store Cat', array(
              Field::make( 'image', 'new_store_img', 'Image'),
              Field::make( 'text', 'new_store_cat_link', 'Link' ),
     ) )
 ) );




 Container::make( 'post_meta', __( 'Section Furniture' ) )   
->show_on_page(6)
->add_fields( [
  Field::make( 'separator', 'crb_furniture', __( 'Furniture' ) ) ,
  Field::make('image', 'furni_img', 'Image')
	->set_width( 25 ),
  Field::make('text', 'furni_title', 'Title')
	->set_width( 35 ),	
  Field::make('textarea', 'furni_desc', 'Description')
	->set_width( 40 ),
] ); 


Container::make( 'post_meta',( 'Section Featured Products' ) )
                ->show_on_page(6)
                ->add_fields( array(
	   Field::make( 'separator', 'crb_slider', __( 'Featured Products' ) ) ,
       Field::make( 'complex', 'slide_products', 'Featured Products Slide' )->set_max(8) //maximum 4 bloks
       ->add_fields( 'text', 'Featured Products Slide', array(
	  Field::make( 'image', 'slide_img', 'Image') ->set_width( 30 ),	   
      Field::make( 'text', 'slide_title', 'Title') ->set_width( 30 ),
      Field::make( 'text', 'slide_price', 'Price' ) ->set_width( 20 ),
	  Field::make( 'text', 'slide_old_price', 'Old Price' )->set_width( 20 ),	   
	    
                        ) )
                        ) ); 
Container::make( 'post_meta',( 'Section Testimonial' ) )
        ->show_on_page(6)
         ->add_fields( array(
		Field::make( 'separator', 'crb_testimonial', __( 'Testimonial Slide' ) ) ,
		Field::make( 'text', 'testimonial_title', 'Title'),	 
         Field::make( 'complex', 'testimonial', 'Testimonial Slider' )->set_max(4) //maximum 3 bloks
                ->add_fields( 'text', 'Testimonial User Description', array(
					  Field::make( 'image', 'user_img', 'User Image')->set_width( 20 ),
                       Field::make( 'text', 'user_name', 'User Name')->set_width( 20 ),
					   Field::make( 'text', 'user_job', 'User Job')->set_width( 30 ),
                       Field::make( 'textarea', 'user_desc', 'Description' )->set_width( 30 ),
                       ) )
 ) ); 

Container::make( 'post_meta', __( 'Product Info' ) )   
 ->where( 'post_type', '=', 'product' ) 
->add_fields( [
  Field::make( 'separator', 'product_detail', __( 'Product Detail' ) ) ,
  Field::make('text', 'product_width', 'Width')
	->set_width( 35 ),
  Field::make('text', 'product_height', 'Height')
	->set_width( 35 ),	
  Field::make('text', 'product_price', 'Price')
	->set_width( 30 ),
] );
