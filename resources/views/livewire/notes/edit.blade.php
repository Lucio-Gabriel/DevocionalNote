<div>
    <div class="text-center">
        <h1 class="text-xl md:text-2xl md:pt-10 text-black-accent font-medium">
            Edite sua nota
        </h1>
    </div>

    <div class="flex flex-col justify-center items-center mt-5">
        <form wire:submit.prevent="save">
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 mb-7 pointer-events-none">
                    <x-svg.pencil
                        class="w-5 h-5 text-gray-accent"
                    />
                </div>

                <x-text-input-note
                    id="title"
                    class="block mt-1 w-full"
                    type="text"
                    wire:model="title"
                    name="title"
                />

                <div class="mt-2 text-red-500 text-sm h-5">
                    @error('title') <span class="error">{{ $message }}</span>@enderror
                </div>
            </div>

            <div class="relative mt-3">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none mb-[350px]">
                    <x-svg.notes
                        class="w-5 h-5 text-gray-accent"
                    />
                </div>

                <x-textarea-edit/>

                <div class="mt-2 text-red-500 text-sm h-5">
                    @error('content') <span class="error">{{ $message }}</span>@enderror
                </div>
            </div>

            <div class="mt-3">
                <x-primary-button type="submit">
                    Salvar
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
