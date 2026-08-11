@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero -->
    <section class="relative overflow-hidden border-b border-line">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-mint/10 rounded-full blur-3xl animate-float-slow"></div>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32 relative">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 mb-6 px-3 py-1.5 rounded-full border border-mint/30 bg-mint-dim font-mono text-xs text-mint">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-mint opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-mint"></span>
                    </span>
                    open to work — fresh graduate
                </div>
                <p class="font-mono text-mint text-sm mb-4 prompt">whoami</p>
                <h1 class="text-4xl sm:text-6xl font-bold font-mono tracking-tight text-fg mb-6">
                    Wan Muhammad<br class="hidden sm:block"> Danish Aiman<span class="caret"></span>
                </h1>
                <p class="text-lg text-fg-muted mb-10 max-w-2xl leading-relaxed">
                    Full-Stack Developer specializing in <span class="text-mint">Netcentric Computing</span> — building secure, scalable applications with Laravel, PHP, and Flutter, from server-level configuration up to the interface.
                </p>
                <div class="flex flex-wrap gap-4 font-mono text-sm">
                    <a href="{{ route('projects.index') }}" class="group inline-flex items-center gap-2 bg-mint text-void px-6 py-3 rounded-md font-semibold hover:bg-mint-strong transition-colors glow-mint-sm">
                        view-projects
                        @include('partials.icon', ['name' => 'chevron-right', 'class' => 'w-4 h-4 group-hover:translate-x-0.5 transition-transform'])
                    </a>
                    <a href="#contact" class="inline-flex items-center gap-2 border border-line px-6 py-3 rounded-md text-fg hover:border-mint hover:text-mint transition-colors">
                        get-in-touch
                    </a>
                    <a href="{{ asset('Wan_Muhammad_Danish_Aiman_Resume.pdf') }}" download class="inline-flex items-center gap-2 border border-line px-6 py-3 rounded-md text-fg hover:border-mint hover:text-mint transition-colors">
                        @include('partials.icon', ['name' => 'download', 'class' => 'w-4 h-4'])
                        download-resume
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    @if($about)
        <section id="about" class="py-20 border-b border-line">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <p class="font-mono text-mint text-sm mb-3">// about</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-fg mb-12">A bit about me</h2>

                <div class="grid grid-cols-1 md:grid-cols-5 gap-10 items-start">
                    @if($about->avatar_url)
                        <div class="md:col-span-2">
                            <div class="rounded-xl overflow-hidden border border-line glow-mint-sm">
                                <img src="{{ asset('images/aboutpic.jpeg') }}" alt="Danish Aiman" class="w-full aspect-square object-cover grayscale hover:grayscale-0 transition duration-500">
                            </div>
                            <div class="mt-4 space-y-2 font-mono text-xs text-fg-muted">
                                @if($about->location)
                                    <p><span class="text-mint">location</span> · {{ $about->location }}</p>
                                @endif
                                @if($about->email)
                                    <p><span class="text-mint">email</span> · <a href="mailto:{{ $about->email }}" class="hover:text-mint transition-colors">{{ $about->email }}</a></p>
                                @endif
                            </div>
                        </div>
                        <div class="md:col-span-3">
                    @else
                        <div class="md:col-span-5">
                    @endif
                        <div class="rounded-lg border border-line bg-panel overflow-hidden">
                            <div class="flex items-center gap-2 px-4 py-3 border-b border-line bg-panel-2">
                                <span class="flex gap-1.5">
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#ff5f56]"></span>
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#ffbd2e]"></span>
                                    <span class="w-2.5 h-2.5 rounded-full bg-mint"></span>
                                </span>
                                <span class="font-mono text-xs text-fg-dim ml-1">about.md</span>
                            </div>
                            <div class="p-6">
                                <p class="text-fg-muted leading-relaxed whitespace-pre-line">{{ $about->bio }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Experience -->
    @if($experiences->count() > 0)
        <section class="py-20 border-b border-line">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <p class="font-mono text-mint text-sm mb-3">// experience</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-fg mb-12">Where I've worked</h2>

                <div class="max-w-3xl space-y-8">
                    @foreach($experiences as $exp)
                        <div class="rounded-lg border border-line bg-panel overflow-hidden">
                            <div class="flex items-center gap-2 px-4 py-3 border-b border-line bg-panel-2">
                                <span class="flex gap-1.5">
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#ff5f56]"></span>
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#ffbd2e]"></span>
                                    <span class="w-2.5 h-2.5 rounded-full bg-mint"></span>
                                </span>
                                <span class="font-mono text-xs text-fg-dim ml-1">{{ Str::slug($exp->company) }}.log</span>
                            </div>
                            <div class="p-6">
                                <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-1 mb-1">
                                    <h3 class="text-lg font-bold text-fg">{{ $exp->role }}</h3>
                                    <span class="font-mono text-mint text-xs whitespace-nowrap">{{ $exp->start_date }} — {{ $exp->end_date ?? 'Present' }}</span>
                                </div>
                                <p class="text-fg-muted text-sm mb-4">{{ $exp->company }}</p>
                                @if($exp->bullets)
                                    <ul class="space-y-2">
                                        @foreach($exp->bullets as $bullet)
                                            <li class="flex gap-2 text-sm text-fg-muted leading-relaxed">
                                                <span class="text-mint shrink-0">▹</span>
                                                <span>{{ $bullet }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Education -->
    @if($education->count() > 0)
        <section class="py-20 border-b border-line">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <p class="font-mono text-mint text-sm mb-3">// education</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-fg mb-12">Background</h2>

                <div class="max-w-3xl space-y-6">
                    @foreach($education as $edu)
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-6 rounded-lg border border-line bg-panel p-6 hover:border-mint/50 transition-colors">
                            <div class="font-mono text-mint text-sm whitespace-nowrap sm:pt-1">{{ $edu->start_year }}—{{ $edu->end_year }}</div>
                            <div class="sm:border-l sm:border-line sm:pl-6">
                                <h3 class="text-lg font-bold text-fg">{{ $edu->degree }}</h3>
                                <p class="text-fg-muted text-sm mt-1">{{ $edu->institution }}</p>
                                @if($edu->description)
                                    <p class="text-fg-muted text-sm mt-3">{{ $edu->description }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Featured Projects -->
    @if($projects->count() > 0)
        <section class="py-20 border-b border-line">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <p class="font-mono text-mint text-sm mb-3">// featured-projects</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-fg mb-12">Things I've built</h2>

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
                                <p class="text-fg-muted text-sm mb-4 flex-1">{{ Str::limit($project->description, 110) }}</p>
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
                <div class="text-center mt-12">
                    <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-2 font-mono text-sm border border-line px-6 py-3 rounded-md text-fg hover:border-mint hover:text-mint transition-colors">
                        view-all-projects
                        @include('partials.icon', ['name' => 'chevron-right'])
                    </a>
                </div>
            </div>
        </section>
    @endif

    <!-- Skills -->
    @if($skills->count() > 0)
        <section class="py-20 border-b border-line">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <p class="font-mono text-mint text-sm mb-3">// skills</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-fg mb-12">Tools of the trade</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($skills->groupBy('category') as $category => $categorySkills)
                        <div class="rounded-lg border border-line bg-panel p-6">
                            <h3 class="font-mono text-mint text-sm mb-5">// {{ $category }}</h3>
                            <ul class="space-y-4">
                                @foreach($categorySkills as $skill)
                                    <li>
                                        <div class="flex justify-between font-mono text-xs mb-1.5">
                                            <span class="text-fg">{{ $skill->name }}</span>
                                            <span class="text-fg-dim">{{ $skill->proficiency }}%</span>
                                        </div>
                                        <div class="h-1.5 w-full bg-panel-2 rounded-full overflow-hidden border border-line">
                                            <div class="h-full bg-linear-to-r from-mint to-cyan rounded-full" style="width: {{ $skill->proficiency }}%"></div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Contact -->
    <section id="contact" class="py-24">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="font-mono text-mint text-sm mb-3">// contact</p>
            <h2 class="text-3xl sm:text-4xl font-bold text-fg mb-4">Let's build something together</h2>
            <p class="text-fg-muted mb-10 text-lg">Open to freelance work and full-time roles. Reach out and let's talk.</p>
            @if($about?->email)
                <a href="mailto:{{ $about->email }}" class="inline-flex items-center gap-2 font-mono bg-mint text-void px-8 py-4 rounded-md font-semibold hover:bg-mint-strong transition-colors glow-mint-sm">
                    <span class="prompt">send-email --to={{ $about->email }}</span>
                </a>
            @endif
        </div>
    </section>
@endsection
