<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registration Form</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="Blog/assets/css/regStyle.css" />
  </head>
  <body>
    <section class="container">
      <header>Registration Form</header>
      <form action="/register" class="form" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name" name="name" />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" name="email"/>
        </div>

        
        <div class="input-box address">
          <label>Password</label>
          <input type="password" placeholder="Enter Password" name="password" />
          
          <div class="column">
            <div class="select-box">
              <select name="country">
                <option hidden>Country</option>
                <option value="america">America</option>
                <option value="canada">Canada</option>
                <option value="Nigeria">Nigeria</option>
                <option value="UK">UK</option>
              </select>
            </div>
            <input type="file" placeholder="Enter your profile" name="file" />
          </div>
         
        </div>
        <button type="submit">Submit</button>
      </form>
    </section>
  </body>
</html>
