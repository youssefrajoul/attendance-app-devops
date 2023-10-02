@extends('canevas')

@section('lesson')
    <table class="customTable">
        <tr>
            <th>Topic</th>
            <th>Date</th>
            <th>Time</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($allLessons as $lesson)
            <tr>

                <td>{{ $lesson->topic }}</td>
                <td id="d"<?= $i++ ?>>{{ $lesson->lesson_date }}</td>
                <td id="t"<?= $i++ ?>>{{ $lesson->lesson_time }}</td>

            </tr>
        @endforeach
    </table>
    <p id= "perp"> pergraph</p>
@endsection
