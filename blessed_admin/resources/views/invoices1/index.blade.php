@extends('layouts.app')

@section('content')
    <h1>Invoices</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Amount</th>
                <th>Email</th>
                <th>Is Paid</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($invoices as $invoice)
                <tr>
                    <td>{{ $invoice->name }}</td>
                    <td>{{ $invoice->description }}</td>
                    <td>{{ $invoice->amount }}</td>
                    <td>{{ $invoice->email }}</td>
                    <td>{{ $invoice->is_paid ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ route('invoices1.show', $invoice->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('invoices1.edit', $invoice->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('invoices1.destroy', $invoice->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('invoices1.create') }}" class="btn btn-success">Create New Invoice</a>
@endsection