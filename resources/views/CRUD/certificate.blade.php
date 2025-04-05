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
            width: 255px;
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

        #certificatetModal .modal-dialog {
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
    <!-- Certificate List -->
    <div class="flex-1 p-10 overflow-auto" id="certificates">
        <div class="mb-6 flex justify-between items-center">
            <h2 class="text-3xl font-bold text-white">Certificates List</h2>
            <div id="CRUD" class="flex space-x-2">
                <button onclick="openModal()" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg transition duration-300">
                    <i class="bi bi-plus-lg"></i>
                </button>
            </div>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach($certificates as $index => $cert)
            <div class="card bg-gray-800 rounded-lg p-6 shadow-md hover:shadow-xl relative">
                <img src="{{ asset('/storage/'.$cert->image) }}" alt="Certificate" class="w-full rounded-lg mb-4 opacity-80 hover:opacity-100 transition duration-300">
                <div class="flex justify-between items-center" style="margin-bottom: 1.5rem;">
                    <div>
                        <h3 class="text-xl font-semibold text-indigo-400">{{ $cert->certi_name }}</h3>
                        <p class="text-gray-500 text-sm">{{ $cert->publisher }} • {{ $cert->month }}</p>
                    </div>
                </div>
                <!-- Tombol CRUD di pojok kanan bawah -->
                <div id="CRUD" class="absolute bottom-4 right-4 flex space-x-2">
                    <button onclick='openEditModal({{ $cert->certi_id }}, "{{ addslashes($cert->certi_name) }}", "{{ addslashes($cert->publisher) }}", "{{ addslashes($cert->month) }}")' class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition duration-300">
                        <i class="bi bi-pencil-fill"></i>
                    </button>
                    <form action="{{ url('certificate/delete/'.$cert->certi_id) }}" method="POST" onsubmit="return confirmDelete(event)" class="inline">
                        @csrf
                        @method('POST')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition duration-300">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Add Modal -->
    <div id="addmodal" class="fixed inset-0 hidden">
        <div class="absolute inset-0 bg-black opacity-50" onclick="closeModal()"></div>
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl relative">
                <!-- Modal Header -->
                <div class="flex justify-between items-center p-4 border-b border-gray-200">
                    <h5 class="text-xl font-bold text-gray-800">Tambah Certificate</h5>
                    <button type="button" class="text-gray-400 hover:text-gray-600" onclick="closeModal()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <!-- Form content remains the same -->
                <form id="certificateForm" method="POST" class="p-4" enctype="multipart/form-data" action="{{ url('certificate/insert') }}">
                    @csrf
                    <!-- Input fields -->
                    <div class="mb-4">
                        <label class="block text-sm font-bold text-gray-700 mb-2">IMAGE</label>
                        <input type="file" class="text-black w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" name="image" id="image">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Certificate Name</label>
                        <input type="text" class="text-black w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" name="certi_name" placeholder="Masukkan Nama Certificate" id="certi_name">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Publisher</label>
                        <input type="text" class="text-black w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" name="publisher" placeholder="Masukkan Publisher" id="publisher">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-bold text-gray-700 mb-2">SELECT MONTH</label>
                        <input type="month" class="text-black w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" name="month" id="month">
                    </div>
                    <div class="flex justify-end space-x-2 p-4 border-t border-gray-200">
                        <button type="button" onclick="closeModal()" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 focus:outline-none">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="editModal" class="fixed inset-0 hidden">
        <div class="absolute inset-0 bg-black opacity-50" onclick="closeModal()"></div>
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-2xl relative">
                <!-- Modal Header -->
                <div class="flex justify-between items-center p-4 border-b border-gray-200">
                    <h5 class="text-xl font-bold text-gray-800">Edit Certificate</h5>
                    <button type="button" class="text-gray-400 hover:text-gray-600" onclick="closeModal()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <!-- Form content remains the same -->
                <form id="editForm" method="POST" class="p-4" enctype="multipart/form-data" action="{{ url('certificate/update') }}">
                    @csrf
                    <input type="hidden" name="certi_id" id="editCertiId">
                    <div class="mb-4">
                        <label class="block text-sm font-bold text-gray-700 mb-2">IMAGE</label>
                        <input type="file" class="text-black w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" name="image" id="editImage">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Certificate Name</label>
                        <input type="text" class="text-black w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" name="certi_name" id="editCertiName">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-bold text-gray-700 mb-2">Publisher</label>
                        <input type="text" class="text-black w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" name="publisher" id="editPublisher">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-bold text-gray-700 mb-2">SELECT MONTH</label>
                        <input type="month" class="text-black w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500" name="month" id="editMonth">
                    </div>
                    <div class="flex justify-end space-x-2 p-4 border-t border-gray-200">
                        <button type="button" onclick="closeModal()" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 focus:outline-none">Cancel</button>
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

        // Modal handling
        const addModal = document.getElementById('addmodal');
        const editModal = document.getElementById('editModal');

        function openModal() {
            addModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        }

        function openEditModal(certiId, certiName, publisher, month) {
            document.getElementById('editCertiId').value = certiId;
            document.getElementById('editCertiName').value = certiName;
            document.getElementById('editPublisher').value = publisher;
            document.getElementById('editMonth').value = month;
            editModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        }

        function closeModal() {
            if (!addModal.classList.contains('hidden')) {
                addModal.classList.add('hidden');
            }
            if (!editModal.classList.contains('hidden')) {
                editModal.classList.add('hidden');
            }
            document.body.style.overflow = 'auto'; // Enable scrolling
            document.getElementById('certificateForm').reset();
            document.getElementById('editForm').reset();
        }

        // Close with escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });

        // Prevent closing when clicking modal content
        addModal.querySelector('.bg-white').addEventListener('click', function(e) {
            e.stopPropagation();
        });

        editModal.querySelector('.bg-white').addEventListener('click', function(e) {
            e.stopPropagation();
        });

        // Close when clicking outside
        addModal.addEventListener('click', function(e) {
            if (e.target === addModal) {
                closeModal();
            }
        });

        editModal.addEventListener('click', function(e) {
            if (e.target === editModal) {
                closeModal();
            }
        });

        // Form submission
        document.getElementById('certificateForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            this.action = "{{ url('certificate/insert') }}";
            // Submit form
            this.submit();
        });

        document.getElementById('editForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            const certiId = document.getElementById('editCertiId').value;
            this.action = "{{ url('certificate/update') }}/" + certiId;
            // Submit form
            this.submit();
        });

        function confirmDelete(event) {
            if (!confirm("Are you sure you want to delete this certificate?")) {
                event.preventDefault();
                return false;
            }
            return true;
        }
    </script>
</body>

</html>