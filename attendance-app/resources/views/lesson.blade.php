@extends('canevas')

@section('lesson')
    
<table class="customTable">
    <tr>
        <th>Topic</th>
        <th>Date</th>
        <th>Time</th>
    </tr>
    @foreach ($allLessons as $lesson)
        <tr>
            <td>{{ $lesson->topic }}</td>
            <td>{{ $lesson->lesson_date }}</td>
            <td>{{ $lesson->lesson_time }}</td>
            
        </tr>
    @endforeach
</table>
@endsection