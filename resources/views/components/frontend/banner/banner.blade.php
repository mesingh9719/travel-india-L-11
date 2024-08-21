@props([
    'bannerText' => []
])
<div class="site-breadcrumb" style="background: url({{asset('frontend-assets/img/breadcrumb/01.jpg')}})">
        <div class="container">
        @foreach($bannerText as $key => $url)
                @if(request()->route()->getName() == $key)
                    <h2 class="breadcrumb-title">{{$url}}</h2>
                @endif
            @endforeach

            <ul class="breadcrumb-menu">
            @foreach($bannerText as $key => $url)
                @if(request()->route()->getName() == $key)
                <li><a href="{{route('dashboard.index')}}">Home</a></li>
                            <li class="active">{{$url}}</li>

                @endif
            @endforeach

            </ul>
        </div>
    </div>



