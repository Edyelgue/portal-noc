<div class="flex items-center justify-between card w-full">
    <form id="filter-form" action="processar-filtro.php" method="GET">
        <div class="flex justify-between border border-red-900 rounded-md p-2 m-1 w-60">
            <label for="data-inicial" class="font-bold text-sm mr-2">Data Inicial:</label>
            <input type="date" id="data-inicial" name="data_inicial" required>
        </div>

        <div class="flex justify-between border border-red-900 rounded-md p-2 m-1 w-60">
            <label for="data-final" class="font-bold text-sm mr-2">Data Final:</label>
            <input type="date" id="data-final" name="data_final" required>
        </div>
    </form>
</div>