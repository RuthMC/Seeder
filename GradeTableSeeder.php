<?php

use Illuminate\Database\Seeder;

class GradeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Roberto Gonzalez
        DB::table('grades')->insert(
            [
                'gradeName' => 'PhD. Communication Library and Information Science',
                'gradeInstitution' => 'Rutgers University. New Jersey. USA. Fulbright Scholar.',
                'gradeyear' => 2013,
                'user_id' => 1
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Magíster en Ingeniería Informática',
                'gradeInstitution' => 'Universidad de Santiago de Chile',
                'gradeyear' => 2006,
                'user_id' => 1
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Ingeniero Civil en Informática',
                'gradeInstitution' => 'Universidad de Santiago de Chile',
                'gradeyear' => 2006,
                'user_id' => 1
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Licenciado en Ciencias de la Ingeniería',
                'gradeInstitution' => 'Universidad de Santiago de Chile',
                'gradeyear' => 2004,
                'user_id' => 1
            ]
        );
        //Victor Parada
        DB::table('grades')->insert(
            [
                'gradeName' => 'Doctor en Ciencias de la Ingeniería de Sistemas y Computación',
                'gradeInstitution' => 'COPPE-Universidad Federal de Río de Janeiro',
                'gradeyear' => 1989,
                'user_id' => 2
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Magíster en Ingeniería Industrial',
                'gradeInstitution' => 'Pontificia Universidad Católica Río de Janeiro',
                'gradeyear' => 1986,
                'user_id' => 2
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Ingeniero Civil Químico',
                'gradeInstitution' => 'Universidad de Concepción',
                'gradeyear' => 1981,
                'user_id' => 2
            ]
        );
        //J.L
        DB::table('grades')->insert(
            [
                'gradeName' => 'PhD. in Computer Science',
                'gradeInstitution' => 'University of York',
                'gradeyear' => 2006,
                'user_id' => 10
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Magíster en Ingeniería Informática',
                'gradeInstitution' => 'Universidad de Santiago de Chile',
                'gradeyear' => 1997,
                'user_id' => 10
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Ingeniero Civil en Informática',
                'gradeInstitution' => 'Universidad de Santiago de Chile',
                'gradeyear' => 1997,
                'user_id' => 10
            ]
        );
        DB::table('grades')->insert(
            [
                'gradeName' => 'Licenciado en Ciencias de la Ingeniería',
                'gradeInstitution' => 'Universidad de Santiago de Chile',
                'gradeyear' => 1995,
                'user_id' => 10
            ]
        );
    }
}
