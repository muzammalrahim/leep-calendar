{{-- Extends layout --}}
@extends('layout.default')

@php($title = 'Pages')

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
                <div>
                    <a href="{{ route('admin.pages.add') }}" class="mb-7 btn btn-primary font-weight-bold btn-lg float-right">
                        Add new page
                    </a>
                </div>
                

                <!--begin: Datatable-->
                <table id="pages" class="stripe hover w-100 cus-table" style="margin:0px;width: 100%; margin-bottom: 31px; ">
                    <thead>
                    <tr>
                        <th data-priority="1">Title</th>
                        <th data-priority="2">Slug</th>
                        <th data-priority="3">Heading</th>
                        <th data-priority="4">Content</th>
                        <th data-priority="5">Status</th>
                        <th data-priority="6">Created At</th>
                        <th data-priority="7">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($pages as $page)
                            <tr>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->slug }}</td>
                                <td>{{ $page->heading }}</td>
                                <td>{!! \Illuminate\Support\Str::limit($page->content, 45) !!} </td>
                                <td>
                                   {{ ( ( $page->status == 'Publish' ) ? 'Published' : 'Unpublished' ) }}
                                </td>
                                <td>{{$page->created_at->diffForHumans()}}</td>
                                <td> 
                                    <a href="{{ route('admin.page.edit',["id"=>Crypt::encrypt($page->id)]) }}">
                                      <i class="fas fa-edit fa-2x text-primary"></i>
                                    </a> 
                                    / 
                                    <a onclick="return confirm('Do you want to delete the page?')" href="{{ route('admin.page.delete',["id"=>Crypt::encrypt($page->id)]) }}">
                                        <i class="fas fa-trash fa-2x text-danger"></i>
                                    </a> 
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

        var table = $('#pages').DataTable( {
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
