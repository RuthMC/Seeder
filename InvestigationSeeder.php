<?php

use Illuminate\Database\Seeder;

class InvestigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Roberto Gonzalez
    	//Google schoolar
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Identifying sarcasm in Twitter: a closer look',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Roberto González-Ibánez, Smaranda Muresan, Nina Wacholder',
                'investigationAbstract' => 'Sarcasm transforms the polarity of an apparently positive or negative utterance into its opposite. We report on a method for constructing a corpus of sarcastic Twitter messages in which determination of the sarcasm of each message has been made by its author. We use this reliable corpus to compare sarcastic utterances in Twitter to utterances that express positive or negative attitudes without sarcasm. We investigate the impact of lexical and pragmatic factors on machine learning effectiveness for identifying sarcastic utterances and we compare the performance of machine learning techniques and human judges on this task. Perhaps unsurprisingly, neither the human judges nor the machine learning techniques perform very well.',
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Evaluating the synergic effect of collaboration in information seeking',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Chirag Shah, Roberto González-Ibáñez',
                'investigationAbstract' => "It is typically expected that when people work together, they can often accomplish goals that are difficult or even impossible for individuals. We consider this notion of the group achieving more than the sum of all individuals' achievements to be the synergic effect in collaboration. Similar expectation exists for people working in collaboration for information seeking tasks. We, however, lack a methodology and appropriate evaluation metrics for studying and measuring the synergic effect. In this paper we demonstrate how to evaluate this effect and discuss what it means to various collaborative information seeking (CIS) situations. We present a user study with four different conditions: single user, pair of users at the same computer, pair of users at different computers and co-located, and pair of users remotely located. Each of these individuals or pairs was given the same task of information seeking and usage for the …",
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Exploring information seeking processes in collaborative search tasks',
                'investigationYear' => '2010',
                'investigationAuthors' => 'Chirag Shah, Roberto González‐Ibáñez',
                'investigationAbstract' => "Many theories and models exist for understanding and explaining information seeking processes (ISP) for individuals. Such is not the case for collaborative information seeking (CIS), despite its growing importance. In this paper we take Kuhlthau's ISP model, designed for individual information seeking, and map it to a CIS situation. We present a laboratory study with 84 participants in 42 pairs and demonstrate how their information seeking processes over two sessions can be mapped to various stages of the ISP model. In addition, we explore the affective dimension of information seeking as well as perceived relevance expressed by the participants through their interactions. We discuss similarities and disparities of ISP for individuals and collaborative information seeking. In particular, we show that there is a logical progression from uncertainty about the task to being satisfied about the collected information among …",
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Coagmento: A system for supporting collaborative information seeking',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Roberto González‐Ibáñez, Chirag Shah',
                'investigationAbstract' => "In this demo we introduce Coagmento, a tool for supporting interactive information seeking process of teams in various collaborative scenarios. Coagmento has been used in several laboratory and field studies to understand issues related to collaborative information seeking (CIS) and deriving lessons and guidelines for providing suitable support for people working in collaboration for information‐intensive projects. From its initial design, Coagmento has evolved through the introduction of new features and the support for both web‐based as well as mobile systems. Using appropriate research methodologies, Coagmento has proven to be a useful tool for collecting behavioral data of users enabling researchers to better understand different dimensions of the collaborative process of teams as well as single users while searching information online.",
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Let’s search together, but not too close! An analysis of communication and performance in collaborative information seeking',
                'investigationYear' => '2013',
                'investigationAuthors' => 'Roberto González-Ibáñez, Muge Haseki, Chirag Shah',
                'investigationAbstract' => "Communication is considered to be one of the most essential components of collaboration, but our understanding as to which form of communication provides the most optimal cost-benefit balance lacks severely. To help investigate effects of various communication channels on a collaborative project, we conducted a user study with 30 pairs (60 participants) in three different conditions – co-located, remotely located with text chat, and remotely located with text as well as audio chat, in an exploratory search task. Using both quantitative and qualitative data analysis, we found that teams with remotely located participants were more effective in terms of being able to explore more diverse information. Adding audio support for remote collaboration helped participants to lower their cognitive load as well as negative emotions compared to those working in the same space. We also show how these findings could help …",
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Exploration of Dynamic Query Suggestions and Dynamic Search Results For Their Effects on Search Behaviors',
                'investigationYear' => '2012',
                'investigationAuthors' => 'Chirag Shah, Jingjing Liu, Roberto González-Ibáñez, Nicholas Belkin',
                'investigationAbstract' => "While search behavior using dynamic query suggestions is understudied, it is virtually non‐existent for dynamic search results (as currently experienced with Google Instant). We report results from a controlled lab study aimed at exploring the effects of these recent search interface developments – dynamic query suggestions and dynamic search results – on users' search behaviors. Based on the availability of these two features, 36 participants were assigned to three conditions and were asked to complete an exploratory search task. Analyses on user behaviors were conducted based on log data, screen videos, and eye tracking. Our results showed that while the dynamic search results feature exposed the participants to more search results pages, shorter querying time and shorter queries, such a functionality did not change users' general search process transition, as well as number of search sites, queries, and …",
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Spatial context in collaborative information seeking',
                'investigationYear' => '2012',
                'investigationAuthors' => 'Chirag Shah, Roberto González-Ibáñez',
                'investigationAbstract' => "Space and time are considered the most important dimensions for studying systems and methods that support collaboration in information seeking. Several investigations have provided us with insights into people’s preferences and experiences relating to these two dimensions, but there is a lack of empirical evidence. A user study is presented, involving 60 subjects in 30 pairs, in which the experience and performance of users are compared while performing an information-seeking task in three different spatially defined collaboration settings: (1) working at the same workstation, (2) working in the same room at different workstations, and (3) working in different rooms. The results show significant differences among the experimental conditions, indicating the impact of space on collaboration. The pros and cons of different spatial set-ups are derived from an extensive analysis that uses several traditional information …",
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Smile! Studying expressivity of happiness as a synergic factor in collaborative information seeking',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Roberto González‐Ibáñez, Chirag Shah, Natalia Córdova‐Rubio',
                'investigationAbstract' => "It is commonly expected that collaborative work will lead to better results than working individually. It has been demonstrated by some that teamwork is more than adding together the product of individual work, though this may depend on various factors such as time, space, the tasks or activities nature, as well as team members' personalities. To date, little is known about the specific elements that contribute to this synergic effect; however, some have argued that emotions, in particular positive ones, may have a fundamental role in teamwork. In this paper we take a closer look at users' smiles – as a way of expressing happiness‐ by studying how they participate in the information search process of both individuals and teams. We present a user study involving 30 participants (10 pairs and 10 individuals) and show how smiling contributes to the overall experience of team members as well as their performance in an …",
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'An integrated review of emoticons in computer-mediated communication',
                'investigationYear' => '2017',
                'investigationAuthors' => 'Nerea Aldunate, Roberto González-Ibáñez',
                'investigationAbstract' => "Facial expressions constitute a rich source of non-verbal cues in face-to-face communication. They provide interlocutors with resources to express and interpret verbal messages, which may affect their cognitive and emotional processing. Contrarily, computer-mediated communication (CMC), particularly text-based communication, is limited to the use of symbols to convey a message, where facial expressions cannot be transmitted naturally. In this scenario, people use emoticons as paralinguistic cues to convey emotional meaning. Research has shown that emoticons contribute to a greater social presence as a result of the enrichment of text-based communication channels. Additionally, emoticons constitute a valuable resource for language comprehension by providing expressivity to text messages. The latter findings have been supported by studies in neuroscience showing that particular brain regions involved in emotional processing are also activated when people are exposed to emoticons. To reach an integrated understanding of the influence of emoticons in human communication on both socio-cognitive and neural levels, we review the literature on emoticons in three different areas. First, we present relevant literature on emoticons in CMC. Second, we study the influence of emoticons in language comprehension. Finally, we show the incipient research in neuroscience on this topic. This mini review reveals that, while there are plenty of studies on the influence of emoticons in communication from a social psychology perspective, little is known about the neurocognitive basis of the effects of emoticons on communication dynamics.",
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Time and space in collaborative information seeking: The clash of effectiveness and uniqueness',
                'investigationYear' => '2012',
                'investigationAuthors' => 'Roberto González‐Ibáñez, Muge Haseki, Chirag Shah',
                'investigationAbstract' => "Collaboration takes place at different time‐space conditions. Past research has shown that these two dimensions may have different implications in the collaboration process, as well as on its outcomes, depending upon the task being performed. In collaborative information seeking (CIS), as a relatively new topic in information science, little is known about the effects of different temporal‐spatial contexts. To address this, we conducted a user study involving 80 participants in 40 pairs, which were assigned to four experimental conditions, namely: co‐located, remotely located with text chat, remotely located with audio chat, and asynchronous. Using quantitative methods, we investigated the effects of these conditions on communication, information synthesis, productivity, and user experience. Results regarding the space dimension suggest that information seeking behaviors of co‐located users tend to overlap thus …",
                'page_id' => 1,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A Performance-Based Test for Assessing Students’ Online Inquiry Competences in Schools',
                'investigationYear' => '2018',
                'investigationAuthors' => 'Sormunen, E., González-Ibáñez, R., Kiili, C., Erdmann, N., Escobar-Macaya, M',
                'investigationAbstract' => "",
                'page_id' => 3,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'An integrated review of emoticons in computer-mediated communication',
                'investigationYear' => '2017',
                'investigationAuthors' => 'Aldunate, N., González-Ibáñez, R.',
                'investigationAbstract' => "",
                'page_id' => 3,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'NEURONE: oNlinE inqUiRy experimentatiON systEm',
                'investigationYear' => '2017',
                'investigationAuthors' => 'González-Ibáñez, R., Gacitúa, D., Sormunen, E., Kiili, C.',
                'investigationAbstract' => "",
                'page_id' => 3,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Two’s not always company: collaborative information seeking across task types',
                'investigationYear' => '2017',
                'investigationAuthors' => 'Shah, C., Hendahewa, C., González-Ibáñez, R.',
                'investigationAbstract' => "",
                'page_id' => 3,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Identification of nonliteral language in social media: A case study on sarcasm ',
                'investigationYear' => '2016',
                'investigationAuthors' => 'Muresan, S., Gonzalez-Ibanez, R., Ghosh, D., Wacholder, N.',
                'investigationAbstract' => "",
                'page_id' => 3,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Rain or shine? Forecasting search process performance in exploratory search tasks',
                'investigationYear' => '2016',
                'investigationAuthors' => 'Shah, C., Hendahewa, C., González-Ibáñez, R.',
                'investigationAbstract' => "",
                'page_id' => 3,
            ]
        );
        //Victor
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Optimization of electrical distribution feeders using simulated annealing',
                'investigationYear' => '2004',
                'investigationAuthors' => 'Victor Parada, Jacques A Ferland, Miguel Arias, Keith Daniels',
                'investigationAbstract' => "The planning of electrical power distribution systems strongly influences the supply of electrical power to consumers. The problem is to minimize both the investment cost for feeder and substations, and the power-loss cost. When the substations can already provide enough power flow, then the problem reduces to minimize the total cost related to the feeders and their power-loss. The difficulty of dealing with this problem increases rapidly with its size (i.e., the number of customers). It seems appropriate to use heuristic methods to obtain suboptimal solutions, since exact methods are too much time consuming. In this paper, a simulated annealing algorithm is used. A set of numerical results are provided.",
                'page_id' => 4,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A cross-cultural assessment of three theories of pro-environmental behavior: A comparison between business students of Chile and the United States',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Mark Cordano, Stephanie Welcomer, Robert F Scherer, Lorena Pradenas, Víctor Parada',
                'investigationAbstract' => "We surveyed business students in the United States (n = 256) and Chile (n = 310) to compare three theories of pro-environmental behavior.We examined Ajzen and Fishbein’s theory of reasoned action, Schawartz’s norm activation theory, and the values-beliefs-norms theory created by Stern, Dietz, Abel, Guagnano, and Kalof. We produced reliable measures for both samples. Each theory explained a significant amount of the variance in behavioral intention, although no theory clearly dominated for either the United States or Chile. However, among the variables included among these theories, the norms variable consistently produced the strongest relationship with behavioral intention. We discuss avenues of future research focusing on norms and more parsimonious combinations of the variables across these three theories.",
                'page_id' => 4,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Understanding cultural differences in the antecedents of pro-environmental behavior: A comparative analysis of business students in the United States and Chile',
                'investigationYear' => '2010',
                'investigationAuthors' => 'Mark Cordano, Stephanie Welcomer, Robert Scherer, Lorena Pradenas, Victor Parada',
                'investigationAbstract' => "We surveyed business students in the U. S. (n = 256) and Chile (n = 310). The survey included measures drawn from studies of pro-environmental behavior using Schwartz's norm activation theory , the theory of reasoned action , and a values-beliefs-norms model created by . Our results show Chilean business students are more altruistic than business students in the United States and Chilean students felt stronger pressures from their peers to engage in pro-environmental behaviors. Chilean business students also expressed higher levels of awareness of environmental problems, a greater sense of obligation to protect the environment, a stronger willingness to limit property rights, and stronger intentions to engage in pro-environmental behavior.",
                'page_id' => 4,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Mitigation of greenhouse gas emissions in vehicle routing problems with backhauling',
                'investigationYear' => '2013',
                'investigationAuthors' => 'Lorena Pradenas, Boris Oportus, VíCtor Parada',
                'investigationAbstract' => "In this paper, the decrease in the emission of greenhouse gases is evaluated using the vehicle routing problem with backhauls and time windows by considering the energy required for each route and estimating the load and distance between customers. Using a scatter search, problems from the literature with up to 100 randomly distributed customers were analyzed. Our results indicate that the distance traveled and the transportation costs increase as the required energy decreases, but the amount of fuel consumed also decreases; therefore, the emission of greenhouse gases also decreases. In some cases, the number of vehicles remains the same or increases because a better solution is achieved with shorter, better distributed routes. In addition, using a cooperative game approach, we found that different transportation companies operating jointly results in decreased emissions as well as operating costs.",
                'page_id' => 4,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A maturity model for assessing the use of ICT in school education',
                'investigationYear' => '2013',
                'investigationAuthors' => 'Mauricio Solar, Jorge Sabattin, Victor Parada',
                'investigationAbstract' => "This article describes an ICT-based and capability-driven model for assessing ICT in education capabilities and maturity of schools. The proposed model, called ICTE-MM (ICT in School Education Maturity Model), has three elements supporting educational processes: information criteria, ICT resources, and leverage domains. Changing the traditional and exclusive focus on ICT, five Leverage Domains are defined: Educational Management, Infrastructure, Administrators, Teachers and Students. The Leverage Domains generate a hierarchical structure with a second level named Key Domain Areas. These areas should be measurable and controllable, so they are related to a third hierarchical level, called Critical Variables, allowing the model’s elements to be assessed qualitatively and quantitatively. The capability and maturity of these variables associated with the intersection with the other two elements establish …",
                'page_id' => 4,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Solution for the constrained guillotine cutting problem by simulated annealing',
                'investigationYear' => '1998',
                'investigationAuthors' => 'Victor Parada, Mauricio Sepúlveda, Mauricio Solar, Arlindo Gómes',
                'investigationAbstract' => "Since the Simulated Annealing method was identified as a useful tool for solving optimization problems, several applications have been made in order to study its performance in various problems. This method is especially adequate for problems in which, it is not possible to represent the whole domain of solutions through a set of algebraic equations. In this study the constrained two-dimensional cutting problem is formulated and solved. The formulation of this problem is based on the mapping of a cutting pattern on a binary tree, facilitating the random generation of neighbor solutions. A rigorous numerical analysis establishing the best set of parameters to solve any instance of the problem is accomplished. Further, we present a set of comparative results with other methods that also permit a solution to the problem.",
                'page_id' => 4,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'An evolutionary algorithm for the multi-objective pick-up and delivery pollution-routing problem',
                'investigationYear' => '2019',
                'investigationAuthors' => 'Bravo, M., Rojas, L.P., Parada, V.',
                'investigationAbstract' => "",
                'page_id' => 6,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Assessing the energy benefit of using a wind turbine micro-siting model',
                'investigationYear' => '2018',
                'investigationAuthors' => 'Parada, L., Herrera, C., Flores, P., Parada, V.',
                'investigationAbstract' => "",
                'page_id' => 6,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Novel Methods Generated by Genetic Programming for the Guillotine-Cutting Problem',
                'investigationYear' => '2018',
                'investigationAuthors' => 'Bertolini, V., Rey, C., Sepulveda, M., Parada, V.',
                'investigationAbstract' => "",
                'page_id' => 6,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Wind farm layout optimization using a Gaussian-based wake model',
                'investigationYear' => '2017',
                'investigationAuthors' => 'Parada, L., Herrera, C., Flores, P., Parada, V.',
                'investigationAbstract' => "",
                'page_id' => 6,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Automatic design of algorithms for the traveling salesman problem',
                'investigationYear' => '2016',
                'investigationAuthors' => 'Loyola, C., Sepúlveda, M., Solar, M., Lopez, P., Parada, V.',
                'investigationAbstract' => "",
                'page_id' => 6,
            ]
        );
        //J.L
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A prototype question answering system using syntactic and semantic information for answer retrieval',
                'investigationYear' => '2002',
                'investigationAuthors' => 'Enrique Alfonseca, Marco De Boni, José-Luis Jara-Valencia, Suresh Manandhar',
                'investigationAbstract' => "This was our first entry at TREC and the system we presented was, due to time constraints, an incomplete prototype. Our main aims were to verify the usefulness of syntactic analysis for QA and to experiment with different semantic distance metrics in view of a more complete and fully integrated future system. To this end we made use of a part-of-speech tagger and NP chunker in conjunction with entity recognition and semantic distance metrics. We also envisaged experimenting with a shallow best first parser but time factors meant integration with the rest of the system was not achieved. Unfortunately due to time constraints no testing and no parameter tuning was carried out prior TREC. This in turn meant that a number of small bugs negatively influenced our results. Moreover it was not possible to carry out experiments in parameter tuning, meaning our system did not achieve optimal performance. Nevertheless we obtained reasonable results, the best score being 18.1% of the questions correct (with lenient judgements).",
                'page_id' => 7,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Regional differences in dynamic cerebral autoregulation in the healthy brain assessed by magnetic resonance imaging',
                'investigationYear' => '2013',
                'investigationAuthors' => 'Mark A Horsfield, José L Jara, Nazia P Saeed, Ronney B Panerai, Thompson G Robinson',
                'investigationAbstract' => "A novel method is described for mapping dynamic cerebral blood flow autoregulation to assess autoregulatory efficiency throughout the brain, using magnetic resonance imaging (MRI). Global abnormalities in autoregulation occur in clinical conditions, including stroke and head injury, and are of prognostic significance. However, there is limited information about regional variations. A gradient-echo echo-planar pulse sequence was used to scan the brains of healthy subjects at a rate of 1 scan/second during a transient decrease in arterial blood pressure provoked by a sudden release of pressure in bilateral inflated thigh cuffs. The signal decrease and subsequent recovery were analyzed to provide an index of autoregulatory efficiency (MRARI). MRI time-series were successfully acquired and analyzed in eleven subjects. Autoregulatory efficiency was not uniform throughout the brain: white matter exhibited faster recovery than gray (MRARI = 0.702 vs. 0.672, p = 0.009) and the cerebral cortex exhibited faster recovery than the cerebellum (MRARI = 0.669 vs. 0.645, p = 0.016). However, there was no evidence for differences between different cortical regions. Differences in autoregulatory efficiency between white matter, gray matter and the cerebellum may be a result of differences in vessel density and vasodilation. The techniques described may have practical importance in detecting regional changes in autoregulation consequent to disease.",
                'page_id' => 7,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Dynamic cerebral autoregulation following acute ischaemic stroke: comparison of transcranial doppler and magnetic resonance imaging techniques',
                'investigationYear' => '2016',
                'investigationAuthors' => 'Ronney B Panerai, Jose L Jara, Nazia P Saeed, Mark A Horsfield, Thompson G Robinson',
                'investigationAbstract' => "Novel MRI-based dynamic cerebral autoregulation (dCA) assessment enables the estimation of both global and spatially discriminated autoregulation index values. Before exploring this technique for the evaluation of focal dCA in acute ischaemic stroke (AIS) patients, it is necessary to compare global dCA estimates made using both TCD and MRI. Both techniques were used to study 11 AIS patients within 48 h of symptom onset, and nine healthy controls. dCA was assessed by the rate of return of CBFV (Rturn) following a sudden drop induced by the thigh cuff manoeuvre. No significant between-hemisphere differences were seen in controls using either the TCD or MRI technique. Inter-hemisphere averaged Rturn values were not different between TCD (1.89 ± 0.67%/s) and MRI (2.07 ± 0.60%/s) either. In patients, there were no differences between the affected and unaffected hemispheres whether assessed …",
                'page_id' => 7,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A new model-free index of dynamic cerebral blood flow autoregulation',
                'investigationYear' => '2014',
                'investigationAuthors' => 'Max Chacón, José Luis Jara, Ronney B Panerai',
                'investigationAbstract' => "The classic dynamic autoregulatory index (ARI), proposed by Aaslid and Tiecks, is one of the most widely used methods to assess the efficiency of dynamic cerebral autoregulation. Although this index is often used in clinical research and is also included in some commercial equipment, it exhibits considerable intra-subject variability, and has the tendency to produce false positive results in clinical applications. An alternative index of dynamic cerebral autoregulation is proposed, which overcomes most of the limitations of the classic method and also has the advantage of being model-free. This new index uses two parameters that are obtained directly from the response signal of the cerebral blood flow velocity to a transient decrease in arterial blood pressure provoked by the sudden release of bilateral thigh cuffs, and a third parameter measuring the difference in slope of this response and the change in arterial blood pressure achieved. With the values of these parameters, a corresponding classic autoregulatory index value could be calculated by using a linear regression model built from theoretical curves generated with the Aaslid-Tiecks model. In 16 healthy subjects who underwent repeated thigh-cuff manoeuvres, the model-free approach exhibited significantly lower intra-subject variability, as measured by the unbiased coefficient of variation, than the classic autoregulatory index (p = 0.032) and the Rate of Return (p<0.001), another measure of cerebral autoregulation used for this type of systemic pressure stimulus, from 39.23%±41.91% and 55.31%±31.27%, respectively, to 15.98%±7.75%.",
                'page_id' => 7,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Crisp classifiers vs. fuzzy classifiers: A statistical study',
                'investigationYear' => '2009',
                'investigationAuthors' => 'JL Jara, Rodrigo Acevedo-Crespo',
                'investigationAbstract' => "A study is made of whether there is a significant statistical difference in performance between crisp and fuzzy rule-based classification. To do that, 12 datasets were chosen from the UCI repository that are widely used in the literature, and use was made of four different algorithms for rule induction —two crisp and two fuzzy— to classify them. Then a non-parametric statistical test was used for measuring the significance of the results, which indicated that both paradigms —crisp and fuzzy classification— are not different in the statistical meaning.",
                'page_id' => 7,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Empirical evaluation of three machine learning method for automatic classification of neoplastic diagnoses',
                'investigationYear' => '2011',
                'investigationAuthors' => 'José Luis Jara, Max Chacón, Gonzalo Zelaya',
                'investigationAbstract' => "Diagnoses are a valuable source of information for evaluating a health system. However, they are not used extensively by information systems because diagnoses are normally written in natural language. This work empirically evaluates three machine learning methods to automatically assign codes from the International Classification of Diseases (10th Revision) to 3,335 distinct diagnoses of neoplasms obtained from UMLS®. This evaluation is conducted on three different types of preprocessing. The results are encouraging: a well-known rule induction method and maximum entropy models achieve 90% accuracy in a balanced cross-validation experiment.",
                'page_id' => 7,
            ]
        );
        //Scopus
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Reproducibility of dynamic cerebral autoregulation parameters: a multi-centre, multi-method study',
                'investigationYear' => '2018',
                'investigationAuthors' => 'Sanders, M.L., Claassen, J.A.H.R., Aries, M., Panerai, R.B., Elting, J.W.J.',
                'investigationAbstract' => " ",
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Increasing the contrast-to-noise ratio of MRI signals for regional assessment of dynamic cerebral autoregulation',
                'investigationYear' => '2018',
                'investigationAuthors' => 'Jara, J.L., Saeed, N.P., Panerai, R.B., Robinson, T.G.',
                'investigationAbstract' => " ",
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Comparing models of spontaneous variations, maneuvers and indexes to assess dynamic cerebral autoregulation',
                'investigationYear' => '2018',
                'investigationAuthors' => 'Chacón, M., Noh, S.-H., Landerretche, J., Jara, J.L.',
                'investigationAbstract' => " ",
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Non-linear models for the detection of impaired cerebral blood flow autoregulation',
                'investigationYear' => '2018',
                'investigationAuthors' => 'Chacón, M., Jara, J.L., Miranda, R., Katsogridakis, E., Panerai, R.B.',
                'investigationAbstract' => " ",
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Dynamic cerebral autoregulation following acute ischaemic stroke: Comparison of transcranial Doppler and magnetic resonance imaging techniques',
                'investigationYear' => '2016',
                'investigationAuthors' => 'Panerai, R.B., Jara, J.L., Saeed, N.P., Horsfield, M.A., Robinson, T.G.',
                'investigationAbstract' => " ",
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Analysis of the influence of systemic and intracranial pressure in patients with severe head injury using linear and non-linear models',
                'investigationYear' => '2015',
                'investigationAuthors' => 'Chacón, M., Jara, J.L., Varas, N., Panerai, R.B.',
                'investigationAbstract' => " ",
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A new model-free index of dynamic cerebral blood flow autoregulation',
                'investigationYear' => '2014',
                'investigationAuthors' => 'Chacón, M., Jara, J., Panerai, R.B.',
                'investigationAbstract' => " ",
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Regional Differences in Dynamic Cerebral Autoregulation in the Healthy Brain Assessed by Magnetic Resonance Imaging',
                'investigationYear' => '2013',
                'investigationAuthors' => 'Horsfield, M.A., Jara, J.L., Saeed, N.P., Panerai, R.B., Robinson, T.G.',
                'investigationAbstract' => " ",
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Empirical evaluation of three machine learning method for automatic classification of neoplastic diagnoses | [Evaluación empírica de tres métodos de aprendizaje automático para clasificar automáticamente diagnósticos de neoplasias]',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Jara, J.L., Chacón, M., Zelaya, G.',
                'investigationAbstract' => " ",
                'page_id' => 9,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Crisp classifiers vs. fuzzy classifiers: A statistical study',
                'investigationYear' => '2009',
                'investigationAuthors' => 'Jara, J.L., Acevedo-Crespo, R.',
                'investigationAbstract' => " ",
                'page_id' => 9,
            ]
        );

