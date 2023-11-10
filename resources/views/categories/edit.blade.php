@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="text-sm">
        <span style="margin-left: 17px;">Categories - {{ $category->id }} - Edit</span>
        <a href=http://127.0.0.1:8000/categories/ class="btn btn-link text-sm btn-sm" role="button" aria-pressed="true" style="margin-bottom: 2px;">Späť</a>
    </div>
</div>
<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::model($category,['url' => $category->getEditPostLink()]) !!}
                    {!! Form::hidden('id', null) !!}
                        <div class="form-group">
                            <label class="form-check-label" for="exampleCheck1">Name</label>
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label for="category">Category:</label>
                                <select class="form-control" name="category" id="category">
                                    <option value="vyrobca1">Vyrobca1</option>
                                    <option value="vyrobca2">Vyrobca2</option>
                                    <option value="vyrobca3">Vyrobca3</option>
                                </select>
                        </div>
                        <button type="submit" class="btn btn-dark mt-4" style="background-color: #000000; color: #fff;">Submit</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

