@extends('admin.layouts.master')
@section('title')
اضافه جديده
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
                            <h6 style="font-family: 'Cairo', sans-serif;">اضافه جديده</h6>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('product.store') }}" method="post" autocomplete="off"  enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col">
                                        <label class="mb-2">الاسم</label>
                                        <input type="text" name="name" required class="form-control">
                                    </div>


                                    <div class="col">
                                        <label> الفئه الفرعيه </label>
                                        <select name="sub_category_id" required class="form-control">
                                            <option value="" disabled selected>-- اختر من القائمه --</option>
                                            @foreach ($sub_categories as $sub_category)
                                                <option value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>
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
                                                <option value="{{ $color->id }}">{{ $color->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="col">
                                        <label>السعر قبل الخصم</label>
                                        <input type="number" name="price_sub" class="form-control" required>
                                    </div>
                                    <div class="col">
                                        <label>السعر بعد الخصم</label>
                                        <input type="number" name="price" class="form-control" required>
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col">
                                        <label class="mb-2">وصف</label>

                                        <textarea class="form-control ckeditor" name="notes" rows="5"></textarea>
                                    </div>
                                </div>


                                <br>


                                <div class="row">
                                    <div class="col">
                                        <label>الصوره</label>
                                        <p class="text-danger"> يجب ان يكون مقاس الصوره  <br> W-1110 px * H-580 px </p>
                                        <input type="file" name="cover" required accept="image/*" id="">
                                    </div>
                                </div>


                                <br>


                                <div class="row">
                                    <div class="col">
                                        <label>جميع صور المنتج</label>
                                        <input type="file" name="FilenameMany[]" required accept="image/*"  multiple>
                                    </div>
                                </div>

                                

                                <div class="row">
                                    <div class="col" style="text-align: center">
                                        <button class="btn btn-success">حفظ البيانات</button>
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
