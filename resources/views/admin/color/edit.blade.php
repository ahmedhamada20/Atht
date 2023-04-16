@extends('admin.layouts.master')
@section('title')
تعديل البيانات
@endsection

@section('css')

@endsection


@section('contct')


<div class="content-wrapper" style="font-family: 'Cairo', sans-serif;">
    <div class="container-full">

        <div class="content-header">

        </div>

        <section class="content">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h6 style="font-family: 'Cairo', sans-serif;">تعديل البيانات</h6>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('color.update','test') }}" method="post" autocomplete="off"  enctype="multipart/form-data">
                                @method('PUT')
                                @csrf

                                <input type="hidden" name="id" value="{{ $data->id }}">

                                <div class="row">
                                    <div class="col">
                                        <label class="mb-2">الاسم</label>
                                        <input type="text" name="name" value="{{ $data->name }}" class="form-control">
                                    </div>


                                </div>


                                <br>

                                <div class="row">
                                    <div class="col">
                                        <label class="mb-2">وصف</label>

                                        <textarea class="form-control ckeditor" name="notes" rows="5">
                                            {{ $data->notes }}
                                        </textarea>
                                    </div>
                                </div>


                               

                                <br>

                                <div class="row">
                                    <div class="col" style="text-align: center">
                                        <button class="btn btn-success">تعدييل البيانات</button>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>


                </div>
        </section>

    </div>

</div>

@endsection

@section('js')

@endsection
