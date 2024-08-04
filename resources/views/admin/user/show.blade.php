@extends('admin.app', ['title' => 'کاربر'])
@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">
                                    کاربران /
                                    <strong class="text-primary small">{{ $user->name }}</strong>
                                </h3>
                                <div class="nk-block-des text-soft">
                                    <ul class="list-inline">
                                        <li>شناسه کاربر: <span class="text-base">{{ $user->slug }}</span></li>
                                        <li>
                                            آخرین ورود:
                                            <span class="text-base">21 آبان 1402 01:02 بعد از ظهر</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="{{ url()->previous() }}"
                                    class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                        class="icon ni ni-arrow-left"></em><span>بازگشت</span></a>
                                <a href="html/user-list-regular.html"
                                    class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                        class="icon ni ni-arrow-left"></em></a>
                            </div>
                        </div>
                    </div>
                    <!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card">
                            <div class="card-aside-wrap">
                                <div class="card-content">
                                    <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#"><em
                                                    class="icon ni ni-user-circle"></em><span>شخصی</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><em
                                                    class="icon ni ni-repeat"></em><span>تراکنش
                                                    ها</span></a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><em
                                                    class="icon ni ni-activity"></em><span>فعالیت
                                                    ها</span></a>
                                        </li>
                                        <li class="nav-item nav-item-trigger d-xxl-none">
                                            <a href="#" class="toggle btn btn-icon btn-trigger"
                                                data-target="userAside"><em class="icon ni ni-user-list-fill"></em></a>
                                        </li>
                                    </ul>
                                    <!-- .nav-tabs -->
                                    <div class="card-inner">
                                        <div class="nk-block">
                                            <div class="nk-block-head">
                                                <h5 class="title">اطلاعات شخصی</h5>
                                            </div>
                                            <!-- .nk-block-head -->
                                            <div class="profile-ud-list">
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">نام کامل</span>
                                                        <span class="profile-ud-value">{{ $user->name }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">شماره تلفن همراه</span>
                                                        <span class="profile-ud-value">{{ $user->mobile }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">نشانی ایمیل</span>
                                                        <span class="profile-ud-value">{{ $user->email }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .profile-ud-list -->
                                        </div>
                                        <!-- .nk-block -->
                                        <div class="nk-block">
                                            <div class="nk-block-head nk-block-head-line">
                                                <h6 class="title overline-title text-base">
                                                    اطلاعات تکمیلی
                                                </h6>
                                            </div>
                                            <!-- .nk-block-head -->
                                            <div class="profile-ud-list">
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">تاریخ عضویت</span>
                                                        <span class="profile-ud-value">{{ $user->created_at_p }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">کدپستی</span>
                                                        <span
                                                            class="profile-ud-value">{{ $user->address[0]->mail_code }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">شهر</span>
                                                        <span class="profile-ud-value">{{ $user->address[0]->city }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">آدرس</span>
                                                        <span
                                                            class="profile-ud-value">{{ $user->address[0]->address }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- .profile-ud-list -->
                                        </div>
                                        <!-- .nk-block -->
                                        <div class="nk-divider divider md"></div>
                                        <!-- .nk-block -->
                                    </div>
                                    <!-- .card-inner -->
                                </div>
                                <!-- .card-content -->
                                <!-- .card-aside -->
                            </div>
                            <!-- .card-aside-wrap -->
                        </div>
                        <!-- .card -->
                    </div>
                    <!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
