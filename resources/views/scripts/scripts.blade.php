 <!-- Vendor JS Files -->
 <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="/vendor/php-email-form/validate.js"></script>
 <script src="{{mix('js/app.js')}}"></script>

 <!-- Template Main JS File -->
 <script src="/js/main.js"></script>
 <script>
   let logout_btn = document.getElementById('logout');
   let logout_form = document.getElementById('form_logout');
   if (logout_btn != null ){
   logout_btn.addEventListener('click', function ()
     {
       logout_form.submit();
     } 
     )
   }
   </script>