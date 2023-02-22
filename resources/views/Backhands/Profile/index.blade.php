@extends('layouts.dashboard_master')
@section('contant')


@if (session('passS'))
<div class="alert alert-success">
    {{ session('passS') }}
</div>
@endif
<h1 class="m-t-3">Change Password</h1>


<div class="row-12">
    <form method="POST" action="{{route('change.password')}}">
        @csrf


        <div class="form-group  ">
            <label>Current Password</label>
            <input type="password" class="form-control  @error('current_password') is-invalid  @enderror" id="password" name="current_password"
                placeholder="Current Password">



            @error('current_password')
            <span class="text-danger">{{$message}}</span>
            @enderror

            @if (session('pass'))

            <span class="text-danger"> {{ session('pass') }}</span>

            @endif
        </div>


        <div class="form-group  ">
            <label>New Password</label>
            <input type="password" class="form-control @error('password') is-invalid  @enderror" id="npassword" name="password" placeholder="new password">


            @error('password')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label>Old Password</label>
            <input type="password" class="form-control @error('password_confirmation') is-invalid  @enderror" name="password_confirmation" placeholder="old password">
            @error('password_confirmation')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-block">Change Password</button>
</div>

</form>






<br>
<br>
@if (session('update'))
<div class="alert alert-success">
    {{ session('update') }}
</div>
@endif
<h1 class="m-t-3">Change Information</h1>
<form method="POST" action="{{route('change.information')}}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label> Profile Photo</label>
        <div class="mb-4">
            @if (auth()->user()->profile_photo)
            <img class="rounded-circle"  width="100" height="100" src="{{asset('uploads/profile_photo/')}}/{{auth()->user()->profile_photo}}"
                width="50" alt="user">
            @else
            <img class="rounded-circle ml-3" src="{{ Avatar::create(auth()->user()->name)->toBase64() }}" width="45">
            @endif
        </div>
        <input type="file" class="form-control" name="profile_photo" onchange="readURL(this)" ;>

        @error('profile_photo')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>


    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}">
        @error('email')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary btn-block">Update Information</button>


</form>
</div>
</div>




@endsection
