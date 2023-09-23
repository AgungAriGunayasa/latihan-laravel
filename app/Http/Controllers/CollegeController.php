<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function index() {
        $title = "College";
        $infoawal = "Berawal dari bertemunya para pemerhati, pencinta dan praktisi pendidikan yakni Prof. Dr. Made Bandem, MA.,  (saat itu Rektor ISI Jogjakarta), Dr. Dadang Hermawan (praktisi pendidikan), Drs. Ida Bagus Dharmadiaksa, M.Si., Ak. (Dosen) dan Drs. Satria Dharma (praktisi pendidikan) pada tahun 2.000 yang begitu menaruh perhatian atas pesat dan dinamisnya perkembangan teknologi informasi dan komunikasi (TIK) di dunia termasuk di Indonesia dan Bali, namun di lain pihak perguruan tinggi bidang TIK sampai dengan jenjang sarjana belum ada.";
        $infotengah = "Maka pada tanggal 20 Mei 2001, berdirilah Yayasan Widya Dharma Shanti yang  akan menjadi Badan Penyenggara Perguruan Tinggi Swasta dan selanjutnya diajukanlah ijin pendirian Institut Teknologi dan Bisnis (ITB) STIKOM Bali kepada Direktorat Jenderal Pendidikan Tinggi Kementerian Pendidikan Nasional. Dengan berbagai usaha dan lika liku pengurusan ijin serta doa, maka pada tanggal 10 Agustus 2002 keluarlah ijin dimaksud dengan nomor 157/D/O/2002 dengan 2 jurusan / program studi yakni Sistem Komputer (jenjang S1) dan Manajemen Informatika (jenjang D3) lalu pada tahun 2009 ada tambahan program studi baru yakni Sistem Infomasi (jenjang S1).";
        $infoakhir = "Saat ini, Institut Teknologi dan Bisnis (ITB) STIKOM Bali sudah menjadi perguruan tinggi bertaraf internasional yang sangat dipercaya oleh masyarakat, terbukti dengan jumlah mahasiswa yang sedang kuliah tidak kurang dari 6.000 orang dan alumni yang mencapai hampir 4.000 orang (tahun 2015). Selain itu berbagai kerjasama dalam bidang tri dharma perguruan tinggi  telah dilakukan dengan berbagai pihak baik instansi pemerintah, instansi/perusahaan swasta, BUMN, BUMD, Perguruan Tinggi baik dalam maupun luar negeri.";

        $data['title'] = $title;
        $data['infoawal'] = $infoawal;
        $data['infotengah'] = $infotengah;
        $data['infoakhir'] = $infoakhir;

        return view('college', $data);
    }
}
