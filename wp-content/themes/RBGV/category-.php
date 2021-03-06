<?php get_header(); ?>
<div class="w-section featured-section">
  <div class="w-container area-pagina">
    <div data-ix="scroll-reveal-part-1" class="titulo">
      <?php $categories = get_the_category(); ?>
      <h1 class="titulo-sessao"><?php echo $categories[0]->cat_name; ?></h1>
      <h2 class="subtitulo-sessao">Informações publicadas no Blog da RBGV Advogados</h2>
    </div>
    <div data-ix="scroll-reveal-part2" class="w-clearfix conteudo">
      <div class="publicacao">
        <?php if ( have_posts() ) : ?>
          <?php //echo "<pre>";print_r($post);die();   ?>
          <?php $count = 0; ?>
        	<?php while ( have_posts() && $count < 4 ) : the_post(); ?>
                  <div class="post-min">
                    <div>
                      <h3 class="nome-post"><?php the_title(); ?></h3>
                      <a href="#" class="w-clearfix w-inline-block link link-info-blog">
                        <img src="<?php echo PW_THEME_URL ?>assets/images/icon-folder-verde.svg" class="icon-info-blog">
                        <div class="legenda"><?php echo $categories[0]->cat_name; ?></div>
                      </a>
                      <a href="#" class="w-clearfix w-inline-block link link-info-blog">
                        <img src="<?php echo PW_THEME_URL ?>assets/images/icon-autor-verde.svg" class="icon-info-blog">
                        <div class="legenda"><?php the_author() ?></div>
                      </a>
                      <a href="#" class="w-clearfix w-inline-block link">
                        <img src="<?php echo PW_THEME_URL ?>assets/images/icon-data-verde.svg" class="icon-info-blog">
                        <div class="legenda"><?php the_time('d/m/Y'); ?></div>
                      </a>
                    </div>
                    <div class="w-clearfix post-content">
                      <div class="thumb-post dessaturar">
                        <?php if ( has_post_thumbnail() ) : ?>
                          <?php  the_post_thumbnail('medium'); ?>
                        <?php endif; ?>
                      </div>
                      <div class="resumo-wrapper paragrafo">
                        <?php the_excerpt_max_charlength(290); ?>
                        <?php echo new_excerpt_more( "Leia mais" ) ?>
                      </div>
                    </div>
                    <div class="w-embed">
                      <hr>
                    </div>
                  </div>
          <?php $count++; ?>
          <?php endwhile; ?>
        <?php endif; ?>
        <a href="#" class="w-button btn-branco">postagens antigas</a>
      </div>
      <?php get_sidebar('blog');?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
