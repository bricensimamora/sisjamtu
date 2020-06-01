<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tabels_model');
        
    }

    public function index()
    {
        $data["tabels"] = $this->tabels_model->get_all();
        $data["active"] = "dashboard";
        $this->load->view('kuesioner/kuesioner_header');
        $this->load->view('kuesioner/kuesioner_sidebar', $data);
        $this->load->view('kuesioner/tabel_3a2');
        $this->load->view('kuesioner/kuesioner_footer');
    }

    public function t($tabel = null)
    {
        if ($tabel === null) {
            redirect("kuesioner");
        } else
        {
            if (file_exists(VIEWPATH."kuesioner/tabel_".$tabel.".php"))
            {
                $data["tabels"] = $this->tabels_model->get_all();
                $data["active"] = $tabel;
                $this->load->view('kuesioner/kuesioner_header');
                $this->load->view('kuesioner/kuesioner_sidebar', $data);
                $this->load->view('kuesioner/tabel_'.$tabel);
                $this->load->view('kuesioner/kuesioner_footer');
            } else
            {
                redirect("kuesioner");
            }
        }
    }

    public function p()
    {
        var_dump($this->input->post());
    }

    public function tabel_ps()
    {
        if ($this->input->post('submit')) {
            $this->load->model('tabelps_model');
            $arr_jenis_prodi = $this->input->post('jenisProdi');
            $arr_nama_prodi = $this->input->post('namaProdi');
            $arr_status = $this->input->post('status');
            $arr_tanggal_sk = $this->input->post('tanggalSK');
            $arr_tanggal_exp = $this->input->post('tanggalExp');
            $arr_jumlah_mhs = $this->input->post('jumlahMhs');
            $arr_insert = [];
            if (!empty($arr_jenis_prodi) && !empty($arr_nama_prodi) && !empty($arr_status) && !empty($arr_tanggal_sk) && !empty($arr_tanggal_exp) && !empty($arr_jumlah_mhs)) {
                foreach ($arr_nama_prodi as $key => $value) {
                    $data_prodi = [
                        'jenisProdi' => $arr_jenis_prodi[$key],
                        'namaProdi' => $value,
                        'status' => $arr_status[$key],
                        'tanggalSk' => date('d-m-Y',strtotime($arr_tanggal_sk[$key])),
                        'tanggalKadaluarsa' => date('d-m-Y',strtotime($arr_tanggal_exp[$key])),
                        'jumlahMahasiswa' => $arr_jumlah_mhs[$key]
                    ];
                    $arr_insert[] = $this->tabelps_model->insert($data_prodi);
                }
                if ($arr_insert) {
                    redirect('daftartabel', 'refresh');
                } else {
                    redirect('beranda', 'refresh');
                }
                
            } else {
                echo '<p>ada yang empty</p>';
                var_dump(!empty($arr_jenis_prodi));
                var_dump(!empty($arr_nama_prodi));
                var_dump(!empty($arr_status));
                var_dump(!empty($arr_tanggal_sk));
                var_dump(!empty($arr_tanggal_exp));
                var_dump(!empty($arr_jumlah_mhs));
            }

        } else {
            redirect('kuesioner');
        }
    }

    public function tabel_1_1()
    {
        if ($this->input->post('submit')) {
            $this->load->model('Tabelkerjasamapendidikan_model', 'kerjasama_model');

            $arr_namaMitra = $this->input->post('namaMitra');
            $arr_tingkat = $this->input->post('tingkat');
            $arr_judul = $this->input->post('judul');
            $arr_manfaat = $this->input->post('manfaat');
            $arr_durasi = $this->input->post('durasi');
            $arr_bukti = $this->input->post('bukti');
            $arr_tahun = $this->input->post('tahun');

            $arr_insert = [];
            if (!empty($arr_namaMitra) && !empty($arr_tingkat) && !empty($arr_judul) && !empty($arr_manfaat) && !empty($arr_durasi) && !empty($arr_bukti) && !empty($arr_tahun)) {
                foreach ($arr_namaMitra as $key => $value) {

                    $inter = "";
                    $nasional = "";
                    $wilayah = "";

                    if ($arr_tingkat[$key] == 1) {
                        $inter = "V";
                    } elseif ($arr_tingkat[$key] == 2) {
                        $nasional = "V";
                    } elseif ($arr_tingkat[$key] == 3) {
                        $wilayah = "V";
                    }

                    $data_mitra = [
                        'lembagaMitra' => $value,
                        'tingkatInternasional' => $inter,
                        'tingkatNasional' => $nasional,
                        'tingkatWilayah' => $wilayah,
                        'judulKegiatanKerjasama' => $arr_judul[$key],
                        'manfaat' => $arr_manfaat[$key],
                        'waktuDurasi' => $arr_durasi[$key],
                        'buktiKerjasama' => $arr_bukti[$key],
                        'tahunBerakhirKerjasama' => $arr_tahun[$key]
                    ];
                    $arr_insert[] = $this->kerjasama_model->insert($data_mitra);
                }
                if ($arr_insert) {
                    redirect('daftartabel', 'refresh');
                } else {
                    redirect('beranda', 'refresh');
                }
                
            } else {
                echo '<p>ada yang empty</p>';
                var_dump($this->input->post());
            }

        } else {
            redirect('kuesioner');
        }
    }

    public function tabel_1_2()
    {
        if ($this->input->post('submit')) {
            $this->load->model('Tabelkerjasamapenelitian_model', 'kerjasama_model');

            $arr_namaMitra = $this->input->post('namaMitra');
            $arr_tingkat = $this->input->post('tingkat');
            $arr_judul = $this->input->post('judul');
            $arr_manfaat = $this->input->post('manfaat');
            $arr_durasi = $this->input->post('durasi');
            $arr_bukti = $this->input->post('bukti');
            $arr_tahun = $this->input->post('tahun');

            $arr_insert = [];
            if (!empty($arr_namaMitra) && !empty($arr_tingkat) && !empty($arr_judul) && !empty($arr_manfaat) && !empty($arr_durasi) && !empty($arr_bukti) && !empty($arr_tahun)) {
                foreach ($arr_namaMitra as $key => $value) {

                    $inter = "";
                    $nasional = "";
                    $wilayah = "";

                    if ($arr_tingkat[$key] == 1) {
                        $inter = "V";
                    } elseif ($arr_tingkat[$key] == 2) {
                        $nasional = "V";
                    } elseif ($arr_tingkat[$key] == 3) {
                        $wilayah = "V";
                    }

                    $data_mitra = [
                        'lembagaMitra' => $value,
                        'tingkatInternasional' => $inter,
                        'tingkatNasional' => $nasional,
                        'tingkatWilayah' => $wilayah,
                        'judulKegiatanKerjasama' => $arr_judul[$key],
                        'manfaat' => $arr_manfaat[$key],
                        'waktuDurasi' => $arr_durasi[$key],
                        'buktiKerjasama' => $arr_bukti[$key],
                        'tahunBerakhirKerjasama' => $arr_tahun[$key]
                    ];
                    $arr_insert[] = $this->kerjasama_model->insert($data_mitra);
                }
                if ($arr_insert) {
                    redirect('daftartabel', 'refresh');
                } else {
                    redirect('beranda', 'refresh');
                }
                
            } else {
                echo '<p>ada yang empty</p>';
                var_dump($this->input->post());
            }

        } else {
            redirect('kuesioner');
        }
    }

    public function tabel_1_3()
    {
        if ($this->input->post('submit')) {
            $this->load->model('Tabelkerjasamapengabdian_model', 'kerjasama_model');

            $arr_namaMitra = $this->input->post('namaMitra');
            $arr_tingkat = $this->input->post('tingkat');
            $arr_judul = $this->input->post('judul');
            $arr_manfaat = $this->input->post('manfaat');
            $arr_durasi = $this->input->post('durasi');
            $arr_bukti = $this->input->post('bukti');
            $arr_tahun = $this->input->post('tahun');

            $arr_insert = [];
            if (!empty($arr_namaMitra) && !empty($arr_tingkat) && !empty($arr_judul) && !empty($arr_manfaat) && !empty($arr_durasi) && !empty($arr_bukti) && !empty($arr_tahun)) {
                foreach ($arr_namaMitra as $key => $value) {

                    $inter = "";
                    $nasional = "";
                    $wilayah = "";

                    if ($arr_tingkat[$key] == 1) {
                        $inter = "V";
                    } elseif ($arr_tingkat[$key] == 2) {
                        $nasional = "V";
                    } elseif ($arr_tingkat[$key] == 3) {
                        $wilayah = "V";
                    }

                    $data_mitra = [
                        'lembagaMitra' => $value,
                        'tingkatInternasional' => $inter,
                        'tingkatNasional' => $nasional,
                        'tingkatWilayah' => $wilayah,
                        'judulKegiatanKerjasama' => $arr_judul[$key],
                        'manfaat' => $arr_manfaat[$key],
                        'waktuDurasi' => $arr_durasi[$key],
                        'buktiKerjasama' => $arr_bukti[$key],
                        'tahunBerakhirKerjasama' => $arr_tahun[$key]
                    ];
                    $arr_insert[] = $this->kerjasama_model->insert($data_mitra);
                }
                if ($arr_insert) {
                    redirect('daftartabel', 'refresh');
                } else {
                    redirect('beranda', 'refresh');
                }
                
            } else {
                echo '<p>ada yang empty</p>';
                var_dump($this->input->post());
            }

        } else {
            redirect('kuesioner');
        }
    }

    public function tabel_2a()
    {
        if ($this->input->post('submit'))
        {
            $this->load->model('Tabelseleksi_model', 'seleksi_model');

            $akademik = $this->input->post('tahunAkademik');
            $tampung = $this->input->post('tampung');
            $pendaftar = $this->input->post('pendaftar');
            $lulus = $this->input->post('lulus');
            $baruReguler = $this->input->post('baruReguler');
            $baruTransfer = $this->input->post('baruTransfer');
            $aktifReguler = $this->input->post('aktifReguler');
            $aktifTransfer = $this->input->post('aktifTransfer');

            $insert = [];

            foreach ($akademik as $key => $value) {
                $data = [
                    'tahunAkademik' => $value,
                    'dayaTampung' => $tampung[$key],
                    'pendaftar' => $pendaftar[$key],
                    'lulusSeleksi' => $lulus[$key],
                    'regulerMahasiswaBaru' => $baruReguler[$key],
                    'transferMahasiswaBaru' => $baruTransfer[$key],
                    'regulerMahasiswaAktif' => $aktifReguler[$key],
                    'transferMahasiswaAktif' => $aktifTransfer[$key],
                ];

                $insert[] = $this->seleksi_model->insert($data);
            }

            if ($insert) {
                redirect('daftartabel', 'refresh');
            } else {
                redirect('beranda', 'refresh');
            }
        } else {
            redirect('kuesioner');
        }
    }

    public function tabel_2b()
    {
        if ($this->input->post('submit'))
        {
            $this->load->model('Tabelmahasiswaasing_model', 'asing_model');

            $namaProdi = $this->input->post('namaProdi');
            $aktifTS2 = $this->input->post('aktifTS2');
            $aktifTS1= $this->input->post('aktifTS1');
            $aktifTS = $this->input->post('aktifTS');
            $fullTS2 = $this->input->post('fullTS2');
            $fullTS1 = $this->input->post('fullTS1');
            $fullTS = $this->input->post('fullTS');
            $partTS2 = $this->input->post('partTS2');
            $partTS1 = $this->input->post('partTS1');
            $partTS = $this->input->post('partTS');

            $insert = [];

            foreach ($namaProdi as $key => $value) {
                $data = [
                    'programStudi' => $value,
                    'mahasiswaAktifTS2' => $aktifTS2[$key],
                    'mahasiswaAktifTS1' => $aktifTS1[$key],
                    'mahasiswaAktifTS' => $aktifTS[$key],
                    'mahasiswaAsingFullTS2' => $fullTS2[$key],
                    'mahasiswaAsingFullTS1' => $fullTS1[$key],
                    'mahasiswaAsingFullTS' => $fullTS[$key],
                    'mahasiswaAsingPartTimeTS2' => $partTS2[$key],
                    'mahasiswaAsingPartTimeTS1' => $partTS1[$key],
                    'mahasiswaAsingPartTimeTS' => $partTS[$key]
                ];

                $insert[] = $this->asing_model->insert($data);
            }

            if ($insert) {
                redirect('daftartabel', 'refresh');
            } else {
                redirect('beranda', 'refresh');
            }
        } else {
            redirect('kuesioner');
        }
    }
    
    public function tabel_3a1()
    {
        if ($this->input->post('submit'))
        {
            $this->load->model('Tabeldosentetap_model', 'dosen_model');

            $nama = $this->input->post('nama');
            $nidn = $this->input->post('nidn');
            $magister= $this->input->post('magister');
            $doktor = $this->input->post('doktor');
            $keahlian = $this->input->post('keahlian');
            $kesesuaianInti = $this->input->post('kesesuaianInti');
            $jabatan = $this->input->post('jabatan');
            $sertifikatPendidik = $this->input->post('sertifikatPendidik');
            $sertifikatKompetensi = $this->input->post('sertifikatKompetensi');
            $mataKuliah = $this->input->post('mataKuliah');
            $kesesuaianBidang = $this->input->post('kesesuaianBidang');
            $matkulPSlain = $this->input->post('matkulPSlain');

            $insert = [];

            foreach ($nidn as $key => $value) {
                $data = [
                    'namaDosen' => $nama[$key],
                    'nidnNidk' => $value,
                    'magister' => $magister[$key],
                    'doktor' => $doktor[$key],
                    'bidangKeahlian' => $keahlian[$key],
                    'kesesuaianKompetensi' => $kesesuaianInti[$key],
                    'jabatanAkademik' => $jabatan[$key],
                    'sertifikatPendidikan' => $sertifikatPendidik[$key],
                    'sertifikatKompetensi' => $sertifikatKompetensi[$key],
                    'matkulDiampu' => $mataKuliah[$key],
                    'kesesuaianKeahlianMatkul' => $kesesuaianBidang[$key],
                    'matkulDiampuLain' => $matkulPSlain[$key]
                ];

                $insert[] = $this->dosen_model->insert($data);
            }

            if ($insert) {
                redirect('daftartabel', 'refresh');
            } else {
                redirect('beranda', 'refresh');
            }
        } else {
            redirect('kuesioner');
        }
    }

    public function tabel_3a2()
    {
        if ($this->input->post('submit'))
        {
            $this->load->model('Tabeldosenpembimbing_model', 'dosen_model');

            $nama = $this->input->post('nama');
            $psTS2 = $this->input->post('psTS2');
            $psTS1= $this->input->post('psTS1');
            $psTS = $this->input->post('psTS');
            $lainTS2 = $this->input->post('lainTS2');
            $lainTS1 = $this->input->post('lainTS1');
            $lainTS = $this->input->post('lainTS');

            $insert = [];

            foreach ($nama as $key => $value) {
                $data = [
                    'namaDosen' => $value,
                    'jumlahMahasiswaTS2' => $psTS2[$key],
                    'jumlahMahasiswaTS1' => $psTS1[$key],
                    'jumlahMahasiswaTS' => $psTS[$key],
                    'rerata' => round(($psTS2[$key]+$psTS1[$key]+$psTS[$key])/3, 1),
                    'jumlahMahasiswaLainTS2' => $lainTS2[$key],
                    'jumlahMahasiswaLainTS1' => $lainTS1[$key],
                    'jumlahMahasiswaLainTS' => $lainTS[$key],
                    'rerataLain' => round(($lainTS2[$key]+$lainTS1[$key]+$lainTS[$key])/3, 1),
                    'rerataTotal' => round(($psTS2[$key]+$psTS1[$key]+$psTS[$key]+$lainTS2[$key]+$lainTS1[$key]+$lainTS[$key])/6, 1)
                ];

                $insert[] = $this->dosen_model->insert($data);
            }

            if ($insert) {
                redirect('daftartabel', 'refresh');
            } else {
                redirect('beranda', 'refresh');
            }
        } else {
            redirect('kuesioner');
        }
    }

    public function tabel_3a3()
    {
        if ($this->input->post('submit'))
        {
            $this->load->model('Tabelwaktumengajar_model', 'dosen_model');

            $nama = $this->input->post('nama');
            $dtps = $this->input->post('dtps');
            $psAkreditasi= $this->input->post('psAkreditasi');
            $psLain = $this->input->post('psLain');
            $psKampusLain = $this->input->post('psKampusLain');
            $penelitian = $this->input->post('penelitian');
            $pkm = $this->input->post('pkm');
            $tugas = $this->input->post('tugas');
            
            $insert = [];

            foreach ($nama as $key => $value) {
                $jumlah = $psAkreditasi[$key]+$psLain[$key]+$psLain[$key]+$psKampusLain[$key]+$penelitian[$key]+$pkm[$key];
                $data = [
                    'namaDosen' => $value,
                    'dtps' => $dtps[$key],
                    'psAkreditasi' => $psAkreditasi[$key],
                    'psLain' => $psLain[$key],
                    'psLainLuar' => $psKampusLain[$key],
                    'penelitian' => $penelitian[$key],
                    'pkm' => $pkm[$key],
                    'tugasTambahan' => $tugas[$key],
                    'jumlah' => round($jumlah),
                    'rerata' => round($jumlah/2, 1)
                ];

                $insert[] = $this->dosen_model->insert($data);
            }

            if ($insert) {
                redirect('daftartabel', 'refresh');
            } else {
                redirect('beranda', 'refresh');
            }
        } else {
            redirect('kuesioner');
        }
    }

    public function tabel_3a4()
    {
        if ($this->input->post('submit'))
        {
            $this->load->model('Tabeldosentidaktetap_model', 'dosen_model');

            $nama = $this->input->post('nama');
            $nidn = $this->input->post('nidn');
            $pendidikan= $this->input->post('pendidikan');
            $keahlian = $this->input->post('keahlian');
            $jabatan = $this->input->post('jabatan');
            $sertifikatPendidik = $this->input->post('sertifikatPendidik');
            $sertifikatKompetensi = $this->input->post('sertifikatKompetensi');
            $mataKuliah = $this->input->post('mataKuliah');
            $kesesuaian = $this->input->post('kesesuaian');
            
            $insert = [];

            foreach ($nama as $key => $value) {
                $data = [
                    'namaDosen' => $value,
                    'nidn' => $nidn[$key],
                    'pendidikanPascaSarjana' => $pendidikan[$key],
                    'bidangKeahlian' => $keahlian[$key],
                    'jabatanAkademik' => $jabatan[$key],
                    'sertifikatPendidik' => $sertifikatPendidik[$key],
                    'sertifikatKompetensi' => $sertifikatKompetensi[$key],
                    'matkulDiampu' => $mataKuliah[$key],
                    'kesesuaianKeahlian' => $kesesuaian[$key]
                ];

                $insert[] = $this->dosen_model->insert($data);
            }

            if ($insert) {
                redirect('daftartabel', 'refresh');
            } else {
                redirect('beranda', 'refresh');
            }
        } else {
            redirect('kuesioner');
        }
    }

    public function tabel_3a5()
    {
        if ($this->input->post('submit'))
        {
            $this->load->model('Tabelindustripraktisi_model', 'dosen_model');

            $nama = $this->input->post('nama');
            $nidn = $this->input->post('nidn');
            $perusahaan= $this->input->post('perusahaan');
            $pendidikan = $this->input->post('pendidikan');
            $keahlian = $this->input->post('keahlian');
            $sertifikatProfesi = $this->input->post('sertifikatProfesi');
            $matakuliah = $this->input->post('matakuliah');
            $sks = $this->input->post('sks');
            
            $insert = [];

            foreach ($nidn as $key => $value) {
                $data = [
                    'namaDosen' => $nama[$key],
                    'nidk' => $value,
                    'perusahaan' => $perusahaan[$key],
                    'pendidikanTertinggi' => $pendidikan[$key],
                    'bidangKeahlian' => $keahlian[$key],
                    'sertifikatProfesi' => $sertifikatProfesi[$key],
                    'matkulDiampu' => $matakuliah[$key],
                    'bobotKredit' => $sks[$key]
                ];

                $insert[] = $this->dosen_model->insert($data);
            }

            if ($insert) {
                redirect('daftartabel', 'refresh');
            } else {
                redirect('beranda', 'refresh');
            }
        } else {
            redirect('kuesioner');
        }
    }

    public function tabel_3b1()
    {
        if ($this->input->post('submit'))
        {
            $this->load->model('Tabelpengakuanrekognisi_model', 'rekognisi_model');

            $nama = $this->input->post('nama');
            $keahlian = $this->input->post('keahlian');
            $rekognisi= $this->input->post('rekognisi');
            $tingkat = $this->input->post('tingkat');
            $tahun = $this->input->post('tahun');
            
            $insert = [];

            foreach ($nama as $key => $value) {
                $nasional = $wilayah = $internasional = "";

                if ($tingkat[$key] == 1) {
                    $wilayah = "V";
                }elseif ($tingkat[$key] == 2) {
                    $nasional = "V";
                }elseif ($tingkat[$key] == 3) {
                    $internasional = "V";
                }

                $data = [
                    'namaDosen' => $value,
                    'bidangKeahlian' => $keahlian[$key],
                    'rekognisi' => $rekognisi[$key],
                    'tingkatWilayah' => $wilayah,
                    'tingkatNasional' => $nasional,
                    'tingkatInternasional' => $internasional,
                    'tahun' => $tahun[$key]
                ];

                $insert[] = $this->rekognisi_model->insert($data);
            }

            if ($insert) {
                redirect('daftartabel', 'refresh');
            } else {
                redirect('beranda', 'refresh');
            }
        } else {
            redirect('kuesioner');
        }
    }

    public function tabel_3b2()
    {
        if ($this->input->post('submit'))
        {
            $this->load->model('Tabelpenelitiandtps_model', 'penelitian_model');

            $sumber = $this->input->post('sumber');
            $ts2 = $this->input->post('ts2');
            $ts1= $this->input->post('ts1');
            $ts = $this->input->post('ts');
            
            $insert = [];

            foreach ($sumber as $key => $value) {

                $jumlah = $ts[$key]+$ts1[$key]+$ts2[$key];

                $data = [
                    'sumberPembiayaan' => $value,
                    'jumlahJudulTS2' => $ts2[$key],
                    'jumlahJudulTS1' => $ts1[$key],
                    'jumlahJudulTS' => $ts[$key],
                    'jumlah' => $jumlah
                ];

                $insert[] = $this->penelitian_model->insert($data);
            }

            if ($insert) {
                redirect('daftartabel', 'refresh');
            } else {
                redirect('beranda', 'refresh');
            }
        } else {
            redirect('kuesioner');
        }
    }

    public function tabel_3b3()
    {
        if ($this->input->post('submit'))
        {
            $this->load->model('Tabelpkmdtps_model', 'penelitian_model');

            $sumber = $this->input->post('sumber');
            $ts2 = $this->input->post('ts2');
            $ts1= $this->input->post('ts1');
            $ts = $this->input->post('ts');
            
            $insert = [];

            foreach ($sumber as $key => $value) {

                $jumlah = $ts[$key]+$ts1[$key]+$ts2[$key];

                $data = [
                    'sumberPembiayaan' => $value,
                    'jumlahJudulTS2' => $ts2[$key],
                    'jumlahJudulTS1' => $ts1[$key],
                    'jumlahJudulTS' => $ts[$key],
                    'jumlah' => $jumlah
                ];

                $insert[] = $this->penelitian_model->insert($data);
            }

            if ($insert) {
                redirect('daftartabel', 'refresh');
            } else {
                redirect('beranda', 'refresh');
            }
        } else {
            redirect('kuesioner');
        }
    }

    public function tabel_3b4_1()
    {
        if ($this->input->post('submit'))
        {
            $this->load->model('Tabelpublikasiilmiah_model', 'penelitian_model');

            $jenis = $this->input->post('jenis');
            $ts2 = $this->input->post('ts2');
            $ts1= $this->input->post('ts1');
            $ts = $this->input->post('ts');
            
            $insert = [];

            foreach ($jenis as $key => $value) {

                $jumlah = $ts[$key]+$ts1[$key]+$ts2[$key];

                $data = [
                    'jenisPublikasi' => $value,
                    'jumlahJudulTS2' => $ts2[$key],
                    'jumlahJudulTS1' => $ts1[$key],
                    'jumlahJudulTS' => $ts[$key],
                    'jumlah' => $jumlah
                ];

                $insert[] = $this->penelitian_model->insert($data);
            }

            if ($insert) {
                redirect('daftartabel', 'refresh');
            } else {
                redirect('beranda', 'refresh');
            }
        } else {
            redirect('kuesioner');
        }
    }

    public function tabel_3b4_2()
    {
        if ($this->input->post('submit'))
        {
            $this->load->model('Tabelp4ilmiah_model', 'penelitian_model');

            $jenis = $this->input->post('jenis');
            $ts2 = $this->input->post('ts2');
            $ts1= $this->input->post('ts1');
            $ts = $this->input->post('ts');
            
            $insert = [];

            foreach ($jenis as $key => $value) {

                $jumlah = $ts[$key]+$ts1[$key]+$ts2[$key];

                $data = [
                    'jenisPublikasi' => $value,
                    'jumlahJudulTS2' => $ts2[$key],
                    'jumlahJudulTS1' => $ts1[$key],
                    'jumlahJudulTS' => $ts[$key],
                    'jumlah' => $jumlah
                ];

                $insert[] = $this->penelitian_model->insert($data);
            }

            if ($insert) {
                redirect('daftartabel', 'refresh');
            } else {
                redirect('beranda', 'refresh');
            }
        } else {
            redirect('kuesioner');
        }
    }

    public function tabel_3b5_1()
    {
        if ($this->input->post('submit'))
        {
            $this->load->model('Tabelluaranpenelitian_model', 'luaran_model');

            $nama = $this->input->post('nama');
            $tahun = $this->input->post('tahun');
            $keterangan= $this->input->post('keterangan');
            
            $insert = [];

            foreach ($nama as $key => $value) {

                $data = [
                    'luaranPenelitian' => $value,
                    'tahun' => $tahun[$key],
                    'keterangan' => $keterangan[$key]
                ];

                $insert[] = $this->luaran_model->insert($data);
            }

            if ($insert) {
                redirect('daftartabel', 'refresh');
            } else {
                redirect('beranda', 'refresh');
            }
        } else {
            redirect('kuesioner');
        }
    }

    public function tabel_3b5_2()
    {
        if ($this->input->post('submit'))
        {
            $this->load->model('Tabelluaranpenelitian2_model', 'luaran_model');

            $nama = $this->input->post('nama');
            $tahun = $this->input->post('tahun');
            $keterangan= $this->input->post('keterangan');
            
            $insert = [];

            foreach ($nama as $key => $value) {

                $data = [
                    'luaranPenelitian' => $value,
                    'tahun' => $tahun[$key],
                    'keterangan' => $keterangan[$key]
                ];

                $insert[] = $this->luaran_model->insert($data);
            }

            if ($insert) {
                redirect('daftartabel', 'refresh');
            } else {
                redirect('beranda', 'refresh');
            }
        } else {
            redirect('kuesioner');
        }
    }

    public function tabel_3b5_3()
    {
        if ($this->input->post('submit'))
        {
            $this->load->model('Tabelluaranpenelitian3_model', 'luaran_model');

            $nama = $this->input->post('nama');
            $tahun = $this->input->post('tahun');
            $keterangan= $this->input->post('keterangan');
            
            $insert = [];

            foreach ($nama as $key => $value) {

                $data = [
                    'luaranPenelitian' => $value,
                    'tahun' => $tahun[$key],
                    'keterangan' => $keterangan[$key]
                ];

                $insert[] = $this->luaran_model->insert($data);
            }

            if ($insert) {
                redirect('daftartabel', 'refresh');
            } else {
                redirect('beranda', 'refresh');
            }
        } else {
            redirect('kuesioner');
        }
    }

}