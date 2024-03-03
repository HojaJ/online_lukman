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
                        <h1 class="page-header page-header--name"> Gözleg </h1>
                        <p class="page-header-description">Kesel we Alamat böleklerindäki ähli keseller we alamarlaryň
                            gözlegi.</p>

                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Alamaty gözlediň"
                               title="Type in a name">

                        <ul id="myUL">

                            <li><a class="animated-hover" href="p\povrezhdeniya-slizistoy-obolochki-rta">
                                    Agzyň nemli bardasyna zeper ýetmegi</a></li>
                            <li><a class="animated-hover" href="s\sosudistyye-setki-na-nogakh"> Aýaklarda
                                    damar torlary</a></li>
                            <li><a class="animated-hover" href="n\nepriyatnyy-zapakh-izo-rta"> Agyz
                                    yslanmagy </a></li>
                            <li><a class="animated-hover" href="b\bol'-v-gorle"> Bokurdak agyry</a></li>
                            <li><a class="animated-hover" href="o\oteki-na-nizhnikh-konechnostyakh">
                                    Bedeniň aşaky böleginde çiş döremegi</a></li>
                            <li><a class="animated-hover" href="b\bol'-v-sheye"> Boýnuňdaky agyry</a></li>
                            <li><a class="animated-hover" href="g\golovokruzheniye"> Baş aýlanmagy </a>
                            </li>
                            <li><a class="animated-hover" href="k\kom-v-gorle"> Bokurdakda bir bölejigi
                                    duýmak</a></li>
                            <li><a class="animated-hover" href="m\mutnaya-mocha"> Bylanjak peşew </a></li>
                            <li><a class="animated-hover" href="n\nabukhaniye-ven-na-sheye"> Boýnundaky
                                    damarlar çişýär </a></li>
                            <li><a class="animated-hover" href="b\bol'-v-nizhnikh-konechnostyakh">Bedeniň
                                    aşaky böleklerde agyry</a></li>
                            <li><a class="animated-hover" href="o\onemeniye-nizhnikh-konechnosteĭ">Bedeniň
                                    aşaky bölekleriň çişmegi </a></li>
                            <li><a class="animated-hover" href="r/rasshireniye-ven-nizhnikh-konechnostey">
                                    Bedeniň aşaky damarlaryň giňelmegi </a></li>
                            <li><a class="animated-hover" href="s\skovannost'-sustavov"> Bogunlaryň
                                    peselmegi </a></li>
                            <li><a class="animated-hover" href="v\vlazhniy-kashel"> Çygly üsgülewük </a>
                            </li>
                            <li><a class="animated-hover" href="b\blednost'-kozhi"> Deriniň reňkiniň
                                    üýtgemegi</a></li>
                            <li><a class="animated-hover" href="b\bol'-v-grudnoy-kletke"> Döş agyry</a>
                            </li>
                            <li><a class="animated-hover" href="i\izmeneniya-kozhi"> Deriniň daşky
                                    görnüşiniň üýtgemegi </a></li>
                            <li><a class="animated-hover" href="zh\zheltushnoye-okrashivaniye-kozhi">Deriniň
                                    saralmagy</a></li>
                            <li><a class="animated-hover" href="k\kozhniy-zud"> Deriniň gyjyndyrylmagy</a>
                            </li>
                            <li><a class="animated-hover" href="k\krovotochivost'-desen"> Diş etiniň
                                    ganamagy </a></li>
                            <li><a class="animated-hover" href="o\odyshka"> Dem gysmasy</a></li>
                            <li><a class="animated-hover" href="kh\khrupkost'-nogtey"> Dyrnakda
                                    gowşaklyk</a></li>
                            <li><a class="animated-hover" href="p\potlivost'"> Derlemek</a></li>
                            <li><a class="animated-hover" href="r\rastyazhki-na-kozhe"> Deride uzaldylan
                                    yzlar</a></li>
                            <li><a class="animated-hover" href="s\treshchiny-na-kozhe"> Deri jaýryklary</a>
                            </li>
                            <li><a class="animated-hover" href="ya\yazvy-na-kozhe"> Deriniň ýaralary</a>
                            </li>
                            <li><a class="animated-hover" href="z\zubnaya-bol'"> Diş agyry</a></li>
                            <li><a class="animated-hover" href="n\narusheniya-slukha"> Eşidişiň
                                    bozulmagy</a></li>
                            <li><a class="animated-hover" href="b\bol'-v-ukhe"> Gulak agyry</a></li>
                            <li><a class="animated-hover" href="b\bol'-za-ukhom"> Gulagyň daşynda agyry</a>
                            </li>
                            <li><a class="animated-hover" href="ch\chernyĭ-stul'"> Gara täret</a></li>
                            <li><a class="animated-hover" href="ch\chuvstvo-prilivov"> Gyzgyn şöhle
                                    duýmak</a></li>
                            <li><a class="animated-hover" href="g\gallyutsinatsii"> Galýusinasiýa </a></li>
                            <li><a class="animated-hover" href="g\glaznaya-bol'"> Göz agyry</a></li>
                            <li><a class="animated-hover" href="m\mokrota-s-krov'yu"> Ganly gakylyk</a>
                            </li>
                            <li><a class="animated-hover" href="p\pokrasneniye-glaz"> Gözleriň
                                    gyzarmagy</a></li>
                            <li><a class="animated-hover" href="p\ponizheniye-arterial'nogo-davleniya"> Gan
                                    basyşyny peseltmek</a></li>
                            <li><a class="animated-hover" href="p\povysheniye-arterial'nogo-davleniya"> Gan
                                    basyşynyň ýokarlanmagy</a></li>
                            <li><a class="animated-hover" href="r\rvota"> Gusmak</a></li>
                            <li><a class="animated-hover" href="s\sklonnost'-k-obrazovaniyu-sinyakov">
                                    Gögermek</a></li>
                            <li><a class="animated-hover" href="u\ukhudsheniye-zreniya"> Görüşiň
                                    ýitmegi </a></li>
                            <li><a class="animated-hover" href="s\slabaya-struya-mochi"> Gowşak peşew
                                    akymy</a></li>
                            <li><a class="animated-hover" href="s\slabost',-bystraya utomlyayemost'">
                                    Gowşaklyk, ýadawlyk</a></li>
                            <li><a class="animated-hover" href="s\strelyayushchaya-bol'-v-ukhe"> Gulakda
                                    atyş agyrysy </a></li>
                            <li><a class="animated-hover" href="s\sukhoĭ-kashel'"> Gury üsgülewük </a></li>
                            <li><a class="animated-hover" href="sh\shum-v-ushakh"> Gulaklarda ses</a></li>
                            <li><a class="animated-hover" href="s\temnaya-mocha"> Gara peşew </a></li>
                            <li><a class="animated-hover" href="d\dvoyeniye-v-glazakh"> Goşa görmek</a>
                            </li>
                            <li><a class="animated-hover" href="v\vydeleniya-iz-ukha"> Gulak akma</a></li>
                            <li><a class="animated-hover" href="v\vydeleniya-iz-glaz"> Göz akma </a></li>
                            <li><a class="animated-hover" href="o\opushcheniye-veka"> Göz gabygyň aşak
                                    sallanmagy</a></li>
                            <li><a class="animated-hover" href="z\zud-v-glazah"> Gözleriň
                                    gyjyndyrylmagy</a></li>
                            <li><a class="animated-hover" href="k\krov'-na-tualetnoĭ-bumage"> Hajathana
                                    kagyzynda gan </a></li>
                            <li><a class="animated-hover" href="o\obmorochnoye-sostoyaniye"> Huşsuzlyk</a>
                            </li>
                            <li><a class="animated-hover" href="s\snizheniye-massy-tela"> Horlanmak</a>
                            </li>
                            <li><a class="animated-hover" href="d\diareya"> Içgeçme</a></li>
                            <li><a class="animated-hover" href="z\zapor"> Iç gatamagy</a></li>
                            <li><a class="animated-hover" href="s\snizhennoye-polovoye-vlecheniye"> Jynsy
                                    gatnaşyklaryň azalmagy</a></li>
                            <li><a class="animated-hover" href="g\golovnaya-bol'"> Kellagyry</a></li>
                            <li><a class="animated-hover"
                                   href="../symptoms/o\oshchushcheniye-inorodnogo-tela-ili-peska-v-glazakh.html"> Keseki
                                    bedeniň ýa-da gözdäki gumyň duýmak</a></li>
                            <li><a class="animated-hover" href="z\zatrudnennoye-glotaniye">Kynlyk bilen
                                    ýuwutma </a></li>
                            <li><a class="animated-hover" href="p\perepady-nastroyeniya"> Keýpiň
                                    üýtgemegi</a></li>
                            <li><a class="animated-hover" href="m\myshechnaya-bol'"> Myşsa agyry</a></li>
                            <li><a class="animated-hover" href="s\sudorogi-myshts"> Muskulyň dartylmagy</a>
                            </li>
                            <li><a class="animated-hover" href="u\umen'sheniye-myshechnoĭ-massy"> Myşsa
                                    massasynyň azalmagy</a></li>
                            <li><a class="animated-hover" href="o\obescvechenniy-stul"> Reňksiz täret </a>
                            </li>
                            <li><a class="animated-hover" href="t\krov'-v-moche"> Siýdikdäki gan </a></li>
                            <li><a class="animated-hover" href="o\okhriplost'"> Sesiň gyrylmagy</a></li>
                            <li><a class="animated-hover" href="kh\khrupkost'-nogtey">Saryň
                                    gaýnamaklygy</a></li>
                            <li><a class="animated-hover" href="n\nederzhaniye-mochi"> Siýdik
                                    durmazlygy</a></li>
                            <li><a class="animated-hover" href="b\bol'-v-molochnoy-zheleze"> Süýt mäziniň
                                    agyrysy</a></li>
                            <li><a class="animated-hover" href="u\uvelicheniye-massy-tel"> Semremek</a>
                            </li>
                            <li><a class="animated-hover" href="o\oznob"> Sowuklama</a></li>
                            <li><a class="animated-hover" href="p\povyshennaya-zhazhda"> Suwsamaklygyň
                                    ýokarlanmagy</a></li>
                            <li><a class="animated-hover" href="v\vipadenie-volos"> Saçyň dökülmegi</a>
                            </li>
                            <li><a class="animated-hover" href="t\tremor"> Titreme</a></li>
                            <li><a class="animated-hover" href="k\krov-v-stule"> Täretde gan </a></li>
                            <li><a class="animated-hover" href="s\sliz'-v-stule"> Täretde nem</a></li>
                            <li><a class="animated-hover" href="g\gnoy-v-stule"> Täretde iriň</a></li>
                            <li><a class="animated-hover" href="ch\chuvstvo-zhara"> Yssy duýmak</a></li>
                            <li><a class="animated-hover" href="p\poterya-obonyaniya"> Ys duýmazlyk</a>
                            </li>
                            <li><a class="animated-hover" href="b\bol'-v-verkhnikh-konechnostyakh"> Ýokarky
                                    organlar agyry</a></li>
                            <li><a class="animated-hover" href="o\onemeniye-verkhnikh-konechnosteĭ">
                                    Ýokarky organlaryň çişmegi</a></li>
                            <li><a class="animated-hover" href="o\oteki-na-verkhnikh-konechnostyakh">
                                    Ýokarky organlarda çişme</a></li>
                            <li><a class="animated-hover" href="ch\chuvstvo-serdtsebiyeniya">Ýürek urmasyny
                                    duýmak</a></li>
                            <li><a class="animated-hover" href="o\onemeniye-litsa">Ýüzüň çişmegi</a></li>
                            <li><a class="animated-hover" href="o\oteki-na-litse">Ýüzde çiş döremek</a>
                            </li>
                            <li><a class="animated-hover" href="kh\khrupkost'-nogtey">Ýüz myşsalarynyň
                                    gowşaklygy</a></li>
                            <li><a class="animated-hover" href="b\bol'-v-promezhnosti"> Ýamyz aralygyňyn
                                    agyry</a></li>
                            <li><a class="animated-hover" href="s\slabost'-myshts-litsa"> Ýüz myşsalarynyň
                                    gowşaklygy</a></li>
                            <li><a class="animated-hover" href="u\ukhudsheniye-pamyati"> Ýadyň ýitmegi</a>
                            </li>
                            <li><a class="animated-hover" href="t\toshnota"> Ýürekbulanma</a></li>
                            <li><a class="animated-hover" href="k\kashel"> Üsgülewük</a></li>
                            <li><a class="animated-hover" href="v\vydeleniya-iz-vlagalishcha"> Waginal
                                    akym</a></li>
                            <li><a class="animated-hover" href="v\vydeleniya-krovi-iz-vlagalishcha">
                                    Waginadan gan akma </a></li>
                        </ul>
                    </div>
                    <ul class="no-cols-list symptoms-list">
                        <div class="search search--symptoms"></div>
                    </ul>
                </div>
                <div class="layout__right">
                    <div class="home box">


                        <div class="box-content">
                            <input type="text" id="myIn" onkeyup="myFun()" placeholder="Keseli gözlediň" title="Type in a name">

                            <ul id="myU">
                                <li><a class="animated-hover"
                                       href="beremennost/chrezmernaya-rvota-beremennykh">Göwreli aýallaryň
                                        aşa köp ýürek-bulanmagy</a></li>
                                <li><a class="animated-hover"
                                       href="beremennost/ektopicheskaya-beremennost'">Ektopiki
                                        göwrelilik</a></li>

                                <li><a class="animated-hover"
                                       href="beremennost/istmiko-tservikalnaya-nedostatochnost">Istmiki-ýatgynyň
                                        ýetmezçiligi</a></li>
                                <li><a class="animated-hover" href="beremennost/kholestaz-beremennykh">Göwreliligiň
                                        holestazy</a></li>

                                <li><a class="animated-hover" href="beremennost/khorioamnionit">Horioamnionit</a>
                                </li>
                                <li><a class="animated-hover" href="beremennost/lozhnyye-skhvatki">Ýalan
                                        gysylmalar</a></li>
                                <li><a class="animated-hover" href="beremennost/melazma-beremennykh">Göwreli
                                        aýallaryň melazmasy</a></li>
                                <li><a class="animated-hover"
                                       href="beremennost/papulezniy-dermatit-beremennykh">Göwreliligiň
                                        papulýar dermatiti</a></li>
                                <li><a class="animated-hover" href="beremennost/pemfigoid-beremennykh">Pemfigoid
                                        göwreli</a></li>
                                <li><a class="animated-hover" href="beremennost/predlezhaniye-platsenty">Plasentalyň
                                        dowam etmegi</a></li>
                                <li><a class="animated-hover"
                                       href="beremennost/prezhdevremennaya-otsloyka-platsenty">Plasental
                                        wagtyndan öň bozulmagy</a></li>
                                <li><a class="animated-hover" href="beremennost/rvota-beremennykh">Göwreli
                                        aýallaryň gusmagy</a></li>
                                <li><a class="animated-hover" href="beremennost/simfizit-beremennykh">Göwreli
                                        aýallaryň simfiziti</a></li>
                                <li><a class="animated-hover"
                                       href="beremennost/ugrozhayushchiye-prezhdevremennyye-rody">Wagtyndan
                                        öň dogulmagyň howuplary</a></li>
                                <li><a class="animated-hover" href="beremennost/vozmozhnaya-beremennost'">Mümkin
                                        göwrelilik</a></li>
                                <li><a class="animated-hover" href="beremennost/zudyashchiy-follikulit">Göwreliligiň
                                        gijilewük follikuliti</a></li>
                                <li><a class="animated-hover"
                                       href="dykhatelnaya-sistema/allergicheskij-rinit">Allergiki rinit</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="dykhatelnaya-sistema/bronhialnaya-astma">Bronhial demgysma</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="dykhatelnaya-sistema/hronicheskaya-obstruktivnaya-bolezn-legkih">Dowamly
                                        obstruktiw öýken keseli</a></li>
                                <li><a class="animated-hover"
                                       href="dykhatelnaya-sistema/hronicheskij-bronhit">Hroniki bronhit</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="dykhatelnaya-sistema/novoobrazovanie-nizhnih-dyhatelnyh-putei">Aşaky
                                        dem alyş ýollarynyň neoplazmasy</a></li>
                                <li><a class="animated-hover"
                                       href="dykhatelnaya-sistema/ostrye-respiratornye-zabolevaniya">Ýiti
                                        dem alyş keseli</a></li>
                                <li><a class="animated-hover" href="dykhatelnaya-sistema/ostryj-bronhit">Ýiti
                                        bronhit</a></li>
                                <li><a class="animated-hover" href="dykhatelnaya-sistema/pnevmoniya">Pnewmoniýa</a>
                                </li>
                                <li><a class="animated-hover" href="dykhatelnaya-sistema/tuberkulez">Inçekesel</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="endokrinnyye-zhelezy/autoimmunnyi-tireoidit">Awtoimmun
                                        tiroidit</a></li>
                                <li><a class="animated-hover"
                                       href="endokrinnyye-zhelezy/diffuznyi-toksicheskii-zob">Diffuz
                                        zäherli zoby</a></li>
                                <li><a class="animated-hover" href="endokrinnyye-zhelezy/giperkorticizm">Giperkortizolizm</a>
                                </li>
                                <li><a class="animated-hover" href="endokrinnyye-zhelezy/giperparatireoz">Giperparatioz</a>
                                </li>
                                <li><a class="animated-hover" href="endokrinnyye-zhelezy/gipertireoz">Gipertiroidizm</a>
                                </li>
                                <li><a class="animated-hover" href="endokrinnyye-zhelezy/gipokorticizm">Gipokortizm</a>
                                </li>
                                <li><a class="animated-hover" href="b\bol'-v-zhivote"> Garyn agrysy </a>
                                </li>
                                <li><a class="animated-hover" href="endokrinnyye-zhelezy/gipoparatireoz">Gipoparatiroidizm</a>
                                </li>
                                <li><a class="animated-hover" href="endokrinnyye-zhelezy/gipotireoz">Gipotireoz</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="endokrinnyye-zhelezy/sakharnyy-diabet-1-tipa">1-nji görnüşli
                                        süýji keseli</a></li>
                                <li><a class="animated-hover"
                                       href="endokrinnyye-zhelezy/sakharnyy-diabet-2-tipa">2-nji görnüşli
                                        süýji keseli</a></li>
                                <li><a class="animated-hover" href="glaza/allergicheskiy-konyunktivit">Allergiki
                                        konýuktiwit</a></li>
                                <li><a class="animated-hover"
                                       href="glaza/gipermetropiya">Gipermetropiýa</a></li>
                                <li><a class="animated-hover" href="glaza/infekcionnyj-konyunktivit">Ýokanç
                                        konýunktiwit</a></li>
                                <li><a class="animated-hover" href="glaza/inorodnoe-telo-glaza">Gözüň
                                        keseki bedeni</a></li>
                                <li><a class="animated-hover" href="glaza/katarkta">Katarakt</a></li>
                                <li><a class="animated-hover" href="glaza/keratit">Keratit</a></li>
                                <li><a class="animated-hover" href="glaza/miopiya">Miýopiýa</a></li>
                                <li><a class="animated-hover" href="glaza/presbiopiya">Presbiopiýa</a></li>
                                <li><a class="animated-hover" href="infektsii/coronavirus-infection">Koronawirus
                                        ýokançlygy(COVID-19)</a></li>
                                <li><a class="animated-hover" href="infektsii/difteriya">Difteriýa</a></li>
                                <li><a class="animated-hover" href="infektsii/gripp">Dümew</a></li>
                                <li><a class="animated-hover" href="infektsii/kishechnaya-infektsiya">Içege
                                        infeksiýasy</a></li>
                                <li><a class="animated-hover" href="infektsii/kor">Gyzamyk</a></li>
                                <li><a class="animated-hover" href="infektsii/krasnuha">Gyzylja</a></li>
                                <li><a class="animated-hover" href="infektsii/meningit">Meningit</a></li>
                                <li><a class="animated-hover" href="infektsii/opoyasyvayushchij-gerpes">Gerpes
                                        zoster infeksiýasy</a></li>
                                <li><a class="animated-hover" href="infektsii/skarlatina">Gyrmyzy
                                        gyzzyrma</a></li>
                                <li><a class="animated-hover" href="infektsii/vetryanaya-ospa">Warisella
                                        infeksiýasy(ospa)</a></li>
                                <li><a class="animated-hover"
                                       href="kosti-sustavy-i-myshtsy/mialgiya-posle-fizicheskikh-nagruzok">Maşkdan
                                        soň mialgiýa</a></li>
                                <li><a class="animated-hover" href="kosti-sustavy-i-myshtsy/osteoartroz">Osteoartrit</a>
                                </li>
                                <li><a class="animated-hover" href="kosti-sustavy-i-myshtsy/osteoporoz">Osteoporoz</a>
                                </li>
                                <li><a class="animated-hover" href="kosti-sustavy-i-myshtsy/podagra">Bogun
                                        agrasy</a></li>
                                <li><a class="animated-hover"
                                       href="kosti-sustavy-i-myshtsy/revmatoidnyj-artrit">Romatoid
                                        artrit</a></li>
                                <li><a class="animated-hover"
                                       href="kosti-sustavy-i-myshtsy/sistemnaya-krasnaya-volchanka">Ulgamlaýyn
                                        lupus eritematozy</a></li>
                                <li><a class="animated-hover" href="kozha/kontaktniy-dermatit">Kontakt
                                        dermatit</a></li>
                                <li><a class="animated-hover" href="kozha/piodermiya">Pýoderma</a></li>
                                <li><a class="animated-hover" href="kozha/psoriaz">Psoriaz</a></li>
                                <li><a class="animated-hover" href="kozha/seboreyniy-dermatit">Seborriki
                                        dermatit</a></li>
                                <li><a class="animated-hover"
                                       href="mochevydelitelnaya-sistema/giperaktivnyy-mochevoy-puzyr">Artykmaç
                                        öt haltasy</a></li>
                                <li><a class="animated-hover"
                                       href="mochevydelitelnaya-sistema/glomerulonefrit">Glomerulonefrit</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="mochevydelitelnaya-sistema/khronicheskaya-bolezn'-pochek">Dowamly
                                        böwrek keseli</a></li>
                                <li><a class="animated-hover"
                                       href="mochevydelitelnaya-sistema/luchevoy-tsistit">Bilek sintiti</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="mochevydelitelnaya-sistema/novoobrazovaniye-mochevogo-puzyrya">Peşew
                                        haltasynda täze emele gelen daş</a></li>
                                <li><a class="animated-hover"
                                       href="mochevydelitelnaya-sistema/novoobrazovaniye-pochki">Täze
                                        böwrekleriň döremegi</a></li>
                                <li><a class="animated-hover"
                                       href="mochevydelitelnaya-sistema/ostraya-pochechnaya-nedostatochnost">Ýiti
                                        böwrek ýetmezçiligi</a></li>
                                <li><a class="animated-hover"
                                       href="mochevydelitelnaya-sistema/pielonefrit">Piýelonefrit</a></li>
                                <li><a class="animated-hover"
                                       href="mochevydelitelnaya-sistema/pochechnaya-kolika">Böwrek
                                        sanjysy</a></li>
                                <li><a class="animated-hover" href="mochevydelitelnaya-sistema/tsistit">Sistit</a>
                                </li>
                                <li><a class="animated-hover" href="muzhskaya-polovaya-sistema/balanit">Balanit</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="muzhskaya-polovaya-sistema/balanopostit">Balanopostit</a></li>
                                <li><a class="animated-hover"
                                       href="muzhskaya-polovaya-sistema/bolezn-Peironi">Peýroni keseli</a>
                                </li>
                                <li><a class="animated-hover" href="muzhskaya-polovaya-sistema/epididimit">Epididimit</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="muzhskaya-polovaya-sistema/erektilnaya-disfunktsiya">Erektil
                                        disfunksiýa</a></li>
                                <li><a class="animated-hover"
                                       href="muzhskaya-polovaya-sistema/fimoz">Fimoz</a></li>
                                <li><a class="animated-hover" href="muzhskaya-polovaya-sistema/gidrocele">Gidrosel</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="muzhskaya-polovaya-sistema/gipogonadizm">Gipogonadizm</a></li>
                                <li><a class="animated-hover"
                                       href="muzhskaya-polovaya-sistema/korotkaya-uzdechka-polovogo-chlena">Jyns
                                        agzasynyň gysga uýanjygy</a></li>
                                <li><a class="animated-hover"
                                       href="muzhskaya-polovaya-sistema/novoobrazovanie-predstatelnoj-zhelezy">Prostatektomiýanyň
                                        täze döremegi</a></li>
                                <li><a class="animated-hover"
                                       href="muzhskaya-polovaya-sistema/novoobrazovaniye-yaichek">Ýumurtgalygyň
                                        täze döremegi</a></li>
                                <li><a class="animated-hover" href="muzhskaya-polovaya-sistema/orkhit">Orhit</a>
                                </li>
                                <li><a class="animated-hover" href="muzhskaya-polovaya-sistema/parafimoz">Parafimoz</a>
                                </li>
                                <li><a class="animated-hover" href="muzhskaya-polovaya-sistema/perekrut">Ýumurtgalygyň
                                        burulma</a></li>
                                <li><a class="animated-hover"
                                       href="muzhskaya-polovaya-sistema/perelom-polovogo-chlena">Jyns
                                        organyň döwülmegi</a></li>
                                <li><a class="animated-hover" href="muzhskaya-polovaya-sistema/priapizm">Priapizm</a>
                                </li>
                                <li><a class="animated-hover" href="muzhskaya-polovaya-sistema/prostatit">Prostatit</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="muzhskaya-polovaya-sistema/spermatotsele">Spermatosele</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="muzhskaya-polovaya-sistema/striktura-uretry">Uretral
                                        berkitme</a></li>
                                <li><a class="animated-hover" href="muzhskaya-polovaya-sistema/uretrit">Uretrit</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="muzhskaya-polovaya-sistema/ushib-moshonki">Ýumurtga haltajyga
                                        şikes ýetmegi</a></li>
                                <li><a class="animated-hover"
                                       href="muzhskaya-polovaya-sistema/ushib-polovogo-chlena">Jyns
                                        organyna şikes ýetmegi</a></li>
                                <li><a class="animated-hover"
                                       href="muzhskaya-polovaya-sistema/ushib-v-oblasti-promezhnosti">Ýamyz
                                        aralygyna şikes ýetmegi</a></li>
                                <li><a class="animated-hover" href="muzhskaya-polovaya-sistema/varikocele">Warikosele</a>
                                </li>
                                <li><a class="animated-hover" href="nervnaya-sistema/bolezn-alcgejmera">Alsgeýmer
                                        keseli</a></li>
                                <li><a class="animated-hover"
                                       href="nervnaya-sistema/golovnaya-bol-napryazheniya">Dartgynly kelle
                                        agyry</a></li>
                                <li><a class="animated-hover"
                                       href="nervnaya-sistema/klasternaya-golovnaya-bol">Klaster kelle
                                        agyry</a></li>
                                <li><a class="animated-hover" href="nervnaya-sistema/migren">Migren</a>
                                </li>
                                <li><a class="animated-hover" href="nervnaya-sistema/parkinsonizm">Parkinsonizm</a>
                                </li>
                                <li><a class="animated-hover" href="nervnaya-sistema/pokhmelnyi-sindrom">Azarlamak
                                        sindromy</a></li>
                                <li><a class="animated-hover" href="nervnaya-sistema/polinejropatii">Polinewropatiýa</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="nervnaya-sistema/posttravmaticheskaya-golovnaya-bol">Trawmadan
                                        soňky kelle agyry</a></li>
                                <li><a class="animated-hover" href="nervnaya-sistema/radikulopatii">Radikulopatiýa</a>
                                </li>
                                <li><a class="animated-hover" href="nervnaya-sistema/rasseyannyj-skleroz">Dagynak
                                        skleroz</a></li>
                                <li><a class="animated-hover"
                                       href="nervnaya-sistema/sindrom-khronicheskoĭ-ustalosti">Hroniki
                                        ýadawlyk sindromy</a></li>
                                <li><a class="animated-hover"
                                       href="nervnaya-sistema/sindrom-otmeny-kofeina">Kofein çykarmak
                                        sindromy</a></li>
                                <li><a class="animated-hover" href="nervnaya-sistema/ukachivaniye">Ýürek-bulanma</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="pechen-i-zhelchevyvodyashchiye-puti/diskineziya-zhelchevyvodyashchikh-putei">Öt
                                        ýolynyň diskineziýasy</a></li>
                                <li><a class="animated-hover"
                                       href="pechen-i-zhelchevyvodyashchiye-puti/gepatit">Gepatit</a></li>
                                <li><a class="animated-hover"
                                       href="pechen-i-zhelchevyvodyashchiye-puti/khronicheskiy-kholetsistit">Dowamly
                                        holesistit</a></li>
                                <li><a class="animated-hover"
                                       href="pechen-i-zhelchevyvodyashchiye-puti/ostryi-kholetsistit">Ýiti
                                        holesistit</a></li>
                                <li><a class="animated-hover"
                                       href="pechen-i-zhelchevyvodyashchiye-puti/pervichnyj-skleroziruyushchij-holangit">Ilkinji
                                        sklerozly kolangit</a></li>
                                <li><a class="animated-hover"
                                       href="pechen-i-zhelchevyvodyashchiye-puti/pervichnyy-biliarnyy-kholangit">Ilkinji
                                        ötli holangit</a></li>
                                <li><a class="animated-hover"
                                       href="pechen-i-zhelchevyvodyashchiye-puti/zhelchekamennaya-bolezn">Ötde
                                        daş döremegi</a></li>
                                <li><a class="animated-hover" href="pishchevaritelnaya-sistema/appendicit">Appendisit(körçege)</a>
                                </li>
                                <li><a class="animated-hover" href="pishchevaritelnaya-sistema/celiakiya">Seliakiýa</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="pishchevaritelnaya-sistema/funkcionalnaya-dispepsiya">Funksional
                                        dispepsiýa</a></li>
                                <li><a class="animated-hover"
                                       href="pishchevaritelnaya-sistema/gastroezofagealnaya-reflyuksnaya-bolezn">Gastroezofagial
                                        reflyks keseli</a></li>
                                <li><a class="animated-hover" href="pishchevaritelnaya-sistema/gemorroj">Gemorroý</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="pishchevaritelnaya-sistema/hronicheskij-pankreatit">Dowamly
                                        pankreatit</a></li>
                                <li><a class="animated-hover"
                                       href="pishchevaritelnaya-sistema/kishechnaya-neprohodimost">Içege
                                        obstruksiýasy</a></li>
                                <li><a class="animated-hover"
                                       href="pishchevaritelnaya-sistema/laktaznaya-nedostatochnost">Laktaz
                                        ýetmezçiligi</a></li>
                                <li><a class="animated-hover"
                                       href="pishchevaritelnaya-sistema/novoobrazovanie-tolstoj-kishki">Ýogyn
                                        içegänin täze döremegi</a></li>
                                <li><a class="animated-hover"
                                       href="pishchevaritelnaya-sistema/ostryj-pankreatit">Ýiti
                                        pankreatit</a></li>
                                <li><a class="animated-hover"
                                       href="pishchevaritelnaya-sistema/sindrom-razdrazhennogo-kishechnika">Içege
                                        gyjynma sindromy</a></li>
                                <li><a class="animated-hover"
                                       href="pishchevaritelnaya-sistema/vospalitelnoye-zabolevaniye-kishechnika">Kesgitli
                                        çişme</a></li>
                                <li><a class="animated-hover"
                                       href="pishchevaritelnaya-sistema/yazva-zheludka-ili-dvenadtsatiperstnoy-kishki">Aşgazan
                                        ýa-da on iki barmakly içege ýarasy</a></li>
                                <li><a class="animated-hover" href="rotovaya-polost/alveolit-lunki-zuba">Dişdäki
                                        alweolit deşikleri</a></li>
                                <li><a class="animated-hover" href="rotovaya-polost/flyuoroz">Flýuoroz</a>
                                </li>
                                <li><a class="animated-hover" href="rotovaya-polost/gingivit">Gingiwit</a>
                                </li>
                                <li><a class="animated-hover" href="rotovaya-polost/kariyes">Kariýes</a>
                                </li>
                                <li><a class="animated-hover" href="rotovaya-polost/pul'pit">Pulpit</a>
                                </li>
                                <li><a class="animated-hover" href="rotovaya-polost/stomatit">Stomatit</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="serdechno-sosudistaya-sistema-i-krov/anemiya">Ganazlyk</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="serdechno-sosudistaya-sistema-i-krov/arterialnaya-gipertenziya">Arterial
                                        gipertoniýa</a></li>
                                <li><a class="animated-hover"
                                       href="serdechno-sosudistaya-sistema-i-krov/ishemicheskaya-bolezn-serdca">Işemiýa
                                        keseli</a></li>
                                <li><a class="animated-hover"
                                       href="serdechno-sosudistaya-sistema-i-krov/khronicheskaya-serdechnaya-nedostatochnost'">Dowamly
                                        ýürek ýetmezçiligi</a></li>
                                <li><a class="animated-hover"
                                       href="serdechno-sosudistaya-sistema-i-krov/miokardit">Miýokardit</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="serdechno-sosudistaya-sistema-i-krov/narushenie-ritma-serdca">Ýüregiň
                                        ritminiň bozulmagy</a></li>
                                <li><a class="animated-hover"
                                       href="serdechno-sosudistaya-sistema-i-krov/nejrocirkulyatornaya-distoniya">Newrokirkulýasiýa
                                        distoniýasy</a></li>
                                <li><a class="animated-hover"
                                       href="serdechno-sosudistaya-sistema-i-krov/obliteriruyushchie-zabolevaniya-perifericheskih-arterij">Trombangit
                                        periferiýa arteriýalar</a></li>
                                <li><a class="animated-hover"
                                       href="serdechno-sosudistaya-sistema-i-krov/ostraya-pochechnaya-nedostatochnost'-(povrezhdeniye)">Ýiti
                                        böwrek ýetmezçilik keseli</a></li>
                                <li><a class="animated-hover"
                                       href="serdechno-sosudistaya-sistema-i-krov/ostroe-narushenie-mozgovogo-krovoobrashcheniya">Ýiti
                                        beýni gan aýlanyşyň bozulmagy</a></li>
                                <li><a class="animated-hover"
                                       href="serdechno-sosudistaya-sistema-i-krov/revmaticheskaya-lihoradka-s-porazheniem-serdca">Guryagry
                                        gyzzyrmasynyň ýürege zeher ýetirmegi</a></li>
                                <li><a class="animated-hover"
                                       href="serdechno-sosudistaya-sistema-i-krov/sindrom-rejno">Reýnaud
                                        sindromy</a></li>
                                <li><a class="animated-hover"
                                       href="serdechno-sosudistaya-sistema-i-krov/stenokardiya">Stenokardiýa</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="serdechno-sosudistaya-sistema-i-krov/tromboehmboliya-legochnoj-arterii">Tromboemboliýa
                                        öyken arteriýa keseli</a></li>
                                <li><a class="animated-hover"
                                       href="serdechno-sosudistaya-sistema-i-krov/varikoznoye-rasshireniye-ven-nizhnikh-konechnostey">Wenalaryň
                                        Warikoz keseli</a></li>
                                <li><a class="animated-hover"
                                       href="travmy-i-ushiby/perelom-bolshogo-paltsa-stopy">Aýagyň başan
                                        barmagynyň döwülmegi</a></li>
                                <li><a class="animated-hover"
                                       href="travmy-i-ushiby/perelom-distalnykh-kontsov-luchevoy-i-loktevoy-kosti">Bilek
                                        bilen tirsegiň distal uçlarynyň sünkiniň döwülmegi</a></li>
                                <li><a class="animated-hover" href="travmy-i-ushiby/perelom-goleni">Injigiň
                                        döwülmegi</a></li>
                                <li><a class="animated-hover" href="travmy-i-ushiby/perelom-lodyzhki">Topugyň
                                        döwülmegi</a></li>
                                <li><a class="animated-hover" href="travmy-i-ushiby/perelom-nadkolennika">Dyzçanagyň
                                        döwülmegi</a></li>
                                <li><a class="animated-hover"
                                       href="travmy-i-ushiby/perelom-oblasti-plechevogo-sustava">Egniň
                                        döwülmegi</a></li>
                                <li><a class="animated-hover" href="travmy-i-ushiby/perelom-paltsa-stopy">Aýagyň
                                        barmaklarynyň döwülmegi</a></li>
                                <li><a class="animated-hover" href="travmy-i-ushiby/perelom-sheiki-bedra">Buduň
                                        döwülmegi</a></li>
                                <li><a class="animated-hover" href="travmy-i-ushiby/perelomy">Döwükler</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="travmy-i-ushiby/rastyazheniye-svyazok-bolshogo-paltsa">Aýagyň
                                        başan barmagynyň bogunlarynyň süýnmegi</a></li>
                                <li><a class="animated-hover"
                                       href="travmy-i-ushiby/rastyazheniye-svyazok-kisti">Goşaryň
                                        bogunlarynyň süýnmegi</a></li>
                                <li><a class="animated-hover"
                                       href="travmy-i-ushiby/rastyazheniye-svyazok-kolena">Dyzyň
                                        bogunlarynyň süýnmegi</a></li>
                                <li><a class="animated-hover"
                                       href="travmy-i-ushiby/rastyazheniye-svyazok-lodyzhki">Topugyň
                                        bogunlarynyň süýnmegi</a></li>
                                <li><a class="animated-hover"
                                       href="travmy-i-ushiby/rastyazheniye-svyazok-loktya">Tirsegiň
                                        bogunlarynyň süýnmegi</a></li>
                                <li><a class="animated-hover"
                                       href="travmy-i-ushiby/rastyazheniye-svyazok-plechevogo-sustava">Egniň
                                        bogunlarynyň süýnmegi</a></li>
                                <li><a class="animated-hover"
                                       href="travmy-i-ushiby/rastyazheniye-svyazok-zapyastya">Bilegiň
                                        bogunlarynyň süýnmegi</a></li>
                                <li><a class="animated-hover" href="travmy-i-ushiby/travmy-svyazok">Bogunlaryň
                                        şikeslenmegi</a></li>
                                <li><a class="animated-hover" href="travmy-i-ushiby/ushib-kisti">Goşaryň
                                        şikeslenmegi</a></li>
                                <li><a class="animated-hover" href="travmy-i-ushiby/ushib-kolena">Dyzyň
                                        şikeslenmegi</a></li>
                                <li><a class="animated-hover" href="travmy-i-ushiby/ushib-lodyzhki">Topugyň
                                        şikeslenmegi</a></li>
                                <li><a class="animated-hover" href="travmy-i-ushiby/ushib-loktya">Tirkegiň
                                        şikeslenmegi</a></li>
                                <li><a class="animated-hover" href="travmy-i-ushiby/ushib-myagkih-tkanei">Ýumşak
                                        dokumalaryň şikeslenmegi</a></li>
                                <li><a class="animated-hover" href="travmy-i-ushiby/ushib-paltsa-stopy">Aýagyň
                                        barmaklarynyň şikeslenmegi</a></li>
                                <li><a class="animated-hover" href="travmy-i-ushiby/ushib-plecha">Eginiň
                                        şikeslenmegi</a></li>
                                <li><a class="animated-hover" href="travmy-i-ushiby/ushib-predplech'ya">Muskulyň
                                        şikeslenmegi</a></li>
                                <li><a class="animated-hover" href="travmy-i-ushiby/ushib-stopy">Dabanyň
                                        şikeslenmegi</a></li>
                                <li><a class="animated-hover"
                                       href="travmy-i-ushiby/ushib-v-raĭone-tazobedrennogo-sustava">Çanaklyk-but
                                        bognunyň şikeslenmegi</a></li>
                                <li><a class="animated-hover" href="travmy-i-ushiby/ushib-zapyastya">Bilegiň
                                        şikeslenmegi</a></li>
                                <li><a class="animated-hover" href="ukho-gorlo-nos/bolezn-menera">Menýeranyň
                                        keseli</a></li>
                                <li><a class="animated-hover"
                                       href="ukho-gorlo-nos/labirintit">Labirintit</a></li>
                                <li><a class="animated-hover" href="ukho-gorlo-nos/laringit">Laringit</a>
                                </li>
                                <li><a class="animated-hover" href="ukho-gorlo-nos/mastoidit">Mastoidit</a>
                                </li>
                                <li><a class="animated-hover" href="ukho-gorlo-nos/naruzhnyj-otit">Daşky
                                        otit</a></li>
                                <li><a class="animated-hover"
                                       href="ukho-gorlo-nos/otoskleroz">Otoskleroz</a></li>
                                <li><a class="animated-hover" href="ukho-gorlo-nos/sernaya-probka">Kükürt
                                        dykysy</a></li>
                                <li><a class="animated-hover"
                                       href="ukho-gorlo-nos/sindrom-obstruktivnogo-nochnogo-apnoeh">Obstruktiw
                                        gije apnoe sindromy</a></li>
                                <li><a class="animated-hover" href="ukho-gorlo-nos/sinusit">Sinusit</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="ukho-gorlo-nos/snizhenie-sluha-svyazannoe-s-vozdejstviem-shuma">Ses
                                        bilen baglanyşykly eşidiş ýitgisi</a></li>
                                <li><a class="animated-hover" href="ukho-gorlo-nos/srednij-otit">Ortaça
                                        otit</a></li>
                                <li><a class="animated-hover" href="ukho-gorlo-nos/tonzillit">Tonsillit</a>
                                </li>
                                <li><a class="animated-hover" href="ukho-gorlo-nos/vazomotornyj-rinit">Wazomotor
                                        rinit</a></li>
                                <li><a class="animated-hover"
                                       href="zhenskaya-polovaya-sistema-i-molochnyye-zhelezy/algodismenoreya">Dismenoreýa</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="zhenskaya-polovaya-sistema-i-molochnyye-zhelezy/cervicit">Serwisit</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="zhenskaya-polovaya-sistema-i-molochnyye-zhelezy/endometrioz">Endometrioz</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="zhenskaya-polovaya-sistema-i-molochnyye-zhelezy/giperandrogeniya-u-zhenshchin">Aýallarda
                                        giperandrogenizm</a></li>
                                <li><a class="animated-hover"
                                       href="zhenskaya-polovaya-sistema-i-molochnyye-zhelezy/mastit">Mastit</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="zhenskaya-polovaya-sistema-i-molochnyye-zhelezy/novoobrazovanie-molochnoj-zhelezy">Süýt
                                        mäziniň täze döremegi</a></li>
                                <li><a class="animated-hover"
                                       href="zhenskaya-polovaya-sistema-i-molochnyye-zhelezy/sindrom-polikistoznyh-yaichnikov">Polikistik
                                        ýumurtga sindromy</a></li>
                                <li><a class="animated-hover"
                                       href="zhenskaya-polovaya-sistema-i-molochnyye-zhelezy/vaginit">Waginit</a>
                                </li>
                                <li><a class="animated-hover"
                                       href="zhenskaya-polovaya-sistema-i-molochnyye-zhelezy/vospalitelnye-zabolevaniya-organov-malogo-taza">Çanaklyk
                                        çiş keseli</a></li>


                            </ul>

                        </div>
                        <ul class="no-cols-list symptoms-list">
                            <li class="search search--symptoms"></li>
                        </ul>
                    </div>
                    <div class="box-bg"></div>
                </div>
            </div>
        </div>
    </div>


@endsection
