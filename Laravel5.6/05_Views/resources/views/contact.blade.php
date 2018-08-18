@extends('layouts.master')
@section('content')

    <div>

        <form action="{{ route('contactPost')}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class = "form-group">
                <input  class =  "form-control" name="name" type="text" placeholder="Name">
            </div>
    
            <div class = "form-group">
                <input  class =  "form-control" name="email[]" type="email" placeholder=" Work Email">
            </div>

            <div class = "form-group">
                    <input  class =  "form-control" name="email[]" type="email" placeholder="Personal Email">
            </div>
    
            <div class = "form-group">
                <textarea class="form-control" name="message" id="" cols = "30" rows="10" placeholder="Message..." ></textarea>
            </div>
            
            <div class = "form-group">
                    <input class="form-control" name="attachment"  type ="file" ></input>
            </div>

            <div class = "form-group">
                <button type="submit" class="form-control">Send Message</button>
            </div>
    
    
        </form>

    </div>
    


@endsection