<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Update Entertainment Post</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href={{asset("Blog/assets/css/regStyle.css")}} />
  </head>
  <body>
    <section class="container">
      <header>Update Entertainment Post</header>
      <form action="/update" class="form" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$edit['id']}}">
        <div class="input-box">
          <label>Title</label>
          <input type="text" value = "{{$edit['title']}}" name="title" />
        </div>

        <div class="input-box">
          <label>Summary</label>
          <input type="text" value = "{{$edit['summary']}}" name="summary"/>
        </div>

        
        <div class="input-box address">
            <label>Post Description</label><br>
            <textarea name="body" placeholder="Describe Your Post Here" style="width: 100%; height:20vh">{{$edit['body']}}</textarea>

           <div class="column">
            <div class="select-box">
                <select name="tag">
                  <option hidden>Category</option>
                  <option value = "Entertainment">Entertainment</option>
                 </select>
              </div>
              
            <input type="file" value= "{{$edit['file1']}}" name="file1"  />
            <input type="file" value= "{{$edit['file2']}}" name="file2" />
          </div>
         
        </div>

        <button type="submit">Submit</button>
      </form>
    </section>
  </body>
</html>
