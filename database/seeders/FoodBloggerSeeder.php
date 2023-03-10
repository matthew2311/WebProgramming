<?php

namespace Database\Seeders;

use App\Models\FoodBlogger;
use Illuminate\Database\Seeder;

class FoodBloggerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $food_bloggers = [
            [
                "id" => 1,
                "food_blogger_name" => "Nex Carlos",
                "food_blogger_description" => "Nex Carlos lahir pada tanggal 4 November 1986. Youtuber kuliner ini menargetkan tempat makanan enak tersembunyi atau yang sering disebut Hidden Gem. Berawal dari video 'CUMA NASI SAMA TELOR TAPI YANG MAKAN RAME!!!!'  yang membuatnya terkenal dengan lebih dari 18 juta views, ia menjadi youtuber kuliner sampai saat ini dan membuka usaha kuliner 'Ayam Gedebuk' dan 'Minum Cui'.",
                "food_blogger_ig_link" => "https://www.instagram.com/nexcarlos/",
                "food_blogger_tiktok_link" => "https://www.tiktok.com/@nex.carlos",
                "food_blogger_youtube_link" => "https://www.youtube.com/@NexCarlos",
                "food_blogger_image" => "storage/images/foodblogger/NexCarlos.jpg",
            ],
            [
                "id" => 2,
                "food_blogger_name" => "Ken & Grat",
                "food_blogger_description" => "Ken & Grat merintis karir sebagai Youtuber sejak 29 September 2015 yang diawali dengan hobi mereka untuk makan. Sampai saat ini, Ken & Grat telah memiliki 2,69 juta subscriber dan memiiki beberapa bisnis di bidang kuliner (Nyayap) dan real estate (Wangsa Serpong).",
                "food_blogger_ig_link" => "https://www.instagram.com/kenandgrat/",
                "food_blogger_tiktok_link" => "https://www.tiktok.com/@kenandgratt",
                "food_blogger_youtube_link" => "https://www.youtube.com/@Kenandgrat",
                "food_blogger_image" => "storage/images/foodblogger/Ken_Grat.jpg",
            ],
            [
                "id" => 3,
                "food_blogger_name" => "Cindy Lulaby",
                "food_blogger_description" => "Cindy Lulaby adalah seorang food blogger yang membahas makanan dari semua level mulai dari makanan yang kekinian sampai dengan makanan dengan harga terjangkau yang ada di daerah-daerah.",
                "food_blogger_ig_link" => "https://www.instagram.com/cnlulaby/",
                "food_blogger_tiktok_link" => "https://www.tiktok.com/@cnlulaby",
                "food_blogger_youtube_link" => NULL,
                "food_blogger_image" => "storage/images/foodblogger/CindyLulaby.jpg",
            ],
            [
                "id" => 4,
                "food_blogger_name" => "Mgdalenaf",
                "food_blogger_description" => "Mgdalenaf lahir pada 29 April 1994 di di Bekasi, Jawa Barat dengan nama asli Magdalena Fridawati. Sukses sebagai YouTuber, latar belakang pendidikannya sama sekali tidak berhubungan dengan pekerjaannya sekarang. Mgdalenaf rajin membuat konten-konten seputar makanan, salah satunya mukbang. Ia mengaku suka makan, dan bahkan rela terbang dari ujung barat hingga timur Indonesia demi mencicipi beragam makanan khas Tanah Air.",
                "food_blogger_ig_link" => "https://www.instagram.com/mgdalenaf/",
                "food_blogger_tiktok_link" => "https://www.tiktok.com/@mgdalenafofficial",
                "food_blogger_youtube_link" => "https://www.youtube.com/@user-uo6ib1tm9h",
                "food_blogger_image" => "storage/images/foodblogger/Mgdalenaf.jpg",
            ],
            [
                "id" => 5,
                "food_blogger_name" => "Tanboy Kun",
                "food_blogger_description" => "Bara Ilham Bakti Perkasaa S.E. atau lebih dikenal dengan nama Tanboy Kun (lahir 18 November 1993) adalah seorang kreator konten dan naravlog kuliner (food vlogger) asal Indonesia. Ciri khasnya yaitu konten mukbang dengan bercita rasa pedas, porsi yang super besar dan super banyak yang porsi makannya tidak seperti manusia pada umumnya.",
                "food_blogger_ig_link" => "https://www.instagram.com/tanboy_kun",
                "food_blogger_tiktok_link" => "https://www.tiktok.com/@tanboykun_asli",
                "food_blogger_youtube_link" => "https://www.youtube.com/@tanboykun",
                "food_blogger_image" => "storage/images/foodblogger/TanboyKun.jpg",
            ],
            [
                "id" => 6,
                "food_blogger_name" => "Audrey Karenina",
                "food_blogger_description" => "Audrey Karenina adalah salah satu food blogger yang aktif pada instagram dan tiktok mempromosikan berbagai macam tempat makanan maupun makanan yang enak di Indonesia.",
                "food_blogger_ig_link" => "https://www.instagram.com/audreykareninaa",
                "food_blogger_tiktok_link" => "https://www.tiktok.com/@audreykareninaa",
                "food_blogger_youtube_link" => NULL,
                "food_blogger_image" => "storage/images/foodblogger/AudreyKarenina.jpeg",
            ],
            [
                "id" => 7,
                "food_blogger_name" => "Foodirectory",
                "food_blogger_description" => "Foodirectory dibuat oleh Windy Iwandi yang memiliki ketertarikan untuk mengeksplorasi makanan dan tempat-tempat menarik.",
                "food_blogger_ig_link" => "https://www.instagram.com/foodirectory/",
                "food_blogger_tiktok_link" => "https://www.tiktok.com/@foodirectory",
                "food_blogger_youtube_link" => "https://www.youtube.com/c/FOODIRECTORY",
                "food_blogger_image" => "storage/images/foodblogger/Foodirectory.jpeg",
            ],
            [
                "id" => 8,
                "food_blogger_name" => "Vinny Laurencia",
                "food_blogger_description" => "Kulinersamacici dibuat oleh Vinny Laurencia atau yang akrab dipanggil Vinny. Food blogger ini lahir pada tanggal 1 September 1999. Selain sebagai food blogger, ia juga memiliki bisnis kuliner yaitu burger geprek.",
                "food_blogger_ig_link" => "https://www.instagram.com/kulinersamacici/",
                "food_blogger_tiktok_link" => "https://www.tiktok.com/@kulinersamacici",
                "food_blogger_youtube_link" => "https://www.youtube.com/@kulinersamacici",
                "food_blogger_image" => "storage/images/foodblogger/VinnyLaurencia.jpg",
            ],
            [
                "id" => 9,
                "food_blogger_name" => "Foodventurer",
                "food_blogger_description" => "Foodventurer dibuat oleh Prawnche yang memiliki ketertarikan pada food, travel, dan lifestyle. Ia juga membuat blog untuk ikut menyalurkan ketertarikannya di https://foodventurer.me/",
                "food_blogger_ig_link" => "https://www.instagram.com/foodventurer_",
                "food_blogger_tiktok_link" => "https://www.tiktok.com/@prawnche",
                "food_blogger_youtube_link" => NULL,
                "food_blogger_image" => "storage/images/foodblogger/Foodventurer.jpg",
            ],
            [
                "id" => 10,
                "food_blogger_name" => "Anak Jajan",
                "food_blogger_description" => "Anakjajan dibuat oleh Julia Veronica dan Marius Tjenderasa yang memiliki ketertarikan pada food, travel, dan lifestyle. Mereka juga membuat blog untuk ikut menyalurkan ketertarikannya di https://anakjajan.com/.",
                "food_blogger_ig_link" => "https://www.instagram.com/anakjajan/",
                "food_blogger_tiktok_link" => "https://www.tiktok.com/@anakjajan",
                "food_blogger_youtube_link" => "https://www.youtube.com/@ANAKJAJANdiary",
                "food_blogger_image" => "storage/images/foodblogger/AnakJajan.jpg",
            ],
            [
                "id" => 11,
                "food_blogger_name" => "Shelby Wu",
                "food_blogger_description" => "Shelby adalah seorang content creator instagram yang tidak hanya bergerak dalam bidang makanan tetapi dia juga membuat informasi-informasi terkait kemitraan dari tempat yang dia kunjungi.",
                "food_blogger_ig_link" => "https://www.instagram.com/shelby.wu",
                "food_blogger_tiktok_link" => "https://www.tiktok.com/@shelby.wu",
                "food_blogger_youtube_link" => "https://www.youtube.com/@shelbywu",
                "food_blogger_image" => "storage/images/foodblogger/ShelbyWu.jpg",
            ],
            [
                "id" => 12,
                "food_blogger_name" => "Big Tummy Culinary",
                "food_blogger_description" => "BigTummy_culinary atau yang biasa dipanggil Ken adalah content Creator yang mulanya bergerak pada sosial media instagram yang dapat dengan cepatnya mencapai angka followernya yang tinggi karena konten-konten kulinernya yang menarik.",
                "food_blogger_ig_link" => "https://www.instagram.com/bigtummy_culinary",
                "food_blogger_tiktok_link" => "https://www.tiktok.com/@bigtummyculinary",
                "food_blogger_youtube_link" => "https://www.youtube.com/@tingchannel9908",
                "food_blogger_image" => "storage/images/foodblogger/BigTummyCulinary.jpeg",
            ],
            [
                "id" => 13,
                "food_blogger_name" => "Felix Setiawan (@kokokuliner)",
                "food_blogger_description" => "Lelaki asal Bandung yang sudah memulai kegiatan food blogging sejak tahun 2016 ini merupakan salah satu food blogger yang terampil dalam memanfaatkan ceruk market dari food blogging. Dia percaya bahwa industri review kuliner di Indonesia dapat berkembang pesat.",
                "food_blogger_ig_link" => "https://www.instagram.com/kokokuliner",
                "food_blogger_tiktok_link" => "https://www.tiktok.com/@kokokuliner",
                "food_blogger_youtube_link" => "https://www.youtube.com/@KokokulinerOfficial",
                "food_blogger_image" => "storage/images/foodblogger/KokoKuliner.jpg",
            ],
        ];

        foreach($food_bloggers as $food_blogger){
            FoodBlogger::insert($food_blogger);
        }
    }
}
