<section class="modules module-tour">
	<div class="tour-wrapper">
		<div class="tour-title">
			<h2>Tour Dates</h2>
		</div>
		<div class="tour">
			<?php if( have_rows( 'tour_dates' ) ) : ?>
			<table class="tour-list">
				<tbody>
					<tr>
						<th class="table-header">Date</th>
						<th class="table-header">Venue</th>
						<th class="table-header">Location</th>
					</tr>
					<?php while (have_rows( 'tour_dates' ) ) : the_row();
							//vars
							$tour_date = get_sub_field( 'tour_date' );
							$tour_venue = get_sub_field( 'tour_venue' );
							$tour_location = get_sub_field( 'tour_location' );
					?>
					<tr>
						<td class="list"><?= $tour_date; ?></td>
						<td class="list"><?= $tour_venue; ?></td>
						<td class="list"><?= $tour_location; ?></td>
					</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
			
			<?php endif;?>
		</div>
	</div>
</section>