<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css" rel="stylesheet">
  <title>Pusher Test</title>
</head>
<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-6">
        <form action="/" method="post">
          @csrf
          <input name="msg" id=""  placeholder="Escreva sua mensagem" />
          <button>Enviar</button>
        </form>
      </div>
      <div class="col-md-6">
        <h1>Mensagens</h1>
        <ul id="teste">
          <li> {{$teste}}</li>
        </ul>
      </div> 
    </div>
  </div>
  
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js"></script>
  <script src="https://js.pusher.com/5.1/pusher.min.js"></script>
  <script>
    let txt  = 'teste'
    let ul = document.getElementById('teste')
    let li = document.createElement('li')
    li.appendChild(document.createTextNode(txt))
    ul.appendChild(li)

      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;
  
      var pusher = new Pusher('93551fcbc823c6f1fe0a', {
        cluster: 'us2',
        forceTLS: true
      });
  
      var channel = pusher.subscribe('my-channel');
      channel.bind('my-event', function(data) {
        let txt  = data.message
        let ul = document.getElementById('teste')
        let li = document.createElement('li')
        li.appendChild(document.createTextNode(txt))
        ul.appendChild(li)
        //alert(JSON.stringify(data));
        //let 
        console.log(data)
      });
    </script>
</body>
</html>

