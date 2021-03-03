@php

@endphp
<div class="card card-primarya">
    <div class="card-header">
        <h4>Order Details # {{ substr($kdOrder, 0, 5) }} - at {{ $waktu }}</h4>
        <div class="card-header-action">
            <a href="{{ env('JSVOID') }}" class="btn btn-primary" style="border:0px solid white;color:#fff;"><i class="fas fa-poll"></i> Back</a>
        </div>
    </div>
    <div class="cart-page-total">
        <div style="text-align: center;">
            <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/product/main-product/{{ $dataProduct -> foto_utama }}" style="width: 300px;">
            <h3>{{ $dataProduct -> nama_produk }}</h3>
        </div>
        <div>
            Item details
            <ul>
                <li>Harga (@) <span>Rp. {{ number_format($dataProduct -> harga) }}</span></li>
                <li>Qt <span>{{ $dataOrder -> qt }}</span></li>
                <li>Total <span>Rp. {{ number_format($dataOrder -> total) }}</span></li>
            </ul>
        </div>
        <div style="margin-top:20px;">
            Order details
            <ul>
                <li>Sender name <span>{{ $detailOrder -> sender_name }}</span></li>
                <li>Receiver Name <span>{{ $detailOrder -> receiver_name }}</span></li>
                <li>Receiver Email <span>{{ $detailOrder -> receiver_email }}</span></li>
                <li>Receiver Phone <span>{{ $detailOrder -> receiver_phone }}</span></li>
                <li>Caption on board <span><i>"{{ $detailOrder -> greeting_card_note }}"</i></span></li>
                <li>Delivery Date <span>{{ date("F jS, Y", strtotime($detailOrder -> delivery_date)) }}</span></li>
            </ul>
        </div>

        <div class="row" style="margin-top:30px;">
        Order timeline
              <div class="col-12">
                <div class="activities">
                  <div class="activity">
                    <div class="activity-icon bg-primary text-white shadow-primary">
                      <i class="fas fa-comment-alt"></i>
                    </div>
                    <div class="activity-detail">
                      <div class="mb-2">
                        <span class="text-job text-primary">2 min ago</span>
                        <span class="bullet"></span>
                        <a class="text-job" href="#">Order created</a>
                        <div class="float-right dropdown">
                          <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                          <div class="dropdown-menu">
                            <div class="dropdown-title">Options</div>
                            <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                            <a href="#" class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger trigger--fire-modal-1" data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?" data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i> Archive</a>
                          </div>
                        </div>
                      </div>
                      <p>Have commented on the task of "<a href="#">Responsive design</a>".</p>
                    </div>
                  </div>
                  <div class="activity">
                    <div class="activity-icon bg-primary text-white shadow-primary">
                      <i class="fas fa-arrows-alt"></i>
                    </div>
                    <div class="activity-detail">
                      <div class="mb-2">
                        <span class="text-job">1 hour ago</span>
                        <span class="bullet"></span>
                        <a class="text-job" href="#">View</a>
                        <div class="float-right dropdown">
                          <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                          <div class="dropdown-menu">
                            <div class="dropdown-title">Options</div>
                            <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                            <a href="#" class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger trigger--fire-modal-2" data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?" data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i> Archive</a>
                          </div>
                        </div>
                      </div>
                      <p>Moved the task "<a href="#">Fix some features that are bugs in the master module</a>" from Progress to Finish.</p>
                    </div>
                  </div>
                  <div class="activity">
                    <div class="activity-icon bg-primary text-white shadow-primary">
                      <i class="fas fa-unlock"></i>
                    </div>
                    <div class="activity-detail">
                      <div class="mb-2">
                        <span class="text-job">4 hour ago</span>
                        <span class="bullet"></span>
                        <a class="text-job" href="#">View</a>
                        <div class="float-right dropdown">
                          <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                          <div class="dropdown-menu">
                            <div class="dropdown-title">Options</div>
                            <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                            <a href="#" class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger trigger--fire-modal-3" data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?" data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i> Archive</a>
                          </div>
                        </div>
                      </div>
                      <p>Login to the system with ujang@maman.com email and location in Bogor.</p>
                    </div>
                  </div>
                  <div class="activity">
                    <div class="activity-icon bg-primary text-white shadow-primary">
                      <i class="fas fa-sign-out-alt"></i>
                    </div>
                    <div class="activity-detail">
                      <div class="mb-2">
                        <span class="text-job">12 hour ago</span>
                        <span class="bullet"></span>
                        <a class="text-job" href="#">View</a>
                        <div class="float-right dropdown">
                          <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                          <div class="dropdown-menu">
                            <div class="dropdown-title">Options</div>
                            <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                            <a href="#" class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger trigger--fire-modal-4" data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?" data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i> Archive</a>
                          </div>
                        </div>
                      </div>
                      <p>Log out of the system after 6 hours using the system.</p>
                    </div>
                  </div>
                  <div class="activity">
                    <div class="activity-icon bg-primary text-white shadow-primary">
                      <i class="fas fa-trash"></i>
                    </div>
                    <div class="activity-detail">
                      <div class="mb-2">
                        <span class="text-job">Yesterday</span>
                        <span class="bullet"></span>
                        <a class="text-job" href="#">View</a>
                        <div class="float-right dropdown">
                          <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                          <div class="dropdown-menu">
                            <div class="dropdown-title">Options</div>
                            <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                            <a href="#" class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger trigger--fire-modal-5" data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?" data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i> Archive</a>
                          </div>
                        </div>
                      </div>
                      <p>Removing task "Delete all unwanted selectors in CSS files".</p>
                    </div>
                  </div>
                  <div class="activity">
                    <div class="activity-icon bg-primary text-white shadow-primary">
                      <i class="fas fa-trash"></i>
                    </div>
                    <div class="activity-detail">
                      <div class="mb-2">
                        <span class="text-job">Yesterday</span>
                        <span class="bullet"></span>
                        <a class="text-job" href="#">View</a>
                        <div class="float-right dropdown">
                          <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                          <div class="dropdown-menu">
                            <div class="dropdown-title">Options</div>
                            <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                            <a href="#" class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger trigger--fire-modal-6" data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?" data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i> Archive</a>
                          </div>
                        </div>
                      </div>
                      <p>Assign the task of "<a href="#">Redesigning website header and make it responsive AF</a>" to <a href="#">Syahdan Ubaidilah</a>.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
        <div style="margin-top:20px;">
        <a href="{{ env('JSVOID') }}" style="color:#ecf0f1;" class="btn btn-primary">Approve this order</a>&nbsp;
        <a href="{{ env('JSVOID') }}" style="color:#ecf0f1;" class="btn btn-primary">Send this order</a>
        </div>
    </div>

</div>