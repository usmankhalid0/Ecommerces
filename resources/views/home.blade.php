
@extends('dashboardcontent')
@section('contenting')
<span class="ceb">All Features</span>
    <div class="container1">
        <div class="row1">
            <a href="{{ route('user.index') }}"><div class="inline-div color1" ><b class="bolb">Users</b></div></a>
            <a href="{{ route('product.index') }}"><div class="inline-div right color2"><b class="bolb">Products</b></div></a>
        </div>
        <div>
            <a href="{{ route('settingindex') }}"><div class="inline-div color3 " ><b class="bolb">Setting</b></div></a>
            <a href="{{ route('shop.index') }}"><div class="inline-div right color4"><b class="bolb">Shops</b></div></a>
        </div>
    </div>
@endsection
