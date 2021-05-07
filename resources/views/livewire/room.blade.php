<div>


    <div class="row">
        <div class="col-md-12" style="text-align:center;">
            <label><b>Room Rates (per room per night)</b></label>
        </div>
    </div>

    <form>
    <div class=" add-input">

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Room Type</label>
                <input type="text"  class="form-control bg-light @error('room_type') is-invalid @enderror" wire:model="room_type.0" name="room_type" placeholder="Room Type">
                @error('single_rate')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Room Size</label>
                <input type="text"  class="form-control bg-light @error('size') is-invalid @enderror" wire:model="size.0" name="size" placeholder="Size">
                @error('single_rate')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group" >
                <label>Type Of Bed</label>
                <input type="text"  class="form-control bg-light @error('type_of_bed') is-invalid @enderror" wire:model="type_of_bed.0" name="type_of_bed" placeholder="">
                @error('single_rate')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>View</label>
                <input type="text"  class="form-control bg-light @error('view') is-invalid @enderror" wire:model="view.0" name="view" placeholder="">
                @error('single_rate')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Single Rate (1 Breakfast)</label>
                <input type="text"  class="form-control bg-light @error('single_rate') is-invalid @enderror" wire:model="single_rate.0" name="single_rate" placeholder="Single Rate (1 Breakfast)">
                @error('single_rate')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Double Rate (2 Breakfast)</label>
                <input type="text"  class="form-control bg-light @error('double_rate') is-invalid @enderror" wire:model="double_rate.0" name="double_rate" placeholder="Double Rate (2 Breakfast)">
                @error('single_rate')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Corporate Rate</label>
                <input type="text"  class="form-control bg-light @error('corporate_rate') is-invalid @enderror" wire:model="corporate_rate.0" name="corporate_rate" placeholder="Corporate Rate">
                @error('single_rate')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Benefits</label>
                <input type="text"  class="form-control bg-light @error('benefits') is-invalid @enderror" wire:model="benefits.0" name="benefits" placeholder="Benefits">
                @error('double_rate')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

    </div>
    </div>

    @foreach($inputs as $key => $value)
    <div class="add-input">

        <hr>
        <div class="row">
            <div class="col-md-12" style="text-align:center;">
                <label><b>Room Rates (per room per night)</b></label>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label>Room Type</label>
                    <input type="text"  class="form-control bg-light @error('room_type') is-invalid @enderror" wire:model="room_type.{{ $value }}" name="room_type" placeholder="Room Type">
                    @error('single_rate')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Room Size</label>
                    <input type="text"  class="form-control bg-light @error('size') is-invalid @enderror" wire:model="size.{{ $value }}" name="size" placeholder="Size">
                    @error('single_rate')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Type Of Bed</label>
                    <input type="text"  class="form-control bg-light @error('type_of_bed') is-invalid @enderror" wire:model="type_of_bed.{{ $value }}" name="type_of_bed" placeholder="">
                    @error('single_rate')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>View</label>
                    <input type="text"  class="form-control bg-light @error('view') is-invalid @enderror" wire:model="view.{{ $value }}" name="view" placeholder="">
                    @error('single_rate')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Single Rate (1 Breakfast)</label>
                    <input type="text"  class="form-control bg-light @error('single_rate') is-invalid @enderror" wire:model="single_rate.{{ $value }}" name="single_rate" placeholder="Single Rate (1 Breakfast)">
                    @error('single_rate')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Double Rate (2 Breakfast)</label>
                    <input type="text"  class="form-control bg-light @error('double_rate') is-invalid @enderror" wire:model="double_rate.{{ $value }}" name="double_rate" placeholder="Double Rate (2 Breakfast)">
                    @error('single_rate')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Corporate Rate</label>
                    <input type="text"  class="form-control bg-light @error('corporate_rate') is-invalid @enderror" wire:model="corporate_rate.{{ $value }}" name="corporate_rate" placeholder="Corporate Rate">
                    @error('single_rate')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Benefits</label>
                    <input type="text"  class="form-control bg-light @error('benefits') is-invalid @enderror" wire:model="benefits.{{ $value }}" name="benefits" placeholder="Benefits">
                    @error('double_rate')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>



    </div>

    <div class="row">
        {{-- @if($add)
        <div class="col-md-6">
            <button class="m-auto btn btn-primary btn-outline-primary badge-pill btn-block w-50" wire:click="$set('add', false)" wire:click.prevent="add({{$i}})">Add</button>
        </div>
        @endif --}}
        <div class="col-md-12">
            <button class="m-auto btn btn-danger btn-outline-primary badge-pill btn-block w-50" wire:click.prevent="remove({{$key}})">Remove</button>
        </div>
    </div>

    </div>

    @endforeach
    @if($show)
    <div class="row" style="padding-top: 2%">
        <div class="col-md-12">
            <button  id="myDiv" class="m-auto btn btn-success btn-outline-primary badge-pill btn-block w-50"  wire:click="$set('show', true)" wire:click.prevent="add({{$i}})">Add Room</button>
        </div>
    </div>
    @endif
    {{-- <div class="row" style="padding-top: 2%">
        <div class="col-md-12">
        <button type="button" wire:click.prevent="store()" class="m-auto btn btn-primary btn-outline-primary badge-pill btn-block w-50" style="background: #e89a3d !important;">Save</button>
        </div>
    </div> --}}

    </form>



    </div>

    <script>
        function doSomething () {
          // Remove onclick
          var element = document.getElementById("myDiv");
          element.onclick = "";

          // Do your processing here
          alert("Something is done!");

          // Re-enable after processing if you want
          // element.onclick = doSomething;
        }
        </script>

<script>
    function hide() {
    var div = document.getElementyById('whatYouWantToHide');
    div.style.display = 'none';
}
</script>