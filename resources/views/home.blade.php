@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-lg-12">
            @foreach($files as $file)
                <p>
                    <img src="{{Storage::url($file->name)}}" alt="">
                </p>
            @endforeach
        </div>
    </div>
</div>
@endsection
