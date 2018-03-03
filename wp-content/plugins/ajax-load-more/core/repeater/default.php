<div class="col-xs-12 col-md-3">
        <div class="card card--news card--news--home" style="border-left: 6px solid <?= get_field('color_picker'); ?>;">
        	<div class="card--news--home_container">
						<?php if ( get_the_post_thumbnail() ) : ?>
						<figure class="card--news--home_figure hide-xs show-md">
							<?php the_post_thumbnail(); ?>
						</figure>
						<?php endif; ?>
							<?php
					      $hex = get_field('color_picker');
					      list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
					      
					      $hexAlpha = "$r, $g, $b, .8"
					    ?>

						<div class="card--news--home_content" style="background-color: rgba(  <?= ( $hex ) ? $hexAlpha : '237, 94, 92, .8'; ?> );">
							<p class="entry-meta f-small hide-md"><?php the_time("j"); ?> de <?php the_time("F Y"); ?></p>
							<div class="hide-xs show-md">
								<div class="card--news--home_category f-small">
									<?= the_category( ' - ' ); ?>
								</div>
							</div>
							<h4 class="card--news--home_title">
								<a href="<?php the_permalink(); ?>"><?= wp_html_excerpt( get_the_title(), 100, '...' ); ?></a>
							</h4>
							<div class="card--news--home_caption hide-xs show-md"><?= wp_html_excerpt( get_the_content(), 115, '...' ); ?></div>
							<p class="f-small"><a href="<?php the_permalink(); ?>">Leer más ></a></p>
						</div>
					</div>
				</div>
			</div>