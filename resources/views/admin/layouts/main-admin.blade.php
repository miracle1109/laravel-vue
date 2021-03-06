@extends('layouts.skel')

@section('skel_scripts')
    <script src="{{ url('/js/plugins.js') }}"></script>
    <script src="{{ url('/js/common.js') }}"></script>
@endsection

@section('skel_styles')
    <link href="{{ mix('css/admin.css') }}" rel="stylesheet">
@endsection

@section('skel_content')
    <!-- /.wrapbox start-->
    <div id="app" class="wrapbox admin-container">
        @include('admin.layouts.admin-bar-top')
        @if(auth()->check())
            @include('admin.layouts.admin-nav-top')
        @endif
        <div class="clearfix"></div>

        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="container container-fluid admin-container-size mt-3">
            @yield('content')
        </div>

        @include('layouts.main-footer')
    </div>
    <!-- /.wrapbox ends-->
@endsection


@section('skel_scripts')
    @yield('scripts')
@endsection
