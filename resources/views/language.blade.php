<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
        html,
        body {
            height: 100%;
            background-color: #f5f5f5;
        }
        .main-container {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }
    </style>
</head>
<body>
<div class="text-right m-3">
    <select class="form-select p-3" name="language" style="width: 10%;">
        <option value="en" {{ \Session::get('language') == 'en' ? 'selected' : '' }}>English</option>
        <option value="ar" {{ \Session::get('language') == 'ar' ? 'selected' : '' }}>Hindi</option>
    </select>
</div>
<div class="main-container">
    <main class="form-signin">
        <form class="text-center">
            <h1 class="h3 mb-3 fw-normal">{{ __('Sign in') }}</h1>
            <div class="form-floating">
                <input type="email" class="form-control m-1" id="email" placeholder="name@example.com">
                <label for="email">{{ __('Email address') }}</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control m-1" id="password" placeholder="******">
                <label for="password">{{ __('Password') }}</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary m-1" type="submit">{{ __('Sign in') }}</button>
        </form>
    </main>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('select[name=language]').change(function() {
            var lang = $(this).val();
            window.location.href = "{{ route('changeLanguage') }}?language="+lang;
        });
    });
</script>
</body>
</html>
