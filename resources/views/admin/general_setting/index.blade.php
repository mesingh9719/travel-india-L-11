<x-admin.master-layout pageTitle="General Settings" pageSubTitle="General Settings">
    <div class="row">
        <div class="col-md-3">
            <x-settings-side-bar/>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h4>General Settings</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.general-settings.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="site_name">Site Name</label>
                                <input type="text" class="form-control" id="site_name" name="site_name"
                                       value="{{ old('site_name', $settings['site_name'] ?? '') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="site_email">Site Email</label>
                                <input type="email" class="form-control" id="site_email" name="site_email"
                                       value="{{ old('site_email', $settings['site_email'] ?? '') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="site_phone">Site Phone</label>
                                <input type="text" class="form-control" id="site_phone" name="site_phone"
                                       value="{{ old('site_phone', $settings['site_phone'] ?? '') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="site_address">Site Address</label>
                                <input type="text" class="form-control" id="site_address" name="site_address"
                                       value="{{ old('site_address', $settings['site_address'] ?? '') }}">
                            </div>
                            <div class="col-md-6 mb-3 upload-container">
                                <label for="site_logo" class="upload-label">Site Logo</label>
                                <input type="file" id="site_logo" name="site_logo" class="upload-avatar-input" onchange="previewImage(event, 'logoPreview')">
                                <img id="logoPreview" class="upload-preview" src="{{ $settings['site_logo'] ? asset('images/'.$settings['site_logo']) : asset('admin-assets/img/upload.png') }}" alt="Site Logo Preview">
                            </div>
                            <div class="col-md-6 mb-3 upload-container">
                                <label for="site_favicon" class="upload-label">Site Favicon</label>
                                <input type="file" id="site_favicon" name="site_favicon" class="upload-avatar-input" onchange="previewImage(event, 'faviconPreview')">
                                <img id="faviconPreview" class="upload-preview" src="{{ $settings['site_favicon'] ? asset('images/'.$settings['site_favicon']) : asset('admin-assets/img/upload.png') }}" alt="Site Favicon Preview">
                            </div>

                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <button type="submit" class="btn btn-primary">Save Settings</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <x-slot:js>
        <script>
            function previewImage(event, previewId) {
                const file = event.target.files[0];
                const reader = new FileReader();

                reader.onload = function(e) {
                    document.getElementById(previewId).src = e.target.result;
                }

                if (file) {
                    reader.readAsDataURL(file);
                }
            }
        </script>
    </x-slot:js>
</x-admin.master-layout>
