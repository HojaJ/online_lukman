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
                        <h1 class="page-header page-header--name"> Поиск </h1>
                        <p class="page-header-description">Найдите все болезни и симптомы в разделе Болезни и
                            Симптомы.</p>


                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Поиск симптомов"
                               title="Поиск">

                        <ul id="myUL">

                            <li><a class="animated-hover" href="rub\blednost'-kozhi"> Бледность кожи </a></li>
                            <li><a class="animated-hover" href="rub\bol'-v-gorle"> Боль в горле </a></li>
                            <li><a class="animated-hover" href="rub\bol'-v-grudnoy-kletke"> Боль в грудной клетке </a>
                            </li>
                            <li><a class="animated-hover" href="rub\bol'-v-molochnoy-zheleze"> Боль в молочной
                                    железе </a>
                            </li>
                            <li><a class="animated-hover" href="rub\bol'-v-nizhnikh-konechnostyakh"> Боль в нижних
                                    конечностях </a></li>
                            <li><a class="animated-hover" href="rub\bol'-v-promezhnosti"> Боль в промежности </a></li>
                            <li><a class="animated-hover" href="rub\bol'-v-sheye"> Боль в шее </a></li>
                            <li><a class="animated-hover" href="rub\bol'-v-spine"> Боль в спине </a></li>
                            <li><a class="animated-hover" href="rub/bol'-v-sustavakh"> Боль в суставах </a></li>
                            <li><a class="animated-hover" href="rub\bol'-v-ukhe"> Боль в ухе </a></li>
                            <li><a class="animated-hover" href="rub\bol'-v-verkhnikh-konechnostyakh"> Боль в верхних
                                    конечностях </a></li>
                            <li><a class="animated-hover" href="rub/b/bol'-v-zhivote"> Боль в животе </a></li>
                            <li><a class="animated-hover" href="rub/bol'-za-ukhom"> Боль за ухом </a></li>

                            <li><a class="animated-hover" href="ruv\vipadenie-volos"> Выпадение волос </a></li>
                            <li><a class="animated-hover" href="ruv\vlazhniy-kashel"> Влажный кашель </a></li>
                            <li><a class="animated-hover" href="ruv\vydeleniya-iz-glaz"> Выделения из глаз </a></li>
                            <li><a class="animated-hover" href="ruv\vydeleniya-iz-ukha"> Выделения из уха </a></li>
                            <li><a class="animated-hover" href="ruv\vydeleniya-iz-vlagalishcha"> Выделения из
                                    влагалища </a>
                            </li>
                            <li><a class="animated-hover" href="ruv\vydeleniya-krovi-iz-vlagalishcha"> Выделение крови
                                    из
                                    влагалища </a></li>
                            <li><a class="animated-hover" href="rug\gallyutsinatsii"> Галлюцинации </a></li>
                            <li><a class="animated-hover" href="rug\glaznaya-bol'"> Глазная боль </a></li>
                            <li><a class="animated-hover" href="rug\gnoy-v-stule"> Гной в стуле </a></li>
                            <li><a class="animated-hover" href="rug\golovnaya-bol'"> Головная боль </a></li>
                            <li><a class="animated-hover" href="rug\golovokruzheniye"> Головокружение </a></li>

                            <li><a class="animated-hover" href="rud\diareya"> Диарея </a></li>
                            <li><a class="animated-hover" href="rud\dvoyeniye-v-glazakh"> Двоение в глазах </a></li>

                            <li><a class="animated-hover" href="ruzh\zheltushnoye-okrashivaniye-kozhi"> Желтушный цвет
                                    кожи </a></li>

                            <li><a class="animated-hover" href="ruz\zapor"> Запор </a></li>
                            <li><a class="animated-hover" href="ruz\zatrudnennoye-glotaniye"> Затрудненное глотание </a>
                            </li>
                            <li><a class="animated-hover" href="ruz\zubnaya-bol'"> Зубная боль </a></li>
                            <li><a class="animated-hover" href="ruz\zud-v-glazah"> Зуд в глазах </a></li>
                            <li>
                            <li><a class="animated-hover" href="rui\izmeneniya-kozhi"> Изменения внешнего вида кожи </a>
                            </li>
                            <li><a class="animated-hover" href="rui\izzhoga"> Изжога </a></li>

                            <li><a class="animated-hover" href="ruk\kashel"> Кашель </a></li>
                            <li><a class="animated-hover" href="ruk\kom-v-gorle"> Чувство кома в горле </a></li>
                            <li><a class="animated-hover" href="ruk\kozhniy-zud"> Кожный зуд </a></li>
                            <li><a class="animated-hover" href="ruk\krov'-na-tualetnoĭ-bumage"> Кровь на туалетной
                                    бумаге </a></li>
                            <li><a class="animated-hover" href="ruk\krov'-v-moche"> Кровь в моче </a></li>
                            <li><a class="animated-hover" href="ruk\krov-v-stule"> Кровь в стуле </a></li>
                            <li><a class="animated-hover" href="ruk\krovotochivost'-desen"> Кровоточивость десен </a>
                            </li>

                            <li><a class="animated-hover" href="rum\mokrota-s-krov'yu"> Мокрота с кровью </a></li>
                            <li><a class="animated-hover" href="rum\mutnaya-mocha"> Мутная моча </a></li>
                            <li><a class="animated-hover" href="rum\myshechnaya-bol'"> Мышечная боль </a></li>

                            <li><a class="animated-hover" href="run\nabukhaniye-ven-na-sheye"> Набухание вен на шее </a>
                            </li>
                            <li><a class="animated-hover" href="run\narusheniya-slukha"> Нарушения слуха </a></li>
                            <li><a class="animated-hover" href="run\nederzhaniye-mochi"> Недержание мочи </a></li>
                            <li><a class="animated-hover" href="run\nepriyatnyy-zapakh-izo-rta"> Неприятный запах изо
                                    рта </a></li>

                            <li><a class="animated-hover" href="ruo\obescvechenniy-stul"> Обесцвеченный стул </a></li>
                            <li><a class="animated-hover" href="ruo\obmorochnoye-sostoyaniye"> Обморочное состояние </a>
                            </li>
                            <li><a class="animated-hover" href="ruo\odyshka"> Одышка </a></li>
                            <li><a class="animated-hover" href="ruo\okhriplost'"> Охриплость </a></li>
                            <li><a class="animated-hover" href="ruo\onemeniye-litsa"> Онемение лица </a></li>
                            <li><a class="animated-hover" href="ruo\onemeniye-nizhnikh-konechnosteĭ"> Онемение нижних
                                    конечностей </a></li>
                            <li><a class="animated-hover" href="ruo\onemeniye-verkhnikh-konechnosteĭ"> Онемение верхних
                                    конечностей </a></li>
                            <li><a class="animated-hover" href="ruo\opushcheniye-veka"> Опущение века </a></li>
                            <li><a class="animated-hover"
                                   href="ruo\oshchushcheniye-inorodnogo-tela-ili-peska-v-glazakh">
                                    Ощущение инородного тела или песка в глазах </a></li>
                            <li><a class="animated-hover" href="ruo\otek"> Отеки </a></li>
                            <li><a class="animated-hover" href="ruo\oteki-na-litse"> Отеки на лице </a></li>
                            <li><a class="animated-hover" href="ruo\oteki-na-nizhnikh-konechnostyakh"> Отеки на нижних
                                    конечностях </a></li>
                            <li><a class="animated-hover" href="ruo\oteki-na-verkhnikh-konechnostyakh"> Отеки на верхних
                                    конечностях </a></li>
                            <li><a class="animated-hover" href="ruo\oznob"> Озноб </a></li>

                            <li><a class="animated-hover" href="rup\perepady-nastroyeniya"> Перепады настроения </a>
                            </li>
                            <li><a class="animated-hover" href="rup\pokrasneniye-glaz"> Покраснение глаз </a></li>
                            <li><a class="animated-hover" href="rup\ponizheniye-arterial'nogo-davleniya"> Понижение
                                    артериального давления </a></li>
                            <li><a class="animated-hover" href="rup\poterya-obonyaniya"> Потеря обоняния </a></li>
                            <li><a class="animated-hover" href="rup\potlivost'"> Потливость </a></li>
                            <li><a class="animated-hover" href="rup\povrezhdeniya-slizistoy-obolochki-rta"> Повреждения
                                    слизистой оболочки рта </a></li>
                            <li><a class="animated-hover" href="rup\povysheniye-arterial'nogo-davleniya"> Повышение
                                    артериального давления </a></li>
                            <li><a class="animated-hover" href="rup\povyshennaya-zhazhda"> Повышенная жажда </a></li>

                            <li><a class="animated-hover" href="rur\rasshireniye-ven-nizhnikh-konechnostey"> Расширение
                                    вен
                                    нижних конечностей </a></li>
                            <li><a class="animated-hover" href="rur\rastyazhki-na-kozhe"> Растяжки на коже </a></li>
                            <li><a class="animated-hover" href="rur\rvota"> Рвота </a></li>

                            <li><a class="animated-hover" href="rus\sklonnost'-k-obrazovaniyu-sinyakov"> Склонность к
                                    образованию "синяков" </a></li>
                            <li><a class="animated-hover" href="rus\skovannost'-sustavov"> Скованность суставов </a>
                            </li>
                            <li><a class="animated-hover" href="rus\slabaya-struya-mochi"> Слабая струя мочи </a></li>
                            <li><a class="animated-hover" href="rus\slabost',-bystraya utomlyayemost'"> Слабость,
                                    быстрая
                                    утомляемость </a></li>
                            <li><a class="animated-hover" href="rus\slabost'-myshts-litsa"> Слабость мышц лица </a></li>
                            <li><a class="animated-hover" href="rus\sliz'-v-stule"> Слизь в стуле </a></li>
                            <li><a class="animated-hover" href="rus\snizheniye-massy-tela"> Снижение массы тела </a>
                            </li>
                            <li><a class="animated-hover" href="rus\snizhennoye-polovoye-vlecheniye"> Сниженное половое
                                    влечение </a></li>
                            <li><a class="animated-hover" href="rus\sosudistyye-setki-na-nogakh"> Сосудистые сетки на
                                    ногах </a></li>
                            <li><a class="animated-hover" href="rus\strelyayushchaya-bol'-v-ukhe"> Стреляет в ухе </a>
                            </li>
                            <li><a class="animated-hover" href="rus\sudorogi-myshts"> Судороги мышц </a></li>
                            <li><a class="animated-hover" href="rus\sukhoĭ-kashel'"> Сухой кашель </a></li>

                            <li><a class="animated-hover" href="rut\temnaya-mocha"> Темная моча </a></li>
                            <li><a class="animated-hover" href="rut\toshnota"> Тошнота </a></li>
                            <li><a class="animated-hover" href="rut\tremor"> Тремор </a></li>
                            <li><a class="animated-hover" href="rut\treshchiny-na-kozhe"> Трещины на коже </a></li>

                            <li><a class="animated-hover" href="ruu\ukhudsheniye-pamyati"> Ухудшение памяти </a></li>
                            <li><a class="animated-hover" href="ruu\ukhudsheniye-zreniya"> Ухудшение зрения </a></li>
                            <li><a class="animated-hover" href="ruu\umen'sheniye-myshechnoĭ-massy"> Уменьшение мышечной
                                    массы </a></li>
                            <li><a class="animated-hover" href="ruu\uvelicheniye-massy-tela"> Увеличение массы тела </a>
                            </li>

                            <li><a class="animated-hover" href="rukh\khrupkost'-nogtey"> Хрупкость ногтей </a></li>

                            <li><a class="animated-hover" href="ruch\chernyĭ-stul"> Черный стул </a></li>
                            <li><a class="animated-hover" href="ruch\chuvstvo-prilivov"> Чувство приливов </a></li>
                            <li><a class="animated-hover" href="ruch\chuvstvo-serdtsebiyeniya"> Чувство
                                    сердцебиения </a>
                            </li>
                            <li><a class="animated-hover" href="ruch\chuvstvo-zhara"> Чувство жара </a></li>

                            <li><a class="animated-hover" href="rush\shum-v-ushakh"> Шум в ушах </a></li>
                        </ul>

                    </div>
                    <ul class="no-cols-list symptoms-list">
                        <div class="search search--symptoms">

                        </div>
                </div>
                <div class="layout__right">
                    <div class="home box">


                        <div class="box-content">
                            <input type="text" id="myIn" onkeyup="myFun()" placeholder="Поиск болезни" title="Поиск">

                            <ul id="myU">

                                <li>
                                    <a class="animated-hover" href="rub/chrezmernaya-rvota-beremennykh">Чрезмерная рвота
                                        беременных</a>
                                </li>
                                <li><a class="animated-hover" href="rub/ektopicheskaya-beremennost'">Эктопическая
                                        беременность</a></li>

                                <li><a class="animated-hover" href="rub/istmiko-tservikalnaya-nedostatochnost">Истмико-цервикальная
                                        недостаточность</a></li>

                                <li><a class="animated-hover" href="rub/kholestaz-beremennykh">Холестаз беременных</a>
                                </li>

                                <li><a class="animated-hover" href="rub/khorioamnionit">Хориоамнионит</a></li>

                                <li><a class="animated-hover" href="rub/lozhnyye-skhvatki">Ложные схватки</a></li>

                                <li><a class="animated-hover" href="rub/melazma-beremennykh">Мелазма беременных</a></li>

                                <li><a class="animated-hover" href="rub/papulezniy-dermatit-beremennykh">Папулезный
                                        дерматит
                                        беременных</a></li>
                                <li><a class="animated-hover" href="rub/pemfigoid-beremennykh">Пемфигоид беременных</a>
                                </li>

                                <li><a class="animated-hover" href="rub/predlezhaniye-platsenty">Предлежание
                                        плаценты</a>
                                </li>
                                <li><a class="animated-hover" href="rub/prezhdevremennaya-otsloyka-platsenty">Преждевременная
                                        отслойка плаценты</a></li>

                                <li><a class="animated-hover" href="rub/rvota-beremennykh">Рвота беременных</a></li>

                                <li><a class="animated-hover" href="rub/simfizit-beremennykh">Симфизит беременных</a>
                                </li>

                                <li><a class="animated-hover" href="rub/ugrozhayushchiye-prezhdevremennyye-rody">Угрожающие
                                        преждевременные роды</a></li>

                                <li><a class="animated-hover" href="rub/vozmozhnaya-beremennost'">Возможная
                                        беременность</a>
                                </li>
                                <li><a class="animated-hover" href="rub/zudyashchiy-follikulit">Зудящий фолликулит
                                        беременных</a></li>
                                <li><a class="animated-hover" href="rud/allergicheskij-rinit">Аллергический ринит</a>
                                </li>
                                <li><a class="animated-hover" href="rud/bronhialnaya-astma">Бронхиальная астма</a></li>
                                <li><a class="animated-hover" href="rud/hronicheskaya-obstruktivnaya-bolezn-legkih">Хроническая
                                        обструктивная болезнь легких</a></li>
                                <li><a class="animated-hover" href="rud/hronicheskij-bronhit">Хронический бронхит</a>
                                </li>
                                <li><a class="animated-hover" href="rud/novoobrazovanie-nizhnih-dyhatelnyh-putei">Новообразование
                                        нижних дыхательных путей</a></li>
                                <li><a class="animated-hover" href="rud/ostrye-respiratornye-zabolevaniya">Острые
                                        респираторные заболевания</a></li>
                                <li><a class="animated-hover" href="rud/ostryj-bronhit">Острый бронхит</a></li>
                                <li><a class="animated-hover" href="rud/pnevmoniya">Пневмония</a></li>
                                <li><a class="animated-hover" href="rud/tuberkulez">Туберкулез</a></li>

                                <li><a class="animated-hover" href="rue/autoimmunnyi-tireoidit">Аутоиммунный
                                        тиреоидит</a>
                                </li>
                                <li><a class="animated-hover" href="rue/diffuznyi-toksicheskii-zob">Диффузный
                                        токсический
                                        зоб</a></li>
                                <li><a class="animated-hover" href="rue/giperkorticizm">Гиперкортицизм</a></li>
                                <li><a class="animated-hover" href="rue/giperparatireoz">Гиперпаратиреоз</a></li>
                                <li><a class="animated-hover" href="rue/gipertireoz">Гипертиреоз</a></li>
                                <li><a class="animated-hover" href="rue/gipokorticizm">Гипокортицизм</a></li>
                                <li><a class="animated-hover" href="rue/gipoparatireoz">Гипопаратиреоз</a></li>
                                <li><a class="animated-hover" href="rue/gipotireoz">Гипотиреоз</a></li>
                                <li><a class="animated-hover" href="rue/sakharnyy-diabet-1-tipa">Сахарный диабет 1-го
                                        типа</a></li>
                                <li><a class="animated-hover" href="rue/sakharnyy-diabet-2-tipa">Сахарный диабет 2-го
                                        типа</a></li>
                                <li><a class="animated-hover" href="rug/allergicheskiy-konyunktivit">Аллергический
                                        конъюнктивит</a></li>
                                <li><a class="animated-hover" href="rug/gipermetropiya">Гиперметропия</a></li>
                                <li><a class="animated-hover" href="rug/infekcionnyj-konyunktivit">Инфекционный
                                        конъюнктивит</a></li>
                                <li><a class="animated-hover" href="rug/inorodnoe-telo-glaza">Инородное тело глаза</a>
                                </li>
                                <li><a class="animated-hover" href="rug/katarkta">Катаракта</a></li>
                                <li><a class="animated-hover" href="rug/keratit">Кератит</a></li>
                                <li><a class="animated-hover" href="rug/miopiya">Миопия</a></li>
                                <li><a class="animated-hover" href="rug/presbiopiya">Пресбиопия</a></li>
                                <li><a class="animated-hover" href="rui/coronavirus-infection">Коронавирусная
                                        инфекция</a>
                                </li>
                                <li><a class="animated-hover" href="rui/difteriya">Дифтерия</a></li>
                                <li><a class="animated-hover" href="rui/gripp">Грипп</a></li>
                                <li><a class="animated-hover" href="rui/kishechnaya-infektsiya">Кишечная инфекция</a>
                                </li>
                                <li><a class="animated-hover" href="rui/kor">Корь</a></li>
                                <li><a class="animated-hover" href="rui/krasnuha">Краснуха</a></li>
                                <li><a class="animated-hover" href="rui/meningit">Менингит</a></li>
                                <li><a class="animated-hover" href="rui/opoyasyvayushchij-gerpes">Опоясывающий
                                        герпес</a>
                                </li>
                                <li><a class="animated-hover" href="rui/skarlatina">Скарлатина</a></li>
                                <li><a class="animated-hover" href="rui/vetryanaya-ospa">Ветряная оспа</a></li>

                                <li><a class="animated-hover" href="rukosti/mialgiya-posle-fizicheskikh-nagruzok">Миалгия
                                        после физических нагрузок</a></li>
                                <li><a class="animated-hover" href="rukosti/osteoartroz">Остеоартроз</a></li>
                                <li><a class="animated-hover" href="rukosti/osteoporoz">Остеопороз</a></li>
                                <li><a class="animated-hover" href="rukosti/podagra">Подагра</a></li>
                                <li><a class="animated-hover" href="rukosti/revmatoidnyj-artrit">Ревматоидный артрит</a>
                                </li>
                                <li><a class="animated-hover" href="rukosti/sistemnaya-krasnaya-volchanka">Системная
                                        красная
                                        волчанка</a></li>
                                <li><a class="animated-hover" href="rukozha/kontaktniy-dermatit">Контактный дерматит</a>
                                </li>
                                <li><a class="animated-hover" href="rukozha/piodermiya">Пиодермия</a></li>
                                <li><a class="animated-hover" href="rukozha/psoriaz">Псориаз</a></li>
                                <li><a class="animated-hover" href="rukozha/seboreyniy-dermatit">Себорейный дерматит</a>
                                </li>
                                <li><a class="animated-hover" href="rumo/giperaktivnyy-mochevoy-puzyr">Гиперактивный
                                        мочевой
                                        пузырь</a></li>
                                <li><a class="animated-hover" href="rumo/glomerulonefrit">Гломерулонефрит</a></li>
                                <li><a class="animated-hover" href="rumo/khronicheskaya-bolezn'-pochek">Хроническая
                                        болезнь
                                        почек</a></li>
                                <li><a class="animated-hover" href="rumo/luchevoy-tsistit">Лучевой цистит</a></li>
                                <li><a class="animated-hover" href="rumo/novoobrazovaniye-mochevogo-puzyrya">Новообразование
                                        мочевого пузыря</a></li>
                                <li><a class="animated-hover" href="rumo/novoobrazovaniye-pochki">Новообразование
                                        почки</a>
                                </li>
                                <li><a class="animated-hover" href="rumo/ostraya-pochechnaya-nedostatochnost">Острая
                                        почечная недостаточность</a></li>
                                <li><a class="animated-hover" href="rumo/pielonefrit">Пиелонефрит</a></li>
                                <li><a class="animated-hover" href="rumo/pochechnaya-kolika">Почечная колика</a></li>
                                <li><a class="animated-hover" href="rumo/tsistit">Цистит</a></li>
                                <li><a class="animated-hover" href="rumu/balanit">Баланит</a></li>
                                <li><a class="animated-hover" href="rumu/balanopostit">Баланопостит</a></li>
                                <li><a class="animated-hover" href="rumu/bolezn-Peironi">Болезнь Пейрони</a></li>
                                <li><a class="animated-hover" href="rumu/epididimit">Эпидидимит</a></li>
                                <li><a class="animated-hover" href="rumu/erektilnaya-disfunktsiya">Эректильная
                                        дисфункция</a></li>
                                <li><a class="animated-hover" href="rumu/fimoz">Фимоз</a></li>
                                <li><a class="animated-hover" href="rumu/gidrocele">Гидроцеле</a></li>
                                <li><a class="animated-hover" href="rumu/gipogonadizm">Гипогонадизм</a></li>
                                <li><a class="animated-hover" href="rumu/korotkaya-uzdechka-polovogo-chlena">Короткая
                                        уздечка полового члена</a></li>
                                <li><a class="animated-hover" href="rumu/novoobrazovanie-predstatelnoj-zhelezy">Новообразование
                                        предстательной железы </a></li>
                                <li><a class="animated-hover" href="rumu/novoobrazovaniye-yaichek">Новообразование
                                        яичка</a>
                                </li>
                                <li><a class="animated-hover" href="rumu/orkhit">Орхит</a></li>
                                <li><a class="animated-hover" href="rumu/parafimoz">Парафимоз</a></li>
                                <li><a class="animated-hover" href="rumu/perekrut">Перекрут яичка</a></li>
                                <li><a class="animated-hover" href="rumu/perelom-polovogo-chlena">Перелом полового
                                        члена</a>
                                </li>
                                <li><a class="animated-hover" href="rumu/priapizm">Приапизм</a></li>
                                <li><a class="animated-hover" href="rumu/prostatit">Простатит</a></li>
                                <li><a class="animated-hover" href="rumu/spermatotsele">Сперматоцеле</a></li>
                                <li><a class="animated-hover" href="rumu/striktura-uretry">Стриктура уретры</a></li>
                                <li><a class="animated-hover" href="rumu/uretrit">Уретрит</a></li>
                                <li><a class="animated-hover" href="rumu/ushib-moshonki">Ушиб мошонки</a></li>
                                <li><a class="animated-hover" href="rumu/ushib-polovogo-chlena">Ушиб полового члена</a>
                                </li>
                                <li><a class="animated-hover" href="rumu/ushib-v-oblasti-promezhnosti">Ушиб в области
                                        промежности</a></li>
                                <li><a class="animated-hover" href="rumu/varikocele">Варикоцеле</a></li>
                                <li><a class="animated-hover" href="run/bolezn-alcgejmera"> Болезнь Альцгеймера</a></li>
                                <li><a class="animated-hover" href="run/golovnaya-bol-napryazheniya">Головная боль
                                        напряжения</a></li>
                                <li><a class="animated-hover" href="run/klasternaya-golovnaya-bol">Кластерная головная
                                        боль</a></li>
                                <li><a class="animated-hover" href="run/migren">Мигрень</a></li>
                                <li><a class="animated-hover" href="run/parkinsonizm">Паркинсонизм</a></li>
                                <li><a class="animated-hover" href="run/pokhmelnyi-sindrom">Похмельный синдром</a></li>
                                <li><a class="animated-hover" href="run/polinejropatii">Полинейропатии</a></li>
                                <li><a class="animated-hover" href="run/posttravmaticheskaya-golovnaya-bol">Посттравматическая
                                        головная боль</a></li>
                                <li><a class="animated-hover" href="run/radikulopatii">Радикулопатии</a></li>
                                <li><a class="animated-hover" href="run/rasseyannyj-skleroz">Рассеянный склероз</a></li>
                                <li><a class="animated-hover" href="run/sindrom-khronicheskoĭ-ustalosti">Синдром
                                        хронической
                                        усталости</a></li>
                                <li><a class="animated-hover" href="run/sindrom-otmeny-kofeina">Синдром отмены
                                        кофеина</a>
                                </li>
                                <li><a class="animated-hover" href="run/ukachivaniye">Укачивание</a></li>
                                <li><a class="animated-hover" href="rupe/diskineziya-zhelchevyvodyashchikh-putei">Дискинезия
                                        желчевыводящих путей</a></li>
                                <li><a class="animated-hover" href="rupe/gepatit">Гепатит</a></li>
                                <li><a class="animated-hover" href="rupe/khronicheskiy-kholetsistit">Хронический
                                        холецистит</a></li>
                                <li><a class="animated-hover" href="rupe/ostryi-kholetsistit">Острый холецистит</a></li>
                                <li><a class="animated-hover" href="rupe/pervichnyj-skleroziruyushchij-holangit">Первичный
                                        склерозирующий холангит</a></li>
                                <li><a class="animated-hover" href="rupe/pervichnyy-biliarnyy-kholangit">Первичный
                                        билиарный
                                        холангит</a></li>
                                <li><a class="animated-hover" href="rupe/zhelchekamennaya-bolezn">Желчекаменная
                                        болезнь</a>
                                </li>

                                <li><a class="animated-hover" href="rupi/appendicit">Аппендицит</a></li>
                                <li><a class="animated-hover" href="rupi/celiakiya">Целиакия</a></li>
                                <li><a class="animated-hover" href="rupi/funkcionalnaya-dispepsiya">Функциональная
                                        диспепсия</a></li>
                                <li><a class="animated-hover" href="rupi/gastroezofagealnaya-reflyuksnaya-bolezn">Гастроэзофагеальная
                                        рефлюксная болезнь (ГЭРБ)</a></li>
                                <li><a class="animated-hover" href="rupi/gemorroj">Геморрой</a></li>
                                <li><a class="animated-hover" href="rupi/hronicheskij-pankreatit">Хронический
                                        панкреатит</a>
                                </li>
                                <li><a class="animated-hover" href="rupi/kishechnaya-neprohodimost">Кишечная
                                        непроходимость</a></li>
                                <li><a class="animated-hover" href="rupi/laktaznaya-nedostatochnost">Лактазная
                                        недостаточность</a></li>
                                <li><a class="animated-hover" href="rupi/novoobrazovanie-tolstoj-kishki">Новообразование
                                        толстой кишки</a></li>
                                <li><a class="animated-hover" href="rupi/ostryj-pankreatit">Острый панкреатит</a></li>
                                <li><a class="animated-hover" href="rupi/sindrom-razdrazhennogo-kishechnika">Синдром
                                        раздраженного кишечника</a></li>
                                <li><a class="animated-hover" href="rupi/vospalitelnoye-zabolevaniye-kishechnika">Неспецифические
                                        воспалительные заболевания кишечника</a></li>
                                <li><a class="animated-hover" href="rupi/yazva-zheludka-ili-dvenadtsatiperstnoy-kishki">Язва
                                        желудка или двенадцатиперстной кишки</a></li>
                                <li><a class="animated-hover" href="rur/alveolit-lunki-zuba">Альвеолит лунки зуба</a>
                                </li>
                                <li><a class="animated-hover" href="rur/flyuoroz">Флюороз</a></li>
                                <li><a class="animated-hover" href="rur/gingivit">Гингивит</a></li>
                                <li><a class="animated-hover" href="rur/kariyes">Кариес</a></li>
                                <li><a class="animated-hover" href="rur/pul'pit">Пульпит</a></li>
                                <li><a class="animated-hover" href="rur/stomatit">Стоматит</a></li>
                                <li><a class="animated-hover" href="rus/anemiya">Анемия</a></li>
                                <li><a class="animated-hover" href="rus/arterialnaya-gipertenziya">Артериальная
                                        гипертензия</a></li>
                                <li><a class="animated-hover" href="rus/ishemicheskaya-bolezn-serdca">Ишемическая
                                        болезнь
                                        сердца</a></li>
                                <li><a class="animated-hover" href="rus/khronicheskaya-serdechnaya-nedostatochnost'">Хроническая
                                        сердечная недостаточность</a></li>
                                <li><a class="animated-hover" href="rus/miokardit">Миокардит</a></li>
                                <li><a class="animated-hover" href="rus/narushenie-ritma-serdca">Нарушение ритма
                                        сердца</a>
                                </li>
                                <li><a class="animated-hover" href="rus/nejrocirkulyatornaya-distoniya">Нейроциркуляторная
                                        дистония</a></li>
                                <li><a class="animated-hover"
                                       href="rus/obliteriruyushchie-zabolevaniya-perifericheskih-arterij">Облитерирующие
                                        заболевания периферических артерий</a></li>
                                <li><a class="animated-hover"
                                       href="rus/ostraya-pochechnaya-nedostatochnost'-(povrezhdeniye)">Острая почечная
                                        недостаточность</a></li>
                                <li><a class="animated-hover" href="rus/ostroe-narushenie-mozgovogo-krovoobrashcheniya">Острое
                                        нарушение мозгового кровообращения</a></li>
                                <li><a class="animated-hover" href="rus/revmaticheskaya-lihoradka-s-porazheniem-serdca">Ревматическая
                                        лихорадка с поражением сердца</a></li>
                                <li><a class="animated-hover" href="rus/sindrom-rejno">Синдром Рейно</a></li>
                                <li><a class="animated-hover" href="rus/stenokardiya">Стенокардия</a></li>
                                <li><a class="animated-hover" href="rus/tromboehmboliya-legochnoj-arterii">Тромбоэмболия
                                        легочной артерии</a></li>
                                <li><a class="animated-hover"
                                       href="rus/varikoznoye-rasshireniye-ven-nizhnikh-konechnostey">Варикозное
                                        расширение вен нижних конечностей</a></li>
                                <li><a class="animated-hover" href="rut/perelom-bolshogo-paltsa-stopy">Перелом большого
                                        пальца стопы</a></li>
                                <li><a class="animated-hover"
                                       href="rut/perelom-distalnykh-kontsov-luchevoy-i-loktevoy-kosti">Перелом
                                        дистальных
                                        концов лучевой и локтевой кости</a></li>
                                <li><a class="animated-hover" href="rut/perelom-goleni">Перелом голени</a></li>
                                <li><a class="animated-hover" href="rut/perelom-lodyzhki">Перелом лодыжки</a></li>
                                <li><a class="animated-hover" href="rut/perelom-nadkolennika">Перелом надколенника</a>
                                </li>
                                <li><a class="animated-hover" href="rut/perelom-oblasti-plechevogo-sustava">Перелом в
                                        области плечевого сустава</a></li>
                                <li><a class="animated-hover" href="rut/perelom-paltsa-stopy">Перелом пальца стопы</a>
                                </li>
                                <li><a class="animated-hover" href="rut/perelom-sheiki-bedra">Перелом шейки бедра</a>
                                </li>
                                <li><a class="animated-hover" href="rut/perelomy">Переломы</a></li>
                                <li><a class="animated-hover" href="rut/rastyazheniye-svyazok-bolshogo-paltsa">Растяжение
                                        связок большого пальца стопы</a></li>
                                <li><a class="animated-hover" href="rut/rastyazheniye-svyazok-kisti">Растяжение связок
                                        кисти</a></li>
                                <li><a class="animated-hover" href="rut/rastyazheniye-svyazok-kolena">Растяжение связок
                                        колена</a></li>
                                <li><a class="animated-hover" href="rut/rastyazheniye-svyazok-lodyzhki">Растяжение
                                        связок
                                        лодыжки</a></li>
                                <li><a class="animated-hover" href="rut/rastyazheniye-svyazok-loktya">Растяжение связок
                                        локтя</a></li>
                                <li><a class="animated-hover" href="rut/rastyazheniye-svyazok-plechevogo-sustava">Растяжение
                                        связок плечевого сустава</a></li>
                                <li><a class="animated-hover" href="rut/rastyazheniye-svyazok-zapyastya">Растяжение
                                        связок
                                        запястья</a></li>
                                <li><a class="animated-hover" href="rut/travmy-svyazok">Травмы связок</a></li>
                                <li><a class="animated-hover" href="rut/ushib-kisti">Ушиб кисти</a></li>
                                <li><a class="animated-hover" href="rut/ushib-kolena">Ушиб колена</a></li>
                                <li><a class="animated-hover" href="rut/ushib-lodyzhki">Ушиб лодыжки</a></li>
                                <li><a class="animated-hover" href="rut/ushib-loktya">Ушиб локтя</a></li>
                                <li><a class="animated-hover" href="rut/ushib-myagkih-tkanei">Ушиб мягких тканей</a>
                                </li>
                                <li><a class="animated-hover" href="rut/ushib-paltsa-stopy">Ушиб пальца стопы</a></li>
                                <li><a class="animated-hover" href="rut/ushib-plecha">Ушиб плеча</a></li>
                                <li><a class="animated-hover" href="rut/ushib-predplech'ya">Ушиб предплечья</a></li>
                                <li><a class="animated-hover" href="rut/ushib-stopy">Ушиб стопы</a></li>
                                <li><a class="animated-hover" href="rut/ushib-v-raĭone-tazobedrennogo-sustava">Ушиб в
                                        районе
                                        тазобедренного сустава</a></li>
                                <li><a class="animated-hover" href="rut/ushib-zapyastya">Ушиб запястья</a></li>
                                <li><a class="animated-hover" href="ruu/bolezn-menera">Болезнь Меньера</a></li>
                                <li><a class="animated-hover" href="ruu/labirintit">Лабиринтит</a></li>
                                <li><a class="animated-hover" href="ruu/laringit">Ларингит</a></li>
                                <li><a class="animated-hover" href="ruu/mastoidit">Мастоидит</a></li>
                                <li><a class="animated-hover" href="ruu/naruzhnyj-otit">Наружный отит</a></li>
                                <li><a class="animated-hover" href="ruu/otoskleroz">Отосклероз</a></li>
                                <li><a class="animated-hover" href="ruu/sernaya-probka">Серная пробка</a></li>
                                <li><a class="animated-hover" href="ruu/sindrom-obstruktivnogo-nochnogo-apnoeh">Синдром
                                        обструктивного ночного апноэ</a></li>
                                <li><a class="animated-hover" href="ruu/sinusit">Синусит</a></li>
                                <li><a class="animated-hover"
                                       href="ruu/snizhenie-sluha-svyazannoe-s-vozdejstviem-shuma">Снижение
                                        слуха, связанное с воздействием шума</a></li>
                                <li><a class="animated-hover" href="ruu/srednij-otit">Средний отит</a></li>
                                <li><a class="animated-hover" href="ruu/tonzillit">Тонзиллит</a></li>
                                <li><a class="animated-hover" href="ruu/vazomotornyj-rinit">Вазомоторный ринит</a></li>
                                <li><a class="animated-hover" href="ruz/algodismenoreya">Дисменорея</a></li>
                                <li><a class="animated-hover" href="ruz/cervicit">Цервицит</a></li>
                                <li><a class="animated-hover" href="ruz/endometrioz">Эндометриоз</a></li>
                                <li><a class="animated-hover" href="ruz/giperandrogeniya-u-zhenshchin">Гиперандрогения у
                                        женщин</a></li>
                                <li><a class="animated-hover" href="ruz/mastit">Мастит</a></li>
                                <li><a class="animated-hover" href="ruz/novoobrazovanie-molochnoj-zhelezy">Новообразование
                                        молочной железы</a></li>
                                <li><a class="animated-hover" href="ruz/sindrom-polikistoznyh-yaichnikov">Синдром
                                        поликистозных яичников</a></li>
                                <li><a class="animated-hover" href="ruz/vaginit">Вагинит</a></li>
                                <li><a class="animated-hover" href="ruz/vospalitelnye-zabolevaniya-organov-malogo-taza">Воспалительные
                                        заболевания органов малого таза</a></li>
                            </ul>

                        </div>
                        <ul class="no-cols-list symptoms-list">
                            <div class="search search--symptoms">


                                </li>
                        </ul>
                    </div>
                    <div class="box-bg"></div>
                </div>
            </div>
        </div>
    </div> </div>
@endsection