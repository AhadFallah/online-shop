@extends('admin.app', ['title' => 'کاربران'])
@section('content')
<div class="nk-content">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">لیست کاربران</h3>
                            <div class="nk-block-des text-soft">
                                <p>شما در مجموع {{ $users->total() }} کاربر دارید.</p>
                            </div>
                        </div>
                        <!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                    data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="more-options">
                                    <ul class="nk-block-tools g-3">
                                        <li>

                                            <div class="form-control-wrap">
                                                <form action="" method="GET">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="default-04"
                                                            name="search" placeholder="جستجو در نام و ایمیل" />
                                                        <button type="submit" class="btn btn-primary"><em
                                                                class="icon ni ni-search"></em> جستجو</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="drodown">
                                                <a href="#"
                                                    class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white"
                                                    data-bs-toggle="dropdown">فیلتر</a>

                                                <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                    <div class="dropdown-head">
                                                        <span class="sub-title dropdown-title">فیلتر کاربران</span>
                                                        <div class="dropdown">
                                                            <a href="#" class="btn btn-sm btn-icon">
                                                                <em class="icon ni ni-more-h"></em>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-body dropdown-body-rg">

                                                        <form action="{{ route('users.index') }}" method="get">
                                                            <div class="row gx-6 gy-3">
                                                                <div class="col-6">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="radio" value="all"
                                                                            class="custom-control-input" id="is_seller3"
                                                                            name="is_seller"
                                                                            @checked(request('is_seller')=='all'
                                                                            ||!request('is_seller') ) />
                                                                        <label class="custom-control-label"
                                                                            for="is_seller3">همه</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="radio" value='all'
                                                                            class="custom-control-input" id="is_active3"
                                                                            name="is_active"
                                                                            @checked(request('is_active')=='all' ||
                                                                            !request('is_active')) />
                                                                        <label class="custom-control-label"
                                                                            for="is_active3">همه</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-6">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="radio" value=1
                                                                            class="custom-control-input" id="is_seller"
                                                                            name="is_seller"
                                                                            @checked(request('is_seller')==1) />
                                                                        <label class="custom-control-label"
                                                                            for="is_seller">فروشنده</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="radio" value=1
                                                                            class="custom-control-input" id="is_active"
                                                                            name="is_active"
                                                                            @checked(request('is_active')==1) />
                                                                        <label class="custom-control-label"
                                                                            for="is_active">فعال</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="radio" value=0
                                                                            class="custom-control-input" id="is_seller2"
                                                                            name="is_seller"
                                                                            @checked(request('is_seller')===0) />
                                                                        <label class="custom-control-label"
                                                                            for="is_seller2">کاربر</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                        <input type="radio" value=0
                                                                            class="custom-control-input" id="is_active2"
                                                                            name="is_active"
                                                                            @checked(request('is_active')===0) />
                                                                        <label class="custom-control-label"
                                                                            for="is_active2">غیر فعال</label>
                                                                    </div>
                                                                </div>



                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <button type="submit"
                                                                            class="btn btn-secondary">فیلتر</button>
                                                                    </div>
                                                                </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                </div>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- .nk-block-head-content -->
                </div>
                <!-- .nk-block-between -->
            </div>
            <!-- .nk-block-head -->
            <div class="nk-block">
                <div class="nk-tb-list is-separate mb-3">
                    <div class="nk-tb-item nk-tb-head">
                        <div class="nk-tb-col nk-tb-col-check">
                        </div>
                        <div class="nk-tb-col"><span class="sub-text">کاربر</span></div>

                        <div class="nk-tb-col tb-col-md"><span class="sub-text">تلفن</span></div>
                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">آخرین سفارش</span></div>
                        <div class="nk-tb-col tb-col-md"><span class="sub-text">وضعیت</span></div>
                        <div class="nk-tb-col tb-col-md"><span class="sub-text">نقش</span></div>
                        <div class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1 my-n1">
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger me-n1"
                                            data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    @foreach ($users as $user)
                    <!-- .nk-tb-item -->
                    <div class="nk-tb-item">
                        <div class="nk-tb-col nk-tb-col-check">
                        </div>
                        <div class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-avatar bg-purple">
                                    <span>ص‌ض</span>
                                </div>
                                <div class="user-info">
                                    <span class="tb-lead">{{ $user->name }} <span
                                            class="dot dot-success d-md-none ms-1"></span></span>
                                    <span>{{ $user->email }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="nk-tb-col tb-col-md">
                            <span>{{ $user->mobile }}</span>
                        </div>
                        <div class="nk-tb-col tb-col-lg">
                            <span>25 شهریور 1402</span>
                        </div>
                        <div class="nk-tb-col tb-col-md">
                            @if ($user->is_active)
                            <span class="tb-status text-success">فعال</span>
                            @else
                            <span class="tb-status text-danger">غیر فعال</span>
                            @endif
                        </div>
                        <div class="nk-tb-col tb-col-md">
                            @if ($user->is_admin)
                            <span class="tb-status text-danger">ادمین</span>
                            @elseif($user->is_staff)
                            <span class="tb-status text-warning">کارمند</span>
                            @elseif($user->is_seller)
                            <span class="tb-status text-information">فروشنده</span>
                            @else
                            <span class="tb-status text-success">کاربر</span>
                            @endif
                        </div>
                        <div class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="ارسال ایمیل">
                                        <em class="icon ni ni-mail-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    @if($user->is_active)
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip"
                                        onclick="event.preventDefault();document.getElementById('sus{{$user->id}}').submit();"
                                        data-bs-placement="top" title="تعلیق کردن">
                                        <em class="icon ni ni-user-cross-fill"></em>
                                    </a>
                                    @else
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip"
                                        onclick="event.preventDefault();document.getElementById('sus{{$user->id}}').submit();"
                                        data-bs-placement="top" title="فعال کردن">
                                        <em class="icon ni ni-user-fill"></em>
                                    </a>

                                    @endif
                                </li>
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                            data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li>
                                                    <a href="html/ecommerce/customer-details.html"><em
                                                            class="icon ni ni-eye"></em><span>مشاهده
                                                            مشخصات</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><em
                                                            class="icon ni ni-repeat"></em><span>سفارشات</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><em class="icon ni ni-activity-round"></em><span>فعالیت
                                                            ها</span></a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#"><em class="icon ni ni-shield-star"></em><span>بازنشانی
                                                            رمز
                                                            عبور</span></a>
                                                </li>
                                                <li>
                                                    @if($user->is_active)
                                                    <a href="#"
                                                        onclick="event.preventDefault();document.getElementById('sus{{$user->id}}').submit();"><em
                                                            class="icon ni ni-na"></em><span>تعلیق</span></a>
                                                    @else
                                                    <a href="#"
                                                        onclick="event.preventDefault();document.getElementById('sus{{$user->id}}').submit();"><em
                                                            class="icon ni ni-check-circle-cut"></em><span>فعال
                                                            کردن</span></a>

                                                    @endif
                                                    <form action="{{route('sus',$user)}}" id='sus{{$user->id}}'
                                                        method="post">
                                                        @csrf
                                                        @method('patch')
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- .nk-tb-item -->
                    @endforeach
                </div>
                <!-- .nk-tb-list -->

                <div class="card-inner">
                    <div class="nk-block-between-md g-3">
                        <div class="g">
                            <ul class="pagination justify-content-center justify-content-md-start">
                                <!-- Previous Page Link -->
                                @if ($users->onFirstPage())
                                <li class="page-item disabled"><span class="page-link">قبلی</span>
                                </li>
                                @else
                                <li class="page-item"><a class="page-link"
                                        href="{{ $users->previousPageUrl() }}">قبلی</a></li>
                                @endif

                                <!-- Pagination Elements -->
                                @foreach ($users->getUrlRange(1, $users->lastPage()) as $page => $url)
                                <li class="page-item {{ $page == $users->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                                @endforeach

                                <!-- Next Page Link -->
                                @if ($users->hasMorePages())
                                <li class="page-item"><a class="page-link" href="{{ $users->nextPageUrl() }}">بعدی</a>
                                </li>
                                @else
                                <li class="page-item disabled"><span class="page-link">بعدی</span>
                                </li>
                                @endif
                            </ul>
                            <!-- .pagination -->
                        </div>
                        <div class="g">
                            <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                <div>صفحه</div>
                                <div>
                                    <select class="form-select js-select2" data-search="on" data-dropdown="xs center">
                                        <!-- Generate options -->
                                        @for ($i = 1; $i <= $users->lastPage(); $i++)
                                            <option value="page-{{ $i }}" {{ $i==$users->currentPage() ? 'selected' : ''
                                                }}>
                                                {{ $i }}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div>از {{ $users->total() }}</div>
                            </div>
                        </div>
                        <!-- .pagination-goto -->
                    </div>
                    <!-- .nk-block-between -->
                </div>

                <!-- .card -->
            </div>
            <!-- .nk-block -->
        </div>
    </div>
</div>
@if(session('self_error'))
<div class="suspension_error">

</div>
@endif
</div>

@endsection
@section('scripts')
<script>
    $(document).ready(function () {
        if ($('.suspension_error').length > 0) {
            toastr.clear();
            Swal.fire('اخطار', 'شما نمیتوانید خودتان را تعلیق کنید', 'error');

        }
    });
</script>
@endsection
