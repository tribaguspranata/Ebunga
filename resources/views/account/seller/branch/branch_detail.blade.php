<div class="card card-primarya">
    <div class="card-header">
        <h4>Statistic Branch {{ $dataBranch -> nama_branch }}</h4>
        <div class="card-header-action">
            <a href="#!" class="btn btn-primary" style="border:0px solid white;color:#fff;"><i class="fas fa-poll"></i> All statistics</a>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Product</h4>
                        </div>
                        <div class="card-body">
                            10
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Orders</h4>
                        </div>
                        <div class="card-body">
                            42
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Transaction</h4>
                        </div>
                        <div class="card-body">
                            1,201
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Hours online</h4>
                        </div>
                        <div class="card-body">
                            47
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<hr />

<div class="card card-primarya">
    <div class="card-header">
        <h4>History Orders</h4>
        <div class="card-header-action">
            <a href="#!" class="btn btn-primary" style="border:0px solid white;color:#fff;"><i class="fas fa-funnel-dollar"></i> All orders</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Invoice</td>
                    <td>Total</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>No</td>
                    <td>Invoice</td>
                    <td>Total</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<hr />


<div class="card card-primarya">
    <div class="card-header">
        <h4>List Product</h4>
        <div class="card-header-action">
            <a href="#!" class="btn btn-primary" style="border:0px solid white;color:#fff;"><i class="fas fa-gifts"></i> All products</a>
        </div>
    </div>
    <div class="card-body">

    </div>
</div>

<div class="card card-primarya" id="divCoverageArea">
    <div class="card-header">
        <h4>Coverage Area</h4>
        <div class="card-header-action">
            <a href="#!" class="btn btn-primary" style="<?=$cssBtn; ?>" id="btnEditCoverageArea"> <i class="fas fa-map-marker-alt"> </i> Edit coverage area</a>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                <div id="maps" style="width:100%px;height:400px;"></div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                
                <div class="form-group">
                    <label>List Coverage Area</label>
                    <table class="table" id="tblListCoverage">
                        <thead>
                            <tr>
                                <td>Village</td><td>District</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dataCoverage as $area)
                            @php 
                                $kdArea = $area -> kd_area;
                                $dataKelurahan = DB::table('tbl_kelurahan') -> where('id_kel', $kdArea) -> first();
                                $namaKelurahan = $dataKelurahan -> nama;
                                $idKecamatan = $dataKelurahan -> id_kec;
                                $dataKecamatan = DB::table('tbl_kecamatan') -> where('id_kec', $idKecamatan) -> first();
                                $idKabupaten = $dataKecamatan -> id_kab;
                                $namaKecamatan = $dataKecamatan -> nama;
                                $dataKabupaten = DB::table('tbl_kabupaten') -> where('id_kab', $idKabupaten) -> first();
                                $namaKabupaten = $dataKabupaten -> nama;
                            @endphp
                                <tr>
                                    <td>{{ $namaKelurahan }}</td>
                                    <td>{{ $namaKecamatan }} - {{ $namaKabupaten }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    var idBranch = "{{ $idBranch }}";
    var namaKec = "{{ $namaKec }}";
    var namaKel = "{{ $namaKel }}";
</script>

<script src="{{ asset('ladun/account_asset/js_custom/seller/detailBranch.js') }}"></script>