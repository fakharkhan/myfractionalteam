<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Fractional Team - Build Your Dream Team Fractionally</title>
    <meta name="description" content="Access top-tier marketing, tech, and operations experts without hiring full-time. Fractional executive services for startups and growing businesses.">

        <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary: {
                                50: '#f0f9ff',
                                100: '#e0f2fe',
                                200: '#bae6fd',
                                300: '#7dd3fc',
                                400: '#38bdf8',
                                500: '#0ea5e9',
                                600: '#0284c7',
                                700: '#0369a1',
                                800: '#075985',
                                900: '#0c4a6e',
                                950: '#082f49',
                            },
                            secondary: {
                                50: '#fdf4ff',
                                100: '#fae8ff',
                                200: '#f5d0fe',
                                300: '#f0abfc',
                                400: '#e879f9',
                                500: '#d946ef',
                                600: '#c026d3',
                                700: '#a21caf',
                                800: '#86198f',
                                900: '#701a75',
                                950: '#4a044e',
                            },
                            accent: {
                                50: '#fff7ed',
                                100: '#ffedd5',
                                200: '#fed7aa',
                                300: '#fdba74',
                                400: '#fb923c',
                                500: '#f97316',
                                600: '#ea580c',
                                700: '#c2410c',
                                800: '#9a3412',
                                900: '#7c2d12',
                                950: '#431407',
                            },
                            neutral: {
                                50: '#fafafa',
                                100: '#f5f5f5',
                                200: '#e5e5e5',
                                300: '#d4d4d4',
                                400: '#a3a3a3',
                                500: '#737373',
                                600: '#525252',
                                700: '#404040',
                                800: '#262626',
                                900: '#171717',
                                950: '#0a0a0a',
                            }
                        },
                        fontFamily: {
                            sans: ['Inter', 'ui-sans-serif', 'system-ui'],
                            display: ['Cal Sans', 'Inter', 'ui-sans-serif', 'system-ui'],
                        },
                        backgroundImage: {
                            'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                            'gradient-conic': 'conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))',
                        },
                        animation: {
                            'fade-in-up': 'fadeInUp 0.6s ease-out',
                            'fade-in-down': 'fadeInDown 0.6s ease-out',
                            'scale-in': 'scaleIn 0.4s ease-out',
                            'float': 'float 6s ease-in-out infinite',
                            'glow': 'glow 2s ease-in-out infinite alternate',
                        },
                        keyframes: {
                            fadeInUp: {
                                '0%': { opacity: '0', transform: 'translateY(30px)' },
                                '100%': { opacity: '1', transform: 'translateY(0)' },
                            },
                            fadeInDown: {
                                '0%': { opacity: '0', transform: 'translateY(-30px)' },
                                '100%': { opacity: '1', transform: 'translateY(0)' },
                            },
                            scaleIn: {
                                '0%': { opacity: '0', transform: 'scale(0.9)' },
                                '100%': { opacity: '1', transform: 'scale(1)' },
                            },
                            float: {
                                '0%, 100%': { transform: 'translateY(0px)' },
                                '50%': { transform: 'translateY(-20px)' },
                            },
                            glow: {
                                '0%': { boxShadow: '0 0 20px rgba(14, 165, 233, 0.3)' },
                                '100%': { boxShadow: '0 0 30px rgba(14, 165, 233, 0.6)' },
                            },
                        },
                    }
                }
            }
        </script>
    @endif

            <style>
        /* Modern Glassmorphism Effects */
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }

        .glass-card-dark {
            background: rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Modern Gradient Backgrounds */
        .hero-gradient {
            background:
                radial-gradient(circle at 20% 50%, rgba(14, 165, 233, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(217, 70, 239, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 40% 80%, rgba(249, 115, 22, 0.1) 0%, transparent 50%),
                linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        }

        .service-gradient {
            background: linear-gradient(135deg,
                rgba(14, 165, 233, 0.05) 0%,
                rgba(217, 70, 239, 0.05) 50%,
                rgba(249, 115, 22, 0.05) 100%);
        }

        /* Enhanced Card Styles */
        .modern-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow:
                0 4px 6px -1px rgba(0, 0, 0, 0.1),
                0 2px 4px -1px rgba(0, 0, 0, 0.06),
                0 0 0 1px rgba(255, 255, 255, 0.05);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .modern-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow:
                0 25px 50px -12px rgba(0, 0, 0, 0.25),
                0 0 0 1px rgba(14, 165, 233, 0.1);
            border-color: rgba(14, 165, 233, 0.2);
        }

        /* Premium Button Styles */
        .premium-button {
            background: linear-gradient(135deg, #0ea5e9 0%, #3b82f6 50%, #8b5cf6 100%);
            color: white;
            padding: 1rem 2rem;
            border-radius: 0.75rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px 0 rgba(14, 165, 233, 0.3);
        }

        .premium-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .premium-button:hover::before {
            left: 100%;
        }

        .premium-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px 0 rgba(14, 165, 233, 0.4);
        }

        .secondary-button {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(14, 165, 233, 0.3);
            color: #0ea5e9;
            padding: 1rem 2rem;
            border-radius: 0.75rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .secondary-button:hover {
            background: rgba(14, 165, 233, 0.1);
            border-color: #0ea5e9;
            transform: translateY(-2px);
        }

        /* Enhanced Testimonial Cards */
        .testimonial-card {
            background: linear-gradient(135deg,
                rgba(255, 255, 255, 0.9) 0%,
                rgba(248, 250, 252, 0.8) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(14, 165, 233, 0.1);
            border-left: 4px solid #0ea5e9;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            border-left-color: #3b82f6;
        }

        /* Floating Elements */
        .floating-element {
            animation: float 6s ease-in-out infinite;
        }

        .floating-element:nth-child(2) {
            animation-delay: -2s;
        }

        .floating-element:nth-child(3) {
            animation-delay: -4s;
        }

        /* Glow Effects */
        .glow-on-hover {
            transition: all 0.3s ease;
        }

        .glow-on-hover:hover {
            box-shadow: 0 0 20px rgba(14, 165, 233, 0.4);
        }

        /* Modern Popup */
        .exit-intent-popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(5px);
            z-index: 1000;
        }

        .popup-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            padding: 2.5rem;
            border-radius: 1.5rem;
            max-width: 500px;
            width: 90%;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        /* Mobile Menu */
        .mobile-menu {
            display: none;
        }

        .mobile-menu.active {
            display: block;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #0ea5e9, #3b82f6);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #0284c7, #2563eb);
        }

        /* Text Gradients */
        .text-gradient {
            background: linear-gradient(135deg, #0ea5e9, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Enhanced Animations */
        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }

        .animate-fade-in-down {
            animation: fadeInDown 0.8s ease-out;
        }

        .animate-scale-in {
            animation: scaleIn 0.6s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        /* Responsive Design Enhancements */
        @media (max-width: 768px) {
            .modern-card:hover {
                transform: translateY(-4px) scale(1.01);
            }

            .premium-button {
                padding: 0.875rem 1.5rem;
                font-size: 0.875rem;
            }
        }
            </style>
    </head>
<body class="font-sans bg-neutral-50 text-neutral-900 antialiased">
    <!-- Header -->
    <header class="glass-card sticky top-0 z-50 border-b border-white/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <h1 class="text-2xl font-bold text-gradient">My Fractional Team</h1>
                </div>

                <!-- Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="#services" class="text-neutral-600 hover:text-primary-600 transition-all duration-300 font-medium relative group">
                        Services
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-primary-500 to-secondary-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#about" class="text-neutral-600 hover:text-primary-600 transition-all duration-300 font-medium relative group">
                        About
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-primary-500 to-secondary-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#contact" class="text-neutral-600 hover:text-primary-600 transition-all duration-300 font-medium relative group">
                        Contact
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-primary-500 to-secondary-500 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </nav>

                <!-- CTA Button -->
                <div class="flex items-center space-x-4">
                    <a href="https://cal.com/myfractionalteam/30min" target="_blank" class="premium-button" style="padding: 0.5rem 1.5rem; font-size: 0.875rem;">
                        Get Started
                    </a>

                    <!-- Mobile menu button -->
                    <button id="mobile-menu-button" class="md:hidden text-neutral-600 hover:text-primary-600 transition-colors duration-200 p-2 rounded-lg hover:bg-primary-50">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="mobile-menu md:hidden glass-card border-t border-white/20">
            <div class="px-4 py-4 space-y-2">
                <a href="#services" class="block py-3 px-4 text-neutral-600 hover:text-primary-600 hover:bg-primary-50 transition-all duration-200 rounded-lg font-medium">Services</a>
                <a href="#about" class="block py-3 px-4 text-neutral-600 hover:text-primary-600 hover:bg-primary-50 transition-all duration-200 rounded-lg font-medium">About</a>
                <a href="#contact" class="block py-3 px-4 text-neutral-600 hover:text-primary-600 hover:bg-primary-50 transition-all duration-200 rounded-lg font-medium">Contact</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-gradient py-20 lg:py-32 relative overflow-hidden">
        <!-- Floating Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-20 h-20 bg-primary-200/30 rounded-full blur-xl floating-element"></div>
            <div class="absolute top-40 right-20 w-32 h-32 bg-secondary-200/30 rounded-full blur-xl floating-element"></div>
            <div class="absolute bottom-20 left-1/4 w-24 h-24 bg-accent-200/30 rounded-full blur-xl floating-element"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center animate-fade-in-up">
                <div class="inline-block glass-card px-6 py-3 rounded-full text-sm font-medium mb-8 border border-primary-200/30">
                    <span class="text-primary-600">🚀</span> Limited Spots Available This Month
                </div>
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-neutral-900 mb-8 leading-tight">
                    Build Your Dream Team — <br>
                    <span class="text-gradient">Fractionally.</span>
                </h1>
                <p class="text-xl md:text-2xl text-neutral-600 mb-12 max-w-4xl mx-auto leading-relaxed">
                    Access top-tier marketing, tech, and operations experts without hiring full-time.
                    Scale your startup with fractional leadership that delivers <strong class="text-primary-600">40% faster results</strong>.
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <a href="https://cal.com/myfractionalteam/30min" target="_blank" class="premium-button text-lg px-8 py-4 glow-on-hover">
                        📅 Book Free Consultation
                    </a>
                    <a href="#services" class="secondary-button text-lg px-8 py-4">
                        Explore Services
                    </a>
                </div>

                <!-- Trust Indicators -->
                <div class="mt-16 flex flex-wrap justify-center items-center gap-8 text-neutral-500">
                    <div class="flex items-center gap-2">
                        <div class="w-2 h-2 bg-primary-500 rounded-full"></div>
                        <span class="text-sm font-medium">50+ Companies Scaled</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-2 h-2 bg-secondary-500 rounded-full"></div>
                        <span class="text-sm font-medium">10+ Years Experience</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-2 h-2 bg-accent-500 rounded-full"></div>
                        <span class="text-sm font-medium">40% Faster Results</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 service-gradient relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20 animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-bold text-neutral-900 mb-6">
                    What We <span class="text-gradient">Offer</span>
                </h2>
                <p class="text-xl md:text-2xl text-neutral-600 max-w-3xl mx-auto leading-relaxed">
                    Comprehensive fractional leadership across key business areas
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
                <!-- Marketing Leadership -->
                <div class="modern-card p-8 lg:p-10 rounded-2xl animate-scale-in group">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary-100 to-primary-200 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-neutral-900 mb-6">Marketing Leadership</h3>
                    <p class="text-neutral-600 text-lg leading-relaxed mb-6">
                        Strategic marketing direction, campaign management, and growth optimization from seasoned CMOs and marketing executives.
                    </p>
                    <div class="flex items-center text-primary-600 font-semibold">
                        <span>Learn More</span>
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>

                <!-- Technology & Product -->
                <div class="modern-card p-8 lg:p-10 rounded-2xl animate-scale-in group" style="animation-delay: 0.1s;">
                    <div class="w-16 h-16 bg-gradient-to-br from-secondary-100 to-secondary-200 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-secondary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-neutral-900 mb-6">Technology & Product</h3>
                    <p class="text-neutral-600 text-lg leading-relaxed mb-6">
                        Technical leadership, product strategy, and engineering excellence from experienced CTOs and product leaders.
                    </p>
                    <div class="flex items-center text-secondary-600 font-semibold">
                        <span>Learn More</span>
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>

                <!-- Operations Excellence -->
                <div class="modern-card p-8 lg:p-10 rounded-2xl animate-scale-in group" style="animation-delay: 0.2s;">
                    <div class="w-16 h-16 bg-gradient-to-br from-accent-100 to-accent-200 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-accent-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-neutral-900 mb-6">Operations Excellence</h3>
                    <p class="text-neutral-600 text-lg leading-relaxed mb-6">
                        Operational efficiency, process optimization, and scalable systems from proven COOs and operations experts.
                    </p>
                    <div class="flex items-center text-accent-600 font-semibold">
                        <span>Learn More</span>
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 bg-gradient-to-br from-neutral-50 to-neutral-100 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 left-0 w-full h-full" style="background-image: radial-gradient(circle at 1px 1px, rgba(14, 165, 233, 0.3) 1px, transparent 0); background-size: 20px 20px;"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20 animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-bold text-neutral-900 mb-6">
                    What Our <span class="text-gradient">Clients Say</span>
                </h2>
                <p class="text-xl md:text-2xl text-neutral-600 max-w-3xl mx-auto leading-relaxed">
                    Real results from real companies that scaled with fractional leadership
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
                <!-- Testimonial 1 -->
                <div class="testimonial-card p-8 lg:p-10 rounded-2xl animate-fade-in-up">
                    <div class="flex items-center mb-6">
                        <div class="flex text-accent-400">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-neutral-600 mb-6 text-lg leading-relaxed">
                        "Our fractional CMO increased our revenue by 180% in just 6 months. The expertise and strategic direction were exactly what we needed to scale."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-primary-600 rounded-full flex items-center justify-center text-white font-bold mr-4 text-lg">
                            SJ
                        </div>
                        <div>
                            <div class="font-bold text-neutral-900 text-lg">Sarah Johnson</div>
                            <div class="text-neutral-600">CEO, TechFlow</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card p-8 lg:p-10 rounded-2xl animate-fade-in-up" style="animation-delay: 0.1s;">
                    <div class="flex items-center mb-6">
                        <div class="flex text-accent-400">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-neutral-600 mb-6 text-lg leading-relaxed">
                        "The fractional CTO we worked with transformed our tech stack and reduced our development costs by 60%. Incredible value for the investment."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-secondary-500 to-secondary-600 rounded-full flex items-center justify-center text-white font-bold mr-4 text-lg">
                            MC
                        </div>
                        <div>
                            <div class="font-bold text-neutral-900 text-lg">Mike Chen</div>
                            <div class="text-neutral-600">Founder, InnovateLab</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card p-8 lg:p-10 rounded-2xl animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="flex items-center mb-6">
                        <div class="flex text-accent-400">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-neutral-600 mb-6 text-lg leading-relaxed">
                        "Working with a fractional COO streamlined our operations and saved us $200K annually. The ROI was immediate and measurable."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-accent-500 to-accent-600 rounded-full flex items-center justify-center text-white font-bold mr-4 text-lg">
                            AL
                        </div>
                        <div>
                            <div class="font-bold text-neutral-900 text-lg">Alex Rodriguez</div>
                            <div class="text-neutral-600">CEO, GrowthCo</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-white relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-96 h-96 bg-primary-100/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-80 h-80 bg-secondary-100/20 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="animate-fade-in-up">
                    <h2 class="text-4xl md:text-5xl font-bold text-neutral-900 mb-8">
                        Why Choose <span class="text-gradient">Us?</span>
                    </h2>
                    <p class="text-xl text-neutral-600 mb-8 leading-relaxed">
                        Fractional leadership bridges the gap between startup needs and enterprise expertise.
                        Instead of hiring full-time executives, access seasoned professionals who've built
                        and scaled companies from the ground up.
                    </p>
                    <p class="text-xl text-neutral-600 mb-12 leading-relaxed">
                        Our fractional executives integrate seamlessly with your existing team, providing
                        strategic direction, operational excellence, and proven frameworks that accelerate
                        growth without the overhead of full-time hires.
                    </p>
                    <div class="grid grid-cols-2 gap-8">
                        <div class="text-center p-6 rounded-2xl bg-gradient-to-br from-primary-50 to-primary-100 border border-primary-200/30">
                            <div class="text-4xl font-bold text-primary-600 mb-2">10+</div>
                            <div class="text-neutral-600 font-medium">Years Experience</div>
                        </div>
                        <div class="text-center p-6 rounded-2xl bg-gradient-to-br from-secondary-50 to-secondary-100 border border-secondary-200/30">
                            <div class="text-4xl font-bold text-secondary-600 mb-2">50+</div>
                            <div class="text-neutral-600 font-medium">Companies Scaled</div>
                        </div>
                    </div>
                </div>
                <div class="relative animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="modern-card p-10 rounded-3xl">
                        <div class="flex items-center mb-8">
                            <div class="w-16 h-16 bg-gradient-to-br from-primary-100 to-primary-200 rounded-2xl flex items-center justify-center mr-6">
                                <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-neutral-900">Rapid Results</h3>
                                <p class="text-neutral-600">See impact in weeks, not months</p>
                            </div>
                        </div>
                        <div class="flex items-center mb-8">
                            <div class="w-16 h-16 bg-gradient-to-br from-secondary-100 to-secondary-200 rounded-2xl flex items-center justify-center mr-6">
                                <svg class="w-8 h-8 text-secondary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-neutral-900">Proven Track Record</h3>
                                <p class="text-neutral-600">Battle-tested strategies and frameworks</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-16 h-16 bg-gradient-to-br from-accent-100 to-accent-200 rounded-2xl flex items-center justify-center mr-6">
                                <svg class="w-8 h-8 text-accent-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-neutral-900">Team Integration</h3>
                                <p class="text-neutral-600">Seamless collaboration with your team</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-gradient-to-br from-neutral-50 to-neutral-100 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 left-0 w-full h-full" style="background-image: radial-gradient(circle at 1px 1px, rgba(14, 165, 233, 0.3) 1px, transparent 0); background-size: 20px 20px;"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20 animate-fade-in-up">
                <h2 class="text-4xl md:text-5xl font-bold text-neutral-900 mb-8">
                    Let's Build <span class="text-gradient">Together</span>
                </h2>
                <p class="text-xl md:text-2xl text-neutral-600 max-w-3xl mx-auto leading-relaxed">
                    Ready to scale your startup with fractional leadership? Schedule a call to discuss your needs and discover how we can accelerate your growth.
                </p>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="modern-card p-12 rounded-3xl text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-primary-100 to-primary-200 rounded-3xl flex items-center justify-center mx-auto mb-8">
                        <svg class="w-10 h-10 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-neutral-900 mb-4">Schedule a Call</h3>
                    <p class="text-xl text-neutral-600 mb-10">Book a free 30-minute consultation to discuss your fractional leadership needs.</p>

                    <div class="space-y-6">
                        <a href="https://cal.com/myfractionalteam/30min" target="_blank" class="premium-button text-xl px-12 py-6 glow-on-hover inline-block">
                            📅 Book Free 30-Min Consultation
                        </a>
                        <div class="space-y-2">
                            <p class="text-neutral-500 font-medium">
                                Instant booking • No commitment • Free strategy session
                            </p>
                            <p class="text-neutral-500">
                                Or email us at <a href="mailto:hello@myfractionalteam.com" class="text-primary-600 hover:text-primary-700 font-semibold transition-colors duration-200">hello@myfractionalteam.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-neutral-900 to-neutral-800 text-white py-16 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-96 h-96 bg-primary-500/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-80 h-80 bg-secondary-500/5 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-center mb-12">
                <div class="mb-8 md:mb-0 text-center md:text-left">
                    <h3 class="text-2xl font-bold text-gradient mb-4">My Fractional Team</h3>
                    <p class="text-neutral-400 text-lg">Building dream teams, fractionally.</p>
                </div>

                <div class="flex flex-wrap justify-center md:justify-end gap-8 text-sm">
                    <a href="#" class="text-neutral-400 hover:text-primary-400 transition-colors duration-200 font-medium">Privacy Policy</a>
                    <a href="#" class="text-neutral-400 hover:text-primary-400 transition-colors duration-200 font-medium">Terms of Service</a>
                    <a href="mailto:hello@myfractionalteam.com" class="text-neutral-400 hover:text-primary-400 transition-colors duration-200 font-medium">Contact</a>
                </div>
            </div>

            <div class="border-t border-neutral-700 pt-8 text-center">
                <p class="text-neutral-400 text-sm">&copy; {{ date('Y') }} My Fractional Team. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Exit Intent Popup -->
    <div id="exit-intent-popup" class="exit-intent-popup">
        <div class="popup-content">
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-primary-100 to-primary-200 rounded-3xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-neutral-900 mb-4">Wait! Don't Miss Out</h3>
                <p class="text-xl text-neutral-600 mb-8">Get your free fractional leadership strategy session before you go!</p>
                <a href="https://cal.com/myfractionalteam/30min" target="_blank" class="premium-button text-lg px-8 py-4 mb-4 inline-block">
                    📅 Book Free 30-Min Call
                </a>
                <p class="text-sm text-neutral-500 mb-6">Limited spots available this month</p>
                <button onclick="closePopup()" class="text-neutral-400 hover:text-neutral-600 transition-colors duration-200 p-2 rounded-lg hover:bg-neutral-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Enhanced JavaScript -->
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('active');
            });
        }

        // Exit intent popup
        let exitIntentShown = false;

        function showExitIntentPopup() {
            if (!exitIntentShown) {
                document.getElementById('exit-intent-popup').style.display = 'block';
                exitIntentShown = true;
            }
        }

        function closePopup() {
            document.getElementById('exit-intent-popup').style.display = 'none';
        }

        // Track mouse movement for exit intent
        document.addEventListener('mouseout', function(e) {
            if (e.clientY <= 0 && !exitIntentShown) {
                setTimeout(showExitIntentPopup, 500);
            }
        });

        // Close popup when clicking outside
        document.getElementById('exit-intent-popup').addEventListener('click', function(e) {
            if (e.target === this) {
                closePopup();
            }
        });

        // Google Analytics tracking (replace with your GA4 measurement ID)
        // gtag('config', 'GA_MEASUREMENT_ID');

        // Track CTA clicks
        document.querySelectorAll('a[href*="cal.com"]').forEach(link => {
            link.addEventListener('click', function() {
                // gtag('event', 'click', {
                //     event_category: 'CTA',
                //     event_label: 'Book Consultation',
                //     value: 1
                // });
            });
        });
    </script>
    </body>
</html>
