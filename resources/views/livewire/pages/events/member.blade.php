<div>
    <div class="d-flex mb-3">
        <div class="ms-auto">
            <input type="text" class="form-control" placeholder="Cari Peserta...">
        </div>
    </div>
    <div class="d-block table-responsive">
        <table class="table table-borderless">
            <thead class="alert-secondary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Tanggal Daftar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $item)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td><span class="text-capitalize">{{ $item->username }}</span></td>
                    <td>
                        <div class="text-nowrap">{{ date("d F Y", strtotime($item->created_at))}}</div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
