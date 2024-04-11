<div class="bg-cyan-900 text-white h-12 px-4 flex justify-between items-center">
  <span class="text-md">
    c-Calibrations &copy; {{ date('Y') }}
  </span>

  <span class="text-md">
    <a
      href="{{ route('versions.index') }}"
      class="text-white hover:bg-cyan-50 hover:text-cyan-800 rounded py-1 px-2"
      wire:navigate
    >
      <i class="fas fa-code-branch fa-lg"></i>
      v0.0.1b
    </a>
  </span>
</div>
