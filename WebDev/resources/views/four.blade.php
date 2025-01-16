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



<body class="container">
    <div class="row py-5" pt-1>
        <div class="col-lg-4">
            <form class="border" style="padding: 50px;" method="post" action="{{ route('four.submit') }}">
                @csrf
                <div class="mb-3">
                    <div class="mb-3">
                        <div class="row g-3 align-items-center">

                            <div class="col-auto">
                                <label for="exampleInputEmail1" class="form-label" style="margin-right: 25px;">Email:</label>
                            </div>
                            <div class="col-auto">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="exampleInputPassword1" class="form-label">Password:</label>
                            </div>
                            <div class="col-auto">
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content align-items-center ms-auto">
                        <button type="submit" class="btn btn-primary btn-sm">Login</button>
                        <a href="#" class="ms-3">Forgot Password?</a>
                    </div>
            </form>
        </div>
        <div class="col-lg-8">
            <div class="card border-0">
                <div class="card-body">
                    <h1 class="card-title text-center fw-bold">PRICING</h1>
                    <p class="card-text text-center" style="padding:15px;">Loresh Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br> when an unknown printer took a galley of type<br> and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-5 m-10">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-8">
            <div class="card border-0" style="width: 53rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card " style="width: 17rem;">
                                <img src="https://wallpapers.com/images/hd/twice-4k-in-abstract-backdrop-7uumppyw3cc8t38w.jpg" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card shadow-none " style="width: 17rem;">
                                <img src="https://wallpapers.com/images/hd/twice-4k-in-abstract-backdrop-7uumppyw3cc8t38w.jpg" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card " style="width: 17rem;">
                                <img src="https://wallpapers.com/images/hd/twice-4k-in-abstract-backdrop-7uumppyw3cc8t38w.jpg" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4">
                            <div class="card " style="width: 17rem;">
                                <img src="https://wallpapers.com/images/hd/twice-4k-in-abstract-backdrop-7uumppyw3cc8t38w.jpg" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card " style="width: 17rem;">
                                <img src="https://wallpapers.com/images/hd/twice-4k-in-abstract-backdrop-7uumppyw3cc8t38w.jpg" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card " style="width: 17rem;">
                                <img src="https://wallpapers.com/images/hd/twice-4k-in-abstract-backdrop-7uumppyw3cc8t38w.jpg" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="row p-5 m-10">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-8">
            <table class="table caption-top">
                <caption class="text-center  fw-bold">Compare Plans </caption>
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Free</th>
                        <th scope="col">Pro</th>
                        <th scope="col">Enterprise</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Public</th>
                        <td>✓</td>
                        <td>✓</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <th scope="row">Private</th>
                        <td>✓</td>
                        <td>✓</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">Permissions</th>
                        <td></td>
                        <td>✓</td>
                        <td>✓</td>
                    </tr>
                </tbody>
            </table>

        </div>

</body>

</html>