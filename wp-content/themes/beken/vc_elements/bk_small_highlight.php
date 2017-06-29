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
                    array(
                        'type' => 'checkbox',
                        'heading' => __('Has link?', 'text-domain'),
                        'param_name' => 'has_link',
                        'group' => 'Content'
                    ),
                    array(
            			'type' => 'vc_link',
            			'heading' => __( 'Button', 'text-domain' ),
            			'param_name' => 'url',
                        'dependency' => array(
                            'element' => 'has_link',
                            'value' => 'true'
                        ),
                        'group' => 'Content'
            		)
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
                    'loop' => '',
                    'has_link' => '',
                    'url' => ''
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
        $url = ($url=='||') ? '' : $url;
		$url = vc_build_link( $url );
		$a_link = $url['url'];
        $a_title = ($url['title'] == '') ? '' : 'title="'.$url['title'].'"';
		$a_target = ($url['target'] == '') ? '' : 'target="'.$url['target'].'"';
        $button = $a_link ? '<a class="btn link" href="'.$a_link. '" '.$a_title.' '.$a_target.'>
        <span class="label">'.$url['title'].'</span>
        <svg width="20px" height="16px" viewBox="0 0 20 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path d="M11.85,0.6 C11.85,0.65 11.85,0.75 11.9,0.8 L18.9,7.8 L0.4,7.8 C0.25,7.8 0.15,7.9 0.15,8.05 C0.15,8.2 0.25,8.3 0.4,8.3 L18.9,8.3 L11.9,15.3 C11.85,15.35 11.85,15.4 11.85,15.5 C11.85,15.6 11.85,15.65 11.9,15.7 C12,15.8 12.15,15.8 12.25,15.7 L19.65,8.3 C19.75,8.2 19.75,8.05 19.65,7.95 L12.3,0.4 C12.2,0.3 12.05,0.3 11.95,0.4 C11.9,0.45 11.85,0.5 11.85,0.6 L11.85,0.6 Z" id="Shape"></path>
        </svg>
        </a>' : '';
        $pt = explode(":",$loop);
        $postArgs = array(
            'post_type' => $pt[1],
            'orderby' => 'rand',
            'posts_per_page' => 4
        );
        $classes .= ' '.$text_align;
        $html = '<section class="bk-block  small-highlight '.$classes.'">
            <article class="grid-container">
                <div class="grid-inner">
                    <div class="inner">
                        <div class="col-4-12 col-tm-4-12 col-m-12-12 ">';
                        if($block_title != ''){
                            $html.='<h2>'.$block_title.'</h2>';
                        }
                        $html.='</div>
                        <div class="col-6-12 col-offset-1-12 col-tm-7-12 col-tm-offset-1-12 col-m-12-12">
                            <p>'.$content.'</p>
                        </div>
                    </div>
                    <div class="inner">
                        <div class="col-7-12 col-offset-5-12 col-m-12-12">';
                            $posts = get_posts($postArgs);
                            if(count($posts)>0){
                                foreach($posts as $post){
                                    setup_postdata($post);
                                    $html.='<a href="'.get_post_permalink($post->ID).'" class="item">'.$post->post_title.'</a>';
                                }
                            }
                            if($has_link && $a_link){
                                $html.='<div class="btns">'.$button.'</div>';
                            }
                        $html.='

                        </div>
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
