@extends('layouts.default')

@section('page-content')
    <section class="py-20 min-h-screen flex items-center">
        <div class="max-w-screen-lg mx-auto">
            <h2 class="text-6xl text-center mb-6">About</h2>
            <h3 class="text 4xl text-center text-gray-200 mb-6">Who Am I?</h3>
            <p class="mb-3">
                Hi, I'm Md. Towfiqul Islam. CSE student and currently doing my internship at AnyTimeOffice.
                I'll finish my studies with a CGPA of 3.5. I'm working on a thesis of face detection.
                I am motivated to work in a new environment, learn new things and gathering experience as I can.
                I can work with teams well. And, I can take lead for others.
            </p>
            <p class="mb-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto assumenda,
                autem culpa cumque deleniti dolore dolores doloribus error impedit in ipsa iste maxime nemo
                nobis numquam optio possimus provident qui quidem reiciendis repellat repudiandae saepe sapiente
                soluta tempore tenetur velit? Ad aliquam at dolorem dolores ducimus iure sunt voluptatibus?
            </p>
            <div class="mb-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet architecto assumenda,
                autem culpa cumque deleniti dolore dolores doloribus error impedit in ipsa iste maxime nemo
                nobis numquam optio possimus provident qui quidem reiciendis repellat repudiandae saepe sapiente
                soluta tempore tenetur velit? Ad aliquam at dolorem dolores ducimus iure sunt voluptatibus?
            </div>
            <div class="text-center">
                <a href="{{ route('home') }}" class="inline-block bg-red-500 text-center py-2 px-4 rounded transition">
                    Jump Home</a>
            </div>
        </div>
    </section>
@endsection
