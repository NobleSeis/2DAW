<?php
require '../templates/header.php';
?>
<h1 class="display-4 text-center bg-dark text-white rounded p-4 mb-4">Actividad 1</h1>

<h3 class="mb-4">Respondiendo preguntas sobre tecnologías web</h3>

<dl>
  <dt>¿Qué es la arquitectura cliente-servidor?</dt>
  <dd>
    Es una forma de comunicación entre dos máquinas, en ella, una máquina toma
    el papel de cliente que solicita unos servicios a otra máquina que actua de
    servidor.
  </dd>
  <dt>¿Qué es un servidor web?</dt>
  <dd>
    Un servidor web es un software o hardware que almacena, procesa y entrega
    páginas web a los clientes que las solicitan a través de Internet.
  </dd>
  <dt>Apache</dt>
  <dd>
    Apache es uno de los servidores web mas populares. Es de código abierto.
  </dd>
  <dt>XAMPP</dt>
  <dd>
    XAMPP es un software que facilita la creación de un entorno de desarrollo web local en una variedad de sistemas operativos, incluyendo Windows, macOS y Linux. El nombre "XAMPP" es un acrónimo que significa:

    <ul>
      <li>
        X: se refiere a los diferentes sistemas operativos en los que puede instalarse (por ejemplo, Windows, Mac, Linux).
      </li>
      <li>
        A: Apache, que es un servidor web.
      </li>
      <li>
        M: MySQL, que es un sistema de gestión de bases de datos.
      </li>
      <li>
        P: PHP, que es un lenguaje de programación ampliamente utilizado en el desarrollo web.
      </li>
      <li>
        P: Perl, aunque en las versiones más recientes de XAMPP, Perl a veces se reemplaza por otras tecnologías como Python o PHP.
      </li>
    </ul>
  </dd>
</dl>

<dl>
  <dt>Protocolo HTTP</dt>
  <dd>
    HTTP, que significa "Hypertext Transfer Protocol" en inglés, es el protocolo
    de comunicación utilizado en la World Wide Web (web) para la transferencia de
    datos. Es la base de la comunicación en la web y se utiliza para solicitar y
    entregar páginas web, imágenes, videos, documentos y otros recursos en línea.
  </dd>
  <dt>Método GET</dt>
  <dd>
    Es uno de los verbos del protocolo HTTP. Se utiliza para solicitar datos del
    servidor. Cuando un navegador realiza una solicitud GET, está pidiendo al
    servidor que le entregue un recurso o información, como una página web o un
    archivo.
  </dd>
  <dt>Método POST</dt>
  <dd>
    Otro de los verbos del protocolo HTTP. Se utiliza para enviar datos al servidor
    para su procesamiento. A diferencia de GET, los datos enviados mediante POST no
    son visibles en la URL y se utilizan para transmitir información confidencial o
    datos que deben procesarse en el servidor, como formularios.
  </dd>
</dl>

<dl>
  <dt>Desarrollo WEB</dt>
  <dd>
    Es una disciplina que hace uso de las tecnologías de la WEB para crear páginas o
    aplicaciones que funcionan en un navegador.
  </dd>
  <dt>PHP</dt>
  <dd>
    Es un lenguaje de programación orientado a la parte del backend, lo que quiere decir
    que es un lenguaje del lado del servidor, es éste el encargado de procesarlo para
    enviar la respuesta al cliente.
  </dd>
  <dt>Stack de soluciones</dt>
  <dd>
    Un stack o pila de soluciones es un conjunto de tecnologías que nos ayudan a desarrollar.
    Un ejemplo seria el stack MEAN, MongoDB(M), Express(E), Angular(A), Node(N).
  </dd>
</dl>
</div>
</div>

<?php require '../templates/footer.php';
