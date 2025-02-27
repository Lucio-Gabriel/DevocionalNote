export default function pomodoro() {
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
