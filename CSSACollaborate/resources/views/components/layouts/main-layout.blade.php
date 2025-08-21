@props(['title' => 'CSSACollaborate', 'sidebarSelectedTab' => 'collaborate'])

<x-layouts.plain-layout :title="$title">
    <div class="main-layout">
        <x-panels.topbar/>
        <x-panels.sidebar :selectedTab="$sidebarSelectedTab"/>
        <div class="main-layout-content-container">
            {{ $slot }}
        </div>
    </div>
</x-layouts.plain-layout>