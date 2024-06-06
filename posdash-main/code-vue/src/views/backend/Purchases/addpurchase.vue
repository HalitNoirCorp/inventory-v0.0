<template>
   <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Purchase</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form  @submit.prevent="submit" >
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="dob">Date *</label>
                                        <input type="date" class="form-control" id="dob" name="dob" />
                                    </div>
                                </div>  
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label for="purchaseno">Purchase No *</label>
                                        <input type="text" :class="`form-control ${$v.purchaseno.$error ? 'is-invalid' : ''}`" id="purchaseno" v-model="purchaseno" @input="$v.purchaseno.$touch()" @blur="$v.purchaseno.$touch()" placeholder="Purchase No" >
                                          <div class="invalid-feedback">
                                            Please fill in this field.
                                        </div>
                                    </div>
                                </div>    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Supplier</label>
                                         <VueSelectPicker :options="option1" class="form-control selectpicker" v-model="selectValue" label="Select Supplier" />
                                    </div>
                                </div> 
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label>Received</label>
                                        <VueSelectPicker :options="option2" class="form-control selectpicker" v-model="selectValue" label="Received" />
                                       
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Order Tax</label>
                                        <VueSelectPicker :options="option3" class="form-control selectpicker" v-model="selectValue" label="No Text" />
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Discount</label>
                                        <input type="text" class="form-control" placeholder="Discount">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Shipping</label>
                                        <input type="text" class="form-control" placeholder="Shipping">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="payment">Payment *</label>
                                        <input type="number" :class="`form-control ${$v.payment.$error ? 'is-invalid' : ''}`" id="payment" v-model="payment" @input="$v.payment.$touch()" @blur="$v.payment.$touch()" placeholder="Payment" >
                                         <div class="invalid-feedback">
                                            Please fill in this field.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Note *</label>
                                         <vue-editor :editorToolbar="customToolbar" placeholder="Compose an epic..."></vue-editor> 
                                    </div>
                                </div>                                
                            </div>                            
                            <button type="submit" class="btn btn-primary mr-2">Add Purchase</button>
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
import { required ,integer	} from 'vuelidate/lib/validators'   
import { VueEditor } from 'vue2-editor'
export default {
    name:'Addpurchase',
     mixins: [validationMixin],
    validations: {
      purchaseno: { required },
      payment: { required ,integer},
      },
    components:{
       VueEditor,
    },
    data(){
        return{
            customToolbar: [["bold",  "underline","italic","image","code"]],
             purchaseno:'',
             payment:'',
            selectValue:'',
            option1:[
                  {value: 1, text: 'Select Supplier'},
                  {value: 2, text: 'Test Supplier'}
                  ],
             option2:[
                  {value: 1, text: 'Received'},
                  {value: 2, text: 'Not received yet'}
                  ],
                  option3:[
                  {value: 1, text: 'No Text'},
                  {value: 2, text: 'GST @5%'},
                  {value: 3, text: 'VAT @20%'},
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
             this.$router.push({name: 'purchase.listpurchases'})
            
            }
        }}
}
</script>
<style>
#quill-container{
    height: 50px;
}
#quill-container .ql-editor{
    min-height: unset;
}
</style>