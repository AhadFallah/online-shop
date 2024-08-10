@extends('admin.app', ['title' => 'مشخصات فروشنده'])
@section('content')
<div class="nk-content">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">
                                مشخصات فروشنده
                            </h3>
                            <div class="nk-block-des text-soft">
                            </div>
                        </div>
                        <div class="nk-block-head-content">
                            <a href="{{url()->previous()}}"
                                class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                    class="icon ni ni-arrow-left"></em><span>بازگشت</span></a>
                            <a href="{{url()->previous()}}"
                                class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                    class="icon ni ni-arrow-left"></em></a>
                        </div>
                    </div>
                </div>
                <!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-lg-4 col-xl-4 col-xxl-3">
                            <div class="card">
                                <div class="card-inner-group">
                                    <div class="card-inner">
                                        <div class="user-card user-card-s2">
                                            <div class="user-info">
                                                <h5>{{$seller->name}}</h5>
                                                <span class="sub-text">{{$seller->user->name}}</span>
                                                <span class="sub-text">{{$seller->user->email}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner">
                                        <div class="row text-center">
                                            <div class="col-4">
                                                <div class="profile-stats">
                                                    <span class="amount">23</span>
                                                    <span class="sub-text">محصولات</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="profile-stats">
                                                    <span class="amount">20</span>
                                                    <span class="sub-text">فروش</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="profile-stats">
                                                    <span class="amount">3</span>
                                                    <span class="sub-text">مرجوعی</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .card-inner -->
                                    <div class="card-inner">
                                        <h6 class="overline-title mb-2">مشخصات کوتاه</h6>
                                        <div class="row g-3">
                                            <div class="col-sm-6 col-md-4 col-lg-12">
                                                <span class="sub-text">شناسه کاربر:</span>
                                                <span>{{$seller->user->slug}}</span>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-12">
                                                <span class="sub-text">شماره شبا:</span>
                                                <span>{{$seller->shaba}}</span>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-lg-12">
                                                <span class="sub-text">شماره کارت:</span>
                                                <span>
                                                    {{$seller->card}}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .card-inner -->
                                </div>
                            </div>
                        </div>
                        <!-- .col -->
                        <div class="col-lg-8 col-xl-8 col-xxl-9">
                            <div class="card">
                                <div class="card-inner">
                                    <div class="nk-block">
                                        <div class="row">
                                            <div class="col">
                                                <div class="overline-title-alt mb-2 mt-2">

                                                    بدهکار
                                                </div>
                                                <div class="profile-balance">
                                                    <div class="profile-balance-group gx-4">
                                                        <div class="profile-balance-sub">
                                                            <div class="profile-balance-amount">
                                                                <div class="number">
                                                                    {{$seller->debtor}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col">

                                                <div class="overline-title-alt mb-2 mt-2">

                                                    طلبکار
                                                </div>
                                                <div class="profile-balance">
                                                    <div class="profile-balance-group gx-4">
                                                        <div class="profile-balance-sub">
                                                            <div class="profile-balance-amount">
                                                                <div class="number">
                                                                    {{$seller->creditor}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col">

                                                <div class="overline-title-alt mb-2 mt-2">
                                                    تراز
                                                </div>
                                                <div class="profile-balance">
                                                    <div class="profile-balance-group gx-4">
                                                        <div class="profile-balance-sub">
                                                            <div class="profile-balance-amount">
                                                                <div class="number">
                                                                    {{$seller->balance}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-block">
                                        <h6 class="lead-text mb-3">لیست محصولات</h6>
                                        <div class="nk-tb-list nk-tb-ulist is-compact card">
                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">شناسه سفارش</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <span class="sub-text">نام محصول</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span class="sub-text">قیمت کل</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">وضعیت</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">تحویل</span>
                                                </div>
                                            </div>
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col">
                                                    <a href="#"><span class="fw-bold">#4947</span></a>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <span class="tb-product">
                                                        <img src="./images/product/c.png" alt="" class="thumb" />
                                                        <span class="title">ساعت هوشمند Mi Band مشکی</span>
                                                    </span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span class="amount">89,000 تومان</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="lead-text text-warning">ارسال شده</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">در 2 روز</span>
                                                </div>
                                            </div>
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col">
                                                    <a href="#"><span class="fw-bold">#4948</span></a>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <span class="tb-product">
                                                        <img src="./images/product/b.png" alt="" class="thumb" />
                                                        <span class="title">ساعت هوشمند بنفش</span>
                                                    </span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span class="amount">299,000 تومان</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="lead-text text-success">تحویل داده شده</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">12 آبان 1402</span>
                                                </div>
                                            </div>
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col">
                                                    <a href="#"><span class="fw-bold">#4949</span></a>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <span class="tb-product">
                                                        <img src="./images/product/a.png" alt="" class="thumb" />
                                                        <span class="title">ردیاب تناسب اندام صورتی</span>
                                                    </span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span class="amount">99,000 تومان</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="lead-text text-danger">لغو شده</span>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <span class="sub-text">هیچ وقت</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .nk-tb-list -->
                                    </div>
                                </div>
                                <!-- .card-inner -->
                            </div>
                            <!-- .card -->
                        </div>
                        <!-- .col -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection
