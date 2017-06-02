<?php
/*
Element Description: Beken Title And Text Simple
*/

// Element Class
class bkServicosBlock extends WPBakeryShortCode {

    // Element Init
    function __construct() {
        add_action( 'init', array( $this, 'bk_servicosblock_mapping' ) );
        add_shortcode( 'bk_servicosblock', array( $this, 'bk_servicosblock_html' ) );
    }

    // Element Mapping
    public function bk_servicosblock_mapping() {

        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }

        // Map the block with vc_map()
        vc_map(

            array(
                'name' => __('Beken Services Block', 'text-domain'),
                'base' => 'bk_servicosblock',
                'description' => __('A block for services list', 'text-domain'),
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
    public function bk_servicosblock_html( $atts,$content ) {

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
        $html = '<section class="bk-block sobre-servicos-block '.$classes.'">
            <article class="grid-container">
                <div class="grid-inner">
                    <div class="col-4-12">
                        <h2>Os nossos serviços</h2>
                    </div>
                    <div class="col-6-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </p>
                        <ul>
                            <li>
                                Media Relations
                            </li>
                            <li>
                                Public Relations
                            </li>
                            <li>
                                Brand Management
                            </li>
                            <li>
                                Showroom Management
                            </li>
                            <li>
                                Corporate Event Management
                            </li>
                            <li>
                                Integrated Communication Strategy
                            </li>
                        </ul>
                    </div>
                </div>
            </article>
        </section>';

        return $html;

    }

} // End Element Class

// Element Class Init
new bkServicosBlock();
?>
