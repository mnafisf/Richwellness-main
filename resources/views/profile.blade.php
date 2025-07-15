<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Profil Eksklusif - Rich Wellness</title>
    <meta content="Halaman profil untuk mengelola akun dan reservasi Anda di Rich Wellness" name="description">
    <meta content="profil, rich wellness, hotel, reservasi, booking, mewah" name="keywords">
    <link href="/assets/homepage/img/favicon.png" rel="icon">
    <link href="/assets/homepage/img/apple-touch-icon.png" rel="apple-touch-icon">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Icons (Lucide or Heroicons) -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    
    <style>
        /* Variabel warna gold/cream untuk tema mewah */
        :root {
            --gold-primary: #D4AF37;
            --gold-secondary: #FFD700;
            --gold-light: #FFF8DC;
            --gold-dark: #B8860B;
            --cream: #F5F5DC;
            --cream-light: #FFFAF0;
            --dark-text: #333333;
            --shadow-gold: rgba(212, 175, 55, 0.15);
        }
        
        /* Custom styles untuk komponen yang tidak ada di Tailwind */
        body {
            background-color: var(--cream-light);
            font-family: 'Poppins', sans-serif;
        }
        
        .profile-avatar {
            background: linear-gradient(135deg, var(--gold-primary), var(--gold-dark));
        }
        
        .stat-card {
            transition: all 0.3s ease;
            border-color: var(--gold-light) !important;
            box-shadow: 0 4px 12px var(--shadow-gold);
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px var(--shadow-gold);
            border-color: var(--gold-primary) !important;
        }
        
        .table-row {
            transition: all 0.2s ease;
        }
        
        .table-row:hover {
            transform: translateY(-2px);
            background-color: var(--gold-light) !important;
        }
        
        /* Animation untuk tab content */
        .tab-pane {
            animation: fadeIn 0.5s ease-out forwards;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        /* Header & Menu styling */
        header {
            background: white !important;
            border-bottom: 1px solid var(--gold-light) !important;
            box-shadow: 0 2px 8px var(--shadow-gold) !important;
        }
        
        .tab-link.active {
            background-color: var(--gold-light) !important;
            color: var(--gold-dark) !important;
        }
        
        .tab-link:hover:not(.active) {
            background-color: #FFF9E6 !important;
            color: var(--gold-dark) !important;
        }
        
        /* Card styling */
        .bg-white {
            background-color: white;
            border-color: var(--gold-light) !important;
        }
        
        .rounded-xl {
            border-radius: 1rem;
            overflow: hidden;
        }
        
        .shadow-sm {
            box-shadow: 0 2px 10px var(--shadow-gold) !important;
        }
        
        /* Buttons styling */
        .bg-blue-600, .text-blue-600, .border-blue-200, .bg-blue-100, .text-blue-700 {
            background-color: var(--gold-primary) !important;
            border-color: var(--gold-secondary) !important;
            color: white !important;
        }
        
        .hover\:bg-blue-700:hover, .hover\:text-blue-700:hover, .hover\:bg-blue-100:hover {
            background-color: var(--gold-dark) !important;
            color: white !important;
        }
        
        .bg-blue-50 {
            background-color: var(--gold-light) !important;
            color: var(--gold-dark) !important;
        }
        
        /* Footer styling */
        footer {
            background: linear-gradient(135deg, var(--gold-dark), var(--gold-primary)) !important;
        }
    </style>
    
    <!-- Google Fonts - Poppins & Playfair Display -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen flex flex-col font-poppins">
    <!-- ======= Header ======= -->
    <header class="fixed top-0 left-0 right-0 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <img src="/assets/homepage/img/logo.png" alt="Rich Wellness Logo" class="h-10 mr-3">
                    <h1 class="text-xl font-bold text-gray-900 font-playfair">
                        <a href="/" class="hover:text-blue-600 transition-colors">Rich Wellness</a>
                    </h1>
                </div>
                
                <nav class="flex items-center space-x-6">
                    
                    <div class="relative group">
                        <button class="flex items-center space-x-2 text-gray-700 hover:text-blue-600 transition-colors">
                            @if(Auth::user()->avatar)
                                <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" class="w-8 h-8 rounded-full">
                            @else
                                <div class="w-8 h-8 profile-avatar rounded-full flex items-center justify-center text-white font-medium text-sm">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </div>
                            @endif
                            <span>{{ Auth::user()->name }}</span>
                        </button>
                        
                        <div class="absolute right-0 mt-2 w-72 bg-white rounded-lg shadow-lg border border-gray-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <div class="p-4 bg-gray-50 rounded-t-lg">
                                <div class="flex items-center space-x-3">
                                    @if(Auth::user()->avatar)
                                        <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" class="w-12 h-12 rounded-full">
                                    @else
                                        <div class="w-12 h-12 profile-avatar rounded-full flex items-center justify-center text-white font-medium text-lg">
                                            {{ substr(Auth::user()->name, 0, 1) }}
                                        </div>
                                    @endif
                                    <div>
                                        <div class="font-semibold text-gray-900">{{ Auth::user()->name }}</div>
                                        <div class="text-sm text-gray-600">{{ Auth::user()->email }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                @if(Auth::user()->is_admin == 1)
                                <a href="{{ route('admin.home') }}" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-50 transition-colors">
                                    <i data-lucide="bar-chart-3" class="w-4 h-4 mr-3"></i> Dashboard Admin
                                </a>
                                @endif
                                <hr class="my-2">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="flex items-center w-full px-4 py-2 text-red-600 hover:bg-gray-50 transition-colors">
                                        <i data-lucide="log-out" class="w-4 h-4 mr-3"></i> Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <main class="flex-1 pt-20 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <!-- Sidebar / Menu -->                
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden sticky top-24">
                        <div class="p-6 text-center">
                            @if(Auth::user()->avatar)
                                <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" class="w-20 h-20 rounded-full mx-auto mb-4">
                            @else
                                <div class="profile-avatar w-20 h-20 rounded-full flex items-center justify-center text-white font-bold text-2xl mx-auto mb-4 shadow-lg">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </div>
                            @endif
                            <div class="font-semibold text-gray-900 mb-1">{{ Auth::user()->name }}</div>
                            <div class="text-gray-600 text-sm mb-4">{{ Auth::user()->email }}</div>
                            <a href="/" class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium border rounded-lg transition-colors mb-4">
                                <i data-lucide="home" class="w-4 h-4 mr-2"></i> Kembali ke Beranda
                            </a>
                        </div>
                        
                        <div class="border-t border-gray-200">
                            <nav class="p-4 space-y-1">
                                <a href="javascript:void(0)" class="w-full flex items-center px-3 py-2 text-sm font-medium rounded-lg transition-colors tab-link active" data-tab="dashboard">
                                    <i data-lucide="bar-chart-3" class="w-4 h-4 mr-3"></i> Dashboard
                                </a>
                                <a href="javascript:void(0)" class="w-full flex items-center px-3 py-2 text-sm font-medium rounded-lg transition-colors text-gray-700 hover:bg-gray-100 tab-link" data-tab="reservasi">
                                    <i data-lucide="calendar" class="w-4 h-4 mr-3"></i> Riwayat Reservasi
                                </a>
                                <a href="javascript:void(0)" class="w-full flex items-center px-3 py-2 text-sm font-medium rounded-lg transition-colors text-gray-700 hover:bg-gray-100 tab-link" data-tab="profile">
                                    <i data-lucide="user" class="w-4 h-4 mr-3"></i> Edit Profil
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
                
                <!-- Main Content -->                
                <div class="lg:col-span-3">
                    <!-- Dashboard Tab -->                        
                    <div class="tab-pane active" id="dashboard">
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                            <div class="px-6 py-4 border-b border-gray-200">
                                <h2 class="text-lg font-semibold text-gray-900 font-playfair">Dashboard</h2>
                            </div>
                            <div class="p-6">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                                    <!-- Reservasi Stats -->                                        
                                    <div class="stat-card bg-white border border-gray-200 rounded-lg p-6 text-center hover:shadow-md transition-all">
                                        <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                            <i data-lucide="calendar-check" class="w-8 h-8"></i>
                                        </div>
                                        <h3 class="text-2xl font-bold mb-2">{{ App\Models\DataReservasi::where('email', Auth::user()->email)->count() }}</h3>
                                        <p class="text-gray-600">Total Reservasi</p>
                                    </div>
                                    
                                    <!-- Upcoming Reservations -->                                        
                                    <div class="stat-card bg-white border border-gray-200 rounded-lg p-6 text-center hover:shadow-md transition-all">
                                        <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                            <i data-lucide="calendar-plus" class="w-8 h-8"></i>
                                        </div>
                                        <h3 class="text-2xl font-bold mb-2">{{ App\Models\DataReservasi::where('email', Auth::user()->email)->where('tgl_check_in', '>=', date('Y-m-d'))->count() }}</h3>
                                        <p class="text-gray-600">Reservasi Mendatang</p>
                                    </div>
                                    
                                    <!-- Past Reservations -->                                        
                                    <div class="stat-card bg-white border border-gray-200 rounded-lg p-6 text-center hover:shadow-md transition-all">
                                        <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                            <i data-lucide="calendar-x" class="w-8 h-8"></i>
                                        </div>
                                        <h3 class="text-2xl font-bold mb-2">{{ App\Models\DataReservasi::where('email', Auth::user()->email)->where('tgl_check_out', '<', date('Y-m-d'))->count() }}</h3>
                                        <p class="text-gray-600">Reservasi Selesai</p>
                                    </div>
                                </div>
                                
                                <div class="mt-4">
                                    <h3 class="text-lg font-semibold font-playfair mb-4">Reservasi Terbaru</h3>
                                    <div class="overflow-x-auto">
                                        <table class="w-full">
                                            <thead>
                                                <tr class="bg-gold-light">
                                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kode Booking</th>
                                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tipe Kamar</th>
                                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Check-in</th>
                                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Check-out</th>
                                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @php
                                                    $latestReservations = App\Models\DataReservasi::where('email', Auth::user()->email)
                                                        ->orderBy('created_at', 'desc')
                                                        ->take(3)
                                                        ->get();
                                                @endphp
                                                
                                                @forelse($latestReservations as $reservation)
                                                    <tr class="table-row hover:bg-gray-50 hover:shadow-sm">
                                                        <td class="px-4 py-4 whitespace-nowrap">
                                                            <span class="font-medium text-gray-900">{{ $reservation->kode_booking }}</span>
                                                        </td>
                                                        <td class="px-4 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <i data-lucide="building" class="w-4 h-4 text-blue-600 mr-2"></i>
                                                                {{ $reservation->tipe_kamar }}
                                                            </div>
                                                        </td>
                                                        <td class="px-4 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <i data-lucide="calendar-plus" class="w-4 h-4 text-green-600 mr-2"></i>
                                                                {{ date('d M Y', strtotime($reservation->tgl_check_in)) }}
                                                            </div>
                                                        </td>
                                                        <td class="px-4 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <i data-lucide="calendar-minus" class="w-4 h-4 text-red-600 mr-2"></i>
                                                                {{ date('d M Y', strtotime($reservation->tgl_check_out)) }}
                                                            </div>
                                                        </td>
                                                        <td class="px-4 py-4 whitespace-nowrap">
                                                            @if($reservation->status_pembayaran == 'Sudah Bayar')
                                                                <span class="px-3 py-1 text-xs font-medium text-white bg-green-500 rounded-full">Lunas</span>
                                                            @elseif($reservation->status_pembayaran == 'pending')
                                                                <span class="px-3 py-1 text-xs font-medium text-gray-800 bg-gold-secondary rounded-full">Menunggu Pembayaran</span>
                                                            @else
                                                                <span class="px-3 py-1 text-xs font-medium text-white bg-gray-500 rounded-full">Belum Dibayar</span>
                                                            @endif
                                                            
                                                            @if($reservation->status_checkin == 'checked_in')
                                                                <span class="ml-2 px-3 py-1 text-xs font-medium text-white bg-gold-dark rounded-full">Check In</span>
                                                            @elseif($reservation->status_checkin == 'checked_out')
                                                                <span class="ml-2 px-3 py-1 text-xs font-medium text-white bg-purple-500 rounded-full">Check Out</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="5" class="text-center py-12">
                                                            <div class="flex flex-col items-center">
                                                                <i data-lucide="calendar-x" class="w-12 h-12 text-gray-300 mb-3"></i>
                                                                <p class="text-gray-500">Belum ada reservasi</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-right mt-4">
                                        <button class="text-gold-dark hover:text-gold font-medium text-sm tab-link" data-tab="reservasi">Lihat Semua</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Reservasi Tab -->                        
                    <div class="tab-pane hidden" id="reservasi">
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                            <div class="px-6 py-4 border-b border-gray-200">
                                <h2 class="text-lg font-semibold font-playfair">Riwayat Reservasi</h2>
                            </div>
                            <div class="p-6">
                                <div class="overflow-x-auto">
                                    <table class="w-full">
                                        <thead>
                                            <tr class="bg-gold-light">
                                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kode Booking</th>
                                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tipe Kamar</th>
                                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah</th>
                                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Check-in</th>
                                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Check-out</th>
                                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                                <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @php
                                                $allReservations = App\Models\DataReservasi::where('email', Auth::user()->email)
                                                    ->orderBy('created_at', 'desc')
                                                    ->get();
                                            @endphp
                                            
                                            @forelse($allReservations as $reservation)
                                                <tr class="table-row hover:bg-gray-50 hover:shadow-sm">
                                                    <td class="px-4 py-4 whitespace-nowrap">
                                                        <span class="font-medium text-gray-900">{{ $reservation->kode_booking }}</span>
                                                    </td>
                                                    <td class="px-4 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <i data-lucide="building" class="w-4 h-4 text-blue-600 mr-2"></i>
                                                            {{ $reservation->tipe_kamar }}
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 whitespace-nowrap text-center">
                                                        <span class="px-2 py-1 text-xs font-medium bg-gray-100 text-gray-800 rounded-full">{{ $reservation->jumlah_kamar }}</span>
                                                    </td>
                                                    <td class="px-4 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <i data-lucide="calendar-plus" class="w-4 h-4 text-green-600 mr-2"></i>
                                                            {{ date('d M Y', strtotime($reservation->tgl_check_in)) }}
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <i data-lucide="calendar-minus" class="w-4 h-4 text-red-600 mr-2"></i>
                                                            {{ date('d M Y', strtotime($reservation->tgl_check_out)) }}
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 whitespace-nowrap">
                                                        <span class="font-medium text-gray-900">Rp {{ number_format($reservation->total_bayar, 0, ',', '.') }}</span>
                                                    </td>
                                                    <td class="px-4 py-4 whitespace-nowrap">
                                                        @if($reservation->status_pembayaran == 'Sudah Bayar')
                                                            <span class="px-3 py-1 text-xs font-medium text-white bg-green-500 rounded-full">Lunas</span>
                                                        @elseif($reservation->status_pembayaran == 'pending')
                                                            <span class="px-3 py-1 text-xs font-medium text-gray-800 bg-yellow-400 rounded-full">Menunggu Pembayaran</span>
                                                        @else
                                                            <span class="px-3 py-1 text-xs font-medium text-white bg-gray-500 rounded-full">Belum Dibayar</span>
                                                        @endif
                                                        
                                                        @if($reservation->status_checkin == 'checked_in')
                                                            <span class="ml-2 px-3 py-1 text-xs font-medium text-white bg-blue-500 rounded-full">Check In</span>
                                                        @elseif($reservation->status_checkin == 'checked_out')
                                                            <span class="ml-2 px-3 py-1 text-xs font-medium text-white bg-purple-500 rounded-full">Check Out</span>
                                                        @endif
                                                    </td>
                                                    <td class="px-4 py-4 whitespace-nowrap">
                                                        <button type="button" 
                                                            class="w-8 h-8 flex items-center justify-center text-blue-600 hover:bg-blue-50 rounded-full transition-colors modal-trigger"
                                                            data-modal="detailModal{{ $reservation->id }}"
                                                            title="Lihat Detail">
                                                            <i data-lucide="eye" class="w-4 h-4"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                
                                                <!-- Detail Modal -->
                                                <div class="modal fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50 hidden" id="detailModal{{ $reservation->id }}">
                                                    <div class="bg-white rounded-xl shadow-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
                                                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white p-6 rounded-t-xl">
                                                            <div class="flex items-center justify-between">
                                                                <h3 class="text-lg font-semibold flex items-center">
                                                                    <i data-lucide="credit-card" class="w-5 h-5 mr-2"></i>
                                                                    Detail Reservasi
                                                                </h3>
                                                                <button class="text-white hover:text-gray-200 transition-colors modal-close">
                                                                    <i data-lucide="x" class="w-6 h-6"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="p-6">
                                                            <!-- Kode Booking -->
                                                            <div class="text-center mb-6">
                                                                <div class="inline-block bg-blue-100 text-blue-800 px-4 py-2 rounded-lg font-semibold text-lg mb-2">{{ $reservation->kode_booking }}</div>
                                                                <p class="text-gray-600">Kode Booking</p>
                                                            </div>
                                                            
                                                            <!-- Info Dasar -->
                                                            <div class="grid grid-cols-3 gap-4 mb-6">
                                                                <div class="text-center">
                                                                    <i data-lucide="calendar-plus" class="w-8 h-8 text-green-600 mx-auto mb-2"></i>
                                                                    <p class="text-sm text-gray-600 mb-1">Check-in</p>
                                                                    <p class="font-semibold">{{ date('d M Y', strtotime($reservation->tgl_check_in)) }}</p>
                                                                </div>
                                                                <div class="text-center">
                                                                    <i data-lucide="building" class="w-8 h-8 text-blue-600 mx-auto mb-2"></i>
                                                                    <p class="text-sm text-gray-600 mb-1">Kamar</p>
                                                                    <p class="font-semibold">{{ $reservation->jumlah_kamar }} Kamar</p>
                                                                </div>
                                                                <div class="text-center">
                                                                    <i data-lucide="calendar-minus" class="w-8 h-8 text-red-600 mx-auto mb-2"></i>
                                                                    <p class="text-sm text-gray-600 mb-1">Check-out</p>
                                                                    <p class="font-semibold">{{ date('d M Y', strtotime($reservation->tgl_check_out)) }}</p>
                                                                </div>
                                                            </div>
                                                            
                                                            <hr class="my-6">
                                                            
                                                            <!-- Informasi Tamu -->
                                                            <div class="mb-6">
                                                                <h4 class="flex items-center text-lg font-semibold text-gray-900 mb-4">
                                                                    <i data-lucide="user" class="w-5 h-5 mr-2"></i>Informasi Tamu
                                                                </h4>
                                                                <div class="grid grid-cols-2 gap-4">
                                                                    <div>
                                                                        <p class="text-sm text-gray-600">Nama Tamu</p>
                                                                        <p class="font-medium">{{ $reservation->nama_tamu }}</p>
                                                                    </div>
                                                                    <div>
                                                                        <p class="text-sm text-gray-600">NIK</p>
                                                                        <p class="font-medium">{{ $reservation->nik }}</p>
                                                                    </div>
                                                                    <div>
                                                                        <p class="text-sm text-gray-600">Email</p>
                                                                        <p class="font-medium">{{ $reservation->email }}</p>
                                                                    </div>
                                                                    <div>
                                                                        <p class="text-sm text-gray-600">No. HP</p>
                                                                        <p class="font-medium">{{ $reservation->no_hp }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <hr class="my-6">
                                                            
                                                            <!-- Detail Kamar -->
                                                            <div class="mb-6">
                                                                <h4 class="flex items-center text-lg font-semibold text-gray-900 mb-4">
                                                                    <i data-lucide="building" class="w-5 h-5 mr-2"></i>Detail Kamar
                                                                </h4>
                                                                <div class="bg-gray-50 p-4 rounded-lg">
                                                                    <p class="font-semibold">{{ $reservation->tipe_kamar }}</p>
                                                                    <p class="text-sm text-gray-600">{{ $reservation->jumlah_kamar }} Kamar</p>
                                                                </div>
                                                            </div>
                                                            
                                                            <!-- Rincian Pembayaran -->
                                                            <div>
                                                                <h4 class="flex items-center text-lg font-semibold text-gray-900 mb-4">
                                                                    <i data-lucide="credit-card" class="w-5 h-5 mr-2"></i>Rincian Pembayaran
                                                                </h4>
                                                                <div class="bg-gray-50 p-4 rounded-lg space-y-2">
                                                                    <div class="flex justify-between">
                                                                        <span>Harga Kamar</span>
                                                                        <span>Rp {{ number_format($reservation->harga, 0, ',', '.') }}</span>
                                                                    </div>
                                                                    @if($reservation->diskon > 0)
                                                                    <div class="flex justify-between text-green-600">
                                                                        <span>Diskon</span>
                                                                        <span>- Rp {{ number_format($reservation->diskon, 0, ',', '.') }}</span>
                                                                    </div>
                                                                    @endif
                                                                    @if($reservation->voucher_code)
                                                                    <div class="flex justify-between">
                                                                        <span>Kode Voucher</span>
                                                                        <span class="px-2 py-1 bg-yellow-200 text-yellow-800 rounded text-xs font-medium">{{ $reservation->voucher_code }}</span>
                                                                    </div>
                                                                    @endif
                                                                    <hr class="my-2">
                                                                    <div class="flex justify-between font-semibold text-lg">
                                                                        <span>Total</span>
                                                                        <span>Rp {{ number_format($reservation->total_bayar, 0, ',', '.') }}</span>
                                                                    </div>
                                                                    <div class="flex justify-between items-center">
                                                                        <span>Status</span>
                                                                        @if($reservation->status_pembayaran == 'Sudah Bayar')
                                                                            <span class="px-3 py-1 text-xs font-medium text-white bg-green-500 rounded-full">Lunas</span>
                                                                        @elseif($reservation->status_pembayaran == 'pending')
                                                                            <span class="px-3 py-1 text-xs font-medium text-gray-800 bg-yellow-400 rounded-full">Menunggu Pembayaran</span>
                                                                        @else
                                                                            <span class="px-3 py-1 text-xs font-medium text-white bg-gray-500 rounded-full">Belum Dibayar</span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="border-t border-gray-200 px-6 py-4 bg-gray-50 rounded-b-xl">
                                                            <button class="w-full flex items-center justify-center px-4 py-2 bg-gray-600 text-white font-medium rounded-lg hover:bg-gray-700 transition-colors modal-close">
                                                                <i data-lucide="x" class="w-4 h-4 mr-2"></i>
                                                                Tutup
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <tr>
                                                    <td colspan="8" class="text-center py-12">
                                                        <div class="flex flex-col items-center">
                                                            <i data-lucide="calendar-x" class="w-12 h-12 text-gray-300 mb-3"></i>
                                                            <p class="text-gray-500">Belum ada reservasi</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Profile Tab -->                        
                    <div class="tab-pane hidden" id="profile">
                        <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                            <div class="px-6 py-4 border-b border-gray-200">
                                <h2 class="text-lg font-semibold font-playfair">Edit Profil</h2>
                            </div>
                            <div class="p-6">
                                @if(session('success'))
                                <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg">
                                    <div class="flex items-center">
                                        <i data-lucide="check-circle" class="w-5 h-5 text-green-600 mr-2"></i>
                                        <span class="text-green-800">{{ session('success') }}</span>
                                    </div>
                                </div>
                                @endif
                                
                                @if($errors->any())
                                <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-lg">
                                    <div class="flex">
                                        <i data-lucide="alert-triangle" class="w-5 h-5 text-red-600 mr-2 mt-0.5"></i>
                                        <div>
                                            <ul class="text-red-800 space-y-1">
                                                @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                
                                <form action="{{ route('profile.update') }}" method="POST" class="space-y-6">
                                    @csrf
                                    @method('POST')
                                    
                                    <div>
                                        <label for="name" class="flex items-center text-sm font-medium text-gray-700 mb-2">
                                            <i data-lucide="user" class="w-4 h-4 text-blue-600 mr-2"></i>
                                            Nama
                                        </label>
                                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" name="name" id="name" value="{{ Auth::user()->name }}" required>
                                    </div>
                                    
                                    <div>
                                        <label for="email" class="flex items-center text-sm font-medium text-gray-700 mb-2">
                                            <i data-lucide="mail" class="w-4 h-4 text-blue-600 mr-2"></i>
                                            Email
                                        </label>
                                        <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" name="email" id="email" value="{{ Auth::user()->email }}" required>
                                    </div>
                                    
                                    <div>
                                        <label for="password" class="flex items-center text-sm font-medium text-gray-700 mb-2">
                                            <i data-lucide="lock" class="w-4 h-4 text-blue-600 mr-2"></i>
                                            Password Baru <span class="text-gray-500 ml-1">(Opsional)</span>
                                        </label>
                                        <div class="relative">
                                            <input type="password" class="w-full px-4 py-3 pr-12 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" name="password" id="password" placeholder="Kosongkan jika tidak ingin mengganti">
                                            <button type="button" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700" id="togglePassword">
                                                <i data-lucide="eye" class="w-5 h-5"></i>
                                            </button>
                                        </div>
                                        <p class="text-sm text-gray-500 mt-1">Minimal 8 karakter</p>
                                    </div>
                                    
                                    <div class="flex flex-col sm:flex-row gap-3">
                                        <button type="submit" class="flex-1 flex items-center justify-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors">
                                            <i data-lucide="check-circle" class="w-4 h-4 mr-2"></i>
                                            Simpan Perubahan
                                        </button>
                                        <button type="reset" class="flex-1 flex items-center justify-center px-6 py-3 bg-gray-100 text-gray-700 font-medium rounded-lg hover:bg-gray-200 transition-colors">
                                            <i data-lucide="rotate-ccw" class="w-4 h-4 mr-2"></i>
                                            Reset
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="py-4 text-white text-center mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <span>&copy; 2025 Rich Wellness. All Rights Reserved.</span>
        </div>
    </footer>

    <script>
        // Configure tailwind with our custom colors
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gold: {
                            light: '#FFF8DC',
                            DEFAULT: '#D4AF37',
                            dark: '#B8860B',
                        },
                        cream: {
                            light: '#FFFAF0',
                            DEFAULT: '#F5F5DC',
                        },
                    },
                    fontFamily: {
                        'playfair': ['"Playfair Display"', 'serif'],
                        'poppins': ['Poppins', 'sans-serif'],
                    },
                },
            },
        }
        
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Tab functionality
        document.addEventListener('DOMContentLoaded', function() {
            const tabLinks = document.querySelectorAll('.tab-link');
            const tabPanes = document.querySelectorAll('.tab-pane');
            
            tabLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetTab = this.getAttribute('data-tab');
                    
                    // Remove active class from all tabs and panes
                    tabLinks.forEach(l => {
                        l.classList.remove('active');
                    });
                    tabPanes.forEach(p => {
                        p.classList.add('hidden');
                        p.classList.remove('active');
                    });
                    
                    // Add active class to clicked tab
                    this.classList.add('active');
                    
                    // Show target pane
                    const targetPane = document.getElementById(targetTab);
                    if (targetPane) {
                        targetPane.classList.remove('hidden');
                        targetPane.classList.add('active');
                    }
                });
            });
            
            // Modal functionality
            const modalTriggers = document.querySelectorAll('.modal-trigger');
            const modalCloses = document.querySelectorAll('.modal-close');
            
            modalTriggers.forEach(trigger => {
                trigger.addEventListener('click', function() {
                    const modalId = this.getAttribute('data-modal');
                    const modal = document.getElementById(modalId);
                    if (modal) {
                        modal.classList.remove('hidden');
                        document.body.style.overflow = 'hidden';
                    }
                });
            });
            
            modalCloses.forEach(close => {
                close.addEventListener('click', function() {
                    const modal = this.closest('.modal');
                    if (modal) {
                        modal.classList.add('hidden');
                        document.body.style.overflow = 'auto';
                    }
                });
            });
            
            // Close modal when clicking outside
            document.querySelectorAll('.modal').forEach(modal => {
                modal.addEventListener('click', function(e) {
                    if (e.target === this) {
                        this.classList.add('hidden');
                        document.body.style.overflow = 'auto';
                    }
                });
            });
            
            // Password toggle
            const togglePassword = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('password');
            
            if (togglePassword && passwordInput) {
                togglePassword.addEventListener('click', function() {
                    const icon = this.querySelector('i');
                    
                    if (passwordInput.type === 'password') {
                        passwordInput.type = 'text';
                        icon.setAttribute('data-lucide', 'eye-off');
                    } else {
                        passwordInput.type = 'password';
                        icon.setAttribute('data-lucide', 'eye');
                    }
                    
                    // Reinitialize icons
                    lucide.createIcons();
                });
            }
        });
    </script>
</body>
</html>