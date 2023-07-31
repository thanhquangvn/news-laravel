<!DOCTYPE html>
<html>
<head>
    <title>Listing Report</title>
    <style>
        /* Add some basic styling to make the document look good when rendered as a PDF */
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .content {
            margin: 30px;
        }

        .listing-details {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Listing Report</h1>
    </div>

    <div class="content">
        <h2>{{ $listing->title }}</h2>
        <div class="listing-details">
            <p>Author: {{ $listing->author }}</p>
            <p>Location: {{ $listing->location }}</p>
            <p>Email: {{ $listing->email }}</p>
            <p>Tags: {{ $listing->tags }}</p>
            <p>Description: {{ $listing->description }}</p>
        </div>
    </div>
</body>
</html>
