
<!DOCTYPE html>
<html lang="en">
    @include('includes.head')
<body>
   
<div class="container">
    @include('includes.header')
  <h2>Add testimonial</h2>
  <form action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Name:</label>
      <input type="text" class="form-control" id="testimonialName" placeholder=" testimonial Name" name="testimonialName" value="">
    
    </div>
    <div class="form-group">
      <label for="price">profession:</label>
      <input type="number" class="form-control" id="price" placeholder="profession" name="subject" value="">
       
    </div>
    <div class="form-group">
        <label for="description">Review:</label>
        <textarea class="form-control" rows="5" id="review" name="review">review</textarea>
       
      </div> 
      <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image" value="">
          
                
        </div>  
    <button type="submit" class="btn btn-default">Add</button>
  </form>
</div>
@include('includes.footer')
</body>
</html>