//HECTOR ANTILLANCA 10scolar 11 12 scopus
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Un marco sistémico para orientar el diseño de artefactos del diálogo',
                'investigationYear' => '2008',
                'investigationAuthors' => 'Lobos, E.L., Ponce, H., Antillanca, H.',
                'investigationAbstract' => " ",
                'page_id' => 12,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Refining temporal criteria to classify collaborative systems',
                'investigationYear' => '2008',
                'investigationAuthors' => 'Antillanca, H.B., Fuller, D.A..',
                'investigationAbstract' => " ",
                'page_id' => 12,
            ]
        );
//LEONEL MEDINA13 14 15
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Ore grade estimation by feature selection and voting using boundary detection in digital image analysis',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Claudio A Perez, Pablo A Estévez, Pablo A Vera, Luis E Castillo, Carlos M Aravena, Daniel A Schulz, Leonel E Medina',
                'investigationAbstract' => "In mining, rock classification plays a crucial role at different stages of the extraction process ranging from the design of the mine to mineral grading and plant control. In this paper we present a new method to improve rock classification using digital image analysis, feature selection based on mutual information and a voting process to take into account boundary information. ",
                'page_id' => 13,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Stochastic facilitation of artificial tactile sensation in primates',
                'investigationYear' => '2012',
                'investigationAuthors' => 'Leonel E Medina, Mikhail A Lebedev, Joseph E O´Doherty, Miguel AL Nicolelis',
                'investigationAbstract' => "Artificial sensation via electrical or optical stimulation of brain sensory areas offers a promising treatment for sensory deficits. For a brain–machine–brain interface, such artificial sensation conveys feedback signals from a sensorized prosthetic limb. The ways neural tissue can be stimulated to evoke artificial sensation and the parameter space of such stimulation, however, remain largely unexplored. Here we investigated whether stochastic facilitation (SF) could enhance an artificial tactile sensation produced by intracortical microstimulation (ICMS). Two rhesus monkeys learned to use a virtual hand, which they moved with a joystick, to explore virtual objects on a computer screen. They sought an object associated with a particular artificial texture (AT) signaled by a periodic ICMS pattern delivered to the primary somatosensory cortex (S1) through a pair of implanted electrodes.",
                'page_id' => 13,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Linear versus nonlinear neural modeling for 2-D pattern recognition',
                'investigationYear' => '2005',
                'investigationAuthors' => 'Claudio A Perez, GD Gonzalez, LE Medina, Francisco J Galdames',
                'investigationAbstract' => "This paper compares the classification performance of linear-system- and neural-network-based models in handwritten-digit classification and face recognition. In inputs to a linear classifier, nonlinear inputs are generated based on linear inputs, using different forms of generating products. Using a genetic algorithm, linear and nonlinear inputs to the linear classifier are selected to improve classification performance. Results show that an appropriate set of linear and nonlinear inputs to the linear classifier were selected, improving significantly its classification performance in both problems. It is also shown that the linear classifier reached a classification performance similar to or better than those obtained by nonlinear neural-network classifiers with linear inputs. ",
                'page_id' => 13,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Effects of frequency-dependent membrane capacitance on neural excitability',
                'investigationYear' => '2015',
                'investigationAuthors' => 'Bryan Howell, Leonel E Medina, Warren M Grill',
                'investigationAbstract' => "Models of excitable cells consider the membrane specific capacitance as a ubiquitous and constant parameter. However, experimental measurements show that the membrane capacitance declines with increasing frequency, ie, exhibits dispersion. We quantified the effects of frequency-dependent membrane capacitance, c (f), on the excitability of cells and nerve fibers across the frequency range from dc to hundreds of kilohertz ",
                'page_id' => 13,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Coincidence-enhanced stochastic resonance: experimental evidence challenges the psychophysical theory behind stochastic resonance',
                'investigationYear' => '2007',
                'investigationAuthors' => 'Claudio A Perez, Theodore E Cohn, Leonel E Medina, José R Donoso',
                'investigationAbstract' => "Stochastic resonance (SR) is the counterintuitive phenomenon in which noise enhances detection of sub-threshold stimuli. The SR psychophysical threshold theory establishes that the required amplitude to exceed the sensory threshold barrier can be reached by adding noise to a sub-threshold stimulus. The aim of this study was to test the SR theory by comparing detection results from two different randomly-presented stimulus conditions. In the first condition, optimal noise was present during the whole attention interval; in the second, the optimal noise was restricted to the same time interval as the stimulus. ",
                'page_id' => 13,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A critical experimental study of the classical tactile threshold theory',
                'investigationYear' => '2010',
                'investigationAuthors' => 'Claudio A Perez, José R Donoso, Leonel E Medina',
                'investigationAbstract' => "The tactile sense is being used in a variety of applications involving tactile human-machine interfaces. In a significant number of publications the classical threshold concept plays a central role in modelling and explaining psychophysical experimental results such as in stochastic resonance (SR) phenomena. In SR, noise enhances detection of sub-threshold stimuli and the phenomenon is explained stating that the required amplitude to exceed the sensory threshold barrier can be reached by adding noise to a sub-threshold stimulus. We designed an experiment to test the validity of the classical vibrotactile threshold. Using a second choice experiment, we show that individuals can order sensorial events below the level known as the classical threshold. If the observer's sensorial system is not activated by stimuli below the threshold, then a second choice could not be above the chance level.",
                'page_id' => 13,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Volume conductor model of transcutaneous electrical stimulation with kilohertz signals',
                'investigationYear' => '2014',
                'investigationAuthors' => 'Leonel E Medina, Warren M Grill',
                'investigationAbstract' => "Incorporating high-frequency components in transcutaneous electrical stimulation (TES) waveforms may make it possible to stimulate deeper nerve fibers since the impedance of tissue declines with increasing frequency. However, the mechanisms of high-frequency TES remain largely unexplored. We investigated the properties of TES with frequencies beyond those typically used in neural stimulation. ",
                'page_id' => 13,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Nerve excitation using an amplitude-modulated signal with kilohertz-frequency carrier and non-zero offset',
                'investigationYear' => '2016',
                'investigationAuthors' => 'Leonel E Medina, Warren M Grill',
                'investigationAbstract' => "Incorporating kilohertz-frequency signals in transcutaneous electrical stimulation has been proposed as a means to overcome the impedance of the skin, thereby reaching deeper nerves. In particular, a transdermal amplitude modulated signal (TAMS), composed of a 210 kHz non-zero offset carrier modulated by rectangular pulses, was introduced recently for the treatment of overactive bladder. However, the contribution of the components of TAMS to nerve fiber activation has not been quantified. We conducted in vivo experiments and applied direct stimulation to the sciatic nerve of cats and rats. We measured electromyogram and compound action potential activity evoked by pulses, TAMS and modified versions of TAMS in which we varied the size of the carrier. Nerve fiber activation using TAMS showed no difference with respect to activation with conventional pulse for carrier frequencies of 20 kHz and higher, regardless the relative amplitude of the carrier. For frequencies lower than 20 kHz, the offset needed to generate half of the maximal evoked response decreased significantly with respect to the pulse. Results of simulations in a computational model of nerve fiber stimulation using the same stimulation waveforms closely matched our experimental measurements. Taken together, these results suggest that a TAMS with carrier frequencies >20 kHz does not offer any advantage over conventional pulses, even with larger amplitudes of the carrier, and this has implications for design of waveforms for efficient and effective transcutaneous stimulation. ",
                'page_id' => 13,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Phantom model of transcutaneous electrical stimulation with kilohertz signals',
                'investigationYear' => '2015',
                'investigationAuthors' => 'Leonel E Medina, Warren M Grill',
                'investigationAbstract' => "Transcutaneous electrical stimulation (TES) of nerve fibers may be optimized by overcoming the impedance of the skin using high-frequency (HF) stimulation signals. The excitation properties of nerve fibers depend on the spatiotemporal distribution of the extracellular field, and therefore quantifying the potentials during HF-TES is warranted. We present a physical phantom of TES that includes elements representing the skin and underlying tissue, and incorporates dispersion of the electrical conductivity as required during HF stimulation. We used both agar-based gels and biological materials, and doped the gels with graphite to add dispersion. We measured the dielectric properties of the materials, which we modified by adjusting the concentration of sodium chloride and graphite. We assembled up to three layers of material, and quantified the impedance as a function of frequency and depth. ",
                'page_id' => 13,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Mammalian Motor Nerve Fibers, Models of',
                'investigationYear' => '2015',
                'investigationAuthors' => 'Leonel E Medina, Warren M Grill',
                'investigationAbstract' => "Spinal Cord Stimulation Spinal cord stimulation (SCS) is a pain management therapy for patients suffering from specific types of chronic pain conditions that are refractory to conventional medical management ",
                'page_id' => 13,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Circuit and volume conductor models of transcutaneous electrical stimulation',
                'investigationYear' => '2013',
                'investigationAuthors' => 'Leonel E Medina, Warren M Grill',
                'investigationAbstract' => "Electrical stimulation of peripheral nerves is a widespread technique for the treatment of neurological diseases and disorders. However, peripheral stimulation typically requires surgical implantation of an electrode and a pulse generator. Transcutaneous stimulation with an external electrode and pulse generator could provide a noninvasive alternative for nerve stimulation. In this study we implemented a lumped parameter electrical circuit and a distributed parameter volume conductor model to quantify the distribution of potentials in the tissue, including frequency-dependent dielectric properties, during transcutaneous electrical stimulation with a very high frequency sinusoidal carrier and rectangular envelope pulse.",
                'page_id' => 13,
            ]
        );
        //SCOPUS
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Nerve excitation using an amplitude-modulated signal with kilohertz-frequency carrier and non-zero offset',
                'investigationYear' => '2016',
                'investigationAuthors' => 'Leonel E Medina, Warren M Grill',
                'investigationAbstract' => "Incorporating kilohertz-frequency signals in transcutaneous electrical stimulation has been proposed as a means to overcome the impedance of the skin, thereby reaching deeper nerves. In particular, a transdermal amplitude modulated signal (TAMS), composed of a 210 kHz non-zero offset carrier modulated by rectangular pulses, was introduced recently for the treatment of overactive bladder. However, the contribution of the components of TAMS to nerve fiber activation has not been quantified. We conducted in vivo experiments and applied direct stimulation to the sciatic nerve of cats and rats. We measured electromyogram and compound action potential activity evoked by pulses, TAMS and modified versions of TAMS in which we varied the size of the carrier. Nerve fiber activation using TAMS showed no difference with respect to activation with conventional pulse for carrier frequencies of 20 kHz and higher, regardless the relative amplitude of the carrier. For frequencies lower than 20 kHz, the offset needed to generate half of the maximal evoked response decreased significantly with respect to the pulse. Results of simulations in a computational model of nerve fiber stimulation using the same stimulation waveforms closely matched our experimental measurements. Taken together, these results suggest that a TAMS with carrier frequencies >20 kHz does not offer any advantage over conventional pulses, even with larger amplitudes of the carrier, and this has implications for design of waveforms for efficient and effective transcutaneous stimulation. ",
                'page_id' => 15,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Effects of frequency-dependent membrane capacitance on neural excitability',
                'investigationYear' => '2015',
                'investigationAuthors' => 'Bryan Howell, Leonel E Medina, Warren M Grill',
                'investigationAbstract' => "Models of excitable cells consider the membrane specific capacitance as a ubiquitous and constant parameter. However, experimental measurements show that the membrane capacitance declines with increasing frequency, ie, exhibits dispersion. We quantified the effects of frequency-dependent membrane capacitance, c (f), on the excitability of cells and nerve fibers across the frequency range from dc to hundreds of kilohertz ",
                'page_id' => 15,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Phantom model of transcutaneous electrical stimulation with kilohertz signals',
                'investigationYear' => '2015',
                'investigationAuthors' => 'Leonel E Medina, Warren M Grill',
                'investigationAbstract' => "Transcutaneous electrical stimulation (TES) of nerve fibers may be optimized by overcoming the impedance of the skin using high-frequency (HF) stimulation signals. The excitation properties of nerve fibers depend on the spatiotemporal distribution of the extracellular field, and therefore quantifying the potentials during HF-TES is warranted. We present a physical phantom of TES that includes elements representing the skin and underlying tissue, and incorporates dispersion of the electrical conductivity as required during HF stimulation. We used both agar-based gels and biological materials, and doped the gels with graphite to add dispersion. We measured the dielectric properties of the materials, which we modified by adjusting the concentration of sodium chloride and graphite. We assembled up to three layers of material, and quantified the impedance as a function of frequency and depth. ",
                'page_id' => 15,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Volume conductor model of transcutaneous electrical stimulation with kilohertz signals',
                'investigationYear' => '2014',
                'investigationAuthors' => 'Leonel E Medina, Warren M Grill',
                'investigationAbstract' => "Incorporating high-frequency components in transcutaneous electrical stimulation (TES) waveforms may make it possible to stimulate deeper nerve fibers since the impedance of tissue declines with increasing frequency. However, the mechanisms of high-frequency TES remain largely unexplored. We investigated the properties of TES with frequencies beyond those typically used in neural stimulation. ",
                'page_id' => 15,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Circuit and volume conductor models of transcutaneous electrical stimulation',
                'investigationYear' => '2013',
                'investigationAuthors' => 'Leonel E Medina, Warren M Grill',
                'investigationAbstract' => "Electrical stimulation of peripheral nerves is a widespread technique for the treatment of neurological diseases and disorders. However, peripheral stimulation typically requires surgical implantation of an electrode and a pulse generator. Transcutaneous stimulation with an external electrode and pulse generator could provide a noninvasive alternative for nerve stimulation. In this study we implemented a lumped parameter electrical circuit and a distributed parameter volume conductor model to quantify the distribution of potentials in the tissue, including frequency-dependent dielectric properties, during transcutaneous electrical stimulation with a very high frequency sinusoidal carrier and rectangular envelope pulse.",
                'page_id' => 15,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Ore grade estimation by feature selection and voting using boundary detection in digital image analysis',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Claudio A Perez, Pablo A Estévez, Pablo A Vera, Luis E Castillo, Carlos M Aravena, Daniel A Schulz, Leonel E Medina',
                'investigationAbstract' => "In mining, rock classification plays a crucial role at different stages of the extraction process ranging from the design of the mine to mineral grading and plant control. In this paper we present a new method to improve rock classification using digital image analysis, feature selection based on mutual information and a voting process to take into account boundary information. ",
                'page_id' => 15,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Stochastic facilitation of artificial tactile sensation in primates',
                'investigationYear' => '2012',
                'investigationAuthors' => 'Leonel E Medina, Mikhail A Lebedev, Joseph E O´Doherty, Miguel AL Nicolelis',
                'investigationAbstract' => "Artificial sensation via electrical or optical stimulation of brain sensory areas offers a promising treatment for sensory deficits. For a brain–machine–brain interface, such artificial sensation conveys feedback signals from a sensorized prosthetic limb. The ways neural tissue can be stimulated to evoke artificial sensation and the parameter space of such stimulation, however, remain largely unexplored. Here we investigated whether stochastic facilitation (SF) could enhance an artificial tactile sensation produced by intracortical microstimulation (ICMS). Two rhesus monkeys learned to use a virtual hand, which they moved with a joystick, to explore virtual objects on a computer screen. They sought an object associated with a particular artificial texture (AT) signaled by a periodic ICMS pattern delivered to the primary somatosensory cortex (S1) through a pair of implanted electrodes.",
                'page_id' => 15,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Coincidence-enhanced stochastic resonance: experimental evidence challenges the psychophysical theory behind stochastic resonance',
                'investigationYear' => '2007',
                'investigationAuthors' => 'Claudio A Perez, Theodore E Cohn, Leonel E Medina, José R Donoso',
                'investigationAbstract' => "Stochastic resonance (SR) is the counterintuitive phenomenon in which noise enhances detection of sub-threshold stimuli. The SR psychophysical threshold theory establishes that the required amplitude to exceed the sensory threshold barrier can be reached by adding noise to a sub-threshold stimulus. The aim of this study was to test the SR theory by comparing detection results from two different randomly-presented stimulus conditions. In the first condition, optimal noise was present during the whole attention interval; in the second, the optimal noise was restricted to the same time interval as the stimulus. ",
                'page_id' => 15,
            ]
        );
                DB::table('investigations')->insert(
            [
                'investigationName' => 'Linear versus nonlinear neural modeling for 2-D pattern recognition',
                'investigationYear' => '2005',
                'investigationAuthors' => 'Claudio A Perez, GD Gonzalez, LE Medina, Francisco J Galdames',
                'investigationAbstract' => "This paper compares the classification performance of linear-system- and neural-network-based models in handwritten-digit classification and face recognition. In inputs to a linear classifier, nonlinear inputs are generated based on linear inputs, using different forms of generating products. Using a genetic algorithm, linear and nonlinear inputs to the linear classifier are selected to improve classification performance. Results show that an appropriate set of linear and nonlinear inputs to the linear classifier were selected, improving significantly its classification performance in both problems. It is also shown that the linear classifier reached a classification performance similar to or better than those obtained by nonlinear neural-network classifiers with linear inputs. ",
                'page_id' => 15,
            ]
        );
                DB::table('investigations')->insert(
            [
                'investigationName' => 'A critical experimental study of the classical tactile threshold theory',
                'investigationYear' => '2010',
                'investigationAuthors' => 'Claudio A Perez, José R Donoso, Leonel E Medina',
                'investigationAbstract' => "The tactile sense is being used in a variety of applications involving tactile human-machine interfaces. In a significant number of publications the classical threshold concept plays a central role in modelling and explaining psychophysical experimental results such as in stochastic resonance (SR) phenomena. In SR, noise enhances detection of sub-threshold stimuli and the phenomenon is explained stating that the required amplitude to exceed the sensory threshold barrier can be reached by adding noise to a sub-threshold stimulus. We designed an experiment to test the validity of the classical vibrotactile threshold. Using a second choice experiment, we show that individuals can order sensorial events below the level known as the classical threshold. If the observer's sensorial system is not activated by stimuli below the threshold, then a second choice could not be above the chance level.",
                'page_id' => 15,
            ]
        );
