@extends('nav-side-admin')
@section('sidebar')
@section('header')
@section('css')
@endsection
@endsection
@endsection
@section('content')
<div class="container-fluid">
<div class="card bg-light-info shadow-none position-relative overflow-hidden">
  <div class="card-body px-4 py-3">
    <div class="row align-items-center">
      <div class="col-9">
        <h4 class="fw-semibold mb-8">Product Detail</h4>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="text-muted text-decoration-none" href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item" aria-current="page">detail</li>
          </ol>
        </nav>
      </div>
      <div class="col-3">
        <div class="text-center mb-n5">
          <img src="../../dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="shop-detail">
  <div class="card shadow-none border">
    {{-- @foreach ($Buku as $data) --}}
      <div class="card-body p-4">
        <div class="row">
          <div class="col-lg-6">
            <div class="item rounded overflow-hidden">
              <img src="{{ asset('storage/tambahbuku/' . $Buku->foto) }}" alt="" class="img-fluid">
            </div>

          </div>
          <div class="col-lg-6">
            <div class="shop-content">
              <div class="d-flex align-items-center gap-2 mb-2">
                <span class="badge text-bg-success fs-2 fw-semibold rounded-3">In Stock</span>
                <span class="fs-2">books</span>
              </div>
              <h4 class="fw-semibold">{{ $Buku->nama_buku }}</h4>
              <p class="mb-3">{{ $Buku->deskripsi }}</p>
              <h4 class="fw-semibold mb-3"><del class="fs-5 text-muted">$350</del> $275</h4>
              <div class="d-flex align-items-center gap-8 pb-4 border-bottom">
                <ul class="list-unstyled d-flex align-items-center mb-0">
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning fs-4"></i></a>
                  </li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning fs-4"></i></a>
                  </li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning fs-4"></i></a>
                  </li>
                  <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning fs-4"></i></a>
                  </li>
                  <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning fs-4"></i></a>
                  </li>
                </ul>
                <a href="javascript:void(0)">(236 reviews)</a>
              </div>
              <div class="d-flex align-items-center gap-8 py-7">
                <h6 class="mb-0 fs-4 fw-semibold">Colors:</h6>
                <a class="rounded-circle d-block bg-primary p-6" href="javascript:void(0)"></a>
              </div>
              <div class="d-flex align-items-center gap-7 pb-7 mb-7 border-bottom">
                <h6 class="mb-0 fs-4 fw-semibold">QTY:</h6>
                <div class="input-group input-group-sm rounded">
                  <button
                    class="btn minus min-width-40 py-0 border-end border-secondary fs-5 border-end-0 text-secondary"
                    type="button" id="add1"><i class="ti ti-minus"></i></button>
                  <input type="text"
                    class="min-width-40 flex-grow-0 border border-secondary text-secondary fs-4 fw-semibold form-control text-center qty"
                    placeholder="" aria-label="Example text with button addon" aria-describedby="add1" value="1">
                  <button class="btn min-width-40 py-0 border border-secondary fs-5 border-start-0 text-secondary add"
                    type="button" id="addo2"><i class="ti ti-plus"></i></button>
                </div>
              </div>
              <div class="d-sm-flex align-items-center gap-3 pt-8 mb-7">
                <a href="javascript:void(0)" class="btn d-block btn-primary px-5 py-8 mb-2 mb-sm-0">Buy Now</a>
                <a href="javascript:void(0)" class="btn d-block btn-danger px-7 py-8">Add to Cart</a>
              </div>
              <p class="mb-0">Dispatched in 2-3 weeks</p>
              <a href="javascript:void(0)">Why the longer time for delivery?</a>
            </div>
          </div>
        </div>
      </div>
    {{-- @endforeach --}}
  </div>
  <div class="card shadow-none border">
    <div class="card-body p-4">
      <ul class="nav nav-pills user-profile-tab border-bottom" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button
            class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
            id="pills-description-tab" data-bs-toggle="pill" data-bs-target="#pills-description" type="button"
            role="tab" aria-controls="pills-description" aria-selected="true">
            Description
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button
            class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6"
            id="pills-reviews-tab" data-bs-toggle="pill" data-bs-target="#pills-reviews" type="button"
            role="tab" aria-controls="pills-reviews" aria-selected="false">
            Reviews
          </button>
        </li>
      </ul>
      <div class="tab-content pt-4" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
          aria-labelledby="pills-description-tab" tabindex="0">
          <h5 class="fs-5 fw-semibold mb-7">
            Sed at diam elit. Vivamus tortor odio, pellentesque eu tincidunt a, aliquet sit amet lorem pellentesque
            eu tincidunt a, aliquet sit amet lorem.
          </h5>
          <p class="mb-7">
            Cras eget elit semper, congue sapien id, pellentesque diam. Nulla faucibus diam nec fermentum
            ullamcorper. Praesent sed ipsum ut augue vestibulum malesuada. Duis
            vitae volutpat odio. Integer sit amet elit ac justo sagittis dignissim.
          </p>
          <p class="mb-0">
            Vivamus quis metus in nunc semper efficitur eget vitae diam. Proin justo diam, venenatis sit amet eros
            in, iaculis auctor magna. Pellentesque sit amet accumsan urna, sit
            amet pretium ipsum. Fusce condimentum venenatis mauris et luctus. Vestibulum ante ipsum primis in
            faucibus orci luctus et ultrices posuere cubilia curae;
          </p>
        </div>
        <div class="tab-pane fade" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab"
          tabindex="0">
          <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="card shadow-none border w-100 mb-7 mb-lg-0">
                <div class="card-body text-center p-4 d-flex flex-column justify-content-center">
                  <h6 class="mb-3">Average Rating</h6>
                  <h2 class="text-primary mb-3 fw-semibold fs-9">4/5</h2>
                  <ul class="list-unstyled d-flex align-items-center justify-content-center mb-0">
                    <li><a class="me-1" href="javascript:void(0)"><i
                          class="ti ti-star text-warning fs-6"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i
                          class="ti ti-star text-warning fs-6"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i
                          class="ti ti-star text-warning fs-6"></i></a></li>
                    <li><a class="me-1" href="javascript:void(0)"><i
                          class="ti ti-star text-warning fs-6"></i></a></li>
                    <li><a class="" href="javascript:void(0)"><i
                          class="ti ti-star text-warning fs-6"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="card shadow-none border w-100 mb-7 mb-lg-0">
                <div class="card-body p-4 d-flex flex-column justify-content-center">
                  <div class="d-flex align-items-center gap-9 mb-3">
                    <span class="flex-shrink-0 fs-2">1 Stars</span>
                    <div class="progress bg-light-primary w-100" style="height: 4px;">
                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100" style="width: 45%;"></div>
                    </div>
                    <h6 class="mb-0">(485)</h6>
                  </div>
                  <div class="d-flex align-items-center gap-9 mb-3">
                    <span class="flex-shrink-0 fs-2">2 Stars</span>
                    <div class="progress bg-light-primary w-100" style="height: 4px;">
                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                    <h6 class="mb-0">(215)</h6>
                  </div>
                  <div class="d-flex align-items-center gap-9 mb-3">
                    <span class="flex-shrink-0 fs-2">3 Stars</span>
                    <div class="progress bg-light-primary w-100" style="height: 4px;">
                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100" style="width: 20%;"></div>
                    </div>
                    <h6 class="mb-0">(110)</h6>
                  </div>
                  <div class="d-flex align-items-center gap-9 mb-3">
                    <span class="flex-shrink-0 fs-2">4 Stars</span>
                    <div class="progress bg-light-primary w-100" style="height: 4px;">
                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100" style="width: 80%;"></div>
                    </div>
                    <h6 class="mb-0">(620)</h6>
                  </div>
                  <div class="d-flex align-items-center gap-9">
                    <span class="flex-shrink-0 fs-2">5 Stars</span>
                    <div class="progress bg-light-primary w-100" style="height: 4px;">
                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100" style="width: 12%;"></div>
                    </div>
                    <h6 class="mb-0">(160)</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="card shadow-none border w-100 mb-7 mb-lg-0">
                <div class="card-body p-4 d-flex flex-column justify-content-center">
                  <button type="button" class="btn btn-outline-primary d-flex align-items-center gap-2 mx-auto"><i
                      class="ti ti-pencil fs-7"></i>Write an Review</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="related-products pt-7">
    <h4 class="mb-3 fw-semibold">Related Products</h4>
    <div class="row">
      <div class="col-sm-6 col-xl-3">
        <div class="card hover-img overflow-hidden rounded-2">
          <div class="position-relative">
            <a href="javascript:void(0)"><img src="../../dist/images/products/s2.jpg"
                class="card-img-top rounded-0" alt="..."></a>
          </div>
          <div class="card-body pt-3 p-4">
            <h6 class="fw-semibold fs-4">Psalms Book for Growth</h6>
            <div class="d-flex align-items-center justify-content-between">
              <h6 class="fw-semibold fs-4 mb-0">$89 <span
                  class="ms-2 fw-normal text-muted fs-3"><del>$99</del></span></h6>
              <ul class="list-unstyled d-flex align-items-center mb-0">
                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card hover-img overflow-hidden rounded-2">
          <div class="position-relative">
            <a href="javascript:void(0)"><img src="../../dist/images/products/s4.jpg"
                class="card-img-top rounded-0" alt="..."></a>
          </div>
          <div class="card-body pt-3 p-4">
            <h6 class="fw-semibold fs-4">Boat Headphone</h6>
            <div class="d-flex align-items-center justify-content-between">
              <h6 class="fw-semibold fs-4 mb-0">$50 <span
                  class="ms-2 fw-normal text-muted fs-3"><del>$65</del></span></h6>
              <ul class="list-unstyled d-flex align-items-center mb-0">
                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card hover-img overflow-hidden rounded-2">
          <div class="position-relative">
            <a href="javascript:void(0)"><img src="../../dist/images/products/s5.jpg"
                class="card-img-top rounded-0" alt="..."></a>
          </div>
          <div class="card-body pt-3 p-4">
            <h6 class="fw-semibold fs-4">MacBook Air Pro</h6>
            <div class="d-flex align-items-center justify-content-between">
              <h6 class="fw-semibold fs-4 mb-0">$650 <span
                  class="ms-2 fw-normal text-muted fs-3"><del>$900</del></span></h6>
              <ul class="list-unstyled d-flex align-items-center mb-0">
                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="card hover-img overflow-hidden rounded-2">
          <div class="position-relative">
            <a href="javascript:void(0)"><img src="../../dist/images/products/s6.jpg"
                class="card-img-top rounded-0" alt="..."></a>
          </div>
          <div class="card-body pt-3 p-4">
            <h6 class="fw-semibold fs-4">Gaming Console</h6>
            <div class="d-flex align-items-center justify-content-between">
              <h6 class="fw-semibold fs-4 mb-0">$25 <span
                  class="ms-2 fw-normal text-muted fs-3"><del>$31</del></span></h6>
              <ul class="list-unstyled d-flex align-items-center mb-0">
                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
                <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="dark-transparent sidebartoggler"></div>
<div class="dark-transparent sidebartoggler"></div>
</div>
@endsection
