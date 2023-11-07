<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.8">
  <meta name="description" content="Aproveite as promoções da Autoescola no Black Friday. Descontos imperdíveis em aulas de direção e habilitação, ResultarMind, Desenvolvimento de WebSite, Sistemas, Ferramentas Online.">
<meta name="keywords" content="Autoescola, Black Friday, Promoção, Aulas de Direção, Habilitação, Descontos, Carteira A, Carteira B, Carteira C, Carteira D, Carteira E, CNH, Promoção de Habilitação, Black Friday Autoescola, ResultarMind, Desenvolvimento de WebSite, Sistemas, Ferramentas Online">
  
  <title>BLACK FRIDAY - AUTOESCOLA :: ResultarMind</title>

  <!-- Add a Favicon -->
  <link rel="icon" href="https://resultarmind.cloud/autoescola-eng1/volante-icon.ico" type="image/x-icon">

  <!-- Add CSS for Bootstrap 5.1.3 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

  <!-- Add JavaScript for jQuery 3.6.0 -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Add JavaScript for Bootstrap 5.1.3 (after jQuery) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

  <!-- Add your custom CSS (assuming style.css contains your custom styles) -->
  <link rel="stylesheet" href="style.css">

  <!-- Add Font Awesome CSS (assuming you are using version 5.15.4) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Urbane+Condensed:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    
<!--
<!-- Modal 
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <!-- Container para o novo vídeo do YouTube 
        <div id="youtubeVideo"></div>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function () {
    setTimeout(function () {
      $('#videoModal').modal('show');
    }, 5000); // 5 segundos (5000 ms)

    $('#videoModal').on('show.bs.modal', function () {
      // Quando o modal é exibido, carregue o novo vídeo do YouTube
      $('#youtubeVideo').html('<iframe width="100%" height="600" src="https://www.youtube.com/embed/U3U4ui-y-pE?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>');
    });

    $('#videoModal').on('hide.bs.modal', function () {
      // Quando o modal é fechado, pare o vídeo do YouTube
      $('#youtubeVideo').html('');
    });
  });
</script>
-->

  <div class="middle">
    <h1 class="label">BLACK FRIDAY</h1>
    <div class="time">
      <span>
        <div id="d">00</div>
        Dias
      </span>
      <span>
        <div id="h">00</div>
        Horas
      </span>
      <span>
        <div id="m">00</div>
        Minutos
      </span>
      <span>
        <div id="s">00</div>
        Segundos
      </span>
    </div>
  </div>
</div>


<script>
  // Countdown Clock
  const d = document.getElementById("d");
  const h = document.getElementById("h");
  const m = document.getElementById("m");
  const s = document.getElementById("s");

  function getTrueNumber(num) {
    return num < 10 ? "0" + num : num;
  }

  function calculateRemainingTime() {
    const targetDate = new Date("November 11, 2023 00:00:00");
    const now = new Date();
    const remainingTime = targetDate.getTime() - now.getTime();
    const days = Math.floor(remainingTime / (1000 * 60 * 60 * 24));
    const hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const mins = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
    const secs = Math.floor((remainingTime % (1000 * 60)) / 1000);

    d.innerHTML = getTrueNumber(days);
    h.innerHTML = getTrueNumber(hours);
    m.innerHTML = getTrueNumber(mins);
    s.innerHTML = getTrueNumber(secs);

    return remainingTime;
  }

  function initCountdown() {
    const interval = setInterval(() => {
      const remainingTimeInMs = calculateRemainingTime();

      if (remainingTimeInMs <= 1000) {
        clearInterval(interval);
        initCountdown();
      }
    }, 1000);
  }

  initCountdown();
</script>

<section>
  <div class="container">
      <div class="col-md-12 d-flex align-items-center justify-content-center">
          <img src="https://resultarmind.cloud/autoescola-eng1/logosautoescola.png" alt="" class="img-logo">
      </div>
  </div>
</section>



  <section>
    <div id="ourPlus" class="color-black brilho d-flex align-items-center">
      <div class="blackFridayLogo">
        Black<span class="blackFridayLogo-destaque">Friday</span>
      </div>
      <div id="desconto">
      <span class="blackFridayLogo-destaque">50%</span> DE DESCONTO
      </div>
      <div id="desconto">
        EM ATÉ <span class="blackFridayLogo-destaque">10X</span> NO CARTÃO
      </div>
    </div>
</section>


  <section class="color-black ">
  <div class="container d-flex justify-content-center align-items-center text-center color-black ">
    <div class="row">
      <div class="col-md-12 align-items-center mt-5 style">
        <h1>🚗🌟 BLACK FRIDAY IMPERDÍVEL! 🌟🚗</h1>
        <h2>Entre em contato agora e não perca nossas promoções exclusivas nesta BLACK FRIDAY!</h2>
        <h2 class="edit-color"><strong>APENAS NO MÊS DE NOVEMBRO</strong></h2>
        <h2>Como aproveitar nossa <strong>promoção</strong>?</h2>
        <h4 class="text-with-arrow"><i class="fas fa-arrow-right arrow-animation"></i>   Preencha o formulário com seu nome e a categoria de habilitação desejada. </h4>
