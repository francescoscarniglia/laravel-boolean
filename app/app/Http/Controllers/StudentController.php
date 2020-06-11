<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;
    public function __construct()
    {
      $this->students = [
        [
          'id' => 1,
          'img' => 'https://www.boolean.careers/images/students/biagini.png',
          'nome' => 'Alessandro Biagini',
          'eta' => 25,
          'genere' => 'm',
          'azienda' => 'DISC SPA',
          'ruolo' => 'web developer',
          'descrizione' => 'Da giocatore professionista di basket a sviluppatore web. 6 mesi di impegno da MVP e un memorabile tap-in targato Boolean hanno garantito ad Alessandro un solido futuro come web developer.'
        ],
        [
          'id' => 2,
          'img' => 'https://www.boolean.careers/images/students/poggini.png',
          'nome' => 'Paola Poggini',
          'eta' => 24,
          'genere' => 'f',
          'azienda' => 'Prima Assicurazioni',
          'ruolo' => 'junior software engineer',
          'descrizione' => 'A 24 anni, dopo aver conseguito il diploma linguistico ha deciso di intraprendere fin da subito un percorso nel mondo Tech. Ad oggi ricopre il ruolo di Junior Software Engineer.'
        ],
        [
          'id' => 3,
          'img' => 'https://www.boolean.careers/images/students/masetti.png',
          'nome' => 'Loana Masetti',
          'eta' => 36,
          'genere' => 'f',
          'azienda' => 'The Zen Agency',
          'ruolo' => 'web developer',
          'descrizione' => 'Ha scoperto la passione per l\'informatica creando un blog di psicologia, ambito in cui si era specializzata durante gli studi. Il suo cuore però non vuol sentir ragione e Loana cambia carriera e diventa una ricercatissima sviluppatrice web.'
        ],
        [
          'id' => 4,
          'img' => 'https://www.boolean.careers/images/students/quarticelli.png',
          'nome' => 'Simone Quarticelli',
          'eta' => 32,
          'genere' => 'm',
          'azienda' => 'VLC 2',
          'ruolo' => 'web developer',
          'descrizione' => 'Per supportare la famiglia, Simone inizia a lavorare come operaio da giovanissimo. Fortemente motivato a cambiare vita, per 6 mesi non stacca mai lo sguardo dal traguardo, distinguendosi per tenacia e resilienza.'
        ],
      ];
    }
    public function index(){
      $students = $this->students;
      return view('students.index', compact('students'));
    }

    public function show($id) {
      // return view
    }
}
