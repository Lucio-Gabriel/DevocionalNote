import './bootstrap';
import Alpine from 'alpinejs';
import pomodoro from './pomodoro.js';

window.Alpine = Alpine;

Alpine.data('pomodoro', pomodoro);

Alpine.start();

