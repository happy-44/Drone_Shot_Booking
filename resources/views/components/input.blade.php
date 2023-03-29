<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
    <div class="form-group">
            <label for="name">{{$label}}</label>
            <input type="{{$type}}" class="form-control" name="{{$name}}" id="" aria-describedby="helpId" placeholder="">
            <span class="text-danger">
                <!-- @error('name')
                    {{$message}}
                @enderror -->
            </span>
        </div>
</div>