//GONZALO ACUÑA    16 17 18    

//CAROLINA BONACIC

//MAX CHACON

//FERNANDO CONTRERAS

//MARIO INOSTROZA                
                // FERNANDA KRI 

    // SCOPUS   

        DB::table('investigations')->insert(
            [
                'investigationName' => 'A shared-memory multiprocessor scheduling algorithm',
                'investigationYear' => '2006',
                'investigationAuthors' => 'Zuccar, I., Solar, M., Kri, F., Parada, V.',
                'investigationAbstract' => "Compilers are nowadays fundamental tools for the development of any kind of application. However, their task gets increasingly difficult due to the constant increase in the complexity of modern computer architecture, as well as to the increased requirements imposed upon programming languages by the great diversity of applications handled at present. In the compilation process several optimization problems must be solved, some of them belonging to the NP-Hard class. The quality of the solution found for these problems has direct impact over the quality of the generated object code. To solve them, compilers do it locally through naive heuristics which might consequently lead to solutions that are far from optimal. Knowing that metaheuristics methods have recently been used massively and successfully to solve combinatorial optimization problems, similar performance in the problems found in the compilation process can be expected beforehand. Following this line of reasoning, such problems are presented in this paper and the potential use of metaheuristics techniques to find their solutions is analyzed. A review is also made of the work that has been done in this field, and finally a proposal is made of the road that this development should follow. ",
                'page_id' => 35,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Overview of metaheuristics methods in compilation',
                'investigationYear' => '2005',
                'investigationAuthors' => 'Kri, F., Gómez, C., Caro, P.',
                'investigationAbstract' => "Compilers are nowadays fundamental tools for the development of any kind of application. However, their task gets increasingly difficult due to the constant increase in the complexity of modern computer architecture, as well as to the increased requirements imposed upon programming languages by the great diversity of applications handled at present. In the compilation process several optimization problems must be solved, some of them belonging to the NP-Hard class. The quality of the solution found for these problems has direct impact over the quality of the generated object code. To solve them, compilers do it locally through naive heuristics which might consequently lead to solutions that are far from optimal. Knowing that metaheuristics methods have recently been used massively and successfully to solve combinatorial optimization problems, similar performance in the problems found in the compilation process can be expected beforehand. Following this line of reasoning, such problems are presented in this paper and the potential use of metaheuristics techniques to find their solutions is analyzed. A review is also made of the work that has been done in this field, and finally a proposal is made of the road that this development should follow.",
                'page_id' => 35,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Genetic instruction scheduling and register allocation',
                'investigationYear' => '2004',
                'investigationAuthors' => 'Kri, F., Feeley, M.',
                'investigationAbstract' => "The construction of efficient compilers is very complex, since it has to contend with various optimization problems and depends on the characteristics of the architecture of the machine for which they generate code. Many of these problems are NP-hard. The genetics algorithms have been shown to be effective in the resolution of difficult problems, however, their use in compilation is practically non-existent. In this paper we propose a solution to the problems of register allocation and instruction scheduling. We carry out an analysis of performance by comparing with the more traditional approaches for these problems and we obtain profits on the speed of the generated code varying between-2% and 26%.",
                'page_id' => 35,
            ]
        );
 // EDMUNDO LEIVA-LOBOS
        DB::table('investigations')->insert(
            [
                'investigationName' => 'RBox: An experimentation tool for creating event-driven recommender algorithms for web 2.0',
                'investigationYear' => '2015',
                'investigationAuthors' => 'Leiva-Lobos, E.P., Palomino, M.',
                'investigationAbstract' => "This article introduces a software environment called RBox, built to experiment with recommender systems (RS), regardless of the application domain. In spite of the ubiquity of RS on the Web 2.0 this research field still lacks a unique way of representing collective intelligence. To solve this problem, this article adopts a generic event-driven approach providing a unique RBox data schema. Thus, it is possible to achieve the abstraction of collaborative events that occur on Web 2.0 such as ranking, tagging and voting. A comparison with other tools illustrates the contribution of RBox to the RS field. For instance, this tool enables reusing algorithms and executing experiments that were originally intended for a specific application domain, for other ones. Finally, considering RS tools’ limitations, the next versions of RBox will integrate ubiquitous computing and context-aware recommender systems.",
                'page_id' => 38,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'The 3-Ontology: A framework to place cooperative awareness',
                'investigationYear' => '2002',
                'investigationAuthors' => 'Leiva-Lobos, E.P., Covarrubias, E.',
                'investigationAbstract' => "Understanding and supporting cooperative awareness in CSCW have no definitive answer. Actual awareness models have addressed spatial aspects of interaction rather than other forms of awareness. While technology has privileged event notification by specialized servers it is not clear how both spatial and temporal aspects can be met together in a coherent framework. This paper presents a framework called 3-ontology which takes events, places, and communities as starting points to conceptualize cooperative awareness. Each element in the 3-ontology represents a perspective to cope with cooperative awareness. Technologically, this model has been mapped to a software architecture called JAZZ which has a pool of shared data with 3 servers representing each element of the model. From the client side, this arrangement allows us always to gather information from any cooperative system relative to 3-ontology. So, one way to prove the generality of our cooperative awareness formulation is to see how other models can be mapped to our model.",
                'page_id' => 38,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Augmenting and multiplying spaces for creative design',
                'investigationYear' => '1997',
                'investigationAuthors' => 'Leiva-Lobos, Edmundo P., De Michelis, Giorgio, Covarrubias, Eliana',
                'investigationAbstract' => "Creative design is a very peculiar work practice that has not been studied very much from the viewpoint of the cooperation shaping it. In this paper we present the main findings of a case study conducted on an industrial design project with the aim of analyzing how its actors cooperate. The main findings of our field study involve: on the one hand, recognition of the major role played by physical arrangements of the work space in shaping the practice of creative designers; on the other, the distinction between the different work spaces where different phases of a design project are performed. On the basis of discussion of the above we outline the requirements for a cooperative support system for creative design as a system augmenting and multiplying the work spaces where it is performed.",
                'page_id' => 38,
            ]
        );
