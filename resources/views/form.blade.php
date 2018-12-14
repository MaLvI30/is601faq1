@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="/" method="post" id="form">
                    {{ csrf_field() }}
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control">

                    <label for="gender" style="margin-top:10px;">Gender:</label>
                    <select name="gender" class="form-control">
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                    </select>

                    <div class="g-recaptcha" data-sitekey=""></div>

                </form>
            </div>
        </div>
    </div>

@endsection
