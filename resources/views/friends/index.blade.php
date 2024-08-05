<!-- resources/views/friends/index.blade.php -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friends Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fafafa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            border-bottom: 1px solid #dbdbdb;
        }

        header h1 {
            font-size: 24px;
            color: #333;
        }

        .search-section, .story-upload-section {
            margin-bottom: 20px;
        }

        .search-section input, .story-upload-section input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .search-section button, .story-upload-section button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .search-section button:hover, .story-upload-section button:hover {
            background-color: #0056b3;
        }

        .friends-section, .stories-section {
            margin-bottom: 20px;
        }

        .friends-section h2, .stories-section h2 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #333;
        }

        .friends-list, .stories-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            gap: 10px;
        }

        .friend-item, .story-item {
            background-color: #fff;
            border: 1px solid #dbdbdb;
            border-radius: 4px;
            padding: 10px;
            text-align: center;
        }

        .friend-item img, .story-item img {
            width: 100%;
            height: auto;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Friends</h1>
        </header>
        <section class="search-section">
            <input type="text" placeholder="Cari Teman" id="searchInput">
            <button id="searchButton">Cari</button>
        </section>
        <section class="story-upload-section">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <form action="{{ route('friends.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="story" id="storyUploadInput" accept="image/*">
                <button type="submit" id="uploadStoryButton">Upload Story</button>
            </form>
        </section>
        <section class="friends-section">
            <h2>Your Current Friends</h2>
            <div class="friends-list" id="friendsList">
                <div class="friend-item">
                    <img src="https://via.placeholder.com/100" alt="Teman 1">
                    <div>Teman 1</div>
                </div>
                <div class="friend-item">
                    <img src="https://via.placeholder.com/100" alt="Teman 2">
                    <div>Teman 2</div>
                </div>
                <div class="friend-item">
                    <img src="https://via.placeholder.com/100" alt="Teman 3">
                    <div>Teman 3</div>
                </div>
            </div>
        </section>
        <section class="stories-section">
            <h2>Your Stories</h2>
            <div class="stories-list" id="storiesList">
                @foreach($stories as $story)
                    <div class="story-item">
                        <img src="{{ asset('storage/' . $story->path) }}" alt="Story">
                        <div>{{ $story->path }}</div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
</body>
</html>
