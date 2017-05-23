<?php

add_filter( 'rwmb_meta_boxes', 'plumeria_register_meta_boxes' );

function plumeria_register_meta_boxes( $meta_boxes ) {
    $prefix = 'rw_';
    // 1st meta box
    $meta_boxes[] = array(
        'id'         => 'additional',
        'title'      => __( 'Additional Information', 'textdomain' ),
        'post_types' => array( 'properties'),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'  => 'Gallery',
                'desc'  => 'Format: Image File',
                'id'    => $prefix . 'gallery_thumb',
                'type'  => 'image_advanced',
                'std'   => '',
                'class' => 'custom-class'
                
            ),
             array(
                'name'  => __( 'Information 1', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'info1',
                'type'  => 'wysiwyg',
                'std'   => '',
                'class' => 'custom-class',
                'clone' => false,
            ),
             array(
                'name'  => __( 'Information 2', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'info2',
                'type'  => 'wysiwyg',
                'std'   => '',
                'class' => 'custom-class',
                'clone' => false,
            ),
              array(
                'name'  => 'PDF',
                'desc'  => 'Format: PDF File',
                'id'    => $prefix . 'pdf_thumb',
                'type'  => 'file_advanced',
                'std'   => '',
                'class' => 'custom-class'
                
            ),
            // OEMBED
            array(
              'name' => 'video',
              'id'   =>  $prefix. "video",
              'type' => 'oembed',
            ),
           
            /*
             array(
                'name'  => __( 'Extras', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'extras',
                'type'  => 'textarea',
                'std'   => '',
                'class' => 'custom-class',
                'clone' => false,
            ),
              array(
                'name'  => __( 'Prices', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'prices',
                'type'  => 'textarea',
                'std'   => '',
                'class' => 'custom-class',
                'clone' => false,
            ),
               array(
                'name'  => __( 'Includes', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'includes',
                'type'  => 'textarea',
                'std'   => '',
                'class' => 'custom-class',
                'clone' => false,
            ),
                array(
                'name'  => __( 'Minimum', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'minimum',
                'type'  => 'textarea',
                'std'   => '',
                'class' => 'custom-class',
                'clone' => false,
            ),*/
           
        )
    );
    // 2nd meta box
    /*$meta_boxes[] = array(
        'title'      => __( 'Media', 'textdomain' ),
        'post_types' => 'movie',
        'fields'     => array(
            array(
                'name' => __( 'URL', 'textdomain' ),
                'id'   => $prefix . 'url',
                'type' => 'text',
            ),
        )
    );*/
    return $meta_boxes;
}
