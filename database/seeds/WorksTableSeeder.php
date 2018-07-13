<?php

use Illuminate\Database\Seeder;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $description = [
            "Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken.",
            "Er zijn vele variaties van passages van Lorem Ipsum beschikbaar maar het merendeel heeft te lijden gehad van wijzigingen in een of andere vorm, door ingevoegde humor of willekeurig gekozen woorden die nog niet half geloofwaardig ogen. Als u een passage uit Lorum Ipsum gaat gebruiken dient u zich ervan te verzekeren dat er niets beschamends midden in de tekst verborgen zit. Alle Lorum Ipsum generators op Internet hebben de eigenschap",
            "Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale verdeling van letters bestaat, in tegenstelling tot \"Hier uw tekst, hier uw tekst\" wat het tot min of meer leesbaar nederlands maakt. Veel desktop publishing pakketten en web pagina editors gebruiken tegenwoordig Lorem Ipsum als hun standaard model tekst, en een zoekopdracht naar \"lorem ipsum\" ontsluit veel websites die nog in aanbouw zijn. Verscheidene versies hebben zich ontwikkeld in de loop van de jaren, soms per ongeluk soms expres (ingevoegde humor en dergelijke)."
        ];

        for ($y = 0; $y < 5; $y++) {
            $project = new \App\Projects();
            $project->title = "Project " . $y;
            $project->description = $description[rand(0,2)];
            $project->save();

            for ($i = 0; $i < 10; $i++) {
                $work = new \App\Works();
                $work->title = "Work: " . $i;
                $work->subtitle = "Project: " . $y;
                $work->description = $description[rand(0,2)];
                $work->specificaties = "Specificaties";
                $work->project_id = $project->id;
                $work->save();
            }
        }
    }
}
