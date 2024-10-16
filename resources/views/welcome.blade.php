@extends('layouts.app')

@section('content')
<div id="app">

    


    <main>

        <div class="container w-74 mx-auto">

            <h1 class="text-center my-5">All Posts</h1>

            <div class="gallery">
                <div class="row">
    



    
                

               @foreach ($posts as $post)

               <div class="col-md-4">
                <div class="card h-100">
                    <img src="{{$post->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$post->caption}}</h5>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">

                        <img class="rounded-circle" src="{{$post->users->image}}" width="50" height="50" alt="">
                        {{$post->users->name}}
                      </small>

                    </div>
                  </div>
               </div>
 
                   
               @endforeach




 
 

            </div>
         </div>
            <!-- End of gallery -->


        </div>
        <!-- End of container -->

    </main>
</div>
@endsection
