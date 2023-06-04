<x-app-layout>
    @section('content')
        <div class="card card-primary m-3">
            <div class="card-header">
                <h3 class="card-title">Add Room</h3>
            </div>
            
            <form method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="room_no">Room No.</label>
                                <input type="text" class="form-control" id="roomNo" placeholder="Room no." name="room_no"> 
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Room Type</label>
                                <select class="form-control" name="type">
                                    <option>Select Type</option>
                                    @foreach ($types as $key => $type)
                                        <option value='{{$key}}'>{{$type}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" placeholder="Enter..." rows="5"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="beds">No. of Beds</label>
                                <input type="number" class="form-control" id="beds" placeholder="No. of beds" name="beds"> 
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="occupancy">Max Occupancy</label>
                                <input type="number" class="form-control" id="occupancy" placeholder="Max occupancy" name="occupancy"> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" id="price" placeholder="Rs." name="price"> 
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" name="status">
                                    <option>Select Status</option>
                                    @foreach ($statuses as $key => $status)
                                        <option value='{{$key}}'>{{$status}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    @endsection
</x-app-layout>