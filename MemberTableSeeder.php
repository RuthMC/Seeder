<?php

use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert(
            [
                'memberName' => 'Eero',
                'memberLastName' => 'Sormunen',                
                'memberGrade' => 'Professor',
                'project_id' => 1
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Carita',
                'memberLastName' => 'Kiili',                
                'memberGrade' => '',
                'project_id' => 1
            ]
        );
                DB::table('members')->insert(
            [
                'memberName' => 'Marja Vauras',
                'memberLastName' => 'Kiili',                
                'memberGrade' => '',
                'project_id' => 1
            ]
        );  
        DB::table('members')->insert(
            [
                'memberName' => 'Mario',
                'memberLastName' => 'Quintanilla',
                'memberGrade' => '',
                'project_id' => 1
            ]
        );  
        DB::table('members')->insert(
            [
                'memberName' => 'Jose Luis',
                'memberLastName' => 'Varela',
                'memberGrade' => '',
                'project_id' => 2
            ]
        ); 
        DB::table('members')->insert(
            [
                'memberName' => 'Carlos',
                'memberLastName' => 'Barrera',                
                'memberGrade' => '',
                'project_id' => 2
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Carolina',
                'memberLastName' => 'Bonacic',
                'memberGrade' => '',
                'project_id' => 3
            ]
        ); 
         DB::table('members')->insert(
            [
                'memberName' => 'Carlos',
                'memberLastName' => 'Contreras',
                'memberGrade' => '',
                'project_id' => 4
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Sergio',
                'memberLastName' => 'Ramos',
                'memberGrade' => '',
                'project_id' => 4
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Claudio',
                'memberLastName' => 'Rodríguez',
                'memberGrade' => '',
                'project_id' => 4
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Felipe',
                'memberLastName' => 'Gatica',
                'memberGrade' => '',
                'project_id' => 4
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Carlos',
                'memberLastName' => 'Herrera',
                'memberGrade' => '',
                'project_id' => 4
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Mauricio',
                'memberLastName' => 'Sepúlveda',
                'memberGrade' => '',
                'project_id' => 4
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Lucas',
                'memberLastName' => 'Parada',
                'memberGrade' => '',
                'project_id' => 4
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Carlos',
                'memberLastName' => 'Rey',
                'memberGrade' => '',
                'project_id' => 4
            ]
        ); 
        DB::table('members')->insert(
            [
                'memberName' => 'Pedro',
                'memberLastName' => 'Palominos',
                'memberGrade' => '',
                'project_id' => 5
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Luis',
                'memberLastName' => 'Quezada',
                'memberGrade' => '',
                'project_id' => 5
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Cristian',
                'memberLastName' => 'Mateluna',
                'memberGrade' => '',
                'project_id' => 5
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Fernando',
                'memberLastName' => 'Michel',
                'memberGrade' => '',
                'project_id' => 6
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Carlos',
                'memberLastName' => 'Herrera',
                'memberGrade' => '',
                'project_id' => 6
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Pierre',
                'memberLastName' => 'Lopez',
                'memberGrade' => '',
                'project_id' => 6
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Lorena',
                'memberLastName' => 'Pradenas',
                'memberGrade' => '',
                'project_id' => 6
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Christian',
                'memberLastName' => 'Artigues',
                'memberGrade' => '',
                'project_id' => 6
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Margauxx',
                'memberLastName' => 'Nattaf',
                'memberGrade' => '',
                'project_id' => 6
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'André',
                'memberLastName' => 'Thomas',
                'memberGrade' => '',
                'project_id' => 6
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Mauricio ',
                'memberLastName' => 'Solar',
                'memberGrade' => '',
                'project_id' => 6
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Walter ',
                'memberLastName' => 'Farina',
                'memberGrade' => '',
                'project_id' => 6
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Lorena ',
                'memberLastName' => 'Praderas',
                'memberGrade' => '',
                'project_id' => 7
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Mauricio ',
                'memberLastName' => 'Bravo',
                'memberGrade' => '',
                'project_id' => 7
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Max',
                'memberLastName' => 'Chacon',
                'memberGrade' => '',
                'project_id' => 9
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Emmanuel',
                'memberLastName' => 'Katsogridakis',
                'memberGrade' => 'NIHR Academic Clinical Fellow & Registrar in Vascular Surgery',
                'project_id' => 9
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Ronney',
                'memberLastName' => 'Panerai',
                'memberGrade' => 'Emeritus Professor',
                'project_id' => 9
            ]
        );
        DB::table('members')->insert(
            [
                'memberName' => 'Ronney',
                'memberLastName' => 'Panerai',
                'memberGrade' => 'Emeritus Professor',
                'project_id' => 9
            ]
        );
    }
}
