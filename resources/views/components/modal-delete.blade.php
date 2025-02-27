@props(['note'])

<div x-data="{ showModal: false, noteId: null }">
    <button
        class="text-2xl font-semibold mt-1 text-primary mr-5"
        @click="setTimeout(() => { noteId = {{ $note->id }}; showModal = true;}, 200)"
    >
        <i class="bi bi-trash"></i>
    </button>

    <div
        x-show="showModal"
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
        x-cloak
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
    >
        <div class="bg-white rounded-lg shadow-xl max-w-lg w-full p-6">
            <h2 class="text-2xl font-bold text-center mb-4">Confirmar Exclusão</h2>
            <p class="text-gray-700 text-center">Tem certeza de que deseja excluir esta nota?</p>
            <div class="mt-6 flex justify-end">
                <button
                    class="bg-gray-300 text-gray-700 hover:bg-gray-200 duration-300 font-bold py-2 px-4 rounded mr-2 cursor-pointer"
                    @click="showModal = false"
                >
                    Cancelar
                </button>

                <button
                    class="bg-primary text-white hover:bg-primary-accent duration-300 font-bold py-2 px-4 rounded cursor-pointer"
                    @click="$wire.deleteNote(noteId); showModal = false"
                >
                    Excluir
                </button>
            </div>
        </div>
    </div>
</div>
