
@foreach($randpd as $randp)
{{$randp->id}}
{{$randp->filename}}
<img src="/storage/{{$randp->filename}}" art="picture" height="" width="50%" >
@endforeach