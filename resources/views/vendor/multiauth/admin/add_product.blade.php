@extends('vendor.multiauth.admin.layouts.app') 


@section('css')

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
                               <h3 class="box-title">Add Product</h3>
                 
                               <div class="box-tools pull-right">
                                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                 </button>
                                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                               </div>
                             </div>
                             <!-- /.box-header -->
                             <div class="box-body">
                               <div class="table-responsive">
                                   <form class="form-horizontal" action="{{route('admin.add.products')}}" method="post">
                                    {{csrf_field()}}
                                          <fieldset>

                                          <!-- Form Name -->
                                         

                                          <!-- Text input-->
                                          <!-- <div class="form-group">
                                            <label class="col-md-4 control-label" for="product_id">PRODUCT ID</label>  
                                            <div class="col-md-4">
                                            <input id="product_id" name="product_id" placeholder="PRODUCT ID" class="form-control input-md" required="" type="text">
                                              
                                            </div>
                                          </div> -->

                                          <!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="product_name">PRODUCT title</label>  
                                            <div class="col-md-4">
                                            <input id="product_name" name="title" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
                                              
                                            </div>
                                          </div>

                                          <!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="product_name_fr">PRODUCT DESCRIPTION</label>  
                                            <div class="col-md-4">
                                            <input id="product_name_fr" name="description" placeholder="PRODUCT DESCRIPTION FR" class="form-control input-md" required="" type="text">
                                              
                                            </div>
                                          </div>

                                          <!-- Select Basic -->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="product_categorie">Key Features</label>
                                            <div class="col-md-4">
                                              <textarea id="product_categorie" name="key_feature" class="form-control">
                                              </textarea>
                                            </div>
                                          </div>

                                          <!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="available_quantity">AVAILABLE QUANTITY</label>  
                                            <div class="col-md-4">
                                            <input id="available_quantity" name="qty" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="" type="text">
                                              
                                            </div>
                                          </div>

                                          <!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="product_weight">PRICE</label>  
                                            <div class="col-md-4">
                                            <input id="product_weight" name="price" placeholder="PRODUCT PRICE" class="form-control input-md" required="" type="number">
                                              
                                            </div>
                                          </div>

                                          <!-- Textarea -->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="product_description">PRODUCT SALE PRICE</label>
                                            <div class="col-md-4">                     
                                              <input type="number" class="form-control" id="sale_price" name="product_description"></textarea>
                                            </div>
                                          </div>

                                          <!-- Textarea -->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="product_name_fr">COST</label>
                                            <div class="col-md-4">                     
                                              <input type="number" class="form-control" id="product_name_fr" name="cost"></textarea>
                                            </div>
                                          </div>

                                          <!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="percentage_discount">VISIBILITY</label>  
                                            <div class="col-md-4">

                                            <input id="percentage_discount" name="visibility" placeholder="VISIBILITY" class="form-control input-md" required="" type="number">
                                              
                                            </div>
                                          </div>

                                          <!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="stock_alert">POSITION</label>  
                                            <div class="col-md-4">
                                            <input id="stock_alert" name="position" placeholder="POSITION" class="form-control input-md" required="" type="number">
                                              
                                            </div>
                                          </div>

                                          <!-- Search input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="stock_critical">URL</label>
                                            <div class="col-md-4">
                                              <input id="stock_critical" name="url" placeholder="URL" class="form-control input-md" required="" type="url">
                                              
                                            </div>
                                          </div>

                                          <!-- Search input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="tutorial">WARRANTY CLAIM</label>
                                            <div class="col-md-4">


                                              <input id="tutorial" name="warranty_claim" placeholder="WARRANTY CLAIM" class="form-control input-md" required="" type="number">
                                              
                                            </div>
                                          </div>

                                          <!-- Search input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="tutorial_fr">WHATS IN BOX</label>
                                            <div class="col-md-4">
                                              <input id="tutorial_fr" name="what_in_the_box" placeholder="WHATS IN BOX" class="form-control input-md" required="" type="search">
                                              
                                            </div>
                                          </div>

                                          <!-- Text input-->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="online_date">DANGEROUS GOOODS</label>  
                                            <div class="col-md-4">
                                            <select id="online_date" name="dangerous_goods"  class="form-control input-md" >
                                            <option>Battery</option> 
                                               <option>Liquid</option> 
                                                <option>None</option> 
                                            </select>
                                            </div>
                                          </div>

                                           <!-- Text input
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="author">AUTHOR</label>  
                                            <div class="col-md-4">
                                            <input id="author" name="author" placeholder="AUTHOR" class="form-control input-md" required="" type="text">
                                              
                                            </div>
                                          </div>

                                          <!-- Text input
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="enable_display">ENABLE DISPLAY</label>  
                                            <div class="col-md-4">
                                            <input id="enable_display" name="enable_display" placeholder="ENABLE DISPLAY" class="form-control input-md" required="" type="text">
                                              
                                            </div>
                                          </div>

                                          <!-- Text input
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="comment">COMMENT</label>  
                                            <div class="col-md-4">
                                            <input id="comment" name="comment" placeholder="COMMENT" class="form-control input-md" required="" type="text">
                                              
                                            </div>
                                          </div> -->

                                          <!-- Text input-->
                                         <!--  <div class="form-group">
                                            <label class="col-md-4 control-label" for="approuved_by">APPROUVED BY</label>  
                                            <div class="col-md-4">
                                            <input id="approuved_by" name="approuved_by" placeholder="APPROUVED BY" class="form-control input-md" required="" type="text">
                                            </div> 
                                            </div>  -->
                                           <!-- File Button --> 
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="filebutton">main_image</label>
                                            <div class="col-md-4">
                                              <input id="filebutton" name="filebutton" class="input-file" type="file">
                                            </div>
                                          </div>
                                          <!-- File Button --> 
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="filebutton">auxiliary_images</label>
                                            <div class="col-md-4">
                                              <input id="filebutton" type="submit"class="input-file" type="file">
                                            </div>
                                          </div>

                                          <!-- Button -->
                                          <div class="form-group">
                                            <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
                                            <div class="col-md-4">
                                              <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
                                            </div>
                                            </div>

                                          </fieldset>
                                      </form>

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




@endsection