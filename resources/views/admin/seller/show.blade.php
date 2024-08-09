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
                                <a href="html/customer-list.html"
                                    class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                        class="icon ni ni-arrow-left"></em><span>بازگشت</span></a>
                                <a href="html/customer-list.html"
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
                                                <div class="user-avatar lg bg-primary">
                                                    <img src="./images/avatar/b-sm.jpg" alt="" />
                                                </div>
                                                <div class="user-info">
                                                    <div class="badge bg-light rounded-pill ucap">
                                                        پلاتینیوم
                                                    </div>
                                                    <h5>علی صادقی</h5>
                                                    <span class="sub-text">someone@email.com</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner card-inner-sm">
                                            <ul class="btn-toolbar justify-center gx-1">
                                                <li>
                                                    <a href="#" class="btn btn-trigger btn-icon"><em
                                                            class="icon ni ni-shield-off"></em></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn btn-trigger btn-icon"><em
                                                            class="icon ni ni-mail"></em></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn btn-trigger btn-icon"><em
                                                            class="icon ni ni-bookmark"></em></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn btn-trigger btn-icon text-danger"><em
                                                            class="icon ni ni-na"></em></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-inner">
                                            <div class="row text-center">
                                                <div class="col-4">
                                                    <div class="profile-stats">
                                                        <span class="amount">23</span>
                                                        <span class="sub-text">کل سفارش</span>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="profile-stats">
                                                        <span class="amount">20</span>
                                                        <span class="sub-text">کامل</span>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="profile-stats">
                                                        <span class="amount">3</span>
                                                        <span class="sub-text">پیشرفت</span>
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
                                                    <span>UD003054</span>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-12">
                                                    <span class="sub-text">ایمیل صورتحساب:</span>
                                                    <span>billing@yourwebsite.com</span>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-12">
                                                    <span class="sub-text">نشانی صورتحساب:</span>
                                                    <span>
                                                        ایران، البرز، کرج، <br />
                                                        خیابان طالقانی، میدان آزادگان
                                                    </span>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-12">
                                                    <span class="sub-text">زبان:</span>
                                                    <span>فارسی، انگلیسی</span>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-12">
                                                    <span class="sub-text">آخرین ورود:</span>
                                                    <span>21 آبان 1402 01:02 بعد از ظهر</span>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-12">
                                                    <span class="sub-text">وضعیت احراز هویت فروشنده:</span>
                                                    <span class="lead-text text-success">تایید شده</span>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-12">
                                                    <span class="sub-text">ثبت نام در:</span>
                                                    <span>21 آبان 1401</span>
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
                                            <div class="overline-title-alt mb-2 mt-2">
                                                در حساب
                                            </div>
                                            <div class="profile-balance">
                                                <div class="profile-balance-group gx-4">
                                                    <div class="profile-balance-sub">
                                                        <div class="profile-balance-amount">
                                                            <div class="number">
                                                                238,000
                                                                <small class="currency currency-usd">تومان</small>
                                                            </div>
                                                        </div>
                                                        <div class="profile-balance-subtitle">
                                                            موجودی کیف پول
                                                        </div>
                                                    </div>
                                                    <div class="profile-balance-sub">
                                                        <span class="profile-balance-plus text-soft"><em
                                                                class="icon ni ni-plus"></em></span>
                                                        <div class="profile-balance-amount">
                                                            <div class="number">16,000</div>
                                                        </div>
                                                        <div class="profile-balance-subtitle">
                                                            امتیازات اعتباری
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-block">
                                            <h6 class="lead-text mb-3">سفارشات اخیر</h6>
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
                                                            <img src="./images/product/c.png" alt=""
                                                                class="thumb" />
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
                                                            <img src="./images/product/b.png" alt=""
                                                                class="thumb" />
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
                                                            <img src="./images/product/a.png" alt=""
                                                                class="thumb" />
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
                                        <div class="nk-block">
                                            <h6 class="lead-text mb-3">روش های پرداخت</h6>
                                            <div class="row g-3">
                                                <div class="col-xl-12 col-xxl-6">
                                                    <div class="card">
                                                        <div class="card-inner">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="icon-circle icon-circle-lg">
                                                                        <em class="icon ni ni-visa"></em>
                                                                    </div>
                                                                    <div class="ms-3">
                                                                        <h6 class="lead-text">
                                                                            بانک ملت
                                                                            <span class="text-soft ml-1">1955 ****</span>
                                                                        </h6>
                                                                        <span class="sub-text">در آبان 1403 منقضی می
                                                                            شود</span>
                                                                    </div>
                                                                </div>
                                                                <ul
                                                                    class="btn-toolbar justify-center gx-1 me-n1 flex-nowrap">
                                                                    <li>
                                                                        <a href="#"
                                                                            class="btn btn-trigger btn-icon"><em
                                                                                class="icon ni ni-edit"></em></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"
                                                                            class="btn btn-trigger btn-icon"><em
                                                                                class="icon ni ni-trash"></em></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .col -->
                                                <div class="col-xl-12 col-xxl-6">
                                                    <div class="card">
                                                        <div class="card-inner">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="icon-circle icon-circle-lg bg-indigo">
                                                                        <em class="icon ni ni-american-express"></em>
                                                                    </div>
                                                                    <div class="ms-3">
                                                                        <h6 class="lead-text">
                                                                            بانک سامان
                                                                            <span class="text-soft ml-1">4352 ****</span>
                                                                        </h6>
                                                                        <span class="sub-text">در بهمن 1404 منقضی می
                                                                            شود</span>
                                                                    </div>
                                                                </div>
                                                                <ul
                                                                    class="btn-toolbar justify-center gx-1 me-n1 flex-nowrap">
                                                                    <li>
                                                                        <a href="#"
                                                                            class="btn btn-trigger btn-icon"><em
                                                                                class="icon ni ni-edit"></em></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"
                                                                            class="btn btn-trigger btn-icon"><em
                                                                                class="icon ni ni-trash"></em></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .col -->
                                                <div class="col-xl-12 col-xxl-6">
                                                    <div class="card">
                                                        <div class="card-inner">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="icon-circle icon-circle-lg bg-orange">
                                                                        <em class="icon ni ni-mc"></em>
                                                                    </div>
                                                                    <div class="ms-3">
                                                                        <h6 class="lead-text">
                                                                            بانک شهر
                                                                            <span class="text-soft ml-1">9478 ****</span>
                                                                        </h6>
                                                                        <span class="sub-text text-danger">منقضی شده</span>
                                                                    </div>
                                                                </div>
                                                                <ul
                                                                    class="btn-toolbar justify-center gx-1 me-n1 flex-nowrap">
                                                                    <li>
                                                                        <a href="#"
                                                                            class="btn btn-trigger btn-icon"><em
                                                                                class="icon ni ni-edit"></em></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"
                                                                            class="btn btn-trigger btn-icon"><em
                                                                                class="icon ni ni-trash"></em></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .col -->
                                                <div class="col-xl-12 col-xxl-6">
                                                    <button
                                                        class="h-100 w-100 bg-white card round-sm p-4 d-flex align-items-center justify-content-center"
                                                        data-bs-toggle="modal" data-bs-target="#add-card">
                                                        <span class="text-soft">افزودن کارت جدید</span>
                                                    </button>
                                                </div>
                                                <!-- .col -->
                                            </div>
                                            <!-- .row -->
                                        </div>
                                        <div class="nk-block">
                                            <h6 class="lead-text">اتصال به فیس بوک</h6>
                                            <div class="card">
                                                <div class="card-inner">
                                                    <div class="between-center flex-wrap flex-md-nowrap g-3">
                                                        <div class="media media-center gx-3 wide-xs">
                                                            <div class="media-object">
                                                                <em
                                                                    class="icon icon-circle icon-circle-lg ni ni-facebook-f"></em>
                                                            </div>
                                                            <div class="media-content">
                                                                <p>
                                                                    شما با موفقیت به حساب فیس بوک خود متصل شدید، می توانید
                                                                    به راحتی با استفاده از حساب کاربری خود نیز وارد شوید.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="nk-block-actions flex-shrink-0">
                                                            <a href="#" class="btn btn-lg btn-danger">لغو دسترسی</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .nk-card-inner -->
                                            </div>
                                            <!-- .nk-card -->
                                            <h6 class="lead-text">اتصال به گوگل</h6>
                                            <div class="card">
                                                <div class="card-inner">
                                                    <div class="between-center flex-wrap flex-md-nowrap g-3">
                                                        <div class="media media-center gx-3 wide-xs">
                                                            <div class="media-object">
                                                                <em
                                                                    class="icon icon-circle icon-circle-lg ni ni-google"></em>
                                                            </div>
                                                            <div class="media-content">
                                                                <p>
                                                                    می توانید با حساب گوگل خود متصل شوید.
                                                                    <em class="d-block text-soft">هنوز متصل نشده</em>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="nk-block-actions flex-shrink-0">
                                                            <a href="#"
                                                                class="btn btn-lg btn-dim btn-primary">اتصال</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .nk-card-inner -->
                                            </div>
                                            <!-- .nk-card -->
                                            <div class="nk-block-head nk-block-head-sm">
                                                <div class="nk-block-head-content">
                                                    <h6 class="nk-block-title">
                                                        وارد کردن مخاطب
                                                        <a href="#" class="link link-primary ms-auto">وارد کردن از
                                                            گوگل</a>
                                                    </h6>
                                                    <div class="nk-block-des">
                                                        <p>
                                                            شما مخاطبین را از تلفن همراه خود وارد نکردید.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .nk-block-head -->
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
