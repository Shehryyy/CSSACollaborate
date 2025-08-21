@props(['projects' => ['1']])

<x-layouts.main-layout title="Collaborate - CSSACollaborate">
    @if(!empty($projects))
        {{-- This will be populated based on the projects in the $projects variable --}}
        {{-- For now, example projects will be added for the purpose of developing the front-end --}}
        <div class="collaborate-projects-container">
            <div class="project-container">
                <p class="project-title-paragraph">Project Name</p>
                <p class="project-author-paragraph">Author</p>
                <p class="project-description-paragraph">This would be a 10 word-ish description of the project.</p>
                <p class="project-status-paragraph">Project Status</p>
                <p class="project-teammates-paragraph">Teammates 2/3</p>
            </div>
            <div class="project-container">
                <p class="project-title-paragraph">Project Name</p>
                <p class="project-author-paragraph">Author</p>
                <p class="project-description-paragraph">This would be a 10 word-ish description of the project.</p>
                <p class="project-status-paragraph">Project Status</p>
                <p class="project-teammates-paragraph">Teammates 2/3</p>
            </div>
            <div class="project-container">
                <p class="project-title-paragraph">Project Name</p>
                <p class="project-author-paragraph">Author</p>
                <p class="project-description-paragraph">This would be a 10 word-ish description of the project.</p>
                <p class="project-status-paragraph">Project Status</p>
                <p class="project-teammates-paragraph">Teammates 2/3</p>
            </div>
            <div class="project-container">
                <p class="project-title-paragraph">Project Name</p>
                <p class="project-author-paragraph">Author</p>
                <p class="project-description-paragraph">This would be a 10 word-ish description of the project.</p>
                <p class="project-status-paragraph">Project Status</p>
                <p class="project-teammates-paragraph">Teammates 2/3</p>
            </div>
            <div class="project-container">
                <p class="project-title-paragraph">Project Name</p>
                <p class="project-author-paragraph">Author</p>
                <p class="project-description-paragraph">This would be a 10 word-ish description of the project.</p>
                <p class="project-status-paragraph">Project Status</p>
                <p class="project-teammates-paragraph">Teammates 2/3</p>
            </div>
            <div class="project-container">
                <p class="project-title-paragraph">Project Name</p>
                <p class="project-author-paragraph">Author</p>
                <p class="project-description-paragraph">This would be a 10 word-ish description of the project.</p>
                <p class="project-status-paragraph">Project Status</p>
                <p class="project-teammates-paragraph">Teammates 2/3</p>
            </div>
        </div>
    @else 
        <div class="empty-collaborate-container">
            <h3>Projects seeking teammates appear here</h3>
            <img src="{{ Vite::asset('resources/images/icons/collaborate_icon.png') }}">
        </div> 
    @endif
</x-layouts.main-layout>
