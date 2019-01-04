<?php

use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Perfil Roberto 
    	//Google Schoolar
        DB::table('pages')->insert(
            [
                'pageName' => 'Google Scholar',
                'pageUrl' => 'https://scholar.google.cl/citations?user=zgG5YN0AAAAJ&hl=es&oi=ao#',
                'user_id' => 1
            ]
        );
        //Research
        DB::table('pages')->insert(
            [
                'pageName' => 'ResearchGate',
                'pageUrl' => 'https://www.researchgate.net/profile/Roberto_Gonzalez-Ibanez',
                'user_id' => 1
            ]
        );
        //Scopus
        DB::table('pages')->insert(
            [
                'pageName' => 'Scopus',
                'pageUrl' => 'https://www.scopus.com/authid/detail.uri?authorId=36835618300',
                'user_id' => 1
            ]
        );
        //Perfil Victor
        //Google schoolar
        DB::table('pages')->insert(
            [
                'pageName' => 'Google Scholar',
                'pageUrl' => 'https://scholar.google.cl/citations?user=_z5EDa4AAAAJ&hl=es&oi=sra',
                'user_id' => 2
            ]
        );
        //Research
        DB::table('pages')->insert(
            [
                'pageName' => 'ResearchGate',
                'pageUrl' => 'https://www.researchgate.net/profile/Victor_Parada',
                'user_id' => 2
            ]
        );
        //Scopus
        DB::table('pages')->insert(
            [
                'pageName' => 'Scopus',
                'pageUrl' => 'https://www.scopus.com/authid/detail.uri?authorId=6602599875',
                'user_id' => 2
            ]
        );
        //Perfil J.L
        //Google schoolar
        DB::table('pages')->insert(
            [
                'pageName' => 'Google Scholar',
                'pageUrl' => 'https://scholar.google.cl/citations?user=Cib4lnQAAAAJ&hl=es&oi=ao',
                'user_id' => 10
            ]
        );
        //Research 
        DB::table('pages')->insert(
            [
                'pageName' => 'ResearchGate',
                'pageUrl' => 'https://www.researchgate.net/profile/Jose_Jara12',
                'user_id' => 10
            ]
        );
        //Scopus
        DB::table('pages')->insert(
            [
                'pageName' => 'Scopus',
                'pageUrl' => 'https://www.scopus.com/authid/detail.uri?authorId=36705856400',
                'user_id' => 10
            ]
        );
    }
}