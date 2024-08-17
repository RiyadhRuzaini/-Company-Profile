<div class="sponsor">
    <div class="row">
        <div class="col col_spon">
            <h3 class="lebel_spon">Sponsorship Packages</h3>
            <p class="desk_spon">Our sponsorship package offers branding, promotional opportunities, and visibility at
                <br>our event, ideal for enhancing company presence and community engagement.
            </p>
        </div>
        <div class="col col_spon">
            <h3 class="lebel_spon">Personal Sponsorship Package</h3>
            <table class="tabel ">
                <thead>
                    <tr class="text-center">
                        @foreach ($tabel as $item)
                            <th style="border-top-right-radius: 19px" scope="col"> {{ $item['head'] }} </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    <tr class="row1">
                        @foreach ($tabel as $item)
                            @if ($item['col1'] == 'Support Our Mission')
                                <td class="col_td">
                                    <a href="" class="tfoot_btn">
                                        <p>{{ $item['col1'] }}</p>
                                        <span class="material-symbols-outlined">chevron_right</span>
                                    </a>
                                </td>
                            @else
                                <td>{{ $item['col1'] }}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr class="row1">
                        @foreach ($tabel as $item)
                            @if ($item['col2'] == 'Support Our Mission')
                                <td class="col_td">
                                    <a href="" class="tfoot_btn">
                                        <p>{{ $item['col2'] }}</p>
                                        <span class="material-symbols-outlined">chevron_right</span>
                                    </a>
                                </td>
                            @else
                                <td>{{ $item['col2'] }}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr class="row1">
                        @foreach ($tabel as $item)
                            @if ($item['col3'] == 'Support Our Mission')
                                <td class="col_td">
                                    <a href="" class="tfoot_btn">
                                        <p>{{ $item['col3'] }}</p>
                                        <span class="material-symbols-outlined">chevron_right</span>
                                    </a>
                                </td>
                            @else
                                <td>{{ $item['col3'] }}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr class="row1">
                        @foreach ($tabel as $item)
                            @if ($item['col4'] == 'Support Our Mission')
                                <td class="col_td">
                                    <a href="" class="tfoot_btn">
                                        <p>{{ $item['col4'] }}</p>
                                        <span class="material-symbols-outlined">chevron_right</span>
                                    </a>
                                </td>
                            @else
                                <td>{{ $item['col4'] }}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr class="row1">
                        @foreach ($tabel as $item)
                            @if ($item['col5'] == 'Support Our Mission')
                                <td class="col_td">
                                    <a href="" class="tfoot_btn">
                                        <p>{{ $item['col5'] }}</p>
                                        <span class="material-symbols-outlined">chevron_right</span>
                                    </a>
                                </td>
                            @else
                                <td>{{ $item['col5'] }}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr class="row1">
                        @foreach ($tabel as $item)
                            @if ($item['col6'] == 'Support Our Mission')
                                <td class="col_td">
                                    <a href="" class="tfoot_btn">
                                        <p>{{ $item['col6'] }}</p>
                                        <span class="material-symbols-outlined">chevron_right</span>
                                    </a>
                                </td>
                            @else
                                <td>{{ $item['col6'] }}</td>
                            @endif
                        @endforeach
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="col col_spon">
            <h3 class="lebel_spon">Corporate Sponsorship Package</h3>
            <table class="tabel ">
                <thead>
                    <tr>
                        <th scope="col">Benefits</th>
                        <th scope="col">Eco Trailblazers</th>
                        <th scope="col">Green Innovators</th>
                        <th scope="col">Eco Vanguard</th>
                    </tr>
                </thead>
                <tbody class="bodyTable">
                    @foreach ($tabel2 as $item)
                        <tr class="row1">
                            <td class="col">
                                {{ $item['benifits'] }}
                            </td>
                            <td class="col">
                                @if ($item['eco'] == '0')
                                    <div style="display: none">
                                        <img src="{{ asset('assets/img/check.png') }}" alt="images" class="chck">
                                    </div>
                                @elseif ($item['eco'] == 'assets/img/check.png')
                                    <img src="{{ asset('assets/img/check.png') }}" alt="images" class="chck">
                                @else
                                    {{ $item['eco'] }}
                                @endif
                            </td>
                            <td class="col">
                                @if ($item['green'] == 'assets/img/check.png')
                                    <img src="{{ asset('assets/img/check.png') }}" alt="images" class="chck">
                                @elseif ($item['green'] == '0')
                                    <div style="display: none">
                                        <img src="{{ asset('assets/img/check.png') }}" alt="images" class="chck">
                                    </div>
                                @else
                                    {{ $item['green'] }}
                                @endif
                            </td>
                            <td class="col">
                                @if ($item['guard'] == 'assets/img/check.png')
                                    <img src="{{ asset('assets/img/check.png') }}" alt="images" class="chck">
                                @elseif ($item['guard'] == '0')
                                    <div style="display: none">
                                        <img src="{{ asset('assets/img/check.png') }}" alt="images" class="chck">
                                    </div>
                                @else
                                    {{ $item['guard'] }}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot style="background-color: #518BBB;">
                    <tr>
                        <td style="border-bottom-left-radius: 20px;" class="col">
                            Make a Donation
                        </td>
                        <td class="col">
                            <a href="" class="tfoot_btn">
                                <p>Support Our Mission</p>
                                <span class="material-symbols-outlined">chevron_right</span>
                            </a>
                        </td>
                        <td class="col">
                            <a href="" class="tfoot_btn">
                                <p>Support Our Mission</p>
                                <span class="material-symbols-outlined">chevron_right</span>
                            </a>
                        </td>
                        <td style="border-bottom-right-radius: 20px;" class="col">
                            <a href="" class="tfoot_btn">
                                <p>Support Our Mission</p>
                                <span class="material-symbols-outlined">chevron_right</span>
                            </a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>
</div>
