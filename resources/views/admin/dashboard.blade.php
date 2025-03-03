<x-app-layout>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 rounded-lg bg-white er-gray-700 mt-14">
            <div class="bg-dark dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="bg-gray-200 p-4 rounded">
                        {{ __("Halo, selamat datang ! :name", ['name' => Auth::user()->name]) }}
                    </div>
                </div>
            </div>

            {{-- <div class="p-0 text-gray-900 dark:text-gray-100">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

                    <a href="#" class="bg-green-500 p-4 rounded-lg flex justify-between items-center">
                        <div>
                            <p class="text-sm text-green-200">PEMBAYARAN LUNAS</p>
                            <p class="text-4xl font-bold text-white">2</p>
                        </div>
                        <i class="fa fa-check text-2xl text-green-200" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="bg-yellow-500 p-4 rounded-lg flex justify-between items-center">
                        <div>
                            <p class="text-sm text-yellow-200">MENUNGGU VALIDASI</p>
                            <p class="text-4xl font-bold text-white">2</p>
                        </div>
                        <i class="fas fa-ticket-alt text-2xl text-yellow-200"></i>
                    </a>
                    <a href="#" class="bg-red-500 p-4 rounded-lg flex justify-between items-center">
                        <div>
                            <p class="text-sm text-red-200">TOTAL </p>
                            <p class="text-4xl font-bold text-white">0</p>
                        </div>
                        <i class="fas fa-ticket-alt text-2xl text-red-200"></i>
                    </a>
                    <a href="#" class="bg-blue-500 p-4 rounded-lg flex justify-between items-center">
                        <div>
                            <p class="text-sm text-blue-200">TOTAL SEMUA SISWA AKTIF</p>
                            <p class="text-4xl font-bold text-white">32</p>
                        </div>
                        <i class="fas fa-user text-2xl text-blue-200"></i>
                    </a>
                    <a href="#" class="bg-purple-500 p-4 rounded-lg flex justify-between items-center">
                        <div>
                            <p class="text-sm text-purple-200">SISWA LUNAS</p>
                            <p class="text-4xl font-bold text-white">2</p>
                        </div>
                        <i class="fas fa-user text-2xl text-purple-200"></i>
                    </a>
                    <a href="#" class="bg-indigo-500 p-4 rounded-lg flex justify-between items-center">
                        <div>
                            <p class="text-sm text-indigo-200">SISWA MENUNGGAK</p>
                            <p class="text-4xl font-bold text-white">0</p>
                        </div>
                        <i class="fas fa-user-times text-2xl text-indigo-200"></i>
                    </a>

                </div>
            </div> --}}
            <div class="p-0 text-gray-900 dark:text-gray-100">
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

    <!-- PEMBAYARAN LUNAS -->
    @if(Auth::user()->role === 'admin')
      <a href="{{ route('dashboard') }}" class="bg-green-500 p-4 rounded-lg flex justify-between items-center hover:cursor-pointer">
    @else
      <div class="bg-green-500 p-4 rounded-lg flex justify-between items-center hover:cursor-not-allowed" title="Anda Tidak Memiliki Akses">
    @endif
        <div>
          <p class="text-sm text-green-200">PEMBAYARAN LUNAS</p>
          <p class="text-4xl font-bold text-white">2</p>
        </div>
        <i class="fa fa-check text-2xl text-green-200"></i>
    @if(Auth::user()->role === 'admin')
      </a>
    @else
      </div>
    @endif

    <!-- MENUNGGU VALIDASI -->
    @if(Auth::user()->role === 'admin')
      <a href="{{ route('validasi') }}" class="bg-yellow-500 p-4 rounded-lg flex justify-between items-center hover:cursor-pointer">
    @else
      <div class="bg-yellow-500 p-4 rounded-lg flex justify-between items-center hover:cursor-not-allowed" title="Anda Tidak Memiliki Akses">
    @endif
        <div>
          <p class="text-sm text-yellow-200">MENUNGGU VALIDASI</p>
          <p class="text-4xl font-bold text-white">2</p>
        </div>
        <i class="fas fa-ticket-alt text-2xl text-yellow-200"></i>
    @if(Auth::user()->role === 'admin')
      </a>
    @else
      </div>
    @endif

    <!-- TOTAL -->
    @if(Auth::user()->role === 'admin')
      <a href="{{ route('total') }}" class="bg-red-500 p-4 rounded-lg flex justify-between items-center hover:cursor-pointer">
    @else
      <div class="bg-red-500 p-4 rounded-lg flex justify-between items-center hover:cursor-not-allowed" title="Anda Tidak Memiliki Akses">
    @endif
        <div>
          <p class="text-sm text-red-200">TOTAL</p>
          <p class="text-4xl font-bold text-white">0</p>
        </div>
        <i class="fas fa-ticket-alt text-2xl text-red-200"></i>
    @if(Auth::user()->role === 'admin')
      </a>
    @else
      </div>
    @endif

    <!-- TOTAL SEMUA SISWA AKTIF -->
    @if(Auth::user()->role === 'admin')
      <a href="{{ route('siswa') }}" class="bg-blue-500 p-4 rounded-lg flex justify-between items-center hover:cursor-pointer">
    @else
      <div class="bg-blue-500 p-4 rounded-lg flex justify-between items-center hover:cursor-not-allowed" title="Anda Tidak Memiliki Akses">
    @endif
        <div>
          <p class="text-sm text-blue-200">TOTAL SEMUA SISWA AKTIF</p>
          <p class="text-4xl font-bold text-white">32</p>
        </div>
        <i class="fas fa-user text-2xl text-blue-200"></i>
    @if(Auth::user()->role === 'admin')
      </a>
    @else
      </div>
    @endif

    <!-- SISWA LUNAS -->
    @if(Auth::user()->role === 'admin')
      <a href="{{ route('sisawa-lunas') }}" class="bg-purple-500 p-4 rounded-lg flex justify-between items-center hover:cursor-pointer">
    @else
      <div class="bg-purple-500 p-4 rounded-lg flex justify-between items-center hover:cursor-not-allowed" title="Anda Tidak Memiliki Akses">
    @endif
        <div>
          <p class="text-sm text-purple-200">SISWA LUNAS</p>
          <p class="text-4xl font-bold text-white">2</p>
        </div>
        <i class="fas fa-user text-2xl text-purple-200"></i>
    @if(Auth::user()->role === 'admin')
      </a>
    @else
      </div>
    @endif

    <!-- SISWA MENUNGGAK -->
    @if(Auth::user()->role === 'admin')
      <a href="{{ route('siwa-nunggak') }}" class="bg-indigo-500 p-4 rounded-lg flex justify-between items-center hover:cursor-pointer">
    @else
      <div class="bg-indigo-500 p-4 rounded-lg flex justify-between items-center hover:cursor-not-allowed" title="Anda Tidak Memiliki Akses">
    @endif
        <div>
          <p class="text-sm text-indigo-200">SISWA MENUNGGAK</p>
          <p class="text-4xl font-bold text-white">0</p>
        </div>
        <i class="fas fa-user-times text-2xl text-indigo-200"></i>
    @if(Auth::user()->role === 'admin')
      </a>
    @else
      </div>
    @endif

  </div>
</div>

        </div>
    </div>
</x-app-layout>


