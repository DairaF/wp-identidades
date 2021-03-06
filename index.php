<?php get_header(); ?>
<!-- <body onload="tagsActive()" > -->
    <script>
          const tagsActive = () => {
        tagActive('identificacion');
        tagActive('salud');
        tagActive('reparacion');
        tagActive('participacion');
        tagActive('datos');
        tagActive('violencias');
      }
      const tagActive = (tag) =>{
        let url = window.location.href;
        if(url.indexOf(tag) == -1){
          document.getElementById(tag).classList.remove('active');
        }else{
          document.getElementById(tag).classList.add('active');
        }
      }
        const setTag = (tag) =>{
            let url = window.location.href;
            if(url.indexOf(tag) == -1){
                if (url.indexOf('?') == -1){
                    nextURL = window.location+"?"+tag+"="+tag;
					          window.history.replaceState("nextState", "nextTitle", nextURL);
                }
                else{
                    nextURL = window.location+"&"+tag+"="+tag;
					          window.history.replaceState("nextState", "nextTitle", nextURL);
                }
              document.getElementById(tag).classList.add('active');
            }else{
                if(url.indexOf(`/?${tag}`) == -1){
                  nextURL = url.replace(`&${tag}=${tag}`,'');
                  window.history.replaceState("nextState", "nextTitle", nextURL);
                }else{
                  nextURL = url.replace(`/?${tag}=${tag}`,'/?');
					        window.history.replaceState("nextState", "nextTitle", nextURL);
                }
              document.getElementById(tag).classList.remove('active');
            }
        }
    </script>
    <?php get_header(); ?>

    <section class="bggrad4col intro border-b-b ">
			<div class="container">
				<div class="row">
					<div class="col-12 pt-5">				
						<h1 class="text-left text-lg-center">Identidades<br>informadas</h1>
					</div>
				</div>
				<div class="row justify-content-lg-center">
					<div class="col-12 col-lg-8 col-xl-7 pt-4 pt-lg-5">				
						<p class="text-left text-lg-center ">Una plataforma informativa sobre la Ley de Identidad de G??nero, con material clave para planificar y dise??ar pol??ticas p??blicas que avancen en la conquista de derechos para las personas trans, travestis y no binarias. La iniciativa nace con el objetivo de recuperar sus demandas y sus luchas por la identidad como derecho humano.            </p>
					</div>
				</div>
				<div class="row justify-content-lg-center">	
					<div class="col-12 col-lg-8 col-xl-5 pt-4 pt-lg-5 pb-4 pb-lg-5">				
						<ul class="tagContainer justify-content-lg-center">
              <li class="tag"><a id="identificacion" onClick="setTag('identificacion')" href="">Identificaci??n</a></li>
							<li class="tag"><a id="salud" onClick="setTag('salud')" href="">Salud integral</a></li>
							<li class="tag"><a id="reparacion" onClick="setTag('reparacion')" href="">Reparaci??n</a></li>
							<li class="tag"><a id="participacion" onClick="setTag('participacion')" href="">Participaci??n</a></li>
							<li class="tag"><a id="datos" onClick="setTag('datos')" href="">Datos</a></li>
							<li class="tag"><a id="violencias" onClick="setTag('violencias')" href="">Violencias</a></li>

						</ul>
						
					</div>
				</div>
      </div>
      
    <!-- POSTS CON TAGS -->



    
      <?php 
    $url=$_SERVER['REQUEST_URI'];

    $url_components = parse_url($url);
    parse_str($url_components['query'], $params);
    $selectedTag = $params;
    $loop = new WP_Query( array( 
              'post_type' => array('actualidad','jurisprudencia','aplicacion'), 
                
                'tag' => $selectedTag,
                'posts_per_page' => 1000 ,
				'orderby' => 'tag', 
                'order' => 'ASC'
                ) ); 

        if($selectedTag != null):  ?>
         
        <div class="container-fluid  ">
          <div class="row justify-content-center">
            <div class="c-relacionadas"> 
        <?php while ( $loop->have_posts() ) : $loop->the_post(); 
      ?>
      <!-- CARD -->
        <div class="">
          <?php $categories = get_the_category(); 
            $categ; 
            $categName;
            if ($categories) {
              foreach($categories as $cat) {
                $categName = $cat->name;
                $categ = $cat->slug;
              }
            }
          ?>
          <a href="<?php if($categName=='Actualidad'){the_field('link_nota');}else{the_permalink();}?>" target="blank" class="card" style="background-image:url('<?php the_field('foto') ?>'); background-repeat:no-repeat; background-size:cover; background-position:center center;">
            <div class="card-body <?php 
                if($categName =='Aplicacion'){ echo('aplicacion');} 
                else if($categName =='Jurisprudencia'){ echo('jurisprudencia');} 
                else if($categName =='Actualidad'){ echo('actualidad');} 
                else if($categName =='Normativa'){ echo('normativa');} 
             ?>">
              <h4 class="card-title mb-3 d-block"><?php the_title(); ?></h4>
              <div class="d-flex align-items-center justify-content-between">
                <p class="cardTag" style="color:<?php if($categName =='Actualidad'){ echo('#efb9e0');}else{echo('#a39cef');} ?>"><?php echo($categName) ?></p>
                <p class="cardDate mb-0"><?php the_date(); ?></p>
              </div>
            </div>
          </a>					
        </div>
      <!-- /CARD -->
		
    <?php endwhile; ?>
        </div>
      </div>
      </div>
    </section>
  <?php endif; ?>
    
		<section class="bggradGray border-b-b ">
			<div class="container">
				<div class="row">		
					<div class="col-12 pt-5">		
					<h2 class="text-left text-lg-center">Explor?? a fondo la Ley de Identidad de G??nero <br class="d-none d-lg-block">de la mano de <span class="highlight gradiente4">especialistas.</span></h2>
					</div>
					<div class="col-12 py-4 d-none d-lg-block text-center">		
						<video autoplay loop muted>
							<source src="https://identidadesinformadas.fund.ar/wp-content/uploads/2022/05/desktop1.mp4" type="video/mp4"> 
						</video>
					</div>
					<div class="col-12 py-4 d-block d-lg-none ">		
						<video autoplay loop muted class="img-fluid">
							<source src="https://identidadesinformadas.fund.ar/wp-content/uploads/2022/05/mobile1.mp4" type="video/mp4"> 
						</video>
					</div>
					<div class="col-12 pb-5 text-left text-lg-center mt-5">		
						<a target="blank" href="https://debatesparlamentarios.fund.ar/identidaddegenero" class="btn btnBlack">Ver Ley comentada</a>
					</div>
				</div>
      </div>				
    </section>
		
<?php include_once('menuBottom.php'); ?>

<?php get_footer(); ?>