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

<script>
    function pomodoro() {
        return {
            time: 25 * 60,
            timer: null,
            isRunning: false,

            formatTime() {
                const minutes = Math.floor(this.time / 60);
                const seconds = this.time % 60;
                return `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
            },

            startTimer() {
                if (this.isRunning) return;
                this.isRunning = true;
                this.timer = setInterval(() => {
                    if (this.time > 0) {
                        this.time--;
                    } else {
                        this.stopTimer();
                        alert('O tempo acabou! Hora de uma pausa.');
                    }
                }, 1000);
            },

            pauseTimer() {
                this.isRunning = false;
                clearInterval(this.timer);
            },

            resetTimer() {
                this.isRunning = false;
                clearInterval(this.timer);
                this.time = 25 * 60;
            },

            stopTimer() {
                this.isRunning = false;
                clearInterval(this.timer);
            },
        };
    }
</script>
</div>
