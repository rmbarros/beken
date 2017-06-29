<?php
/*
Element Description: Beken Title And Text Simple
*/

// Element Class
class bkSimpleTextBlock extends WPBakeryShortCode {

    // Element Init
    function __construct() {
        add_action( 'init', array( $this, 'bk_simpletextblock_mapping' ) );
        add_shortcode( 'bk_simpletextblock', array( $this, 'bk_simpletextblock_html' ) );
    }

    // Element Mapping
    public function bk_simpletextblock_mapping() {

        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }

        // Map the block with vc_map()
        vc_map(

            array(
                'name' => __('Beken Simple Text Block', 'text-domain'),
                'base' => 'bk_simpletextblock',
                'description' => __('A simple block for title and text', 'text-domain'),
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
                            'Center' => 'center',
                            'Right' => 'right'
                        )
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
    public function bk_simpletextblock_html( $atts,$content ) {

        //.. the Code is in the next steps ..//
        extract(
            shortcode_atts(
                array(
                    'text_align' => 'left',
                    'block_title'   => '',
                    //'is_animated' => false,
                    //'is_doublemargin' => false
                ),
                $atts
            )
        );
        $classes = 'reveal';
        /*if($is_animated){
            $classes .= ' reveal';
        }
        if($is_doublemargin){
            $classes .= ' double';
        }*/
        $classes .= ' '.$text_align;
        $html = '<section class="bk-block  simple-text '.$classes.'">
            <article class="grid-container">
                <div class="grid-inner">';
                    if($text_align == 'right'){
                        $html.='<div class="col-m-12-12 col-t-8-12 col-t-offset-2-12 col-tm-9-12 col-tm-offset-2-12 col-6-12 col-offset-4-12">';
                    }else{
                        $html.='<div class="col-tm-12-12 col-t-12-12 col-m-12-12 col-9-12">';
                    }

                    if($block_title != ''){
                        $html.='<h2>'.$block_title.'</h2>';
                    }

                        $html.='<p>'.$content.'</p>
                    </div>
                </div>
            </article>
        </section>';

        return $html;

    }

} // End Element Class

// Element Class Init
new bkSimpleTextBlock();
?>
