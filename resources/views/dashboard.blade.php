@php use Illuminate\Support\Facades\Auth; @endphp
<x-app-layout>
    <div class="py-12 pt-44">
        <div>
            <h1 class="text-center text-2xl font-semibold text-primary">
                Olá, {{ Auth::user()->name }} Feliz em ter você aqui
            </h1>
        </div>

        <div class="flex flex-col items-center justify-center mt-4">
            <img
                src="images/Leitor.png"
                alt="Leitor Lendo"
                class="w-64 w-64"
            />
        </div>

        <div class="flex flex-col justify-center items-center mt-4">
            <h2 class="md:text-xl text-primary font-serif font-semibold">{{ $verses['title'] }}</h2>

            <p class="font-serif">
                {{ $verses['text'] }}
            </p>
        </div>

        <div class="mt-8 md:mt-12">
            <h2 class="text-center text-xl font-semibold text-primary">
                Escolha a sua ação hoje
            </h2>

            <div class="flex flex-col gap-3 items-center justify-center mt-4">

                <a href="{{ route('dashboard.notes') }}"
                   class="flex items-center gap-2 bg-primary text-white font-medium px-32 py-3 rounded-md shadow-md hover:bg-primary-accent duration-300"
                >
                    Minhas anotações

                    <x-svg.notes
                        class="w-5 h-5"
                    />
                </a>

                <a href="#"
                   class="flex items-center gap-2 bg-primary text-white font-medium px-40 py-3 rounded-md shadow-md hover:bg-primary-accent duration-300"
                >
                    Pomodoro

                    <x-svg.alarm
                        class="w-5 h-5"
                    />
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
