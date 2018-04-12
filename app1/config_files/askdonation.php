function donationSelectChange(don_value, don_index){
	don_form=document.getElementById("paypal_donation")
	don_form.amount.value=don_value
	don_form.currency_code.value="USD";
	don_form.business.value="donaciones@milaulas.com";
	don_form.image_url.value="https://www.milaulas.com/imagenes/milaulas150x36.gif";
	don_form.return.value="https://www.milaulas.com/paypal/thanks.php?usersite="+window.location.hostname;
	don_form.rm.value="2";
	don_form.notify_url.value="https://www.milaulas.com/paypal/notify_from_paypal.php";

	switch(don_index) {
	    case 1:
		don_form.item_name.value='Donación a Mil Aulas (Un mes sin publicidad en '+window.location.hostname+')';
		don_form.action='https://www.paypal.com/cgi-bin/webscr';
		break;
	    case 2:
		don_form.item_name.value='Donación a Mil Aulas (Tres meses sin publicidad en '+window.location.hostname+')';
		don_form.action='https://www.paypal.com/cgi-bin/webscr';
		break;
	    case 3:
		don_form.item_name.value='Donación a Mil Aulas (Un año sin publicidad en '+window.location.hostname+')';
		don_form.action='https://www.paypal.com/cgi-bin/webscr';
		break;
	    default:
		don_form.item_name.value='';
		don_form.action='';
	}
}

function initDonationSelect() {
	donationSelect = document.getElementById('donation_options');
	donationSelect.options[donationSelect.options.length] = new Option('Elige la cantidad que quieres donar:', 0);
	donationSelect.options[donationSelect.options.length] = new Option('un mes realizando una donación de USD 19.95', 19.95);
	donationSelect.options[donationSelect.options.length] = new Option('tres meses realizando una donación de USD 49.95', 49.95);
	donationSelect.options[donationSelect.options.length] = new Option('un año realizando una donación de USD 149.95', 149.95);	
}
