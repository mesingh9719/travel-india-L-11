<x-frontend.dashboard-layout>
    <div class="row">
        <div class="col-lg-12">
            <div class="user-profile-card">
                <h4 class="user-profile-card-title">Profile Info</h4>
                @session('success')
                    <div class="alert alert-success" role="alert">
                        {{ $value }}
                    </div>
                    @endsession
                    @session('error')
                    <div class="alert alert-danger" role="alert">
                        {{ $value }}
                    </div>
                @endsession
                <div class="user-profile-form">
                    <form action="{{route('profile.update', Auth::id())}}" method="POST">
                    @csrf
                    @method('PATCH')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" name="full_name" value="{{ $profile->full_name ?? '' }}" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="mobile" value="{{ $profile->mobile ?? '' }}" placeholder="Mobile">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Alternate Mobile</label>
                                    <input type="text" class="form-control" name="alternate_Mobile" value="{{ $profile->alternate_Mobile ?? '' }}" placeholder="Alternate Mobile">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" class="form-control" name="home_state" value="{{ $profile->home_state ?? '' }}" placeholder="State">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" name="home_city" value="{{ $profile->home_city ?? '' }}" placeholder="City">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Zip Code</label>
                                    <input type="text" class="form-control" name="home_zip" value="{{ $profile->home_zip ?? '' }}" placeholder="Zip Code">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group required mb-2">
                                    <label>Home Address</label>
                                    <textarea class="form-control" rows="2"
                                        name="home_address" id="home_address"
                                        placeholder="Enter your Home Address" maxlength="200">{{ $profile->home_address ?? '' }}</textarea>
                                </div>
                                <span id="addressError"
                                    class="error"></span>
                            </div>
                        </div>
                        <button type="submit" class="theme-btn my-3"><span class="far fa-user"></span> Save
                            Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-frontend.dashboard-layout>
