<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Category ID = 1 => Palestras
         *          ID = 2 => Cursos
         */
        DB::table('lectures')->insert([
            [
                'subject' => 'POKÉDEX  SCRUM',
                'description' => 'O Professor Jorge Kotick Audy irá dar um  curso que  será uma imersão SCRUM para o desenvolvimento das telas de uma super-pokedex por grupo.
Serão 7 grupos, podendo ter de 5 a 6 alunos por grupo ... uma versão lúdica do livro SCRUM 360º.',
                'local' => 'Global Tecnopuc - Crialab',
                'init_hour' => setHourAndMinute(17, 30),
                'end_hour' => setHourAndMinute(22, 30),
                'max_people' => 40,
                'event_schedule_id' => 1, 'lecture_category_id' => 2
            ], [
                'subject' => 'TDD, Dojo',
                'description' => 'Professor Cassio Trindade irá dar uma introdução sobre Desenvolvimento Orientado à Testes, mais conhecido como TDD (Test-driven development). E aplicará um dojo para os alunos colocarem em prática o que foi aprendido.',
                'local' => 'Prédio 32 FACIN - AGES Sala 105',
                'init_hour' => setHourAndMinute(8, 30),
                'end_hour' => setHourAndMinute(12, 30),
                'max_people' => 30,
                'event_schedule_id' => 1, 'lecture_category_id' => 2
            ], [
                'subject' => 'Curso Básico de Android',
                'description' => 'Um profissional da E-core ira dar o curso e forncera  o resumo do curso',
                'local' => 'Prédio 32 FACIN - LAB 305',
                'init_hour' => setHourAndMinute(17, 30),
                'end_hour' => setHourAndMinute(22, 30),
                'max_people' => 30,
                'event_schedule_id' => 1, 'lecture_category_id' => 2
            ], [
                'subject' => 'Curso Básico de Angular.JS',
                'description' => 'Um profissional da DBserver ira dar o curso e forncera  o resumo do curso',
                'local' => 'Prédio 32 FACIN - LAB 305',
                'init_hour' => setHourAndMinute(17, 30),
                'end_hour' => setHourAndMinute(22, 30),
                'max_people' => 30,
                'event_schedule_id' => 1, 'lecture_category_id' => 2
            ], [
                'subject' => 'Núcleo de Pesquisa - 1 ',
                'description' => 'Ainda não fornecido pelo palestrante',
                'local' => 'Prédio 97 Global Tecnopuc - Auditório Sala 109',
                'init_hour' => setHourAndMinute(8, 30),
                'end_hour' => setHourAndMinute(9, 30),
                'max_people' => 300,
                'event_schedule_id' => 1, 'lecture_category_id' => 1
            ], [
                'subject' => 'Núcleo de Pesquisa - 1 ',
                'description' => 'Ainda não fornecido pelo palestrante',
                'local' => 'Prédio 97 Global Tecnopuc - Auditório Sala 109',
                'init_hour' => setHourAndMinute(8, 30),
                'end_hour' => setHourAndMinute(9, 30),
                'max_people' => 300,
                'event_schedule_id' => 1, 'lecture_category_id' => 1
            ], [
                'subject' => 'Núcleo de Pesquisa - 2',
                'description' => 'Ainda não fornecido pelo palestrante',
                'local' => 'Prédio 97 Global Tecnopuc - Auditório Sala 109',
                'init_hour' => setHourAndMinute(9, 30),
                'end_hour' => setHourAndMinute(10, 30),
                'max_people' => 300,
                'event_schedule_id' => 1, 'lecture_category_id' => 1
            ], [
                'subject' => 'Núcleo de Pesquisa - 3',
                'description' => 'Ainda não fornecido pelo palestrante',
                'local' => 'Prédio 97 Global Tecnopuc - Auditório Sala 109',
                'init_hour' => setHourAndMinute(10, 30),
                'end_hour' => setHourAndMinute(11, 30),
                'max_people' => 300,
                'event_schedule_id' => 1, 'lecture_category_id' => 1
            ], [
                'subject' => 'Núcleo de Pesquisa - 4 ',
                'description' => 'Ainda não fornecido pelo palestrante',
                'local' => 'Prédio 97 Global Tecnopuc - Auditório Sala 109',
                'init_hour' => setHourAndMinute(11, 30),
                'end_hour' => setHourAndMinute(12, 30),
                'max_people' => 300,
                'event_schedule_id' => 1, 'lecture_category_id' => 1
            ], [
                'subject' => 'Núcleo de Pesquisa - 5',
                'description' => 'Ainda não fornecido pelo palestrante',
                'local' => 'Prédio 97 Global Tecnopuc - Auditório Sala 109',
                'init_hour' => setHourAndMinute(12, 30),
                'end_hour' => setHourAndMinute(13, 30),
                'max_people' => 300,
                'event_schedule_id' => 1, 'lecture_category_id' => 1
            ], [
                'subject' => 'Núcleo de Pesquisa - 5',
                'description' => 'Ainda não fornecido pelo palestrante',
                'local' => 'Prédio 32 FACIN - Auditório térreo, Sala 102',
                'init_hour' => setHourAndMinute(12, 30),
                'end_hour' => setHourAndMinute(13, 30),
                'max_people' => 300,
                'event_schedule_id' => 1, 'lecture_category_id' => 1
            ], [
                'subject' => 'Núcleo de Pesquisa - 5',
                'description' => 'Ainda não fornecido pelo palestrante',
                'local' => 'Prédio 32 FACIN - Auditório térreo, Sala 102',
                'init_hour' => setHourAndMinute(12, 30),
                'end_hour' => setHourAndMinute(13, 30),
                'max_people' => 300,
                'event_schedule_id' => 1, 'lecture_category_id' => 1
            ], [
                'subject' => 'Palestra E-core',
                'description' => 'Inserir descrição',
                'local' => 'Prédio 97 Global Tecnopuc - Auditório Sala 109',
                'init_hour' => setHourAndMinute(17, 30),
                'end_hour' => setHourAndMinute(18, 30),
                'max_people' => 300,
                'event_schedule_id' => 1, 'lecture_category_id' => 2
            ], [
                'subject' => 'TecnoPUC - Um projeto de Sucesso',
                'description' => 'Inserir descrição',
                'local' => 'Prédio 97 Global Tecnopuc - Auditório Sala 109',
                'init_hour' => setHourAndMinute(18, 30),
                'end_hour' => setHourAndMinute(19, 30),
                'max_people' => 300,
                'event_schedule_id' => 1, 'lecture_category_id' => 2
            ], [
                'subject' => ' Mercado de trabalho e o Desenvolvimento de Software',
                'description' => 'Ainda não informado pelo palestrante Antonio Reis',
                'local' => 'Prédio 97 Global Tecnopuc - Auditório Sala 109',
                'init_hour' => setHourAndMinute(19, 30),
                'end_hour' => setHourAndMinute(20, 30),
                'max_people' => 300,
                'event_schedule_id' => 1, 'lecture_category_id' => 2
            ], [
                'subject' => ' IOT - Contexto',
                'description' => 'Ainda não informado pelo palestrante Antonio Reis',
                'local' => 'Prédio 97 Global Tecnopuc - Auditório Sala 109',
                'init_hour' => setHourAndMinute(19, 30),
                'end_hour' => setHourAndMinute(20, 30),
                'max_people' => 300,
                'event_schedule_id' => 1, 'lecture_category_id' => 2
            ], [
                'subject' => ' Smart Map PUCRS',
                'description' => 'Ainda não informado pelo palestrante Tacito Viero',
                'local' => 'Prédio 32 FACIN - Auditório térreo, Sala 102',
                'init_hour' => setHourAndMinute(8, 30),
                'end_hour' => setHourAndMinute(9, 30),
                'max_people' => 300,
                'event_schedule_id' => 2, 'lecture_category_id' => 1
            ], [
                'subject' => ' Software livre e sua importância ',
                'description' => 'Ainda não informado pelo palestrante Sadi Presidente da ASL',
                'local' => 'Prédio 32 FACIN - Auditório térreo, Sala 102',
                'init_hour' => setHourAndMinute(9, 30),
                'end_hour' => setHourAndMinute(10, 30),
                'max_people' => 300,
                'event_schedule_id' => 2, 'lecture_category_id' => 1
            ], [
                'subject' => ' Suporte à clientes internacionais ',
                'description' => 'Ainda não fornecido pelo palestrante',
                'local' => 'Prédio 32 FACIN - Auditório térreo, Sala 102',
                'init_hour' => setHourAndMinute(10, 30),
                'end_hour' => setHourAndMinute(11, 30),
                'max_people' => 300,
                'event_schedule_id' => 2, 'lecture_category_id' => 1
            ], [
                'subject' => ' Me formei, e agora? ',
                'description' => 'Alunos formados em cursos da faculdade de informática da PUCRS, falam sobre o que aconteceu depois de formados.',
                'local' => 'Prédio 32 FACIN - Auditório térreo, Sala 102',
                'init_hour' => setHourAndMinute(11, 30),
                'end_hour' => setHourAndMinute(12, 30),
                'max_people' => 300,
                'event_schedule_id' => 2, 'lecture_category_id' => 1
            ], [
                'subject' => ' Inception enxuta ',
                'description' => 'Ainda não fornecido pelo palestrante',
                'local' => 'Prédio 32 FACIN - Auditório térreo, Sala 102',
                'init_hour' => setHourAndMinute(12, 30),
                'end_hour' => setHourAndMinute(13, 30),
                'max_people' => 300,
                'event_schedule_id' => 2, 'lecture_category_id' => 1
            ], [
                'subject' => ' Programação dinâmica - João Batista',
                'description' => 'João Batista professor da PUCRS, irá fazer uma palestra interativa sobre programação dinâmica.',
                'local' => 'Prédio 32 FACIN - Auditório térreo, Sala 102',
                'init_hour' => setHourAndMinute(17, 30),
                'end_hour' => setHourAndMinute(18, 30),
                'max_people' => 300,
                'event_schedule_id' => 2, 'lecture_category_id' => 1
            ], [
                'subject' => 'INTERNET das Coisas',
                'description' => 'Ainda não informado pelo palestrante',
                'local' => 'Prédio 32 FACIN - Auditório térreo, Sala 102',
                'init_hour' => setHourAndMinute(18, 30),
                'end_hour' => setHourAndMinute(19, 30),
                'max_people' => 300,
                'event_schedule_id' => 2, 'lecture_category_id' => 1
            ], [
                'subject' => 'INTERNET das Coisas',
                'description' => 'Ainda não informado pelo palestrante',
                'local' => 'Prédio 32 FACIN - Auditório térreo, Sala 102',
                'init_hour' => setHourAndMinute(19, 30),
                'end_hour' => setHourAndMinute(20, 30),
                'max_people' => 300,
                'event_schedule_id' => 2, 'lecture_category_id' => 1
            ], [
                'subject' => 'Startups (a confirmar)',
                'description' => 'Ainda não informado pelo palestrante',
                'local' => 'Prédio 32 FACIN - Auditório térreo, Sala 102',
                'init_hour' => setHourAndMinute(20, 30),
                'end_hour' => setHourAndMinute(21, 30),
                'max_people' => 300,
                'event_schedule_id' => 2, 'lecture_category_id' => 1
            ], [
                'subject' => 'Imagem - CUP',
                'description' => 'Experiencia de alunos do centro de inovação, que participaram do imagem cup',
                'local' => 'Prédio 32 FACIN - Auditório térreo, Sala 102',
                'init_hour' => setHourAndMinute(21, 30),
                'end_hour' => setHourAndMinute(22, 30),
                'max_people' => 300,
                'event_schedule_id' => 2, 'lecture_category_id' => 1
            ], [
                'subject' => 'Maratona de Programação - Experiência e desafios',
                'description' => 'Ainda não informado pelo palestrante',
                'local' => 'Prédio 32 FACIN - Auditório térreo, Sala 102',
                'init_hour' => setHourAndMinute(8, 30),
                'end_hour' => setHourAndMinute(10, 30),
                'max_people' => 100,
                'event_schedule_id' => 3, 'lecture_category_id' => 1
            ], [
                'subject' => 'IOT - Segurança ',
                'description' => 'Ainda não informado pelo palestrante',
                'local' => 'Prédio 32 FACIN - Auditório térreo, Sala 102',
                'init_hour' => setHourAndMinute(10, 30),
                'end_hour' => setHourAndMinute(11, 30),
                'max_people' => 300,
                'event_schedule_id' => 3, 'lecture_category_id' => 1
            ], [
                'subject' => 'E-core',
                'description' => 'Ainda não informado pelo palestrante',
                'local' => 'Prédio 32 FACIN - Auditório térreo, Sala 102',
                'init_hour' => setHourAndMinute(11, 30),
                'end_hour' => setHourAndMinute(12, 30),
                'max_people' => 300,
                'event_schedule_id' => 3, 'lecture_category_id' => 1
            ], [
                'subject' => 'Direto ao Ponto',
                'description' => 'Ainda não informado pelo palestrante',
                'local' => 'Prédio 32 FACIN - Auditório térreo, Sala 102',
                'init_hour' => setHourAndMinute(17, 30),
                'end_hour' => setHourAndMinute(18, 30),
                'max_people' => 300,
                'event_schedule_id' => 3, 'lecture_category_id' => 1
            ],
            [
                'subject' => 'ON - CAMPUS',
                'description' => 'Ainda não informado pelo palestrante',
                'local' => 'Prédio 32 FACIN - Auditório térreo, Sala 102',
                'init_hour' => setHourAndMinute(18, 30),
                'end_hour' => setHourAndMinute(22, 30),
                'max_people' => 300,
                'event_schedule_id' => 3, 'lecture_category_id' => 1
            ],
            [
                'subject' => 'CURSO - DESIGN THINKING ',
                'description' => 'Ainda não informado pelo palestrante',
                'local' => 'Global TecnoPUC - Crialab',
                'init_hour' => setHourAndMinute(17, 30),
                'end_hour' => setHourAndMinute(22, 30),
                'max_people' => 35,
                'event_schedule_id' => 3, 'lecture_category_id' => 2
            ],
        ]);
    }
}
