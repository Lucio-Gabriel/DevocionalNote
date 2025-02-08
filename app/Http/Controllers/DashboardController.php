<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index()
    {
        $verses = [
            [
                'title' => 'Provérbios 10:12',
                'text' => '"O ódio excita contendas, mas o amor cobre todos os pecados."',
            ],
            [
                'title' => 'Salmos 56:3',
                'text' => '"Em me vindo o temor, hei de confiar em ti."',
            ],
            [
                'title' => 'Salmos 150:6',
                'text' => '"Tudo quanto tem fôlego louve ao Senhor."',
            ],
            [
                'title' => 'Filipenses 4:4',
                'text' => '"Regozijai-vos sempre no Senhor."'
            ],
            [
                'title' => 'Provérbios 3:5',
                'text' => '"Confia no Senhor de todo o teu coração."'
            ],
            [
                'title' => 'Isaías 41:10',
                'text' => '"Não temas, porque eu sou contigo."'
            ]

        ];

        $versesRandom = $verses[array_rand($verses)];

    return view('dashboard', [
        'verses' => $versesRandom,
    ]);
    }
}
