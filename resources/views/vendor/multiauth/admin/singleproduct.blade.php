@extends('vendor.multiauth.admin.layouts.app') 


@section('css')
<style type="text/css">
  
  .product{
  border: 1px solid #dddddd;
  height: 321px;
}

.product>img{
  max-width: 230px;
}
.product-rating{
  font-size: 20px;
  margin-bottom: 25px;
}

.product-title{
  font-size: 20px;
}

.product-desc{
  font-size: 14px;
}

.product-price{
  font-size: 22px;
}

.product-stock{
  color: #74DF00;
  font-size: 20px;
  margin-top: 10px;
}

.product-info{
    margin-top: 50px;
}

</style>
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
              

                        <div clas="col-md-6">
                            <div class=" service-image-left">
                           <div class="box box-info">
                             <div class="box-header with-border">
                               <h3 class="box-title">Product Detail</h3>
                 
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
                                                  <td><b>Title</b></td>
                                                  <td>{{$product->title}}</td>
                                                 
                                               </tr>

                                                <tr>
                                                  <td><b>Description</b></td>
                                                  <td>{{$product->description}}</td>
                                                 
                                               </tr>

                                                <tr>
                                                  <td><b>Price</b></td>
                                                  <td>{{$product->price}}</td>
                                                 
                                               </tr>

                                                <tr>
                                                  <td><b>Position</b></td>
                                                  <td>{{$product->position}}</td>
                                                 
                                               </tr>

                                                 <tr>
                                                  <td><b>Qty</b></td>
                                                  <td>{{$product->qty}}</td>
                                                 
                                               </tr>

                                                 <tr>
                                                  <td><b>Warrenty Claim</b></td>
                                                  <td>{{$product->warrenty_claim}}</td>
                                                 
                                               </tr>



                                            </thead>

                                            <tbody>
                                              
                                           
                                              
                                            </tbody>
                                         </table>
                               </div>
                               <!-- /.table-responsive -->
                             </div>
                             <!-- /.box-body -->
                           
                            
                           </div>

                        </div>


                      
                         </div>

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

<script type="text/javascript">
  

  $(document).ready(function(){
  
       
  
});
</script>

@endsection