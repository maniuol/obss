@extends('vendor.layouts.app') 
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
                                <div class="box  box-solid">
                                  <div class="box-header with-border">
                                    <h3 class="box-title">Roles   <span class="float-right">
                                            <a href="{{ route('admin.role.create') }}" class="btn btn-sm btn-success">New Role</a>
                                        </span></h3>
                      
                                    <div class="box-tools pull-right">
                                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                      </button>
                                    </div>
                                    <!-- /.box-tools -->
                                  </div>
                                  <!-- /.box-header -->
                                  <div class="box-body"> 
                                        <div>
                                           @include('vendor.multiauth.message')
                                         </div>
                                        @foreach ($roles as $role)
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <p style="font-size:16px">{{ $role->name }}</p>
                                                <span class="badge badge-primary badge-pill">{{ $role->admins->count() }} {{ ucfirst(config('multiauth.prefix')) }}</span>
                                                <div class="float-right">
                                                    <a href="" class="btn btn-sm btn-danger mr-3" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $role->id }}').submit();">Delete</a>
                                                    <form id="delete-form-{{ $role->id }}" action="{{ route('admin.role.delete',$role->id) }}" method="POST" style="display: none;">
                                                        @csrf @method('delete')
                                                    </form>
                    
                                                    <a href="{{ route('admin.role.edit',$role->id) }}" class="btn btn-sm btn-primary mr-3">Edit</a>
                                                </div>
                                            </li>
                                        @endforeach
                                            
                                </div>
                                  <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                      </div>

                        
                </div>
                      <!-- /.row -->
        </section>
    </div>
       
{{-- <div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-white">
                    Roles
                    <span class="float-right">
                        <a href="{{ route('admin.role.create') }}" class="btn btn-sm btn-success">New Role</a>
                    </span>
                </div>

                <div class="card-body">
    @include('multiauth::message')
                    <ol class="list-group">
                        @foreach ($roles as $role)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $role->name }}
                            <span class="badge badge-primary badge-pill">{{ $role->admins->count() }} {{ ucfirst(config('multiauth.prefix')) }}</span>
                            <div class="float-right">
                                <a href="" class="btn btn-sm btn-secondary mr-3" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $role->id }}').submit();">Delete</a>
                                <form id="delete-form-{{ $role->id }}" action="{{ route('admin.role.delete',$role->id) }}" method="POST" style="display: none;">
                                    @csrf @method('delete')
                                </form>

                                <a href="{{ route('admin.role.edit',$role->id) }}" class="btn btn-sm btn-primary mr-3">Edit</a>
                            </div>
                        </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection