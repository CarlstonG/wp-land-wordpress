<section class="section-counter">
	
     <div class="container">
        <div class="counter">
			    <?php	$counter = carbon_get_post_meta( get_the_ID(), 'counter' );
               if ( ! empty( $counter) ): ?>	
                        <?php foreach ( $counter as $count ): ?>
          <div>
            <span><?php echo $count['counter_nummer']; ?></span>
            <p><?php echo $count['counter_text']; ?></p>
          </div>
	<?php endforeach; ?>
         <?php endif; ?>		
      
        </div>
	</div>	
</section>   
	<section class="features">
		<div class="container">
			<div class="features-wrapper">
				<div class="features-item">
					<?php
                    $features_img = carbon_get_post_meta( $page_id, 'features_img' );
					?> 
					<?php echo wp_get_attachment_image($features_img, 'features_img', 'full'); ?>
				</div>
				<div class="features-item">
				<h2><?php echo carbon_get_post_meta(get_the_ID(), 'features_title'); ?></h2>
				<?php echo carbon_get_post_meta(get_the_ID(), 'features_desc'); ?>
				</div>
				</div>
			</div>
		
	</section>

<section class="new-store">
	<div class="container">
     <div class="new-store-cat">
		<div class="new-store-items">
			<h2><?php echo carbon_get_post_meta(get_the_ID(), 'new_store_title'); ?></h2>
			<?php echo carbon_get_post_meta(get_the_ID(), 'new_store_desc'); ?>
			<p>
			<a href="http://landing.hstn.me/products/"><?php echo carbon_get_post_meta(get_the_ID(), 'new_store_link'); ?>             </a>
		</p>
		</div>
		<div class="new-store-items">
				    <?php	$new_store_cat = carbon_get_post_meta( get_the_ID(), 'new_store_cat' );
                    if ( ! empty( $new_store_cat) ): ?>	
                        <?php foreach ( $new_store_cat as $ns_cat ): ?>
			<a href="http://landing.hstn.me/products/"><?php echo wp_get_attachment_image( $ns_cat['new_store_img'], 'full'); ?>
				<span><?php echo $ns_cat['new_store_cat_link']; ?></span>
			</a>
			<?php endforeach; ?>
         <?php endif; ?>	
		</div>
		</div>
	</div>
	
</section>
     
   

<section class="furniture">
	<div class="container">
		<div class="furniture-wrapper">
			<div class="furniture-item">
				<h2><?php echo carbon_get_post_meta(get_the_ID(), 'furni_title'); ?></h2>
				<?php echo carbon_get_post_meta(get_the_ID(), 'furni_desc'); ?>
			</div>
			<div class="furniture-item">
				<?php
                    $furni_img = carbon_get_post_meta( $page_id, 'furni_img' );
					?> 
					<?php echo wp_get_attachment_image($furni_img, 'furni_img', 'full'); ?>

			</div>
		</div>
	</div>
</section>

<section class="products">
	<div class="container">
		<div class="section-title">
			<h2>
				Featured Products
			</h2>
			<div>
				<p>
					The products we provide only for you as our service are selected from the
best products with number 1 quality in the world
				</p>
			</div>
		</div>
		
<div class="product-grids">
	<div class="swiper featured-products">
  <div class="swiper-wrapper">
	 <?php	$slide_products = carbon_get_post_meta( get_the_ID(), 'slide_products' );
               if ( ! empty( $slide_products) ): ?>	
                        <?php foreach ( $slide_products as $slide_pr ): ?>
	  
			<div class="product-card swiper-slide">
				<div class="product-card-img">
					<?php echo wp_get_attachment_image( $slide_pr['slide_img'], 'full'); ?>
					<a href="#" data-fancybox data-src="#product__property" href="#" class="product-about">
						<div class="plus"></div>
					</a>
					<div style="display: none;" id="product__property">
                      <?php echo do_shortcode('[contact-form-7 id="54"]');?>
                  </div>
				</div>
				<div class="product-card-content">
					<h4><?php echo $slide_pr['slide_title']; ?></h4>
					<div class="product-card-price">
						<span>$<?php echo $slide_pr['slide_price']; ?></span>
						<span class="text-line">$<?php echo $slide_pr['slide_old_price']; ?></span>
					</div>
				</div>
				
			</div>
	
		<?php endforeach; ?>
         <?php endif; ?>	
	  
		</div>
	</div>
	<!-- If we need pagination -->
  <div class="swiper-pagination"></div>
		</div>
	</div>
</section>

<section class="testimonial">
	<div class="container">
		<div class="testimonial-wrap">
			
			<div class="testimonial-wrap--item">
				<h2>
					
					<?php echo carbon_get_post_meta(get_the_ID(), 'testimonial_title'); ?>
				</h2>
				<div class="userSlide swiper">
					<div class="swiper-wrapper">
						<?php	$testimonial = carbon_get_post_meta( get_the_ID(), 'testimonial' );
               if ( ! empty( $testimonial) ): ?>	
                        <?php foreach ( $testimonial as $ts ): ?>
				<div class="swiper-slide">
				<div class="testimonial-user">
					<?php echo wp_get_attachment_image( $ts['user_img'], 'full'); ?>
					<div class="testimonial-user__info">
						<?php echo $ts['user_name']; ?>
						<span><?php echo $ts['user_job']; ?></span>
					</div>
				</div>
				<p>
					<?php echo $ts['user_desc']; ?>
				</p>
					</div>
						<?php endforeach; ?>
                        <?php endif; ?>
					</div>
					<div class="swiper-button-next"></div>
                   <div class="swiper-button-prev"></div>
				</div>
			</div>
			<div class="testimonial-wrap--item">
				<?php echo wp_get_attachment_image(25,'full'); ?>
			</div>
		</div>
	</div>
</section>	

<section class="cta">
	<div class="container">
		<div class="cta-wrap">
			<div class="cta-form">
				
					<h2>
						Get more discount <br>
                        Off your order
					</h2>

				<p>Join our mailing list</p>
				<form>
					 <?php echo do_shortcode('[contact-form-7 id="46"]');?>	
				</form>
						 
			</div>
		</div>
	</div>
</section>