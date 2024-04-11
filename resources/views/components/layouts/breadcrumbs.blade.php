<span class="text-xl text-gray-500">
    @forelse ($links ?? [] as $link)
        @if (!$loop->first)
            <i class="fas fa-angle-right fa-xs mx-2"></i>
        @endif

        @if (isset($link['route']))
            <a href="{{ $link['route'] }}" wire:navigate class="hover:text-cyan-800">{{ $link['title'] }}</a>
        @else
            <span>{{ $link['title'] }}</span>
        @endif
    @empty
        <span>Home</span>
    @endforelse
</span>
