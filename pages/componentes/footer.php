<style>
  #contentFooter {
    bottom: 0%;
    position: fixed;
    width: 100%;
    margin: auto;
    background-color: midnightblue;
    height: 150px;
    display: inline;
  }

  #contentFooter * {
    color: white;

  }

  @media (max-width: 767px) {

    #contentFooter {

      height: 200px;

    }
  }
</style>

<footer class="py-3 my-4">
  <ul class="nav justify-content-center border-bottom pb-3 mb-3">
    <li id="contacto" class="nav-item"><a href="../contacto.php" class="nav-link px-2 text-muted"><label class="labelFooter">Contactanos</label></a></li>
    <li id="planes" class="nav-item"><a href="../planes.php" class="nav-link px-2 text-muted"><label class="labelFooter">Planes</label></a></li>
    <li id="acerca" class="nav-item"><a href="../acerca.php" class="nav-link px-2 text-muted"><label class="labelFooter">Acerca</label></a></li>
    <li id="pf" class="nav-item"><a href="../frecuente.php" class="nav-link px-2 text-muted"><label class="labelFooter">Preguntas Frecuentes</label></a></li>
  </ul>
  <p class="text-center text-muted"><label class="labelFooter">&copy; 2022 RedEmp</label> </p>
</footer>