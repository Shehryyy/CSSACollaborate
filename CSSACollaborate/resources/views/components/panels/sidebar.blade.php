@props(['selectedTab' => 'profile'])

<div id="sidebar">
    <div class="empty-sidebar-pfp-container">
        <img src="{{ Vite::asset('resources/images/icons/profile_icon_big.png') }}" class="sidebar-profile-picture">
    </div>
    <div @class(['sidebar-tab', 'selected-tab' => $selectedTab === 'profile'])>
        <img src="{{ Vite::asset('resources/images/icons/profile_icon_small.png') }}" class="sidebar-tab-icon">
        <span class="sidebar-tab-text">Profile</span>
    </div>
    <div @class(['sidebar-tab', 'selected-tab' => $selectedTab === 'projects'])>
        <img src="{{ Vite::asset('resources/images/icons/projects_icon.png') }}" class="sidebar-tab-icon">
        <span class="sidebar-tab-text">Your Projects</span>
    </div>
    <div @class(['sidebar-tab', 'selected-tab' => $selectedTab === 'applications'])>
        <img src="{{ Vite::asset('resources/images/icons/application_icon.png') }}" class="sidebar-tab-icon">
        <span class="sidebar-tab-text">Applications</span>
    </div>
    <div @class(['sidebar-tab', 'selected-tab' => $selectedTab === 'comments'])>
        <img src="{{ Vite::asset('resources/images/icons/comments_icon.png') }}" class="sidebar-tab-icon">
        <span class="sidebar-tab-text">Comments</span>
    </div>
    <div @class(['sidebar-tab', 'selected-tab' => $selectedTab === 'collaborate'])>
        <img src="{{ Vite::asset('resources/images/icons/collaborate_icon.png') }}" class="sidebar-tab-icon">
        <span class="sidebar-tab-text">Collaborate</span>
    </div>
    <div class="sidebar-logout-container">
        <hr class="sidebar-logout-separator">
        <div id="sidebar-logout-tab" class="sidebar-tab">
            <img src="{{ Vite::asset('resources/images/icons/logout_icon.png') }}" class="sidebar-tab-icon">
            <span class="sidebar-tab-text">Logout</span>
        </div>
    </div>
</div>