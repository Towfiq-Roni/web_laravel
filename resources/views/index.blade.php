@extends('layouts.default')

@section('page-content')
    <section class="container min-h-screen flex items-center">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl sm:text-8xl">Welcome to my <span class="text-red-500">portfolio</span></h2>
            <h3 class="text 3xl sm:text 6xl italic">by Towfiqul Islam</h3>
        </div>
        <div class="absolute bottom-0 left-0 right-0 p-20">
            <p class="text-center">Scroll to learn more</p>
        </div>
    </section>
    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Introduction</h3>
            <h4 class="text-xl mb-3 text-gray-200">Short Description</h4>
            <p class="mb-6">
                Hi, I'm Md. Towfiqul Islam. CSE student and currently doing my internship at AnyTimeOffice.
                I'll finish my studies with a CGPA of 3.5. I'm working on a thesis of face detection.
                I am motivated to work in a new environment, learn new things and gathering experience as I can.
                I can work with teams well. And, I can take lead for others.
            </p>
            <a href="{{ route('about') }}" class="bg-red-500 text-center py-2 px-4 rounded hover:bg-pink-500
            transition">Learn More</a>
        </div>
    </section>
    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">What are my skills?</h3>
            <div class="flex flex-wrap -mx-2">
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold mb-3">Development</h3>
                        <p class="text-gray-200 mb-3">
                            Android Development<br>Web Development<br>Machine Learning
                        </p>
                        <a href="{{ url('https://github.com/Towfiq-Roni') }}" target="_blank" rel="noopener noreferrer" class="bg-red-500 text-center py-2 px-4 rounded hover:bg-pink-500
            transition" >My GitHub</a>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg shadow-lg">
                        <h3 class="text-xl font-bold mb-3">Management</h3>
                        <p class="text-gray-200 mb-3">
                            Project Management<br>Time Management<br>Presentation Skills
                        </p>
                        <a href="{{ url('https://www.linkedin.com/in/towfiq-roni/') }}" target="_blank" rel="noopener noreferrer" class="bg-red-500 text-center py-2 px-4 rounded hover:bg-pink-500
            transition" >My LinkedIn</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Contact</h3>
            <h3 class="text-xl mb-6">Find me at:</h3>
            <div class="-mx-2 sm-flex">
                <a href="{{ url('towfiqroni@gmail.com') }}" target="_blank" rel="noopener noreferrer" class=" block bg-red-500 text-center py-2 px-4 rounded hover:bg-pink-500
            transition mx-2 mb-3 sm:mb-0">
                    <span class="mr-2"><strong>E-mail </strong>Me</span>
                </a>
                <a href="{{ url('https://www.facebook.com/towfiq.roni/') }}" target="_blank" rel="noopener noreferrer" class="block bg-red-500 text-center py-2 px-4 rounded hover:bg-pink-500
            transition mx-2" >
                    <span class="mr-2">Knock at <strong>Facebook</strong></span>
                </a>
            </div>
        </div>
    </section>
@endsection
