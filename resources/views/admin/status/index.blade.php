@extends('admin.layouts.master')
@section('title')
الحالات
@endsection

@section('css')

@endsection


@section('contct')


<div class="content-wrapper">
    <div class="container-full">

        <div class="content-header">
           
        </div>

        <section class="content">
            <div class="row">
                <div class="col-12">
            
                    <div class="box">
                       <div class="box-header with-border">
                         <h3 class="box-title">
                           
                            <a href="{{ route('status.create') }}" class="btn btn-success" style="font-family: 'Cairo', sans-serif;">  اضافه جديده</a>

                            
                         </h3>
                       </div>
                       <!-- /.box-header -->
                       <div class="box-body">
                           <div class="table-responsive">
                             <table id="example1" class="table table-bordered table-striped">
                               <thead>
                                   <tr>
                                       <th>#</th>
                                  
                                       <th>الاسم</th>
                                    
                                     
                                       <th>العمليات</th>
                                   </tr>
                               </thead>
                               <tbody>
                                @foreach ($data as $row)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                   
                                    <td>{{ $row->name }}</td>
                                    <td>
                                        <a href="{{ route('status.edit',$row->id) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('status.destroy',$row->id) }}" method="post">
                                            @method('DELETE')
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $row->id }}">
                                  
                                                    <button  class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>

                                            </form>
                                    </td>
                                </tr>
                                @endforeach
                                  
                                   
                             </table>
                           </div>
                       </div>
                       <!-- /.box-body -->
                     </div>
                          
                   </div>
            
            
            </div>
        </section>  

    </div>

</div>




@endsection

@section('js')

@endsection
