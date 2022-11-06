<section class="reservation-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-9 col-md-10">
				<form class="booking-form" action="booking.php" method="POST">
					<h1 align="center">Réserver une table</h1>
					<div class="row">
						<div class="col-lg-12 d-flex flex-column mb-20">
							<input name="name" id="name" placeholder="Nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Event Name'" class="form-control" required="" type="text">
						</div>

						<div class="col-lg-12 d-flex flex-column mb-20">
							<input name="name" id="name" placeholder="prénom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Event Name'" class="form-control" required="" type="text">
						</div>

						<div class="col-lg-12 d-flex flex-column mb-20">
							<input name="email" id="email" placeholder="Adresse Courriel" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" class="form-control" required="" type="email">
						</div>
						<div class="col-lg-12 d-flex flex-column mb-20">
							<input name="phone" id="phone" placeholder="Numéro de téléphone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" class="form-control" required="" type="text">
						</div>
						<div class="input-group col-lg-6 mb-20">
							<input type="datetime-local" id="datetime" name="date" class="form-control datepicker" placeholder="Event Date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Event Date'" class="form-control" required="" type="text">
						</div>

						<!-- <div class="col-lg-6 d-flex flex-column mb-20">
							<div class="nice-select app-select form-control " tabindex="0">
								<input id="guest" name="guest" placeholder="Event Guest" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Event Guest'" class="form-control" required="" type="text">
								 <span class="current">Number of guests</span> -->
						<!-- <td>
										<span> Event Guest</span>
										<ul class="list">
											<li data-value="Project you want to donate" data-display="Project you want to donate" class="option selected">Number
												of guests</li>
											<li data-value="1" class="option">Number of guests 1</li>
											<li data-value="2" class="option">Number of guests 2</li>
											<li data-value="3" class="option">Number of guests 3</li>
											<li data-value="4" class="option">Number of guests 5</li>
											<li data-value="5" class="option">Number of guests 7</li>
											<li data-value="6" class="option">Number of guests 8</li>
											<li data-value="7" class="option">Number of guests 11</li>
											<li data-value="8" class="option">More Than 11</li>
	
										</ul>
										<input  name="guest" >
										</td> -->
						<!-- </div> -->
						<!-- </div> -->

						<div class="col-lg-12 d-flex flex-column">
							<textarea class="form-control" id="msg" name="msg" placeholder="Écrivez votre message ici" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Écrire un message'" required=""></textarea>
						</div>

						<div class="col-lg-12 d-flex justify-content-end">
							<button class="primary-btn dark mt-30 text-uppercase" name="booking">Faire la demande de réservation</button>
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