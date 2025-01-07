<section class="h-full">
    <x-title-primary>Cadastrar</x-title-primary>
    <form action="/create" method="POST" class="card border border-red-950">
        @if (session('sucesso'))
            <div class="alert alert-success">{{ session('sucesso') }}</div>
        @endif

        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        @if ($errors->has('error'))
            <div class="alert alert-error">
                {{ $errors->first('error') }}
            </div>
        @endif

        @csrf {{-- Token CSRF obrigatório no Laravel --}}

        <div class="rounded-t-2xl">
            {{-- Espaço decorativo ou para mensagens --}}
        </div>
        <div class="mt-4">
            <div class="sm:flex">
                <div class="py-2 grid mx-2 sm:w-1/3">
                    <label for="nome" class="px-2 font-bold">Nome</label>
                    <input type="text" id="nome" name="nome" value="{{ old('nome') }}"
                        class="border border-red-950 rounded-md h-10" required>
                </div>
                <div class="py-2 grid mx-2 sm:w-1/3">
                    <label for="email" class="px-2 font-bold">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        class="border border-red-950 rounded-md h-10" required>
                </div>
                <div class="py-2 grid mx-2 sm:w-1/3">
                    <label for="usuario_remedy" class="px-2 font-bold">Usuário Remedy</label>
                    <input type="text" id="usuario_remedy" name="usuario_remedy" value="{{ old('usuario_remedy') }}"
                        class="border border-red-950 rounded-md h-10" required>
                </div>
            </div>

            <div class="sm:flex">
                <div class="py-2 grid mx-2 sm:w-1/2">
                    <label for="equipe" class="px-2 font-bold">Equipe</label>
                    <select id="equipe" name="equipe" class="select select-info border border-red-950" required>
                        <option selected disabled class="font-bold">Selecione a Equipe</option>
                        <option value="A" {{ old('equipe') == 'A' ? 'selected' : '' }}>A</option>
                        <option value="B" {{ old('equipe') == 'B' ? 'selected' : '' }}>B</option>
                    </select>
                </div>
                <div class="py-2 grid mx-2 sm:w-1/2">
                    <label for="turno" class="px-2 font-bold">Turno</label>
                    <select id="turno" name="turno" class="select select-info border border-red-950" required>
                        <option selected disabled class="font-bold">Selecione o Turno</option>
                        <option value="ADM" {{ old('turno') == 'ADM' ? 'selected' : '' }}>ADM</option>
                        <option value="T1" {{ old('turno') == 'T1' ? 'selected' : '' }}>T1</option>
                        <option value="T2" {{ old('turno') == 'T2' ? 'selected' : '' }}>T2</option>
                        <option value="T3" {{ old('turno') == 'T3' ? 'selected' : '' }}>T3</option>
                    </select>
                </div>
                <div class="py-2 grid mx-2 sm:w-1/2">
                    <label for="nivel" class="px-2 font-bold">Nível</label>
                    <select id="nivel" name="nivel" class="select select-info border border-red-950" required>
                        <option selected disabled class="font-bold">Selecione o Nível</option>
                        <option value="Multi" {{ old('nivel') == 'Multi' ? 'selected' : '' }}>Multi</option>
                        <option value="Rede Metro" {{ old('nivel') == 'Rede Metro' ? 'selected' : '' }}>Rede Metro
                        </option>
                    </select>
                </div>
            </div>
        </div>

        <div class="items-center justify-center my-6 flex gap-4">
            <button type="submit" class="btn btn-success shadow-md text-white">Salvar</button>
            <button type="reset" class="btn btn-neutral shadow-md text-white">Limpar</button>
        </div>
    </form>
</section>
