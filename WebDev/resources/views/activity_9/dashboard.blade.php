<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  @vite(['resources/sass/app.scss','resources/js/app.js'])
  <link rel='stylesheet' href='resources/css/four.css'>
</head>

<style>
  table {
    border-collapse: separate;
    border-spacing: 50px;
  }
</style>



<body>
  <div class="row py-4">
    <div class="col-lg-12">
      <form class="container pt-5" method="POST" action="{{ route('blog.create') }}" enctype="multipart/form-data" id="createBlogForm">
        @csrf

        <div class="row mb-3 align-items-center">
          <div class="col-md-4">
            <label for="InputTitle" class="form-label">Title:</label>
          </div>
          <div class="col-md-6 pt-4">
            <input type="text" class="form-control" id="InputTitle" name="title">
          </div>
        </div>

        <div class="row mb-3 align-items-center">
          <div class="col-md-4">
            <label for="InputDescription" class="form-label">Description:</label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" id="InputDescription" name="description">
          </div>
        </div>


        <div class="row mb-3 align-items-center">
          <div class="col-md-4">
            <label for="Category" class="form-label">Status:</label>
          </div>
          <div class="col-md-6">
            <select name="status" id="status" class="form-control">
              <option value="" disabled selected>Select a status</option>
              @foreach($statuses as $status)
              <option value="{{ $status->id }}">{{ $status->status }}</option>
              @endforeach
            </select>
          </div>
        </div>


        <div class="row mb-3 align-items-center">
          <div class="col-md-4">
            <label for="Category" class="form-label">Category:</label>
          </div>
          <div class="col-md-6">
            <select name="category" id="category" class="form-control">
              <option value="" disabled selected>Select a category</option>
              @foreach($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8 text-end">
            <button type="submit" class="btn btn-primary btn-sm">SUBMIT</button>
          </div>
        </div>
      </form>
    </div>

    <div class="col-lg-12">
      <div class="table-responsive">
        <table class="table table-hover" id="table">
          <thead>
            <tr>

              <th class="text-center" scope="col">Title</th>
              <th class="text-center" scope="col">Description</th>
              <th class="text-center" scope="col">Status</th>
              <th class="text-center" scope="col">Category</th>
              <th class="text-center" scope="col">Created At</th>

            </tr>
          </thead>
          <tbody class="table-group-divider">
            @foreach ($blogs as $blog)
            <tr>
              <td class="text-center">{{ $blog->title }}</td>
              <td class="text-center">{{ $blog->description }}</td>
              <td class="text-center">{{ $blog->stats->status ?? 'N/A' }}</td>
              <td class="text-center">{{ $blog->category->name?? 'N/A' }}</td>
              <td class="text-center">{{ date('d-M-y g:i a', strtotime($blog->created_at))}}</td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>


</body>

<script type="module">
  const form = '#createBlogForm';
  $(document).ready(function() {
    createBlog();
 
  });



  function createBlog() {
    $(form).on('submit', function(event) {
        event.preventDefault();

        $.ajax({

          url: '{{ route('blog.create') }}',
          type: 'POST',
          data: new FormData(this),
          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function(response) {
            populateData(response);
            resetField();
          },
        })

        function populateData(response) {
          var row = '<tr>';
          row += '<td class="text-center">' + response.title + '</td>';
          row += '<td class="text-center">' + response.description + '</td>';
          row += '<td class="text-center">' + response.stats.status + '</td>';
          row += '<td class="text-center">' + response.category.name+ '</td>';
          row += '<td class="text-center">' + response.created_at + '</td>';
          row += '</tr>';

          $("#table").find('tbody').prepend(row);
        }

        function resetField() {
          $(form).find("input[type=text], textarea").val('');
          $(form).find("option[selected]").prop('selected', true);
          }
  });
}
</script>

</html>
