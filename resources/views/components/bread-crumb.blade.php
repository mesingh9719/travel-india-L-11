@props([
    'pageTitle' => 'Dashboard',
    'pageSubTitle' => '',
])
<div class="breadcrumb-main">
    <h4 class="text-capitalize breadcrumb-title">{{ $pageTitle }}</h4>
    <div class="breadcrumb-action justify-content-center flex-wrap">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Dashboard</a></li>
                @if($pageSubTitle != '')
                    <li class="breadcrumb-item active" aria-current="page">{{ $pageSubTitle }}</li>
                @endif
            </ol>
        </nav>
    </div>
</div>
