<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JsonIncrementalParser;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $riwayat = [
            [
                'no' => 1,
                'nama' => 'Budi Hartanto',
                'item' => 'Mangrove Maven',
                'jumlah' => '350',
                'warna' => '#336913',
                'img' => asset('assets/img/earth1.png'),
            ],
            [
                'no' => 2,
                'nama' => 'Dewi Sartika',
                'item' => 'Mangrove Maven',
                'jumlah' => '330',
                'warna' => '#336913',
                'img' => asset('assets/img/earth1.png'),
            ],
            [
                'no' => 3,
                'nama' => 'Eko Wahyudi',
                'item' => 'Mangrove Maven',
                'jumlah' => '200',
                'warna' => '#336913',
                'img' => asset('assets/img/earth1.png'),
            ],
            [
                'no' => 4,
                'nama' => 'Rina Kartika',
                'item' => 'Guardian of the Grove',
                'jumlah' => '190',
                'warna' => '#85BB50',
                'img' => asset('assets/img/earth2.png'),
            ],
            [
                'no' => 5,
                'nama' => 'Agus Prasetyo',
                'item' => 'Guardian of the Grove',
                'jumlah' => '140',
                'warna' => '#A7CC05',
                'img' => asset('assets/img/earth2.png'),
            ],
            [
                'no' => 6,
                'nama' => 'Irfan Setiawan',
                'item' => 'Mangrove Master',
                'jumlah' => '80',
                'warna' => '#A7CC05',
                'img' => asset('assets/img/earth3.png'),
            ],
        ];
        $summary = [
            [
                'no' => 1,
                'warna' => '#336913',
                'event' => 'Introducing the beauty of mangroves on a journey to the planting site.',
            ],
            [
                'no' => 2,
                'warna' => '#DDDDDD',
                'event' => 'Working together with local farmers while planting each mangrove.',
            ],
            [
                'no' => 3,
                'warna' => '#DDDDDD',
                'event' => 'Exploring the wonders of mangrove ecotourism, an educational adventure.',
            ],
            [
                'no' => 4,
                'warna' => '#DDDDDD',
                'event' => 'Receive a plaque & badge, a mark of honor for every tree you plant.',
            ],
            [
                'no' => 5,
                'warna' => '#DDDDDD',
                'event' => 'Coverage & documentation by news media, share your story of change!',
            ],
        ];
        $table = [
            [
                'head' => 'Membership Tier',
                'col1' => 'Seedling Scout',
                'col2' => 'Sapling Savior',
                'col3' => 'Tree Titan',
                'col4' => 'Mangrove Master',
                'col5' => 'Guardian of the Grove',
                'col6' => 'Mangrove Maven',
            ],
            [
                'head' => 'Min. Seeds',
                'col1' => '5 Seeds',
                'col2' => '10 Seeds',
                'col3' => '20 Seeds',
                'col4' => '50 Seeds',
                'col5' => '100 Seeds',
                'col6' => '200 Seeds',
            ],
            [
                'head' => 'Min. Buy',
                'col1' => 'IDR 75K',
                'col2' => 'IDR 150K',
                'col3' => 'IDR 300K',
                'col4' => 'IDR 750K',
                'col5' => 'IDR 1,500K',
                'col6' => 'IDR 3,000K',
            ],
            [
                'head' => 'Benefits',
                'col1' => 'Badge',
                'col2' => 'Badge + Pin',
                'col3' => 'Badge + Pin',
                'col4' => 'Badge + Pin + Bag',
                'col5' => 'Badge + Pin + Bag',
                'col6' => 'Badge + Pin + Bag',
            ],
            [
                'head' => 'Donors',
                'col1' => '4,900 Donors',
                'col2' => '4,300 Donors',
                'col3' => '15,000 Donors',
                'col4' => '5,000 Donors',
                'col5' => '300 Donors',
                'col6' => '10 Donors',
            ],
            [
                'head' => 'Action',
                'col1' => 'Support Our Mission',
                'col2' => 'Support Our Mission',
                'col3' => 'Support Our Mission',
                'col4' => 'Support Our Mission',
                'col5' => 'Support Our Mission',
                'col6' => 'Support Our Mission',
            ],
        ];
        $table2=[
            [
                'benifits' => 'Price',
                'eco'=> '15 Million IDR',
                'green' => '30 Million IDR',
                'guard'=> '45 Million IDR',
            ],
            [
                'benifits' => 'CO2 Sequestration',
                'eco'=> '22,5 ton/year',
                'green' => '45 ton/year',
                'guard'=> '66,5 ton/year',
            ],
            [
                'benifits' => 'Number of Tress',
                'eco'=> '1000 Trees',
                'green' => '2000 Trees',
                'guard'=> '3000 Trees',
            ],
            [
                'benifits' => 'Logo on JCI Banner',
                'eco'=> '15 Million IDR',
                'green' => '30 Million IDR',
                'guard'=> '45 Million IDR',
            ],
            [
                'benifits' => 'Logo on Communal Stainless Plate',
                'eco'=> 'assets/img/check.png',
                'green' => 'assets/img/check.png',
                'guard'=> 'assets/img/check.png',
            ],
            [
                'benifits' => 'Considered as Main Sponsor',
                'eco'=> 'assets/img/check.png',
                'green' => 'assets/img/check.png',
                'guard'=> 'assets/img/check.png',
            ],
            [
                'benifits' => 'Dedicated Stainless Plate',
                'eco'=> 'assets/img/check.png',
                'green' => 'assets/img/check.png',
                'guard'=> 'assets/img/check.png',
            ],
            [
                'benifits' => 'Report Update on Planted Trees',
                'eco'=> '0',
                'green' => 'assets/img/check.png',
                'guard'=> 'assets/img/check.png',
            ],
            [
                'benifits' => 'Logo on Event Clothings',
                'eco'=> '0',
                'green' => '0',
                'guard'=> 'assets/img/check.png',
            ],
        ];

        return view('home.home', [
            'data' => $riwayat,
            'events' => $summary,
            'tabel' => $table,
            'tabel2' => $table2,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
