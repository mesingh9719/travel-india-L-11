<div class="form-group">
    <label for="select_vehicle">Select Vehicle</label>
    <select name="select_vehicle" id="select_vehicle" class="form-control custom-input">
        <option value="">Select Vehicle</option>
        @foreach($vehicleTypes as $vehicleType)
            <option value="{{ $vehicleType->id }}" {{ isset($_GET['select_vehicle']) && $_GET['select_vehicle'] == $vehicleType->id ? 'selected' : '' }}>
                {{ $vehicleType->name }}
            </option>
        @endforeach
    </select>
</div>
