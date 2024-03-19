<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Register</title>

    @include('partials/css')

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="reg-form">
                            <form action="{{route('register')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input class="au-input au-input--full" type="text" id="nama" name="nama" placeholder="Nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input class="au-input au-input--full" type="email" id="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="au-input au-input--full" type="password" id="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation">Password Confirmation</label>
                                    <input class="au-input au-input--full" type="password" id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation" required>
                                </div>
                                <div class="login-checkbox">
                                    <input type="checkbox" id="aggree" name="aggree" required>
                                    <label for="aggree">Agree to the terms and policy</label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Register</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have an account?
                                    <a href="{{route('login')}}">Login</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('partials/script')

</body>

</html>
<!-- end document-->