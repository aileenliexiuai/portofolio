<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Ai</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('depan')}}/index.css" />
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    
  <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
          

</head>
<body>
    <header class="my-header py-4">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <span class="navbar-brand nama">{{$about->judul }}</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#profile">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#experience">Experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#education">Education</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skills">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#interests">Interests</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#publication">Publication</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#gallery">Artwork</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <main class="container-fluid my-5 justify-content-between">
            <section id="profile" class="card cardgap">  </section>
            <section id="profile" class="card mb-4 profile-card">
                <div class="card-body">
                    <div class="row">
                      <div class="left-column">
                        <div class="photo-frame-container">
                          <span class="d-none d-lg-block photo-frame">
                            <img class="img-fluid img-profile rounded-circle mx-auto mb-2" 
                                src="{{asset('foto'). '/' . get_meta_value('_foto')}}" 
                                alt="profile" />
                          </span>
                        </div>
                      </div>
                      
                        <div class="col-lg-8">
                            <section class="resume-section" id="about">
                                <div class="resume-section-content" href="#page-top">
                                    <h1 class="mb-0" id="aboutjudul">
                                      {{$about->judul}}
                                    </h1>                    
                                    <hr style="border: 0.5px solid #788AA3;">

                                    <div class="subheading mb-5" id= "profile-detail">
                                      {{get_meta_value('_kota')}} | {{get_meta_value('_provinsi')}} <br>
                                      {{get_meta_value('_nohp')}} | <a href="mailto:name@email.com">{{get_meta_value('_email')}}</a>
                                    </div>
                                    <div class="lead mb-5" id="profile-isi">
                                        {!!$about->isi!!}
                                    </div>
                                    <div class="social-icons">
                                        <a class="social-icon" href="{{get_meta_value('_linkedin')}}"><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-icon" href="{{get_meta_value('_github')}}"><i class="fab fa-github"></i></a>
                                        <a class="social-icon" href="{{get_meta_value('_instagram')}}"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>

            <section id="experience" class="card cardgap">  </section>
            <section id="experience" class="card mb-4 experience-card">
                <div class="card-body">
                    <h2 class="card-title">Experience</h2>
                    <hr style="border: 0.5px solid #788AA3;">
                    @foreach ($experience as $item)
                    <div class="d-flex flex-column flex-md-row align-items-start mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-2">{{$item->judul}}</h3>
                            <div class="mb-3">{{$item->info1}}</div>
                            <div>{!!$item->isi!!}</div>
                        </div>
                        <div class="flex-shrink-0 text-md-right mt-md-0 mt-3">
                            <span class="text">{{$item->formatted_started_date}} - {{$item->formatted_end_date}}</span>
                        </div>
                    </div>
                    <hr style="border-top: 2px dotted #788AA3;">
                    @endforeach
                </div>
                
                
                
            </section>

            <section id="education" class="card cardgap">  </section>
            <section id="education" class="card mb-4 education-card">
                <div class="card-body">
                    <h2 class="card-title">Education</h2>
                    <hr style="border: 0.5px solid #788AA3;">
                    @foreach ($education as $item)
                    <div class="d-flex flex-column flex-md-row align-items-start mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{$item->judul}}</h3>
                            <div class="mb-3">{{$item->info1}}</div>
                            <div class="h5">{{$item->info2}}</div>
                            <div class="mb-3">Skill: <br>{{$item->info3}}</div>
                        </div>
                        <div class="flex-shrink-0 text-md-right mt-md-0 mt-3">
                            <span class="textgl text">{{$item->formatted_started_date}} - {{$item->formatted_end_date}}</span>
                        </div>
                    </div>
                    <hr style="border-top: 2px dotted #788AA3;">

                    @endforeach                
                </div>
            </section>
            
            <section id="skills" class="card cardgap">  </section>
            <section id="skills" class="card mb-4 skills-card">
                <div class="card-body">
                    <h2 class="card-title">Skills</h2>
                    <hr style="border: 0.5px solid #B2C9AB;">

                    <div class="skills-category">
                        <div class="subheading mb-3 h4">Programming Languages and Tools Skills</div>
                        <ul class="list-inline skill-list">
                            @foreach (explode(', ', get_meta_value('_language')) as $item)
                            <li class="list-inline-item"><i class="devicon-{{$item}}-plain skill-icon"></i></li>
                            @endforeach
                        </ul>
                    </div>
                    <hr style="border-top: 2px dotted #E8DDB5;">


                    <div class="other-skills">
                        <div class="subheading mb-3 h4">Other Skills</div>
                            {!! get_meta_value('_others') !!}
                    </div>
                </div>
            </section>
            
            
            <section id="interests" class="card cardgap">  </section>
            <section id="interests" class="card mb-4 interests-card">
                <div class="card-body">
                    <div class="interests-section-content">
                        <h2>{{$interest->judul}}</h2>
                        <hr style="border: 0.5px solid #85A0AA;">
                        
                        {!!$interest->isi!!}
                    </div>
                </div>
            </section>

            <section id="publication" class="card cardgap">  </section>
            <section id="publication" class="card mb-4 publication-card">
                <div class="card-body">
                    <h2 class="card-title mb-4">Publications</h2>
                    <hr style="border: 0.5px solid #788AA3;">

                    @foreach ($publication as $item)
                    <div class="publication-item mb-5">
                        <div class="publication-content">
                            <h3 class="publication-title mb-2">{{$item->judul}}</h3>
                            <div class="publication-info mb-2">{{$item->info1}}</div>
                            <div class="publication-link mb-3">
                                <a href="{{$item->info2}}" target="_blank" class="publication-link">{{$item->info2}}</a>
                            </div>
                        </div>
                        <div class="publication-date text-muted text-md-right publication-date-color">
                            {{$item->formatted_started_date}}
                        </div>
                    </div>
                    <hr style="border-top: 2px dotted #788AA3;">

                    @endforeach  
                </div>
            </section>
            
<!--
            <section id="awards" class="card mb-4 awards-card">
                <div class="card-body">
                    <div class="awards-section-content">
                        <h2>{{$awards->judul}}</h2>
                        <hr style="border: 0.5px solid #788AA3;">

                        {!!$awards->isi!!}
                    </div>
                </div>
            </section>
        -->

        <section id="gallery" class="card cardgap">  </section>
        <section id="gallery" class="card mb-4 gallery-card">
            <h2 class="card-title">Artwork</h2>
            <hr style="border: 0.5px solid #85A0AA;">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($galleries as $gallery)
                    <div class="col mb-4">
                        <div class=" cardgmbr"> 
                            <img class="card-img-top gmbrgmbr" src="{{ asset('images/'.$gallery->image_path) }}" alt="{{ $gallery->title }}" style="object-fit: cover; height: 200px;">
                            <div class="card-bodygmbr">
                                <h5 class="card-title">{{ $gallery->title }}</h5>
                                <p class="card-text">{!! $gallery->isi !!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        
        
        
        

        </main>
    </div>
    <footer class="footer py-4 text-center">
        <div class="container">
            <p>&copy; 2024 Aileen Angelica Lee. 2602067810</p>
        </div>
        <div class="illustration float-right">
            <img class="img-fluid mx-auto mb-2" src="{{asset('depan')}}/foto/vector1.png" alt="Ilustrasi">
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{asset('depan')}}/script.js"></script>
    
</body>
</html>