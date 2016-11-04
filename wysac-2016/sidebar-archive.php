<?php
/**
* The sidebar for archive pages.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package WYSAC_Beta
*/

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-md-4" role="complementary">
	<div class="col-sm-6 col-md-12">
		<!-- TOPICS
		=================================== -->
		<h4 class="sidebar-section-title">Topics</h5>
			<?php $terms = get_terms('post_tag', array( //get the list of topics
			'number'	=> 10,
			'orderby'	=> 'count',
		));
			echo '<ul class="tax-list">';
			foreach ($terms as $term) { //put them in a list
				echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
			}
			echo '</ul><div class="clear-both"></div>';?>
			<!-- PARTNER ORGANIZATIONS
			=================================== -->
			<h4 class="sidebar-section-title add-margin">Partner Organizations</h5>
				<?php $terms = get_terms('clients', array( //get the list of clients
					'number' => 6,
					'orderby' => 'count'
				));
				echo '<ul class="tax-list">';
				foreach ($terms as $term) { //put them in a list
					echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
				}
				echo '</ul><div class="clear-both"></div>';?>
				<!-- PROJECT TYPES
				=================================== -->
				<h4 class="sidebar-section-title add-margin">Types</h5>
					<?php $terms = get_terms('project_type', array( //get the list of product types
						'number'	=>	10,
						'orderby'	=> 'count',
					));
					echo '<ul class="tax-list">';
					foreach ($terms as $term) { //put them in a list
						echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
					}
					echo '</ul><div class="clear-both"></div>';?>
				</div>
				<!-- SEARCH BOX
				=================================== -->
				<div class="col-sm-6 col-md-12 hidden-xs">
					<h4 class="sidebar-section-title">Search</h5>
						<?php get_search_form(); ?>
					</div>
				</aside><!-- #secondary -->
