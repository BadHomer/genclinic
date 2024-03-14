<div
    x-data="{ open: false }"
    x-open="open"
    x-on:open-modal.window = "open = true"
    x-on.:close-modal.window = "open = false"
    x-init="$wire."
>
    <button x-on:click="open = true" class="primary-btn">Show More...</button>

    <ul x-show="open" x-on:click.outside="open = false">
        <li><button class="primary-btn" wire:click="archive">Archive</button></li>

        <li><button class="primary-btn" wire:click="delete">Delete</button></li>
    </ul>
</div>
