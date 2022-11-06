<section class="reservation-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-9 col-md-10">
				<form class="booking-form" action="./?action=booking" method="GET">
					<h1 align="center">Réserver une table</h1>

					<input name="action" type="hidden" id="name" placeholder="Nom" value="booking">

					<div class="row">
						<div class="col-lg-12 d-flex flex-column mb-20">
							<input name="name" id="name" placeholder="Nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Event Name'" class="form-control" required="" type="text">
						</div>

						<div class="col-lg-12 d-flex flex-column mb-20">
							<input name="email" id="email" placeholder="Adresse Courriel" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" class="form-control" required="" type="email">
						</div>
						<div class="col-lg-12 d-flex flex-column mb-20">
							<input name="phone" id="phone" placeholder="Numéro de téléphone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" class="form-control" required="" type="text">
						</div>
						<div class="input-group col-lg-6 mb-20">
							<input type="datetime-local" id="datetime" name="date" id="date" class="form-control datepicker" placeholder="Event Date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Event Date'" class="form-control" required="" type="text">
						</div>
						<div class="col-lg-12 d-flex justify-content-end">
							<button class="primary-btn dark mt-30 text-uppercase">Faire la demande de réservation</button>
						</div>
						<div class="alert-msg"></div>
					</div>
				</form>
			</div>


			</p>
		</div>
	</div>
	</div>
	</div>
</section>