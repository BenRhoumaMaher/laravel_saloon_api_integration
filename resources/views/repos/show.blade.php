<!DOCTYPE html>
<html>
<head>
    <title>GitHub Repository Information</title>
</head>
<body style="display: flex; justify-content:center; align-items:center; flex-direction:column; margin-top: 70px">
    <h1 style="color: red">GitHub Repository Information</h1>
    <p><strong style="color: blue">id:</strong> {{ $repo->id }}</p>
    <p><strong style="color: blue">Owner:</strong> {{ $repo->owner }}</p>
    <p><strong style="color: blue">name:</strong> {{ $repo->name }}</p>
    <p><strong style="color: blue">fullName:</strong> {{ $repo->fullName }}</p>
    <p><strong style="color: blue">private:</strong> {{ $repo->private }}</p>
    <p><strong style="color: blue">description:</strong> {{ $repo->description }}</p>
</body>
</html>
