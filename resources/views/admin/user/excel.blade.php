<table>
    <thead>
        <tr>
            <th colspan='5' align='center'>Data User</th>
        </tr>
    <tr>
        <th colspan='5' align='center'>
           Tanggal : {{ $tanggal }}
        </th>
    </tr>
    <tr>
        <th colspan='5' align='center'>
           Jam : {{ $jam }}
        </th>
</tr>
<tr>
        <th width='20' align='center' >No</th>
        <th width='20' align='center' >Name</th>
        <th width='20' align='center' >Email</th>
        <th width='20' align='center' >Jabatan</th>
        <th width='20' align='center' >Status</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($user as $item)
        <tr>
            <td align='center'>{{ $loop->iteration }}></td>
            <td>{{ $item->Nama }}</td>
            <td>{{ $item->Email }}</td>
            <td align='center'>{{ $item->Jabatan }}</td>
            @if ($item->is_tugas==false)
            <td align='center'>Belum Ditugaskan</td>
            @else
                <td align='center'>Sudah Ditugaskan</td>
            @endif

        </tr>
        @endforeach
    </tbody>
</table>