@extends('templates.welcome')
@section('title', 'Eletrotech')
@section('content')

<header>
      <div class="container">
        <div class="logo">
          <img src="{{ asset('assets/images/eletrotech_favicon.png') }}" width="33%" alt="Logo Eletrotech" />
          <span class="margin">Eletrotech</span>
        </div>
        <nav>
          <ul class="menu">
            <li><a href="#about" class="menu-item">QUEM SOMOS</a></li>
            <li><a href="#services" class="menu-item">NOSSOS SERVIÇOS</a></li>
            <li><a href="{{ route('login') }}" class="menu-item">ADMIN</a></li>
          </ul>
          <a href="#contact" class="btn-primary"
            ><span>FALE CONOSCO!</span></a>
        </nav>
      </div>
    </header>
    <main>
      <section class="s-hero">
        <div class="container">
          <div class="title">
            <h1>Bem-vindo a Empresa<br/><span>Eletrotech</span></h1>
            <h2>Empresa prestadora de serviços com ênfase em qualidade</h2>
            <a href="#services" class="btn-primary empty">Veja nossos Serviços</a>
          </div>
        </div>
      </section>

      <section class="s-success">
        <div class="container">
          <div class="title-success">
            <span class="tag">#EmpresaDeQualidade</span>
            <h2><span> Empresa de Qualidade
            </span><br />Tem  Nome</h2>
          </div>
          <div class="cards">
            <div class="card active">
              <div class="card-title">
                <h3>+50</h3>
              </div>
              <div class="card-info ">
                <p>
                  Placas<strong> eletrônicas </strong> resolvidas
                </p>
              </div>
            </div>

            <div class="card ">
              <div class="card-title">
                <h3>+100</h3>
              </div>
              <div class="card-info">
                <p>
                  Clientes <br />
                  <strong>Satisfeitos </strong>
                </p>
              </div>
            </div>

            <div class="card">
              <div class="card-title">
                <h3>100%</h3>
              </div>
              <div class="card-info">
                <p>
                  De entregas no <br>
                  <strong>prazo</strong>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="about" class="s-about">
        <div class="container">
          <div class="about-me">
            <h2>QUEM SOMOS<span>.</span></h2>
            <p>
             Somos uma empresa criada em 2012 com a finalidade de entregar soluções aos nossos clientes agindo com a transparência. Fundada pelo técnico Ivan Augusto Rodriguez da Silva com mais de 4 anos de experiência na área, <span style="color:aqua">Somos a Eletrotech.</span><br> 
            </p>
            <ul>
              <li>
                <a href="https://www.instagram.com/eletrotech2020/"
                  ><span class="title-icon">Nosso instagram <i class="fa-brands fa-instagram"></i></span></a>
              </li>
            </ul>
          </div>
          <div class="my-picture">
            <img src="{{asset('assets/images/silhouette-confident-businesspeople.jpg')}}" alt="Foto de Perfil" />
          </div>
        </div>
      </section>

      <section id="services" class="s-cases">
        <div class="container">
          <div class="title-cases">
            <h2>Serviços<span>.</span></h2>
          </div>
          <div class="cases">
            <div class="case">
              <img src="{{asset('assets/images/repairing.jpg')}}" alt="Case 1" />
              <span class="color-white">Reparos de Notebooks: formatação e soluções de problemas de software.</span>
            </div>
            <div class="case">
              <img src="{{asset('assets/images/repairing-cel.jpg')}}" class="m" alt="Case 2" />
              <span class="color-white">Reparos de celular: manutenção na placa, formatação, troca de tela e bateria.</span>
            </div>
            <div class="case">
              <img src="{{asset('assets/images/3459428.jpg')}}" alt="Case 3" />
              <span class="color-white">Reparos de televisão: manutenção na placa, troca de leds e troca de tela</span>
            </div>
          </div>
        </div>
      </section>

      <section id="contact" class="s-contact">
        <div class="container">
          <div class="title-contact">
            <h2>
              ENTRE EM <br />
              CONTATO<span>.</span>
            </h2>
            <span class="tag">#LetsGoUp 🚀</span>
          </div>

          <form class="form-contact" method="post" action="">
            <div class="input-group">
              <input type="text" placeholder="Preencha seu nome" required />
            </div>

            <div class="input-group">
              <input type="text" placeholder="Preencha seu nome" required />
            </div>

            <div class="input-group">
              <textarea rows="6" placeholder="Deixe sua mensagem"></textarea>
            </div>
            <div class="input-button">
              <button class="btn-primary" type="submit">ENVIAR</button>
            </div>
          </form>
        </div>
      </section>
    </main>
    <footer>
      <div class="container">
        <div class="copy">
          <p>*Todos os direitos reservados*</p> 
        </div>
      </div>
    </footer>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection