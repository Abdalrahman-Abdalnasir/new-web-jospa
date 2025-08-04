@extends('backend.layouts.app')

@section('title')
{{ __($module_action) }} {{ __($module_title) }}
@endsection

@push('after-styles')
        <style>
.invoice-card {
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 15px;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: 0.3s;
}
.invoice-card:hover {
    background-color: #f9f9f9;
}
.invoice-details {
    display: none;
    margin-top: 10px;
    padding: 15px;
    border-top: 1px solid #ccc;
    background-color: #fafafa;
}
</style>
@endpush

@section('content')
<div class="card">
    <div class="card-body">
        <h3 class="mb-4">{{ __('messages.invoice_cards_list') }}</h3>

@foreach($invoices as $invoice)
    <div class="invoice-card" onclick="toggleInvoiceDetails({{ $invoice->id }})">
        <div>
            <strong>{{ $invoice->user->first_name }} {{ $invoice->user->last_name }}</strong>
        </div>
        <div>
            {{ $invoice->created_at->format('Y-m-d H:i') }}
        </div>
    </div>

<div id="invoice-details-{{ $invoice->id }}" class="invoice-details">
    <div style="background: #f7f7f7; border-radius: 10px; padding: 20px; margin-top: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
        <div style="display: flex; justify-content: space-between; margin-bottom: 15px;">
            <div>
                <strong>{{ __('messages.total') }}:</strong>
            </div>
            <div>
                <span style="font-weight: bold; color: #333;">{{ $invoice->final_total }} SR</span>
            </div>
        </div>
        <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
            <div>{{ __('messages.invoice_discount') }}:</div>
            <div style="color: #dc3545;">- {{ $invoice->discount_amount }} SR</div>
        </div>
        <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
            <div>{{ __('messages.loyalty_discount') }}:</div>
            <div style="color: #28a745;">- {{ $invoice->loyalty_points_discount }} SR</div>
        </div>

        <h5 style="border-bottom: 1px solid #ddd; padding-bottom: 8px; margin-bottom: 15px;">{{ __('messages.bookings') }}:</h5>

        @php
            $cartIds = json_decode($invoice->cart_ids, true);
            $bookings = Modules\Booking\Models\Booking::whereIn('id', $cartIds)->with('services', 'branch')->get();
        @endphp

        @foreach($bookings as $booking)
            <div style="background: #ffffff; border: 1px solid #eee; border-radius: 8px; padding: 15px; margin-bottom: 10px;">
                <p style="margin-bottom: 5px;"><strong>{{ __('messages.booking_id') }}:</strong> {{ $booking->id }}</p>
                <p style="margin-bottom: 10px;"><strong>{{ __('messages.branch') }}:</strong> {{ $booking->branch->name ?? '-' }}</p>

                @foreach($booking->services as $service)
                    <div style="display: flex; justify-content: space-between; padding: 5px 0; border-top: 1px dashed #ddd;">
                        <span>{{ $service->service_name }}</span>
                        <span>{{ $service->service_price }} SR</span>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
@endforeach

    </div>
</div>
<script>
    function toggleInvoiceDetails(id) {
        const detailsDiv = document.getElementById(`invoice-details-${id}`);
        if (detailsDiv.style.display === 'none' || detailsDiv.style.display === '') {
            detailsDiv.style.display = 'block';
        } else {
            detailsDiv.style.display = 'none';
        }
    }
</script>

@endsection
