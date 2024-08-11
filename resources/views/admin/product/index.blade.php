@extends('admin.app', ['title' => 'محصولات'])
@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">محصولات</h3>
                            </div>
                            <!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                        data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <div class="form-control-wrap">
                                                    <form action="" method="GET">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="default-04"
                                                                name="search" placeholder="جستجو در نام" />
                                                            <button type="submit" class="btn btn-primary"><em
                                                                    class="icon ni ni-search"></em> جستجو</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>
                                            <li class="nk-block-tools-opt">
                                                <a href="{{ route('products.create') }}"
                                                    class=" btn btn-icon btn-primary d-md-none"><em
                                                        class="icon ni ni-plus"></em></a>
                                                <a href="{{ route('products.create') }}"
                                                    class=" btn btn-primary d-none d-md-inline-flex"><em
                                                        class="icon ni ni-plus"></em><span>افزودن محصول</span></a>
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
                        <div class="card">
                            <div class="card-inner-group">
                                <div class="card-inner p-0">
                                    <div class="nk-tb-list">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span>نام</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span>توضحیات</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>دسته بندی</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1 my-n1">
                                                    <li class="me-n1">
                                                        <div class="dropdown">
                                                            <a href="#"
                                                                class="dropdown-toggle btn btn-icon btn-trigger"
                                                                data-bs-toggle="dropdown"><em
                                                                    class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <a href="#"><em
                                                                                class="icon ni ni-edit"></em><span>ویرایش
                                                                                انتخاب شده</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><em
                                                                                class="icon ni ni-trash"></em><span>حذف
                                                                                انتخاب شده</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><em
                                                                                class="icon ni ni-bar-c"></em><span>به روز
                                                                                رسانی موجودی</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><em
                                                                                class="icon ni ni-invest"></em><span>به روز
                                                                                رسانی قیمت</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- .nk-tb-item -->
                                        @foreach ($products as $product)
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <span class="tb-product">
                                                        <span class="title">{{ $product->name }}</span>
                                                    </span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="tb-sub">{{ $product->description }}</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="tb-sub">{{ $product->category->name }}</span>
                                                </div>

                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1 my-n1">
                                                        <li class="me-n1">
                                                            <div class="dropdown">
                                                                <a href="#"
                                                                    class="dropdown-toggle btn btn-icon btn-trigger"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li>
                                                                            <a
                                                                                href="{{ route('products.edit', $product) }}"><em
                                                                                    class="icon ni ni-edit"></em><span>ویرایش
                                                                                    محصول</span></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"><em
                                                                                    class="icon ni ni-eye"></em><span>مشاهده
                                                                                    محصول</span></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"><em
                                                                                    class="icon ni ni-activity-round"></em><span>سفارشات
                                                                                    محصول</span></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"><em
                                                                                    class="icon ni ni-trash"></em><span>حذف
                                                                                    محصول</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach
                                        <!-- .nk-tb-item -->
                                    </div>
                                    <!-- .nk-tb-list -->
                                </div>
                                <div class="card-inner">
                                    <div class="nk-block-between-md g-3">
                                        <div class="g">
                                            <ul class="pagination justify-content-center justify-content-md-start">
                                                <!-- Previous Page Link -->
                                                @if ($products->onFirstPage())
                                                    <li class="page-item disabled"><span class="page-link">قبلی</span>
                                                    </li>
                                                @else
                                                    <li class="page-item"><a class="page-link"
                                                            href="{{ $products->previousPageUrl() }}">قبلی</a></li>
                                                @endif

                                                <!-- Pagination Elements -->
                                                @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                                    <li
                                                        class="page-item {{ $page == $products->currentPage() ? 'active' : '' }}">
                                                        <a class="page-link"
                                                            href="{{ $url }}">{{ $page }}</a>
                                                    </li>
                                                @endforeach

                                                <!-- Next Page Link -->
                                                @if ($products->hasMorePages())
                                                    <li class="page-item"><a class="page-link"
                                                            href="{{ $products->nextPageUrl() }}">بعدی</a>
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
                                                        @for ($i = 1; $i <= $products->lastPage(); $i++)
                                                            <option value="page-{{ $i }}"
                                                                {{ $i == $products->currentPage() ? 'selected' : '' }}>
                                                                {{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <div>از {{ $products->lastPage() }}</div>
                                            </div>
                                        </div>
                                        <!-- .pagination-goto -->
                                    </div>
                                    <!-- .nk-block-between -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .nk-block -->
                    <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct"
                        data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">محصول جدید</h5>
                                <div class="nk-block-des">
                                    <p>محصول جدید و اطلاعات آن را اضافه کنید.</p>
                                </div>
                            </div>
                        </div>
                        <!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="product-title">عنوان محصول</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="product-title" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="regular-price">قیمت عادی</label>
                                        <div class="form-control-wrap">
                                            <input type="number" class="form-control" id="regular-price" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="sale-price">قیمت فروش</label>
                                        <div class="form-control-wrap">
                                            <input type="number" class="form-control" id="sale-price" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="stock">موجودی</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="stock" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="SKU">شناسه محصول</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="SKU" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="category">دسته بندی</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="category" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="tags">برچسب</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="tags" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="upload-zone small bg-lighter my-2">
                                        <div class="dz-message">
                                            <span class="dz-message-text">فایل را بکشید و رها کنید</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary"><em class="icon ni ni-plus"></em><span>افزودن
                                            جدید</span></button>
                                </div>
                            </div>
                        </div>
                        <!-- .nk-block -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
