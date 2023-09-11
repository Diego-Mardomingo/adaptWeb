<div class="nav">
  <div class="logo"><a href="https://adapt.es/"><img src="https://adapt.es/img/logo.png" alt="Logo Adapt"></a></div>
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
*{
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: 'Quicksand', sans-serif;
}
.nav{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  box-shadow: 0px 6px 23px -6px rgba(0,0,0,0.5);
  padding-left: 8em;
  padding-right: 8em;
  position: sticky;
  top: 0;
  width: 100%;
  background-color: #fff;
  z-index: 100;
  height: 10vh;
}
.logo > a > img{
  width: 210px;
  margin: 1em;
}
.list_nav{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  gap: 2.5em;
}
.nav_item > a{
  text-decoration: none;
  color: #83A8A7;
  font-size: 1.4em;
  font-weight: 600;
}
.nav_item > a:hover{
  color: #A5BDBC;
}

</style>