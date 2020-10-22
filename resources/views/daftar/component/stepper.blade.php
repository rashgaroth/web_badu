<ul class="stepper horizontal">
   <li class="step active">
      <div class="step-title waves-effect">E-mail</div>
      <div class="step-content">
         <!-- Your step content goes here (like inputs or so) -->
         <div class="step-actions">
            <!-- Here goes your actions buttons -->
            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
         </div>
      </div>
   </li>
</ul>

<script>
   var stepper = document.querySelector('.stepper');
   var stepperInstace = new MStepper(stepper, {
      // options
      firstActive: 0 // this is the default
      autoFormCreation: true,
      feedbackPreloader: '<div class="spinner-layer spinner-blue-only">aa</div>'
   });
</script>