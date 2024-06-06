<template>
  <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add Product</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="submit" >
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Product Type *</label>
                                         <VueSelectPicker :options="option1" class="form-control selectpicker" v-model="selectValue" label="Standard" />
                                    </div> 
                                </div>  
                                <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label for="name">Name *</label>
                                        <input type="text" :class="`form-control ${$v.name.$error ? 'is-invalid' : ''}`" id="name" v-model="name" @input="$v.name.$touch()" @blur="$v.name.$touch()"    placeholder="Enter Name" data-errors="Please Enter Name." >
                                         <div class="invalid-feedback">
                                            Please fill in this field.
                                        </div>
                                    </div>
                                </div>    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  for="Code">Code *</label>
                                        <input type="text"  :class="`form-control ${$v.Code.$error ? 'is-invalid' : ''}`" id="Code" v-model="Code" @input="$v.Code.$touch()" @blur="$v.Code.$touch()" placeholder="Enter Code" data-errors="Please Enter Code." >
                                        <div class="help-block with-errors invalid-feedback">
                                             Please fill in this field.
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label>Barcode Symbology *</label>
                                         <VueSelectPicker :options="option2" class="form-control selectpicker" v-model="selectValue" label="CREM01" />
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Category *</label>
                                        <VueSelectPicker :options="option3" class="form-control selectpicker" v-model="selectValue" label="Beauty" /> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Cost">Cost *</label>
                                        <input type="number"   :class="`form-control ${$v.Cost.$error ? 'is-invalid' : ''}`" id="Cost" v-model="Cost" @input="$v.Cost.$touch()" @blur="$v.Cost.$touch()"  placeholder="Enter Cost" data-errors="Please Enter Cost." >
                                         <div class="invalid-feedback">
                                            Please fill in this field.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  for="Price">Price *</label>
                                        <input type="number" :class="`form-control ${$v.Price.$error ? 'is-invalid' : ''}`" id="Price" v-model="Price" @input="$v.Price.$touch()" @blur="$v.Price.$touch()"  placeholder="Enter Price" data-errors="Please Enter Price." >
                                         <div class="invalid-feedback">
                                            Please fill in this field.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tax Method *</label>
                                         <VueSelectPicker :options="option4" class="form-control selectpicker" v-model="selectValue" label="Exclusive" /> 
                                    </div>
                                </div>
                                <div class="col-md-12">                                    
                                    <div class="form-group">
                                        <label for="Quantity">Quantity *</label>
                                        <input type="number" :class="`form-control ${$v.Quantity.$error ? 'is-invalid' : ''}`" id="Quantity" v-model="Quantity" @input="$v.Quantity.$touch()" @blur="$v.Quantity.$touch()"  placeholder="Enter Quantity" >
                                         <div class="invalid-feedback">
                                            Please fill in this field.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control image-file" name="pic" accept="image/*">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description / Product Details</label>
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>                            
                            <button  type="submit" class="btn btn-primary mr-2">Add Product</button>
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
export default {
    name:'addProduct',
    mixins: [validationMixin],
    validations: {
      name: { required },
      Code: { required },
      Cost: { required,integer	 },
     Price:{ required,integer  },
      Quantity:{required ,integer},
    },
    mounted () {
       
    },
    data(){
        return{   
            name: '',
            Code: '',
            Cost: '',
            Price:'',
            Quantity:'',
            selectValue: '',
             option1: [
                {value: 1, text: 'Standard'},
                {value: 2, text: 'Combo'},
                {value: 3, text: 'Digital'},
                {value: 4, text: 'Service'},
            ],
            option2: [
                {value: 1, text: 'CREM01'},
                {value: 2, text: 'UM01'},
                {value: 3, text: 'SEM01'},
                {value: 4, text: 'COF01'},
                {value: 5, text: 'FUN01'},
                {value: 6, text: 'DIS01'},
                {value: 7, text: 'NIS01'},
            ],
              option3: [
                {value: 1, text: 'Beauty'},
                {value: 2, text: 'Grocery'},
                {value: 3, text: 'Food'},
                {value: 4, text: 'Furniture'},
                {value: 5, text: 'Shoes'},
                {value: 6, text: 'Frames'},
                {value: 7, text: 'Jewellery'},
            ],
            option4: [
                {value: 1, text: 'Exclusive'},
                {value: 2, text: 'Inclusive'},
            ],
        }
    },
    methods: {
        submit() {
            this.$v.$touch()
            if (this.$v.$invalid) {  
            this.submitStatus = true;
              window.scrollTo({ top: 0, behavior: 'smooth' });
             
            }else{
            this.submitStatus = false
            this.$router.push({name: 'product.listproduct'})
            }
        }     
        }
}
</script>