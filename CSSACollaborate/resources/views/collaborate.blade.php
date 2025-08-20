@props(['projects' => []])

<x-layouts.main-layout title="Collaborate - CSSACollaborate">
    @if(!empty($projects))
        
    @else 
        <div class="empty-collaborate-container">
            <h3>Projects seeking teammates appear here</h3>
            <img src="{{ Vite::asset('resources/images/icons/collaborate_icon.png') }}">
        </div> 
    @endif
</x-layouts.main-layout>
