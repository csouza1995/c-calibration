@extends('components.layouts.base')

@section('content')
    <div class="flex flex-col h-screen" x-data="app">
        {{-- header --}}
        <x-layouts.header />

        {{-- nav sidebar --}}
        <x-layouts.navbar />

        {{-- content --}}
        <div class="flex-1 p-4">
            <div class="container">
                {{-- page address --}}
                <div class="mb-4">
                    <span class="text-xl text-gray-500">
                        @forelse ($links ?? [] as $link)
                            @if (!$loop->first)
                                <i class="fas fa-angle-right fa-xs mx-2"></i>
                            @endif

                            @if (isset($link['route']))
                                <a href="{{ $link['route'] }}" class="hover:text-cyan-800">{{ $link['name'] }}</a>
                            @else
                                <span>{{ $link['name'] }}</span>
                            @endif
                        @empty
                            <span>Home</span>
                        @endforelse
                    </span>
                </div>

                {{ $slot }}
            </div>
        </div>

        {{-- footer --}}
        <x-layouts.footer />
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('app', () => ({
                // data
                nav_sidebar: {
                    open: false
                },
                header: {
                    user_dropdown: {
                        open: false
                    }
                },

                // methods
                toogleNavSidebar() {
                    this.nav_sidebar.open = true
                },
                toogleUserDropdown() {
                    this.header.user_dropdown.open = !this.header.user_dropdown.open
                },

                // methods
                init() {
                    console.log('navbar component initialized')
                }
            }))
        })
    </script>
@endpush
