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
            <x-btn.plus>
                +
            </x-btn.plus>
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

             <x-btn.edit :note="$note">
                 <i class="bi bi-pencil-square"></i>
             </x-btn.edit>

             <x-modal-delete :note="$note" />
         </div>
     @endforeach
 </div>
