<div x-data="home">
    <span class="text-3xl teste">
        Hello world!
    </span>
</div>

@push('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('home', () => ({
                message: 'Hello world!',
                init() {
                    console.log(this.message)
                }
            }))
        })
    </script>
@endpush
