<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') · Danish Aiman</title>
    <meta name="description" content="Full-Stack Developer specializing in Laravel, PHP, and Flutter.">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-void text-fg font-sans antialiased selection:bg-mint selection:text-void">
    <div class="fixed inset-0 -z-10 bg-grid"></div>
    <div class="fixed inset-0 -z-10 bg-linear-to-b from-void via-void to-panel/40"></div>

    <!-- Navigation -->
    <nav class="sticky top-0 z-50 border-b border-line bg-void/80 backdrop-blur-md">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="{{ route('portfolio.index') }}" class="flex items-center gap-2 font-mono text-fg hover:text-mint transition-colors">
                    <span class="flex gap-1.5">
                        <span class="w-2.5 h-2.5 rounded-full bg-[#ff5f56]"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-[#ffbd2e]"></span>
                        <span class="w-2.5 h-2.5 rounded-full bg-mint"></span>
                    </span>
                    <span class="ml-1">~/danish</span>
                </a>
                <div class="flex items-center gap-1 font-mono text-sm">
                    <a href="{{ route('portfolio.index') }}" class="px-3 py-2 rounded-md text-fg-muted hover:text-mint hover:bg-panel transition-colors">home</a>
                    <a href="{{ route('projects.index') }}" class="px-3 py-2 rounded-md text-fg-muted hover:text-mint hover:bg-panel transition-colors">projects</a>
                    <a href="{{ route('portfolio.index') }}#contact" class="px-3 py-2 rounded-md text-fg-muted hover:text-mint hover:bg-panel transition-colors hidden sm:inline-block">contact</a>
                    <a href="{{ asset('Wan_Muhammad_Danish_Aiman_Resume.pdf') }}" download class="ml-1 inline-flex items-center gap-1.5 px-3 py-2 rounded-md border border-mint/30 text-mint hover:bg-mint-dim transition-colors">
                        @include('partials.icon', ['name' => 'download', 'class' => 'w-3.5 h-3.5'])
                        resume
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="border-t border-line mt-24">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10 font-mono text-sm">
                <div>
                    <h3 class="text-fg font-semibold mb-3">// about</h3>
                    <p class="text-fg-muted leading-relaxed">Full-Stack Developer building secure, scalable applications with Laravel, PHP, and Flutter.</p>
                </div>
                <div>
                    <h3 class="text-fg font-semibold mb-3">// links</h3>
                    <ul class="space-y-2 text-fg-muted">
                        <li><a href="{{ route('portfolio.index') }}" class="hover:text-mint transition-colors">home</a></li>
                        <li><a href="{{ route('projects.index') }}" class="hover:text-mint transition-colors">projects</a></li>
                        @if($about?->email)
                            <li><a href="mailto:{{ $about->email }}" class="hover:text-mint transition-colors">{{ $about->email }}</a></li>
                        @endif
                    </ul>
                </div>
                <div>
                    <h3 class="text-fg font-semibold mb-3">// connect</h3>
                    <div class="flex gap-3">
                        @if($about?->social_links['github'] ?? false)
                            <a href="{{ $about->social_links['github'] }}" target="_blank" rel="noopener" aria-label="GitHub" class="w-9 h-9 flex items-center justify-center rounded-md border border-line text-fg-muted hover:text-mint hover:border-mint transition-colors">
                                @include('partials.icon', ['name' => 'github'])
                            </a>
                        @endif
                        @if($about?->social_links['linkedin'] ?? false)
                            <a href="{{ $about->social_links['linkedin'] }}" target="_blank" rel="noopener" aria-label="LinkedIn" class="w-9 h-9 flex items-center justify-center rounded-md border border-line text-fg-muted hover:text-mint hover:border-mint transition-colors">
                                @include('partials.icon', ['name' => 'linkedin'])
                            </a>
                        @endif
                        @if($about?->email)
                            <a href="mailto:{{ $about->email }}" aria-label="Email" class="w-9 h-9 flex items-center justify-center rounded-md border border-line text-fg-muted hover:text-mint hover:border-mint transition-colors">
                                @include('partials.icon', ['name' => 'mail'])
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="border-t border-line pt-6 font-mono text-xs text-fg-dim flex flex-col sm:flex-row justify-between gap-2">
                <p>&copy; {{ date('Y') }} Wan Muhammad Danish Aiman. All rights reserved.</p>
                <p class="prompt">built with laravel</p>
            </div>
        </div>
    </footer>
</body>
</html>
