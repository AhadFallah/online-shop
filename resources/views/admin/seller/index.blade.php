@extends('admin.app', ['title' => 'فروشندگان'])
@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">لیست فروشندگان</h3>
                                <div class="nk-block-des text-soft">
                                    <p>شما در مجموع {{ $sellers->total() }} فروشنده دارید.</p>
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
                                                <a href="{{ route('sellers.create') }}" class="btn btn-primary">افزودن
                                                    فروشنده</a>
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

                                <div class="nk-tb-col tb-col-md"><span class="sub-text">نام</span></div>
                                <div class="nk-tb-col tb-col-lg"><span class="sub-text">بدهکار</span></div>
                                <div class="nk-tb-col tb-col-md"><span class="sub-text">طلبکار</span></div>
                                <div class="nk-tb-col tb-col-md"><span class="sub-text">بالانس</span></div>
                                <div class="nk-tb-col tb-col-md"><span class="sub-text">وضعیت</span></div>
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

                            @foreach ($sellers as $seller)
                                <!-- .nk-tb-item -->
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col nk-tb-col-check">
                                    </div>
                                    <div class="nk-tb-col">
                                        <div class="seller-card">
                                            <div class="seller-avatar base">
                                                <em class="icon ni ni-seller-alt"></em>
                                            </div>
                                            <div class="seller-info">
                                                <span class="tb-lead">{{ $seller->user->name }} <span
                                                        class="dot dot-success d-md-none ms-1"></span></span>
                                                <span>{{ $seller->user->email }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span>{{ $seller->name }}</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-lg">
                                        <span>{{ $seller->debtor }}</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span>{{ $seller->creditor }}</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span>{{ $seller->balance }}</span>
                                    </div>

                                    <div class="nk-tb-col tb-col-md">
                                        @if ($seller->is_active)
                                            <span class="tb-status text-success">فعال</span>
                                        @else
                                            <span class="tb-status text-danger">غیر فعال</span>
                                        @endif
                                    </div>
                                    <div class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">

                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                        data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li>
                                                                <a href="{{ route('sellers.show', $seller) }}"><em
                                                                        class="icon ni ni-eye"></em><span>مشاهده
                                                                        مشخصات</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('sellers.edit', $seller) }}"><em
                                                                        class="icon ni ni-edit"></em><span>ویرایش</span></a>
                                                            </li>
                                                            <li>
                                                                @if ($seller->is_active)
                                                                    <a href="#"
                                                                        onclick="event.preventDefault();document.getElementById('sus{{ $seller->id }}').submit();"><em
                                                                            class="icon ni ni-na"></em><span>تعلیق</span></a>
                                                                @else
                                                                    <a href="#"
                                                                        onclick="event.preventDefault();document.getElementById('sus{{ $seller->id }}').submit();"><em
                                                                            class="icon ni ni-check-circle-cut"></em><span>فعال
                                                                            کردن</span></a>
                                                                @endif
                                                                <form action="{{ route('susSeller', $seller) }}"
                                                                    id='sus{{ $seller->id }}' method="post">
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
                                        @if ($sellers->onFirstPage())
                                            <li class="page-item disabled"><span class="page-link">قبلی</span>
                                            </li>
                                        @else
                                            <li class="page-item"><a class="page-link"
                                                    href="{{ $sellers->previousPageUrl() }}">قبلی</a></li>
                                        @endif

                                        <!-- Pagination Elements -->
                                        @foreach ($sellers->getUrlRange(1, $sellers->lastPage()) as $page => $url)
                                            <li class="page-item {{ $page == $sellers->currentPage() ? 'active' : '' }}">
                                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                            </li>
                                        @endforeach

                                        <!-- Next Page Link -->
                                        @if ($sellers->hasMorePages())
                                            <li class="page-item"><a class="page-link"
                                                    href="{{ $sellers->nextPageUrl() }}">بعدی</a>
                                            </li>
                                        @else
                                            <li class="page-item disabled"><span class="page-link">بعدی</span>
                                            </li>
                                        @endif
                                    </ul>
                                    <!-- .pagination -->
                                </div>
                                <div class="g">
                                    <div
                                        class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                        <div>صفحه</div>
                                        <div>
                                            <select class="form-select js-select2" data-search="on"
                                                data-dropdown="xs center">
                                                <!-- Generate options -->
                                                @for ($i = 1; $i <= $sellers->lastPage(); $i++)
                                                    <option value="page-{{ $i }}"
                                                        {{ $i == $sellers->currentPage() ? 'selected' : '' }}>
                                                        {{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div>از {{ $sellers->lastPage() }}</div>
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
        @if (session('self_error'))
            <div class="suspension_error">

            </div>
        @endif
    </div>
@endsection
