<ul class="space-y-1">
    @foreach($bookings as $booking)
        <li class="border-b p-2">
            {{ $booking->resident->user->name ?? 'Unknown' }} booked {{ $booking->amenity->name ?? 'Unknown' }} 
            from {{ $booking->date_from }} to {{ $booking->date_to }}
        </li>
    @endforeach
</ul>
