<?php

namespace App\Models;

# use Illuminate\Database\Eloquent\Factories\HasFactory;
#use Illuminate\Database\Eloquent\Model;

#class post extends Model
#{
    
#    use HasFactory;
#}

#Ceritanya representasi model yang menggunakan database
class post
{
    private static $post = [
        [
            "title" => "KEUNGGULAN ZAP LAUNDRY",
            "slug" => "keunggulan-ZAP-laundry",
            "author" => "iinarum",
            "body" => "Keunggulan kami antara lain pertama, Terdaftar resmi sebagai member ASLI (Asosiasi Laundry Indonesia) dengan No ID : A.3504.0518.01008. Kedua,Mesin Cuci FRONT LOADIN yang dikenal handal dan tidak merusak pakaian. Ketiga,Sudah memakai SETRIKA UAP dengan hasil setrika lebih licin, halus, rapi dan cepat serta tidak mengkilapkan kain. Keempat,Membantu MERINGANKAN pekerjaan Anda. Kelima, Membantu Anda lebih HEMAT air, listrik, tenaga & waktu. Keenam,FREE Antar Jemput Cucian. Ketujuh, GARANSI LAUNDRY. Kedelapan,Siap melayani jasa cuci EKSPRESS (4-5 JAM SELESAI)."  
           ],
        [
            "title" => "PAKET CUCIAN",
            "slug" => "paket-cucian",
            "author" => "iin&arum",
            "body" => "PAKET KILOAN (MULAI 2 Kg)
            1. Cuci Setrika (2hr)           : 5.000/kg
            2. Cuci Kering (2hr)            : 4.000/kg
            3. Setrika (2hr)                    : 4.000/kg
            4. Setrika Kilat (1hr)            : 8.000/kg
            5. Cuci Kering Kilat (1hr)     : 6.000/kg
            6. Cuci Setrika Kilat (1hr)    : 8.000/kg
            7. Cuci Kering Ekspres (4jam)  : 9.000/kg
            8. Cuci Setrika Ekspres (5jam) : 12.000/kg
            9. FREE ONGKIR KHUSUS AREA TULUNGAGUNG
            *FREE ongkir hanya utk pengambilan radius Max 5km dari tempat laundry
            *Selama pandemi kami kenakan biaya tambahan disinfectan demi keselamatan bersama"   
        ] 
        ];
    public static function all()
    {
        #jika properti bukan static maka menggunakan this->
        #karena properti di function tersebut adalah static maka digunakan self
        return collect(self::$post); #Menggunakan fungsi collection untuk membungkus array
    } 
    public static function find($slug)
    {
        $post = static::all(); #memanggil method all menggunakan static
        #$newpost = [];
        #foreach($post as $p) {
        #    if($p["slug"] === $slug) {
        #        $newpost = $p;
        #    }
        #}
        return $post->firstwhere('slug', $slug); #mengambil data yang pertama kali ditemukan


    }   
}


