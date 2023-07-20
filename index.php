<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8cb1a094f3.js" crossorigin="anonymous"></script>
    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <link rel="shortcut icon" href="./img/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="./CSS/style.css">
    <script src="https://unpkg.com/scrollreveal"></script>

    


    <title>Etrium - Agilidade Jurídica</title>


    <style>
        .whatsapp {
          position: fixed;
          bottom: 40px;
          width: 60px;
          right: 55px;
          z-index: 999;
          transition: transform 0.3s ease-in-out; /* Adiciona uma transição suave ao efeito */
          opacity: 0.4;
    }   
    
        .whatsapp:hover {
          transform: scale(1.2); /* Aumenta o tamanho do botão em 20% */
          opacity: 1;
    }

</style>

</head>
<body>

   <main>
       <header>
           <nav>
               <div class="container">
                <a href="#">  
                <div class="logo">
                       <img src=".//IMG/ETRIUM logo pronta.png" alt="">
                   </div>
                </a> 
                
                <div class="links">
                    <div class="mobile-menu">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                    <ul class="nav-list">
                        <li>
                            <a href="#Home">Home</a>
                        </li>
                        <li>
                            <a href="#Sobre nós">Sobre nós</a>
                        </li>
                        <li>
                            <a href="#Serviços">Serviços</a>
                        </li>
                        <li>
                            <a href="#Avaliações">Avaliações</a>
                        </li>
                        <li>
                            <a href="#Contato">Contato</a>
                        </li>
                        <li>
                            <a target="_blank" href="https://etrium-front.vercel.app/#/" class="active">Sistema Etrium</a>
                        </li>
                    </ul>
                </div>
            </div>
           </nav>

           <div class="header-content" id="Home">
               <div class="container grid-2">
                   <div class="column-1">
                       <h1 class="header-tittle">Otimize sua rotina
                        jurídica com nosso
                        software especializado!</h1>
                       <p class="text">Traga inovação para sua prática jurídica e supere a
                        concorrência com a ajuda de nossa tecnologia de ponta.
                        </p>
                        <a target="_blank" href="https://etrium-front.vercel.app/#/cadastro" class="btn">Cadastre-se</a>
                   </div>

                   <div class="column-2 img">
                       <img src="./img/img-home.svg" class="img-element" alt="">
                   </div>
               </div>
           </div>
       </header>

       <section class="about section" id="Sobre nós">
           <div class="container">
               <div class="section-header">
                   <h3 class="tittle" data-title="Quem somos?">Sobre nós</h3>
                   <p class="text">Somos um software jurídico criado para ajudar advogados e escritórios de advocacia a otimizar seus processos e aumentar a produtividade.</p>

               </div>


               <div class="cards">
                   <div class="cards-wrap">
                       <div class="card">
                           <div class="card-content">
                               <img src="./IMG/website.png" class="icon" alt="">
                               <h3 class="tittle-sm">Experiência Jurídica</h3>
                               <p class="text">Somos uma equipe de profissionais apaixonados pelo universo jurídico</p>
                               <a href="#" class="btn small">Saiba mais.</a>
                           </div>
                       </div>
                   </div>
                   <div class="card">
                   <div class="cards-wrap">
                    <div class="card-content">
                        <img src="./IMG/main.png" class="icon" alt="">
                        <h3 class="tittle-sm">Resultados </h3>
                        <p class="text">Nossa solução já ajudou dezenas de profissionais do direito a aumentar sua eficiência.</p>
                        <a href="#" class="btn small">Saiba mais.</a>
                   </div>
                    </div>
                </div>
                <div class="card">
                   <div class="cards-wrap">
                    <div class="card-content">
                        <img src="./IMG/settings.png" class="icon" alt="">
                        <h3 class="tittle-sm">Nosso Software</h3>
                        <p class="text">Proporcionamos suporte personalizado para atender às necessidades de cada cliente.</p>
                        <a href="#" class="btn small">Saiba mais.</a>
                   </div>
               </div>
            </div>
               
           </div>
       </section>
       
       <section class="service section" id="Serviços">
           <div class="background-bg"></div>

           <div class="container">
            <div class="section-header2">
                <h3 class="tittle" data-title="O que fazemos?">Nosso serviços</h3>
                <p class="text">Veja quais sãos nosso diferenciais, e o que nos lhe propomos!</p>

                
            </div>
           
            <div class="cards-services">
                 <div class="row">
                    <div class="services-card">
                    <i class="fas fa-laptop-code"></i>
                    <h2>Gerenciamento de Clientes</h2>
                    <p>Centralização de informações e histórico de clientes para melhor atendimento e relacionamento.</p>
                </div>
                <div class="services-card">
                    <i class="fa-solid fa-inbox"></i>
                    <h2>Colaboração e Comunicação</h2>
                    <p>Facilitação da comunicação interna e externa, compartilhamento seguro de documentos e colaboração em equipe.</p>
                </div>
                <div class="services-card">
                    <i class="fa-solid fa-headset"></i>
                    <h2>Suporte integral especializado</h2>
                    <p>Todo suporte necessário para atender todos nossos clientes</p>
                </div>
                <div class="services-card">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <h2>Pesquisa Jurídica mais eficiente</h2>
                    <p>Acesso rápido a informações jurídicas atualizadas e pesquisa avançada em doutrinas e jurisprudências.</p>
                </div>
                <div class="services-card">
                    <i class="fa-solid fa-clipboard"></i>
                    <h2>Agenda e Prazos</h2>
                    <p>Acompanhamento de prazos processuais e gerenciamento de compromissos e audiências.</p>
                </div>
                <div class="services-card">
                    <i class="fa-solid fa-layer-group"></i>
                    <h2>Simplicidade</h2>
                    <p>Sistema de fácil entendimento para facilitar o uso do cliente.</p>
                </div>
                <div class="services-card">
                    <<i class="fa-solid fa-sitemap"></i>
                    <h2>Automação Documental</h2>
                    <p>Criação, armazenamento e gerenciamento automatizado de documentos legais.</p>
                </div>
                <div class="services-card">
                    <i class="fa-solid fa-user-tie"></i>
                    <h2>Gestão de Processos</h2>
                    <p>Controle e organização eficiente de processos judiciais e extrajudiciais.</p>
                </div>

            </div>
        </div>
           </div>


       </section>

       <section class="testemunials section" id="Avaliações">
        <div class="container">
            <div class="section-header">
            <h3 class="tittle" data-title="O que as pessoas falam?">Avaliações</h3>
            <p class="text">Veja também as avalaiações dos nossos clientes!</p>
            </div>
            <div class="testi-content grid-2">
            <div class="columns-1 reviews">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide review">
                            <i class="fas fa-quote-left quote"></i>
                            <div class="rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            
                            <p class="review-text">
                                Sistema bastante útil e fácil de se utilizar!
                            </p>
    
                            <div class="review-info">
                                <h3 class="review-name">Pedro Lucas</h3>
                                <h5 class="review-job">Asvogado - João Pessoa</h5>
                            </div>
                    </div>
                        <div class="swiper-slide review">
                            <i class="fas fa-quote-left quote"></i>
                            <div class="rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            
                            <p class="review-text">
                                Estou impressionado com a eficiência do sistema jurídico! Ele simplificou o gerenciamento dos meus processos, poupando tempo e esforço. Recomendo fortemente para qualquer advogado que queira aumentar sua produtividade.
                            </p>
    
                            <div class="review-info">
                                <h3 class="review-name">Ricardo Oliveira</h3>
                                <h5 class="review-job">Advogado - João Pessoa</h5>
                            </div>
                    </div>
                         <div class="swiper-slide review">
                            <i class="fas fa-quote-left quote"></i>
                            <div class="rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            
                            <p class="review-text">
                                LO software jurídico superou todas as minhas expectativas. Sua interface intuitiva e recursos avançados facilitaram o acompanhamento dos meus casos e a comunicação com meus clientes.
                            </p>
    
                            <div class="review-info">
                                <h3 class="review-name">Silvio Magalhães</h3>
                                <h5 class="review-job">Advogado - João Pessoa</h5>
                            </div>
                    </div>
                         <div class="swiper-slide review">
                            <i class="fas fa-quote-left quote"></i>
                            <div class="rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            
                            <p class="review-text">
                                Como advogado, sempre busco soluções tecnológicas que possam me auxiliar. O sistema jurídico me impressionou com sua robustez e flexibilidade. Agora, posso cuidar de meus clientes de forma mais eficiente, mantendo todos os detalhes importantes ao alcance das mãos.
                            </p>
    
                            <div class="review-info">
                                <h3 class="review-name">Laura Mendes</h3>
                                <h5 class="review-job">Advogada - João Pessoa</h5>
                            </div>
                    </div>
                      </div> 
                     
                    </div>
                </div>
                
                <div class="columns-2 image">
                    <img src="./IMG/testi.png" alt="" class="img-element">
                </div>
            </div>
       </section>

       <section class="contact section" id="Contato">
        <div class="section-header" >
            <h3 class="tittle" data-title="Quer falar conosco?">Contato</h3>
            <p class="text">Está com alguma dúvida?</p>
        </div>
        <div class="container">
            <div class="contact-box">
                <div class="left"></div>
                <div class="right">
                    <h2>Fale Conosco!</h2>
                    <form action="https://formsubmit.co/pedro.lnobrega@gmail.com" method="post">
                    <input type="text" class="field" name="Nome" placeholder="Seu Nome" required>
                    <input type="email" class="field" placeholder="Seu Email" name="Email" required>
                    <input type="tel" class="field" placeholder="Seu Telefone" name="Telefone" maxlength="15" onkeyup="handlePhone(event)" required>
                    <textarea class="field area" placeholder="Sua Mensagem" name="Mensagem"></textarea required >
                    <button type="submit" class="btn-contact">Enviar</button>
                    <input type="hidden" name="_captcha" value="false">

                    
                    
                </form>
                </div>
            </div>
        </div>
       </section>
       <footer>
           <div class="footer-content">
               <h3>Etrium</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam expedita ad sed beatae voluptatem!</p>
               <ul class="sociais">
                   <li><a href=""><i class="fa fa-facebook-square"></i></a></li>
                   <li><a href=""><i class="fa fa-instagram"></i></a></li>
                   <li><a href=""><i class="fa fa-linkedin-square"></i></a></li>
                   <li><a href="https://api.whatsapp.com/send?phone=5583986151110&text=Ola!" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
            </ul>
           </div>
           <div class="footer-bottom">
               <p>Copyright &copy;2022 Etrium.</p>
           </div>

           
       </footer>

       <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=5583986101110&text=Ol%C3%A1,%20quero%20saber%20mais%20sobre%20a%20Etrium!" target="_blank">
        <img src="./img/whatsapp.png" width="50px" alt="Fale conosco pelo WhatsApp" title="Fale conosco pelo WhatsApp"/>
      </a>
      </div>

   </main>
   

</body>
   
    <script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="./JS/main.js"></script>
</html>

