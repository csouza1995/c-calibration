@extends('components.layouts.base')

@section('content')
    <div class="flex flex-col h-screen" x-data="app">
        {{-- header --}}
        <x-layouts.header />

        {{-- nav sidebar --}}
        <x-layouts.navbar />

        {{-- content --}}
        <div class="flex-1 p-4">
            <div class="container w-full mx-auto">
                {{-- page address --}}
                <div class="mb-4">
                    @yield('breadcrumbs')
                </div>

                {{-- slot --}}
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
