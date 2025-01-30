<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  @vite(['resources/sass/app.scss','resources/js/app.js'])
  <link rel='stylesheet' href='resources/css/four.css'>
  <!-- Include Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
  table {
    border-collapse: separate;
    border-spacing: 50px;
  }

  .toast {
    position: fixed;
    bottom: 20px;
    right: 20px;
    min-width: 200px;
    background-color: #333;
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
  }

  .toast.show {
    opacity: 1;
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
              <td class="text-center">{{ $blog->category->name ?? 'N/A' }}</td>
              <td class="text-center">{{ date('d-M-y g:i a', strtotime($blog->created_at)) }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>


    <div id="toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <strong class="me-auto">Notification</strong>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        Blog created successfully!
      </div>
    </div>
  </div>

 
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    $(document).ready(function() {
      const form = '#createBlogForm';

      function showToast(message) {
        let toast = document.getElementById("toast");
        let toastBody = toast.querySelector(".toast-body");
        toastBody.textContent = message;

        toast.classList.add("show");

        setTimeout(function() {
          toast.classList.remove("show");
        }, 5000);
      }


      function resetField() {
        $(form).find("input[type=text], textarea").val('');
        $(form).find("select").prop('selectedIndex', 0); 
      }


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
            showToast("Blog created successfully!");
          },
          error: function(xhr, status, error) {
            console.error('Error:', error);
            showToast("An error occurred. Please try again.");
          }
        });
      });

     
      function populateData(response) {
        var row = '<tr>';
        row += '<td class="text-center">' + response.title + '</td>';
        row += '<td class="text-center">' + response.description + '</td>';
        row += '<td class="text-center">' + (response.stats.status) + '</td>';
        row += '<td class="text-center">' + (response.category.name) + '</td>';
        row += '<td class="text-center">' + response.created_at + '</td>';
        row += '</tr>';

        $("#table").find('tbody').prepend(row);
      }
    });
  </script>
</body>

</html>