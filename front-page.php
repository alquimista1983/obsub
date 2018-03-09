<?php
/**
 * Front Page
 *
 * @package obsub
 */

get_header();
the_post(); 
$case_studies = get_case_studies(); ?>

	<section id="home-intro" class="home-intro full-height page-section active" style="height:85vh" >

		<div class="section-container">
			<div class="intro-content section-content">
				<div class="outer-container">
					<div class="inner-container">
						<h1 class="page-title">Objective Subject is a design firm.</h1>
						<p class="h1">We create a more informed and engaged society by rethinking how companies, institutions, and governments’ thorniest issues are framed and experienced.</p>
						<p><a href="/about" class="button">about us &nbsp; &#8250;</a></p>
					</div>
				</div>
			</div>
		</div>

	</section>

	<section id="case-studies" class="page-section use-ui-light-theme">

		<div class="mask mask--top">
			<div class="outer-container">
				<div class="inner-container">
					<ul class="mask__list list-unstyled">
						<?php foreach ( $case_studies as $study ) : ?>
						<li class="h1 push-half <?php echo "li-case-study-{$study->ID}"; ?>">
							<a href="<?php echo get_permalink( $study ); ?>" title="View case study">
								<?php echo get_the_title($study); ?>
							</a>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>

		<?php 
		foreach ( $case_studies as $study ) :
		
			$color = get_field('case_study_color', $study->ID); ?>

			<article id="<?php echo "case-study-{$study->ID}"; ?>" class="case-study" data-id="<?php echo $study->ID; ?>" data-color="<?php echo $color; ?>">
				<div class="outer-container">
					<h2 class="case-study__title h1 hug"><a href="<?php echo get_permalink( $study ); ?>" title="View case study"><?php echo get_the_title( $study ); ?></a></h2>
					<div class="case-study__desc">
						<p class="hug">
							<?php echo get_the_excerpt( $study ); ?><br/>
							<a href="<?php echo get_permalink( $study ); ?>" class="button" style="margin-top:0.5em">view case study &nbsp; &#8250;</a>
						</p>
					</div>
				</div>
			</article>

		<?php endforeach;  ?>

		<!-- <div class="bg-color"></div> -->
		
		<div class="bg-image">
			<?php foreach ( $case_studies as $key => $study ) {
				echo get_the_post_thumbnail( $study, 'full', array( 'id' => 'image-' . $study->ID ) ); 
			} ?>
		</div>		

		<div class="mask mask--bottom">
			<div class="outer-container">
				<div class="inner-container">
					<ul class="mask__list list-unstyled">
						<?php foreach ( $case_studies as $study ) : ?>
						<li class="h1 push-half <?php echo "li-case-study-{$study->ID}"; ?>">
							<a href="<?php echo get_permalink( $study ); ?>" title="View case study">
								<?php echo get_the_title($study); ?>
							</a>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
			
	</section>

	<section id="our-views" class="page-section" style="padding-top: 3rem; background-color: #e6e6e6;">
		<div class="outer-container">
			
			<div class="inner-container">
				<h3 class="h1">Some text talking about our views lorem ipsum dolor sit amet</h3>
			</div>		

			<div class="clearfix" style="margin-top:5rem">
				<?php 
				$views = array(
					array(
						'title' => 'Design thinking to reinvent the policymaking process',
						'content' => 'Governments need a new approach to creating public policy that reduces risks, unknowns, and variables while improving impact, quality, and accuracy.',
						'url' => '#',
						'image' => '<img src="http://unsplash.it/750/560" width="750" height="560" style="display:block"/>'
					),
					array(
						'title' => 'On the design of public transit experiences that delight and deliver',
						'content' => 'Using human-centered design principles to help transit agencies provide care to their users.',
						'url' => '#',
						'image' => '<img src="http://unsplash.it/750/560" width="750" height="560" style="display:block"/>'
					),
					array(
						'title' => 'What visual identity can do for government communications',
						'content' => 'Inconsistent, unclear and cluttered communication from Government does not allow citizens to see what Government is doing for them.',
						'url' => '#',
						'image' => '<img src="http://unsplash.it/750/560" width="750" height="560" style="display:block"/>'
					)
				);
				foreach ( $views as $view ) { ?>
					<article class="our-views-article" style="margin-bottom: 2rem">
						<?php echo $view['image']; ?>
						<h4 class="h2 push-half"><?php echo $view['title']; ?></h4>
						<p class="push-half"><?php echo $view['content']; ?></p>
						<p class="push-half"><a href="<?php echo $view['url']; ?>" class="button">read &nbsp; &#8250;</a></p>
					</article>
				<?php } ?>
			</div>

		</div>
	</section>

	<section id="address" class="page-section" style="padding-top:5rem; background-color: #e6e6e6;">
		<div class="outer-container">
			<div class="inner-container">
				<address class="h1">
					30 East 20th Street, 7th Floor<br/>New York, NY 10003<br/><br/>
					+1 212 863 9194 office<br/>info@objectivesubject.com
				</address>
				<p style="margin-top:1.5rem"><a href="#" class="button">contact us &nbsp; &#8250;</a></p>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
