<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Add Inter font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .post-transition {
            transition: all 0.3s ease;
        }

        .post-transition:hover {
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="bg-gray-50">
<div class="min-h-screen">
    <!-- Header -->
    @include('profile.profileNavbar')

    <!-- Main Content -->
    <div class="pt-16">
        <!-- Profile Header -->
        @include('profile.profileHeader')
        <!-- Main Content Grid -->
        <div class="max-w-7xl mx-auto px-4 py-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Left Sidebar -->
                <div class="space-y-6">
                    <!-- About Card -->
                    @include('profile.aboutCard')
                    <!-- Friends Card -->
                    @include('profile.friendSection')
                </div>

                <!-- Main Feed -->
                <div class="md:col-span-2 space-y-6">
                    <!-- Create Post -->
                    <!-- Posts -->
                    @include('profile.profile_Posts')
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
