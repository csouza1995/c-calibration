<div class="bg-cyan-900 text-white h-12 px-4 flex justify-between items-center">
    {{-- left-menu --}}
    <div>
        {{-- menu icon --}}
        <button x-on:click="toogleNavSidebar"
            class="text-white hover:bg-cyan-50 hover:text-cyan-800 rounded py-1 px-2">
            <i class="fas fa-bars fa-lg"></i>
        </button>

        {{-- lab scope --}}
    </div>

    {{-- center-menu --}}
    <div>
        {{-- search --}}
        <div class="relative min-w-96">
            <input type="text"
                class="w-full bg-gray-800 text-white hover:outline-none hover:ring-2 hover:ring-gray-800 hover:ring-opacity-50 px-4 py-1 rounded"
                placeholder="Pesquisar...">
            <button
                class="absolute right-0 top-0 mt-1 mr-1 text-white hover:outline-none hover:ring-2 hover:ring-gray-800 hover:ring-opacity-50">
                <i class="fas fa-search fa-lg"></i>
            </button>
        </div>
    </div>

    {{-- right-menu --}}
    <div>
        {{-- user --}}
        <div class="relative">
            <button x-on:click="toogleUserDropdown"
                class="text-white hover:bg-cyan-50 hover:text-cyan-800 rounded py-1 px-2">
                User Name
                <i class="fas fa-user-circle fa-lg ml-2"></i>
            </button>

            {{-- user dropdown --}}
            <div x-show="header.user_dropdown.open"
                class="absolute right-0 top-12 w-48 bg-cyan-700 border-r border-b border-l border-gray-800 shadow-xl p-2 rounded-md">
                <ul>
                    <li>
                        <a class="block p-4 text-sm font-semibold text-gray-200 hover:bg-cyan-50 hover:text-cyan-800 rounded"
                            href="#">
                            <i class="fas fa-user fa-lg mr-2 w-5"></i>
                            Perfil
                        </a>
                    </li>
                    <li>
                        <a class="block p-4 text-sm font-semibold text-gray-200 hover:bg-cyan-50 hover:text-cyan-800 rounded"
                            href="#">
                            <i class="fas fa-sign-out-alt fa-lg mr-2 w-5"></i>
                            Sair
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
