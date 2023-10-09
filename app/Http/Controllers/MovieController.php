<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public $movies = [
        [
            'id' => 1,
            'title' => 'Inception',
            'img' => '/img/inception.jpeg',
            'description' => 'Dom Cobb possiede una qualifica speciale: è in grado di inserirsi nei sogni altrui per prelevare i segreti nascosti nel più profondo del subconscio. Viene contattato da Saito, un potentissimo industriale giapponese.',
            'director' => 'Nolan',
            'released_at' => 2010,
            'genre' => 'Fantasy'
        ],
        [
            'id' => 2,
            'title' => 'Titanic',
            'img' => '/img/titanic.jpeg',
            'description' => 'Il transatlantico Titanic, considerato un gioiello tecnologico ed il più lussuoso piroscafo da crociera mai realizzato, salpa dall\'Inghilterra il dieci aprile del 1912 con oltre 1500 passeggeri a bordo per il suo viaggio inaugurale. I viaggiatori sono collocati in tre classi, riflesso delle differenze sociali.',
            'director' => 'Cameron',
            'released_at' => 1997,
            'genre' => 'Drama'
        ],
        [
            'id' => 3,
            'title' => 'Django',
            'description' => 'Sulle tracce di due criminali in fuga e di una donna, il cacciatore di taglie di origini tedesche Schultz e lo schiavo Django instaurano un atipico sodalizio sullo sfondo della Guerra Civile Americana.',
            'img' => '/img/django.jpeg',
            'director' => 'Tarantino',
            'released_at' => 2012,
            'genre' => 'Action'
        ],
        [
            'id' => 4,
            'title' => 'Shutter Island',
            'description' => 'Rachel Salado, paziente del manicomio criminale sull\'isola di Shutter, scompare all\'improvviso. L\'agente federale Teddy Daniels, affiancato dall\'ufficiale Chuck Aule, deve indagare per risolvere il mistero.',
            'img' => '/img/shutter.jpeg',
            'director' => 'Scorsese',
            'released_at' => 2010,
            'genre' => 'Drama'
        ],
        [
            'id' => 5,
            'title' => "Don't look up",
            'img' => '/img/dont.jpeg',
            'description' => 'Una coppia di astronomi si accorge dell\'esistenza di un meteorite in rotta di collisione con la Terra. I due scienziati cercano di avvertire tutti sulla Terra che il meteorite distruggerà il pianeta in sei mesi.',
            'director' => 'McKay',
            'released_at' => 2021,
            'genre' => 'Fantasy'
        ],
        [
            'id' => 6,
            'title' => 'Il grande Gatsby',
            'img' => '/img/ilgrandegatsby.jpeg',
            'description' => 'Un aspirante scrittore arriva a New York nel 1922 in cerca del sogno americano. L\'uomo si trasferisce accanto a Jack Gatsby, un milionario conosciuto da tutti per le sue sfarzose feste e per il suo amore impossibile per la sofisticasta Daisy.',
            'director' => 'Luhrmann',
            'released_at' => 2013,
            'genre' => 'Drama'
        ],
    ];

    public function index(){
        return view('film.index', ['movies' => $this->movies]);
    }

    public function show($id){
        foreach($this->movies as $movie){
            if($id == $movie['id']){
                return view('film.show', ['movie' => $movie]);
            }
        }
        abort(404);
    }

    public function filterByGenre($genre){
        $movieByGenre = [];
        foreach($this->movies as $movie){
            if($genre == $movie['genre']){
                $movieByGenre[] = $movie;
            }
        }
        return view('film.genreFilm', ['movies' => $movieByGenre]);
    }
}
