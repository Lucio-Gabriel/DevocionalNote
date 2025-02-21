<div>
    <div class="text-start ml-7 md:ml-64">
        <h1 class="text-xl md:text-2xl md:pt-10  text-black-accent font-medium">Sua anotação</h1>
    </div>

    <div class="flex flex-col items-center justify-center mt-10">
        <h1 class="text-xl md:text-2xl text-black-accent font-normal">
            {{ $note->title }}
        </h1>

        <p class="mt-5 md:text-xl max-w-96 md:max-w-[900px] font-normal text-black-accent">
            {{ $note->content }}
        </p>
    </div>
</div>
