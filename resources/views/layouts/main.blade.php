@extends('adminlte::page')
@section('content')
    <div id="app">
       @yield('content-main')
    </div>
    <p id="token_server" hidden="true" data_token="{{csrf_token()}}">
@stop
 
 @section('js')
     
    <script type="text/javascript">
                   var datos_SERVER = {
                       url_server: 'http://chiringuito.test/',
                       token: $('#token_server').attr('data_token')
                   };
    </script>
     <script src="{{ asset('js/app.js') }}" defer></script> 
    
    {{--<script src="{{asset('libs/vue/vue.js')}}"></script>--}}
    {{--<script src="{{asset('libs/axios/axios.js')}}"></script>--}}
    {{--<script src="{{asset('libs/toastr/toastr.js')}}"></script>--}}

    @yield('js-main')
@stop