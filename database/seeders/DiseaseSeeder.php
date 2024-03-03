<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = array(
            array(
                "name_tm" => "Göwrelilik",
                "name_ru" => "Беременность",
                "name_en" => "Pregnancy",
                "link_tm" => "beremennost/index",
                "link_ru" => "rub\\index",
                "link_en" => "enb\\index",
                "image" => "pregnant.png",
            ),
            array(
                "name_tm" => "Göz",
                "name_ru" => "Глаза",
                "name_en" => "Eye",
                "link_tm" => "glaza/index",
                "link_ru" => "rug\\index",
                "link_en" => "eng\\index",
                "image" => "witness.png",
            ),
            array(
                "name_tm" => "Dem alyş ulgamy",
                "name_ru" => "Дыхательная система",
                "name_en" => "Respiratory system",
                "link_tm" => "dykhatelnaya-sistema/index",
                "link_ru" => "rud\\index",
                "link_en" => "end\\index",
                "image" => "respiratory-system.png",
            ),
            array(
                "name_tm" => "Zenan jyns ulgamy",
                "name_ru" => "Женская половая система и молочные железы",
                "name_en" => "Female reproductive system and mammary glands",
                "link_tm" => "zhenskaya-polovaya-sistema-i-molochnyye-zhelezy/index",
                "link_ru" => "ruz\\index",
                "link_en" => "enz\\index",
                "image" => "gynecology.png",
            ),
            array(
                "name_tm" => "Infeksiýa",
                "name_ru" => "Инфекции",
                "name_en" => "Infection",
                "link_tm" => "infektsii/index",
                "link_ru" => "rui\\index",
                "link_en" => "eni\\index",
                "image" => "infected.png",
            ),
            array(
                "name_tm" => "Deri",
                "name_ru" => "Кожа",
                "name_en" => "Skin",
                "link_tm" => "kozha/index",
                "link_ru" => "rukozha\\index",
                "link_en" => "enkozha\\index",
                "image" => "depilation.png",
            ),
            array(
                "name_tm" => "Süňkler, bogunlar we myşsalar",
                "name_ru" => "Кости, суставы и мышцы",
                "name_en" => "Bones, joints and muscles",
                "link_tm" => "kosti-sustavy-i-myshtsy/index",
                "link_ru" => "rukosti\\index",
                "link_en" => "enkosti\\index",
                "image" => "x-ray.png",
            ),
            array(
                "name_tm" => "Peşew ulgamy",
                "name_ru" => "Мочевыделительная система",
                "name_en" => "Urinary system",
                "link_tm" => "mochevydelitelnaya-sistema/index",
                "link_ru" => "rumo\\index",
                "link_en" => "enmo\\index",
                "image" => "urinary.png",
            ),
            array(
                "name_tm" => "Erkek jyns ulgamy",
                "name_ru" => "Мужская половая система",
                "name_en" => "Male reproductive system",
                "link_tm" => "muzhskaya-polovaya-sistema/index",
                "link_ru" => "rumu\\index",
                "link_en" => "enmu\\index",
                "image" => "reproductive-system.png",
            ),
            array(
                "name_tm" => "Nerw ulgamy",
                "name_ru" => "Нервная система",
                "name_en" => "Nervous system",
                "link_tm" => "nervnaya-sistema/index",
                "link_ru" => "run\\index",
                "link_en" => "enn\\index",
                "image" => "brain.png",
            ),
            array(
                "name_tm" => "Bagyr we öt ýollary",
                "name_ru" => "Печень и желчевыводящие пути",
                "name_en" => "Liver and biliary tract",
                "link_tm" => "pechen-i-zhelchevyvodyashchiye-puti/index",
                "link_ru" => "rupe\\index",
                "link_en" => "enpe\\index",
                "image" => "liver.png",
            ),
            array(
                "id" => 12,
                "name_tm" => "Iýmit siňdiriş ulgamy",
                "name_ru" => "Пищеварительная система",
                "name_en" => "Digestive system",
                "link_tm" => "pishchevaritelnaya-sistema/index",
                "link_ru" => "rupi\\index",
                "link_en" => "enpi\\index",
                "image" => "gastrointestinal-tract.png",
            ),
            array(
                "name_tm" => "Agyz boşlugy",
                "name_ru" => "Ротовая полость",
                "name_en" => "Oral cavity",
                "link_tm" => "rotovaya-polost/index",
                "link_ru" => "rur\\index",
                "link_en" => "enr\\index",
                "image" => "oral.png",
            ),
            array(
                "name_tm" => "Ýürek-damar ulgamy we gan",
                "name_ru" => "Сердечно-сосудистая система и кровь",
                "name_en" => "Cardiovascular system and blood",
                "link_tm" => "serdechno-sosudistaya-sistema-i-krov/index",
                "link_ru" => "rus\\index",
                "link_en" => "ens\\index",
                "image" => "heart.png",
            ),
            array(
                "name_tm" => "Döwük ýenjikler",
                "name_ru" => "Травмы и ушибы",
                "name_en" => "Injuries and bruises",
                "link_tm" => "travmy-i-ushiby/index",
                "link_ru" => "rut\\index",
                "link_en" => "ent\\index",
                "image" => "injury.png",
            ),
            array(
                "name_tm" => "Gulak, bokurdak, burun",
                "name_ru" => "Ухо, горло, нос",
                "name_en" => "Ear, throat, nose",
                "link_tm" => "ukho-gorlo-nos/index",
                "link_ru" => "ruu\\index",
                "link_en" => "enu\\index",
                "image" => "head.png",
            ),
            array(
                "name_tm" => "Endokrin bezleri",
                "name_ru" => "Эндокринные железы",
                "name_en" => "Endocrine glands",
                "link_tm" => "endokrinnyye-zhelezy/index",
                "link_ru" => "rue\\index",
                "link_en" => "ene\\index",
                "image" => "endocrine.png",
            ),
        );

        foreach ($categories as $category){
            Category::insert([
                'name_tm' => $category['name_tm'],
                'name_en' => $category['name_en'],
                'name_ru' => $category['name_ru'],
                'link_tm' => $category['link_tm'],
                'link_ru' => $category['link_ru'],
                'link_en' => $category['link_en'],
                'image' => $category['image'],
            ]);
        }
    }
}
