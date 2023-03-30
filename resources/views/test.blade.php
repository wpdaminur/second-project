@extends('master')

@section('title')
    Home Page
@endsection

@section('body')
    <section class="py-5 bg-light ">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto">
                    <div class="card">
                        <div class="card-header">Full Name</div>
                        <div class="card-body">
                            <form action="{{ route('full-name') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="first_name"/>
                                    </div>
                                </div>

                               
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="last_name"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Sure Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control"value="{{ isset($result)? $result: '' }}"/>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success" value="Submit"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection