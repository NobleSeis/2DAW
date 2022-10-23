<?php require('../templates/header.php'); ?>

<nav class="mb-5" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb bg-light p-3">
    <li class="breadcrumb-item"><a href="../inicio.php">Inicio</a></li>
    <li class="breadcrumb-item active">Actividad 1</li>
  </ol>
</nav>

<h3 class="mb-4">Respondiendo preguntas sobre tecnologías web</h3>
<div class="container-fluid mt-5">
  <ul class="nav nav-tabs px-5 row">
    <li class="nav-item col-sm-12 col-md-3">
      <a class="nav-link active text-dark" data-bs-toggle="tab" href="#actividad1">Actividad A</a>
    </li>
    <li class="nav-item col-sm-12 col-md-3">
      <a class="nav-link text-dark" data-bs-toggle="tab" href="#actividad2">Actividad B</a>
    </li>
    <li class="nav-item col-sm-12 col-md-3">
      <a class="nav-link text-dark" data-bs-toggle="tab" href="#actividad3">Actividad C</a>
    </li>
    <li class="nav-item col-sm-12 col-md-3">
      <a class="nav-link text-dark" data-bs-toggle="tab" href="#actividad4">Actividad D</a>
    </li>
  </ul>
</div>
<div class="tab-content my-4">
  <!-- Actividad 1 -->
  <div class="tab-pane container active" id="actividad1">
    <h5 class="my-4 bg-dark p-5 text-white rounded">
      Explica las diferencias entre un desarrollador front-end, back-end y
      full-stack.
    </h5>
    <dl>
      <dt>Desarrollador front-end</dt>
      <dd>
        Un desarrollador front-end se dedica principalmente a desarrollar los
        componentes y lógica visible de las aplicaciones, es decir trabajan en
        el lado del cliente.
      </dd>
      <dt>Desarrollador back-end</dt>
      <dd>
        El desarrollador back-end es el que se encarga de toda la lógica que hay
        en la parte no visible, es decir, se encarga de realizar las consultas a
        la base de datos, provee de servicios que serán usados por los
        desarrolladores front-end, y se especializan en lenguajes del lado del
        servidor, como por ejemplo PHP, Python, Java...
      </dd>
      <dt>Desarrollador full-stack</dt>
      <dd>
        El desarrollador full-stack, es la unión de los dos roles anteriores, es
        decir, son capaces de encargarse tanto del lado del cliente como del
        lado del servidor.
      </dd>
    </dl>
  </div>

  <!-- Actividad 2 -->
  <div class="tab-pane container fade" id="actividad2">
    <h5 class="my-4 bg-dark p-5 text-white rounded">
      ¿Qué es un framework CSS? ¿Qué es Bootstrap? ¿Qué es Tailwind CSS? ¿En qué
      se diferencian?
    </h5>
    <dl>
      <dt>Framework CSS</dt>
      <dd>
        Un framework de CSS es una biblioteca de estilos genéricos que puede ser
        usada para implementar diseños web. Aportan una serie de utilidades que
        pueden ser aprovechadas frecuentemente en los distintos diseños web.
      </dd>
      <dt>Bootstrap:</dt>
      <dd>
        - Es un framework CSS, de hecho es el framework de CSS más popular y el
        segundo proyecto más destacado en GitHub. Contiene plantillas de diseño
        con tipografía, formularios, botones, cuadros, menús de navegación y
        otros elementos de diseño basado en HTML y CSS, así como extensiones de
        JavaScript adicionales.
      </dd>

      <dt>TailwindCSS:</dt>
      <dd>
        - También es un framework CSS como bootstrap, su principal
        característica es que, a diferencia de otras como Bootstrap, no genera
        una serie de clases predefinidas para elementos como botones o tablas.
        En su lugar, crea una lista de clases CSS "de utilidad" que se pueden
        usar para dar estilos individuales a cada elemento.
      </dd>
    </dl>
  </div>

  <!-- Actividad 3 -->
  <div class="tab-pane container fade" id="actividad3">
    <h5 class="my-4 bg-dark p-5 text-white rounded">
      ¿Qué es WCAG? ¿Por qué es tan importante validar en XHTML, CSS y WCAG 2.1
      AAA?
    </h5>
    <p>
      <span class="fw-bold">WCAG</span> (Web Content Accessibility Guidelines)
      son un conjunto de recomendaciones para crear contenidos web mas
      accesibles, principalmente para personas con discapacidad.
    </p>
    <p>
      El principal motivo para validar nuestras páginas es asegurarnos que
      cumplen con las normas establecidas por los organismos que regulan las
      tecnologías web, como por ejemplo el W3C, ya que de esta forma nuestro
      contenido podrá ser visualizado en y por el mayor número de dispositivos y
      personas posibles.
    </p>
  </div>

  <!-- Actividad 4 -->
  <div class="tab-pane container fade" id="actividad4">
    <h5 class="my-4 bg-dark p-5 text-white rounded">
      Explica con tus propias palabras qué es un servidor web, qué es el
      protocolo HTTP, busca ejemplos donde se ejecuten los métodos HTTP GET y
      POST y explica qué es Apache y qué es XAMPP.
    </h5>
    <dl>
      <dt>Servidor web</dt>
      <dd>
        Un servidor web es una máquina o aplicación a la cual se conecta un
        cliente para obtener una página web, ya sea procesada por el servidor o
        estática.
      </dd>
      <dt>Protocolo HTTP</dt>
      <dd>
        Hyper Text Transfer Protocol. Es el protocolo mediante el cuál un
        cliente web se comunica con un servidor web.
      </dd>
      <dt>Apache</dt>
      <dd>
        Apache es un servidor web de código abierto. Está desarrollado y
        mantenido por la Apache Software Fundation.
      </dd>
      <dt>XAMPP</dt>
      <dd>
        XAMPP es un acronimo de X, Apache, MariaDB/MySQL, PHP, Perl. Es un stack
        que te proporciona en un paquete la instalación de los principales
        servicios que necesitas para empezar con el desarrollo de aplicaciones
        web.
      </dd>
    </dl>
  </div>
</div>
<?php require('../templates/footer.php'); ?>