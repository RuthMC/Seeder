<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert(
            [
                'projectName' => 'Enhancing learning and teaching for future competences of online inquiry in multiple domains (iFuCo)',
                'projectInit' => '2016-01-01',
                'projectEnd' => '2018-12-31',
                'projectDescription' => 'IFuCo-project has three main objectives: to build a deeper theoretical understanding of students’ online inquiry competences, to develop novel instructional model to enhance learning and teaching of future competences in online inquiry in primary education, and to create a long term research network and collaboration between Finland and Chile to meet the global challenges of future education. To reach these goals we will conduct two multidisciplinary studies: a large scale cross-sectional survey for students and teachers and an intervention study to test the efficacy of the developed instructional model for promoting online inquiry competencies. The results on students’ online inquire competence, teachers’ pedagogical practices, and the effectiveness of the instructional model can be used in developing future school curricula and teacher education both in Chile and Finland.',
                'user_id' => 1,
                
            ]
        );
          DB::table('projects')->insert(
            [
                'projectName' => 'ENCHANT: Evaluation of iNterfaces for interaCting witH digitAl iNformation objecTs',
                'projectInit' => '2015-01-01',
                'projectEnd' => '2017-12-31',
                'projectDescription' => 'ENCHANT is a three-year project (2015-2017) that focuses on studying and designing systems for natural interactions with information search systems. The project involves the development and evaluation of body-controlled, touch-based, virtual-reality-based, visual-based, and augmented-reality-based interfaces for interacting with search results and information objects, and for organizing information. The goal of the project is to understand the impact of different interaction forms that are typically intended to close the interaction gap between users and machines. The ENCHANT project is partially funded by the DICYT (Dirección de Investigación Científica y Tecnológica), Code 061519GI',
                'user_id' => 1,
                
            ]
        );

          DB::table('projects')->insert(
            [
                'projectName' => 'Real-Time Web Observatories',
                'projectInit' => '2014-01-01',
                'projectEnd' => '2014-12-31',
                'projectDescription' => 'Human-generated content on the Web has increased over the last decade. In part, this situation has been powered by the proliferation of social networking services and mobile computing. In the context of citizen safety, everyday people share information about safety-related events such as natural disasters, accidents, and theft. This information can have valuable implications for the community and authorities, however, processing and making sense of such volume of information are difficult tasks for machines and likely impossible for humans. In this project we developed a real-time Web observatory that uses publicly available information found in social networking services such as Twitter to automatically provide visualizations and indicators of safety-related events for the particular case of cyclists as perceived by the citizens. This Web observatory is built on top of a scalable and robust architecture using state-of-the-art technology for stream processing. We demonstrate the potential applications of this design with two implementations thought to aid researchers, decision makers, and people in general.',
                'user_id' => 1,
                
            ]
        );
        DB::table('projects')->insert(
            [
                'projectName' => 'Collaborative Information Seeking Support and Services in Libraries',
                'projectInit' => '2011-06-01',
                'projectEnd' => '2015-09-30',
                'projectDescription' => '',
                'user_id' => 1,
                
            ]
        );
          DB::table('projects')->insert(
            [
                'projectName' => 'Automatic design of algorithms',
                'projectInit' => '2014-01-01',
                'projectEnd' => '2014-12-31',
                'projectDescription' => 'There is a variety of combinatorial optimization problems for which any efficient algorithm capable of ccurately resolve any input data of the problem, has been found so far. Such problems are associated with the decision making in large part of the production and services processes and are studied in the field of management science, computer science and operations research. Typical cases arise in the optimal use of raw material, the optimal use of time; the optimal scheduling of human resources, etc. Situations like these have been extensively studied in the literature, giving rise to a particular class of problems known as NP-complete, which in turn, is the origin of the famous conjecture of NP-completeness. Despite a relentless search for the last 40 years, an efficient algorithm for any of the problems of the family has not been found yet, in fact, one algorithm would be sufficient to activate a complex network of knowledge that interconnects all problems, triggering a specific and efficient algorithm for each problem belonging to the class. Knowing that the computational power of processors has increased enormously since the NP-completeness was detected, one wonders if the task of finding efficient algorithms could be performed by machines. We argue that the creation of an algorithm for solving an optimization problem can also be seen as an optimization problem. In this case, the feasible solutions of the optimization problem are the different algorithms that solve the problem, while the objective function corresponds to the characteristics of the algorithms that we are looking for. In this project, using a suitable search method, several algorithms are automatically produced for various combinatorial optimization problems.',
                'user_id' => 2,
                
            ]
        );          
          DB::table('projects')->insert(
            [
                'projectName' => 'Metaheuristics and Natural Inspired Computing',
                'projectInit' => '2014-01-01',
                'projectEnd' => '2014-12-31',
                'projectDescription' => 'Los métodos metaheurísticos, son métodos que permiten encontrar soluciones aproximadas para problemas de optimización combinatoria. Por lo tanto son métodos o algoritmos que permites solucionar problemas que o bien tienen una cantidad expo de soluciones posibles, o bien, son difíciles de abordad numéricamente. Son de naturaleza variada debido a que se originan en diversos campos de a ciencia y de la ingeniería.',
                'user_id' => 2,
                
            ]
        );
          DB::table('projects')->insert(
            [
                'projectName' => 'Engineering Problems',
                'projectInit' => '2017-01-01',
                'projectEnd' => '2017-12-31',
                'projectDescription' => 'The objective is to approach complex engineering optimization problems by heuristic algorithms.',
                'user_id' => 2,
                
            ]
        ); 
         DB::table('projects')->insert(
            [
                'projectName' => 'Green Route',
                'projectInit' => '2017-01-01',
                'projectEnd' => '2017-12-31',
                'projectDescription' => 'The objective is to approach complex engineering optimization problems by heuristic algorithms.',
                'user_id' => 2,
                
            ]
        );
         DB::table('projects')->insert(
            [
                'projectName' => 'nonlinear assessment of cerebral autoregulation',
                'projectInit' => '2018-01-10',
                'projectEnd' => '2018-10-30',
                'projectDescription' => '',
                'user_id' => 10,
                
            ]
        );
    }
}
