<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newProject = new Project();
        $newProject->name = 'Boolshop';
        $newProject->period = '2025-07-01 00:00:00';
        $newProject->description = '🚀 Progetto finale Boolean - E-commerce full stack

Ho partecipato a un progetto di gruppo per la creazione di un e-commerce completo, occupandomi principalmente dello sviluppo front-end.

Abbiamo implementato tutte le funzionalità standard:
Gestione quantità e aggiunta al carrello
Barra di ricerca e filtri per facilitare la navigazione
Visualizzazione dei prodotti correlati
Utilizzo di codici promo e gestione della consegna gratuita
Processo di checkout con inserimento dati cliente
Invio automatico di email di conferma con dettagli dell’ordine
Tecnologie utilizzate: React, Node.js, Express, MySQL.

Un’esperienza fondamentale per consolidare competenze full stack e lavorare in team su un progetto reale!';

        $newProject->save();
    }
}
