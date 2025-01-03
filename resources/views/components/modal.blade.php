<div class="flex justify-items-end xl:ml-1 mb-1 w-48">
    <!-- You can open the modal using ID.showModal() method -->
    <button class="p-2 rounded-lg bg-red-900 btn-ghost hover:bg-red-950" onclick="my_modal_4.showModal()">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="white" class="size-4">
            <path
                d="M14 2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v2.172a2 2 0 0 0 .586 1.414l2.828 2.828A2 2 0 0 1 6 9.828v4.363a.5.5 0 0 0 .724.447l2.17-1.085A2 2 0 0 0 10 11.763V9.829a2 2 0 0 1 .586-1.414l2.828-2.828A2 2 0 0 0 14 4.172V2Z" />
        </svg>
    </button>
    <h2 class="font-bold text-md md:text-lg items-center flex px-2">Filtros</h2>
    <dialog id="my_modal_4" class="modal">
        <div class="modal-box w-80 px-auto max-w-5xl items-center justify-center card">
            <h3 class="text-lg md:text-lg font-bold my-2">Filtros</h3>
            <div class="flex flex-col">
                {{ $slot }}
            </div>
            <div class="modal-action items-center justify-center">
                <form method="dialog">
                    <!-- if there is a button, it will close the modal -->
                    <button class="btn btn-success">Aplicar</button>
                    <button class="btn btn-info">Limpar</button>
                    <button class="btn btn-error">Cancelar</button>
                </form>
            </div>
        </div>
    </dialog>
</div>