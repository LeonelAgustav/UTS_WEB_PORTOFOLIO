<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
            width: 280px;
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

        #projectModal .modal-dialog {
            max-width: 400px;
        }

        .hidden {
            display: none;
        }

        #modalOverlay {
            pointer-events: auto;
            cursor: pointer;
        }

        .modal-content {
            pointer-events: auto;
        }

        .table-container {
            display: flex;
            justify-content: space-between;
        }

        .table-container table {
            width: 48%;
            border: 2px solid white !important;
        }

        .table-container th,
        .table-container td {
            border: 2px solid white !important;
        }

        .table-container th {
            background-color: #5451df;
            color: white;
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
        <nav class="flex-1">
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

    <!-- Skill List -->
    <div class="flex-1 p-10 overflow-auto" id="project">
        <div class="mb-6 flex justify-between items-center">
            <h2 class="text-3xl font-bold text-white">Project List</h2>
            <div id="CRUD" class="flex space-x-3">
                <button onclick="openAddModal()" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition duration-300">
                    <i class="bi bi-plus-lg"></i>
                </button>
                <button onclick="openUpdateModal()" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition duration-300">
                    <i class="bi bi-arrow-repeat"></i>
                </button>
                <button onclick="openDeleteModal()" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition duration-300">
                    <i class="bi bi-trash-fill"></i>
                </button>
            </div>
        </div>
        <div class="container mt-5">
            <div class="table-container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="4" class="text-center">Frontend Development</th>
                        </tr>
                        <tr>
                            <th>Skill</th>
                            <th>Level</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($front as $skill)
                        <tr class="text-center">
                            <td>{{ $skill->skill_name }}</td>
                            <td>{{ $skill->level }}</td>
                            <td>
                                <!-- For frontend table -->
                                <button onclick="openEditModal('{{ $skill->skill_id }}', '{{ $skill->skill_name }}', '{{ $skill->level }}', '{{ $skill->type }}')" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded transition duration-300">
                                    <i class="bi bi-pencil-fill"></i>
                                </button>
                                <form action="{{ url('skill/delete/'.$skill->skill_id) }}" method="POST" onsubmit="return confirmDelete(event)" class="inline">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Backend Table -->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="4" class="text-center">Backend Development</th>
                        </tr>
                        <tr>
                            <th>Skill</th>
                            <th>Level</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($back as $skill)
                        <tr class="text-center">
                            <td>{{ $skill->skill_name }}</td>
                            <td>{{ $skill->level }}</td>
                            <td>
                                <!-- For frontend table -->
                                <button onclick="openEditModal('{{ $skill->skill_id }}', '{{ $skill->skill_name }}', '{{ $skill->level }}', '{{ $skill->type }}')" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded transition duration-300">
                                    <i class="bi bi-pencil-fill"></i>
                                </button>
                                <form action="{{ url('skill/delete/'.$skill->skill_id) }}" method="POST" onsubmit="return confirmDelete(event)" class="inline">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div id="add-modal" class="fixed inset-0 hidden">
        <div class="absolute inset-0 bg-black opacity-50" onclick="closeModal()"></div>
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl relative">
                <!-- Modal Header -->
                <div class="flex justify-between items-center p-4 border-b border-gray-200">
                    <h5 class="text-xl font-bold text-gray-800">Tambah Skills</h5>
                    <button type="button" class="text-gray-400 hover:text-gray-600" onclick="closeModal()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Form content remains the same -->
                <form id="projectForm" method="POST" class="p-4" enctype="multipart/form-data" action="{{ url('skill/insert') }}">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Skills Name</label>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500 text-black" name="skill_name" id="skill_name">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Level</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500 text-black" name="level" id="level">
                            <option value="" disabled selected>Pilih Level</option>
                            <option value="Beginner">Beginner</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Advanced">Advanced</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Type</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500 text-black" name="type" id="type">
                            <option value="" disabled selected>Pilih Type</option>
                            <option value="Frontend">Frontend</option>
                            <option value="Backend">Backend</option>
                        </select>
                    </div>
                    <div class="flex justify-end space-x-2 p-4 border-t border-gray-200">
                        <button type="button" onclick="closeModal()" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 focus:outline-none">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    //edit modal
    <div id="edit-modal" class="fixed inset-0 hidden">
        <div class="absolute inset-0 bg-black opacity-50" onclick="closeEditModal()"></div>
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl relative">
                <!-- Modal Header -->
                <div class="flex justify-between items-center p-4 border-b border-gray-200">
                    <h5 class="text-xl font-bold text-gray-800">Edit Skills</h5>
                    <button type="button" class="text-gray-400 hover:text-gray-600" onclick="closeEditModal()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Form content remains the same -->
                <form id="edit-form" method="POST" class="p-4" enctype="multipart/form-data" action="{{ url('skill/update') }}">
                    @csrf
                    <input type="hidden" name="skill_id" id="edit_skill_id">

                    <div class="mb-4">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Skills Name</label>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500 text-black" name="skill_name" id="edit_skill_name">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Level</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500 text-black" name="level" id="edit_level">
                            <option value="" disabled>Pilih Level</option>
                            <option value="Beginner">Beginner</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Advanced">Advanced</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Type</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500 text-black" name="type" id="edit_type">
                            <option value="" disabled>Pilih Type</option>
                            <option value="Frontend">Frontend</option>
                            <option value="Backend">Backend</option>
                        </select>
                    </div>
                    <div class="flex justify-end space-x-2 p-4 border-t border-gray-200">
                        <button type="button" onclick="closeEditModal()" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 focus:outline-none">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        // Sidebar Toggle
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('sidebar-expanded');
            sidebar.classList.toggle('sidebar-collapsed');
        });

        const modal = document.getElementById('add-modal');
        const form = document.getElementById('projectForm');
        const editModal = document.getElementById('edit-modal');

        function openAddModal() {
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
            if (form) form.reset();
        }

        function openEditModal(skillData, name, level, type) {
            editModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            
            // Handle both object and individual parameters
            if (typeof skillData === 'object') {
                document.getElementById('edit_skill_id').value = skillData.skill_id;
                document.getElementById('edit_skill_name').value = skillData.skill_name;
                document.getElementById('edit_level').value = skillData.level;
                document.getElementById('edit_type').value = skillData.type;
            } else {
                document.getElementById('edit_skill_id').value = skillData;
                document.getElementById('edit_skill_name').value = name;
                document.getElementById('edit_level').value = level;
                document.getElementById('edit_type').value = type || '';
            }
        }

        function closeEditModal() {
            editModal.classList.add('hidden');
            document.body.style.overflow = 'auto';
            document.getElementById('edit-form').reset();
        }

        // Close modals with ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                if (!modal.classList.contains('hidden')) closeModal();
                if (!editModal.classList.contains('hidden')) closeEditModal();
            }
        });

        // Optional: form submit prevent default (for AJAX or validation)
        document.getElementById('projectForm')?.addEventListener('submit', function(e) {
            e.preventDefault();
            this.submit(); // Submit normally
        });

        document.getElementById('edit-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const skillId = document.getElementById('edit_skill_id').value;
            this.action = `{{ url('skill/update') }}/${skillId}`;
            this.submit();
        });

        function confirmDelete(event) {
            if (!confirm("Are you sure you want to delete this project?")) {
                event.preventDefault();
                return false;
            }
            return true;
        }
    </script>

</body>

</html>