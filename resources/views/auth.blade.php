<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ $links['CSS'] }}">
    <script src="{{ $links['JS'] }}"></script>
</head>
<body>
    <div class="canvas display-flex-center big-gap">
        <div class="display-flex-center">
            @include("components.logo")
        </div>
        <div class="login-div">
            <div class="text-align-center">
                <span class="material-symbols-sharp icon-big">
                shield
                </span>
            </div>
            <div class="breaker"></div>
            <form id="authform" action="/auth_post" method="POST">
                @csrf
                @method("POST")
                <div>
                    <span class="nowrap">Username - </span><br>
                    <div class="breaker"></div>
                    <div class="input-container">
                        <input type="text" name="username" autocomplete="off" placeholder="Enter your username">
                    </div>
                </div>
                <div class="breaker"></div>
                <div>
                    <span class="nowrap">Password - </span><br>
                    <div class="breaker"></div>
                    <div class="input-container">
                        <input type="text" name="password" autocomplete="off" placeholder="Enter your password">
                    </div>
                </div>
                <div class="breaker"></div>
                <button class="button-100" onclick="submitForm('authform')">
                    <span>Authorize</span>
                    <span class="material-symbols-sharp east">
                    east
                    </span>
                </button>
            </form>
        </div>
    </div>
</body>
</html>