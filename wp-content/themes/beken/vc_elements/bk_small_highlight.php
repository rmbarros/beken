<?php
/*
Element Description: Beken Title And Text Simple
*/

// Element Class
class bkSmallHighlightBlock extends WPBakeryShortCode {

    // Element Init
    function __construct() {
        add_action( 'init', array( $this, 'bk_smallhighlightblock_mapping' ) );
        add_shortcode( 'bk_smallhighlightblock', array( $this, 'bk_smallhighlightblock_html' ) );
    }

    // Element Mapping
    public function bk_smallhighlightblock_mapping() {

        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }

        // Map the block with vc_map()
        vc_map(

            array(
                'name' => __('Beken Post Highlight Block', 'text-domain'),
                'base' => 'bk_smallhighlightblock',
                'description' => __('A block to loop through custom posts', 'text-domain'),
                'category' => __('Beken Elements', 'text-domain'),
                'icon' => get_template_directory_uri().'/assets/images/vc-icon.png',
                'params' => array(
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
                    array(
                        'type' => 'loop',
                        'holder' => 'div',
                        'class' => 'text-class',
                        'heading' => __( 'Posts', 'text-domain' ),
                        'param_name' => 'loop',
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
    public function bk_smallhighlightblock_html( $atts,$content ) {

        //.. the Code is in the next steps ..//
        extract(
            shortcode_atts(
                array(
                    'text_align' => 'left',
                    'block_title'   => '',
                    'loop' => ''
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
        $pt = explode(":",$loop);
        $postArgs = array(
            'post_type' => $pt[1],
            'orderby' => 'menu_order',
            'oder' => 'ASC'
        );
        $classes .= ' '.$text_align;
        $html = '<section class="bk-block  small-highlight '.$classes.'">
            <article class="grid-container">
                <div class="grid-inner">
                    <div class="inner">
                        <div class="col-tm-12-12 col-t-12-12 col-m-12-12 col-4-12">';
                        if($block_title != ''){
                            $html.='<h2>'.$block_title.'</h2>';
                        }
                        $html.='</div>
                        <div class="col-7-12 col-offset-1-12">
                            <p>'.$content.'</p>
                        </div>
                    </div>
                    <div class="inner">
                        <div class="col-7-12 col-offset-5-12">';
                            $posts = get_posts($postArgs);
                            if(count($posts)>0){
                                foreach($posts as $post){
                                    setup_postdata($post);
                                    $html.='<a href="'.get_post_permalink($post->ID).'" class="item">'.$post->post_title.'</a>';
                                }
                            }
                        $html.='</div>
                    </div>
                </div>
            </article>
        </section>';

        return $html;

    }

} // End Element Class

// Element Class Init
new bksmallhighlightblock();
?>
