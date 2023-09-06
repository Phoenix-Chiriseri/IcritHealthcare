<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B.E Care Management System</title>
    
    <!-- Bootstrap CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- splash-screen CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/splash-screen@4.0.1/dist/splash-screen.min.css" rel="stylesheet">
</head>
<body>
    <div class="splash-container">
        <video autoplay muted loop id="splash-video">
            <source src="{{ asset('videos/be.mp4') }}" type="video/mp4">
        </video>
    </div>

    <!-- Bootstrap JavaScript and jQuery from CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.min.js"></script>

    <script>
        // Hide the splash screen when the video ends and redirect
        var video = document.getElementById("splash-video");
        video.addEventListener("ended", function () {
            document.querySelector(".splash-container").style.display = "none";
            window.location.href = "{{ route('login') }}";
        });

        // Automatically hide the splash screen after 11 seconds
        setTimeout(function () {
            document.querySelector(".splash-container").style.display = "none";
            window.location.href = "{{ route('login') }}";
        }, 11000); // 11,000 milliseconds = 11 seconds
    </script>
</body>
</html>