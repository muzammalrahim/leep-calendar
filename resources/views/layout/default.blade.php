<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{ Metronic::printAttrs('html') }} {{ Metronic::printClasses('html') }}>
    <head>
        <meta charset="utf-8"/>

        {{-- Title Section --}}
        <title>{{ config('app.name') }} | @yield('title', $page_title ?? '')</title>

        {{-- Meta Data --}}
        <meta name="description" content="@yield('page_description', $page_description ?? '')"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}" />

        {{-- Fonts --}}
        {{ Metronic::getGoogleFontsInclude() }}

        
        <link href="{{asset('/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
        
        <link href="{{asset('/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
        
        <link async href="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/css/style.bundle.css?v=7.2.8" rel="stylesheet" type="text/css" />
        
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Page Vendors Styles(used by this page)-->
       
        <!--end::Global Theme Styles-->
        <!--begin::Layout Themes(used by all pages)-->
        <link href="{{ asset('/css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" type="text/css" href="https://jhollingworth.github.io/bootstrap-wysihtml5//lib/css/bootstrap.min.css"></link>
        <link rel="stylesheet" type="text/css" href="https://jhollingworth.github.io/bootstrap-wysihtml5//lib/css/prettify.css"></link>
        <link rel="stylesheet" type="text/css" href="https://jhollingworth.github.io/bootstrap-wysihtml5//src/bootstrap-wysihtml5.css"></link>

        {{-- Fontawesome Icons --}}
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css">
      

        {{-- Includable CSS --}}
        @yield('styles')

        <!--Start: Regular Datatables CSS-->
            <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
            <!--Responsive Extension Datatables CSS-->
            <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

            @yield('styles')

            <style>
                /*Overrides for Tailwind CSS */

                /*Form fields*/
                .dataTables_wrapper select,
                .dataTables_wrapper .dataTables_filter input {
                    color: #4a5568;             /*text-gray-700*/
                    padding-left: 1rem;         /*pl-4*/
                    padding-right: 1rem;        /*pl-4*/
                    padding-top: .5rem;         /*pl-2*/
                    padding-bottom: .5rem;      /*pl-2*/
                    line-height: 1.25;          /*leading-tight*/
                    border-width: 2px;          /*border-2*/
                    border-radius: .25rem;
                    border-color: #edf2f7;      /*border-gray-200*/
                    background-color: #edf2f7;  /*bg-gray-200*/
                    border: 1px solid black;
                }

                /*Row Hover*/
                table.dataTable.hover tbody tr:hover, table.dataTable.display tbody tr:hover {
                    background-color: #ebf4ff;  /*bg-indigo-100*/
                }

                /*Pagination Buttons*/
                .dataTables_wrapper .dataTables_paginate .paginate_button       {
                    font-weight: 700;               /*font-bold*/
                    border-radius: .25rem;          /*rounded*/
                    border: 1px solid transparent;  /*border border-transparent*/
                }

                /*Pagination Buttons - Current selected */
                .dataTables_wrapper .dataTables_paginate .paginate_button.current   {
                    color: #fff !important;             /*text-white*/
                    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);    /*shadow*/
                    font-weight: 700;                   /*font-bold*/
                    border-radius: .25rem;              /*rounded*/
                    background: #667eea !important;     /*bg-indigo-500*/
                    border: 1px solid transparent;      /*border border-transparent*/
                }

                /*Pagination Buttons - Hover */
                .dataTables_wrapper .dataTables_paginate .paginate_button:hover     {
                    color: #fff !important;             /*text-white*/
                    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);     /*shadow*/
                    font-weight: 700;                   /*font-bold*/
                    border-radius: .25rem;              /*rounded*/
                    background: #667eea !important;     /*bg-indigo-500*/
                    border: 1px solid transparent;      /*border border-transparent*/
                }

                /*Add padding to bottom border */
                table.dataTable.no-footer {
                    border-bottom: 1px solid #e2e8f0;   /*border-b-1 border-gray-300*/
                    margin-top: 0.75em;
                    margin-bottom: 0.75em;
                }

                /*Change colour of responsive icon*/
                table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before, table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
                    background-color: #667eea !important; /*bg-indigo-500*/
                }
            </style>
        <!--End: Regular Datatables CSS-->

    </head>

    <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

        @if (config('layout.page-loader.type') != '')
            @include('layout.partials._page-loader')
        @endif

        @include('layout.base._layout')

        <script>var HOST_URL = "{{ route('quick-search') }}";</script>

        {{-- Global Config (global config for global JS scripts) --}}
        <script>
            var KTAppSettings = {!! json_encode(config('layout.js'), JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES) !!};
        </script>

        <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
        <!--begin::Global Config(global config for global JS scripts)-->
                <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>

        <!-- Previous Code Commented because using CDN below
       <script src="{{ asset('plugins/global/plugins.bundle.js') }}" type="text/javascript"></script>
       -->
       <script src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/plugins/global/plugins.bundle.js?v=7.2.8" type="text/javascript"></script>
        

        {{-- Previous Code Commented By Zeeshan
        <script src="{{ asset('js/scripts.bundle.js') }}" type="text/javascript"></script> 
        --}}
        <script src="https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/js/scripts.bundle.js?v=7.2.8" type="text/javascript"></script>

        <script src="{{ asset('https://jhollingworth.github.io/bootstrap-wysihtml5//lib/js/wysihtml5-0.3.0.js')}}"></script>

        <script src="{{ asset('https://jhollingworth.github.io/bootstrap-wysihtml5//lib/js/prettify.js')}}"></script>
       <script src="{{ asset('https://jhollingworth.github.io/bootstrap-wysihtml5//src/bootstrap-wysihtml5.js')}}"></script>

       <!-- Start: Datatables -->
            <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
            
        <!-- End: Datatables -->

        {{-- Includable JS --}}
        @yield('scripts')

    </body>
</html>

