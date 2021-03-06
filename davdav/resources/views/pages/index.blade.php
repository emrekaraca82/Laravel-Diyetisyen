<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <title>{{config('app.name','Davdav|Diyetisyenlik')}}</title> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
        <link href="{{asset('styles/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/plugins/OwlCarousel2-2.2.1/animate.css')}}">                       
        <link rel="stylesheet" href="{{asset('styles/main_styles.css')}}" />
        <link rel="stylesheet" href="{{asset('styles/responsive.css')}}" />
        <link rel="stylesheet" href="{{asset('styles/default-theme.css')}}" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.css'>
    </head>
    <body>
            <div class="super_container">
                    <!-- Menu -->
                    <div class="menu trans_500">
                        <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
                            <div class="menu_close_container"><div class="menu_close"></div></div>			
                            <ul>
                                <li class="menu_item"><a href="/index">Anasayfa</a></li>
                                <li class="menu_item"><a href="/about">Hakkinda</a></li>
                                <li class="menu_item"><a href="/services">Hizmetler</a></li>
                                <li class="menu_item"><a href="/diyet">Online Diyet</a></li>
                                <li class="menu_item"><a href="/tarif">Diyet Tarifleri</a></li>
                                <li class="menu_item"><a href="/blog">Ay??e'nin K????esi</a></li>
                                <li class="menu_item"><a href="/contact">??leti??im</a></li>
                            </ul>
                        </div>
                        <div class="menu_social">
                            <ul>
                                <li><a href="https://www.facebook.com/Diyetisyen-Ay%C5%9Fe-Davdav-727095737654678/" target="_blank"><i style="font-size:26px;" class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/dyt_aysedavdav/" target="_blank"><i style="font-size:26px;" class="fab fa-instagram" aria-hidden="true"></i></a></li>	
                                <li><a href="https://mail.google.com/mail/" target="_blank"><i style="font-size:26px;" class="fa fa-envelope" aria-hidden="true"></i></a></li>					
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Home -->
                
                    <div class="home">
                        <div class="background_image" style="background-image:url(images/3.png)"></div>
                        <!-- Header -->
                        <header class="header" id="header">
                            <div>
                                <div class="header_top">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <div class="header_top_content d-flex flex-row align-items-center justify-content-start">									
                                                    <div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
                                                        <div class="header_top_whatsapp">
                                                            <i class="fab fa-whatsapp"></i>
                                                            <span>0544 713 68 50</span>							
                                                </div>
                                                        
                                                <div class="header_top_instgram">
                                                            <i class="fab fa-instagram"></i>
                                                        <a href="https://www.instagram.com/dyt_aysedavdav/" target="_blank" alt="Elbistan diyetisyen ay??e davdav"> <span>dyt_aysedavdav</span> </a>
                                                </div>
                                                        
                                                <div class="header_top_facebook">
                                                            <i class="fab fa-facebook-square"></i>
                                                            <a href="https://www.facebook.com/Diyetisyen-Ay%C5%9Fe-Davdav-727095737654678/"  target="_blank" alt="Elbistan diyetisyen ay??e davdav"> <span>Diyetisyen Ay??e Davdav</span> </a>
                                                </div>
                                                        
                                                <div class="header_top_gmail">
                                                            <i class="fa fa-envelope"></i>
                                                            <a href="https://mail.google.com/mail/" target="_blank" alt="Elbistan diyetisyen ay??e davdav"> <span>dytaysedavdav@gmail.com</span> </a>
                                                </div>
                                                                                
                                                    </div>
                                                    <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header_nav" id="header_nav_pin">
                                    <div class="header_nav_inner">
                                        <div class="header_nav_container">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
                                                            <nav class="main_nav">
                                                                <ul class="d-flex flex-row align-items-center justify-content-start">
                                                                    <li><a href="/index">Anasayfa</a></li>
                                                                    <li><a href="/about">Hakkinda</a></li>
                                                                    <li><a href="/services">Hizmetler</a></li>
                                                                    <li><a href="/diyet">Online Diyet</a></li>
                                                                    <li><a href="/tarif">Diyet Tarifleri</a></li>
                                                                    <li><a href="/blog">Ay??e'nin K????esi</a></li>
                                                                    <li><a href="/contact">??leti??im</a></li>
                                                                </ul>
                                                            </nav>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </div>
                        </header>		
                    </div>
                
	<div class="services">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1 class="section_h2">Hizmetlerimiz</h1>					
                    </div>
                </div>
                
                <div class="row icon_boxes_row">			
                    <!-- Icon Box -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="icon_box">
                            <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                                <i style="font-size:20px; color:#eb613a" class="fas fa-apple-alt"></i>
                                <div class="icon_box_title">Zay??flama</div>
                            </div>
                            <div class="icon_box_text">Zay??flamak i??in en do??ru ve kesin ????z??m,Sa??l??kl?? beslenme kurallar??n?? ????renmek.</div>
                        </div>
                    </div>
    
                    <!-- Icon Box -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="icon_box">
                            <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                                <i style="font-size:20px; color:#eb613a" class="fas fa-hamburger"></i>
                                <div class="icon_box_title">Kilo Alma</div>
                            </div>
                            <div class="icon_box_text">Sagl??kl?? ve d??zenli ??ekilde kilo almak i??in uzmanlara ba??vurulmal??d??r.</div>
                        </div>
                    </div>
    
                    <!-- Icon Box -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="icon_box">
                            <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                                <i style="font-size:20px; color:#eb613a" class="far fa-heart"></i>
                                <div class="icon_box_title">Hamilelik D??neminde Beslenme</div>
                            </div>
                            <div class="icon_box_text">Hamilelik d??neminde iyi beslenmenin,Yollar?? hangi g??dalar?? yenilmeli hangi g??dalardan ka????nmal??y??z.</div>
                            </div>
                        </div>
                    
    
                    <!-- Icon Box -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="icon_box">
                            <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                                <i style="font-size:20px; color:#eb613a" class="fas fa-pizza-slice"></i>
                                <div class="icon_box_title">Ergenlik D??neminde Beslenme</div>
                            </div>
                            <div class="icon_box_text">Ergenlik d??neminde gen??lerin yeterli ve sagl??kl?? beslenmeleri b??y??me ve geli??me h??zland?????? i??in ??nem arz ediyor.</div>
                        </div>
                    </div>
    
                    <!-- Icon Box -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="icon_box">
                            <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                                <i style="font-size:20px; color:#eb613a" class="fas fa-stethoscope"></i>
                                <div class="icon_box_title">V??c??t Analizi</div>
                            </div>
                            <div class="icon_box_text">V??cut analizi v??cutdaki kas,ya?? k??tlesi,kas k??tlesi,metabolizma ya????n??z,obezite derecesi,ideal kilonuz ??l??en cihazd??r.</div>
                        </div>
                    </div>
    
                    <!-- Icon Box -->
                    <div class="col-xl-4 col-lg-6">
                        <div class="icon_box">
                            <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
                                <i style="font-size:20px; color:#eb613a" class="fas fa-cheese"></i>
                                <div class="icon_box_title">Diyabet</div>
                            </div>
                            <div class="icon_box_text">Diyabet bir metabolizma hastal??????d??r. Kan ??ekerinin y??kselmesine diyabet ad?? verilir.Nellere dikkat etmeliyiz nas??l beslenmeliyiz.  </div>
                        </div>
                    </div>
    
                </div>
                <div class="row">
                    <div class="col">
                        <div class="button services_button ml-auto mr-auto"><a href="/davdav/public/services"><span>Devam??</span><span>Devam??</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    
        
        <!-- CTA -->
    <div class="cta">
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/cta.jpg" data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="cta_container d-flex flex-xl-row flex-column align-items-xl-start align-items-center justify-content-xl-start justify-content-center">
                            <div class="cta_content text-xl-left text-center">
                                <div class="cta_title"> Online Randevu Ve Daha Fazla Bilgi ????in Bizimle ??leti??ime Ge??iniz </div>							
                            </div>
                            <div class="button cta_button ml-xl-auto"><a href="/davdav/public/contact"><span>T??klay??n??z</span><span>T??klay??n??z</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- Info Boxes -->
        <div style="background: white;"  class="info">
                <h1 class="info_h1"> TAR??FLER </h1>
                    <div class="container">
                        <div class="row row-eq-height">		
                                        <!-- Info Box -->
                            <div class="col-lg-12 info_box_col">
                            <div class="row row-eq-height">				
                                    @foreach($sayfalar as $sayfa) 
                            <div style="margin-bottom:10px; margin-top:15px;" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">							 
                                <div class="card">					
                                    <div class="card-body"><img style="width:100%;height:120px; " src="/storage/cover_image/{{$sayfa->cover_image}}"></div>
                                    <div style="color:#ff5722;" class="card-header text-center">{{$sayfa->sayfa_adi}}</div>
                                    <div class="card-footer">                              				
                                            <a href="/sayfalar/{{$sayfa->sayfa_id}}"> <p class="btn btn-success" style="float:right;">Devam??n?? Oku ??</p></a>					
                                            </div> 
                                </div>
                            </div> 
                            @endforeach        
                            
                            </div>		
                         </div>
                     </div>
                 </div>
               </div>

