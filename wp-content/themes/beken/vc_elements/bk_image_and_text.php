<?php
/*
Element Description: Beken Title And Text Simple
*/

// Element Class
class bkImageAndTextBlock extends WPBakeryShortCode {

    // Element Init
    function __construct() {
        add_action( 'init', array( $this, 'bk_imageandtext_mapping' ) );
        add_shortcode( 'bk_imageandtext', array( $this, 'bk_imageandtext_html' ) );
    }

    // Element Mapping
    public function bk_imageandtext_mapping() {

        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }

        // Map the block with vc_map()
        vc_map(

            array(
                'name' => __('Beken Image and Text Block', 'text-domain'),
                'base' => 'bk_imageandtext',
                'description' => __('A simple block for image and text', 'text-domain'),
                'category' => __('Beken Elements', 'text-domain'),
                'icon' => get_template_directory_uri().'/assets/images/vc-icon.png',
                'params' => array(
                    array(
                        'type' => 'dropdown',
                        'heading' => __('Text alignment', 'text-domain'),
                        'param_name' => 'text_align',
                        'holder' => 'p',
                        'value' => array(
                            'Left' => 'left',
                            'Right' => 'right'
                        )
                    ),
                    array(
                        'type' => 'checkbox',
                        'heading' => __('Is image Fullwidth?', 'text-domain'),
                        'param_name' => 'image_check',
                        'group' => 'Content',
                        'description' => __( 'Wether the image is fullwidth', 'text-domain' ),
                    ),
                    array(
                        'type' => 'attach_image',
                        'heading' => __('Choose image', 'text-domain'),
                        'param_name' => 'content_image',
                        'group' => 'Content',
                    ),
                    array(
                        'type' => 'textfield',
                        'holder' => 'h3',
                        'class' => 'title-class',
                        'heading' => __( 'Block Title', 'text-domain' ),
                        'param_name' => 'block_title',
                        'group' => 'Content',
                    ),

                    array(
                        'type' => 'textarea_html',
                        'holder' => 'div',
                        'class' => 'text-class',
                        'heading' => __( 'Block Text', 'text-domain' ),
                        'param_name' => 'content',
                        'group' => 'Content',
                    ),
                    /*array(
                        'type' => 'checkbox',
                        'heading' => __('Is entrance animated?', 'text-domain'),
                        'param_name' => 'is_animated',
                        'group' => 'Effects'
                    ),
                    array(
                        'type' => 'checkbox',
                        'heading' => __('Is the margin double 60px?', 'text-domain'),
                        'param_name' => 'is_doublemargin',
                        'group' => 'CSS'
                    )*/
                )
            )
        );
    }


    // Element HTML
    public function bk_imageandtext_html( $atts,$content ) {

        //.. the Code is in the next steps ..//
        extract(
            shortcode_atts(
                array(
                    'text_align' => 'left',
                    'block_title'   => '',
                    'image_check' => '',
                    'content_image' => '',
                    //'is_animated' => false,
                    //'is_doublemargin' => false
                ),
                $atts
            )
        );
        $classes = 'reveal';
        $classes .= ' '.$text_align;
        if($image_check){
            $classes .= ' fullwidth';
        }
        /*if($is_animated){
            $classes .= ' reveal';
        }
        if($is_doublemargin){
            $classes .= ' double';
        }*/
        $imageUrl = wp_get_attachment_url($content_image);
        $html = '<section class="bk-block  image-and-text '.$classes.'">';
        if($image_check){
            $html.='<img src="'.$imageUrl.'">
                <article class="grid-container">
                    <div class="grid-inner">
                        <div class="col-tm-12-12 col-t-12-12 col-m-12-12 col-9-12">';
                        if($block_title != ''){
                            $html.='<h2>'.$block_title.'</h2>';
                        }
                        $html.='<p>'.$content.'</p>
                        </div>
                    </div>
                </article>';
        }else{


            $html.='<article class="grid-container">
                <div class="grid-inner clearfix">
                    <div class="image">';
                    $html.='<img src="'.$imageUrl.'">
                    </div>
                    <div class="text">
                        <div>';
                    if($block_title != ''){
                        $html.='<h2>'.$block_title.'</h2>';
                    }

                        $html.='<p>'.$content.'</p>
                        </div>
                    </div>
                </div>
            </article>';
        }
        $html.='</section>';

        return $html;

    }

} // End Element Class

// Element Class Init
new bkImageAndTextBlock();
?>
