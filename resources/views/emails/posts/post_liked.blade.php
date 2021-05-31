@component('mail::message')
# Introduction

{{$liker->name}} gostou do teu artigo

@component('mail::button', ['url' => route('posts.show', $post)])
view post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
