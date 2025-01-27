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
      <form class="container pt-5">
        <div class="row mb-3 align-items-center">
          <div class="col-md-4">
            <label for="InputTitle" class="form-label">Title:</label>
          </div>
          <div class="col-md-6 pt-4">
            <input type="text" class="form-control" id="InputTitle" name="Title">
          </div>
        </div>

        <div class="row mb-3 align-items-center">
          <div class="col-md-4">
            <label for="InputDescription" class="form-label">Description:</label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" id="InputDescription" name="Description">
          </div>
        </div>

        <div class="row mb-3 align-items-center">
          <div class="col-md-4">
            <label for="InputStatus" class="form-label">Status:</label>
          </div>
          <div class="col-md-3">
            <input class="form-check-input" type="radio" name="ACTIVE" id="flexRadio">
            <label class="form-check-label" for="flexRadio">
              Active
            </label>
          </div>
          <div class="col-md-3">
            <input class="form-check-input" type="radio" name="ACTIVE" id="flexRadio">
            <label class="form-check-label" for="flexRadio">
              Inactive
            </label>
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
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="text-center" scope="col">Title</th>
              <th class="text-center" scope="col">Description</th>
              <th class="text-center" scope="col">Status</th>
              <th class="text-center" scope="col">Category</th>
              <th class="text-center" scope="col">Created At</th>
              <th class="text-center" scope="col">Updated At</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            @foreach ($blogs as $blog)
            <tr>
              <td class="text-center">{{ $blog->title }}</td>
              <td class="text-center">{{ $blog->description }}</td>
              <td class="text-center">{{ $blog->status_id }}</td>
              <td class="text-center">{{ $blog->category_id }}</td>
              <td class="text-center">{{ $blog->created_at }}</td>
              <td class="text-center">{{ $blog->updated_at }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>


</body>

</html>