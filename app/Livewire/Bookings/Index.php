<?php

namespace App\Livewire\Bookings;

use Livewire\Component;
use App\Models\Booking;

class Index extends Component
{
    public $bookings;

    public function mount()
    {
        $this->bookings = Booking::with('resident','amenity')->get();
    }

    public function render()
    {
        return view('livewire.bookings.index');
    }
}
