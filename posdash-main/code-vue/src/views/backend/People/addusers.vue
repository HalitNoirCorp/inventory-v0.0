<template>
  <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Users</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form  @submit.prevent="submit">
                            <div class="row"> 
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label for="name">Name *</label>
                                        <input type="text" :class="`form-control ${$v.name.$error ? 'is-invalid' : ''}`" v-model="name" @input="$v.name.$touch()" @blur="$v.name.$touch()"  id="name" placeholder="Enter Name" >
                                        <div class="invalid-feedback">
                                            Please fill in this field.
                                        </div>
                                    </div>
                                </div>    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phonenumber">Phone Number *</label>
                                        <input type="number" :class="`form-control ${$v.phonenumber.$error ? 'is-invalid' : ''}`" v-model="phonenumber" @input="$v.phonenumber.$touch()" @blur="$v.phonenumber.$touch()" id="phonenumber" placeholder="Enter Phone No" >
                                        <div class="invalid-feedback">
                                            Please fill in this field.
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input type="text" :class="`form-control ${$v.email.$error ? 'is-invalid' : ''}`" v-model="email" @input="$v.email.$touch()" @blur="$v.email.$touch()"  id="email" placeholder="Enter Email" >
                                        <div class="invalid-feedback">
                                            Please fill in this field.
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Gender</label>
                                         <VueSelectPicker :options="option1" class="form-control selectpicker" v-model="selectValue" label="Male" />
                                       
                                    </div>
                                </div> 
                                <div class="col-md-12">                      
                                    <div class="form-group">
                                        <label for="uname">User Name *</label>
                                        <input type="text" :class="`form-control ${$v.uname.$error ? 'is-invalid' : ''}`" v-model="uname" @input="$v.uname.$touch()" @blur="$v.uname.$touch()"  id="uname" placeholder="Enter User Name" >
                                        <div class="invalid-feedback">
                                            Please fill in this field.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label for="pwd">Password</label>
                                        <input type="text" :class="`form-control ${$v.pwd.$error ? 'is-invalid' : ''}`" v-model="pwd" @input="$v.pwd.$touch()" @blur="$v.pwd.$touch()" id="pwd" placeholder="Enter Password" >
                                        <div class="invalid-feedback">
                                            Please fill in this field.
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label for="cpwd">Confirm Password</label>
                                        <input type="text" :class="`form-control ${$v.cpwd.$error ? 'is-invalid' : ''}`" v-model="cpwd" @input="$v.cpwd.$touch()" @blur="$v.cpwd.$touch()" id="cpwd" placeholder="Enter Confirm Password" >
                                        <div class="invalid-feedback">
                                            Please fill in this field.
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Status *</label>
                                         <VueSelectPicker :options="option2" class="form-control selectpicker" v-model="selectValue" label="Active" />
                                      
                                    </div>
                                </div>
                                <div class="col-md-12">
                                   <div class="checkbox d-inline-block mb-3">
                                        <input type="checkbox" class="checkbox-input mr-2" id="checkbox1" checked="">
                                        <label for="checkbox1">Notify User by Email</label>
                                    </div>
                                </div>                               
                            </div>                            
                            <button type="submit" class="btn btn-primary mr-2">Add Customer</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</template>
<script>
import { validationMixin } from 'vuelidate'
import { required, email ,sameAs , integer } from 'vuelidate/lib/validators'
export default {
    name:'AddUsers',
     mixins: [validationMixin],
    validations: {
      name: { required },
      uname: { required },
      email:{ required , email },
      pwd:{required},
      cpwd:{required , sameAsPassword : sameAs('pwd')},
      phonenumber:{required, integer},
    },
    data(){
        return{
            name:'',
            phonenumber: '',
            uname: '',
            email:'',
            pwd:'',
            cpwd:'',
            selectValue:'',
            option1:[
                  {value: 1, text: 'Male'},
                  {value: 2, text: 'Female'},
                  ],
                  option2:[
                  {value: 1, text: 'Active'},
                  {value: 2, text: 'Inactive'},
                  ],
        }
    },
     methods: {
        submit() {
            this.$v.$touch()
            if (this.$v.$invalid) {
         this.submitStatus = true
         window.scrollTo({ top: 0, behavior: 'smooth' });
            }else{    
            this.submitStatus = false
             this.$router.push({name: 'people.users'})
            }
        }}
}
</script>