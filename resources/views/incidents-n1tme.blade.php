<x-page-content>
    <x-drawer>
        <x-title-primary>NOC Incidentes</x-title-primary>
        <x-modal></x-modal>

        <div class="flex">
            <x-card title="Fechados">
                1.200
            </x-card>
            <div class="mx-1"></div>
            <x-card title="Cancelados">
                1.200
            </x-card>
        </div>
        
        <div class="2xl:flex w-full">
            <x-chart id="myChart"></x-chart>
            <div class="mx-1 my-2"></div>
            <x-chart id="myChart2"></x-chart>
        </div>
    </x-drawer>
</x-page-content>