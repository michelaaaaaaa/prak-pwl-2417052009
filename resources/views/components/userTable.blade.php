<div class="table-responsive">

    <table class="table table-bordered pixel-table mb-0">

        <thead>
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>NPM</th>
                <th>KELAS</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->npm }}</td>
                    <td>{{ $user->nama_kelas }}</td>
                </tr>
            @endforeach
        </tbody>

    </table>

</div>