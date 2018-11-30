@extends('vendor.multiauth.admin.layouts.app') 


@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" rel="stylesheet">
@endsection



@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <section class="content-header">
        <div class="row">
        
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
    
        </div>

        <div class="row">
                <div class="col-md-12">
 
                            <div class="box box-info">
                             <div class="box-header with-border">
                               <h3 class="box-title">All Products</h3>
                 
                               <div class="box-tools pull-right">
                                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                 </button>
                                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                               </div>
                             </div>
                             <!-- /.box-header -->
                             <div class="box-body">
                               <div class="table-responsive">
                                    <table class="table table-bordered" id="table">

                                            <thead>
                                               <tr>
                                                  <th>Id</th>
                                                  <th>Title</th>
                                                  <th>Description</th>
                                                  <th>Price</th>
                                                  <th>Vendor</th>
                                                  <th colspan="3">Action</th>
                                               </tr>


                                            </thead>

                                            <tbody>
                                              
                                              @foreach($products as $products )

                                                  <tr>

                                                  <td>{{ $products->id}}</td>

                                                   <td>{{ $products->title}}</td>

                                                  <td>{{ $products->description}}</td>

                                                  <td>{{ $products->price}}</td>

                                                  <td>{{ $products->vendor}}</td>

                                                  <td>   <button type="button"  data-id="{{ $products->id}}" class="btn btn-danger button"><i class="fa fa-trash"></i></button></td>

                                                   <td>   <button type="button" class="btn btn-danger"><i class="fa fa-pencil"></i></button></td>
                                                 
                                                   <td>   <a href="{{route('singleproduct',$products->id)}}" class="btn btn-danger"><i class="fa fa-eye"></i></a></td>

                                                  </tr>
 
                                              @endforeach
                                              
                                            </tbody>
                                         </table>
                               </div>
                               <!-- /.table-responsive -->
                             </div>
                             <!-- /.box-body -->
                           
                            
                           </div>
                 
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

    </section>
</div>




 @endsection

 @section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js" ></script>

<script>
    
      $(document).on('click', '.button', function (e) {
    e.preventDefault();
  var id = $(this).data('id');
  var parent = $(this).parent().parent();
    
  
    swal({
  title: "Are you sure?",
  text: "",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel please!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
     //console.log("sdsd");
    
  $.ajax({
                type: "POST",
                url: "{{route('product.delete')}}",
               
        data: {'_token': "{{csrf_token()}}",id: id},
                success: function (data) {
                              swal("Deleted", "", "success"); 
                parent.fadeOut('slow', function() {$(this).remove();});
                    }         
            }); // submitting the form when user press yes
  } else {
    swal("Cancelled", "Your record  is safe :)", "info");
  }
});
   
});
    
    
    
</script>


@endsection