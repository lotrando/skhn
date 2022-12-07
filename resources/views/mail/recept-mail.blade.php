@component('mail::message')
<center>Nová rezervace léků v lékárně {{ $data['pharmacy'] }}</center>

<table>
  <tr>
    <th width="20%"><center>Recept</center></th>
    <th width="20%"><center>Telefon</center></th>
    <th width="20%"><center>Stav</center></th>
    <th width="20%"><center>Datum</center></th>
  </tr>
  <tr>
    <td width="20%"><center>{{ $data['recept'] }}</center></td>
    <td width="20%"><center>{{ $data['mobile'] }}</center></td>
    <td width="20%"><center>{{ $data['status'] }}</center></td>
    <td width="20%"><center>{{ date('d. m. Y', strtotime($data['created_at'])) }}</center></td>
  </tr>
</table>

@endcomponent
