@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <h2>Monthly Reports</h2>
        <table class="table" id="reports_table">
            <thead>
            <tr>
                <th>Month</th>
                <th>Year</th>
                <th>Paid</th>
                <th>Outstanding</th>
                <th>Overdue</th>
            </tr>
            </thead>
            <tbody>
            @foreach($report as $item)
                <tr>
                    <td>{{$item['month']}}</td>
                    <td>{{$item['year']}}</td>
                    <td>{{$item['paid']}}</td>
                    <td>{{$item['outstanding']}}</td>
                    <td>{{$item['overdue']}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
