@extends('edge.master')

@section('body')
    <h1>This is a Fashion site named: {{ $site->name }}</h1>

    @foreach($site->themeDefinition->sections as $key => $section)
        <section style="border: 1px solid burlywood;">
            <h2>{{ $section->title }}</h2>
            @foreach($section->fields as $field)
                <p>{{ $field->name }}: {{ $site->content->payload[$field->name] ?? '' }}</p>
            @endforeach
        </section>
    @endforeach
@endsection
