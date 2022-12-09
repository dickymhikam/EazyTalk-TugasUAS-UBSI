<div class="counter_background" style="background-image:url(<?=base_url()?>tamplate/FE/images/counter_background.jpg)"></div>
<div class="counter_form">
	<div class="row fill_height">
		<div class="col fill_height">
			<form class="counter_form_content d-flex flex-column align-items-center justify-content-center" action="#">
				<div class="counter_form_title">Login</div>
				<input type="text" id="email" class="counter_input" placeholder="Masukan Alamat Email" required="required" name="email">
				<input type="password" class="counter_input" placeholder="Password" required="required">
				<button type="submit" class="counter_form_button">Login</button>
				<div class="text-center">
					<a class="small" href="<?=base_url('autentifikasi/registrasi'); ?>">Daftar Member!</a>
				</div>
			</form>
		</div>
	</div>
</div>
</div>