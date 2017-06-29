<?php
/*
Element Description: Beken Title And Text Simple
*/

// Element Class
class bkListBlock extends WPBakeryShortCode {

    // Element Init
    function __construct() {
        add_action( 'init', array( $this, 'bk_listblock_mapping' ) );
        add_shortcode( 'bk_listblock', array( $this, 'bk_listblock_html' ) );
    }

    // Element Mapping
    public function bk_listblock_mapping() {

        // Stop all if VC is not enabled
        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }

        // Map the block with vc_map()
        vc_map(

            array(
                'name' => __('Beken Post List Block', 'text-domain'),
                'base' => 'bk_listblock',
                'description' => __('A block to loop through custom posts and list them', 'text-domain'),
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
                    array(
                        'type' => 'checkbox',
                        'heading' => __('Does the block have Background?', 'text-domain'),
                        'param_name' => 'has_background',
                        'group' => 'Content'
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
    public function bk_listblock_html( $atts,$content ) {

        //.. the Code is in the next steps ..//
        extract(
            shortcode_atts(
                array(
                    'loop' => '',
                    'has_background' => false
                    //'is_animated' => false,
                    //'is_doublemargin' => false
                ),
                $atts
            )
        );
        $classes = 'reveal';
        if($has_background){
            $classes .= ' has-background';
        }
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
        $html = '<section class="bk-block  list-block '.$classes.'">
            <article class="grid-container">
                <div class="grid-inner">';
                            $posts = get_posts($postArgs);
                            if(count($posts)>0){
                                foreach($posts as $post){
                                    setup_postdata($post);
                                    $image = get_field('imagem_listagem',$post->ID);

                                    $imageUrl = $image['url'];
                                    $html.='
                                    <div class="col-6-12 col-t-12-12 col-tm-12-12 col-m-12-12">
                                        <div class="inner">
                                            <div class="image">
                                                <img src="'.$imageUrl.'" alt="" />
                                            </div>
                                            <div class="hover-block">
                                                <h2>'.get_field('titulo_listagem',$post->ID).'</h2>
                                                <p>'.get_field('tipo_de_trabalho',$post->ID).'</p>
                                                <a href="'.get_post_permalink($post->ID).'" class="item">Discover</a>
                                            </div>
                                        </div>
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
new bkListBlock();
?>
