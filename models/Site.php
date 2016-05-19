<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class Site extends Model
{
    public $siteName, $siteDescription;
    public $abjadPengertian, $abjadSoal, $abjadUntungRugi;
    public $wilayahPengertian, $wilayahSoal, $wilayahUntungRugi;
    public $nomorPengertian, $nomorSoal, $nomorUntungRugi;
    public $kategoriPengertian, $kategoriSoal, $kategoriUntungRugi;
    public $tanggalPengertian, $tanggalSoal, $tanggalUntungRugi;
    public $profilPembuat, $petunjukPenggunaan, $kuisUmum;
    public $peraturanIndekTujuan, $peraturanIndekPengertian, $peraturanIndekMateri;
    public $tujuanPembelajaranInti, $tujuanPembelajaranDasar, $tujuanPembelajaranIndikator;
    public function rules()
    {
    	return [
            [[
                'siteName', 'siteDescription',
                'abjadPengertian', 'abjadSoal','abjadUntungRugi',
                'wilayahPengertian', 'wilayahSoal','wilayahUntungRugi',
                'nomorPengertian', 'nomorSoal','nomorUntungRugi',
                'kategoriPengertian', 'kategoriSoal','kategoriUntungRugi',
                'tanggalPengertian', 'tanggalSoal','tanggalUntungRugi',
                'profilPembuat', 'petunjukPenggunaan', 'kuisUmum',
                'peraturanIndekTujuan', 'peraturanIndekPengertian', 'peraturanIndekMateri',
                'tujuanPembelajaranInti', 'tujuanPembelajaranDasar', 'tujuanPembelajaranIndikator',
            ], 'string'],
        ];
    }
    
    public function fields()
    {
            return [
                'siteName', 'siteDescription',
                'abjadPengertian', 'abjadSoal','abjadUntungRugi',
                'wilayahPengertian', 'wilayahSoal','wilayahUntungRugi',
                'nomorPengertian', 'nomorSoal','nomorUntungRugi',
                'kategoriPengertian', 'kategoriSoal','kategoriUntungRugi',
                'tanggalPengertian', 'tanggalSoal','tanggalUntungRugi',
                'profilPembuat', 'petunjukPenggunaan', 'kuisUmum',
                'peraturanIndekTujuan', 'peraturanIndekPengertian', 'peraturanIndekMateri',
                'tujuanPembelajaranInti', 'tujuanPembelajaranDasar', 'tujuanPembelajaranIndikator',
            ];
    }
    
    public function attributes()
    {
            return [
                'siteName', 'siteDescription',
                'abjadPengertian', 'abjadSoal','abjadUntungRugi',
                'wilayahPengertian', 'wilayahSoal','wilayahUntungRugi',
                'nomorPengertian', 'nomorSoal','nomorUntungRugi',
                'kategoriPengertian', 'kategoriSoal','kategoriUntungRugi',
                'tanggalPengertian', 'tanggalSoal','tanggalUntungRugi',
                'profilPembuat', 'petunjukPenggunaan', 'kuisUmum',
                'peraturanIndekTujuan', 'peraturanIndekPengertian', 'peraturanIndekMateri',
                'tujuanPembelajaranInti', 'tujuanPembelajaranDasar', 'tujuanPembelajaranIndikator',
            ];
    }
}