<!-- Start Client Testimonial section -->
<section id="mu-client-testimonial">
    <div class="mu-overlay">
      <div class="container">
	  <div class="section-title text-black">			
				<h2 style="color:#e1b662;">Sizden Gelenler</h2>
			</div>	
        <div class="row">
          <div class="col-md-12">
            <div class="mu-client-testimonial-area">
            
              <!-- testimonial content -->
              <div class="mu-testimonial-content">
                <!-- testimonial slider -->
                <ul class="mu-testimonial-slider">
                  <li>
                    <div class="mu-testimonial-single"> 
					
					<div class="mu-testimonial-bio">
					 
                        <p> <img src="images/user.png" style="border-radius:100px;  margin-top:10px; margin-left:20px; height:120px; width:150px; background:transparent;" alt="elbistan-beyran">H??seyin Ar </p>                      
                    </div>	
					
                    <div class="mu-testimonial-info">
                        <p>Asl??nda ??ok fazla yoruma gerek yok desem yeridir,Mercimek ??orbas?? m??thi??, Farkl?? bir lezzeti var  </p>
                    </div>
                     
                    </div>
                  </li>
				  
                   <li>				   
                    <div class="mu-testimonial-single">  
						<div class="mu-testimonial-bio">
                        <p> <img src="images/user.png" style="border-radius:100px;  margin-top:10px; margin-left:20px; height:120px; width:150px; background:transparent;" alt="elbistan-beyran">Yunus Karaca </p>                                        
                      
					  </div>					
                      <div class="mu-testimonial-info">
                        <p>Gerek beyran gerekse pa??a ikisi de m??kemmel yaln??z ak??am her zaman siyah pa??a olmuyor bir y??ld??z?? ondan k??rd??m</p>                     
					  </div>                  
                    </div>
                  </li>
				  
                   <li>
                    <div class="mu-testimonial-single"> 
						<div class="mu-testimonial-bio">
                        <p> <img src="images/user.png" style="border-radius:100px;  margin-top:10px; margin-left:20px; height:120px; width:150px; background:transparent;" alt="elbistan-beyran">Erdem Y??ld??r??m </p>                                        
                                          
                      </div>					
                      <div class="mu-testimonial-info">
                        <p>Masaya serdikleri ikramlara ayr??ca de??inmek gerek, Aile'niz ile gidilecek nezih bir mekan tavsiye ederim...<p>
                      </div>
                     
                    </div>
                  </li>
				  
				  <li>
                    <div class="mu-testimonial-single"> 
					<div class="mu-testimonial-bio">
                        <p> <img src="images/user.png" style="border-radius:100px;  margin-top:10px; margin-left:20px; height:120px; width:150px; background:transparent;" alt="elbistan-beyran">K??r??at Y??lmaz </p>                                                                                  
                     </div>					
                    <div class="mu-testimonial-info">
                        <p>Kendi ??zel ??orbas?? yan??nda getirdi??i bolca ye??illik ??ok g??zel,Tad??na bak??lacak bir mekan...<p>
                    </div>
                     
                    </div>
                  </li>
				  
				  
				  <li>
                    <div class="mu-testimonial-single"> 
					<div class="mu-testimonial-bio">
                        <p> <img src="images/user.png" style="  background:transparent;  width: 14%; float: left; border: 2px solid #F44336;  -webkit-border-radius: 50%;  -moz-border-radius: 50%;  -o-border-radius: 50%;  -ms-border-radius: 50%; border-radius: 50%;  padding: 5px; " alt="elbistan-beyran">Cihangir Emre Bilici </p>                                                                                
                    </div>
					
                    <div class="mu-testimonial-info">
                        <p>On numara elbistanda ??orba denince akl??ma elbistan beyran  pa??a salonu geliyor... <p>
                    </div>
                     
                    </div>
                  </li>
				  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Client Testimonial section -->
</div>        

        <div style="background:#f4f8fb; margin-bottom:-20px;"  class="info">
            <h1 style="margin-top:-60px; margin-bottom:30px;" class="info_h1"> ??NSTAGRAM PAYLA??IMLARI </h1>
                <div class="container">
                <!-- Info Box -->
                    <div class="row">
                        <div class="carousel-inner">							
                            <div class="item active">							                              
								<div class="insta-grid" > </div>
                            </div>
                        </div>                              
                    </div>         
                </div>
        </div>

            <!-- FAQ & News -->
 
            
            @include('inc/footer')
 

        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
        <script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
        <script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>            
        <script src="{{asset('plugins/easing/easing.js')}}"></script>
        <script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
        <script src="{{asset('js/index.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>                  
        <script src='https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/es6-promise/4.1.0/es6-promise.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js'></script>  
        <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>   
       
       
    </body>
</html>