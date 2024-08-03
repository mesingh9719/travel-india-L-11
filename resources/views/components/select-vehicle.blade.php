<div>
    <label for="select_vehicle" class="text-white">Select Vehicle</label>
    <select name="select_vehicle" id="select_vehicle" class="form-control custom-input">
        <option value="1">Select Vehicle</option>
        @foreach($vehicleTypes as $vehicleType)
            <option {{ $_GET['select_vehicle'] == $vehicleType->id ? 'selected' : '' }} value="{{ $vehicleType->id }}">{{ $vehicleType->name }}</option>
        @endforeach
    </select>
</div>
