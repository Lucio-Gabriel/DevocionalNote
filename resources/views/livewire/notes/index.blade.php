 <div>
    <div class="text-center">
        <h1 class="text-xl md:text-2xl md:pt-10 text-black-accent font-medium">
            Todas as sua notas
        </h1>
    </div>

    <div class="flex justify-between mt-8">
        <div class="pl-4 mt-3 md:pl-72">
            <h3 class="font-normal md:text-xl">
                Crie sua anotação
            </h3>
        </div>

        <div class="mt-3 md:pr-60">
            <a
                href="{{ route('dashboard.notes.create') }}"
                class="bg-primary text-xl font-semibold text-white mr-5 md:mr-12 py-2.5 px-5 rounded-md shadow-lg hover:bg-primary-accent duration-300"
            >
                +
            </a>
        </div>
    </div>

     @foreach($this->notes as $note)
         <div
             class="bg-accent-gray flex items-start justify-start ml-4 mr-5 md:ml-72 md:mr-72 py-8 mt-8 rounded-md shadow-lg max-w-full scale-100 hover:scale-105 duration-300"
         >
             <a
                 href="{{ route('notes.show', $note) }}"
                 class="flex ml-5 flex-grow"
             >
            <span class="text-4xl font-semibold mt-1 text-primary">
                <i class="bi bi-sticky"></i>
            </span>
                 <div class="flex flex-col ml-6">
                     <h3 class="text-xl font-normal truncate max-w-64 md:max-w-96 md:whitespace-nowrap">
                         {{ $note->title }}
                     </h3>
                     <p class="text-xs truncate max-w-64 md:max-w-96 md:whitespace-nowrap">
                         {{ $note->content }}
                     </p>
                 </div>
             </a>

             <a
                 href="{{ route('dashboard.notes.edit', $note) }}"
                 wire:navigate
                 class="text-2xl font-semibold mt-1 text-primary mr-5"
             >
                 <i class="bi bi-pencil-square"></i>
             </a>

             <div x-data="{ showModal: false, noteId: null }">
                 <button
                     class="text-2xl font-semibold mt-1 text-primary mr-5"
                     @click="noteId = {{ $note->id }}; showModal = true"
                 >
                     <i class="bi bi-trash"></i>
                 </button>

                 <div
                     x-show="showModal"
                     class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
                     x-cloak
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
         </div>
     @endforeach
 </div>
