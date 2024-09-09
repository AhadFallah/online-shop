@extends('admin.app', ['title' => 'ایجاد دسته‌بندی'])
@section('content')
<div class="nk-content">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">ایجاد دسته‌بندی</h3>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-inner">

                        <form action="{{ route('categories.store') }}" method="post">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">عنوان</label>
                                        <div class="form-group wrap">
                                            <input type="text" id='name' name='name' class="form-control"
                                                value="{{ old('name') }}">

                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="customFileLabel">آپلود فایل پیش فرض</label>
                                        <div class="form-control-wrap">
                                            <div class="form-file">
                                                <input type="file" class="form-file-input" id="customFile">
                                                <label class="form-file-label" for="customFile">انتخاب فایل</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="description" class="form-label">توضیحات</label>
                                        <div class="form-group wrap">
                                            <textarea type="text" id="description" name="description"
                                                class="form-control no-resize">
                                                {{ old('description') }}
                                            </textarea>

                                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                        </div>


                                    </div>
                                </div>

                                <input type="submit" class="mt-2 btn btn-primary" value="ایجاد">
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endsection
