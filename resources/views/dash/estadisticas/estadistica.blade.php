@extends('adminlte::page')

@section('title', 'Estadisticas')

@section('content_header')
<h1>Estadisticas</h1>
@stop

@section('content')
<div class="infogram-embed" data-id="cce58797-d6f6-4530-8cf5-c84020d1bb7c" data-type="interactive" data-title="Line Chart"></div><script>!function(e,i,n,s){var t="InfogramEmbeds",d=e.getElementsByTagName("script")[0];if(window[t]&&window[t].initialized)window[t].process&&window[t].process();else if(!e.getElementById(n)){var o=e.createElement("script");o.async=1,o.id=n,o.src="https://e.infogram.com/js/dist/embed-loader-min.js",d.parentNode.insertBefore(o,d)}}(document,0,"infogram-async");</script><div style="padding:8px 0;font-family:Arial!important;font-size:13px!important;line-height:15px!important;text-align:center;border-top:1px solid #dadada;margin:0 30px"><a href="https://infogram.com/cce58797-d6f6-4530-8cf5-c84020d1bb7c" style="color:#989898!important;text-decoration:none!important;" target="_blank">Line Chart</a><br><a href="https://infogram.com" style="color:#989898!important;text-decoration:none!important;" target="_blank" rel="nofollow">Infogram</a></div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop