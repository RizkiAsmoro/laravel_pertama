@extends('layout')

@section ('content')
<ul>
<li>Name :<?php echo $name; ?></li>
<li>Gender :<?php echo $gender; ?></li>
</ul>

<?php if ($age > 18): ?>
<p> you are OK</P>
<?php else:?>
<p> you are not OK</p>
<?php endif;?>

<ul>
<li>Name :{{$name}}</li>
<li>Gender:{{$gender}}</li>
</ul>

@if($age > 18)
<p> You are OK</p>
@else
<p>you are not OK<p>
@endif

<p> skills:</p>
@foreach ($skills as $s)
{{$s}},
@endforeach

@endsection