<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Video Lec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    @include('common.header')
  <div class="bg-image d-flex justify-content-center align-items-center"
style="
  background-image: url('Ebooks/ebook\ bg.jpg');
  height: 30vh;
"
>
<h1 class="text-white">Video Lectures</h1>
    </div>
    <div class="container m-5 mx-auto">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th class="bg-success text-white">Subject</th>
            <th class="bg-success text-white text-center">Lectures</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Imperative Programming</td>
            <td class="d-flex justify-content-center"><a href="{{url('/imperativeprogramming')}}" class="btn btn-outline-success btn-sm" target="_blank">View</a></td>
          </tr>
          <tr>
            <td>Digital Electronics</td>
            <td class="d-flex justify-content-center"><a href="#" class="btn btn-outline-success btn-sm" target="_blank">View</a></td>
          </tr>
          <tr>
            <td>Operating System</td>
            <td class="d-flex justify-content-center"><a href="#" class="btn btn-outline-success btn-sm" target="_blank">View</a></td>
          </tr>
          <tr>
            <td>Discrete Mathematics</td>
            <td class="d-flex justify-content-center"><a href="#" class="btn btn-outline-success btn-sm" target="_blank">View</a></td>
          </tr>
          <tr>
            <td>Communication Skills</td>
            <td class="d-flex justify-content-center"><a href="#" class="btn btn-outline-success btn-sm" target="_blank">View</a></td>
          </tr>
        </tbody>
      </table>
    </div>

  @include('common.footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>