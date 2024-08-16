@extends('admin.app', ['title' => 'اختصاص دادن محصول'])
@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">اختصاص دادن محصول</h3>
                            </div>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-inner">

                            <form action="/seller/products" id='myForm' method="post">
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
                                            <label class="form-label" for="default-07">نوع محصول</label>
                                            <div class="form-control-wrap">
                                                <select class="form-select js-select2" id="default-07" data-search="on"
                                                    name="ptype_id" aria-label="مثال انتخاب چندتایی">
                                                    @foreach ($ptypes as $ptype)
                                                        <option value="{{ $ptype->id }}">{{ $ptype->name }}</option>
                                                        @endforeach
                                                </select>

                                                <x-input-error :messages="$errors->get('ptype_id')" class="mt-2" />

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row gy-4">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="price" class="form-label">قیمت</label>
                                            <div class="form-group wrap">
                                                <input type="text" id='price' name='price' class="form-control"
                                                    value="{{ old('price') }}">

                                                <x-input-error :messages="$errors->get('price')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="size" class="form-label">سایز</label>
                                            <div class="form-group wrap">
                                                <input type="text" id='size' name='size' class="form-control"
                                                    value="{{ old('size') }}">

                                                <x-input-error :messages="$errors->get('size')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row gy-4">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="color" class="form-label">رنگ</label>
                                            <div class="form-group wrap">
                                                <input type="text" id='color' name='color' class="form-control"
                                                    value="{{ old('color') }}">

                                                <x-input-error :messages="$errors->get('color')" class="mt-3" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="comission" class="form-label">کمیسیون</label>
                                            <div class="form-group wrap">
                                                <input type="text" id='comission' name='comission' class="form-control"
                                                    value="{{ old('comission') }}">

                                                <x-input-error :messages="$errors->get('comission')" class="mt-3" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row gy-4">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label" for="default-06">فروشنده</label>
                                            <div class="form-control-wrap">
                                                <select class="form-select js-select1" id="default-07" data-search="on"
                                                    name="seller_id" aria-label="">

                                                    @foreach ($sellers as $seller)
                                                        <option value="{{ $seller->id }}">{{ $seller->name }}</option>
                                                    @endforeach
                                                </select>

                                                <x-input-error :messages="$errors->get('category_id')" class="mt-3" />

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="number" class="form-label">تعداد</label>
                                            <div class="form-group wrap">
                                                <input type="number" id='number' name='number' class="form-control"
                                                    value="{{ old('number') }}">

                                                <x-input-error :messages="$errors->get('number')" class="mt-3" />
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <div class="row gy-5">
                                    <div class="col-sm-13">
                                        <div class="form-group">
                                            <label for="context" class="form-label">مشخصات منحصربه فرد</label>
                                            <div class="form-group wrap">
                                                <textarea type="text" id="context" name="context" class="form-control no-resize">{{ old('context') }}</textarea>

                                                <x-input-error :messages="$errors->get('context')" class="mt-3" />
                                            </div>


                                        </div>
                                    </div>

                                </div>
                                <div class="row gy-5">
                                    <div class="col-sm-13">
                                        <div class="form-group">
                                            <label for="description" class="form-label">توضیحات</label>
                                            <div class="form-group wrap">
                                                <textarea type="text" id="description" name="description" class="form-control no-resize">{{ old('description') }}</textarea>

                                                <x-input-error :messages="$errors->get('description')" class="mt-3" />
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" id="hidden" name="file_id" value="">
                            </form>
                            <div class="row mt-5">
                                <div class="col-sm-6">
                                    <form action="/file/images/cover" method="POST" class="dropzone" id="dropzone1"
                                        data-accepted-files="image/*" data-max-files='1'>
                                        @csrf
                                        <div class="dz-message" data-dz-message>
                                            <span class="dz-message-text">کاور محصول</span>
                                            <div class="btn btn-primary">انتخاب کنید</div>
                                        </div>
                                    </form>

                                </div>
                                <div class="col-sm-6">
                                    <form action="/file/images" method="POST" class="dropzone" id="dropzone2"
                                        data-accepted-files="image/*">
                                        @csrf
                                        <div class="dz-message" data-dz-message>
                                            <span class="dz-message-text">تصاویر محصول</span>
                                            <div class="btn btn-primary">انتخاب کنید</div>
                                        </div>
                                    </form>




                                </div>
                            </div>
                            <input type="submit" id='submit' class="mt-3 btn btn-primary" value="ایجاد"
                                onclick="document.getElementById('myForm').submit();" disabled>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection

    @section('scripts')
        <script>
            Dropzone.options.dropzone1 = {
                success: function(file, response) {
                    //Here you can get your response.
                    if ($("#hidden").val() == '') {

                        $('#hidden').val(response['message'])

                        $('#submit').prop('disabled', false);
                    } else {

                        $('#hidden').val($("#hidden").val() + ',' + response['message'])
                    }
                }
            }
            Dropzone.options.dropzone2 = {
                success: function(file, response) {
                    //Here you can get your response.
                    if ($("#hidden").val() == '') {

                        $('#hidden').val(response['message'])

                        $('#submit').prop('disabled', false);
                    } else {

                        $('#hidden').val($("#hidden").val() + ',' + response['message'])
                    }
                }
            }
        </script>
    @endsection
