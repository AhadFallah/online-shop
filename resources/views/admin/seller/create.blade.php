@extends('admin.app', ['title' => 'ایجاد فروشنده'])
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

                            <form action="{{ route('sellers.store') }}" method="post">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name" class="form-label">نام فروشگاه یا فروشنده</label>
                                            <div class="form-group wrap">
                                                <input type="text" id='name' name='name' class="form-control"
                                                    value="{{ old('name') }}">

                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label" for="default-07">کاربر</label>
                                            <div class="form-control-wrap">
                                                <select class="form-select js-select2" id="default-07" data-search="on"
                                                    name="user_id" aria-label="مثال انتخاب چندتایی">
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}" @selected(old('user_id') == $user->id)>
                                                            {{ $user->email }}</option>
                                                    @endforeach

                                                </select>

                                                <x-input-error :messages="$errors->get('user_id')" class="mt-2" />

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="card" class="form-label">شماره کارت</label>
                                            <div class="form-group wrap">
                                                <input type="text" id='card' name='card' class="form-control"
                                                    value="{{ old('card') }}">
                                                <x-input-error :messages="$errors->get('card')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name" class="form-label">شبا</label>
                                            <div class="form-group wrap">
                                                <input type="text" id='shaba' name='shaba' class="form-control"
                                                    value{{ old('shaba') }}>

                                                <x-input-error :messages="$errors->get('shaba')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="description" class="form-label">توضیحات</label>
                                        <div class="form-group wrap">
                                            <textarea type="text" id="description" name="description" class="form-control no-resize">
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
