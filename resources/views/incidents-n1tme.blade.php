<x-page-content>
    <x-drawer>
        <x-title-primary>NOC Incidentes</x-title-primary>
        {{-- FILTROS --}}
        <x-modal>
            <x-calendar></x-calendar>
            <x-turn></x-turn>
            <x-team></x-team>
            <x-level></x-level>
        </x-modal>
        {{-- ENDFILTROS --}}

        <div class="flex mt-2">
            <x-card title="Fechados">
                1.200
            </x-card>
            <div class="mx-1"></div>
            <x-card title="Cancelados">
                1.200
            </x-card>
        </div>
        
        <div class="2xl:flex mt-1">
            <x-chart id="myChart"></x-chart>
            <div class="mx-1 my-2"></div>
            <x-chart id="myChart2"></x-chart>
        </div>
    </x-drawer>
</x-page-content>