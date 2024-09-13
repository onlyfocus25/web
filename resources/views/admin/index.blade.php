<x-admin_dashboard>
@section('title', 'Admin Dashboard')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">Manage User Applications</h1>

    <!-- Success & Error Messages -->
    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="bg-red-500 text-white p-4 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <!-- Applications Table -->
    <table class="table-auto w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr class="bg-gray-200 text-gray-700">
                <th class="px-4 py-2">Applicant</th>
                <th class="px-4 py-2">Level Applying</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($applications as $application)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $application->user->full_name }}</td>
                    <td class="px-4 py-2">{{ $application->level_applying }}</td>
                    <td class="px-4 py-2">
                        <span class="px-2 py-1 rounded {{ $application->status == 'approved' ? 'bg-green-500 text-white' : ($application->status == 'rejected' ? 'bg-red-500 text-white' : 'bg-yellow-500 text-white') }}">
                            {{ ucfirst($application->status) }}
                        </span>
                    </td>
                    <td class="px-4 py-2">
                        <form action="{{ route('admin.approveApplication', $application->id) }}" method="post" class="inline">
                            @csrf
                            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-1 rounded">Approve</button>
                        </form>
                        <form action="{{ route('admin.rejectApplication', $application->id) }}" method="post" class="inline">
                            @csrf
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-1 rounded">Reject</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

</x-admin_dashboard>