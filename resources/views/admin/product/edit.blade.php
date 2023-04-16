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
                            <form action="{{ route('product.update','test') }}" method="post" autocomplete="off"  enctype="multipart/form-data">
                                @method('PUT')
                                @csrf

                                <input type="hidden" name="id" value="{{ $data->id }}">

                                <div class="row">
                                    <div class="col">
                                        <label class="mb-2">الاسم</label>
                                        <input type="text" name="name" value="{{ $data->name }}" class="form-control">
                                    </div>

                                    <div class="col">
                                        <label> الفئه الفرعيه </label>
                                        <select name="sub_category_id" required class="form-control">
                                            <option value="" disabled selected>-- اختر من القائمه --</option>
                                            @foreach ($sub_categories as $sub_category)
                                                <option value="{{ $sub_category->id }}" {{ $sub_category->id == $data->sub_category_id ? 'selected' : null }}>{{ $sub_category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                   

                                </div>

                                <br>

                                <div class="row">
                                    <div class="col">
                                        <label> اللون </label>
                                        <select name="color_id" required class="form-control">
                                            <option value="" disabled selected>-- اختر من القائمه --</option>
                                            @foreach ($colors as $color)
                                                <option value="{{ $color->id }}" {{ $color->id  == $data->color_id ? 'selected' : null }}>{{ $color->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="col">
                                        <label>السعر قبل الخصم</label>
                                        <input type="number" name="price_sub" value="{{ $data->price_sub }}" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label>السعر بعد الخصم</label>
                                        <input type="number" name="price" value="{{ $data->price }}" class="form-control">
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
                                    <div class="col">
                                        <label>الصوره</label>
                                        @if($data->image)
                                            
                                            <img src="{{ $data->image }}" width="50px" height="50px" alt="">
                                        @endif
                                        <p class="text-danger"> يجب ان يكون مقاس الصوره  <br> W-1110 px * H-580 px </p>
                                        <input type="file" name="cover"  accept="image/*" id="">
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
