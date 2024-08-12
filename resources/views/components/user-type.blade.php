<div class="form-group">
    <label for="user_type" class="text-dark">User Type <span class="error">*</span></label>
    <select name="user_type_id" id="user_type" class="form-control custom-input">
        <option value="">Select User Type</option>
            @foreach($userTypes as $userType)
                <option value="{{ $userType->id }}">{{ $userType->name }}</option>
            @endforeach
    </select>
</div>
