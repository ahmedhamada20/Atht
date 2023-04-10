@extends('admin.layouts.master')
@section('title')
Settings
@endsection

@section('css')

@endsection


@section('contct')
<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xl-12 col-md-6 col-12">
                    <form action="{{ route('updatedSetting') }}" method="post" autocomplete="off"  enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id ?? null }}">

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <label class="mb-2">Name Site</label>
                                        <input type="text" name="name" value="{{ $data->name ?? null }}" class="form-control">
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <label class="mb-2">Phone Site</label>
                                        <input type="number" name="phone" value="{{ $data->phone ?? null }}" class="form-control">
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-12">
                                        <label class="mb-2">Email Site</label>
                                        <input type="email" name="email" value="{{ $data->email ?? null }}" class="form-control">
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-xl-3 col-md-6 col-12">
                                        <label class="mb-2">header products</label>
                                        <input type="text" name="header_products" value="{{ $data->header_products ?? null }}" class="form-control">
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-12">
                                        <label class="mb-2">header collections</label>
                                        <input type="text" name="header_collections" value="{{ $data->header_collections ?? null }}" class="form-control">
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-12">
                                        <label class="mb-2">header category</label>
                                        <input type="text" name="header_category" value="{{ $data->header_category ?? null }}" class="form-control">
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-12">
                                        <label class="mb-2">header blogs</label>
                                        <input type="text" name="header_blogs" value="{{ $data->header_blogs ?? null }}" class="form-control">
                                    </div>
                                </div>

                                <br>


                                <div class="row">
                                    <div class="col-xl-12 col-md-6 col-12">
                                        <label class="mb-2"> Notes Site </label>
                                        <textarea class="form-control ckeditor" name="notes" rows="5">
                                            {{ $data->notes ?? null }}
                                        </textarea>
                                    </div>
                                </div>


                                <br>
                                <div class="row">
                                    <div class="col-xl-12 col-md-6 col-12">
                                        <label class="mb-2"> Photo Site </label>
                                        <input type="file" name="photo" accept="image/*" id="">
                                        @if($data->image ?? null)
                                            <input type="hidden" name="oldfile" value="{{ $data->photo->Filename }}">
                                            <img src="{{ $data->image }}" width="50px" height="50px" alt="">       
                                        @endif
                                    </div>
                                </div>


                                <br>
                                <div class="row">
                                    <div class="col-xl-12 col-md-6 col-12">
                                        <button class="btn btn-success">Updated</button>
                                    </div>
                                </div>

                                <br>
                                <br>



                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
</div>
@endsection

@section('js')

@endsection
