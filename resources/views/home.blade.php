@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="rounded-circle" >
                <img src="https://cdn.iconscout.com/icon/free/png-256/pied-piper-8-569464.png" height="200" width="200">
            </div>
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">PiedPiper.org</div>
            <div>We’re in this together! All of our computers and phones join in a network to make the strongest supercomputer the world has ever seen.</div>
            <div><a href="http://www.piedpiper.com/">www.piedpiper.com</a></div>
        </div>
        <div class="row pt-5">
            <div class="col-4">
                <img src="https://scontent-bog1-1.cdninstagram.com/vp/d53a671f99b049350ce65d67731a2e54/5D5803D2/t51.2885-15/e35/21373416_698800466983433_4303076726830792704_n.jpg?_nc_ht=scontent-bog1-1.cdninstagram.com" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://scontent-bog1-1.cdninstagram.com/vp/816295f3ca7d203691a477fbb0c0c0aa/5D9EED57/t51.2885-15/e35/59479406_162388038126180_2323198724290097461_n.jpg?_nc_ht=scontent-bog1-1.cdninstagram.com" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://scontent-bog1-1.cdninstagram.com/vp/d53a671f99b049350ce65d67731a2e54/5D5803D2/t51.2885-15/e35/21373416_698800466983433_4303076726830792704_n.jpg?_nc_ht=scontent-bog1-1.cdninstagram.com" class="w-100">
            </div>
        </div>
    </div>
</div>
@endsection
