<html>
  <head>
      <tite>music app</title>
      <script src="./js/vue.js"></script>  
  </head>

  <body>

    <div id="app">
      {{ message }}
    </div>

    <script>
    
    new Vue({
        el:'#app',
        data: {
            message:'Hello'
        }
    })
    </script> 
  </body>
</html>