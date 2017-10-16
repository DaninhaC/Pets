<!--

-->
<!DOCTYPE html>
<html>
    <head>
        <title>SOLUTIONS CONSULTORIA AMBIENTAL</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
      <div id="container">
          <?php include("includes/header.php");?>
          <script type="text/javascript">
var imageCount = 0;
var currentImage = 0;
var images = new Array();

images[0] = 'images/banner4.jpg';
images[1] = 'images/images/bckg.jpg';


var preLoadImages = new Array();
for (var i = 0; i < images.length; i++)
{
   if (images[i] == "")
      break;

   preLoadImages[i] = new Image();
   preLoadImages[i].src = images[i];
   imageCount++;
}

function startSlideShow()
{
   if (document.body && imageCount > 0)
   {
      document.body.style.backgroundImage = "url("+images[currentImage]+")";
      document.body.style.backgroundAttachment = "fixed";
      document.body.style.backgroundRepeat = "repeat";
      document.body.style.backgroundPosition = "left top";

      currentImage = currentImage + 1;
      if (currentImage > (imageCount-1))
      {
         currentImage = 0;
      }
      setTimeout('startSlideShow()', 1500);
   }
}
startSlideShow();
</script>
           <div class="d"><b>Bem - Vindo(a) à SOLUTIONS TECNOLOGIAS AMBIENTAIS!</b></label></p>
        <div id="conteudo" align="center">
          <div id="parceiros" >

           <br/>  <br/>
          <a href="http://www.inema.ba.gov.br/"><img src="images/inema.JPG" width="195" height="76" border="0" target="_blank"></a><br/>
          <a href="http://www.ibama.gov.br/"><img src="images/ibama2.png" width="195" height="100" border="0"target="_blank"></a><br/>
          <a href="https://www.sosma.org.br/"><img src="images/sos.JPG" width="195" height="100" border="0"target="_blank"> </a><br/>
          <a href="http://www.tamar.org.br/"><img src="images/tamar.jpg" width="141" height="168" border="0"target="_blank"> </a><br/>
          <a href="http://www.cetesb.sp.gov.br/"><img src="images/cetesb.JPG" width="195" height="98" border="0"target="_blank"> </a><br/>
          <a href="http://www.geotecbr.com.br/site/home/"><img src="images/geotec.JPG" width="165" height="70" border="0"target="_blank"> </a><br/>
          <a href="http://www.mma.gov.br/"><img src="images/minis.jpg" width="195" height="100" border="0" target="_blank"> </a><br/>
          </div>
          <div id="cont"class="a" >
          <br/> <br/>
                  <p align="justify">&nbsp;&nbsp;A <b>SOLUTIONS TECNOLOGIAS AMBIENTAIS</b> é especializada em licenciamento, auditoria,<br/><br/>
                  &nbsp;&nbsp;engenharia,diagnóstico,remediação e recuperação de áreas degradadas.Formada por uma equipe<br/><br/>
                  &nbsp;&nbsp;multidisciplinar de profissionais com sólido conhecimento técnico e ampla experiência em<br/><br/>
                  &nbsp;&nbsp;projetos em todo o Brasil,atua nos mais diversos setores da economia, auxiliando indústrias,<br/> <br/>
                  &nbsp;&nbsp;empresas e organizações a lidarem com suas questões ambientais de forma eficiente,<br/> <br/>
                  &nbsp;&nbsp;sustentável,transparente e responsável.Oferecemos também produtos de qualidade e que trazem<br/> <br/>
                  &nbsp;&nbsp; valores ambientais que são cada vez mais necessários no nosso cotidiano.</p><br/><br/>
                 <fieldset style="border-style:none">
                  <legend> O que procura?</legend>
                  <select name="opcoes">
                      <option selected> </option>
                      <option value="1">Comprar Produtos</option>
                      <option value="2">Comprar Serviços</option>
                    </select>
                 </fieldset>
                 <br/>

          </div> <!-- right -->
        </div> <!-- conteudo -->
        <br/>
         <br/>
          <br/>
            <br/>
          <div align="center">
                  <p><img src="images/produtos.JPG" width="530" height="132" border="0"></p> <br/>
                  <p><img src="images/img.JPG" width="385" height="158"/>
                  <img src="images/img2.JPG" width="385" height="158"/></p>

          </div>

     </div> <!-- container -->
     <br/>
            <br/>
      <?php include("includes/footer.php");?>
   </body>
</html>

