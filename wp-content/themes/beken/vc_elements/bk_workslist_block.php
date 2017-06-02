<?php
/*
Element Description: Beken Title And Text Simple
*/

// Element Class
class bkWorksListBlock extends WPBakeryShortCode {

    // Element Init
    function __construct() {
        add_action( 'init', array( $this, 'bk_workslistblock_mapping' ) );
        add_shortcode( 'bk_workslistblock', array( $this, 'bk_workslistblock_html' ) );
    }

    // Element Mapping
    public function bk_workslistblock_mapping() {

        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }

        // Map the block with vc_map()
        vc_map(

            array(
                'name' => __('Beken Works List Block', 'text-domain'),
                'base' => 'bk_workslistblock',
                'description' => __('A block to loop Clients and related works', 'text-domain'),
                'category' => __('Beken Elements', 'text-domain'),
                'icon' => get_template_directory_uri().'/assets/images/vc-icon.png',
                'params' => array(

                    array(
                        'type' => 'loop',
                        'holder' => 'div',
                        'class' => 'text-class',
                        'heading' => __( 'Posts', 'text-domain' ),
                        'param_name' => 'loop',
                        'group' => 'Content',
                    ),
                )
            )
        );
    }


    // Element HTML
    public function bk_workslistblock_html( $atts,$content ) {

        //.. the Code is in the next steps ..//
        extract(
            shortcode_atts(
                array(
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


        $clientsArgs = array(
            'post_type' => 'clientes',
            'orderby' => 'menu_order',
            'order' => 'ASC',
            'posts_per_page' => -1
        );

        $classes .= ' '.$text_align;
        $html = '<section class="bk-block  works-list-block '.$classes.'">
            <article class="grid-container">
                <div class="grid-inner">';
                            $posts = get_posts($clientsArgs);
                            if(count($posts)>0){
                                foreach($posts as $post){
                                    setup_postdata($post);
                                    $id = $post->ID;
                                    $worksArgs = array(
                                        'post_type' => 'trabalhos',
                                        'meta_query' => array(
                                            array(
                                                'key' => 'cliente',
                                                'value' => $id,
                                                'compare' => 'LIKE'
                                            )

                                        ),
                                        'orderby' => 'menu_order',
                                        'order' => 'ASC',
                                        'posts_per_page' => -1
                                    );
                                    $works = get_posts($worksArgs);
                                    $html.='
                                    <div class="item">
                                        <div class="inner">
                                            <div class="header">
                                                <h3>'.$post->post_title.'</h3>
                                            </div>';
                                            if(count($works)>0){
                                                $html.='<div class="content">';
                                                foreach($works as $work){
                                                    setup_postdata($work);
                                                    $cliente = get_field('cliente',$work->ID);
                                                    $html.='<a href="'.get_post_permalink($work->ID).'">'.$work->post_title.'</a>';
                                                }
                                                $html.='</div>';
                                            }
                                        $html.='</div>
                                    </div>';
                                }
                            }
                    $html.='
                </div>
            </article>
        </section>';

        return $html;

    }

} // End Element Class

// Element Class Init
new bkWorksListBlock();
?>
