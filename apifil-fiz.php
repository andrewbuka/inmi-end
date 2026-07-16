  <?php 
    // template Name: Apifil-fiz;
?>
<?php get_header(); ?>


<!-- ================ HEADER-TITLE ================ -->
	<section class="s-header-title">
		<div class="container">
			<h1><?php the_title(); ?></h1>
			<ul class="breadcrambs">
				<li><a href="<?php echo get_page_link(8); ?>">Главная</a></li>
				<li><?php the_title(); ?></li>
			</ul>
		</div>
	</section>
	<!-- ============== HEADER-TITLE END ============== -->

	<!-- ============== S-SINGLE-PRODUCT ============== -->
	<section class="s-single-product my-s-single-product">
		<div class="container">
			<div class="row ">
				<div class="col-12 col-md-4">
					<br>
					<br>
					<span style="background: rgba(255, 217, 16, 1);">
						Добавка кормовая ферментная для приготовления инвертных сахарных подкормок для пчел, нормализующих процессы пищеварения насекомых, улучшающих их физический, иммунный и репродуктивный статус, сохранность пчелиных семей в период зимовки и подготовки к главному медосбору
					</span>
					<div class="fiz-calc-box single-fiz-calc-box">
						<button type="button" class="btn btn-form fiz-calc-open"><span>Калькулятор расхода</span></button>
					</div>
				</div>
				<div class="col-12 col-md-3">
					<!--===== SLIDER-SINGLE-FOR =====-->
					<img src="http://inmi/wp-content/uploads/2026/07/apifil-img-Photoroom.png" alt="img">
					
				</div>
				<div class="col-12 col-md-3 single-shop-left my-single-shop-left single-fiz-product" data-product-id="fiz-7">
					<h2 class="title my-title"><?php the_title(); ?></h2>
					<label class="my-label"><?php the_field('description'); ?></label>

					<div class="single-price my-single-price">
						<div class="new-price">1.8 BYN</div>
					</div>
					
					<div class="frame-size">
						<label>Форма выпуска:</label>
						<ul>
							<li class="active my-active">10 доз</li>
							
						</ul>
					</div>
				
					<div class="single-fiz-purchase">
						<label class="single-fiz-purchase__label" for="product-count-<?php echo esc_attr( get_the_ID() ); ?>">Количество</label>
						<div class="single-fiz-purchase__controls">
							<input id="product-count-<?php echo esc_attr( get_the_ID() ); ?>" type="number" min="1" value="1" class="input-insingle-prod">
							<a href="#" class="btn btn-wishlist"><span>В корзину</span></a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- ============ S-SINGLE-PRODUCT END ============ -->

	<!--=============== SINGLE-SHOP-TABS ===============-->
	<section class="single-shop-tabs">
		<div class="container">
			<div class="tab-wrap">
				<ul class="tab-nav product-tabs">
					<li class="item" rel="tab1"><span>Характеристика</span></li>
					<li class="item" rel="tab2"><span>Инструкция</span></li>
					<li class="item" rel="tab3"><span>Документы</span></li>
				</ul>
				<div class="tabs-content my-row">
					<div class="tab tab1">
						<div class="row">						
              				<div class="faq-item">
								<?php the_content(); ?>
							</div>		
						</div>
					</div>
					
					<div class="tab tab2">
						<div class="faq-item">
							<h5 class="title"><span><a href="http://inmi/wp-content/uploads/2026/06/apifil-instr.pdf">Инструкция по применению - открыть и скачать</a></span></h5>
						</div>
					</div>

					<div class="tab tab3">
						<div class="faq-item">
                            <h5 class="title"><span>Свидетельство о гос. рег. - <i>предоставляется по требованию</i></span></h5>
							<h5 class="title"><span>Нормативно-технический документ - <i>ТУ РБ 100289066.181-2023</i></span></h5>
					</div>
				</div>
			</div>
		</div>
	</section>


 <?php get_footer(); ?>