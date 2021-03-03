<div>
    <h3 id="titlePanel">List of my branch</h3>
</div>

<div class="row" id="divTambahBranch">
    <div class="col-6 col-md-6 col-lg-6">
        <div class="form-group">
            <label>Name Branch</label>
            <input type="text" class="form-control" id="txtNameBranch">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" id="txtEmailBranch">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" id="txtPhoneBranch">
        </div>
    </div>
    <div class="col-6 col-md-6 col-lg-6">
        <div class="form-group">
            <label>Country</label>
            <select class="form-control" onchange="checkCountry()" id="txtKdCountry">
                    <option value="none">--- Choose country ---</option>
                @foreach($countrySupport as $cs)
                    <option value="{{ $cs -> kd_country }}">{{ $cs -> name_country }}</option>
                @endforeach
            </select>
        </div>
        <div id="txtRegionIndonesia">
            <div class="form-group" id="divProvinsi">
                <label>Provinsi</label>
                <select class="form-control" onchange="provinsiPilih()" id="txtProvinsi">
                    <option value="none">--- Choose provinsi ---</option>
                    <option v-for="pv in provinsi" v-bind:value="pv.id_prov">@{{pv.nama}}</option>
                </select>
            </div>
            <div class="form-group" id="divKabupaten">
                <label>Kabupaten</label>
                <select class="form-control" onchange="kabupatenPilih()" id="txtKabupaten">
                    <option value="none">--- Choose kabupaten ---</option>
                    <option v-for="kb in kabupaten" v-bind:value="kb.id_kab">@{{ kb.nama }}</option>
                </select>
            </div>
            <div class="form-group" id="divKecamatan">
                <label>Kecamatan</label>
                <select class="form-control" onchange="kecamatanPilih()" id="txtKecamatan">
                    <option value="none">--- Choose kecamatan ---</option>
                    <option v-for="kec in kecamatan" v-bind:value="kec.id_kec">@{{ kec.nama }}</option>
                </select>
            </div>
            <div class="form-group" id="divKelurahan">
                <label>Kelurahan</label>
                <select class="form-control" id="txtKelurahan">
                    <option value="none">--- Choose kelurahan ---</option>
                    <option v-for="kel in kelurahan" v-bind:value="kel.id_kel">@{{ kel.nama }}</option>
                </select>
            </div>
        </div>
        <div id="txtRegionMalaysia">
          Region malaysia
        </div>
    </div>
    <div style="margin-top:12px;">
        <a href="javascript:void(0)" class="view" @click="saveNewBranchAtc"><i class="fas fa-file-upload"></i> Apply for a new branch</a>
    </div>
</div>

<div class="row" id="divBranch">

    <div class="" style="margin-bottom:12px;">
        <a href="#!" class="view" @click="tampilFormTambahAtc"><i class="fas fa-plus-circle"></i> Add branch</a>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Branch</th>
                    <th>Status</th>
                    <th>Total Orders</th>
                    <th>Revenue</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataBranch as $branch)
                <tr>
                    <td>{{ $branch -> nama_branch }}</td>
                    @if($branch -> status_branch == 'active')
                    <td>Active</td>
                    @else
                    <td>Pending</td>
                    @endif
                    <td></td>
                    <td> </td>
                    <td><a href="#!" class="view" @click="detailAtc('{{ $branch -> kd_branch }}')">Details</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

<script src="{{ asset('ladun/account_asset/js_custom/seller/branch.js') }}"></script>
