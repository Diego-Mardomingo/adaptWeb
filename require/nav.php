<div class="nav">
  <div class="logo"><a href="https://adapt.es/"><img src="https://adapt.es/img/logo.png" alt="Logo Adapt"></a></div>
  <div class="menu-icon" onclick="toggleMenu()">
    <i class="fa-solid fa-bars"></i>
  </div>
  <div class="list_nav">
    <div class="nav_item"><a href="https://adapt.es/">Inicio</a></div>
    <div class="nav_item"><a href="https://adapt.es/sobre_nosotros/">Sobre Nosotros</a></div>
    <div class="nav_item"><a href="https://adapt.es/formacion">Formación</a></div>
    <!-- <div class="nav_item"><a href="">Blog</a></div> -->
    <div class="nav_item"><a href="https://adapt.es/faqs">FAQs</a></div>
  </div>
</div>


<style>
  @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Montserrat', sans-serif;  }
  
  h1,h2,h3,h4,h5{
    font-family: 'Quicksand', sans-serif;
  }

  .nav {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0px 6px 23px -6px rgba(0, 0, 0, 0.5);
    padding-left: 8em;
    padding-right: 8em;
    position: sticky;
    top: 0;
    width: 100%;
    background-color: #fff;
    z-index: 100;
    height: 10vh;
  }

  .logo>a>img {
    width: 210px;
    margin: 1em;
  }

  .list_nav {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 2.5em;
  }

  .nav_item>a {
    text-decoration: none;
    color: #83A8A7;
    font-size: 1.4em;
    font-weight: 600;
  }

  .nav_item>a:hover {
    color: #A5BDBC;
  }

  .fa-bars {
    cursor: pointer;
    font-size: 2em;
  }

  .menu-icon {
    display: none;
  }

  @media (max-width: 1068px) {

    .list_nav {
      display: none;
      position: absolute;
      border-radius: 5px;
      transition: transform .5s;
      transform: scaleX(0);
      transform-origin: right;
    }
    
    .menu-icon {
      display: flex;
    }
    
    .show-menu {
      display: flex;
      flex-direction: column;
      gap: 1em;
    }
    
    .pos_absolute {
      top: 5em;
      right: 3em;
      background-color: #A5BDBC;
      padding: 2.5em;
      transform: scaleX(1);
      backdrop-filter: blur(20px);
    }

    .pos_absolute>div>a {
      color: #383838;
    }
    .pos_absolute>div>a:hover {
      color: #fff;
    }
  }
</style>

<script>
  function toggleMenu() {
    // var nav_items = document.querySelectorAll('.nav_item');
    // nav_items.forEach(nav_item => {
    //   nav_item.classList.toggle('show-menu');
    // });
    let list_nav = document.querySelector('.list_nav');
    list_nav.classList.toggle('pos_absolute');
    list_nav.classList.toggle('show-menu');

  }
</script>