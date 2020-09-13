<?php

/**
 * Result Count
 *
 * Shows text: Showing x - x of x results.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/result-count.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.7.0
 */

if (!defined('ABSPATH')) {
	exit;
}
?>


<div class="row no-gutters ">
	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
		<div class="shop-area__banner pr-3 pt-5 pb-5" style="background: url('http://localhost:8000/wp-content/uploads/2020/09/banner3-1.jpg');">
			<h2 class="text-right title">The BISSELL® ICONpet™ Robotic Vacuum for Pre-Order</h2>
			<h5 class="text-right title">The BISSELL® ICONpet™ Robotic Vacuum provides up to 90 minutes of automatic, cordless cleaning.* </h5>
			<div class="d-flex justify-content-end">
				<div>
					<button class="btn btn-main p-2">Buy It Now</button>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="shop-area__bar">
	<div class="row no-gutters d-flex flex-wrap justify-content-between pb-2">

		<div class="col-12 col-sm-12 col-md-7 col-lg-8">
			<p class="woocommerce-result-count shop__items-qty font-weight-bold pt-3 pl-4 text-white">
				<?php
				// phpcs:disable WordPress.Security
				if (1 === intval($total)) {
					_e('Showing the single result', 'woocommerce');
				} elseif ($total <= $per_page || -1 === $per_page) {
					/* translators: %d: total results */
					printf(_n('Showing all %d result', 'Showing all %d results', $total, 'woocommerce'), $total);
				} else {
					$first = ($per_page * $current) - $per_page + 1;
					$last  = min($total, $per_page * $current);
					/* translators: 1: first result 2: last result 3: total results */
					printf(_nx('Showing %1$d&ndash;%2$d of %3$d result', 'Showing %1$d&ndash;%2$d of %3$d results', $total, 'with first and last result', 'woocommerce'), $first, $last, $total);
				}
				// phpcs:enable WordPress.Security
				?>
			</p>
		</div>