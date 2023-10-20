<!DOCTYPE html>
<html>
<head>
    <title>GitHub Repository Information</title>
</head>
<body style="display: flex; justify-content:center; align-items:center; flex-direction:column; margin-top: 70px">
    <h1 style="color: red">GitHub Repository Languages</h1>
    @forelse ($repoLanguages as $language)
    <p><strong style="color: blue">Language:</strong> {{ $language }}</p>
    @empty
        <p>No languages</p>
    @endforelse
</body>
</html>
