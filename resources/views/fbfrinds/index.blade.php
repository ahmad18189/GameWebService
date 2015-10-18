@extends('app')

@section('content')
    <h1>Facebook friends </h1>
    <hr>
    @foreach($fbfrinds as $fbf)
        <article>
            <h2>
             <!--  <a href="#">{{$fbf->id}}</a>
                <a href="{{action('FbfrindsCtrl@show',[$fbf->id])}}">{{$fbf->id}}</a>

--> <a href="{{url('/fbfrinds',$fbf->id)}}">{{$fbf->id}}</a>
            </h2>
            <div class="body">
                {{$fbf->fb_id}}
            </div>
        </article>

    @endforeach
@stop