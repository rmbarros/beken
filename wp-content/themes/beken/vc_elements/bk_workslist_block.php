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
                                                    $html.='<a href="'.get_post_permalink($work->ID).'" class="btn link">
                                                    <span class="label">'.$work->post_title.'</span>
                                                    <svg width="20px" height="16px" viewBox="0 0 20 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <path d="M11.85,0.6 C11.85,0.65 11.85,0.75 11.9,0.8 L18.9,7.8 L0.4,7.8 C0.25,7.8 0.15,7.9 0.15,8.05 C0.15,8.2 0.25,8.3 0.4,8.3 L18.9,8.3 L11.9,15.3 C11.85,15.35 11.85,15.4 11.85,15.5 C11.85,15.6 11.85,15.65 11.9,15.7 C12,15.8 12.15,15.8 12.25,15.7 L19.65,8.3 C19.75,8.2 19.75,8.05 19.65,7.95 L12.3,0.4 C12.2,0.3 12.05,0.3 11.95,0.4 C11.9,0.45 11.85,0.5 11.85,0.6 L11.85,0.6 Z" id="Shape"></path>
                                                    </svg>
                                                    </a>';
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
