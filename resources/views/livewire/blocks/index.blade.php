<ul class="space-y-1">
    @foreach($blocks as $block)
        <li class="border-b p-2">{{ $block->name }}</li>
    @endforeach
</ul>
