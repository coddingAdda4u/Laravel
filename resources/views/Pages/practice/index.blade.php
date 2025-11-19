<h1>Blade templete</h1>

@php
  $name = 'Hariom Kashyap';
  $age = 20;
  $isAdult = true;
@endphp

<!-- Using variables -->
{{ "Hello, $name" }}
<br />
<!-- Using HTML -->
{!! "<strong>Hello, $name</strong>" !!}

<!-- This is a comment -->
<br />

<!-- if statement -->
@if ($isAdult)
  <p>{{ $name }} is an adult.</p>
@else
  <p>{{ $name }} is not an adult.</p>
@endif
<br />

<!-- Looping -->
@for ($i = 1; $i <= 5; $i++)
  <p>Iteration {{ $i }}</p>
@endfor
<br />

<!-- isset function -->
@isset($age)
  <p>{{ $name }} is {{ $age }} years old</p>
@endisset
<br />



