<section class="h-full">
    <form action="" class="card border border-red-950">
        <div class="rounded-t-2xl">
            <h1 class="text-xl sm:text-2xl md:text-4xl font-bold title-font mb-2 text-red-800 text-center py-4">
                Cadastrar</h1>
            <p class="border border-red-950"></p>
        </div>
        <div class="mt-4">
            <div class="sm:flex">
                <div class="py-2 grid mx-2 sm:w-1/3">
                    <label for="" class="px-2 font-bold">Nome</label>
                    <input type="text" class="border border-red-950 rounded-md h-10">
                </div>
                <div class="py-2 grid mx-2 sm:w-1/3">
                    <label for="" class="px-2 font-bold">Email</label>
                    <input type="text" class="border border-red-950 rounded-md h-10">
                </div>
                <div class="py-2 grid mx-2 sm:w-1/3">
                    <label for="" class="px-2 font-bold">Usuário Remedy</label>
                    <input type="text" class="border border-red-950 rounded-md h-10">
                </div>
            </div>

            <div class="sm:flex">
                <div class="py-2 grid mx-2 sm:w-1/2">
                    <label for="" class="px-2 font-bold">Equipe</label>
                    <select class="select select-info border border-red-950">
                        <option selected class="font-bold">Selecione a Equipe</option>
                        <option>A</option>
                        <option>B</option>
                    </select>
                </div>
                <div class="py-2 grid mx-2 sm:w-1/2">
                    <label for="" class="px-2 font-bold">Turno</label>
                    <select class="select select-info border border-red-950">
                        <option selected class="font-bold">Selecione o Turno</option>
                        <option>ADM</option>
                        <option>T1</option>
                        <option>T2</option>
                        <option>T3</option>
                    </select>
                </div>
                <div class="py-2 grid mx-2 sm:w-1/2">
                    <label for="" class="px-2 font-bold">Nível</label>
                    <select class="select select-info border border-red-950">
                        <option selected class="font-bold">Selecione o Nível</option>
                        <option>Multi</option>
                        <option>Rede Metro</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="items-center justify-center my-6">
            <form method="dialog">
                <!-- if there is a button, it will close the modal -->
                <button class="btn btn-success">Criar</button>
                <button class="btn btn-info">Limpar</button>
                <button class="btn btn-error">Cancelar</button>
            </form>
        </div>
    </form>
</section>