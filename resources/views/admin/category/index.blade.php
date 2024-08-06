@extends('admin.app', ['title' => 'دسته بندی ها'])
@section('content')
<div class="nk-content">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">لیست دسته‌بندی</h3>
                            <div class="nk-block-des text-soft">
                                <p>شما در مجموع {{ $categories->total() }} دسته‌بندی دارید.</p>
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
                                            <div class="form-control-wrap">
                                                <a class="btn btn-primary" href="{{route('categories.create')}}">افزودن
                                                </a>
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
                            <div class="nk-tb-col tb-col-xl"><span class="sub-text">دسته‌بندی</span></div>
                            <div class="nk-tb-col tb-col-md"><span class="sub-text">توضیحات</span></div>
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

                        @foreach ($categories as $category)
                        <!-- .nk-tb-item -->
                        <div class="nk-tb-item">
                            <div class="nk-tb-col nk-tb-col-check">
                            </div>
                            <div class="nk-tb-col tb-col-xl">
                                {{ $category->name }}
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                {{ $category->description }}
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
                                                        <a href=""><em class="icon ni ni-eye"></em><span>مشاهده
                                                                مشخصات</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><em
                                                                class="icon ni ni-repeat"></em><span>سفارشات</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><em
                                                                class="icon ni ni-activity-round"></em><span>فعالیت
                                                                ها</span></a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#"><em
                                                                class="icon ni ni-shield-star"></em><span>بازنشانی
                                                                رمز
                                                                عبور</span></a>
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
                                    @if ($categories->onFirstPage())
                                    <li class="page-item disabled"><span class="page-link">قبلی</span>
                                    </li>
                                    @else
                                    <li class="page-item"><a class="page-link"
                                            href="{{ $categories->previousPageUrl() }}">قبلی</a></li>
                                    @endif

                                    <!-- Pagination Elements -->
                                    @foreach ($categories->getUrlRange(1, $categories->lastPage()) as $page => $url)
                                    <li class="page-item {{ $page == $categories->currentPage() ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                    @endforeach

                                    <!-- Next Page Link -->
                                    @if ($categories->hasMorePages())
                                    <li class="page-item"><a class="page-link"
                                            href="{{ $categories->nextPageUrl() }}">بعدی</a>
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
                                            @for ($i = 1; $i <= $categories->lastPage(); $i++)
                                                <option value="page-{{ $i }}" {{ $i==$categories->currentPage() ?
                                                    'selected' : '' }}>
                                                    {{ $i }}</option>
                                                @endfor
                                        </select>
                                    </div>
                                    <div>از {{ $categories->lastPage() }}</div>
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

</div>
@endsection
