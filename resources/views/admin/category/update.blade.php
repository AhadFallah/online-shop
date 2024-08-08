@extends('admin.app', ['title' => 'ویرایش دسته‌بندی'])
@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">ویرایش دسته‌بندی</h3>
                            </div>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-inner">

                            <form action="{{ route('categories.update', $category) }}" method="post">
                                @csrf
                                @method('put')
                                <div class="row gy-4">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name" class="form-label">عنوان</label>
                                            <div class="form-group wrap">
                                                <input type="text" id='name' name='name' class="form-control"
                                                    value="{{ $category->name }}">

                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label" for="default-07">زیرمجموعه</label>
                                            <div class="form-control-wrap">
                                                <select class="form-select js-select2" id="default-07" data-search="on"
                                                    name="category_id" aria-label="مثال انتخاب چندتایی">

                                                    <option value="0">بدون انتخاب</option>
                                                    @foreach ($categories as $subCategory)
                                                        <option value="{{ $subCategory->id }}" @selected($subCategory->id == $category->category_id)>
                                                            {{ $subCategory->name }}</option>
                                                    @endforeach

                                                </select>

                                                <x-input-error :messages="$errors->get('category_id')" class="mt-2" />

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="description" class="form-label">توضیحات</label>
                                        <div class="form-group wrap">
                                            <textarea type="text" id="description" name="description" class="form-control no-resize">{{ $category->description }}</textarea>

                                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                        </div>


                                    </div>
                                </div>

                                <input type="submit" class="mt-2 btn btn-primary" value="ویرایش">
                        </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
