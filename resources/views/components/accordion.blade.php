<div class="collapse collapse-plus hover:bg-red-900 bg-red-950">
    <input type="checkbox" name="my-accordion-1" />
    <div class="collapse-title text-md font-medium hover:bg-red-950">{{ $title }}</div>
    <div class="collapse-content">
        <ul>
            {{ $slot }}
        </ul>
    </div>
</div>