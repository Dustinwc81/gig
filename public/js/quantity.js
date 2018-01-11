(function(){
   const classname = document.querySelectorAll('.quantity')

   Array.from(classname).forEach(function(element) {
      element.addEventListener('change', function() {
         axios.post('/user', {
             firstName: 'Fred',
             lastName: 'Flintstone'
           })
           .then(function (response) {
             console.log(response);
           })
           .catch(function (error) {
             console.log(error);
           });
      })
   })
})();
