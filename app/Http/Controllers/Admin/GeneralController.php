<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    function about(){
        $title = 'Tentang Saya';
        $data = [
            'nama' => 'I Gde Adioka Pratama',
            'alamat' => 'Btn. Dalung Permai',
            'telp' => '081933002220',
            'email' => 'gedeadioka1997@gmail.com',
            'item' => [
                [
                    'icon' => 'fab fa-facebook',
                    'link' => 'google.com'
                ],
                [
                    'icon' => 'fab fa-instagram',
                    'link' => 'google.com'
                ],
                [
                    'icon' => 'fab fa-tiktok',
                    'link' => 'google.com'
                ]
            ]
        ];
        return view('fronend.page.about.index', [
            'title_page' => $title,
            'data' => $data
        ]);
    }
    function skill(){
        $title = 'SKILL KKS COMPANY';
        $data = [
            'navigator'=>[
                [
                    'nama' => 'KKP I Wayan Keresna',
                    'divisi' => 'Konsultan Pajak',
                    'Pajak' => [
                        'Konsultasi','Pemeriksaan','dan Lainnya'
                    ]
                ],
                [
                    'nama' => 'Aksara Konsultama Komputindo',
                    'divisi' => 'Program',
                    'Project' => [
                        'Perusahaan Kontraktor','Koprasi Simpan Pinjam','dan Lain-Lain'
                    ]
                ],
                [
                    'nama' => 'WK Law Firm',
                    'divisi' => 'Lawyer & Legal Service',
                    'Project' => [
                        'Konsultasi','Litigasi','Perijinan','Dan Lainnya'
                    ]
                ]
            ]
        ];
        return view('fronend.page.skill.index', [
            'title_page' => $title,
            'data' => $data
        ]);
    }
    function exp(){
        $title = 'PROJEK SAYA';
        return view('fronend.page.exp.index', [
            'title_page' => $title
        ]);
    }
    function education(){
        $title = 'PROJEK SAYA';
        return view('fronend.page.education.index', [
            'title_page' => $title
        ]);
    }
    function interests(){
        $title = 'PROJEK SAYA';
        return view('fronend.page.interests.index', [
            'title_page' => $title
        ]);
    }
    function awards(){
        $title = 'PROJEK SAYA';
        return view('fronend.page.awards.index', [
            'title_page' => $title
        ]);
    }
}
