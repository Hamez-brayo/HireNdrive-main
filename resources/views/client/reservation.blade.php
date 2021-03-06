<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0" />
	<meta name="description" content="hirendrive">

	<title>hirendrive</title>
	<!-- EXTERNAL STYLE LINKS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/booking.css">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>
<!-- BODY -->

<body>
	<section class="reservation_section" style="padding:50px 0px" id="reserve">
		<div class="container">
			<div class="row">
				<div class="col-md-5"></div>
				<div class="col-md-7">
					<form method="POST" action="" class="car-reservation-form" id="reservation_form" v-on:submit="checkForm">
						<div class="text_header">
							<span>
								Find your car
							</span>
						</div>
						<div>
							<div class="form-group">
								<label for="pickup_location">Pickup Location</label>
								<input type="text" class="form-control" name="pickup_location" placeholder="input location" v-model='pickup_location'>
								<div class="invalid-feedback" style="display:block" v-if="pickup_location === null">
									Pickup location is required
								</div>
							</div>
							<div class="form-group">
								<label for="return_location">Return Location</label>
								<input type="text" class="form-control" name="return_location" placeholder="input location" v-model='return_location'>
								<div class="invalid-feedback" style="display:block" v-if="return_location === null">
									Return location is required
								</div>
							</div>
							<div class="form-group">
								<label for="pickup_date">Pickup Date</label>
								<input type="date" min="<?php echo date('Y-m-d', strtotime("+1 day")) ?>" name="pickup_date" class="form-control" v-model='pickup_date'>
								<div class="invalid-feedback" style="display:block" v-if="pickup_date === null">
									Pickup date is required
								</div>
							</div>
							<div class="form-group">
								<label for="return_date">Return Date</label>
								<input type="date" name="return_date" class="form-control" v-model='return_date'>
								<div class="invalid-feedback" style="display:block" v-if="return_date === null">
									Return date is required
								</div>
							</div>

							<button type="submit" class="btn sbmt-bttn" name="reserve_car">Book now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>

</html>