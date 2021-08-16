{{-- Subheader V1 --}}

<div class="subheader py-2 {{ Metronic::printClasses('subheader', false) }}" id="kt_subheader">
    <h4 class="col-12" style="text-align: center;">
        @isset($page_Heading1)
            {{$page_Heading1}}
            @endif
        @isset($page_Heading2)
            >{{$page_Heading2}}
        @endif
        @isset($page_Heading3)
            >{{$page_Heading3}}
        @endif
    </h2>

</div>
