<template>
    <section class="login-content">
         <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
               <div class="col-lg-8">
                  <div class="card auth-card">
                     <div class="card-body p-0">
                        <div class="d-flex align-items-center auth-content">
                           <div class="col-lg-7 align-self-center">
                              <div class="p-3">
                                 <img src="@/assets/images/login/mail.png" class="img-fluid" width="80" alt="">
                                 <h2 class="mt-3 mb-0">Success !</h2>
                                 <p class="cnf-mail mb-1">A email has been send to youremail@domain.com. Please check for an
                                    email from company and click
                                    on the included link to reset your password.</p>
                                 <div class="d-inline-block w-100">
                                    <router-link :to="{name:'layout.dashboard1'}" class="btn btn-primary mt-3">Back to Home</router-link>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-5 content-right">
                              <img src="@/assets/images/login/01.png" class="img-fluid image-right" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
</template>
<script>
export default {
    name:'ConfirmMail'
}
</script>