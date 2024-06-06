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
                                 <img src="@/assets/images/user/1.png" class="rounded avatar-80 mb-3" alt="">
                                 <h2 class="mb-2">Hi ! Ruben Dokidis</h2>
                                 <p>Enter your password to access the admin.</p>
                                 <form @submit.prevent="onSubmit()"> 
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" type="password" placeholder=" ">
                                             <label>Password</label>
                                          </div>
                                       </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Login</button>
                                 </form>
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
    name:'LockScreen',
    methods: {
      onSubmit () {
         this.$router.push({name: 'layout.dashboard1'})
      }
  }
}
</script>