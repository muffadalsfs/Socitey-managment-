   @include('layout.app')
<h2 class="text-2xl font-bold mb-6">Admin Dashboard</h2>

<div class="grid grid-cols-2 gap-6">

    <!-- Blocks Section -->
    <div class="bg-white p-4 rounded shadow">
        <h3 class="text-lg font-semibold mb-2">Blocks</h3>
        @livewire('blocks.index')
    </div>

    <!-- Bookings Section -->
    <div class="bg-white p-4 rounded shadow">
        <h3 class="text-lg font-semibold mb-2">Bookings</h3>
        @livewire('bookings.index')
    </div>

</div>
