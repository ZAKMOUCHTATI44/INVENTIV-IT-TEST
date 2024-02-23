@extends('Layout')

@section('children')
    @if (session('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif
    <form method="POST" action="{{route("calculator.store")}}">
        @csrf
        <div>
            <label for="">Enter first number</label>
            <input type="number" name="num1" placeholder="Enter first number" required class="border p-3">
        </div>
        <select name="operation" required>
            <option value="+">Addition</option>
            <option value="-">Subtraction</option>
            <option value="*">Multiplication</option>
            <option value="/">Division</option>
        </select>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <button type="submit">Calculate</button>
    </form>
    @isset($result)
        <h2>Result: {{ $result }}</h2>
    @endisset
@endsection
