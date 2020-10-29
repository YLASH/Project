

<form action="/addimg/" method="post" enctype="multipart/form-data">
  @csrf
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
  <hr>
  {{$imagesf}}
  @foreach($images as $image)
  
   <img src="/storage/{{$image->filename}}" width="200">
       <br>
   @endforeach    