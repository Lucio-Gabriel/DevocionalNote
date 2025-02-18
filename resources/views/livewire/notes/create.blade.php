<div>
    <div class="text-center">
        <h1 class="text-xl md:text-2xl md:pt-10 text-black-accent font-medium">
            Crie sua nota
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

                <x-text-input
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

                <textarea
                    id="content"
                    type="text"
                    wire:model="content"
                    name="content"
                    rows="4"
                    class="block p-4 px-10 py-5 md:py-7 w-full h-96 md:h-[400px] text-sm border-gray-300 focus:border-primary focus:primary rounded-md shadow-sm">
                </textarea>

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
