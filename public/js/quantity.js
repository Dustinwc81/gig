(function(){
   const classname = document.querySelectorAll('.quantity')

   Array.from(classname).forEach(function(element) {
      element.addEventListener('change', function() {
         const id = element.getAttribute('data-id')
         axios.patch(`/cart/${id}`, {
             quantity: this.value
           })
           .then(function (response) {
             console.log(response);
             window.location.href = '/cart'
           })
           .catch(function (error) {
             console.log(error);
           });
      })
   })
})();
