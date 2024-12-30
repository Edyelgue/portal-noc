<div class="drawer lg:drawer-open">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col justify-items-start">
        <div class="flex items-center bg-red-900">
            <label for="my-drawer-2" class="btn btn-ghost drawer-button lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="white" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </label>
            <img src="{{ asset('images/logo-desktop.png') }}" alt="Descrição da Imagem" class="h-10 lg:hidden">
        </div>
        <div class="h-screen text-center items-center justify-center p-2 lg:p-4">
            <!-- Page content here -->
            {{ $slot }}
        </div>
    </div>
    <div class="drawer-side">
        <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="text-white min-h-full w-80 p-4 bg-red-950">
            <img src="{{ asset('images/logo-desktop.png') }}" alt="Descrição da Imagem" class="w-36 py-4 lg:visible">
            <!-- Sidebar content here -->
            <x-accordion title="Incidentes">
                <x-list-drawer uri="/incidents-n1tme">N1 TME</x-list-drawer>
            </x-accordion>

            <x-accordion title="Mudanças">
                <x-list-drawer uri="/mudancas">vazio</x-list-drawer>
            </x-accordion>

            <x-accordion title="Problemas">
                <x-list-drawer uri="/problemas">vazio</x-list-drawer>
            </x-accordion>

            <x-accordion title="Ordens de Serviços">
                <x-list-drawer uri="/servicos">vazio</x-list-drawer>
            </x-accordion>
        </ul>
    </div>
</div>