{{-- Extends layout --}}
@extends('layout.default')

@php($title = 'catagories')

@section('styles')
<style>
    .dropdown:hover .dropdown-menu {
        display: block;
    }
</style>
@endsection

{{-- Content --}}
@section('content')
    <div class="card card-custom">
        {{-- Start: Alerts --}}
        @include('layout.alerts')
        {{-- End: Alerts --}}

        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label"> {{ $title }} </h3>
            </div>
        </div>

        <div class="col-lg-12 col-xxl-12">
            <div class="card-body">
                <!-- <div>
                    <a href="{{ route('admin.pages.add') }}" class="mb-7 btn btn-primary font-weight-bold btn-lg float-right">
                        Add new page
                    </a>
                </div> -->
                

                <!--begin: Datatable-->
                <table id="catagories" class="stripe hover w-100 cus-table" style="margin:0px;width: 100%; margin-bottom: 31px; ">
                    <thead>
                    <tr>
                        <th data-priority="1">Catagory Name</th>
                        <th data-priority="2">Catagory description</th>
                        <th data-priority="3">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($catagories as $catagory)
                            <tr>
                                <td>{{ $catagory->name }}</td>
                                <td>{!! \Illuminate\Support\Str::words($catagory->description, 40,'....') !!}</td>
                                <!-- <td>{!! \Illuminate\Support\Str::limit($catagory->description, 45) !!} </td> -->
                                <td> 
                                    <a href="{{ route('admin.category.edit',['id'=>$catagory->id]) }}">
                                      <i class="fas fa-edit fa-2x text-primary"></i>
                                    </a> 
                                   <!--  / 
                                    <a onclick="return confirm('Do you want to delete the page?')" href="{{ route('admin.category.delete',['id'=>$catagory->id]) }}">
                                        <i class="fas fa-trash fa-2x text-danger"></i>
                                    </a>  -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
    </div>

@endsection

{{-- Scripts Section --}}
@section('scripts')
<script>
    $(document).ready(function() {

        var table = $('#catagories').DataTable( {
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } )
            .columns.adjust()
            .responsive.recalc();
    } );
    
</script>
@endsection
