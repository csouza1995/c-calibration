<div x-show="nav_sidebar.open" class="navbar-menu relative z-50">
    <nav
        class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-cyan-700 border-r overflow-y-auto shadow-xl">
        <div class="text-white flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none" href="#">
                c-Calibrations
            </a>
            <button class="navbar-close" x-on:click="nav_sidebar.open = false">
                <i class="fas fa-times fa-lg"></i>
            </button>
        </div>
        <div class="text-white">
            <ul>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-200 hover:bg-cyan-50 hover:text-cyan-800 rounded"
                        href="{{ route('home') }}" wire:navigate>
                        <i class="fas fa-home fa-lg mr-2 w-5"></i>
                        Página Inicial
                    </a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-200 hover:bg-cyan-50 hover:text-cyan-800 rounded"
                        href="{{ route('records.index') }}" wire:navigate>
                        <i class="fas fa-table fa-lg mr-2 w-5"></i>
                        Cadastro
                    </a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-200 hover:bg-cyan-50 hover:text-cyan-800 rounded"
                        href="#">
                        <i class="fas fa-ruler fa-lg mr-2 w-5"></i>
                        Controle de Instrumentos
                    </a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-200 hover:bg-cyan-50 hover:text-cyan-800 rounded"
                        href="#">
                        <i class="fas fa-list-check fa-lg mr-2 w-5"></i>
                        Controle de Calibrações
                    </a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-200 hover:bg-cyan-50 hover:text-cyan-800 rounded"
                        href="#" wire:navigate>
                        <i class="fas fa-ranking-star fa-lg mr-2 w-5"></i>
                        Análise de Instrumentos
                    </a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-200 hover:bg-cyan-50 hover:text-cyan-800 rounded"
                        href="#">
                        <i class="fas fa-square-poll-vertical fa-lg mr-2 w-5"></i>
                        Dashboard
                    </a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-200 hover:bg-cyan-50 hover:text-cyan-800 rounded"
                        href="{{ route('instructions.index') }}" wire:navigate>
                        <i class="fas fa-question-circle fa-lg mr-2 w-5"></i>
                        Instruções de Uso
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
