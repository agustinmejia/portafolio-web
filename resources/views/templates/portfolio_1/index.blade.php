@extends('templates.'.setting('sitio.template').'.layouts.master')

@php
    $banner = setting('sitio.bg_image') ? asset('storage/'.setting('sitio.bg_image')) : asset('templates/portfolio_1/img/hero-bg.jpg');
@endphp

@section('css')
    <style>
        #hero {
            width: 100%;
            height: 100vh;
            background: url("{{ $banner }}") top center;
            background-size: cover;
        }
        .dark-mask{
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 10px;
            background-color: rgba(0,0,0,0.3);
            backdrop-filter: blur(2px);
        }
    </style>
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="dark-mask"></div>
        <div class="hero-container" data-aos="fade-in">
            <h1>{{ setting('datos-personales.full_name') }}</h1>
            
            @if(setting('datos-personales.profession'))
            <p>{{ setting('datos-personales.profession') }}</p>
            @endif
            
            @if (setting('datos-personales.skills'))
            <p>Soy <span class="typed" data-typed-items="{{ setting('datos-personales.skills') }}"></span></p>
            @endif
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>Acerca de</h2>
                <p>{!! setting('datos-personales.about') !!}</p>
            </div>

            <div class="row">
            <div class="col-lg-3" data-aos="fade-right">
                @php
                    $image = setting('datos-personales.photo') ? asset('storage/'.setting('datos-personales.photo')) : asset('templates/portfolio_1/img/profile-img.jpg');
                @endphp
                <img src="{{ $image }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-9 pt-4 pt-lg-0 content" data-aos="fade-left">
                @if(setting('datos-personales.profession'))
                <h3>{{ setting('datos-personales.profession') }}</h3>
                @endif
                <p class="fst-italic">A continuación se vizualizan mis datos personales, profesionales y de contacto.</p>
                <div class="row">
                    @php
                        $month = ['', 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'];
                        $birthday = \Carbon\Carbon::parse(date('Y-m-d', strtotime(setting('datos-personales.birthday'))));
                    @endphp
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Fecha de nacimiento:</strong> <span>{{ date('d', strtotime(setting('datos-personales.birthday'))) }} {{ $month[intval(date('m', strtotime(setting('datos-personales.birthday'))))] }} {{ date('Y', strtotime(setting('datos-personales.birthday'))) }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>N&deg; de celular:</strong> <span>{{ setting('datos-personales.phone') }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Ciudad:</strong> <span>{{ setting('datos-personales.city') }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Sitio web:</strong> <span>{{ setting('datos-personales.website') }}</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Edad:</strong> <span>{{ \Carbon\Carbon::now()->diffInYears($birthday) }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Grado de estudio:</strong> <span>{{ setting('datos-personales.degree') }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ setting('datos-personales.email') }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                        </ul>
                    </div>
                </div>
                {{-- <p>
                    Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                    Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
                </p> --}}
            </div>
            </div>

        </div>
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        @php
            $facts = App\Models\Fact::where('deleted_at', NULL)->get();
            $delay = 0;
        @endphp
        @if (count($facts) > 0)
            <section id="facts" class="facts">
                <div class="container">

                    <div class="section-title">
                        <h2>Datos</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    <div class="row no-gutters">
                        @foreach ($facts as $item)
                            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="{{ $delay }}">
                                <div class="count-box">
                                    <i class="{{ $item->icon }}"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="{{ $item->value }}" data-purecounter-duration="1" class="purecounter"></span>
                                    <p><strong>{{ $item->title }}</strong> <br> {{ $item->subtitle }}</p>
                                </div>
                            </div>
                            @php
                                $delay += 100;
                            @endphp
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
        <!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        @php
            $skills = App\Models\Skill::where('deleted_at', NULL)->get();
            $delay = 0;
        @endphp
        @if (count($skills) > 0)
            <section id="skills" class="skills section-bg">
                <div class="container">

                    <div class="section-title">
                        <h2>Habilidades</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    <div class="row skills-content">
                        @foreach ($skills as $item)
                            <div class="col-lg-6">
                                <div class="progress" data-aos="fade-up" data-aos-delay="{{ $delay }}">
                                    <span class="skill">{{ $item->name}} <i class="val">{{ $item->value }}%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $item->value }}" aria-valuemin="0" aria-valuemax="{{ $item->value }}"></div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $delay += 100;
                            @endphp
                        @endforeach
                    </div>

                </div>
            </section>
        @endif
        <!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
            <h2>Curriculum vitae</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <h3 class="resume-title">Resumen</h3>
                    <div class="resume-item pb-0">
                        <h4>{{ setting('datos-personales.full_name') }}</h4>
                        <p><em>{!! setting('datos-personales.about') !!}</em></p>
                        <ul>
                            <li>{{ setting('datos-personales.address') }}</li>
                            <li>{{ setting('datos-personales.phone') }}</li>
                            <li>{{ setting('datos-personales.email') }}</li>
                        </ul>
                    </div>

                    <h3 class="resume-title">Educación</h3>
                    @php
                        $resumes = App\Models\Resume::where('category', 'educacion')->where('deleted_at', NULL)->get();
                    @endphp
                    @foreach ($resumes as $item)
                        <div class="resume-item">
                            <h4>{{ $item->title }}</h4>
                            <h5>{{ $item->start }} - {{ $item->finish ?? 'Actualidad' }}</h5>
                            <p><em>{{ $item->subtitle }}</em></p>
                            <p>{!! $item->description !!}</p>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Experiencia profesional</h3>
                    @php
                        $resumes = App\Models\Resume::where('category', 'profesion')->where('deleted_at', NULL)->get();
                    @endphp
                    @foreach ($resumes as $item)
                        <div class="resume-item">
                            <h4>{{ $item->title }}</h4>
                            <h5>{{ $item->start }} - {{ $item->finish ?? 'Actualidad' }}</h5>
                            <p><em>{{ $item->subtitle }}</em></p>
                            <p>{!! $item->description !!}</p>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        @php
            $projects = App\Models\Project::where('deleted_at', NULL)->get();
        @endphp
        @if (count($projects) > 0)
            <section id="portfolio" class="portfolio section-bg">
                <div class="container">

                    <div class="section-title">
                        <h2>Proyectos</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    @php
                        $images = [
                            'templates/portfolio_1/img/portfolio/portfolio-1.jpg',
                            'templates/portfolio_1/img/portfolio/portfolio-2.jpg',
                            'templates/portfolio_1/img/portfolio/portfolio-3.jpg',
                            'templates/portfolio_1/img/portfolio/portfolio-4.jpg',
                            'templates/portfolio_1/img/portfolio/portfolio-5.jpg',
                            'templates/portfolio_1/img/portfolio/portfolio-6.jpg',
                            'templates/portfolio_1/img/portfolio/portfolio-7.jpg',
                            'templates/portfolio_1/img/portfolio/portfolio-8.jpg',
                            'templates/portfolio_1/img/portfolio/portfolio-9.jpg'
                        ];
                    @endphp

                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">Todos</li>
                                @foreach ($projects->groupBy('category') as $key =>  $item)
                                <li data-filter=".filter-{{ $key }}">{{ $key }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                        @php
                            $cont = 0;
                        @endphp
                        @foreach ($projects as $item)
                            @php
                            if($item->images){
                                $full_image = asset('storage/'.json_decode($item->images)[0]);
                                $image = asset('storage/'.str_replace('.', '-medium.', json_decode($item->images)[0]));
                            }else{
                                $full_image = $images[$cont];
                                $image = $images[$cont];
                                $cont++;
                            }
                            @endphp
                            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $item->category }}">
                                <div class="portfolio-wrap">
                                    <img src="{{ $image }}" class="img-fluid" alt="">
                                    <div class="portfolio-links">
                                        <a href="{{ $full_image }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Visualizar"><i class="bi bi-zoom-in"></i></a>
                                        <a href="#" title="Más Detalles"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </section>
        @endif
        <!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Servicios</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                @php
                    $services = App\Models\Service::where('deleted_at', NULL)->get();
                @endphp
                @foreach ($services as $item)
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="{{ $delay }}">
                        <div class="icon"><i class="{{ $item->icon }}"></i></div>
                        <h4 class="title"><a href="#">{{ $item->title }}</a></h4>
                        <p class="description">{!! $item->description !!}</p>
                    </div>
                    @php
                        $delay += 100;
                    @endphp
                @endforeach
            </div>

        </div>
        </section><!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        @php
            $customers = App\Models\Customer::where('deleted_at', NULL)->get();
        @endphp
        @if (count($customers))
            <section id="testimonials" class="testimonials section-bg">
                <div class="container">

                    <div class="section-title">
                        <h2>Testimonios</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    @php
                        $images = [
                            'templates/portfolio_1/img/testimonials/testimonials-1.jpg',
                            'templates/portfolio_1/img/testimonials/testimonials-2.jpg',
                            'templates/portfolio_1/img/testimonials/testimonials-3.jpg',
                            'templates/portfolio_1/img/testimonials/testimonials-4.jpg',
                            'templates/portfolio_1/img/testimonials/testimonials-5.jpg'
                        ];
                    @endphp
                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">
                            @php
                                $cont = 0;
                            @endphp
                            @foreach ($customers as $item)
                                @php
                                if($item->photo){
                                    $image = asset('storage/'.str_replace('.', '-cropped.', $item->photo));
                                }else{
                                    $image = $images[$cont];
                                    $cont++;
                                }
                                @endphp
                                <div class="swiper-slide">
                                    <div class="testimonial-item" data-aos="fade-up">
                                        <p>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                                {!! $item->message !!}
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                        <img src="{{ $image }}" class="testimonial-img" alt="">
                                        <h3>{{ $item->full_name }}</h3>
                                        <h4>{{ $item->job }}</h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section>
        @endif
        <!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
            <h2>Contacto</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row" data-aos="fade-in">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Ubicación:</h4>
                        <p>{{ setting('datos-personales.address') }}</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>{{ setting('datos-personales.email') }}</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Lama al:</h4>
                        <p>{{ setting('datos-personales.phone') }}</p>
                    </div>

                    @if (setting('datos-personales.location'))
                        <iframe src="{{ setting('datos-personales.location') }}" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    @endif
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                        <label for="name">Tu Nombre</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="name">Tu Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Asunto</label>
                        <input type="text" class="form-control" name="subject" id="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Mensaje</label>
                        <textarea class="form-control" name="message" rows="10" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
                </form>
            </div>

            </div>

        </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection