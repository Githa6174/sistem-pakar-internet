<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KnowledgeBaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('options')->delete();
        DB::table('questions')->delete();
        DB::table('diagnoses')->delete();

        // === 1. DEFINISIKAN SEMUA DIAGNOSIS ===
        DB::table('diagnoses')->insert([
            ['id' => 1, 'title' => 'Masalah Perangkat Tunggal', 'description' => 'Masalah terisolasi di perangkat Anda. Coba restart perangkat tersebut, periksa pengaturan WiFi/LAN, atau "Forget Network" lalu sambungkan ulang.'],
            ['id' => 2, 'title' => 'Terselesaikan dengan Reboot', 'description' => 'Masalah teratasi. Kemungkinan modem/router Anda hanya "hang". Ini masalah umum yang selesai dengan reboot.'],
            ['id' => 3, 'title' => 'Masalah Koneksi Perangkat', 'description' => 'Masalah ada pada konfigurasi koneksi di perangkat Anda (gagal mendapatkan IP). Masalah teratasi setelah "Forget Network".'],
            ['id' => 4, 'title' => 'Masalah Router (DHCP)', 'description' => 'Kemungkinan masalah ada di Router (gagal memberikan IP/DHCP). Coba reboot router. Jika masih gagal, hubungi teknisi.'],
            ['id' => 5, 'title' => 'Masalah Kecepatan/FUP', 'description' => 'Kemungkinan Bandwidth (FUP) Anda habis atau sedang terjadi Saturasi Jaringan. Coba cek penggunaan di aplikasi ISP Anda.'],
            ['id' => 6, 'title' => 'Masalah DNS Bawaan ISP', 'description' => 'Ini mengindikasikan DNS Bawaan ISP sedang bermasalah. Anda bisa menunggu atau mencoba mengganti DNS di perangkat Anda ke (misal: 1.1.1.1).'],
            ['id' => 7, 'title' => 'Kerusakan Fisik Kabel', 'description' => 'Ditemukan Masalah Fisik Kabel (tertekuk/putus/longgar). Ini harus ditangani teknisi. Segera hubungi Call Center ISP Anda.'],
            ['id' => 8, 'title' => 'Gangguan Massal ISP', 'description' => 'Ini adalah Gangguan Massal ISP. Koneksi dari pusat (sentral) ke rumah Anda terputus. Silakan hubungi Call Center ISP Anda.'],
            ['id' => 9, 'title' => 'Pemblokiran/Rute ISP', 'description' => 'Situs tersebut kemungkinan diblokir oleh ISP Anda (Internet Positif) atau ada masalah rute ke server luar negeri.'],
            ['id' => 10, 'title' => 'Anomali Tidak Dikenal', 'description' => 'Ini anomali. Lampu normal, koneksi normal, tapi situs umum tidak bisa diakses. Coba Restart Perangkat Anda (bukan router).'],
        ]);

        // === 2. DEFINISIKAN SEMUA PERTANYAAN ===
        DB::table('questions')->insert([
            ['id' => 1, 'text' => 'Apakah *semua* perangkat di rumah Anda tidak bisa terkoneksi, atau hanya *satu* perangkat saja?'],
            ['id' => 2, 'text' => 'Lihat lampu indikator pada modem/router. Apakah lampu "Internet" (globe 🌍) menyala **merah** atau **mati**?'],
            ['id' => 3, 'text' => 'Sudahkah Anda mencoba me-reboot (cabut daya 30 detik) modem/router Anda?'],
            ['id' => 4, 'text' => 'Setelah di-reboot, apakah lampu "Internet" (globe 🌍) sekarang menyala **hijau stabil**?'],
            ['id' => 5, 'text' => 'Pada perangkat Anda, apakah status WiFi "Terhubung" tetapi ada **tanda seru (!)** atau "Tidak ada internet"?'],
            ['id' => 6, 'text' => 'Coba "Lupakan Jaringan" (Forget Network) dan sambungkan kembali. Apakah tanda seru (!) hilang?'],
            ['id' => 7, 'text' => 'Anda terhubung normal, tapi apakah Anda sama sekali tidak bisa membuka situs apapun, atau hanya beberapa situs/aplikasi saja?'],
            ['id' => 8, 'text' => 'Apakah internet terasa **sangat lambat**, atau benar-benar tidak bisa memuat halaman (timeout)?'],
            ['id' => 9, 'text' => 'Periksa kabel utama yang masuk ke modem. Apakah terlihat tertekuk tajam, putus, atau longgar?'],
            ['id' => 10, 'text' => 'Situs yang tidak bisa diakses, apakah itu situs luar negeri, situs streaming, atau yang mungkin diblokir?'],
        ]);

        // === 3. DEFINISIKAN SEMUA OPSI/ATURAN ===
        DB::table('options')->insert([
            ['question_id' => 1, 'text' => 'Hanya Satu Perangkat', 'next_question_id' => null, 'diagnosis_id' => 1],
            ['question_id' => 1, 'text' => 'Semua Perangkat', 'next_question_id' => 2, 'diagnosis_id' => null],
            ['question_id' => 2, 'text' => 'Ya (Merah / Mati)', 'next_question_id' => 3, 'diagnosis_id' => null],
            ['question_id' => 2, 'text' => 'Tidak (Hijau Stabil)', 'next_question_id' => 5, 'diagnosis_id' => null],
            ['question_id' => 3, 'text' => 'Belum, saya akan coba', 'next_question_id' => 4, 'diagnosis_id' => null],
            ['question_id' => 3, 'text' => 'Sudah, tapi masih Merah', 'next_question_id' => 9, 'diagnosis_id' => null],
            ['question_id' => 4, 'text' => 'Ya, sekarang Hijau Stabil', 'next_question_id' => null, 'diagnosis_id' => 2],
            ['question_id' => 4, 'text' => 'Tidak, masih Merah / Mati', 'next_question_id' => 9, 'diagnosis_id' => null],
            ['question_id' => 5, 'text' => 'Ya, ada tanda seru (!)', 'next_question_id' => 6, 'diagnosis_id' => null],
            ['question_id' => 5, 'text' => 'Tidak, terhubung normal', 'next_question_id' => 7, 'diagnosis_id' => null],
            ['question_id' => 6, 'text' => 'Ya, tanda seru hilang & normal', 'next_question_id' => null, 'diagnosis_id' => 3],
            ['question_id' => 6, 'text' => 'Tidak, masih ada tanda seru', 'next_question_id' => null, 'diagnosis_id' => 4],
            ['question_id' => 7, 'text' => 'Hanya beberapa situs/aplikasi', 'next_question_id' => 10, 'diagnosis_id' => null],
            ['question_id' => 7, 'text' => 'Semua situs tidak bisa dibuka', 'next_question_id' => 8, 'diagnosis_id' => null],
            ['question_id' => 8, 'text' => 'Sangat Lambat', 'next_question_id' => null, 'diagnosis_id' => 5],
            ['question_id' => 8, 'text' => 'Tidak bisa memuat sama sekali (Timeout)', 'next_question_id' => null, 'diagnosis_id' => 6],
            ['question_id' => 9, 'text' => 'Ya, kabel terlihat rusak / longgar', 'next_question_id' => null, 'diagnosis_id' => 7],
            ['question_id' => 9, 'text' => 'Tidak, kabel terlihat aman', 'next_question_id' => null, 'diagnosis_id' => 8],
            ['question_id' => 10, 'text' => 'Ya (situs luar/streaming/diblokir)', 'next_question_id' => null, 'diagnosis_id' => 9],
            ['question_id' => 10, 'text' => 'Bukan, situs biasa (misal: Google) juga tidak bisa', 'next_question_id' => null, 'diagnosis_id' => 10],
        ]);
    }
}