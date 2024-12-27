<div class="flex justify-items-end px-4">
    <!-- You can open the modal using ID.showModal() method -->
    <button class="btn bg-red-900 btn-ghost hover:bg-red-950" onclick="my_modal_4.showModal()">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="white" class="size-5">
            <path fill-rule="evenodd"
                d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 0 1 .628.74v2.288a2.25 2.25 0 0 1-.659 1.59l-4.682 4.683a2.25 2.25 0 0 0-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 0 1 8 18.25v-5.757a2.25 2.25 0 0 0-.659-1.591L2.659 6.22A2.25 2.25 0 0 1 2 4.629V2.34a.75.75 0 0 1 .628-.74Z"
                clip-rule="evenodd" />
        </svg>
    </button>
    <dialog id="my_modal_4" class="modal">
        <div class="modal-box w-11/12 max-w-5xl">
            <h3 class="text-lg font-bold">Filtros</h3>
            <div class="flex flex-col">
                {{ $slot }}
            </div>
            <div class="modal-action">
                <form method="dialog">
                    <!-- if there is a button, it will close the modal -->
                    <button class="btn btn-success">Aplicar</button>
                    <button class="btn btn-error">Cancelar</button>
                </form>
            </div>
        </div>
    </dialog>
</div>