@extends('layout')

@section('content')
<div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                ついーとする
            </h1>

            <form method="POST" action="{{ route('create') }}">
                @csrf

                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="tweet">
                            つぶやく
                        </label>

                        <textarea
                            id="tweet"
                            name="tweet"
                            class="form-control {{ $errors->has('tweet') ? 'is-invalid' : '' }}"
                            rows="4"
                            value ="{{ old('tweet') }}"
                        ></textarea>
                        @if ($errors->has('tweet'))
                            <div class="invalid-feedback">
                                {{ $errors->first('tweet') }}
                            </div>
                        @endif
                    </div>

                    <div class="mt-5">
                        <a class="btn btn-secondary" href="{{ route('top') }}">
                            キャンセル
                        </a>

                        <button type="submit" class="btn btn-primary">
                            投稿する
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    <div class="container mt-4">
        @foreach ($tweets as $tweet)
            <div class="card mb-4">
            <div class="card-header">
                    <span class="mr-2">
                         {{ $tweet->user->name }}
                    </span>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        {{ $tweet->tweet }} 
                    </p>
                </div>
                <div class="card-footer">
                    <span class="mr-2">
                        投稿日時 {{ $tweet->created_at->format('Y.m.d H:i') }}
                    </span>
                </div>
            </div>
        @endforeach
    </div>
@endsection