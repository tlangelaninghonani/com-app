<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ $links['CSS'] }}">
    <script src="{{ $links['JS'] }}"></script>
</head>
<body>
    <style>
        .thhlogo{
            width: 55px;
        }
    </style>
    <div class="canvas display-flex-center">
        <div>
            <div class="display-flex-align">
                @include("components.logo")
                <span class="gray-dark">|</span>
                <button onclick="redirect('/auth_get')">
                    <span>Explore beta</span>
                    <span class="material-symbols-sharp east">
                    east
                    </span>
                </button>
            </div>
            <div class="breaker"></div>
            <div class="breaker-dotted-feint"></div>
        </div>
    </div>
</body>
</html>