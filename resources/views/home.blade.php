@extends('layouts.app')

@section('content')
<div id="app">
      
    <header>

        <div class="container" style="margin-bottom: 100px;">

            <div class="profile">

                <div class="profile-image mr-5">

                    <img src="{{Auth::user()->image}}" class="img-fluid" alt="">

                </div>

                <div class="profile-user-settings">

                    <h1 class="profile-user-name">{{Auth::user()->name}}</h1>


                    
                    <button type="button"  class="btn profile-edit-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Edit Profile </button>
                    
                    <!-- Modal -->
                    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h2 class="modal-title" id="exampleModalLabel">Edit Profile </h2>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group text-center">
                                        <img id="output" src="images/default.png" class="rounded-circle" width="150" height="150" >
                                      </div>
                                    <div class="form-group">
                                      <label for="name">Name</label>
                                      <input type="text" class="form-control" id="name" value="Mahmoud Khaled">
                                    </div>
                                    <div class="form-group">
                                      <label for="bio">Bio</label>
                                      <textarea name="" id="" cols="30" rows="5" class="form-control">Full Stack Web Developer</span> Lorem ipsum dolor sit,<br> amet consectetur adipisicing elit 📷✈️🏕️
                                      </textarea>
                                    </div>
                                    <div class="form-group text-center">
                                      <input onchange="loadFile(event)" id="image" type="file" hidden  accept="image/*">
                                      <label class="form-check-label" for="image">
                                        <img src="images/upload.jpg" width="100" height="100" style="cursor: pointer;" alt="">
                                      </label>
                                    </div>
                                    
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    


             
                 
                    <a href="{{route('posts.create')}}" class="btn profile-edit-btn" aria-label="profile settings"><i class="fas fa-plus" aria-hidden="true"></i></a>
                    <button class="btn profile-settings-btn" aria-label="profile settings" data-bs-toggle="modal" data-bs-target="#exampleModal3"><i class="fas fa-cog" aria-hidden="true"></i></button>
                             <!-- Modal -->
                  <div class="modal fade " id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel">Change Password</h2>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                
                                <div class="form-group">
                                  <label for="password">password</label>
                                  <input type="password" class="form-control" id="password" placeholder="Enter old password">
                                </div>
                              
                                <div class="form-group">
                                  <label for="newpassword">New password</label>
                                  <input type="password" class="form-control" id="newpassword" placeholder="Enter new password">
                                </div>
                              
                                <div class="form-group">
                                  <label for="copassword"> Confirm password</label>
                                  <input type="password" class="form-control" id="copassword" placeholder="Enter Confirm password">
                                </div>
                              
                            
                                
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>


                </div>

                <div class="profile-stats" style="margin: 30px 0px;">

                    <ul>
                            
                        <li><span class="profile-stat-count">{{$post->count()}}</span> posts</li>
                        
                        <li><span class="profile-stat-count">188</span> followers</li>
                        <li><span class="profile-stat-count">206</span> following</li>
                    </ul>

                </div>

                <div class="profile-bio" >

                    <p><span class="profile-real-name">Full Stack Web Developer</span> Lorem ipsum dolor sit,<br> amet consectetur adipisicing elit 📷✈️🏕️</p>

                </div>

            </div>
            <!-- End of profile section -->

        </div>
        <!-- End of container -->

    </header>

    <main>

        <div class="container">

            <div class="gallery">
                <div class="row">
    



    
                

               @foreach ($post as $post)
               <div class="-item col-md-4" tabindex="0">
                <a href="singlepage.html">
                   <div class="outer">

                       <img src="{{$post->image}}" class="gallery-image img-fluid" alt="" >
                       <div class="inner">
                           <ul>
                               <li class=""><i class="fa fa-heart" aria-hidden="true"></i> 56</li>
                               <li class=""><i class="fa fa-comment" aria-hidden="true"></i> 2</li>
                           </ul>
   
                       </div>
                   </div>

               </a>


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
