<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" id="login-form">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="text" class="form-control" id="email" name="email"  >
                                @error('email')
                                    <div class="text-danger" id="email-error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" >
                                @error('password')
                                    <div class="text-danger" id="password-error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone"  >
                                @error('phone')
                                    <div class="text-danger" id="phone-error">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        {{--  document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('login-form');

            form.addEventListener('input', function(event) {
                const input = event.target;
                const errorElement = document.getElementById(input.id + '-error');
                if (errorElement) {
                    errorElement.textContent = '';
                }
            });
        });  --}}

        $(document).ready(function() {
            $('#login-form input').on('input', function() {
                var input = $(this);
                var errorElement = $('#' + input.attr('id') + '-error');
                if (errorElement) {
                    errorElement.text('');
                }
            });
        });

    </script>

</body>
</html>
