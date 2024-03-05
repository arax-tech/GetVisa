@component('mail::message')
# Aplication Status Updated

@component('mail::panel')
	<b>Application ID:</b> {{ $details['application_id'] }} <br>
	<b>Visa Type:</b> {{ $details['visa_type'] }} <br>
	<b>Category:</b> {{ $details['category'] }} <br>
	<b>Price:</b> {{ $details['price'] }} <br>
	<b>Payment Status:</b> {{ $details['payment_status'] }} <br>
	<b>Status:</b> {{ $details['status'] }} <br>
	<b>Remarks:</b> {{ $details['remarks'] }} <br>
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
