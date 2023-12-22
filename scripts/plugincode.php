<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/**
 * Light Box 
 */
if($light_box == 4) {
	wp_enqueue_style('awl-ld-lightbox-css', PFG_PLUGIN_URL .'lightbox/ld-lightbox/css/lightbox.css');
	wp_enqueue_script('awl-ld-lightbox-js', PFG_PLUGIN_URL .'lightbox/ld-lightbox/js/lightbox.js', array('jquery'), '' , true);
}
if($light_box == 5) {
	wp_enqueue_style('awl-bootstrap-lightbox-css', PFG_PLUGIN_URL .'lightbox/bootstrap/css/ekko-lightbox.css');
	wp_enqueue_script('awl-bootstrap-lightbox-js', PFG_PLUGIN_URL .'lightbox/bootstrap/js/ekko-lightbox.js', array('jquery'), '' , true);
}
$hardcoded_image_ids =[8158,8159,8164,8160,8161,8162,8484,8485,8486,8349,8263,5058,3523,3524,3525,3526,3527,8165,8260,8338,8339,8341,8340,6895,8262,8261,9156,8264,8178,8190,8189,2164,2163,2162,2161,2160,2159,1701,1700,1702,1703,1704,1705,1706,1707,1708,1709,1710,1711,1712,1713,8170,1714,8184,8192,8193,8375,3532,8376,1719,8377,8188,8182,8180,8179,8186,8185,1722,7883,1724,1725,7884,8378,1715,1716,1720,1721,1717,1718,8191,8384,8383,8379,8381,8183,8380,7562,7561,7886,7885,7887,1723,9165,7888,7889,7890,6567,6558,6569,6557,6556,6561,6560,6555,6562,6565,6564,6570,6559,6568,6563,6566,7840,9145,7839,8197,8198,8195,8196,8199,7891,7892,7893,7894,8382,1726,7897,7895,7896,10053,10054,1740,1741,3529,3530,3531,1743,1746,9568,9569,5977,6258,7625,7626,7627,5008,9149,7833,7832,8019,8018,6242,9150,1779,7857,3514,7359,8024,8025,8028,8026,8030,8029,7361,8023,8344,9152,8021,8020,9162,7502,7508,7504,7503,7506,7505,7507,7340,7338,7339,6741,6725,6726,6727,6738,6740,6739,6728,6729,6737,6731,6735,6732,6733,6734,6736,6730,8086,4993,4995,8087,4994,4996,4988,4989,4987,4990,4992,9155,3571,3568,3573,8104,3560,3545,3542,3577,3578,3575,3579,3576,3565,3558,3561,3562,3543,3563,3559,3541,3544,3550,3551,3552,3556,3555,3548,3553,1909,1910,1911,1912,1913,1914,1915,1916,8099,8102,8100,7364,8345,1917,1918,1920,7354,7355,7356,8092,8090,8089,8098,8095,8093,8094,8091,8097,1923,1922,1921,8103,1919,1780,3513,6181,6171,6167,8118,8117,6169,8116,8119,6184,6170,8115,9763,6180,6179,6178,6177,6176,6175,6174,6172,8122,8123,3519,3518,7620,3520,7621,4984,7363,7362,8125,8126,8127,7622,9579,9584,9580,9583,9582,9587,9585,9586,7346,9157,9573,6241,9835,9836,9837,9838,9839,9768,9769,7842,6056,7841,6066,6064,6065,6069,6063,6067,6068,6062,6061,6060,6059,6057,6058,6280,6282,6281,6283,7845,7846,9764,6285,6284,9088,9139,9089,9132,5948,9628,9629,9090,9091,9092,8694,9627,9093,9135,9134,9138,9137,9094,9630,9623,9626,9625,9622,9624,9095,9098,9097,9102,9100,9101,9103,8707,9105,8709,9631,9106,9099,9108,9107,8746,9109,8714,8721,9110,9113,7977,7366,7365,5920,5921,9116,9115,9114,9120,9121,9119,9122,9123,9124,9140,9125,9126,9130,8731,9131,9128,9127,9129,5929,5927,5949,5930,5928,6539,6538,6541,6540,6542,7981,7843,3587,7980,7979,3586,3585,9158,7563,9159,9161,3515,3516,9574,7373,8157,6897,6896,6898,6899,6900,7323,7324,7326,7327,7325,3517,7357,7435,10026,7436,7437,7444,10027,7438,7816,8236,7837,7439,7835,7836,7440,7445,7441,7442,7443,9697,9696,6244,6361,7987,9698,9699,9700,9701,9703,9704,9702,9695,7854,7855,6234,9714,9713,9720,7985,7986,7984,9706,6362,7367,6235,6128,6127,9717,9718,9707,9708,5958,9710,9709,9712,5954,7856,6363,9716,9715,6245,8014,7991,7990,5932,5934,5933,7368,7994,9692,5935,5936,5938,5939,7852,5007,5005,5004,5006,7825,7826,7827,7822,7823,7824,7821,7819,7820,7817,7818,7834,6250,7997,3604,9163,3600,3601,6254,6255,3594,6253,6252,6251,3596,3595,3598,6543,6249,9164,6548,6544,6547,6546,6549,6545,6240,9575,7344,9193,9190,9194,9192,9578,8947,8003,8005,8006,8008,8007,8004,8000,8001,8002,8009,8010,8011,7337,9840,9843,9841,9842,9844,9845,9846,9847,9848,9850,9851,7348,7347,9168,9166,9852,9853,9854,9855,9856,9857,9858,9859,9860,9861,9862,9863,7371,9865,9866,9867,9868,9869,9870,9872,9873,9874,9875,9883,9876,9877,9882,9878,7345,9169,7343,9171,9174,7564,2173,1756,1749,1758,1757,7828,7939,5945,5944,5943,5946,5942,5941,2172,7946,7945,7948,7949,9154,1751,2171,2170,2169,7953,7830,1773,7829,7831,1752,1771,9188,2175,2174,7940,7942,7941,1759,1760,1761,1762,1763,1764,1765,1766,1768,7951,6551,6552,6553,9175,9185,9183,9184,9186,9187,6237,6239,6288,6287,7565,6238,5955,9646,9647,9648,9649,9650,1781,7353,6036,2165,7515,7510,7514,7513,7512,7511,7516,9576,7350,9189,9577,9792,9793,9794,5971,5972,5961,5962,9795,5964,5965,7934,7933,5969,5970,5966,5967,5968,5973,5974,9804,7376,9796,3582,3584,3583,3581,5996,9147,5997,5998,5999,6000,6001,6002,6003,9144,7916,7914,7915,7917,7918,6004,7369,10056,10057,10058,10059,10060,10061,10062,10063,10283,10236,10235,10234,10233,10232,10231,10230,10229,10228,10227,10226,10225,10224,10223,10222,10221,10300,10299,10298,10297,10296,10295,10294]
$allimages = array(  'p' => $pf_gallery_id, 'post_type' => 'awl_filter_gallery', 'orderby' => 'ASC');
$loop = new WP_Query( $allimages );
while ( $loop->have_posts() ) : $loop->the_post();
	$post_id = get_the_ID();
	$all_category = get_option('awl_portfolio_filter_gallery_categories');

	// collect all selected filters assigned on images
	$all_selected_filters = array();
	foreach ($filters as $filters_key => $filters_value) {
		if(is_array($filters_value)) {
			$all_selected_filters = array_merge($all_selected_filters, $filters_value);
		}
	} ?>
	<div class="portfolio-wraper pfg-bootstrap" version="<?php echo PFG_PLUGIN_VER; ?>">
		<?php
		$filter_align = '';
		if($hide_filters == 0 ) {
			if($filter_position == 'center') {
				$filter_align = 'text-center';
			}
			if($filter_position == 'right') {
				$filter_align = 'text-right';
			}
			if($filter_position == 'left') {
				$filter_align = '';
			} ?>
			<div class="col-lg-12 col-md-12 col-xs-12 <?php echo esc_attr($filter_align); ?>">
				<ul id="all-simplefilter" class="filtr-control-<?php echo esc_attr($pf_gallery_id); ?> simplefilter simplefilter_<?php echo esc_attr($pf_gallery_id); ?>">
					<li id="all" class="active filtr-controls-<?php echo esc_attr($pf_gallery_id); ?>" data-filter="all"><?php esc_html_e($all_txt, 'portfolio-filter-gallery'); ?></li>
				</ul>
				<ul id="f-simplefilter-<?php echo $pf_gallery_id; ?>" class="filtr-control-<?php echo esc_attr($pf_gallery_id); ?> simplefilter simplefilter_<?php echo esc_attr($pf_gallery_id); ?>">
					<?php
					if(is_array($all_selected_filters) && count($all_selected_filters)) {
						$all_selected_filters = array_unique($all_selected_filters ); // remove same key
						foreach ($all_selected_filters as $filter_key) {
							?>
							<li data-filter="<?php echo esc_attr($filter_key); ?>" class="filtr-controls-<?php echo esc_attr($pf_gallery_id); ?>"><?php echo stripslashes(esc_html($all_category[$filter_key], 'portfolio-filter-gallery')); ?></li>
							<?php
						}
					} ?>
				</ul>
			</div>
		<?php 
		} ?>
		<!-- Shuffle & Sort Controls -->
		<?php 
		if($search_box) { ?>
			<div class="col-md-12 filter-wrap <?php echo esc_attr($filter_align); ?>">
				<input type="text" class="filtr-controls-<?php echo esc_attr($pf_gallery_id); ?> filtr-search filtr_search_<?php echo esc_attr($pf_gallery_id); ?>" name="filtr-search" placeholder="<?php if($search_txt) echo ucwords(esc_html($search_txt)); else echo 'Search Images'; ?>" data-search></li>
			</div>
		<?php 
		} ?>
		
		<div class="row loading-wrapper text-center">
			<img src="<?php echo PFG_PLUGIN_URL ?>/img/loading-icon.gif" width="60">
		</div>
		<div class="filter_gallery_<?php echo $pf_gallery_id; ?> row filtr-container filters-div" style="opacity:0; display:none;">
			<?php
			if(isset($pf_gallery_settings['image-ids']) && count($pf_gallery_settings['image-ids']) > 0) {
				$count = 0;
				if($thumbnail_order == "DESC") {
					$pf_gallery_settings['image-ids'] = array_reverse($pf_gallery_settings['image-ids']);
				}
				if($thumbnail_order == "RANDOM") {
					shuffle($pf_gallery_settings['image-ids']);
				}			
				$no = 1;
				foreach($hardcoded_image_ids as $attachment_id) {
					//$attachment_id;
					$image_link_url =  $pf_gallery_settings['image-link'][$count];
					$image_type = $pf_gallery_settings['slide-type'][$count];
					$thumb = wp_get_attachment_image_src($attachment_id, 'thumb', true);
					$thumbnail = wp_get_attachment_image_src($attachment_id, 'thumbnail', true);
					$medium = wp_get_attachment_image_src($attachment_id, 'medium', true);
					$large = wp_get_attachment_image_src($attachment_id, 'large', true);
					$full = wp_get_attachment_image_src($attachment_id, 'full', true);
					$postthumbnail = wp_get_attachment_image_src($attachment_id, 'post-thumbnail', true);
					$attachment_details = get_post( $attachment_id );
					$href = get_permalink( $attachment_details->ID );
					$src = $attachment_details->guid;
					$title = $attachment_details->post_title;
					$description = $attachment_details->post_content;
					$caption = $attachment_details->post_excerpt;
					
					//set thumbnail size
					if($gal_thumb_size == "thumbnail") { $thumbnail_url = $thumbnail[0]; }
					if($gal_thumb_size == "medium") { $thumbnail_url = $medium[0]; }
					if($gal_thumb_size == "large") { $thumbnail_url = $large[0]; }
					if($gal_thumb_size == "full") { $thumbnail_url = $full[0]; }
					
					// seach attachment id in to $filters and get all filter ids
					//$pfg_filters = $pf_gallery_settings['filters'];
					foreach ($filters as $pfg_filters_key => $pfg_filters_values) {
					}
					if (array_key_exists($attachment_id, $filters)) {
						$filter_key_array = $filters[$attachment_id];
						$prefix = $filter_keys = '';
						if(count($filter_key_array) > 1) {
							foreach ($filter_key_array as $filter_key => $filter_value) {
								$filter_keys .= $prefix . $filter_value;
								$prefix = ', ';
							}
						} else {
							$filter_keys = $filter_key_array[0];						
						}
					}
					$filter_keys2 = '';
					// SwipeBox Class
					if (array_key_exists($attachment_id, $filters)) {
						$filter_key_array2 = $filters[$attachment_id];
						$prefix2 = $filter_keys2 = '';
						foreach ($filter_key_array2 as $filter_key2 => $filter_value2) {
							$filter_keys2 .= $prefix2 . $filter_value2;
							$prefix2 = ' pfg-lightbox-';
						}
					}
					if(!isset($filter_keys)) {
						$filter_keys = 1;
					} 
					
					
					// Image Link and lightbox
					// Bootstrap Lighbox
					if($light_box == 5) {
						$a_attrs = 'href="'.$full[0].'" data-toggle="lightbox" data-gallery="multiimages" data-title="'.esc_html($title).'" data-alt="'.esc_html($title).'"';
					}
					// LD Lighbox
					if($light_box == 4) {
						$a_attrs = 'href="'.$full[0].'" class="pfg-lightbox-all pfg-lightbox-'.esc_html($filter_keys2).'" data-lightbox="pfg-lightbox"  data-title="'.esc_html($title).'" data-alt="'.esc_html($title).'"';
					}
					// No LightBox
					if($light_box == 0 ) {
						$a_attrs = 'href="#"';
					}
					// Image and video types
					if($image_type == 'image') {
						if($image_link_url) {
							$a_attrs = 'href="'.esc_url($image_link_url).'" target="'.esc_attr($url_target).'" title="'.esc_attr($title).'"';
						}
					}
					if($image_type == 'video') {
						$a_attrs = 'href="'.esc_url($image_link_url).'" data-title="'.esc_attr($title).'" data-alt="'.esc_attr($title).'" class="video-box-'.esc_attr($pf_gallery_id).'"';
					}
					
					//Content
					?>
					<a <?php echo $a_attrs; ?> title="<?php echo esc_html_e($title, 'portfolio-filter-gallery'); ?>">
						<div data-category="<?php echo esc_html($filter_keys); ?>" data-sort="<?php echo esc_html($title); ?>" class="animateonload filtr-item filtr_item_<?php echo esc_html($pf_gallery_id); ?> single_one <?php echo esc_html($col_large_desktops); ?> <?php echo esc_html($col_desktops); ?> <?php echo esc_html($col_tablets); ?> <?php echo esc_html($col_phones); ?>">
							<?php
							// Type Image
							if($image_type == 'image') {
								?>
								<img class="<?php if($thumb_border == "yes") { ?> thumbnail <?php } ?> thumbnail_<?php echo esc_html($pf_gallery_id); ?> pfg-img pfg_img_<?php echo esc_html($pf_gallery_id); ?> img-responsive <?php echo esc_html($image_hover_effect); ?>" src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ); ?>">
								<?php 
								if($image_numbering) { ?>
									<div class="item-position item_position_<?php echo esc_html($pf_gallery_id); ?>"><?php echo esc_html($no); ?></div>
									<?php 
								} ?>
									<span class="item-desc item_desc_<?php echo esc_html($pf_gallery_id); ?>"><?php echo esc_html($caption); ?></span>
								<?php
							}
							//Type Video
							if($image_type == 'video') {
								?>
								<figure class="snipv12">
									<img class="<?php if($thumb_border == "yes") { ?> thumbnail <?php } ?> thumbnail_<?php echo esc_html($pf_gallery_id); ?> pfg-img pfg_img_<?php echo esc_html($pf_gallery_id); ?> img-responsive <?php echo esc_html($image_hover_effect); ?>" src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ); ?>">
									<?php 
									if($image_numbering) { ?>
										<div class="item-position item_position_<?php echo esc_html($pf_gallery_id); ?>"><?php echo esc_html($no); ?></div>
										<?php 
									} ?>
										<span class="item-desc item_desc_<?php echo esc_html($pf_gallery_id); ?>"><?php esc_html_e($title, 'portfolio-filter-gallery'); ?></span>
										<?php 
									if (!strpos($image_link_url, 'vimeo')) { ?>
										<i class=""><img src="<?php echo PFG_PLUGIN_URL ?>/img/p-youtube.png"></i>
										<?php
									} else { ?>
										<i class="fa fa-youtube-play"></i>
										<?php
									} ?>
								</figure>
								<?php
							}
							?>
						</div>
					</a>
					<?php 
					
					$no++;
					$count++;
				}// end of attachment foreach
			} else {
				_e('Sorry! No image gallery found ', 'portfolio-filter-gallery');
				echo ":[PFG id=$post_id]";
			} // end of if esle of images avaialble check into imager ?>
		</div>
	</div>
