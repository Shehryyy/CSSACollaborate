@props(['projects' => ['1']])

<x-layouts.main-layout title="Collaborate - CSSACollaborate">
    @if(!empty($projects))
        {{-- This will be populated based on the projects in the $projects variable --}}
        {{-- For now, example projects will be added for the purpose of developing the front-end --}}
        <div class="collaborate-projects-container">
        
        </div>
    @else 
        <div class="empty-collaborate-container">
            <h3>Projects seeking teammates appear here</h3>
            <img src="{{ Vite::asset('resources/images/icons/collaborate_icon.png') }}">
        </div> 
    @endif
</x-layouts.main-layout>
