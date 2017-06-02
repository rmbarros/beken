<?php
/*
* Template Name: Detalhe Trabalho
*/
    get_header();
?>
<div class="page-container">
    <section class="bk-block  page-header  left">
        <article class="grid-container">
            <div class="grid-inner">
                <div class="col-tm-12-12 col-t-12-12 col-m-12-12 col-9-12">
                    <h1><?php echo $post->post_title; ?></h1>
                    <p><?php the_field('subtitulo'); ?></p>
                </div>
            </div>
        </article>
    </section>
<?php
    setup_postdata($post);
    if(have_rows('fotos')):
        ?>
    <div class="bk-block list-block">
        <div class="grid-container">
            <div class="grid-inner">
        <?php
        while(have_rows('fotos')):
            the_row();
            $image = get_sub_field('imagem_listagem');
            $imageUrl = $image['url'];
            ?>
                <div class="col-6-12">
                    <div class="inner">
                        <div class="image">
                            <img src="<?php echo $imageUrl; ?>" alt="">
                        </div>
                        <div class="hover-block">
                            <h2><?php the_sub_field('titulo_item'); ?></h2>
                            <?php
                                if(get_sub_field('subtitulo_item')):
                            ?>
                            <p><?php the_sub_field('subtitulo_item'); ?></p>
                            <?php
                                endif;
                            ?>
                            <a href="<?php the_sub_field('imagem_alta'); ?>" target="_blank">
                                Download
                            </a>
                        </div>
                    </div>
                </div>
            <?php
        endwhile;
        ?>
            </div>
        </div>
    </div>
    <?php
    endif;
?>


</div>
<?php
    get_footer();
?>