// MAURICIO MARIN
        // GOOGLE SCHOLAR
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Crawling a country: better strategies than breadth-first for web page ordering',
                'investigationYear' => '2005',
                'investigationAuthors' => 'Ricardo Baeza-Yates, Carlos Castillo, Mauricio Marin, Andrea Rodriguez',
                'investigationAbstract' => "This article compares several page ordering strategies for Web crawling under several metrics. The objective of these strategies is to download the most important pages early during the crawl. As the coverage of modern search engines is small compared to the size of the Web, and it is impossible to index all of the Web for both theoretical and practical reasons, it is relevant to index at least the most important pages. We use data from actual Web pages to build Web graphs and execute a crawler simulator on those graphs. As the Web is very dynamic, crawling simulation is the only way to ensure that all the strategies considered are compared under the same conditions. We propose several page ordering strategies that are more efficient than breadth-first search and strategies based on partial Pagerank calculations.",
                'page_id' => 39,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Efficient algorithms for many-body hard particle molecular dynamics',
                'investigationYear' => '1993',
                'investigationAuthors' => 'Mauricio Marı́n, Dino Risso, Patricio Cordero',
                'investigationAbstract' => "Many-body simulations are very CPU-time consuming, making the problem of having efficient algorithms specially relevant. In this paper we propose a strategy--for the simulation of hard particle systems--that is efficient, memory saving, and easy to understand and to program. The time intervals by which the simulation proceeds are the increments between collisions (events), and these are dictated by the system itself. Hence these are event-driven simulations. Our strategy is devised to (a) minimize the number of coordinate updates per event, (b) predict new events only between nearby particles, and (c) efficiently manage the events predicted during the simulation. Empirical results are given to show the performance of our strategy in different computers as well as to compare with other approaches.",
                'page_id' => 39,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Scheduling algorithms for Web crawling',
                'investigationYear' => '2004',
                'investigationAuthors' => 'Carlos Castillo, Mauricio Marin, Andrea Rodriguez, Ricardo Baeza-Yates',
                'investigationAbstract' => "This paper presents a comparative study of strategies for Web crawling. We show that a combination of breadth-first ordering with the largest sites first is a practical alternative since it is fast, simple to implement, and able to retrieve the best ranked pages at a rate that is closer to the optimal than other alternatives. Our study was performed on a large sample of the Chilean Web which was crawled by using simulators, so that all strategies were compared under the same conditions, and actual crawls to validate our conclusions. We also explored the effects of large scale parallelism in the page retrieval task and multiple-page requests in a single connection for effective amortization of latency times.",
                'page_id' => 39,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'An empirical assessment of priority queues in event-driven molecular dynamics simulation',
                'investigationYear' => '1995',
                'investigationAuthors' => 'Mauricio Marín, Patricio Cordero',
                'investigationAbstract' => "In the last decades a number of near optimal priority queues have been developed. Many of these priority queues are suitable for the efficient management of events generated during simulations of hard-particle systems. In this paper we compare the execution times of the fastest priority queues known today as well as some forms of binary search trees used as priority queues. We conclude that an unusual adaptation of a strictly balanced binary tree has the best performance for this class of simulations.",
                'page_id' => 39,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'New caching techniques for web search engines',
                'investigationYear' => '2010',
                'investigationAuthors' => 'Mauricio Marin, Veronica Gil-Costa, Carlos Gomez-Pantoja',
                'investigationAbstract' => "This paper proposes a cache hierarchy that enables Web search engines to efficiently process user queries. The different caches in the hierarchy are used to store pieces of data which are useful to solve frequent queries. Cached items range from specific data such as query answers to generic data such as segments of index retrieved from secondary memory. The paper also presents a comparative study based on discrete-event simulation and bulk-synchronous parallelism. The studied performance metrics include overall query throughput, single-user query latency and power consumption. In all cases, the results show that the proposed cache hierarchy leads to better performance than a baseline approach built on state of the art caching techniques.",
                'page_id' => 39,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Parallel query processing on distributed clustering indexes',
                'investigationYear' => '2009',
                'investigationAuthors' => 'Veronica Gil-Costa, Mauricio Marin, Nora Reyes',
                'investigationAbstract' => "Similarity search has been proved suitable for searching in large collections of unstructured data objects. A number of practical index data structures for this purpose have been proposed. All of them have been devised to process single queries sequentially. However, in large-scale systems such as Web Search Engines indexing multi-media content, it is critical to deal efficiently with streams of queries rather than with single queries. In this paper we show how to achieve efficient and scalable performance in this context. To this end we transform a sequential index based on clustering into a distributed one and devise algorithms and optimizations specially tailored to support high-performance parallel query processing.",
                'page_id' => 39,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'kNN query processing in metric spaces using GPUs',
                'investigationYear' => '2011',
                'investigationAuthors' => 'Ricardo J Barrientos, José I Gómez, Christian Tenllado, Manuel Prieto Matias, Mauricio Marin',
                'investigationAbstract' => "Information retrieval from large databases is becoming crucial for many applications in different fields such as content searching in multimedia objects, text retrieval or computational biology. These databases are usually indexed off-line to enable an acceleration of on-line searches. Furthermore, the available parallelism has been exploited using clusters to improve query throughput. Recently some authors have proposed the use of Graphic Processing Units (GPUs) to accelerate brute-force searching algorithms for metric-space databases. In this work we improve existing GPU brute-force implementations and explore the viability of GPUs to accelerate indexing techniques. This exploration includes an interesting discussion about the performance of both brute-force and indexing-based algorithms that takes into account the intrinsic dimensionality of the element of the database.",
                'page_id' => 39,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'High-performance distributed inverted files',
                'investigationYear' => '2007',
                'investigationAuthors' => 'Mauricio Marin, Veronica Gil-Costa',
                'investigationAbstract' => "We present a general method of parallel query processing that allows scalable performance on distributed inverted files. The method allows the realization of a hybrid that combines the advantages of the document and term partitioned inverted files.",
                'page_id' => 39,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Scheduling metric-space queries processing on multi-core processors',
                'investigationYear' => '2010',
                'investigationAuthors' => 'Veronica Gil-Costa, Ricardo Barrientos, Mauricio Marin, Carolina Bonacic',
                'investigationAbstract' => "This paper proposes a strategy to organize metricspace query processing in multicore search nodes as understood in the context of search engines running on clusters of computers. The strategy is applied in each search node to process all active queries visiting the node as part of their solution which, in general, for each query is computed from the contribution of each search node. When query traffic is high enough, the proposed strategy assigns one thread to each query and lets them work in a fully asynchronous manner. When query traffic is moderate or low, some threads start to idle so they are put to work on queries being processed by other threads. The strategy solves the associated synchronization problem among threads by switching query processing into a bulk-synchronous mode of operation.",
                'page_id' => 39,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Sync/async parallel search for the efficient design and construction of web search engines',
                'investigationYear' => '2010',
                'investigationAuthors' => 'Mauricio Marin, Veronica Gil-Costa, Carolina Bonacic, Ricardo Baeza-Yates, Isaac D Scherson',
                'investigationAbstract' => "A parallel query processing method is proposed for the design and construction of web search engines to efficiently deal with dynamic variations in query traffic. The method allows for the efficient use of different distributed indexing and query processing strategies in server clusters consisting of multiple computational/storage nodes. It also enables a better utilization of local and distributed hardware resources as it automatically re-organizes parallel computations to benefit from the advantages of two mixed modes of operation, namely: a newly proposed synchronous mode and the standard asynchronous computing mode. Switching between modes is facilitated by a round-robin strategy devised to grant each query a fair share of the hardware resources and properly predict query throughput.",
                'page_id' => 39,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'To index or not to index: time-space trade-offs in search engines with positional ranking functions',
                'investigationYear' => '2012',
                'investigationAuthors' => 'Diego Arroyuelo, Senén González, Mauricio Marin, Mauricio Oyarzún, Torsten Suel',
                'investigationAbstract' => "Positional ranking functions, widely used in Web search engines, improve result quality by exploiting the positions of the query terms within documents. However, it is well known that positional indexes demand large amounts of extra space, typically about three times the space of a basic nonpositional index. Textual data, on the other hand, is needed to produce text snippets. In this paper, we study time-space trade-offs for search engines with positional ranking functions and text snippet generation. We consider both index-based and non-index based alternatives for positional data. We aim to answer the question of whether one should index positional data or not. We show that there is a wide range of practical time-space trade-offs. Moreover, we show that both position and textual data can be stored using about 71% of the space used by traditional positional indexes, with a minor increase in query time.",
                'page_id' => 39,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'High-performance priority queues for parallel crawlers',
                'investigationYear' => '2008',
                'investigationAuthors' => 'Mauricio Marin, Rodrigo Paredes, Carolina Bonacic',
                'investigationAbstract' => "Large scale data centers for crawlers are able to maintain a very large number of active http connections in order to download as fast as possible the usually huge number of web pages from given sections of the WWW. This generates a continuous stream of new URLs of documents to be downloaded and it is clear that the associated work-load can only be served efficiently with proper parallel computing techniques. The incoming new URLs have to be organized by a priority measure in order to download the most relevant documents first. Efficiently managing them along with other synchronization issues such as URLs downloaded by different processing nodes forming a cluster of computers are the matters of this paper. We propose efficient and scalable strategies which consider intra-node multi-core multi-threading on an inter-nodes distributed memory environment, including efficient use of secondary memory.",
                'page_id' => 39,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Event-driven hard-particle molecular dynamics using bulk-synchronous parallelism',
                'investigationYear' => '1997',
                'investigationAuthors' => 'Mauricio Marín',
                'investigationAbstract' => "We describe and analyse a new parallel algorithm for event-driven simulation of hard-particle systems that is based on the ideas of the bulk-synchronous parallel (BSP) model. This model provides a unifying approach for general purpose parallel computing which in addition to efficient computation ensures portability across different parallel architectures. The hard-particle system is divided into regions that are owned by a unique processor. ",
                'page_id' => 39,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Capacity planning for vertical search engines: An approach based on coloured petri nets',
                'investigationYear' => '2012',
                'investigationAuthors' => 'Veronica Gil-Costa, Jair Lobos, Alonso Inostrosa-Psijas, Mauricio Marin',
                'investigationAbstract' => "This paper proposes a Colored Petri Net model capturing the behaviour of vertical search engines. In such systems a query submitted by a user goes through different stages and can be handled by three different kinds of nodes. The proposed model has a modular design that enables accommodation of alternative/additional search engine components. A performance evaluation study is presented to illustrate the use of the model and it shows that the proposed model is suitable for rapid exploration of different scenarios and determination of feasible search engine configurations.",
                'page_id' => 39,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Capacity planning for vertical search engines: An approach based on coloured petri nets',
                'investigationYear' => '2012',
                'investigationAuthors' => 'Veronica Gil-Costa, Jair Lobos, Alonso Inostrosa-Psijas, Mauricio Marin',
                'investigationAbstract' => "This paper proposes a Colored Petri Net model capturing the behaviour of vertical search engines. In such systems a query submitted by a user goes through different stages and can be handled by three different kinds of nodes. The proposed model has a modular design that enables accommodation of alternative/additional search engine components. A performance evaluation study is presented to illustrate the use of the model and it shows that the proposed model is suitable for rapid exploration of different scenarios and determination of feasible search engine configurations.",
                'page_id' => 39,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'A search engine index for multimedia content',
                'investigationYear' => '2008',
                'investigationAuthors' => 'Mauricio Marin, Veronica Gil-Costa, Carolina Bonacic',
                'investigationAbstract' => "We present a distributed index data structure and algorithms devised to support parallel query processing of multimedia content in search engines. We present a comparative study with a number of data structures used as indexes for metric space databases. Our optimization criteria are based on requirements for high-performance search engines. The main advantages of our proposal are efficient performance with respect to other approaches (sequentially and in parallel), suitable treatment of secondary memory, and support for OpenMP multithreading. We presents experiments for the asynchronous (MPI) and bulk-synchronous (BSP) message passing models of parallel computing showing that in both models our approach outperforms others consistently.",
                'page_id' => 39,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Distributed search based on self-indexed compressed text',
                'investigationYear' => '2012',
                'investigationAuthors' => 'Diego Arroyuelo, Veronica Gil-Costa, Senén González, Mauricio Marin, Mauricio Oyarzún',
                'investigationAbstract' => "Query response times within a fraction of a second in Web search engines are feasible due to the use of indexing and caching techniques, which are devised for large text collections partitioned and replicated into a set of distributed-memory processors. This paper proposes an alternative query processing method for this setting, which is based on a combination of self-indexed compressed text and posting lists caching. We show that a text self-index (i.e., an index that compresses the text and is able to extract arbitrary parts of it) can be competitive with an inverted index if we consider the whole query process, which includes index decompression, ranking and snippet extraction time. The advantage is that within the space of the compressed document collection, one can carry out the posting lists generation, document ranking and snippet extraction. ",
                'page_id' => 39,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Time Warp on BSP computers',
                'investigationYear' => '1998',
                'investigationAuthors' => 'Mauricio Marín',
                'investigationAbstract' => " ",
                'page_id' => 39,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Distributing a metric-space search index onto processors',
                'investigationYear' => '2010',
                'investigationAuthors' => 'Mauricio Marin, Flavio Ferrarotti, Veronica Gil-Costa',
                'investigationAbstract' => "This paper studies the problem of distributing a metric-space search index based on compact clustering onto a set of distributed memory processors. The aim is enabling efficient similarity search in large-scale Web search engines. The index data structure is composed of a set of clusters enclosing the database objects and we propose distribution methods based on two different solution approaches. The first one makes use of specific knowledge about the work-load generated by user queries. Here the challenge is how to represent and use such a knowledge into a method capable of producing a cluster distribution leading to high performance. The second one follows a novel direction by completely disregarding user behavior to look instead at the relationships among the index clusters themselves to decide their placement onto processors.",
                'page_id' => 39,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'Searching and updating metric space databases using the parallel EGNAT',
                'investigationYear' => '2007',
                'investigationAuthors' => 'Mauricio Marin, Roberto Uribe, Ricardo Barrientos',
                'investigationAbstract' => "The Evolutionary Geometric Near-neighbor Access Tree (EGNAT) is a recently proposed data structure that is suitable for indexing large collections of complex objects. It allows searching for similar objects represented in metric spaces. The sequential EGNAT has been shown to achieve good performance in high-dimensional metric spaces with properties (not found in others of the same kind) of allowing update operations and efficient use of secondary memory. Thus, for example, it is suitable for indexing large multimedia databases. However, comparing two objects during a search can be a very expensive operation in terms of running time.",
                'page_id' => 39,
            ]
        );
        DB::table('investigations')->insert(
            [
                'investigationName' => 'An index data structure for searching in metric space databases',
                'investigationYear' => '2006',
                'investigationAuthors' => 'Roberto Uribe, Gonzalo Navarro, Ricardo J Barrientos, Mauricio Marín',
                'investigationAbstract' => "This paper presents the Evolutionary Geometric Near-neighbor Access Tree (EGNAT) which is a new data structure devised for searching in metric space databases. The EGNAT is fully dynamic, i.e., it allows combinations of insert and delete operations, and has been optimized for secondary memory. Empirical results on different databases show that this tree achieves good performance for high-dimensional metric spaces. We also show that this data structure allows efficient parallelization on distributed memory parallel architectures. All this indicates that the EGNAT is suitable for conducting similarity searches on very large metric space databases.",
                'page_id' => 39,
            ]
        );
    }
}
