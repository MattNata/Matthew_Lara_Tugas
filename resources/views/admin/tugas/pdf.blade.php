<h1 align="center">Data Tugas</h1>
<h1 align="center">Tanggal : {{ $tanggal }}</h1>
<h1 align="center">Jam : {{ $jam }}</h1>
<hr>
<table width="100%" border="1px" style="border-collapse: collapse;">
    <thead>
      
</tr>
<tr>
        <th width='20' align='center' >No</th>
        <th width='20' align='center' >Name</th>
        <th width='20' align='center' >Email</th>
        <th width='20' align='center' >Tugas</th>
        <th width='20' align='center' >Tanggal Mulai</th>
        <th width='20' align='center' >Tanggal Selesai</th>

    </tr>
    </thead>
    <tbody>
        @foreach ($tugas as $item)
        <tr>
            <td align='center'>{{ $loop->iteration }}</td>
            <td>{{ $item->user->Nama }}</td>
            <td>{{ $item->user->Email }}</td>
            <td>{{ $item->tugas }}</td>
            <td>{{ $item->tanggal_mulai }}</td>
            <td>{{ $item->tanggal_selesai }}</td>
        </tr>
        @endforeach
    </tbody>
</table>