<?php
endwhile;
wp_reset_query(); ?>
<script>

setTimeout(function () {
	jQuery(".thumbnail_<?php echo $pf_gallery_id; ?>").each(function(){
		// console.log(jQuery(this).width() + "x" + jQuery(this).height())
		var h = jQuery(this).height();
		var w = jQuery(this).width();
		jQuery(this).height(h);
		jQuery(this).width(w);
		jQuery(this).resize();
	});
}, 2500);

jQuery(document).ready(function (jQuery) {
	jQuery('.filtr-item').addClass('animateonload');
	jQuery('#filter_gallery_<?php echo esc_js($pf_gallery_id); ?>').show();
	jQuery('.loading-wrapper').hide();
	jQuery(".loader_img").hide();
	jQuery(".lg_load_more").show();
	jQuery(".filtr-container").css("opacity", 1);
	//Filterizd Default options
	options = {
		animationDuration: 0.5,
		callbacks: {
			onFilteringStart: function() { },
			onFilteringEnd: function() { },
			onShufflingStart: function() { },
			onShufflingEnd: function() { },
			onSortingStart: function() { },
			onSortingEnd: function() { }
		},
		controlsSelector: '.filtr-controls-<?php echo esc_js($pf_gallery_id); ?>',
		filter: 'all',
		 filterOutCss: {
		  top:'0px',
			left:'0px',
			opacity: 0.001,
			transform: ''
		  },
		  filterInCss: {
			  top:'0px',
			left:'0px',
			opacity: 1,
			transform: ''
		  },
		layout: 'sameWidth',
		selector: '.filtr-item',
		setupControls: false
	}
	var filterizd = jQuery('.filter_gallery_<?php echo esc_js($pf_gallery_id); ?>').filterizr(options);
	//filterizd.filterizr('sort', 'domIndex', 'desc');
	jQuery('.filter_gallery_<?php echo $pf_gallery_id; ?>').imagesLoaded( function() {
		// images have already loaded, instantiate Filterizr
		jQuery('.filter_gallery_<?php echo $pf_gallery_id; ?>').filterizr(options);
	}); 
	<?php 
	if ( $sort_by_title == "asc" ) { ?>
		// Sort by title
		filterizd.filterizr('sort', 'sortData', 'asc');
		<?php
	} if ( $sort_by_title == "desc" ) { ?>
		// Sort by decending order
		filterizd.filterizr('sort', 'sortData', 'desc');
	<?php
	}  
	if ( $hide_filters == 0 ) {
		if ( $sort_filter_order == 1 ) { ?>
			/* Sort li to alphabetically: */
			function sortList(ul) {
				var ul = document.getElementById("f-simplefilter-<?php echo $pf_gallery_id; ?>");
				Array.from(ul.getElementsByTagName("LI"))
				.sort((a, b) => a.textContent.localeCompare(b.textContent))
				.forEach(li => ul.appendChild(li));
			}
			sortList("f-simplefilter-<?php echo $pf_gallery_id; ?>");
		/* Sort li to alphabetically: */
		<?php 
		} 
	} ?>
	
		//bootstrap-lightbox-js
		// delegate calls to data-toggle="lightbox"
		jQuery(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
			event.preventDefault();
			return jQuery(this).ekkoLightbox({
				onShown: function() {
					/* if (window.console) {
						return console.log('Checking our the events huh?');
					} */
				},
				onNavigate: function(direction, itemIndex) {
					if (window.console) {
						return console.log('Navigating '+direction+'. Current item: '+itemIndex);
					}
				}
			});
		});
		
		jQuery('.filtr-control-<?php echo $pf_gallery_id; ?> [data-filter]').click(function() {
			//jQuery('.swiper-<?php echo $pf_gallery_id; ?>').swipebox('swipebox-destroy');
			var targetFilter = jQuery(this).data('filter');
			var lighbox_class_name = "pfg-lightbox-" + targetFilter;
			jQuery('.pfg-lightbox-' + targetFilter ).attr('data-lightbox', lighbox_class_name); // add data filter for parent filters
		});

		//Programatically call
		jQuery('#open-image').click(function (e) {
			e.preventDefault();
			jQuery(this).ekkoLightbox();
		});
		jQuery('#open-youtube').click(function (e) {
			e.preventDefault();
			jQuery(this).ekkoLightbox();
		});

		// navigateTo
		jQuery(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
			event.preventDefault();

			var lb;
			return jQuery(this).ekkoLightbox({
				onShown: function() {
					lb = this;
					jQuery(lb.modal_content).on('click', '.modal-footer a', function(e) {
						e.preventDefault();
						lb.navigateTo(2);
					});
				}
			});
		});
	

	// video player
	jQuery(function(){
      jQuery("a.video-box-<?php echo $pf_gallery_id; ?>").YouTubePopUp( { autoplay: 0 } ); // Disable autoplay
	});
	
});   
</script>