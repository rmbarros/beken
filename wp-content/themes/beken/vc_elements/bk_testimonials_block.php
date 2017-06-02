<?php
/*
Element Description: Beken Title And Text Simple
*/

// Element Class
class bkTestimonialsBlock extends WPBakeryShortCode {

    // Element Init
    function __construct() {
        add_action( 'init', array( $this, 'bk_testimonialsblock_mapping' ) );
        add_shortcode( 'bk_testimonialsblock', array( $this, 'bk_testimonialsblock_html' ) );
    }

    // Element Mapping
    public function bk_testimonialsblock_mapping() {

        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }

        // Map the block with vc_map()
        vc_map(

            array(
                'name' => __('Beken Testimonials Block', 'text-domain'),
                'base' => 'bk_testimonialsblock',
                'description' => __('A block for testimonials', 'text-domain'),
                'category' => __('Beken Elements', 'text-domain'),
                'icon' => get_template_directory_uri().'/assets/images/vc-icon.png',
                'params' => array(

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
    public function bk_testimonialsblock_html( $atts,$content ) {

        //.. the Code is in the next steps ..//
        extract(
            shortcode_atts(
                array(
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
        $html = '<section class="bk-block  testimonials-block '.$classes.'">
            <article class="grid-container">
                <div class="grid-inner">
                    <div class="scrollpane">
                        <div class="item">
                            <h3>
                                “The team at Becken are a pleasure to work with.
                                They really have their fingers on the pulse when it comes
                                to new initiatives in the world of Media Relations.”
                            </h3>
                            <p>Rui Guerra, Hawkers Co.</p>
                        </div>
                        <div class="item">
                            <h3>
                                “The team at Becken are a pleasure to work with.
                                They really have their fingers on the pulse when it comes
                                to new initiatives in the world of Media Relations.”
                            </h3>
                            <p>Rui Guerra, Hawkers Co.</p>
                        </div>
                        <div class="item">
                            <h3>
                                “The team at Becken are a pleasure to work with.
                                They really have their fingers on the pulse when it comes
                                to new initiatives in the world of Media Relations.”
                            </h3>
                            <p>Rui Guerra, Hawkers Co.</p>
                        </div>
                        <div class="item">
                            <h3>
                                “The team at Becken are a pleasure to work with.
                                They really have their fingers on the pulse when it comes
                                to new initiatives in the world of Media Relations.”
                            </h3>
                            <p>Rui Guerra, Hawkers Co.</p>
                        </div>
                        <div class="item">
                            <h3>
                                “The team at Becken are a pleasure to work with.
                                They really have their fingers on the pulse when it comes
                                to new initiatives in the world of Media Relations.”
                            </h3>
                            <p>Rui Guerra, Hawkers Co.</p>
                        </div>
                    </div>
                    <div class="counter">
                        <span class="current">1</span>
                        <span class="total">/5</span>
                    </div>

                </div>
            </article>
        </section>';

        return $html;

    }

} // End Element Class

// Element Class Init
new bkTestimonialsBlock();
?>
