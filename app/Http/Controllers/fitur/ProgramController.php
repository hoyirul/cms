<?php

namespace App\Http\Controllers\fitur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir(){
        $data = [
            [
                'name' => 'Lead Engineer - DevOps',
                'category' => 'Tecnology',
                'lokasi' => 'DKI Jakarta'
            ],
            [
                'name' => 'IT Security Senior Associate - Vulnerability Management',
                'category' => 'Tecnology',
                'lokasi' => 'DKI Jakarta'
            ],
            [
                'name' => 'IT Security Engineer - Security Assurance',
                'category' => 'Tecnology',
                'lokasi' => 'DKI Jakarta'
            ],
            [
                'name' => 'Principal Engineer - Automation Testing',
                'category' => 'Tecnology',
                'lokasi' => 'DKI Jakarta'
            ],
            [
                'name' => 'Senior Pentest Engineer',
                'category' => 'Tecnology',
                'lokasi' => 'DKI Jakarta'
            ],
            [
                'name' => 'Machine Learning Engineer - AI Platform',
                'category' => 'Tecnology',
                'lokasi' => 'DKI Jakarta'
            ],
            [
                'name' => 'Data Scientist Sr. Lead - Singapore',
                'category' => 'Tecnology',
                'lokasi' => 'DKI Jakarta'
            ],
            [
                'name' => 'Principal Data Engineer',
                'category' => 'Tecnology',
                'lokasi' => 'DKI Jakarta'
            ]
        ];

        return view('program.karir', compact('data'));
    }

    public function magang(){
        $data = [
            [
                'name' => 'Product Designer Intern',
                'category' => 'Tecnology',
                'lokasi' => 'Semarang'
            ],
            [
                'name' => 'Tokopedia Academy Intern',
                'category' => 'Tecnology',
                'lokasi' => 'Surabaya'
            ],
            [
                'name' => 'Account Receivable Intern',
                'category' => 'Tecnology',
                'lokasi' => 'DKI Jakarta'
            ],
            [
                'name' => 'People Partner Intern',
                'category' => 'Tecnology',
                'lokasi' => 'Yogyakarta'
            ]
        ];

        return view('program.magang', compact('data'));
    }

    public function industri(){
        $data = [
            [
                'name' => 'Traveloka'
            ],
            [
                'name' => 'Tokopedia'
            ],
            [
                'name' => 'Mamikos'
            ],
            [
                'name' => 'BukaLapak'
            ],
            [
                'name' => 'Nutriboost'
            ],
            [
                'name' => 'Google Inc'
            ],
            [
                'name' => 'Yahoo Inc'
            ],
            [
                'name' => 'Apple Inc'
            ]
        ];

        return view('program.industri', compact('data'));
    }
}