<h4 class="text-with-arrow"><i class="fas fa-arrow-right arrow-animation"></i>   É uma oportunidade única para conquistar sua carteira de motorista pela primeira vez!</h4>

<h4 class="text-with-arrow pt-3">Escolha abaixo a categoria desejada e aproveite nossos descontos incríveis!! <i class="fas fa-arrow-down arrow-animation-2"></i></h4>

      </div>
    </div>
  </div>
  </section>



  <section>
  <div class="container text-center">

<div class="row">
  <div class="col-md-2">
    <div class="card mt-3" id="categoria-1">
      <div class="card-body">
        <h2>Categoria A + B</h2>
        <p>Motos e Triciclos + Carros de Passeio</p>
        <i class="fas fa-motorcycle fa-3x"></i>
        <i class="fas fa-car fa-3x"></i>
      </div>
    </div>
  </div>

  <div class="col-md-2">
    <div class="card mt-3" id="categoria-2">
      <div class="card-body">
        <h2>Categoria A</h2>
        <p>Motos e Triciclos</p>
        <i class="fas fa-motorcycle fa-3x"></i>
      </div>
    </div>
</div>

  <div class="col-md-2">
    <div class="card mt-3" id="categoria-6">
      <div class="card-body">
        <h2>Categoria B</h2>
        <p>Carros de Passeio</p>
        <i class="fas fa-car fa-3x"></i>
      </div>
    </div>
    
  </div>
  <div class="col-md-2">
    <div class="card mt-3" id="categoria-4">
      <div class="card-body">
        <h2>Categoria C</h2>
        <p>Veículos de Carga acima de 3.5t</p>
        <i class="fas fa-truck fa-3x"></i>
      </div>
    </div>
  </div>

  <div class="col-md-2">
    <div class="card mt-3" id="categoria-5">
      <div class="card-body">
        <h2>Categoria D</h2>
        <p>Veículos com mais de 8 passageiros</p>
        <i class="fas fa-bus fa-3x"></i>
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="card mt-3" id="categoria-3">
      <div class="card-body">
        <h2>Renovação</h2>
        <p>Renovação ou Reciclagem de CNH</p>
        <i class="fas fa-sync-alt fa-3x"></i>
      </div>
    </div>
  </div>

</div>
    </div>
  </div>
  </div>


  </section>


  <section>

<div class="container">
  <div class="col-md-12 mt-3"> <div class="card2">
  <div class="form-edit" id="form">
    <form action="/" method="post">
      <div class="card-border">
        <h2 class="text-center pt-5">ENTRE EM CONTATO</h2>
      </div>

      <div class="form-row p-5">

        <div class="row">

          <div class="col-md-6">
            <div class="form-group mt-4">
              <label for="nome">Seu nome</label>
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome..">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group mt-4">
              <label for="cidade">Selecione a cidade mais próxima a você</label>
              <select class="form-control" id="cidade" name="cidade">
                <option value="Engenheiro Caldas">Engenheiro Caldas</option>
                <option value="Tarumirim">Tarumirim</option>
                <option value="Itanhomi">Itanhomi</option>
              </select>
            </div>
          </div>

        </div>
        <div class="form-group mt-4">
        <label for="telefone">Telefone para contato</label>
        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone..">
      </div>

      <div class="form-group mt-4">
        <label for="datetime">Melhor data e horário para contato</label>
        <input type="datetime-local" class="form-control" id="datetime" name="datetime">
      </div>

      <div class="form-group mt-4">
        <label for="categoria">Categoria de Habilitação</label>
        <select class="form-control" id="categoria" name="categoria">
          <option value="Categoria A + B" data-card-id="categoria-1">Categoria A + B</option>
          <option value="Categoria A" data-card-id="categoria-2">Categoria A</option>
          <option value="Categoria B" data-card-id="categoria-6">Categoria B</option>
          <option value="Categoria C" data-card-id="categoria-4">Categoria C</option>
          <option value="Categoria D" data-card-id="categoria-5">Categoria D</option>
          <option value="Renovação / Reciclagem" data-card-id="categoria-3">Renovação / Reciclagem</option>
        </select>
      </div>
      <div class="form-group text-center mt-5">
        <button type="submit" class="btn btn-edit">Enviar</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>
</div>
</section>




  <script>
