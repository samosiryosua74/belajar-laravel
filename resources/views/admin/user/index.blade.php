@extends('admin.dashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <h2 class="h4">Data User</h2>
        <p class="mb-0">Daftar pengguna yang terdaftar dalam sistem.</p>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="{{ route('user.create') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
            Tambah User
        </a>
    </div>
</div>

<div class="card card-body border-0 shadow table-wrapper table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="border-gray-200">#</th>
                <th class="border-gray-200">Nama</th>
                <th class="border-gray-200">Email</th>
                <th class="border-gray-200">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td><span class="fw-bold">{{ $item->name }}</span></td>
                <td>{{ $item->email }}</td>
                <td>
                    <a href="{{ route('user.edit', $item->id) }}" class="btn btn-sm btn-info">Edit</a>
                    <form action="{{ route('user.destroy', $item->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Data User belum tersedia.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection