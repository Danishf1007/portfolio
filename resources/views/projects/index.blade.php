@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <!-- Header -->
    <section class="border-b border-line py-16 sm:py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="font-mono text-mint text-sm mb-3 prompt">ls ./projects</p>
            <h1 class="text-4xl sm:text-5xl font-bold text-fg mb-4">All Projects</h1>
            <p class="text-lg text-fg-muted max-w-2xl">A collection of things I've shipped — from full-stack platforms to mobile apps.</p>
        </div>
    </section>

    <!-- Projects Grid -->
    <section class="py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($projects->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($projects as $project)
                        <div class="group rounded-lg border border-line bg-panel overflow-hidden hover:border-mint/50 hover:glow-mint-sm transition-all flex flex-col">
                            <div class="flex items-center gap-2 px-4 py-3 border-b border-line bg-panel-2">
                                <span class="flex gap-1.5">
                                    <span class="w-2 h-2 rounded-full bg-[#ff5f56]"></span>
                                    <span class="w-2 h-2 rounded-full bg-[#ffbd2e]"></span>
                                    <span class="w-2 h-2 rounded-full bg-mint"></span>
                                </span>
                                <span class="font-mono text-xs text-fg-dim ml-1 truncate">{{ Str::slug($project->title) }}.php</span>
                            </div>
                            <div class="p-6 flex flex-col flex-1">
                                <h3 class="text-lg font-bold text-fg mb-2 group-hover:text-mint transition-colors">{{ $project->title }}</h3>
                                <p class="text-fg-muted text-sm mb-4 flex-1">{{ Str::limit($project->description, 130) }}</p>

                                @if($project->technologies)
                                    <div class="flex flex-wrap gap-2 mb-5">
                                        @foreach($project->technologies as $tech)
                                            <span class="font-mono bg-mint-dim text-mint text-xs px-2.5 py-1 rounded border border-mint/20">{{ $tech }}</span>
                                        @endforeach
                                    </div>
                                @endif

                                <div class="flex gap-3 font-mono text-xs">
                                    <a href="{{ route('projects.show', $project) }}" class="flex-1 text-center bg-mint text-void py-2.5 rounded font-semibold hover:bg-mint-strong transition-colors">view-details</a>
                                    @if($project->github_url)
                                        <a href="{{ $project->github_url }}" target="_blank" rel="noopener" class="flex items-center justify-center w-10 border border-line rounded text-fg-muted hover:text-mint hover:border-mint transition-colors">
                                            @include('partials.icon', ['name' => 'github'])
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-24 rounded-lg border border-dashed border-line">
                    <p class="font-mono text-fg-dim">// no projects yet — check back soon</p>
                </div>
            @endif
        </div>
    </section>
@endsection
