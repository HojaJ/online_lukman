@extends('layouts.guest')
@section('content')
<div class="page-content page-content--overflow-no page-content--overlap">
    <div class="wrapper">
        <div class="layout">
            <div class="layout__left">
                <div class="left-content">
                    <div class="header-breadcrumbs-group">
                        <div class="breadcrumbs"></div>
                    </div>
                    <h1 class="page-header page-header--name"> Search </h1>
                    <p class="page-header-description">Search for all diseases and symptoms in the Disease and Symptoms
                        section.</p>


                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for symptoms"
                           title="Search">

                    <ul id="myUL">
                        <li><a class="animated-hover" href="en\bol'-v-molochnoy-zheleze"> Breast
                                pain </a></li>
                        <li><a class="animated-hover" href="en\bol'-v-sheye"> Backache</a></li>
                        <li><a class="animated-hover" href="en\chernyĭ-stul"> Black chair</a></li>
                        <li><a class="animated-hover" href="en\krov'-na-tualetnoĭ-bumage"> Blood on
                                toilet paper</a></li>
                        <li><a class="animated-hover" href="en\krovotochivost'-desen"> Bleeding
                                gums </a></li>
                        <li><a class="animated-hover" href="en\krov'-v-moche"> Blood in urine</a></li>
                        <li><a class="animated-hover" href="en\krov-v-stule"> Blood in the stool </a>
                        </li>
                        <li><a class="animated-hover" href="en\khrupkost'-nogtey"> Brittle nails </a>
                        </li>
                        <li><a class="animated-hover" href="en/nepriyatnyy-zapakh-izo-rta"> Bad
                                breath </a></li>
                        <li><a class="animated-hover" href="en\ukhudsheniye-zreniya"> Blurred
                                vision</a></li>
                        <li><a class="animated-hover" href="en\bol'-v-grudnoy-kletke"> Chest pain </a>
                        </li>
                        <li><a class="animated-hover" href="en\kashel"> Cough </a></li>
                        <li><a class="animated-hover" href="en\mutnaya-mocha"> Cloudy urine </a></li>
                        <li><a class="animated-hover" href="en\oznob"> Chills </a></li>
                        <li><a class="animated-hover" href="en\treshchiny-na-kozhe"> Cracks in the
                                skin </a></li>
                        <li><a class="animated-hover" href="en\zapor"> Constipation</a></li>
                        <li><a class="animated-hover" href="en\izmeneniya-kozhi"> Changes in the
                                appearance of the skin</a></li>
                        <li><a class="animated-hover" href="en\dvoyeniye-v-glazakh"> Double vision</a>
                        </li>
                        <li><a class="animated-hover" href="en\diareya"> Diarrhea </a></li>
                        <li><a class="animated-hover" href="en\golovokruzheniye"> Dizziness </a></li>
                        <li><a class="animated-hover" href="en\obescvechenniy-stul"> Discolored
                                stools</a></li>
                        <li><a class="animated-hover" href="en\odyshka"> Dyspnea </a></li>
                        <li><a class="animated-hover" href="en\opushcheniye-veka"> Descent of the
                                century </a></li>
                        <li><a class="animated-hover" href="en\povrezhdeniya-slizistoy-obolochki-rta">
                                Damage to the oral mucosa </a></li>
                        <li><a class="animated-hover" href="en\snizhennoye-polovoye-vlecheniye">
                                Decreased sex drive </a></li>
                        <li><a class="animated-hover" href="en\sukhoĭ-kashel'"> Dry cough </a></li>
                        <li><a class="animated-hover" href="en\temnaya-mocha"> Dark urine</a></li>
                        <li><a class="animated-hover" href="en\umen'sheniye-myshechnoĭ-massy"> Decrease
                                in muscle mass</a></li>
                        <li><a class="animated-hover" href="en\vlazhniy-kashel"> Discharge from the
                                eyes </a></li>
                        <li><a class="animated-hover" href="en\vydeleniya-iz-ukha"> Discharge from the
                                ear </a></li>
                        <li><a class="animated-hover" href="en\vydeleniya-krovi-iz-vlagalishcha">
                                Discharge of blood from the vagina </a></li>
                        <li><a class="animated-hover" href="en\zatrudnennoye-glotaniye"> Difficulty
                                swallowing</a></li>
                        <li><a class="animated-hover" href="en\bol'-v-spine"> Earache</a></li>
                        <li><a class="animated-hover" href="en\glaznaya-bol'"> Eye pain </a></li>
                        <li><a class="animated-hover" href="en\otek"> Edema</a></li>
                        <li><a class="animated-hover" href="en\rasshireniye-ven-nizhnikh-konechnostey">
                                Expansion of the veins of the lower extremities</a></li>
                        <li><a class="animated-hover" href="en\chuvstvo-prilivov"> Feeling hot
                                flashes</a></li>
                        <li><a class="animated-hover" href="en\chuvstvo-serdtsebiyeniya"> Feeling of
                                heartbeat</a></li>
                        <li><a class="animated-hover" href="en\chuvstvo-zhara"> Feeling hot</a></li>
                        <li><a class="animated-hover" href="en\kom-v-gorle"> Feeling of a lump in the
                                throat </a></li>
                        <li><a class="animated-hover" href="en\obmorochnoye-sostoyaniye"> Fainting </a>
                        </li>
                        <li><a class="animated-hover" href="en\gallyutsinatsii"> Hallucinations </a>
                        </li>
                        <li><a class="animated-hover" href="en\golovnaya-bol'"> Headache </a></li>
                        <li><a class="animated-hover" href="en\izzhoga"> Heartburn</a></li>
                        <li><a class="animated-hover" href="en\narusheniya-slukha"> Hearing
                                impairment </a></li>
                        <li><a class="animated-hover" href="en\okhriplost'"> Hoarseness </a></li>
                        <li><a class="animated-hover" href="en\vipadenie-volos"> Hair loss</a></li>
                        <li><a class="animated-hover" href="en\kozhniy-zud"> Itchy skin</a></li>
                        <li><a class="animated-hover" href="en\povysheniye-arterial'nogo-davleniya">
                                Increased blood pressure</a></li>
                        <li><a class="animated-hover" href="en\povyshennaya-zhazhda"> Increased
                                thirst</a></li>
                        <li><a class="animated-hover" href="en\zud-v-glazah"> Itchy eyes</a></li>
                        <li><a class="animated-hover" href="en\skovannost'-sustavov"> Joint
                                stiffness</a></li>
                        <li><a class="animated-hover" href="en\zheltushnoye-okrashivaniye-kozhi">
                                Jaundiced skin color</a></li>
                        <li><a class="animated-hover" href="en\ponizheniye-arterial'nogo-davleniya">
                                Lowering blood pressure </a></li>
                        <li><a class="animated-hover" href="en\poterya-obonyaniya"> Loss of smell</a>
                        </li>
                        <li><a class="animated-hover" href="en\myshechnaya-bol'"> Muscle pain</a></li>
                        <li><a class="animated-hover" href="en\perepady-nastroyeniya"> Mood swings</a>
                        </li>
                        <li><a class="animated-hover" href="en\sliz'-v-stule"> Mucus in stool</a></li>
                        <li><a class="animated-hover" href="en\sudorogi-myshts"> Muscle cramps</a></li>
                        <li><a class="animated-hover" href="en\ukhudsheniye-pamyati"> Memory
                                impairment</a></li>
                        <li><a class="animated-hover" href="en\vydeleniya-iz-glaz"> Moist cough</a>
                        </li>
                        <li><a class="animated-hover" href="en\onemeniye-litsa"> Numbness of the
                                face</a></li>
                        <li><a class="animated-hover" href="en\onemeniye-nizhnikh-konechnosteĭ">
                                Numbness of the lower extremities</a></li>
                        <li><a class="animated-hover" href="n\onemeniye-verkhnikh-konechnosteĭ">
                                Numbness of the upper limbs</a></li>
                        <li><a class="animated-hover" href="en\toshnota"> Nausea</a></li>
                        <li><a class="animated-hover" href="en\shum-v-ushakh"> Noise in ears</a></li>
                        <li><a class="animated-hover" href="en\blednost'-kozhi"> Pallor of the skin</a>
                        </li>
                        <li><a class="animated-hover" href="en\bol'-v-nizhnikh-konechnostyakh"> Pain in
                                the lower extremities</a></li>
                        <li><a class="animated-hover" href="en\bol'-v-promezhnosti"> Pain in the
                                neck</a></li>
                        <li><a class="animated-hover" href="en\bol'-v-nizhnikh-konechnostyakh"> Pain in
                                the perineum</a></li>
                        <li><a class="animated-hover" href="en\bol'-v-ukhe"> Pain in the upper
                                limbs</a></li>
                        <li><a class="animated-hover" href="en\bol'-v-verkhnikh-konechnostyakh"> Pain
                                behind the ear</a></li>
                        <li><a class="animated-hover" href="en\gnoy-v-stule"> Pus in the stool </a>
                        </li>
                        <li><a class="animated-hover" href="en\pokrasneniye-glaz"> Redness of the
                                eyes</a></li>
                        <li><a class="animated-hover" href="en\bol'-v-gorle"> Sore throat</a></li>
                        <li><a class="animated-hover" href="en\mokrota-s-krov'yu"> Sputum with
                                blood</a></li>
                        <li><a class="animated-hover" href="en\nabukhaniye-ven-na-sheye"> Swollen veins
                                in the neck</a></li>
                        <li><a class="animated-hover"
                               href="en\oshchushcheniye-inorodnogo-tela-ili-peska-v-glazakh"> Sensation
                                of a foreign body or sand in the eyes</a></li>
                        <li><a class="animated-hover" href="en\oteki-na-litse"> Swelling on the
                                face</a></li>
                        <li><a class="animated-hover" href="en\oteki-na-nizhnikh-konechnostyakh">
                                Swelling in the lower extremities</a></li>
                        <li><a class="animated-hover" href="en\oteki-na-verkhnikh-konechnostyakh">
                                Swelling in the upper limbs</a></li>
                        <li><a class="animated-hover" href="en\potlivost'"> Sweating</a></li>
                        <li><a class="animated-hover" href="en\rastyazhki-na-kozhe"> Stretch marks on
                                the skin</a></li>
                        <li><a class="animated-hover" href="en\strelyayushchaya-bol'-v-ukhe"> Shooting
                                ear pain</a></li>
                        <li><a class="animated-hover" href="en\yazvy-na-kozhe"> Skin ulcers</a></li>
                        <li><a class="animated-hover" href="en\sklonnost'-k-obrazovaniyu-sinyakov"> The
                                tendency to form "bruises"</a></li>
                        <li><a class="animated-hover" href="en\tremor"> Tremor</a></li>
                        <li><a class="animated-hover" href="en\zubnaya-bol'"> Toothache</a></li>
                        <li><a class="animated-hover" href="en\nederzhaniye-mochi"> Urinary
                                incontinence </a></li>
                        <li><a class="animated-hover" href="en\rvota"> Vomit</a></li>
                        <li><a class="animated-hover" href="en\sosudistyye-setki-na-nogakh"> Vascular
                                mesh on the legs</a></li>
                        <li><a class="animated-hover" href="en\vydeleniya-iz-vlagalishcha"> Vaginal
                                discharge</a></li>
                        <li><a class="animated-hover" href="en\slabaya-struya-mochi"> Weak urine
                                stream</a></li>
                        <li><a class="animated-hover" href="en\slabost',-bystraya utomlyayemost'">
                                Weakness, fatigue</a></li>
                        <li><a class="animated-hover" href="en\slabost'-myshts-litsa"> Weakness of
                                facial muscles</a></li>
                        <li><a class="animated-hover" href="en\snizheniye-massy-tela"> Weight loss</a>
                        </li>
                        <li><a class="animated-hover" href="en\uvelicheniye-massy-tela"> Weight
                                gain</a></li>


                    </ul>

                </div>
                <ul class="no-cols-list symptoms-list">
                    <div class="search search--symptoms">

                    </div>
            </div>
            <div class="layout__right">
                <div class="home box">


                    <div class="box-content">
                        <input type="text" id="myIn" onkeyup="myFun()" placeholder="Search for the disease"
                               title="Search">

                        <ul id="myU">
                            <li>
                                <a class="animated-hover" href="enb/chrezmernaya-rvota-beremennykh">Excessive
                                    vomiting during pregnancy</a>
                            </li>
                            <li><a class="animated-hover" href="enb/ektopicheskaya-beremennost'">Ectopic
                                    pregnancy</a></li>
                            <li><a class="animated-hover"
                                   href="enb/istmiko-tservikalnaya-nedostatochnost">Isthmic-cervical
                                    insufficiency</a></li>
                            <li><a class="animated-hover" href="enb/kholestaz-beremennykh">Cholestasis
                                    of pregnancy</a></li>
                            <li><a class="animated-hover"
                                   href="enb/khorioamnionit">Chorioamnionitis</a></li>
                            <li><a class="animated-hover" href="enb/lozhnyye-skhvatki">False
                                    contractions</a></li>
                            <li><a class="animated-hover" href="enb/melazma-beremennykh">Melasma of
                                    pregnancy</a></li>
                            <li><a class="animated-hover" href="enb/papulezniy-dermatit-beremennykh">Papular
                                    dermatitis of pregnancy</a></li>
                            <li><a class="animated-hover" href="enb/pemfigoid-beremennykh">Pemphigoid
                                    pregnant</a></li>
                            <li><a class="animated-hover" href="enb/predlezhaniye-platsenty">Placenta
                                    previa</a></li>
                            <li><a class="animated-hover"
                                   href="enb/prezhdevremennaya-otsloyka-platsenty">Premature placental
                                    abruption</a></li>
                            <li><a class="animated-hover" href="enb/rvota-beremennykh">Vomiting
                                    pregnant</a></li>
                            <li><a class="animated-hover" href="enb/simfizit-beremennykh">Symphysitis
                                    of pregnant women</a></li>
                            <li><a class="animated-hover"
                                   href="enb/ugrozhayushchiye-prezhdevremennyye-rody">Threatened
                                    preterm birth</a></li>
                            <li><a class="animated-hover" href="enb/vozmozhnaya-beremennost'">Possible
                                    pregnancy</a></li>
                            <li><a class="animated-hover" href="enb/zudyashchiy-follikulit">Itchy
                                    folliculitis in pregnancy</a></li>
                            <li><a class="animated-hover" href="end/allergicheskij-rinit">Allergic
                                    rhinitis</a></li>
                            <li><a class="animated-hover" href="end/bronhialnaya-astma">Bronchial
                                    asthma</a></li>
                            <li><a class="animated-hover"
                                   href="end/hronicheskaya-obstruktivnaya-bolezn-legkih">Chronic
                                    obstructive pulmonary disease</a></li>
                            <li><a class="animated-hover" href="end/hronicheskij-bronhit">Chronical
                                    bronchitis</a></li>
                            <li><a class="animated-hover"
                                   href="end/novoobrazovanie-nizhnih-dyhatelnyh-putei">Neoplasm of the
                                    lower respiratory tract</a></li>
                            <li><a class="animated-hover" href="end/ostrye-respiratornye-zabolevaniya">Acute
                                    respiratory diseases</a></li>
                            <li><a class="animated-hover" href="end/ostryj-bronhit">Acute
                                    bronchitis</a></li>
                            <li><a class="animated-hover" href="end/pnevmoniya">Pneumonia</a></li>
                            <li><a class="animated-hover" href="end/tuberkulez">Tuberculosis</a></li>
                            <li><a class="animated-hover" href="ene/autoimmunnyi-tireoidit">Autoimmune
                                    thyroiditis</a></li>
                            <li><a class="animated-hover" href="ene/diffuznyi-toksicheskii-zob">Diffuse
                                    toxic goiter</a></li>
                            <li><a class="animated-hover"
                                   href="ene/giperkorticizm">Hypercortisolism</a></li>
                            <li><a class="animated-hover" href="ene/giperparatireoz">Hyperparathyroidism</a>
                            </li>
                            <li><a class="animated-hover" href="ene/gipertireoz">Hyperthyroidism</a>
                            </li>
                            <li><a class="animated-hover" href="ene/gipokorticizm">Hypocorticism</a>
                            </li>
                            <li><a class="animated-hover"
                                   href="ene/gipoparatireoz">Hypoparathyroidism</a></li>
                            <li><a class="animated-hover" href="ene/gipotireoz">Hypothyroidism</a></li>
                            <li><a class="animated-hover" href="eng/allergicheskiy-konyunktivit">Allergic
                                    conjunctivitis</a></li>
                            <li><a class="animated-hover" href="eng/gipermetropiya">Hypermetropia</a>
                            </li>
                            <li><a class="animated-hover" href="eng/infekcionnyj-konyunktivit">Infectious
                                    conjunctivitis</a></li>
                            <li><a class="animated-hover" href="eng/inorodnoe-telo-glaza">Foreign body
                                    of the eye</a></li>
                            <li><a class="animated-hover" href="eng/katarkta">Cataract</a></li>
                            <li><a class="animated-hover" href="eng/keratit">Keratitis</a></li>
                            <li><a class="animated-hover" href="eng/miopiya">Myopia</a></li>
                            <li><a class="animated-hover" href="eng/presbiopiya">Presbyopia</a></li>
                            <li><a class="animated-hover" href="eni/coronavirus-infection">Coronavirus
                                    infection(COVID-19)</a></li>
                            <li><a class="animated-hover" href="eni/difteriya">Diphtheria</a></li>
                            <li><a class="animated-hover" href="eni/gripp">Flu</a></li>
                            <li><a class="animated-hover" href="eni/kishechnaya-infektsiya">Intestinal
                                    infection</a></li>
                            <li><a class="animated-hover" href="eni/kor">Measles</a></li>
                            <li><a class="animated-hover" href="eni/krasnuha">Rubella</a></li>
                            <li><a class="animated-hover" href="eni/meningit">Meningitis</a></li>
                            <li><a class="animated-hover" href="eni/opoyasyvayushchij-gerpes">Herpes
                                    zoster</a></li>
                            <li><a class="animated-hover" href="eni/skarlatina">Scarlet fever</a></li>
                            <li><a class="animated-hover" href="eni/vetryanaya-ospa">Chickenpox</a>
                            </li>
                            <li><a class="animated-hover"
                                   href="enkosti/mialgiya-posle-fizicheskikh-nagruzok">Myalgia after
                                    exercise</a></li>
                            <li><a class="animated-hover" href="enkosti/osteoartroz">Osteoarthritis</a>
                            </li>
                            <li><a class="animated-hover" href="enkosti/osteoporoz">Osteoporosis</a>
                            </li>
                            <li><a class="animated-hover" href="enkosti/podagra">Gout</a></li>
                            <li><a class="animated-hover" href="enkosti/revmatoidnyj-artrit">Rheumatoid
                                    arthritis</a></li>
                            <li><a class="animated-hover" href="enkosti/sistemnaya-krasnaya-volchanka">Systemic
                                    lupus erythematosus</a></li>
                            <li><a class="animated-hover" href="enkozha/kontaktniy-dermatit">Contact
                                    dermatitis</a></li>
                            <li><a class="animated-hover" href="enkozha/piodermiya">Pyoderma</a></li>
                            <li><a class="animated-hover" href="enkozha/psoriaz">Psoriasis</a></li>
                            <li><a class="animated-hover" href="enkozha/seboreyniy-dermatit">Seborrheic
                                    dermatitis</a></li>
                            <li><a class="animated-hover" href="enmo/giperaktivnyy-mochevoy-puzyr">Overactive
                                    bladder</a></li>
                            <li><a class="animated-hover" href="enmo/glomerulonefrit">Glomerulonephritis</a>
                            </li>
                            <li><a class="animated-hover" href="enmo/khronicheskaya-bolezn'-pochek">Chronic
                                    kidney disease</a></li>
                            <li><a class="animated-hover" href="enmo/luchevoy-tsistit">Radiation
                                    cystitis</a></li>
                            <li><a class="animated-hover"
                                   href="enmo/novoobrazovaniye-mochevogo-puzyrya">Bladder neoplasm</a>
                            </li>
                            <li><a class="animated-hover" href="enmo/novoobrazovaniye-pochki">Kidney
                                    neoplasm</a></li>
                            <li><a class="animated-hover"
                                   href="enmo/ostraya-pochechnaya-nedostatochnost">Acute renal
                                    failure</a></li>
                            <li><a class="animated-hover" href="enmo/pielonefrit">Pyelonephritis</a>
                            </li>
                            <li><a class="animated-hover" href="enmo/pochechnaya-kolika"> Renal
                                    colic</a></li>
                            <li><a class="animated-hover" href="enmo/tsistit">Cystitis</a></li>
                            <li><a class="animated-hover" href="enmu/balanit">Balanitis</a></li>
                            <li><a class="animated-hover" href="enmu/balanopostit">Balanoposthitis</a>
                            </li>
                            <li><a class="animated-hover" href="enmu/bolezn-Peironi">Peyronie's
                                    disease</a></li>
                            <li><a class="animated-hover" href="enmu/epididimit">Epididymitis</a></li>
                            <li><a class="animated-hover" href="enmu/erektilnaya-disfunktsiya">Erectile
                                    dysfunction</a></li>
                            <li><a class="animated-hover" href="enmu/fimoz">Phimosis</a></li>
                            <li><a class="animated-hover" href="enmu/gidrocele">Hydrocele</a></li>
                            <li><a class="animated-hover" href="enmu/gipogonadizm">Hypogonadism</a>
                            </li>
                            <li><a class="animated-hover"
                                   href="enmu/korotkaya-uzdechka-polovogo-chlena">Short frenulum of the
                                    penis</a></li>
                            <li><a class="animated-hover"
                                   href="enmu/novoobrazovanie-predstatelnoj-zhelezy">Neoplasm of the
                                    prostate</a></li>
                            <li><a class="animated-hover" href="enmu/novoobrazovaniye-yaichek">Testicular
                                    neoplasm</a></li>
                            <li><a class="animated-hover" href="enmu/orkhit">Orchitis</a></li>
                            <li><a class="animated-hover" href="enmu/parafimoz">Paraphimosis</a></li>
                            <li><a class="animated-hover" href="enmu/perekrut">Testicular torsion</a>
                            </li>
                            <li><a class="animated-hover" href="enmu/perelom-polovogo-chlena">Penile
                                    fracture</a></li>
                            <li><a class="animated-hover" href="enmu/priapizm">Priapism</a></li>
                            <li><a class="animated-hover" href="enmu/prostatit">Prostatitis</a></li>
                            <li><a class="animated-hover" href="enmu/spermatotsele">Spermatocele</a>
                            </li>
                            <li><a class="animated-hover" href="enmu/striktura-uretry">Urethral
                                    stricture</a></li>
                            <li><a class="animated-hover" href="enmu/uretrit">Urethritis</a></li>
                            <li><a class="animated-hover" href="enmu/ushib-moshonki">Scrotal
                                    contusion</a></li>
                            <li><a class="animated-hover" href="enmu/ushib-polovogo-chlena">Penile
                                    contusion</a></li>
                            <li><a class="animated-hover" href="enmu/ushib-v-oblasti-promezhnosti">Contusion
                                    in the perineum</a></li>
                            <li><a class="animated-hover" href="enmu/varikocele">Varicocele</a></li>
                            <li><a class="animated-hover" href="enn/bolezn-alcgejmera">Alzheimer's
                                    disease</a></li>
                            <li><a class="animated-hover" href="enn/golovnaya-bol-napryazheniya">Tension
                                    headache</a></li>
                            <li><a class="animated-hover" href="enn/klasternaya-golovnaya-bol">Cluster
                                    headache</a></li>
                            <li><a class="animated-hover" href="enn/migren">Migraine</a></li>
                            <li><a class="animated-hover" href="enn/parkinsonizm">Parkinsonism</a></li>
                            <li><a class="animated-hover" href="enn/pokhmelnyi-sindrom">Hangover
                                    syndrome</a></li>
                            <li><a class="animated-hover"
                                   href="enn/polinejropatii">Polyneuropathies</a></li>
                            <li><a class="animated-hover"
                                   href="enn/posttravmaticheskaya-golovnaya-bol">Post-traumatic
                                    headache</a></li>
                            <li><a class="animated-hover" href="enn/radikulopatii">Radiculopathy</a>
                            </li>
                            <li><a class="animated-hover" href="enn/rasseyannyj-skleroz">Multiple
                                    sclerosis</a></li>
                            <li><a class="animated-hover" href="enn/sindrom-khronicheskoĭ-ustalosti">Chronic
                                    fatigue syndrome</a></li>
                            <li><a class="animated-hover" href="enn/sindrom-otmeny-kofeina">Caffeine
                                    Withdrawal Syndrome</a></li>
                            <li><a class="animated-hover" href="enn/ukachivaniye">Motion sickness</a>
                            </li>
                            <li><a class="animated-hover"
                                   href="enpe/diskineziya-zhelchevyvodyashchikh-putei">Biliary
                                    dyskinesia</a></li>
                            <li><a class="animated-hover" href="enpe/gepatit">Hepatitis</a></li>
                            <li><a class="animated-hover" href="enpe/khronicheskiy-kholetsistit">Chronic
                                    cholecystitis</a></li>
                            <li><a class="animated-hover" href="enpe/ostryi-kholetsistit">Acute
                                    cholecystitis</a></li>
                            <li><a class="animated-hover"
                                   href="enpe/pervichnyj-skleroziruyushchij-holangit">Primary
                                    sclerosing cholangitis</a></li>
                            <li><a class="animated-hover" href="enpe/pervichnyy-biliarnyy-kholangit">Primary
                                    biliary cholangitis</a></li>
                            <li><a class="animated-hover" href="enpe/zhelchekamennaya-bolezn">Cholelithiasis</a>
                            </li>
                            <li><a class="animated-hover" href="enpi/appendicit">Appendicitis</a></li>
                            <li><a class="animated-hover" href="enpi/celiakiya">Celiac disease</a></li>
                            <li><a class="animated-hover" href="enpi/funkcionalnaya-dispepsiya">Functional
                                    dyspepsia</a></li>
                            <li><a class="animated-hover"
                                   href="enpi/gastroezofagealnaya-reflyuksnaya-bolezn">Gastroesophageal
                                    reflux disease</a></li>
                            <li><a class="animated-hover" href="enpi/gemorroj">Haemorrhoids</a></li>
                            <li><a class="animated-hover" href="enpi/hronicheskij-pankreatit">Chronic
                                    pancreatitis</a></li>
                            <li><a class="animated-hover" href="enpi/kishechnaya-neprohodimost">Intestinal
                                    obstruction</a></li>
                            <li><a class="animated-hover" href="enpi/laktaznaya-nedostatochnost">Lactase
                                    deficiency</a></li>
                            <li><a class="animated-hover" href="enpi/novoobrazovanie-tolstoj-kishki">Colon
                                    neoplasm</a></li>
                            <li><a class="animated-hover" href="enpi/ostryj-pankreatit">Acute
                                    pancreatitis</a></li>
                            <li><a class="animated-hover"
                                   href="enpi/sindrom-razdrazhennogo-kishechnika">Irritable bowel
                                    syndrome</a></li>
                            <li><a class="animated-hover"
                                   href="enpi/vospalitelnoye-zabolevaniye-kishechnika">Non-specific
                                    inflammatory bowel disease</a></li>
                            <li><a class="animated-hover"
                                   href="enpi/yazva-zheludka-ili-dvenadtsatiperstnoy-kishki">Stomach or
                                    duodenal ulcer</a></li>
                            <li><a class="animated-hover" href="enr/alveolit-lunki-zuba">Alveolitis of
                                    the tooth socket</a></li>
                            <li><a class="animated-hover" href="enr/flyuoroz">Fluorosis</a></li>
                            <li><a class="animated-hover" href="enr/gingivit">Gingivitis</a></li>
                            <li><a class="animated-hover" href="enr/kariyes">Caries</a></li>
                            <li><a class="animated-hover" href="enr/pul'pit">Pulpitis</a></li>
                            <li><a class="animated-hover" href="enr/stomatit">Stomatitis</a></li>
                            <li><a class="animated-hover" href="ens/anemiya">Anemia</a></li>
                            <li><a class="animated-hover" href="ens/arterialnaya-gipertenziya">Arterial
                                    hypertension</a></li>
                            <li><a class="animated-hover" href="ens/ishemicheskaya-bolezn-serdca">Cardiac
                                    ischemia</a></li>
                            <li><a class="animated-hover"
                                   href="ens/khronicheskaya-serdechnaya-nedostatochnost'">Chronic heart
                                    failure</a></li>
                            <li><a class="animated-hover" href="ens/miokardit">Myocarditis</a></li>
                            <li><a class="animated-hover" href="ens/narushenie-ritma-serdca">Violation
                                    of the rhythm of the heart</a></li>
                            <li><a class="animated-hover" href="ens/nejrocirkulyatornaya-distoniya">Neurocirculatory
                                    dystonia</a></li>
                            <li><a class="animated-hover"
                                   href="ens/obliteriruyushchie-zabolevaniya-perifericheskih-arterij">Peripheral
                                    artery obliterating diseases</a></li>
                            <li><a class="animated-hover"
                                   href="ens/ostraya-pochechnaya-nedostatochnost'-(povrezhdeniye)">Acute
                                    renal failure</a></li>
                            <li><a class="animated-hover"
                                   href="ens/ostroe-narushenie-mozgovogo-krovoobrashcheniya">Acute
                                    cerebrovascular accident</a></li>
                            <li><a class="animated-hover"
                                   href="ens/revmaticheskaya-lihoradka-s-porazheniem-serdca">Rheumatic
                                    fever with heart involvement</a></li>
                            <li><a class="animated-hover" href="ens/sindrom-rejno">Raynaud's
                                    syndrome</a></li>
                            <li><a class="animated-hover" href="ens/stenokardiya">Angina pectoris</a>
                            </li>
                            <li><a class="animated-hover" href="ens/tromboehmboliya-legochnoj-arterii">Pulmonary
                                    embolism</a></li>
                            <li><a class="animated-hover"
                                   href="ens/varikoznoye-rasshireniye-ven-nizhnikh-konechnostey">varicose
                                    veins of the lower extremities</a></li>
                            <li><a class="animated-hover" href="ent/perelom-bolshogo-paltsa-stopy">Big
                                    toe fracture</a></li>
                            <li><a class="animated-hover"
                                   href="ent/perelom-distalnykh-kontsov-luchevoy-i-loktevoy-kosti">Fracture
                                    of the distal ends of the radius and ulna</a></li>
                            <li><a class="animated-hover" href="ent/perelom-goleni">Shin fracture</a>
                            </li>
                            <li><a class="animated-hover" href="ent/perelom-lodyzhki">Ankle
                                    fracture</a></li>
                            <li><a class="animated-hover" href="ent/perelom-nadkolennika">Patella
                                    fracture</a></li>
                            <li><a class="animated-hover"
                                   href="ent/perelom-oblasti-plechevogo-sustava">Shoulder fracture</a>
                            </li>
                            <li><a class="animated-hover" href="ent/perelom-paltsa-stopy">Toe
                                    fracture</a></li>
                            <li><a class="animated-hover" href="ent/perelom-sheiki-bedra">Hip
                                    fracture</a></li>
                            <li><a class="animated-hover" href="ent/perelomy">Fractures</a></li>
                            <li><a class="animated-hover"
                                   href="ent/rastyazheniye-svyazok-bolshogo-paltsa">Big toe sprain</a>
                            </li>
                            <li><a class="animated-hover" href="ent/rastyazheniye-svyazok-kisti">Sprained
                                    hand ligaments</a></li>
                            <li><a class="animated-hover" href="ent/rastyazheniye-svyazok-kolena">Sprained
                                    knee ligaments</a></li>
                            <li><a class="animated-hover" href="ent/rastyazheniye-svyazok-lodyzhki">Sprained
                                    ankle ligaments</a></li>
                            <li><a class="animated-hover" href="ent/rastyazheniye-svyazok-loktya">Elbow
                                    sprain</a></li>
                            <li><a class="animated-hover"
                                   href="ent/rastyazheniye-svyazok-plechevogo-sustava">Sprains of the
                                    ligaments of the shoulder joint</a></li>
                            <li><a class="animated-hover" href="ent/rastyazheniye-svyazok-zapyastya">Sprained
                                    wrist ligaments</a></li>
                            <li><a class="animated-hover" href="ent/travmy-svyazok">Ligament
                                    injuries</a></li>
                            <li><a class="animated-hover" href="ent/ushib-kisti">Bruised hand</a></li>
                            <li><a class="animated-hover" href="ent/ushib-kolena">Bruised knee</a></li>
                            <li><a class="animated-hover" href="ent/ushib-lodyzhki">Ankle injury</a>
                            </li>
                            <li><a class="animated-hover" href="ent/ushib-loktya">Bruised elbow</a>
                            </li>
                            <li><a class="animated-hover" href="ent/ushib-myagkih-tkanei">Soft tissue
                                    contusion</a></li>
                            <li><a class="animated-hover" href="ent/ushib-paltsa-stopy">Bruised toe</a>
                            </li>
                            <li><a class="animated-hover" href="ent/ushib-plecha">Bruised shoulder</a>
                            </li>
                            <li><a class="animated-hover" href="ent/ushib-predplech'ya">Forearm
                                    contusion</a></li>
                            <li><a class="animated-hover" href="ent/ushib-stopy">Bruised foot</a></li>
                            <li><a class="animated-hover"
                                   href="ent/ushib-v-raĭone-tazobedrennogo-sustava">Contusion in the
                                    area of the hip joint</a></li>
                            <li><a class="animated-hover" href="ent/ushib-zapyastya">Bruised wrist</a>
                            </li>
                            <li><a class="animated-hover" href="enu/bolezn-menera">Meniere's
                                    disease</a></li>
                            <li><a class="animated-hover" href="enu/labirintit">Labyrinthitis</a></li>
                            <li><a class="animated-hover" href="enu/laringit">Laryngitis</a></li>
                            <li><a class="animated-hover" href="enu/mastoidit">Mastoiditis</a></li>
                            <li><a class="animated-hover" href="enu/naruzhnyj-otit">Otitis externa</a>
                            </li>
                            <li><a class="animated-hover" href="enu/otoskleroz">Otosclerosis</a></li>
                            <li><a class="animated-hover" href="enu/sernaya-probka">Sulfur plug</a>
                            </li>
                            <li><a class="animated-hover"
                                   href="enu/sindrom-obstruktivnogo-nochnogo-apnoeh">Obstructive sleep
                                    apnea syndrome</a></li>
                            <li><a class="animated-hover" href="enu/sinusit">Sinusitis</a></li>
                            <li><a class="animated-hover"
                                   href="enu/snizhenie-sluha-svyazannoe-s-vozdejstviem-shuma">Noise-related
                                    hearing loss</a></li>
                            <li><a class="animated-hover" href="enu/srednij-otit">Otitis media</a></li>
                            <li><a class="animated-hover" href="enu/tonzillit">Tonsillitis</a></li>
                            <li><a class="animated-hover" href="enu/vazomotornyj-rinit">Vasomotor
                                    rhinitis</a></li>
                            <li><a class="animated-hover" href="enz/algodismenoreya">Dysmenorrhea</a>
                            </li>
                            <li><a class="animated-hover" href="enz/cervicit">Cervicitis</a></li>
                            <li><a class="animated-hover" href="enz/endometrioz">Endometriosis</a></li>
                            <li><a class="animated-hover" href="enz/giperandrogeniya-u-zhenshchin">Hyperandrogenism
                                    in women</a></li>
                            <li><a class="animated-hover" href="enz/mastit">Mastitis</a></li>
                            <li><a class="animated-hover" href="enz/novoobrazovanie-molochnoj-zhelezy">Breast
                                    neoplasm</a></li>
                            <li><a class="animated-hover" href="enz/sindrom-polikistoznyh-yaichnikov">Polycystic
                                    ovary syndrome</a></li>
                            <li><a class="animated-hover" href="enz/vaginit">Vaginitis</a></li>
                            <li><a class="animated-hover"
                                   href="enz/vospalitelnye-zabolevaniya-organov-malogo-taza">Pelvic
                                    inflammatory disease</a></li>
                        </ul>

                    </div>
                    <ul class="no-cols-list symptoms-list">
                        <div class="search search--symptoms">


                            </li>
                    </ul>
                    </li> </ul> </div>
                <div class="box-bg"></div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection