@extends('layouts.mat')
@section('title', 'home')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
                <div class="row">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="col-lg-4 col-sm-6 mb-lg-0 mb-4">
                          <div class="card">
                            <div class="card-header p-3 pt-2">
                              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">send_to_mobile</i>
                              </div>
                              <div class="text-start pt-1">
                                <p class="text-sm mb-0 text-capitalize">عدد مبيعات الهاتف</p>
                                <h4 class="mb-0">{{ $sells->count() }}</h4>
                              </div>
                            </div>
                            <hr class="dark horizontal my-0">
                           
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-lg-0 mb-4">
                          <div class="card">
                            <div class="card-header p-3 pt-2">
                              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">security_update_good
                                </i>
                              </div>
                              <div class="text-start pt-1">
                                <p class="text-sm mb-0 text-capitalize">عدد الهواتف المشتراة</p>
                                <h4 class="mb-0">{{$buys->count()}}</h4>
                              </div>
                            </div>
                            <hr class="dark horizontal my-0">
                           
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-lg-0 mb-4">
                          <div class="card">
                            <div class="card-header p-3 pt-2">
                              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">diversity_2
                                </i>
                              </div>
                              <div class="text-start pt-1">
                                <p class="text-sm mb-0 text-capitalize">عدد الزبائن والعملاء</p>
                                <h4 class="mb-0">
                                  {{$custmers->count()}}
                                </h4>
                              </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mt-4">
                          <div class="card">
                            <div class="card-header p-3 pt-2">
                              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">swap_horizontal_circle
                                </i>
                              </div>
                              <div class="text-start pt-1">
                                <p class="text-sm mb-0 text-capitalize">المقايضات</p>
                                <h4 class="mb-0">{{$swaps->count()}}</h4>
                              </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-lg-0 mt-4">
                          <div class="card">
                            <div class="card-header p-3 pt-2">
                              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">mobile_friendly

                                </i>
                              </div>
                              <div class="text-start pt-1">
                                <p class="text-sm mb-0 text-capitalize">الهواتف الجديدة</p>
                                <h4 class="mb-0">{{ $new_phones->count() }}</h4>
                              </div>
                            </div>
                            <hr class="dark horizontal my-0">
                          
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-lg-0 mt-4">
                          <div class="card">
                            <div class="card-header p-3 pt-2">
                              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">install_mobile
                                </i>
                              </div>
                              <div class="text-start pt-1">
                                <p class="text-sm mb-0 text-capitalize">الهواتف المستعلة</p>
                                <h4 class="mb-0">{{$used_phones->count()}}</h4>
                              </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-lg-0 mt-4">
                          <div class="card">
                            <div class="card-header p-3 pt-2">
                              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">price_change
                                </i>
                              </div>
                              <div class="text-start pt-1">
                                <p class="text-sm mb-0 text-capitalize">إجمالي مبيعات الهواتف</p>
                                <h4 class="mb-0">{{$total_sr}} جنيه</h4>
                              </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-lg-0 mt-4">
                          <div class="card">
                            <div class="card-header p-3 pt-2">
                              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">price_check
                                </i>
                              </div>
                              <div class="text-start pt-1">
                                <p class="text-sm mb-0 text-capitalize">إجمالي مشتريات الهواتف</p>
                                <h4 class="mb-0">{{$total_br}} جنيه</h4>
                              </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-lg-0 mt-4">
                          <div class="card">
                            <div class="card-header p-3 pt-2">
                              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">handyman
                                </i>
                              </div>
                              <div class="text-start pt-1">
                                <p class="text-sm mb-0 text-capitalize">إجمالي الصيانة</p>
                                <h4 class="mb-0">{{$total_rr}} جنيه</h4>
                              </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            
                          </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 mb-lg-0 mt-4">
                          <div class="card">
                            <div class="card-header p-3 pt-2">
                              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">currency_exchange

                                </i>
                              </div>
                              <div class="text-start pt-1">
                                <p class="text-sm mb-0 text-capitalize">اجمالي المقايضات</p>
                                <h4 class="mb-0">{{ $p_d }} جنيه</h4>
                              </div>
                            </div>
                            <hr class="dark horizontal my-0">
                          
                          </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 mb-lg-0 mt-4">
                          <div class="card">
                            <div class="card-header p-3 pt-2">
                              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">attach_money
                                </i>
                              </div>
                              <div class="text-start pt-1">
                                <p class="text-sm mb-0 text-capitalize">إجمالي المعاملات</p>
                                <h4 class="mb-0">{{$revenu}} جنيه</h4>
                              </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            
                          </div>
                        </div>
                      </div>

                {{-- kljk --}}
           
        </div>
    </div>
</div>

<div class="row my-4">
  <div class="col-lg-12 col-md-12 mb-md-0 mb-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row mb-3">
          <div class="col-6">
            <h6>المبيعات</h6>
            <p class="text-sm">
              <i class="fa fa-check text-info" aria-hidden="true"></i>
              <span class="font-weight-bold ms-1">أخر المبيعات</span> هذا الشهر
            </p>
          </div>
          {{-- <div class="col-6 my-auto text-start">
            <div class="dropdown float-start ps-4">
              <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-ellipsis-v text-secondary"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-n4" aria-labelledby="dropdownTable">
                <li><a class="dropdown-item border-radius-md" href="javascript:;">عمل</a></li>
                <li><a class="dropdown-item border-radius-md" href="javascript:;">عمل آخر</a></li>
                <li><a class="dropdown-item border-radius-md" href="javascript:;">شيء آخر هنا</a></li>
              </ul>
            </div>
          </div> --}}
        </div>
      </div>
      <div class="card-body p-0 pb-2">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">العلامة</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">الهاتف</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">السعر</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">نوع العملية</th>
              </tr>
            </thead>
            <tbody>
              @foreach($sales as $key => $sale)
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div>
                      @foreach($sale->phones as $key => $item)
                        <img src="{{ $item->brand->logo->getUrl('thumb') }}" class="avatar avatar-sm ms-3">
                        @endforeach
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm"> 
                        @foreach($sale->phones as $key => $item)
                        {{ $item->name }}
                        @endforeach
                      </h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="avatar-group mt-2">
                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                      @foreach($sale->phones as $key => $item)
                        @foreach ($item->images as $key => $media)
                        <img alt="Image placeholder" src="{{ $media->getUrl('thumb') }}">
                        
                        @endforeach
                        @endforeach
                    </a>
                  </div>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"> {{ $sale->total_price ?? '' }} </span>
                </td>
                <td class="align-middle">
                  <div class="progress-wrapper w-75 mx-auto">
                    <div class="progress-info">
                      <div class="progress-percentage">
                        <span class="text-xs font-weight-bold"> {{ App\Models\Sale::OPERATION_RADIO[$sale->operation] ?? '' }}</span>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  {{-- <div class="col-lg-4 col-md-6">
    <div class="card h-100">
      <div class="card-header pb-0">
        <h6>نظرة عامة على الطلبات</h6>
        <p class="text-sm">
          <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
          <span class="font-weight-bold">24%</span> هذا الشهر
        </p>
      </div>
      <div class="card-body p-3">
        <div class="timeline timeline-one-side">
          @foreach ($sells as $key => $item)
          <div class="timeline-block mb-3">
            <span class="timeline-step">
              <i class="material-icons text-success text-gradient">{{$item->id}}</i>
            </span>
            <div class="timeline-content">
              <h6 class="text-dark text-sm font-weight-bold mb-0">${{$item->total_price}}, 
                @foreach($item->phones as $key => $d)
                {{ $d->name }}
                @endforeach</h6>
              <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
            </div>
          </div>
            
          @endforeach
        </div>
      </div>
    </div>
  </div> --}}
</div>
@endsection
@section('scripts')
@parent

@endsection