<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CopyrightController extends Controller
{
    const HEADER = "
.-----. _            .-----.                .-----.
`-. .-':_;           `-. .-'                `-. .-'
  : :  .-. .--.  _____ : : .--.   .--.  _____ : : .--.  .--.
  : :  : :'  ..':_____:: :' .; ; '  ..':_____:: :' .; :' '_.'
  :_;  :_;`.__.'       :_;`.__,_;`.__.'       :_;`.__.'`.__.'
        ";

    // Generated with http://www.network-science.de/ascii/
    const COPYRIGHT = "
    ________      ___    ___      ___       ___      ___ ________  ___  __        ___    ___ ________  ________  ___     
    |\   __  \    |\  \  /  /|    |\  \     |\  \    /  /|\   ____\|\  \|\  \     |\  \  /  /|\   __  \|\   __  \|\  \    
    \ \  \|\ /_   \ \  \/  / /    \ \  \    \ \  \  /  / | \  \___|\ \  \/  /|_   \ \  \/  / | \  \|\  \ \  \|\  \ \  \   
     \ \   __  \   \ \    / /      \ \  \    \ \  \/  / / \ \  \    \ \   ___  \   \ \    / / \ \   __  \ \   ____\ \  \  
      \ \  \|\  \   \/  /  /        \ \  \____\ \    / /   \ \  \____\ \  \\ \  \   \/  /  /   \ \  \ \  \ \  \___|\ \  \ 
       \ \_______\__/  / /           \ \_______\ \__/ /     \ \_______\ \__\\ \__\__/  / /      \ \__\ \__\ \__\    \ \__\
        \|_______|\___/ /             \|_______|\|__|/       \|_______|\|__| \|__|\___/ /        \|__|\|__|\|__|     \|__|
                 \|___|/                                                         \|___|/                                  
                                                                                                                          
          
        ";

    static public function getCopyright(): string
    {
        return self::HEADER . self::COPYRIGHT;
    }

    static public function showCopyright(): Response
    {
        return response(self::getCopyright())->header('Content-Type', 'text/plain');
    }
}
