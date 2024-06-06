<template>
  <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Supplier</h4>
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
                                       <label for="email">Email *</label>
                                        <input type="text" :class="`form-control ${$v.email.$error ? 'is-invalid' : ''}`" v-model="email" @input="$v.email.$touch()" @blur="$v.email.$touch()"  id="email" placeholder="Enter Email" >
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gstnumber">GST Number *</label>
                                        <input type="text" :class="`form-control ${$v.gstnumber.$error ? 'is-invalid' : ''}`" v-model="gstnumber" @input="$v.gstnumber.$touch()" @blur="$v.gstnumber.$touch()" id="gstnumber"  placeholder="Enter GST Number" >
                                         <div class="invalid-feedback">
                                            Please fill in this field.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                       <label for="city">City *</label>
                                        <input type="text" :class="`form-control ${$v.city.$error ? 'is-invalid' : ''}`" v-model="city" @input="$v.city.$touch()" @blur="$v.city.$touch()" id="city" placeholder="Enter City" >
                                        <div class="invalid-feedback">
                                            Please fill in this field.
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                         <label for="state">State *</label>
                                        <input type="text" :class="`form-control ${$v.state.$error ? 'is-invalid' : ''}`" v-model="state" @input="$v.state.$touch()" @blur="$v.state.$touch()" id="state" placeholder="Enter State" >
                                        <div class="invalid-feedback">
                                            Please fill in this field.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="country">Country *</label>
                                        <input type="text" :class="`form-control ${$v.country.$error ? 'is-invalid' : ''}`" v-model="country" @input="$v.country.$touch()" @blur="$v.country.$touch()" id="country" placeholder="Enter Country" >
                                        <div class="invalid-feedback">
                                            Please fill in this field.
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <button type="submit" class="btn btn-primary mr-2">Add Supplier</button>
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
import { required, email  , integer } from 'vuelidate/lib/validators'
export default {
    name:'AddSuppliers',
     mixins: [validationMixin],
    validations: {
      name: { required },
      gstnumber: { required },
      email:{ required , email },
      city:{required},
      country:{required},
      state:{required },
      phonenumber:{required, integer},
    },
    data(){
        return{
            name:'',
            email:'',
            phonenumber:'',
            gstnumber:'',
            city:'',
            state:'',
            country:''
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
             this.$router.push({name: 'people.suppliers'})
            }
        }}
}
</script>