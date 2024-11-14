@extends('layout')

@section('content')
<main>
    <table id="user-datatable">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
            </tr>
        </thead>
    </table>
</main>
@endsection

@section('js')
<script>
    $(document).ready(() => {
        const datatable = $('#user-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route('users.index') }}',
                dataSrc: 'data',
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' }
            ],
        });
        window.Echo.channel('users')
            .listen('UserCreated', () => {
                toastr.success('User created');
                datatable.ajax.reload();
            });
    });
</script>
@endsection