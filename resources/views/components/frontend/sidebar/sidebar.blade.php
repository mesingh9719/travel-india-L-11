<div class="col-lg-3">
    <div class="user-profile-sidebar">
        <div class="user-profile-sidebar-top">
            <div class="user-profile-img">
                <form id="uploadForm" action="{{ route('profile.update', Auth::id()) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                @php
                $userProfile = isset(Auth::user()->profile_image)?'images/'.Auth::user()->profile_image:'frontend-assets/img/account/user.jpg';
                @endphp
                <img src="{{asset($userProfile)}}" alt>
                <!-- <button type="button" class="profile-img-btn"><i class="far fa-camera"></i></button>
                <input type="file" class="profile-img-file" name="image" id="profile">
                <input type="hidden" id="userId" value="{{Auth::id()}}"> -->
                <div id="response"></div>
            </form>
            </div>
            <h5>{{Auth::user()->full_name}}</h5>
            <p>{{Auth::user()->mobile}}</p>
        </div>
        <ul class="user-profile-sidebar-list">
            <li><a  class="{{ request()->routeIs('dashboard.index') ? 'active' : '' }}" href="{{route('dashboard.index')}}"><i class="far fa-gauge-high"></i> Dashboard</a></li>
            <li><a class="{{ request()->routeIs('show.ride') ? 'active' : '' }}" href="{{route('show.ride')}}"><i class="far fa-map"></i>Rides</a></li>
            <li><a class="{{ request()->routeIs('vehicle.index') ? 'active' : '' }}" href="{{route('vehicle.index')}}"><i class="far fa-car"></i>Vehicles</a></li>
            <li><a class="{{ request()->routeIs('driving-license.index') ? 'active' : '' }}" href="{{route('driving-license.index')}}"><i class="far fa-user-group"></i>Drivers</a></li>


            <li><a class="{{ request()->routeIs('profile.index') ? 'active' : '' }}" href="{{route('profile.index')}}"><i class="far fa-user"></i> My Profile</a></li>
            <li><a class="{{ request()->routeIs('total-bookings.index') ? 'active' : '' }}" href="{{route('total-bookings.index')}}"><i class="far fa-layer-group"></i> My Booking</a></li>
            <li><a class="{{ request()->routeIs('cancel-bookings.index') ? 'active' : '' }}" href="{{route('cancel-bookings.index')}}"><i class="far fa-xmark-circle"></i> Cancel Booking</a></li>
            <li><a class="{{ request()->routeIs('payment-history.index') ? 'active' : '' }}" href="{{route('payment-history.index')}}"><i class="far fa-credit-card"></i> Payment History</a></li>
            <li><a class="{{ request()->routeIs('user-setting.index') ? 'active' : '' }}" href="{{route('user-setting.index')}}"><i class="far fa-gear"></i> Settings</a></li>
            <hr />

            <li><a class="{{ request()->routeIs('profile.index') ? 'active' : '' }}" href="#"><i class="far fa-sign-out"></i> Logout</a></li>
        </ul>
    </div>
</div>
