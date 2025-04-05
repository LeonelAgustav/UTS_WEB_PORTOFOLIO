<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #0f172a;
            color: #e2e8f0;
        }

        .sidebar {
            background: linear-gradient(135deg, #4338ca, #6366f1);
            transition: width 0.3s ease;
            overflow: hidden;
        }

        .sidebar-expanded {
            width: 250px;
        }

        .sidebar-collapsed {
            width: 110px;
        }

        .sidebar-item-text {
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .sidebar-icon,
        .sidebar-item-text {
            font-size: 1.25rem;
        }

        .sidebar-collapsed .sidebar-item-text {
            opacity: 0;
            width: 0;
            overflow: hidden;
        }

        .sidebar-collapsed .profile-name {
            display: none;
        }

        .sidebar-collapsed .sidebar-icon {
            margin-right: 0;
        }

        .profile-image {
            border: 3px solid rgba(255, 255, 255, 0.2);
            transition: transform 0.3s ease;
        }

        .profile-image:hover {
            transform: scale(1.1);
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .table-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 1rem;
        }

        .table-container>div {
            width: calc(50% - 0.5rem);
        }

        @media (max-width: 768px) {
            .table-container>div {
                width: 100%;
            }
        }
    </style>
</head>

<body class="min-h-screen flex">
    <!-- Sidebar -->
    <div id="sidebar" class="sidebar sidebar-expanded p-6 shadow-lg flex flex-col relative">
        <!-- Collapse/Expand Button -->
        <button id="sidebarToggle" class="absolute top-2 right-4 text-white focus:outline-none">
            <i class="bi bi-arrows"></i>
        </button>

        <!-- Profile Section -->
        <nav class="fixed flex-1">
            <div class="flex items-center mb-10">
                <img src="{{ asset('img/Profile_Foto.jpg') }}" alt="Profile" class="profile-image w-16 h-16 rounded-full mr-4 object-cover">
                <div class="sidebar-item-text profile-name">
                    <h2 class="text-xl font-bold text-white">Leonel M.A</h2>
                    <p class="text-sm text-gray-300">Full Stack Developer</p>
                </div>
            </div>

            <ul class="space-y-2">
                <li>
                    <a href="{{ url('crud') }}" class="text-white hover:bg-purple-600 px-4 py-2 rounded-lg flex align-items-center transition duration-300">
                        <i class="bi bi-house-fill h-5 w-5 mr-3 sidebar-icon"></i>
                        <span class="sidebar-item-text">Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('project/show') }}" class="text-white hover:bg-purple-600 px-4 py-2 rounded-lg flex align-items-center transition duration-300">
                        <i class="bi bi-card-list h-5 w-5 mr-3 sidebar-icon"></i>
                        <span class="sidebar-item-text">Portfolio</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('certificate/show') }}" class="text-white hover:bg-purple-600 px-4 py-2 rounded-lg flex align-items-center transition duration-300">
                        <i class="bi bi-award-fill h-5 w-5 mr-3 sidebar-icon"></i>
                        <span class="sidebar-item-text">Certificates</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('skill/show') }}" class="text-white hover:bg-purple-600 px-4 py-2 rounded-lg flex align-items-center transition duration-300">
                        <i class="bi bi-bar-chart-fill h-5 w-5 mr-3 sidebar-icon"></i>
                        <span class="sidebar-item-text">Skills</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/')}}" class="text-white hover:bg-purple-600 px-4 py-2 rounded-lg flex align-items-center transition duration-300">
                        <i class="bi bi-file-fill h-5 w-5 mr-3 sidebar-icon"></i>
                        <span class="sidebar-item-text">Web Portfolio</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-10 overflow-auto">
        <!-- Portfolio Section -->
        <section id="portfolio" class="mb-12">
            <h2 class="text-3xl font-bold mb-6 text-white">My Projects</h2>

            <div class="grid md:grid-cols-2 gap-6">
                @foreach($projects as $index => $projects)
                <div class="card bg-gray-800 rounded-lg p-6 shadow-md hover:shadow-xl">
                    <h3 class="text-xl font-semibold mb-3 text-indigo-400">{{ $projects->project_name }}</h3>
                    <p class="text-gray-300 mb-4">{{ $projects->deskripsi }}.</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">{{ $projects->bahasa }}</span>
                        <a href="{{ $projects->url }}" class="text-indigo-400 hover:underline flex items-center" target="_blank" rel="noopener noreferrer">
                            View Project
                            <i class="bi bi-arrow-right h-4 w-4 ml-2"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

        </section>

        <!-- Certificates Section -->
        <section id="certificates">
            <h2 class="text-3xl font-bold mb-6 text-white">My Certificates</h2>
            <div class="grid md:grid-cols-3 gap-6">
                @foreach($certificates as $index => $certificates)
                <div class="card bg-gray-800 rounded-lg p-6 shadow-md hover:shadow-xl">
                    <img src="{{ asset('/storage/'.$certificates->image) }}" alt="Certificate" class="w-full rounded-lg mb-4 opacity-80 hover:opacity-100 transition duration-300">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl font-semibold text-indigo-400">{{ $certificates->certi_name }}</h3>
                            <p class="text-gray-500 text-sm">{{ $certificates->publisher }} • {{ $certificates->month }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <!-- Skill Section -->
        <section id="skills" class="mb-12 mt-12">
            <h2 class="text-3xl font-bold mb-6 text-white">My Skills</h2>
            <!-- Container untuk Menyusun Tabel Sejajar -->
            <div class="flex flex-wrap gap-8 table-container">
                <!-- Frontend Skills -->
                <div class="w-full">
                    <h3 class="text-2xl font-semibold text-indigo-400 mb-4">Frontend Development</h3>
                    <table class="w-full bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <thead>
                            <tr class="bg-gray-700 text-left">
                                <th class="py-3 px-4 text-gray-300">Skill</th>
                                <th class="py-3 px-4 text-gray-300">Level</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($front as $skill)
                            <tr class="border-b border-gray-700">
                                <td class="py-3 px-4 text-gray-300">{{ $skill->skill_name }}</td>
                                <td class="py-3 px-4 text-gray-300">{{ $skill->level }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Backend Skills -->
                <div class="w-full">
                    <h3 class="text-2xl font-semibold text-indigo-400 mb-4">Backend Development</h3>
                    <table class="w-full bg-gray-800 rounded-lg shadow-md overflow-hidden">
                        <thead>
                            <tr class="bg-gray-700 text-left">
                                <th class="py-3 px-4 text-gray-300">Skill</th>
                                <th class="py-3 px-4 text-gray-300">Level</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($back as $skill)
                            <tr class="border-b border-gray-700">
                                <td class="py-3 px-4 text-gray-300">{{ $skill->skill_name }}</td>
                                <td class="py-3 px-4 text-gray-300">{{ $skill->level }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('sidebar-expanded');
            sidebar.classList.toggle('sidebar-collapsed');
        });
    </script>
</body>

</html>