document.addEventListener('DOMContentLoaded', function () {
  const cards = document.querySelectorAll('.card');
  const select = document.getElementById('categoria');
  const formSection = document.getElementById('form'); // Get the form section

  cards.forEach(card => {
    card.addEventListener('click', function () {
      const id = this.getAttribute('id');
      const option = select.querySelector(`option[data-card-id="${id}"]`);

      if (option) {
        option.selected = true;
        console.log(`Selected option with data-card-id "${id}"`);

        // Add the selected-card class to the clicked card
        cards.forEach(card => card.classList.remove('selected-card'));
        this.classList.add('selected-card');

        // Scroll to the form section smoothly
        formSection.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });
});

</script>


<script>
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('form'); // Substitua 'orderForm2' pelo ID correto do seu formulário

  form.addEventListener('submit', function (event) {
    event.preventDefault();

    // Recolha os valores dos campos do formulário
    const nome = document.getElementById('nome').value;
    const cidade = document.querySelector('#cidade').value;
    const telefone = document.getElementById('telefone').value;
    const datetime = document.getElementById('datetime').value;
    const categoria = document.querySelector('#categoria').value;

    // Variável para armazenar o número de telefone do vendedor
    let numeroVendedor;

    // Determine o número de telefone com base na cidade selecionada
    switch (cidade) {
      case 'Engenheiro Caldas':
        numeroVendedor = '+5533997334970'; // Número para Engenheiro Caldas
        break;
      case 'Tarumirim':
        numeroVendedor = '+5533999919237'; // Número para Tarumirim
        break;
      case 'Itanhomi':
        numeroVendedor = '+5533999919237'; // Número para Itanhomi
        break;
      default:
        // Use um número padrão ou lógica adicional, se necessário
        numeroVendedor = '+5533997334970'; // Número padrão
        break;
    }

    // Construa a mensagem para o WhatsApp
    const mensagem = `📃 *ORÇAMENTO:*
👤 *Nome:* ${nome}
----------------------------------------
🏙️ *Cidade:* ${cidade}
📞 *Telefone:* ${telefone}
📅 *Data e Hora que estou disponível:* ${datetime}
🚗 *Habilitação Pretendida:* ${categoria}`;

    // Crie a URL para abrir o WhatsApp com a mensagem preenchida
    const whatsappURL = `https://api.whatsapp.com/send?phone=${numeroVendedor}&text=${encodeURIComponent(mensagem)}`;

    // Abra o WhatsApp em uma nova janela ou guia
    window.open(whatsappURL, '_blank');
  });
});
</script>



<section class="mb-5 mt-5">
  <div class="container">
    <ul class="nav nav-pills nav-justified">
      <li class="nav-item">
        <a class="nav-link active" href="#tab1" data-bs-toggle="tab">
          <i class="bi bi-house"></i> Sobrália
        </a>
      </li>
    </ul>

    <div class="tab-content">
    <div class="tab-pane active text-center" id="tab1">
  <h3>Endereço</h3>
  <p>Avenida Padre João Pina do Amaral - 213- Vila Rainha. Engenheiro Caldas - Minas Gerais.</p>
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d235.4930706670471!2d-42.04399566620433!3d-19.20004421677733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1698676487237!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>



      <div class="tab-pane" id="tab2">
        <h3>Endereço</h3>
        <p>Professor Bernardino Senna, 125 - Centro - Tarumirim, MG</p>
        <p>Telefone para Contato: <a href="https://api.whatsapp.com/send?phone=5533999919237" target="_blank">(33) 9 9991-9237 <i class="fab fa-whatsapp"></i></a></p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d914.7172930939855!2d-42.008676288834316!3d-19.27879815253724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb05c19cf8e3157%3A0xc7222ceff899d2c1!2sR.%20Prof.%20Bernardino%2C%20125%20-%20Tarumirim%2C%20MG%2C%2035140-000!5e0!3m2!1spt-BR!2sbr!4v1698687162301!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="tab-pane" id="tab3">
        <h3>Endereço:</h3>
        <p>Av. JK, 132 - Centro - Itanhomi, MG</p>
        <p>Telefone para Contato: <a href="https://api.whatsapp.com/send?phone=5533999919237" target="_blank">(33) 9 9991-9237 <i class="fab fa-whatsapp"></i></a></p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.5557221088825!2d-41.86600812588791!3d-19.17091521511853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb0f915bc0890dd%3A0x3b6d4e30886dfaa8!2sAv.%20Juscelino%20Kubitscheck%2C%20132%20-%20Itanhomi%2C%20MG%2C%2035120-000!5e0!3m2!1spt-BR!2sbr!4v1698687285063!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>

<hr>

<div class="container d-flex h-100">
  <div class="row align-self-center w-100">
    <footer class="text-center">
      <p>Site criado por Resultar Mind. Visite-nos em <a href="https://resultarmind.com.br/landpage/" target="_blank">resultarmind.com.br</a></p>
    </footer>
  </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
