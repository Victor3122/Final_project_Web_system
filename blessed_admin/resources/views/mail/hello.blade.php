<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <h4>Reports</h4>
                <hr>

                <form action="{{ route('send.email') }}" method="POST">
                    @csrf

                    @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif

                    @if(Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter your name" value="{{ old('name') }}">
                        @error('name') <span class="invalid-feedback" role="alert">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                        @error('email') <span class="invalid-feedback" role="alert">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" placeholder="Enter the subject" value="{{ old('subject') }}">
                        @error('subject') <span class="invalid-feedback" role="alert">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group">
                        <label for="message">Reports:</label>
                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="3" placeholder="Enter your message">{{ old('message') }}</textarea>
                        @error('message') <span class="invalid-feedback" role="alert">{{ $message }}</span>@enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
