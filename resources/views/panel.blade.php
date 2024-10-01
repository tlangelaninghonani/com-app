<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ $links['CSS'] }}">
    <script src="{{ $links['JS'] }}"></script>
</head>
<style>
    .panel-right{
        min-height: 600px;
        border-left: 2px solid var(--gray);
    }
</style>
<body>
    @include("components.header")
</body>
</html>