<div class="card card-primarya" id="divOrderList">
  <div class="card-header">
      <h4>List Order</h4>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>No</th><th>Orders Id</th><th>Product</th><th>Customer</th><th>Status</th><th>Action</th>
          </tr>
        </thead>
          @php
          $no = 1;
          @endphp
          @foreach($dataOrder as $order)
          @php
            $kdOrder = $order -> kd_order;
            $kdCap = substr(Str::upper($kdOrder), 0, 5);
            $detailOrder = DB::table('tbl_order_details') -> where('kd_order', $kdOrder) -> first();
            $dataProduk = DB::table('tbl_produk') -> where('kd_produk', $order -> kd_product) -> first();
            $dataCustomer = DB::table('tbl_member') -> where('username', $order -> customer) -> first();

            if($detailOrder -> status_order == 'MENUNGGU_PEMBAYARAN'){
              $rowColor = "background-color:#b2bec3";
            }else{
              $rowColor = "background-color:#55efc4";
            }
          @endphp

            <tr style="{{ $rowColor }}">
              <td>{{ $no }}</td>
              <td>{{ $kdCap }}</td>
              <td>{{ $dataProduk -> nama_produk }}</td>
              <td>{{ $dataCustomer -> full_name }}</td>
              @if($detailOrder -> status_order == 'MENUNGGU_PEMBAYARAN')
              <td>Waiting Payment</td>
              @elseif($detailOrder -> status_order == 'MENUNGGU_KONFIRMASI_SELLER')
              <td>Waiting seller confirmation</td>
              @elseif($detailOrder -> status_order == 'READY_TO_SEND')
              <td>Ready to send</td>
              @elseif($detailOrder -> status_order == 'DELIVERY')
              <td>Delivery to customer</td>
              @elseif($detailOrder -> status_order == 'RECEIVED_WAITING')
              <td>Received by customer, waiting confirmation</td>
              @elseif($detailOrder -> status_order == 'DONE')
              <td>Finished</td>
              @else
              <td>-</td>
              @endif
              <td>
                <a href="{{ env('JSVOID') }}" class="view" @click="detailsAtc('{{ $kdOrder }}')">Details</a>
              </td>
            </tr>
          @php
          $no++;
          @endphp
          @endforeach
      </table>
    </div>

  </div>

</div>
<script src="{{ asset('ladun/account_asset/js_custom/seller/order_list.js') }}"></script>
