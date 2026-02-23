<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucas's Portfolio | Full-Stack Developer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .gradient-text {
            background: linear-gradient(90deg, #818cf8, #c084fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .glass-card {
            background: rgba(30, 41, 59, 0.5);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
</head>

<body class="bg-[#0f172a] text-slate-200 font-sans">

    <nav class="fixed w-full z-50 bg-[#0f172a]/80 backdrop-blur-md border-b border-slate-800">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <span class="text-xl font-bold gradient-text decoration-indigo-500/30">Lucas's Portfolio</span>
                <div class="hidden md:flex space-x-8 font-medium">
                    <a href="#about" class="hover:text-indigo-400 transition">About</a>
                    <a href="#skills" class="hover:text-indigo-400 transition">Skills</a>
                    <a href="#projects" class="hover:text-indigo-400 transition">Projects</a>
                    <a href="#contact" class="hover:text-indigo-400 transition">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <section id="about" class="pt-32 pb-20 px-4">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-12">
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                <div class="relative w-48 h-48 md:w-64 md:h-64 rounded-2xl overflow-hidden shadow-2xl bg-slate-800 rotate-3 hover:rotate-0 transition duration-500">
                    <img src="{{ asset('assets/images/profilePic.jpg') }}" alt="Lucas" class="w-full h-full object-cover">
                </div>
            </div>
            
            <div class="flex-1 text-center md:text-left">
                <h1 class="text-4xl md:text-6xl font-extrabold mb-4 gradient-text">Mastering the Full-Stack</h1>
                <p class="text-lg text-slate-400 mb-6 leading-relaxed">
                    I am an enthusiast full-stack web developer pursuing a
                    <strong class="text-white">Bachelor's of Computer Science (Software Engineering) with Honours at UMPSA</strong>.
                    With a current <strong class="text-white">CGPA of 3.76</strong>, I bridge the gap between robust backend architecture and intuitive frontend design.
                </p>
                <div class="inline-flex items-center gap-2 bg-indigo-500/10 border border-indigo-500/20 text-indigo-300 px-4 py-2 rounded-full mb-8">
                    <span class="relative flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-indigo-500"></span>
                    </span>
                    Currently seeking a 6 month internship starting March 2026
                </div>
                <div class="flex flex-wrap justify-center md:justify-start gap-4">
                    <a href="#projects" class="bg-indigo-600 text-white px-8 py-3 rounded-lg font-bold hover:bg-indigo-700 transition shadow-lg shadow-indigo-500/20">Explore Projects</a>
                    <a href="#contact" class="border border-slate-700 px-8 py-3 rounded-lg font-bold hover:bg-slate-800 transition">Get In Touch</a>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="py-20 bg-[#0b1120]">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-16 text-center">Technical <span class="text-indigo-500">Expertise</span></h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                @php
                    $skillGroups = [
                        'Frontend Development' => ['HTML', 'CSS', 'Bootstrap CSS', 'Tailwind CSS', 'JS', 'React'],
                        'Backend & APIs' => ['PHP', 'Laravel', 'Java', 'SpringBoot', 'C#', 'ASP.NET', 'REST APIs'],
                        'Database Management' => ['MySQL', 'PostgreSQL']
                    ];
                    $icons = [
                        'Frontend Development' => 'fa-code',
                        'Backend & APIs' => 'fa-server',
                        'Database Management' => 'fa-database'
                    ];
                @endphp

                @foreach ($skillGroups as $category => $items)
                <div class="glass-card p-8 rounded-3xl flex flex-col items-center text-center">
                    <div class="w-12 h-12 bg-indigo-500/20 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas {{ $icons[$category] }} text-indigo-400 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-6 text-white">{{ $category }}</h3>
                    <div class="flex flex-wrap gap-2 justify-center">
                        @foreach ($items as $skill)
                        <span class="px-3 py-1 bg-slate-800 border border-slate-700 rounded-md text-sm text-slate-300 hover:border-indigo-500/50 transition">
                            {{ $skill }}
                        </span>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="projects" class="py-20 px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold mb-12 text-center">Featured Work</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @for ($i = 1; $i <= 3; $i++)
                <div class="group bg-slate-800/40 border border-slate-800 rounded-2xl overflow-hidden hover:border-indigo-500/50 transition-all duration-300">
                    <div class="h-48 bg-slate-700 relative overflow-hidden">
                        <img src="https://via.placeholder.com/600x400/1e293b/64748b" alt="Project" class="w-full h-full object-cover opacity-60 group-hover:opacity-100 group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold text-white">Project Title {{ $i }}</h3>
                            <div class="flex gap-3 text-slate-400">
                                <a href="#" class="hover:text-indigo-400"><i class="fab fa-github"></i></a>
                                <a href="#" class="hover:text-indigo-400"><i class="fas fa-external-link-alt text-sm"></i></a>
                            </div>
                        </div>
                        <p class="text-slate-400 text-sm mb-4 leading-relaxed">
                            A high-performance web application built with Laravel and React. Implements RESTful API patterns and optimized database queries.
                        </p>
                        <div class="flex gap-2">
                            <span class="text-[10px] font-bold uppercase tracking-wider text-indigo-400">Laravel</span>
                            <span class="text-[10px] font-bold uppercase tracking-wider text-purple-400">PostgreSQL</span>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>

    <footer id="contact" class="py-12 bg-slate-900 text-white text-center">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-2xl font-bold mb-4">Let's Connect</h2>
            <p class="text-slate-400 mb-8">Ready to bring value to your engineering team at the start of March 2026.</p>
            <div class="flex justify-center gap-6 text-2xl mb-8">
                <a href="#" class="hover:text-indigo-400 transition"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="hover:text-indigo-400 transition"><i class="fab fa-github"></i></a>
                <a href="#" class="hover:text-indigo-400 transition"><i class="fas fa-envelope"></i></a>
            </div>
            <p class="text-sm text-slate-500 border-t border-slate-800 pt-8">
                &copy; 2026 Lucas's Portfolio. Built with Laravel & Tailwind CSS.
            </p>
        </div>
    </footer>

</body>
</html>