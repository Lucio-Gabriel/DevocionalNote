<div x-data="pomodoro()">
    <div class="text-center">
        <h1 class="text-xl md:text-2xl md:pt-10 text-black-accent font-medium">
            Leitura focada
        </h1>

        <div class="flex items-center justify-center space-x-4 mt-7">
            <h3 class="bg-primary-accent text-white font-medium py-2 px-4 rounded-xl shadow-xl">
                Pomodoro
            </h3>
        </div>
    </div>

    <div class="flex flex-col items-center justify-center m-44">
        <div class="text-center">
            <h2 class="text-8xl font-bold" x-text="formatTime()"></h2>
        </div>

        <div class="flex space-x-4 mt-5">
            <button
                @click="startTimer"
                class="bg-primary hover:bg-primary-accent duration-300 text-white font-medium py-2 px-4 rounded"
            >
                Iniciar
            </button>

            <button
                @click="pauseTimer"
                class="bg-primary hover:bg-primary-accent duration-300 text-white font-medium py-2 px-4 rounded"
            >
                Pausar
            </button>

            <button
                @click="resetTimer"
                class="bg-gray-accent hover:bg-gray-500 duration-300 text-white font-medium py-2 px-4 rounded"
            >
                Resetar
            </button>
        </div>
    </div>
</div>
