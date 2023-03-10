<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurants = [
            [
                "id" => 1,
                "restaurant_name" => "Gocha Gocha Sunter",
                "restaurant_address" => "Jl. Danau Agung 2 No.73, RT.10/RW.11, Sunter Agung, Kec. Tj. Priok, Jakarta, Daerah Khusus Ibukota Jakarta 14350",
                "restaurant_city" => "Jakarta Utara",
                "restaurant_gmaps" => "https://goo.gl/maps/64mZudGBAaurs8vy7",
                "restaurant_whatsapp_link" => "https://wa.me/6285156320747/?text=Hai,%20kak!%20Saya%20ingin%20bertanya%20hari%20ini%20buka%20atau%20tidak,%20ya?%20",
                "restaurant_instagram_link" => "https://www.instagram.com/gochagocha.id/",
                "restaurant_tiktok_link" => NULL,
                "restaurant_gofood" => "https://gofood.co.id/en/jakarta/restaurant/gocha-gocha-f9a5999c-018d-4521-9034-118f403daafb",
                "restaurant_grabfood" => "https://food.grab.com/id/id/restaurant/gocha-gocha-sunter-agung-delivery/IDGFSTI000033bm",
                "restaurant_image" => "storage/images/restaurant/GochaGochaSunter.jpg",
                "restaurant_category_id" => 3,
            ],
            [
                "id" => 2,
                "restaurant_name" => "Bubur Angke THI",
                "restaurant_address" => "Jl. Taman Harapan Indah Blok BB No.6, RW.7, Jelambar Baru, Kec. Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11460",
                "restaurant_city" => "Jakarta Barat",
                "restaurant_gmaps" => "https://goo.gl/maps/4z41wnHwEAVvZiPp9",
                "restaurant_whatsapp_link" => "https://wa.me/628982506070/?text=Hai,%20kak!%20Saya%20ingin%20bertanya%20hari%20ini%20buka%20atau%20tidak,%20ya?%20",
                "restaurant_instagram_link" => "https://www.instagram.com/buburangkethi",
                "restaurant_tiktok_link" => "https://www.tiktok.com/@buburangkethi",
                "restaurant_gofood" => "https://gofood.co.id/jakarta/restaurant/bubur-angke-thi-9a023ebf-1bf2-49d6-ab6c-0a659e6131a7",
                "restaurant_grabfood" => "https://food.grab.com/id/id/restaurant/bubur-angke-thi-jelambar-delivery/IDGFSTI0000257f",
                "restaurant_image" => "storage/images/restaurant/BuburAngkeTHI.jpg",
                "restaurant_category_id" => 1,
            ],
            [
                "id" => 3,
                "restaurant_name" => "Wong Fu Kie",
                "restaurant_address" => "Jalan Perniagaan Timur 2 No. 22, RT.8/RW.1, Roa Malaka, Kec. Tambora, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11230",
                "restaurant_city" => "Jakarta Barat",
                "restaurant_gmaps" => "https://goo.gl/maps/frF19hpzUnywtmFT6",
                "restaurant_whatsapp_link" => "https://wa.me/6281218225502/?text=Hai,%20kak!%20Saya%20ingin%20bertanya%20hari%20ini%20buka%20atau%20tidak,%20ya?%20",
                "restaurant_instagram_link" => "https://www.instagram.com/wongfukie/",
                "restaurant_tiktok_link" => NULL,
                "restaurant_gofood" => NULL,
                "restaurant_grabfood" => NULL,
                "restaurant_image" => "storage/images/restaurant/WongFuKie.jpg",
                "restaurant_category_id" => 2,
            ],
            [
                "id" => 4,
                "restaurant_name" => "Shaburi",
                "restaurant_address" => "Jl. Puri Agung, RT.1/RW.2, Kembangan Selatan, Kembangan, Jakarta Barat, Jakarta 11610",
                "restaurant_city" => "Jakarta Barat",
                "restaurant_gmaps" => "https://goo.gl/maps/LUMiTXLu6EsbQ7RQ9",
                "restaurant_whatsapp_link" => "https://wa.me/6281281400355/?text=Hai,%20kak!%20Saya%20ingin%20bertanya%20hari%20ini%20buka%20atau%20tidak,%20ya?%20",
                "restaurant_instagram_link" => "https://www.instagram.com/shabu_shaburi/",
                "restaurant_tiktok_link" => NULL,
                "restaurant_gofood" => "https://gofood.co.id/id/jakarta/restaurant/shaburi-puri-indah-mall-12c0e911-538c-4d73-9a54-a196e0b43f82",
                "restaurant_grabfood" => "https://food.grab.com/id/id/restaurant/shaburi-puri-indah-mall-delivery/6-CYXEL3LULYK1C2",
                "restaurant_image" => "storage/images/restaurant/Shaburi.jpg",
                "restaurant_category_id" => 3,
            ],
            [
                "id" => 5,
                "restaurant_name" => "Koko Hawker Muara Karang",
                "restaurant_address" => "Jalan Niaga, Blok Z4 Utara No. 07 Pasar Muara Karang RT.13 12, Pluit, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14450",
                "restaurant_city" => "Jakarta Utara",
                "restaurant_gmaps" => "https://goo.gl/maps/RdUPWueMyfiYXhcWA",
                "restaurant_whatsapp_link" => "https://wa.me/6281510088554/?text=Hai,%20kak!%20Saya%20ingin%20bertanya%20hari%20ini%20buka%20atau%20tidak,%20ya?%20",
                "restaurant_instagram_link" => "https://www.instagram.com/koko.hawker/",
                "restaurant_tiktok_link" => NULL,
                "restaurant_gofood" => "https://gofood.co.id/id/jakarta/restaurant/koko-hawker-muara-karang-2208742b-3cb2-4d04-972a-55833ef2b662",
                "restaurant_grabfood" => "https://food.grab.com/id/id/restaurant/koko-hawker-muara-karang-delivery/IDGFSTI00003lj3",
                "restaurant_image" => "storage/images/restaurant/KokoHawkerMuaraKarang.jpg",
                "restaurant_category_id" => 1,
            ],
            [
                "id" => 6,
                "restaurant_name" => "Meat a Meat",
                "restaurant_address" => "Tenda Taman Sunter Indah Tenda Paling Ujung, Daerah Khusus Ibukota Jakarta 14360",
                "restaurant_city" => "Jakarta Utara",
                "restaurant_gmaps" => "https://goo.gl/maps/BXvaDRcZLAcCBp79A",
                "restaurant_whatsapp_link" => "https://wa.me/6281316606052/?text=Hai,%20kak!%20Saya%20ingin%20bertanya%20hari%20ini%20buka%20atau%20tidak,%20ya?%20",
                "restaurant_instagram_link" => "https://www.instagram.com/meatameat.id",
                "restaurant_tiktok_link" => "https://www.tiktok.com/@meatameat.id",
                "restaurant_gofood" => NULL,
                "restaurant_grabfood" => NULL,
                "restaurant_image" => "storage/images/restaurant/MeatAMeat.jpeg",
                "restaurant_category_id" => 4,
            ],
            [
                "id" => 7,
                "restaurant_name" => "Beef Boss",
                "restaurant_address" => "Jl. Asia Afrika No.19, RW.3, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270",
                "restaurant_city" => "Jakarta Pusat",
                "restaurant_gmaps" => "https://goo.gl/maps/B1psTEYXQzTF4TQz5",
                "restaurant_whatsapp_link" => "https://wa.me/6281327588055/?text=Hai,%20kak!%20Saya%20ingin%20bertanya%20hari%20ini%20buka%20atau%20tidak,%20ya?%20",
                "restaurant_instagram_link" => "https://www.instagram.com/beefboss_id",
                "restaurant_tiktok_link" => NULL,
                "restaurant_gofood" => "https://gofood.co.id/jakarta/restaurant/beef-boss-senayan-city-2dc3c8e7-d82d-4049-8fe2-243304abae9a",
                "restaurant_grabfood" => NULL,
                "restaurant_image" => "storage/images/restaurant/BeefBoss.jpg",
                "restaurant_category_id" => 3,
            ],
            [
                "id" => 8,
                "restaurant_name" => "Fogo Brazilian BBQ",
                "restaurant_address" => "Ground Floor Mall Kelapa Gading 1, Jl. Boulevard Raya No.58A, RW.18, Klp. Gading Tim., Kec. Klp. Gading, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14240",
                "restaurant_city" => "Jakarta Utara",
                "restaurant_gmaps" => "https://goo.gl/maps/9Vbby7MKrPH8C29p7",
                "restaurant_whatsapp_link" => "https://wa.me/628111320022/?text=Hai,%20kak!%20Saya%20ingin%20bertanya%20hari%20ini%20buka%20atau%20tidak,%20ya?%20",
                "restaurant_instagram_link" => "https://www.instagram.com/fogo_id",
                "restaurant_tiktok_link" => NULL,
                "restaurant_gofood" => "https://gofood.co.id/en/jakarta/restaurant/fogo-brazilian-bbq-kelapa-gading-58af39c8-f81f-453c-95b2-1d03b051c4b5",
                "restaurant_grabfood" => "https://food.grab.com/id/id/restaurant/fogo-brazilian-bbq-kelapa-gading-mall-kelapa-gading-1-delivery/6-C2LYJ2JKTJWVKE",
                "restaurant_image" => "storage/images/restaurant/FogoBrazilianBBQ.jpg",
                "restaurant_category_id" => 3,
            ],
            [
                "id" => 9,
                "restaurant_name" => "RUMAH MAKAN SEDAP MALAM SURABAYA (H. AFIF)",
                "restaurant_address" => "Pasar Jaya Bukit Duri Puteran, Jl. Manyar No.346, RT.7/RW.2, Manggarai, Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12850",
                "restaurant_city" => "Jakarta Selatan",
                "restaurant_gmaps" => "https://goo.gl/maps/6ZPUzfY6GZdb8yiF8",
                "restaurant_whatsapp_link" => "https://wa.me/6281519944433/?text=Hai,%20kak!%20Saya%20ingin%20bertanya%20hari%20ini%20buka%20atau%20tidak,%20ya?%20",
                "restaurant_instagram_link" => NULL,
                "restaurant_tiktok_link" => NULL,
                "restaurant_gofood" => "https://gofood.co.id/id/jakarta/restaurant/rm-sedap-malam-surabaya-cak-afif-c71505af-0496-4e70-9385-4ce3c50ff53f",
                "restaurant_grabfood" => NULL,
                "restaurant_image" => "storage/images/restaurant/RumahMakanSedapMalamSurabaya.jpg",
                "restaurant_category_id" => 1,
            ],
            [
                "id" => 10,
                "restaurant_name" => "Fudgy Bro",
                "restaurant_address" => "Ruko Kelapa Gading Boulevard Raya, Blok PA. 1, Jl. Boulevard Raya, RT.2/RW.14, Pegangsaan Dua, Kec. Klp. Gading, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14240",
                "restaurant_city" => "Jakarta Utara",
                "restaurant_gmaps" => "https://goo.gl/maps/SQHkaP32qgKtAUh66",
                "restaurant_whatsapp_link" => "https://wa.me/6285693668362/?text=Hai,%20kak!%20Saya%20ingin%20bertanya%20hari%20ini%20buka%20atau%20tidak,%20ya?%20",
                "restaurant_instagram_link" => "https://www.instagram.com/fudgybro",
                "restaurant_tiktok_link" => "https://www.tiktok.com/@fudgybro",
                "restaurant_gofood" => "https://gofood.co.id/id/jakarta/restaurant/fudgybro-kelapa-gading-1a45bd12-e6c2-49f9-a622-53eb94e0cdbe",
                "restaurant_grabfood" => NULL,
                "restaurant_image" => "storage/images/restaurant/FudgyBro.jpg",
                "restaurant_category_id" => 6,
            ],
            [
                "id" => 11,
                "restaurant_name" => "Kinsei Japanese Dining",
                "restaurant_address" => "Kinsei, Golf Island, Jalan Pulau Untung RB2V No 17 & 18, Jakarta, DKI Jakarta 14470",
                "restaurant_city" => "Jakarta Utara",
                "restaurant_gmaps" => "https://goo.gl/maps/rJnDySeasNNv5i3R7",
                "restaurant_whatsapp_link" => "https://wa.me/6281223456668/?text=Hai,%20kak!%20Saya%20ingin%20bertanya%20hari%20ini%20buka%20atau%20tidak,%20ya?%20",
                "restaurant_instagram_link" => "https://www.instagram.com/kinsei_id",
                "restaurant_tiktok_link" => "https://www.tiktok.com/@kinsei_id",
                "restaurant_gofood" => NULL,
                "restaurant_grabfood" => NULL,
                "restaurant_image" => "storage/images/restaurant/KinseiJapaneseDining.jpg",
                "restaurant_category_id" => 3,
            ],
            [
                "id" => 12,
                "restaurant_name" => "Ippudo - Central Park",
                "restaurant_address" => "11470 Daerah Khusus Ibukota Jakarta, Lower Ground East Tunnel Unit L-124 Jl. Let. Jend. S. Parman I.Kav.28, RT.12/RW.6 Tj. Duren Selatan",
                "restaurant_city" => "Jakarta Barat",
                "restaurant_gmaps" => "https://goo.gl/maps/rJnDySeasNNv5i3R7",
                "restaurant_whatsapp_link" => "https://wa.me/6281291814161/?text=Hai,%20kak!%20Saya%20ingin%20bertanya%20hari%20ini%20buka%20atau%20tidak,%20ya?%20",
                "restaurant_instagram_link" => "https://www.instagram.com/ippudoindonesia",
                "restaurant_tiktok_link" => NULL,
                "restaurant_gofood" => "https://gofood.co.id/jakarta/restaurant/ippudo-central-park-mall-6a282930-7242-4966-917e-a055b5958ffe",
                "restaurant_grabfood" => "https://food.grab.com/id/id/restaurant/ippudo-central-park-mall-delivery/IDGFSTI00001x5y",
                "restaurant_image" => "storage/images/restaurant/IppudoCentralPark.jpg",
                "restaurant_category_id" => 3,
            ],
            [
                "id" => 13,
                "restaurant_name" => "Nasi Ayam Dewata",
                "restaurant_address" => "Jl danau sunter utara A36D no 39, RT.11/RW.9, Sunter Agung, Daerah Khusus Ibukota Jakarta 14350",
                "restaurant_city" => "Jakarta Utara",
                "restaurant_gmaps" => "https://goo.gl/maps/xSaD9LDSVjb1MR9K6",
                "restaurant_whatsapp_link" => "https://wa.me/6289520839708/?text=Hai,%20kak!%20Saya%20ingin%20bertanya%20hari%20ini%20buka%20atau%20tidak,%20ya?%20",
                "restaurant_instagram_link" => "https://www.instagram.com/nasiayamdewata",
                "restaurant_tiktok_link" => NULL,
                "restaurant_gofood" => "https://gofood.co.id/id/jakarta/restaurant/nasi-ayam-dewata-oleh-raja-rawit-sunter-9cde69e1-e9b4-43f4-affc-7b0dd36309ff",
                "restaurant_grabfood" => "https://food.grab.com/id/id/restaurant/nasi-ayam-dewata-oleh-raja-rawit-sunter-agung-delivery/6-C22UVRATNBVKSA",
                "restaurant_image" => "storage/images/restaurant/NasiAyamDewata.jpg",
                "restaurant_category_id" => 1,
            ],
            [
                "id" => 14,
                "restaurant_name" => "Restoran Angke - Kedoya",
                "restaurant_address" => "Jl. Panjang Arteri No.77, Duri Kepa, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11510",
                "restaurant_city" => "Jakarta Barat",
                "restaurant_gmaps" => "https://goo.gl/maps/FMME562ckXUP9o9R7",
                "restaurant_whatsapp_link" => "https://wa.me/6282211883030/?text=Hai,%20kak!%20Saya%20ingin%20bertanya%20hari%20ini%20buka%20atau%20tidak,%20ya?%20",
                "restaurant_instagram_link" => "https://www.instagram.com/angkerestaurant",
                "restaurant_tiktok_link" => "https://www.tiktok.com/@angkerestaurant",
                "restaurant_gofood" => NULL,
                "restaurant_grabfood" => NULL,
                "restaurant_image" => "storage/images/restaurant/RestoranAngkeKedoya.jpg",
                "restaurant_category_id" => 2,
            ],
            [
                "id" => 15,
                "restaurant_name" => "Soto Betawi Nyonya Afung Muara Karang",
                "restaurant_address" => "Jl. Pluit Karang Utara No. 135A-B, RT.20/RW.2, Pluit, Kec. Penjaringan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14450",
                "restaurant_city" => "Jakarta Utara",
                "restaurant_gmaps" => "https://goo.gl/maps/5f7aiKc8s4avXWSN7",
                "restaurant_whatsapp_link" => "https://wa.me/62818623864/?text=Hai,%20kak!%20Saya%20ingin%20bertanya%20hari%20ini%20buka%20atau%20tidak,%20ya?%20",
                "restaurant_instagram_link" => "https://www.instagram.com/sotoafung",
                "restaurant_tiktok_link" => NULL,
                "restaurant_gofood" => "https://gofood.co.id/jakarta/restaurant/soto-betawi-nyonya-afung-muara-karang-6f9cfc88-75c7-4046-92ba-2719f7c2004c",
                "restaurant_grabfood" => "https://food.grab.com/id/id/restaurant/soto-betawi-nyonya-afung-muara-karang-delivery/6-CY51BBECRXNULX",
                "restaurant_image" => "storage/images/restaurant/SotoBetawiNyonyaAfungMuaraKarang.jpg",
                "restaurant_category_id" => 1,
            ],
            [
                "id" => 16,
                "restaurant_name" => "Hakata Ikkousha PIK",
                "restaurant_address" => "PIK Golf Island. Rukan Beach Boulevard Blok F, No. 35, Kamal Muara, Jakarta, Daerah Khusus Ibukota Jakarta 14460",
                "restaurant_city" => "Jakarta Utara",
                "restaurant_gmaps" => "https://goo.gl/maps/b8DmgkqKFVyqUivH6",
                "restaurant_whatsapp_link" => "https://wa.me/6281310001098/?text=Hai,%20kak!%20Saya%20ingin%20bertanya%20hari%20ini%20buka%20atau%20tidak,%20ya?%20",
                "restaurant_instagram_link" => "https://www.instagram.com/ikkousharamen",
                "restaurant_tiktok_link" => NULL,
                "restaurant_gofood" => "https://gofood.co.id/id/jakarta/restaurant/hakata-ikkousha-701e0781-7155-4c08-a94a-b67e6753838d",
                "restaurant_grabfood" => NULL,
                "restaurant_image" => "storage/images/restaurant/HakataIkkoushaPIK.jpg",
                "restaurant_category_id" => 3,
            ],
            [
                "id" => 17,
                "restaurant_name" => "The Gentlepig PIK",
                "restaurant_address" => "Golf Island PIK Beach Boulevard Blok B-22 Jakarta, Daerah Khusus Ibukota Jakarta 14470",
                "restaurant_city" => "Jakarta Utara",
                "restaurant_gmaps" => "https://goo.gl/maps/a9wBaEwdr1VVRiQZ7",
                "restaurant_whatsapp_link" => "https://wa.me/628113536899/?text=Hai,%20kak!%20Saya%20ingin%20bertanya%20hari%20ini%20buka%20atau%20tidak,%20ya?%20",
                "restaurant_instagram_link" => "https://www.instagram.com/thegentlepig",
                "restaurant_tiktok_link" => NULL,
                "restaurant_gofood" => "https://gofood.co.id/id/jakarta/restaurant/the-gentlepig-golf-island-pik-caf57c6e-24b0-4403-91fa-c1ec55ba1f68",
                "restaurant_grabfood" => NULL,
                "restaurant_image" => "storage/images/restaurant/TheGentlepigPIK.jpeg",
                "restaurant_category_id" => 5,
            ],
            [
                "id" => 18,
                "restaurant_name" => "Ichi-San Ramen",
                "restaurant_address" => "Jl. Tanjung Duren Raya No.135a, Tj. Duren Sel., Kec. Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11470",
                "restaurant_city" => "Jakarta Barat",
                "restaurant_gmaps" => "https://goo.gl/maps/VgLzrD4JXhmywcFc7",
                "restaurant_whatsapp_link" => "https://wa.me/62895335164540/?text=Hai,%20kak!%20Saya%20ingin%20bertanya%20hari%20ini%20buka%20atau%20tidak,%20ya?%20",
                "restaurant_instagram_link" => "https://www.instagram.com/ichisan.ramen",
                "restaurant_tiktok_link" => "https://www.tiktok.com/@ichisan.ramen",
                "restaurant_gofood" => "https://gofood.co.id/id/jakarta/restaurant/ichisan-ramen-tanjung-duren-f5c91603-6df1-4623-9d87-c22363633744",
                "restaurant_grabfood" => "https://food.grab.com/id/id/restaurant/ichisan-tanjung-duren-selatan-delivery/6-C2T1MGCECPD1CX",
                "restaurant_image" => "storage/images/restaurant/IchisanRamen.jpeg",
                "restaurant_category_id" => 3,
            ],
            [
                "id" => 19,
                "restaurant_name" => "The Good House Restaurant",
                "restaurant_address" => "Ruko Mall Of Indonesia Blok C no 41, 42, 43 Across Lobby 2 MOI, Daerah Khusus Ibukota Jakarta 14240",
                "restaurant_city" => "Jakarta Utara",
                "restaurant_gmaps" => "https://goo.gl/maps/rH5JaAfKvRJEAQV66",
                "restaurant_whatsapp_link" => "https://wa.me/628112290909/?text=Hai,%20kak!%20Saya%20ingin%20bertanya%20hari%20ini%20buka%20atau%20tidak,%20ya?%20",
                "restaurant_instagram_link" => "https://www.instagram.com/thegoodhouse.jkt",
                "restaurant_tiktok_link" => "https://www.tiktok.com/@thegoodhouse.jkt",
                "restaurant_gofood" => NULL,
                "restaurant_grabfood" => NULL,
                "restaurant_image" => "storage/images/restaurant/TheGoodHouseRestaurant.jpg",
                "restaurant_category_id" => 2,
            ],
            [
                "id" => 20,
                "restaurant_name" => "LYMA - Cideng Timur",
                "restaurant_address" => "Jl. Cideng Timur No.57, RT.4/RW.6, Petojo Sel., Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10160",
                "restaurant_city" => "Jakarta Pusat",
                "restaurant_gmaps" => "https://goo.gl/maps/oxJdqjTrm57PEdKT7",
                "restaurant_whatsapp_link" => "https://wa.me/6285215155755/?text=Hai,%20kak!%20Saya%20ingin%20bertanya%20hari%20ini%20buka%20atau%20tidak,%20ya?%20",
                "restaurant_instagram_link" => "https://www.instagram.com/lyma.jkt/?hl=en",
                "restaurant_tiktok_link" => NULL,
                "restaurant_gofood" => "https://gofood.co.id/id/jakarta/restaurant/brisket-lyma-cideng-timur-f57adc2b-b760-4149-a83f-a6a9211a2f9a",
                "restaurant_grabfood" => NULL,
                "restaurant_image" => "storage/images/restaurant/LYMACidengTimur.jpg",
                "restaurant_category_id" => 4,
            ]
        ];

        foreach($restaurants as $restaurant){
            Restaurant::insert($restaurant);
        }
    }
}
