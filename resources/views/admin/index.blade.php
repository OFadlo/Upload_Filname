
  <!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <h2>Add new Admin</h2>

  <form class="" action="/admin/uploadFiles" method="post" enctype="multipart/form-data">
    <input type="text" name="email" value="" placeholder="This is ur Email"><br>

    {{ ($errors->has('email')) ? $errors->first('email') : '' }} <br>
      <input type="password" name="password" value="" placeholder="Tap Ur Password"><br>
    {{ ($errors->has('password')) ? $errors->first('password') : '' }} <br>
    <input type="text" name="fname" value="" placeholder="This is First Name"><br>
    {{ ($errors->has('fname')) ? $errors->first('fname') : '' }} <br>
    <input type="text" name="lname" value="" placeholder="This is Last Name"><br>
    {{ ($errors->has('lname')) ? $errors->first('lname') : '' }} <br>
     <input type="text" name="role" value="" placeholder="This is ur role"><br>
    {{ ($errors->has('role')) ? $errors->first('role') : '' }} <br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <img src="{{ asset('placehold.it/100x100') }}" id="showimages" style="max-width:200px;max-height:200px;float:left;"/>
    <div class="row">
      <div class="col-md-12">
        <input type="file" id="image" name="image">
      </div>
    </div>
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary pull-right" value="post">
        Submit
      </button>
    </div>
  </form>


  <script type="text/javascript">
      function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
            $('#showimages').attr('src', e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
        }
      }
      $("#image").change(function () { readURL(this);
      });
  </script>
</body>
</html>