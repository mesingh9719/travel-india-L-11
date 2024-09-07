<x-admin.master-layout pageTitle="Vehicles" pageSubTitle="Edit Vehicles">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center w-100 mt-2">
                        <div>
                            <h4 class="card-title mb-2 mt-2">Edit Vehicles</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body container">
				    @if(session('success'))
				        <div class="alert alert-success">{{ session('success') }}</div>
				    @endif

				    <form action="#" method="POST">
				        @csrf
				        <div class="row">

				            @foreach($columns as $column)
				          
				                <div class="col-md-6">
				                    <div class="form-group">
				                        <label for="{{ $column }}">{{ ucwords(str_replace('_', ' ', $column)) }}</label>
				                            @if($column == "rc_image_front")
				                              	<input type="file" name="{{ $column }}" id="{{ $column }}" class="form-control">
				                              	<img src="{{asset('images/'.$column)}}" width="50px">
				                                @else
				                                 <input type="text" name="{{ $column }}" id="{{ $column }}" class="form-control" value="" placeholder="Enter {{ ucwords(str_replace('_', ' ', $column)) }}">
				                                @endif
				                        @error($column)
				                            <p class="text-danger">{{ $message }}</p>
				                        @enderror
				                    </div>
				                </div>
				            @endforeach
				        </div>
				        <button type="submit" class="btn btn-primary d-flax justify-content-end">Submit</button>
				    </form>
                </div>
            </div>
        </div>
    </div>  
</x-admin.master-layout>
