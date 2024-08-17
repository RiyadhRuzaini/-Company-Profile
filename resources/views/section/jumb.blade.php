<div id="jumb" class="container-fluid">
    <div class="row jumb1-row1">
        <div class="col">
            <div class="text_j1">
                <p class="jumb_t1">Green Haven Project - Mangrove</p>
                <h2 class="jumb_t2">Green Horizons Await, Join Us in <br> Planting 10,000 Mangroves!</h2>
            </div>
            <div class="j_tree">
                <div class="tree1">
                    <div class="j-div1">
                        <img src="{{ asset('assets/img/img1.png') }}" alt="" class="img_jt">
                        <h5 class="text_tree_jumb"><strong class="jt-1">5,690</strong><span class="span_jumb">/10,000
                                Pohon</span></h5>
                    </div>
                    <a href="#" class="btn j-btn">
                        <p class="t-btn">Support Our Mission</p> <span class="material-symbols-outlined">
                            chevron_right
                        </span>
                    </a>
                </div>
                <div class="tree2">
                    <div class="j-divider"></div>
                </div>
            </div>
        </div>
        <div class="col">
            <img src="{{ asset('assets/img/img2.png') }}" alt="image/figure">
        </div>
    </div>
    <div class="row jumb2-row2">
        <div class="col">
            <h2 class="lable-jumb my-3">Leaderboard</h2>
            <div class="links-j">
                <a href="" class="link1">Most Donation</a>
                <a href="" class="link2">Most Recent</a>
            </div>
        </div>
        <div class="col">
            @foreach ($data as $dt)
                <div class="list_data">
                    <div class="item_data1">
                        <p class="no" style="background-color: {{ $dt['warna']}}">0{{ $dt['no'] }}</p>
                        <div class="item_nama">
                            <img class="img_data_item" src="{{ $dt['img'] }}" alt="images">
                            <div class="data_nama">
                                <p class="item">{{$dt['item']}}</p>
                                <h4 class="nama">{{ $dt['nama']}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item_data2">
                        <img src="{{ asset('assets/img/img1.png') }}" alt="images" class="tree_list">
                        <h5 class="jml_tree">
                            <strong class="jml">{{$dt['jumlah']}}</strong>
                            <span class="pohon">Pohon</span>
                        </h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
