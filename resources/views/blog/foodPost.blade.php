<!DOCTYPE html>
<html lang="en">
@extends("blog.adminDemo")

 @section("adminProfile")
             <div class="d-flex align-items-center ms-4 mb-4">
             @foreach($admin2 AS $admin2)
             @if(auth()->user() == $admin2)
             <div class="position-relative">
                        <img class="rounded-circle" src="docs/{{$admin2['pics']}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{$admin2['name']}}</h6>
                       
             </div> 
             @endif
             @endforeach
             </div>
@endsection



<!-- NavBar Starts-->
<div id="navDiv"> 
  @section("navContent")

            
              <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="Blog2/assets2/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="Blog2/assets2/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="Blog2/assets2/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notification</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    
                    <div class="nav-item dropdown">
                    @foreach($admin AS $adminUser)
                    @if(auth()->user() == $adminUser)
                  
                       <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="docs/{{$adminUser['pics']}}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{$adminUser['name']}}</span>
                        </a>
                    @endif
                   @endforeach
                       
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="logout" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                 
                </div>
            </nav>


@endsection
</div>

            <!-- Navbar End -->




@section("admincontent")
<section class="container">
      <header>Create Posts On Foods</header>
      <form action="/createFoodPost" class="form" method="Post" enctype="multipart/form-data">
        @csrf
        <div class="input-box">
          <label>Title</label>
          <input type="text" name="title" placeholder="Enter Post title" />
        </div>

        <div class="input-box">
          <label>Summary</label>
          <input type="text" name="summary" placeholder="Summaize Post Here" />
        </div>

        <div class="input-box address">
        <label>Post Description</label><br>
        <textarea name="body" placeholder="Describe Your Post Here"></textarea>
          <div class="column">
            <div class="select-box">
              <select name="tag">
                <option hidden>Category</option>
                <option value="Politics">Politics</option>
                <option value="Business">Business</option>
                <option value="Health">Health</option>
                <option value="Education">Education</option>
                <option value="Science">Science</option>
                <option value="Foods">Foods</option>
                <option value="Entertainment">Entertainment</option>
                <option value="Travel">Travel</option>
              </select>
            </div>
            
          </div>
          <div class="column">
            <input type="file" name="foodpix1" placeholder="" />
            <input type="file" name="foodpix2" placeholder=""  />
          </div>
        </div>
        <button type="submit">Create-Post</button>
      </form>
    </section>
    @endsection


    <!-- View All Food Post Table Starts -->
@section("admincontent2")
<div class="container-fluid pt-4 px-4">
  <div class="bg-light text-center rounded p-4">
       <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">View All Posts On Foods</h6>
                        <a href="">Show All</a>
         </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Tag</th>
                                    <th scope="col">Summary</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            @foreach($view AS $view)
                            <tbody>
                                
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>{{$view->userpost->name}}</td>
                                    <td>{{$view['title']}}</td>
                                    <td>{{$view['tag']}}</td>
                                    <td>{{$view['summary']}}</td>
                                    <td>{{$view->created_at->format(config('app.post_date'))}}</td>
                                    <td><a class="btn btn-sm btn-success" href="foodPostView/{{$view['id']}}">View</a></td>
                                </tr>
                                
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            
 @endsection
<!-- View All Food Post Table Ends -->


<!-- Manage Food Post Table Starts -->
@section("admincontent3")
          <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Manage All Post On Foods</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Tag</th>
                                    <th scope="col">Summary</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            @foreach($view2 as $view2)
                            <tbody>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>{{$view2->userpost->name}}</td>
                                    <td>{{$view2['title']}}</td>
                                    <td>{{$view2['tag']}}</td>
                                    <td>{{$view2['summary']}}</td>
                                    <td>{{$view2->created_at->format(config('app.post_date'))}}</td>
                                    <td>
                                    <a class="btn btn-sm btn-primary" href="editfood/{{$view2['id']}}">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="deletefood/{{$view2['id']}}">Delete</a>
                                    </td>
                                </tr>
                                
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <!-- Manage Food Post Table Ends -->




 @endsection

<!-- Site Content Ends -->


            <!-- Footer Start -->

</html>