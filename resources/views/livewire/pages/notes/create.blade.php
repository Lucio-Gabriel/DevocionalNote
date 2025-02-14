<div>

    <div class="text-center">
        <h1 class="text-xl md:text-2xl md:pt-10 text-black-accent font-medium">
            Crie sua nota
        </h1>
    </div>

    <div class="flex flex-col justify-center items-center mt-5">
        <form>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <x-svg.pencil
                        class="w-5 h-5 text-gray-accent"
                    />
                </div>

                <x-text-input
                    id="title"
                    class="block mt-1 w-full"
                    type="text"
                    name="title"
                    required autofcus
                    autocomplete="user"
                />
            </div>

            <div class="relative mt-3">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none mb-80 md:mb-80">
                    <x-svg.notes
                        class="w-5 h-5 text-gray-accent"
                    />
                </div>

                <textarea
                    id="message"
                    rows="4"
                    class="block p-4 px-10 py-5 md:py-7 w-full h-96 md:h-[400px] text-sm border-gray-300 focus:border-primary focus:primary rounded-md shadow-sm"></textarea>
            </div>

            <div class="mt-3">
                <x-primary-button>
                    Salvar
                </x-primary-button>
            </div>
        </form>
    </div>

</div>
