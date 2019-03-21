@extends('layouts.layout')

@section('content')
    <table class="table table-dark table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>#1</td>
                <td>Benjamin</td>
                <td>Spicer</td>
                <td>benjamin@atomengine.co.uk</td>
                <td><span class="badge badge-pill badge-success">Verified</span></td>
            </tr>
            <tr>
                <td>#2</td>
                <td>James</td>
                <td>Unknown</td>
                <td>james@atomengine.co.uk</td>
                <td><span class="badge badge-pill badge-danger">Unverified</span></td>
            </tr>
            <tr>
                <td>#3</td>
                <td>Grant</td>
                <td>Carlisle</td>
                <td>grant@atomengine.co.uk</td>
                <td><span class="badge badge-pill badge-success">Verified</td>
            </tr>
            <tr>
                <td>#4</td>
                <td>Helen</td>
                <td>Unknown</td>
                <td>helen@atomengine.co.uk</td>
                <td><span class="badge badge-pill badge-warning"><i class="far fa-clock"></i>Pending</span></td>
            </tr>

        </tbody>
    </table>
@endsection
