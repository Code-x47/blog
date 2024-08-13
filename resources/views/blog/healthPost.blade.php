<!DOCTYPE html>
<html lang="en">
@extends("blog.adminDemo")

@section("admincontent")
<section class="container">
      <header>Create Posts On Health</header>
      <form action="#" class="form" method="Post">
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
              <select>
                <option hidden>Category</option>
                <option>Politics</option>
                <option>Business</option>
                <option>Health</option>
                <option>Education</option>
                <option>Science</option>
                <option>Foods</option>
                <option>Entertainment</option>
                <option>Travel</option>
              </select>
            </div>
            
          </div>
          <div class="column">
            <input type="file" name="file1" placeholder="" />
            <input type="file" name="file2" placeholder=""  />
          </div>
        </div>
        <button>Create-Post</button>
      </form>
    </section>
    @endsection


    <!-- View All Health Post Table Starts -->
@section("admincontent2")
<div class="container-fluid pt-4 px-4">
  <div class="bg-light text-center rounded p-4">
       <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">View All Posts On Health</h6>
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
                            <tbody>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td><a class="btn btn-sm btn-success" href="">View</a></td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td><a class="btn btn-sm btn-success" href="">View</a></td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td><a class="btn btn-sm btn-success" href="">View</a></td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td><a class="btn btn-sm btn-success" href="">View</a> 
    
                                    </td>
                                     
                                    
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td><a class="btn btn-sm btn-success" href="">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
 @endsection
<!-- View All Health Post Table Ends -->


<!-- Manage Health Post Table Starts -->
@section("admincontent3")
          <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Manage All Post On Health</h6>
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
                            <tbody>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td>
                                    <a class="btn btn-sm btn-primary" href="">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td>
                                    <a class="btn btn-sm btn-primary" href="">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td>
                                    <a class="btn btn-sm btn-primary" href="">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td>
                                    <a class="btn btn-sm btn-primary" href="">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                                    </td>
                                     
                                    
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>01 Jan 2045</td>
                                    <td>INV-0123</td>
                                    <td>Jhon Doe</td>
                                    <td>$123</td>
                                    <td>Paid</td>
                                    <td>
                                    <a class="btn btn-sm btn-primary" href="">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Manage Health Post Table Ends -->




 @endsection

<!-- Site Content Ends -->


            <!-- Footer Start -->

</html>