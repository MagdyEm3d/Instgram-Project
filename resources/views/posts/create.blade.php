@extends('layouts.app')

@section('content')


<div id="app">
       


    <div class="container">
        <h1 class="text-center mt-5 mb-5">Add Post</h1>


        <div class="row">
            <div class="col-md-12">
                
                <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data" class="createform p-5 w-75 mx-auto">
                    @csrf
                    <div class="form-group">
                        <label>Upload Image</label>
                        <input onchange="loadFile(event)" id="image" type="file" name="image"  class="form-control">
                      </div>
    
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" name="title" class="form-control">
                    </div>
                    
                    <button type="submit" class="btn btn-dark p-2 w-100" style="background-color: black; color: #fff;">Submit</button>
                  </form>
            </div>
             



        </div>
        
            
    </div>
</div>
@endsection