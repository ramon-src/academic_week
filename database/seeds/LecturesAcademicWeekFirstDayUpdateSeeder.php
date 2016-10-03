<?php


use Illuminate\Database\Seeder;
use AcademicDirectory\Domains\Lectures\Lecture;
use Illuminate\Support\Facades\DB;

class LecturesAcademicWeekFirstDayUpdateSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Lecture::find(2)->update([
            'local' => 'Prédio 32 FACIN - AGES Sala 107'
        ]);

//Android

        Lecture::find(3)->update([
            'local' => 'Prédio 32, Laboratório 312',
            'init_hour' => setHourAndMinute(19, 00),
            'end_hour' => setHourAndMinute(22, 30),
            'event_schedule_id' => 2,
            'description' => 'Curso básico de Android. Ministrante - Daniel Dacorso',
        ]);

//Angular
        Lecture::find(4)->update([
            'init_hour' => setHourAndMinute(17, 30),
            'end_hour' => setHourAndMinute(22, 30),
            'event_schedule_id' => 2,
            'description' => 'Ministrante - Antônio Vilmar Silveira Castro',
            'local' => 'Local a ser definido na data do Curso'
        ]);

//Palestra Ecore

        Lecture::find(11)->update([
            'subject' => '#First Round on Us',
            'description' => 'Suporte à clientes internacionais.',
            'lecture_category_id' => 1
        ]);

//AntônioReis
        Lecture::find(13)->update([
            'init_hour' => setHourAndMinute(20, 30),
            'end_hour' => setHourAndMinute(21, 30),
            'description' => 'No início temos os conhecimentos básicos: A programação estruturada com os seus desvios condicionais, laços de repetição, conectores lógicos, vetores e matrizes, Pesquisa e
Ordenação, Funções, Arquivos, etc..',
        ]);

//iot- Contexto
        Lecture::find(14)->update([
            'event_schedule_id' => 2,
            'init_hour' => setHourAndMinute(12, 30),
            'end_hour' => setHourAndMinute(13, 30),
            'description' => 'Palestra dada pelo PhD em Ciênca da Computação Everton De Matos',
            'local' => 'Prédio 97 Global Tecnopuc - Auditório, Sala 109',
        ]);

// insert
        DB::table('lectures')->insert([
            [
                'subject' => 'Carreira Internacional - SAP',
                'description' => 'Matheus Soares possui graduação em Engenharia de Computação pela PUCRS. Foi bolsista de iniciação científica no Grupo de Sistemas Embarcados (GSE) da PUCRS. Iniciou a carreira na SAP em 2013 como Rotation Intern e atualmente é desenvolvedor para a SAP Itália e Portugal.',
                'init_hour' => setHourAndMinute(19, 30),
                'end_hour' => setHourAndMinute(20, 30),
                'max_people' => 100,
                'event_schedule_id' => 1,
                'lecture_category_id' => 1,
                'local' => 'Prédio 97 Global Tecnopuc - Auditório, Sala 109'
            ]
        ]);

        //iot- Segurança
        Lecture::find(26)->update([
            'event_schedule_id' => 1,
            'init_hour' => setHourAndMinute(21, 30),
            'end_hour' => setHourAndMinute(22, 30),
            'description' => 'Palestra dada pelo PhD em Ciênca da Computação, Ramão Tiago Tiburskis',
            'local' => 'Prédio 32 FACIN - Auditório térreo, Sala 102',

        ]);
    }
}