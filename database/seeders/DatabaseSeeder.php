<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Arum Tiyas',
            'email' => 'arum.tiyas.handayani-2020@fst.unair.ac.id',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Iin Mardiyana',
            'email' => 'iin.mardiyana-2020@fst.unair.ac.id',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Company',
            'slug' => 'company'
        ]);

        Category::create([
            'name' => 'Location',
            'slug' => 'location'
        ]);

        Category::create([
            'name' => 'Rate',
            'slug' => 'rate'
        ]);

        post::create([
            'title' => 'About ZAP',
            'slug' => 'about-zap',
            'excerpt' => 'ZAP berdiri pada tahun 2016, merupakan bisnis laundry yang fokus utamanya menjalankan bisnis cuci setrika kiloan untuk pakaian kotor. Namun, saat ini ZAP sendiri telah mengembangkan bisnisnya dengan menambah beberapa layanan diantaranya cuci sofa, cuci tas dan sepatu, serta house general cleaning. Pelanggan terbanyak ZAP adalah mahasiswa UIN SATU Tulungagung',
            'body' => '</p> ZAP berdiri pada tahun 2016, merupakan bisnis laundry yang fokus utamanya menjalankan bisnis cuci setrika kiloan untuk pakaian kotor. Namun, saat ini ZAP sendiri telah mengembangkan bisnisnya dengan menambah beberapa layanan diantaranya cuci sofa, cuci tas dan sepatu, serta house general cleaning. Pelanggan terbanyak ZAP adalah mahasiswa UIN SATU Tulungagung dan Universitas Bhineka PGRI Tulungagung, karena lokasi ZAP yang dekat dengan asrama mahasiswa.
            <br> Apa Keunggulan ZAP?
            <ol type="1">
            <li>Terdaftar resmi sebagai member ASLI (Asosiasi Laundry Indonesia) dengan ID: A.3504.0518.01008</li>
            <li>Mesin cuci Front Loading yang dikenal handal dan tidak merusak pakaian</li>
            <li>Sudah memakai Setrika Uap dengan hasil setrika lebih licin, halus, rapi dan cepat serta tidak mengkilapkan kain</li>
            <li>Membantu meringankan pekerjaan Anda</li>
            <li>Membantu Anda lebih hemat air, listrik, tenaga dan waktu</li>
            <li>Free antar jemput cucian</li>
            <li>Garansi laundry</li>
            <li>Siap melayani jasa cuci “Express” (4-5 jam selesai)</li></ol></p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        post::create([
            
            'title' => 'General Cleaning Rumah Dr. Agus',
            'slug' => 'general-cleaning',
            'excerpt' => 'ZAP telah mendapatkan kepercayaan untuk menangani general clening di rumah Dr. Agus. Proses general cleaning tentu saja membutuhkan tenaga ahli yang profesional, berpengalaman, ',
            'body' => 'ZAP telah mendapatkan kepercayaan untuk menangani general clening di rumah Dr. Agus. Proses general cleaning tentu saja membutuhkan tenaga ahli yang profesional, berpengalaman, berkomitmen dan berkompeten di bidang kebersihan. Untuk itu, jasa pembersihan ZAP sangat dibutuhkan untuk melakukan general cleaning ini.
            Mengapa Memilih ZAP untuk General Cleaning?
            1.	Pekerjaan detil dengan 40 checklist untuk seluruh ruangan
            2.	Semua alat dan bahan dari kami
            3.	Staff profesional dan berpengalaman
            4.	Proses pengerjaan yang cepat (kurang dari 3 hari)
            ',
            'category_id' => 2,
            'user_id' => 1
        ]);

        post::create([
            
            'title' => 'Cuci Sofa BRI Tulungagung',
            'slug' => 'cuci-sofa',
            'excerpt' => 'ZAP telah mendapatkan kepercayaan untuk mencuci sofa di BRI Tulungagung. ZAP menawarkan layanan-layanan yang sangat menarik, seperti cuci sofa, bantal, karpet, bahkan tirai jendela, baik',
            'body' => 'ZAP telah mendapatkan kepercayaan untuk mencuci sofa di BRI Tulungagung. ZAP menawarkan layanan-layanan yang sangat menarik, seperti cuci sofa, bantal, karpet, bahkan tirai jendela, baik di rumah maupun kantor.
            Proses Cuci Sofa by ZAP:
            1.	Dry Vacum
            Dry vacum adalah proses penyedotan debu menggunakan mesin vacum mode kering. Proses jasa cuci sofa ini bertujuan untuk mengangkat debu-debu yang menempel pada sofa Anda. Proses ini penting dilakukan agar saat proses penggosokan shampo, debu-debu tidak ikut tergesek yang dapat menyebabkan kulit sofa Anda rusak.
            2.	Chemical Polish
            Proses kedua merupakan proses pemberian shampo untuk mengangkat kotoran-kotoran membandel yang ada pada sofa Anda. Proses jasa cuci sofa ini juga dapat mengangkat debu-debu yang sudah berkerak sehingga sofa Anda akan bersih kembali. Selain itu, shampo yang kami gunakan juga mampu mengangkat kuman-kuman atau bakteri jahat yang menempel pada sofa Anda.
            3.	Wet Vacum
            Proses jasa cuci sofa berikutnya adalah wet vacum dimana kami menyedot sisa-sisa shampo yang tercampur dengan kotoran. Pada tahap ini, seluruh kotoran pada sofa Anda akan terangkat sehingga sofa Anda menjadi bersih kembali. Jasa cuci sofa kami menggunakan shampo khusus untuk sofa yang tidak merusak kulit sofa Anda.
            4.	Spraying Pewangi
            Setelah semua bekas shampo dan kotoran terangkat melalui proses wet vacum, langkah jasa cuci sofa berikutnya adalah pemberian pewangi pada sofa menggunakan metode spraying. Kami menyediakan beberapa pilihan pewangi yang dapat Anda sesuaikan dengan selera Anda. Salah satu keunggulan jasa cuci sofa di ZAP adalah tersedianya beberapa pilihan pewangi.
            5.	Angin-angin
            Proses jasa cuci sofa terakhir adalah proses angin-angin dimana sofa yang kami cuci tingkat kekeringannya berkisar 90% sehingga butuh diangin-anginkan agar sofa Anda kering 100%. Proses ini dapat dibantu menggunakan kipas angin atau AC ditempat Anda. Tunggu hingga 3-4 jam maka sofa Anda akan kering 100%. Jasa cuci sofa kami tidak termasuk kipas angin sehingga saat proses angin-angin dapat menggunakan kipas angin atau AC Anda sendiri.
            ',
            'category_id' => 3,
            'user_id' => 2
        ]);

        post::create([
            
            'title' => 'Cuci Sepatu',
            'slug' => 'cuci-sepatu',
            'excerpt' => 'Sepatu sebagai alas kaki yang berguna sebagai pelindung kaki sekaligus penambah gaya agar penampilan lebih menarik. Terdapat berbagai jenis sepatu. Mulai dari sepatu sneaker, boots,',
            'body' => 'Sepatu sebagai alas kaki yang berguna sebagai pelindung kaki sekaligus penambah gaya agar penampilan lebih menarik. Terdapat berbagai jenis sepatu. Mulai dari sepatu sneaker, boots, safety, sport dan lain-lain. Bahan dari sepatu tersebut pun pasti beragam, perawatan atau cara membersihkannya tentu akan disesuaikan dengan bahan sepatu tersebut. Bahan sepatu suede (bahan sepatu yang berasal dari kulit hewan) akan beda cara membersihkannya dengan jenis sepatu sneaker yang gampang kotor.
            Banyak orang yang sering mencuci sepatu dengan cara direndam, dicuci basah dengan deterjen pakaian atau sabun cuci piring. Cara seperti itu akan merusak kondisi sepatu karena penggunaan bahan pencuci yang tidak tepat pada bahan sepatu dapat mengakibatkan pudarnya warna atau kerusakan pada bahan sepatu tersebut atau bahkan dapat merusak jahitan pada sepatu, dan juga pemakaian air yang berlebihan juga akan mengakibatkan sol pada sepatu mudah terbuka.
            Begitu pula halnya dengan tas, kami selalu melakukan treatment dengan menggunakan bahan-bahan chemical yang sesuai dengan bahan tasnya.
            ZAP menyediakan layanan cuci sepatu dan tas yang menggunakan bahan dan alat pencuci khusus yang disesuaikan dengan bahan-bahan sepatu dan tas yang tentunya aman.
            ',
            'category_id' => 3,
            'user_id' => 2
        ]);
        
    }
}
