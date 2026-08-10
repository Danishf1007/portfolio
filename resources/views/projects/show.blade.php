@extends('layouts.app')

@section('title', $project->title)

@section('content')
    <!-- Header -->
    <section class="border-b border-line py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-2 font-mono text-sm text-fg-muted hover:text-mint transition-colors mb-6">
                @include('partials.icon', ['name' => 'arrow-left', 'class' => 'w-3.5 h-3.5'])
                back-to-projects
            </a>
            <h1 class="text-3xl sm:text-4xl font-bold text-fg mb-3">{{ $project->title }}</h1>
            @if($project->technologies)
                <div class="flex flex-wrap gap-2">
                    @foreach($project->technologies as $tech)
                        <span class="font-mono bg-mint-dim text-mint text-xs px-2.5 py-1 rounded border border-mint/20">{{ $tech }}</span>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- Details -->
    <section class="py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($project->image_url)
                <img src="{{ $project->image_url }}" alt="{{ $project->title }}" class="w-full h-96 object-cover rounded-lg border border-line mb-10">
            @else
                <div class="w-full h-64 rounded-lg border border-line bg-panel mb-10 flex items-center justify-center bg-grid">
                    @include('partials.icon', ['name' => 'terminal', 'class' => 'w-12 h-12 text-mint/40'])
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="md:col-span-2">
                    <div class="rounded-lg border border-line bg-panel overflow-hidden">
                        <div class="flex items-center gap-2 px-4 py-3 border-b border-line bg-panel-2">
                            <span class="flex gap-1.5">
                                <span class="w-2.5 h-2.5 rounded-full bg-[#ff5f56]"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-[#ffbd2e]"></span>
                                <span class="w-2.5 h-2.5 rounded-full bg-mint"></span>
                            </span>
                            <span class="font-mono text-xs text-fg-dim ml-1">readme.md</span>
                        </div>
                        <div class="p-6">
                            <p class="text-fg-muted leading-relaxed whitespace-pre-line">{{ $project->description }}</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="rounded-lg border border-line bg-panel p-6 sticky top-24">
                        <h3 class="font-mono text-mint text-sm mb-4">// quick-links</h3>
                        <div class="space-y-3">
                            @if($project->live_url)
                                <a href="{{ $project->live_url }}" target="_blank" rel="noopener" class="flex items-center justify-center gap-2 w-full bg-mint text-void py-3 rounded font-mono text-sm font-semibold hover:bg-mint-strong transition-colors">
                                    @include('partials.icon', ['name' => 'external', 'class' => 'w-4 h-4'])
                                    visit-live-site
                                </a>
                            @endif
                            @if($project->github_url)
                                <a href="{{ $project->github_url }}" target="_blank" rel="noopener" class="flex items-center justify-center gap-2 w-full border border-line py-3 rounded font-mono text-sm font-semibold text-fg hover:border-mint hover:text-mint transition-colors">
                                    @include('partials.icon', ['name' => 'github', 'class' => 'w-4 h-4'])
                                    view-on-github
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Projects -->
    @if($relatedProjects->count() > 0)
        <section class="py-16 border-t border-line">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <p class="font-mono text-mint text-sm mb-3">// more-projects</p>
                <h2 class="text-2xl sm:text-3xl font-bold text-fg mb-10">Keep exploring</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($relatedProjects->take(3) as $related)
                        <a href="{{ route('projects.show', $related) }}" class="group rounded-lg border border-line bg-panel p-6 hover:border-mint/50 hover:glow-mint-sm transition-all block">
                            <h3 class="text-lg font-bold text-fg mb-2 group-hover:text-mint transition-colors">{{ $related->title }}</h3>
                            <p class="text-fg-muted text-sm mb-4">{{ Str::limit($related->description, 100) }}</p>
                            <span class="inline-flex items-center gap-1 font-mono text-xs text-mint">
                                read-more
                                @include('partials.icon', ['name' => 'chevron-right', 'class' => 'w-3.5 h-3.5'])
                            </span>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
