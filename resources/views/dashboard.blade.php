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

        <div class="text-start md:text-start md:pl-[500px] mt-4">
            <h2 class="pl-10 md:text-xl text-primary font-serif font-semibold">Provérbios 8:22</h2>

            <p class="pl-10  font-serif">
                O Senhor me possuiu no princípio de seus caminhos,
                desde então, e antes de suas obras.
            </p>
        </div>

        <div class="mt-8">
            <h2 class="text-center text-xl font-semibold text-primary">
                Escolha a sua ação hoje
            </h2>

            <div class="flex flex-col gap-3 items-center justify-center mt-4">

                <a href="#"
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
