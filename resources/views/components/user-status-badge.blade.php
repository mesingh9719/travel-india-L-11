@props([
    'is_verified' => '',
    'is_rejected' => '',
    'is_active' => '',
])
@if((int)$is_verified === 1)
    <span class="badge badge-round badge-success badge-lg">
        Verified
    </span>
@elseif((int)$is_rejected === 1)
    <span class="badge badge-round badge-danger badge-lg">
        Rejected
    </span>
@elseif((int)$is_active === 1)
    <span class="badge badge-round badge-primary badge-lg">
        Active | Not Verified
    </span>
@else
    <span class="badge badge-round badge-warning badge-lg">
        Inactive
    </span>
@endif
