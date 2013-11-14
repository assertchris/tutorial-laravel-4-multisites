@extends("layout")
@section("content")
    <h1>
        {{ Lang::get("multisite::steps.instructions") }}
    </h1>
    <ol>
        <li>
            {{ trans("steps.step1") }}
        </li>
        <li>
            {{ trans("steps.step2", [
                "product" => trans("steps.product")
            ]) }}
        </li>
    </ol>

    <h1>
        {{ $post->title }}
    </h1>
    <p>
        {{ $post->content }}
    </p>
@stop