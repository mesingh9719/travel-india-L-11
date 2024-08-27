<div class="form-group required mb-2">
    <label for="user_type" class="text-dark">User Type</label>
    <select name="user_type_id" id="user_type" class="form-control custom-input">
        <option value="">Select User Type</option>
            @foreach($userTypes as $userType)
                <option value="{{ $userType->id }}"  {{ old('user_type_id') == $userType->id ? 'selected' : '' }}>{{ $userType->name }}</option>
            @endforeach
    </select>
</div>
