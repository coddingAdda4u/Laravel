@include('components.navbar')

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
<!-- isset function -->
@isset($age)
  <p>{{ $name }} is {{ $age }} years old</p>
@endisset
<br />

<hr />
<h2 style="text-align: center;">Looping statements</h2>

<div>
  <div style="display: flex; justify-content: space-evenly; align-items: flex-start; flex-wrap: wrap;">
    <!-- For Loop   -->
    <ul>
      <li>
        <h3>For Loop</h3>
      </li>
      @for ($i = 0; $i < 10; $i++)
        <li>Value of i = {{ $i }}</li>
      @endfor
    </ul>

    <!-- While Loop -->
    <ul>
      @php
        $while = 0;
      @endphp
      <li>
        <h3>While Loop</h3>
      </li>
      @while ($while < 10)
        <li>Value of while = {{ $while }}</li>
        @php
          $while++;
        @endphp
      @endwhile
    </ul>

    <!-- Foreach Loops -->
    <ul>
      @php
        $users = ["Hari", "Manjeet", "Vansh", ""];
      @endphp
      <li>
        <h3>Foreach Loop</h3>
      </li>
      @foreach ($users as $user)
        <li>Current users : {{ $user }}</li>
      @endforeach
    </ul>

    <!-- Forelse Loop -->
    <ul>
      @php
        $multi_users_data = [
          [
            'id' => 1,
            'name' => 'Hari Om',
            'email' => 'hari@example.com',
            'age' => 22,
            'country' => 'India'
          ],
          [
            'id' => 2,
            'name' => 'Amit Kumar',
            'email' => 'amit@example.com',
            'age' => 25,
            'country' => 'India'
          ],
          [
            'id' => 3,
            'name' => 'Riya Sharma',
            'email' => 'riya@example.com',
            'age' => 20,
            'country' => 'India'
          ],
          [
            'id' => 4,
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'age' => 28,
            'country' => 'USA'
          ],
          [
            'id' => 5,
            'name' => 'Sara Lee',
            'email' => 'sara@example.com',
            'age' => 26,
            'country' => 'UK'
          ]
        ];

      @endphp
      <li>
        <h3>Forelse Loop</h3>
      </li>
      @forelse($multi_users_data as $user)
        <!-- <li>Current users {{ $user['name'] }}</li> -->                
      @empty
        <li>No users founded.</li>
      @endforelse
    </ul>
  </div>
</div>