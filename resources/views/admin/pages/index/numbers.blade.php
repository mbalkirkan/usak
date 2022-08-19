@extends('admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Numaralar</h4>
                    <button id="update" type="button" class="btn btn-primary align-self-center"><i
                            class="bi bi-box-arrow-up"></i> Güncelle
                    </button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-control mt-5 ">
                            <div class="row">
                                <div class="mb-10 mt-10 col-md-12">
                                    <label for="exampleFormControlInput1"
                                           class="required form-label">Başlık</label>
                                    <input type="text" name="title" value="{{$numbers->title}}"
                                           class="form-control form-control-solid"
                                           placeholder="Görsel üzeri kısa başlık"/>
                                </div>

                                <div class="mb-10 mt-10 col-md-12">
                                    <label for="exampleFormControlInput1"
                                           class="required form-label">Açıklama</label>
                                    <input type="text" name="description" value="{{$numbers->description}}"
                                           class="form-control form-control-solid"
                                           placeholder="Görsel üzeri kısa başlık"/>
                                </div>
                                <div class="mb-10 mt-10 col-md-12">
                                    <label for="exampleFormControlInput1" class="required form-label">Görsel</label>
                                    <div class="mb-10">
                                        <label for="" class="form-label"></label>
                                        <br>
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline" data-kt-image-input="true"
                                             style="background-image: url({{asset('admin/assets/media/avatars/blank.png')}})">
                                            <!--begin::Image preview wrapper-->
                                            <div class="image-input-wrapper w-150px h-150px"
                                                 style="background-image: url({{$numbers->image}})"></div>
                                            <!--end::Image preview wrapper-->

                                            <!--begin::Edit button-->
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                                data-kt-image-input-action="change"
                                                data-bs-toggle="tooltip"
                                                data-bs-dismiss="click"
                                                title=" Değiştir">
                                                <i class="bi bi-pencil-fill fs-7"></i>

                                                <!--begin::Inputs-->
                                                <input type="file" id="image" name="image"
                                                       url="{{asset($numbers->image)}}" accept=".png, .jpg, .jpeg"/>
                                                <input type="hidden" name="avatar_remove"/>
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Edit button-->

                                            <!--begin::Cancel button-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                                data-kt-image-input-action="cancel"
                                                data-bs-toggle="tooltip"
                                                data-bs-dismiss="click"
                                                title=" İptal ">
                                                 <i class="bi bi-x fs-2"></i>
                                             </span>
                                            <!--end::Cancel button-->

                                        </div>
                                        <!--end::Image input-->
                                    </div>

                                </div>


                                <div class="mb-10 mt-10 col-md-4">
                                    <label for="exampleFormControlInput1"
                                           class="required form-label">Sayı 1 Başlık</label>
                                    <input type="text" name="number1_title" value="{{$numbers->number1_title}}"
                                           class="form-control form-control-solid"
                                           placeholder="1. Sayı Başlığı"/>
                                </div>
                                <div class="mb-10 mt-10 col-md-2">
                                    <label for="exampleFormControlInput1"
                                           class="required form-label">Sayı 1</label>
                                    <input type="text" name="number1" value="{{$numbers->number1}}"
                                           class="form-control form-control-solid"
                                           placeholder="1. Sayı"/>
                                </div>

                                <div class="mb-10 mt-10 col-md-4">
                                    <label for="exampleFormControlInput1"
                                           class="required form-label">Sayı 2 Başlık</label>
                                    <input type="text" name="number2_title" value="{{$numbers->number2_title}}"
                                           class="form-control form-control-solid"
                                           placeholder="2. Sayı Başlığı"/>
                                </div>
                                <div class="mb-10 mt-10 col-md-2">
                                    <label for="exampleFormControlInput1"
                                           class="required form-label">Sayı 2</label>
                                    <input type="text" name="number2" value="{{$numbers->number2}}"
                                           class="form-control form-control-solid"
                                           placeholder="2. Sayı"/>
                                </div>


                                <div class="mb-10 mt-10 col-md-4">
                                    <label for="exampleFormControlInput1"
                                           class="required form-label">Sayı 3 Başlık</label>
                                    <input type="text" name="number3_title" value="{{$numbers->number3_title}}"
                                           class="form-control form-control-solid"
                                           placeholder="3. Sayı Başlığı"/>
                                </div>
                                <div class="mb-10 mt-10 col-md-2">
                                    <label for="exampleFormControlInput1"
                                           class="required form-label">Sayı 3</label>
                                    <input type="text" name="number3" value="{{$numbers->number3}}"
                                           class="form-control form-control-solid"
                                           placeholder="3. Sayı"/>
                                </div>

                                <div class="mb-10 mt-10 col-md-4">
                                    <label for="exampleFormControlInput1"
                                           class="required form-label">Sayı 4 Başlık</label>
                                    <input type="text" name="number4_title" value="{{$numbers->number4_title}}"
                                           class="form-control form-control-solid"
                                           placeholder="4. Sayı Başlığı"/>
                                </div>
                                <div class="mb-10 mt-10 col-md-2">
                                    <label for="exampleFormControlInput1"
                                           class="required form-label">Sayı 4</label>
                                    <input type="text" name="number4" value="{{$numbers->number4}}"
                                           class="form-control form-control-solid"
                                           placeholder="4. Sayı"/>
                                </div>


                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection


@section('page_scripts')

    <script>
        $(document).on('change', 'input[type="file"]', function (e) {
            let id = e.target.name;
            up_image(id);
        });


        function up_image(id) {
            var formData = new FormData();
            formData.append('upload', $('input[name="' + id + '"]')[0].files[0]);
            formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
            $.ajax({
                type: 'POST',
                url: '{{route('admin.about.upload')}}',
                data: formData,
                cache: false,
                processData: false, // Tell jQuery Do not deal with the data sent
                contentType: false,
                success: function (data) {
                    toastr.success('Görsel Yüklendi');
                    $('input[name="' + id + '"]').attr('url', data.success);
                    $('input[name="' + id + '"]').parent().parent().children('.image-input-wrapper').css("background-image", "url(" + data.success + ")");
                },
                error: function (data) {
                    toastr.error('Görsel Yüklenemedi');
                }
            });
        }
    </script>

    <script>
        $('#update').click(function () {
            $.ajax({
                type: 'POST',
                url: '{{route('admin.pages.index.numbers-update')}}',
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'title': $('input[name="title"]').val(),
                    'image': $('input[name="image"]').attr('url'),
                    'description':  $('input[name="description"]').val(),
                    'number1_title': $('input[name="number1_title"]').val(),
                    'number1': $('input[name="number1"]').val(),
                    'number2_title': $('input[name="number2_title"]').val(),
                    'number2': $('input[name="number2"]').val(),
                    'number3_title': $('input[name="number3_title"]').val(),
                    'number3': $('input[name="number3"]').val(),
                    'number4_title': $('input[name="number4_title"]').val(),
                    'number4': $('input[name="number4"]').val(),
                },
                success: function (data) {
                    toastr.success('Güncelleme Başarılı');
                },
                error: function (data) {
                    toastr.error('Güncelleme Başarısız');
                }
            });
        });
    </script>

@endsection
