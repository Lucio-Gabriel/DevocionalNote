<div>
    <div class="flex jutrustify-between items-center py-10">
        <div class="ml-5">
            <h1 class="text-xl md:text-2xl md:pt-10 text-black-accent font-medium">Sua anotação</h1>
        </div>

        <div class="ml-40 md:ml-56">
            <a
                href="#"
                class="bg-primary text-xl font-semibold text-white mr-5 md:mr-12 py-2.5 px-5 rounded-md shadow-lg hover:bg-primary-accent duration-300"
            >
                <i class="bi bi-pencil-square"></i>
            </a>

            <a
                href="#"
                class="bg-primary text-xl font-semibold text-white mr-5 md:mr-12 py-2.5 px-5 rounded-md shadow-lg hover:bg-primary-accent duration-300"
            >
                <i class="bi bi-trash"></i>
            </a>
        </div>
    </div>

    <div class="flex flex-col items-center justify-center mt-2">
        <h1 class="text-xl md:text-2xl text-black-accent font-normal">
            {{ $note->title }}
        </h1>

        <p class="mt-5 md:text-2xl font-normal text-black-accent">
            {{ $note->content }}
        </p>
    </div>
</div>
